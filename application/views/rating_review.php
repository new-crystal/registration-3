<style>
    .detail_table {
        display: flex;
        align-items: left;
        justify-content: space-between;
        /* margin-top: 5rem; */
    }

    .detail_table>table {
        width: 70%;
        border: 1px solid #ddd;
    }
    .reviewer_table > table{
        width: 80%;
        margin : 0 auto;
    }
    .reviewer_table > table th,
    .reviewer_table > table td{
        border: 1px solid #ddd;
        text-align: center;
        padding: 8px;
    }

    .reviewer_table table th {
        background-color: #eee;
    }

    .detail_table>table th,
    .detail_table>table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .detail_table table th {
        /* width: 25%; */
        background-color: #eee;
    }

    .score_table > table {
        width: 30%;
    }

    .review_title{
        text-align: center;
        font-weight: 700;
        margin-top: 50px;
    }

    .wrapper{
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }
    .review_sub_title{
        text-align: center;
    }

    .home_btn{
        display: block;
        width: 150px;
        height: 40px;
        background-color: #ddd;
        border: none;
        margin : 20px auto;
        font-weight: 600;
    }

    .home_btn:hover{
        background-color: #8d8c8c;
    }
</style>

<!-- container section start -->
<section id="container" class="">

    <!--main content start-->
    <?php 
    $etc_sum = 0;
    $user = 0;
     //print_r($reviewer)
    ?>

    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <h1 class="review_title">점수 확인</h1>
                    <!-- <p class="review_sub_title">점수 수정을 원하실 경우 관리자에게 문의해주세요.</p> -->
                    <div class="panel-body detail_table">
                        <table>
                                <colgroup>
                                    <col width="20%">
                                    <col width="20%">
                                    <col width="20%">
                                    <col>
                                </colgroup>
                            <tr>
                                <th>심사위원 성함</th>
                                <th>심사위원 코드</th>
                                <th>심사위원 소속</th>
                            </tr>
                                <tr>
                                    <td><?php echo $reviewer[0]['nick_name']; ?></td>
                                    <td><?php echo $reviewer[0]['code']; ?></td>
                                    <td><?php echo $reviewer[0]['org']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-body reviewer_table">
                        <table>
                                <colgroup>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                    <col>
                                </colgroup>
                                <tr>
                                    <th>초록 접수 번호</th>
                                    <th>연구의 <br>창의성</th>
                                    <th>방법의 <br>타당성</th>
                                    <th>결과의 <br>영향력</th>
                                    <th>발표의 <br>우수성</th>
                                    <th>COI</th>
                                    <th>총점</th>
                                    <!-- <th>조정점수</th> -->
                                </tr>
                                <?php foreach($reviewer as $detail){ 
                                     $etc_sum += $detail['etc1'];
                                     if($detail['coi'] === "N"){
                                        $user++;
                                     }
                                    ?>
                                <tr>
                                    <td><?php echo $detail['submission_code']; ?></td>
                                    <td><?php echo $detail['score1']; ?></td>
                                    <td><?php echo $detail['score2']; ?></td>
                                    <td><?php echo $detail['score3']; ?></td>
                                    <td><?php echo $detail['score4']; ?></td>
                                    <td><?php echo $detail['coi']; ?></td>
                                    <td><?php echo $detail['score1'] + $detail['score2'] + $detail['score3'] + $detail['score4']; ?></td>
                                    <!-- <td><?php echo $detail['etc1']; ?></td> -->
                                </tr>
                            <?php } ?>
                            </table>    
                        </div>
                       <button id="home" class="home_btn"><i class="icon-home2"></i>  Home</button>
            </div>
    </section>
    </div>
    </div>

    <!-- Basic Forms & Horizontal Forms-->

</section>
</section>
<script src="/assets/js/form-component.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script>
    const btn = document.querySelector("#home");

    btn.addEventListener("click", ()=>{
        window.location.href = "/score"
    })
</script>
</body>

</html>