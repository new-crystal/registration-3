
<script src="https://t1.kakaocdn.net/kakao_js_sdk/2.4.0/kakao.min.js"
  integrity="sha384-mXVrIX2T/Kszp6Z0aEWaA8Nm7J6/ZeWXbL8UpGRjKwWe56Srd/iyNmWMBhcItAjH" crossorigin="anonymous"></script>
<script>
  Kakao.init(''); // 사용하려는 앱의 JavaScript 키 입력

//   Kakao.Auth.authorize({
//         redirectUri: 'https://reg3.webeon.net/admin',
//     });

    Kakao.API.request({
     url: '/v2/user/me',
    })
    .then(function(response) {
        console.log(response);
    })
    .catch(function(error) {
        console.log(error);
    });
</script>