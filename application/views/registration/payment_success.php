<?php
    echo json_encode()
?>
<script>

        var express= require('express');
        var bodyParser = require('body-parser');
        var app = express();

          app.use(bodyParser.json());
            alert(bodyParser.json());
          // "/payments/complete"에 대한 POST 요청을 처리
          app.post("registration/payment_success", async (req, res) => {
            try {
              const { imp_uid, merchant_uid } = req.body; // req의 body에서 imp_uid, merchant_uid 추출

              // 액세스 토큰(access token) 발급 받기
              const getToken = await axios({
                url: "https://api.iamport.kr/users/getToken",
                method: "post", // POST method
                headers: { "Content-Type": "application/json" }, // "Content-Type": "application/json"
                data: {
                  imp_key: "3675966806934170", // REST API키
                  imp_secret: "ApqhSm8gXROWxqMz6JWATDGT5n9h3U5DkwUcS3tQUhNrIz1PiXpbB65HtfZw95atB4Ft89j3q6v9GxYY" // REST API Secret
                }
              });
              const { access_token } = getToken.data.response; // 인증 토큰

              // imp_uid로 아임포트 서버에서 결제 정보 조회
              const getPaymentData = await axios({
                url: `https://api.iamport.kr/payments/${imp_uid}`, // imp_uid 전달
                method: "get", // GET method
                headers: { "Authorization": access_token } // 인증 토큰 Authorization header에 추가
              });
              const paymentData = getPaymentData.data.response; // 조회한 결제 정보

              // DB에서 결제되어야 하는 금액 조회
              const order = await Orders.findById(paymentData.merchant_uid);
              const amountToBePaid = order.amount; // 결제 되어야 하는 금액

              // 결제 검증하기
              const { amount, status } = paymentData;
              if (amount === amountToBePaid) { // 결제 금액 일치. 결제 된 금액 === 결제 되어야 하는 금액
                await Orders.findByIdAndUpdate(merchant_uid, { $set: paymentData }); // DB에 결제 정보 저장
                res.send({ status: "success", message: "일반 결제 성공" });
              } else { // 결제 금액 불일치. 위/변조 된 결제
                throw { status: "forgery", message: "위조된 결제시도" };
              }
            } catch (e) {
              res.status(400).send(e);
            }
          });

</script>
