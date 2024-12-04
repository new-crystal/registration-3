<style>
    .detail_table {
        display: flex;
        align-items: left;
        justify-content: space-between;
        margin-top: 5rem;
    }

    .detail_table>table {
        width: 48%;
        border: 1px solid #ddd;
    }

    .detail_table>table th,
    .detail_table>table td {
        border: 1px solid #ddd;
        padding-left: 15px;
    }

    .detail_table table th {
        width: 25%;
        background-color: #eee;
    }

    .detail_table>table input {
        border: none
    }

    .detail_table>table input:focus {
        outline: 1px solid #000;
    }

    select {
        padding: 4px 8px;
    }

    .access_btn{
        width: 150px;
        height: 40px;
        background-color: orangered;
        font-size: 20px;
        font-weight: 800;
        margin-left: 16px;
    }

    .access_btn:hover{
        background-color: orange;
    }

       
    .alert {
        width: 100%;
        height: 260px;
        background: #ffc425;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #FFF;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0.85;
        z-index: 999;
    }

    .alert>p{
        font-size: 5.5rem;
        font-weight: 700;
        position: relative;
        /* animation: fadeInUp 1s; */
        -webkit-text-stroke-width: 5px;
        -webkit-text-stroke-color: #004471;
    }

    .alert>h6 {
        font-size: 2.5rem;
        font-weight: 600;
        position: relative;
        /* animation: fadeInUp 1s; */
        -webkit-text-stroke-width: 3px;
        -webkit-text-stroke-color: #004471;
        }

</style>
<?php
$contry = "";
$date = "";
$type1 = "";
$remark3 = "";


// $luckyNum = substr($item['registration_no'], 11, 4);
// if ($item['onsite_reg'] == '0') {
//     $on_site = '사전등록';
// } else {
//     $on_site = '현장등록';
// }

?>
<!-- container section start -->
<section id="container" class="">

    <!--main content start-->
    <?php echo form_open('/admin/update_user?n=' . $item['registration_no'], 'id="updateForm" name="updateForm"') ?>

    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <div class="panel-body">
                        <div class="detail_table">
                            <table>
                                <tr>
                                    <td colspan="2"><button type="button" class="btn btn-primary" onclick="print('<?php echo $item['registration_no']; ?>')">QR Print</button>
                                    <button type="button" onclick="saveTime('<?php echo $item['registration_no']; ?>')" class="access_btn">출결</button>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <th style="background-color: #fb8500">하단 띠지</th>
                                    <td> <input class="form-control attendance" type="text" value="<?php echo $item['attendance_type']; ?>" name="attendance_type" id="attendance_type">
                                        <select class="form-control input-lg m-bot15" id="attendance_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Participants">Participants</option>
                                            <option value="Speaker">Speaker</option>
                                            <option value="Chairperson">Chairperson</option>
                                            <option value="Moderator">Moderator</option>
                                            <option value="Panel">Panel</option>
                                            <option value="Preceptor">Preceptor</option>
                                            <option value="Organizer">Organizer</option>
                                            <option value="Oral Presenter">Oral Presenter</option>
                                            <option value="Poster Oral Presenter">Poster Oral Presenter</option>
                                            <option value="Satellite Attendee">Satellite Attendee</option>
                                            <option value="Press">Press</option>
                                            <option value="Exhibitior">Exhibitior</option>
                                        </select>
                                    </td>
                                </tr> -->
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 1</th>
                                    <td><input class="form-control" type="text" name="remark1" id="remark1" value="<?php echo $item['remark1']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 2</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['remark2']; ?>" name="remark2" id="remark2">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 3</th>
                                    <td><input class="form-control" type="text" name="remark3" value="<?php echo $item['remark3']; ?>" id="remark3">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 4</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['remark4']; ?>" name="remark4" id="remark4">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 5</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['remark5']; ?>" name="remark5" id="remark5">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">special_request_food</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['special_request_food']; ?>" name="special_request_food" id="special_request_food">
                                    </td>
                                </tr>

                                <tr>
                                    <th style="background-color: #fb8500">memo</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['memo']; ?>" name="memo" id="memo">
                                    </td>
                                </tr>
                            </table>


                            <table>
                                <tr>
                                    <th>등록비</th>
                                    <td><input class="form-control" type="text" name="fee" value="<?php echo $item['fee']; ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th>special request food</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['special_request_food']; ?>" size="16" class="form-control" name="special_request_food">

                                    </td>
                                </tr>

                                <tr>
                                    <th>1일차 오찬 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day1_luncheon_yn']; ?>" size="16" class="form-control yn" name="day1_luncheon_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>1일차 satellite 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day1_satellite_yn']; ?>" size="16" class="form-control yn" name="day1_satellite_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>2일차 조식 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day2_breakfast_yn']; ?>" size="16" class="form-control yn" name="day2_breakfast_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>2일차 오찬 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day2_luncheon_yn']; ?>" size="16" class="form-control yn" name="day2_luncheon_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>2일차 satellite 여부</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day2_satellite_yn']; ?>" size="16" class="form-control yn" name="day2_satellite_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>참가유형</th>
                                    <td> <input class="form-control attendance" type="text" value="<?php echo $item['attendance_type']; ?>" name="attendance_type" id="attendance_type">
                                        <select class="form-control input-lg m-bot15" id="attendance_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Participants">Participants</option>
                                            <option value="Speaker">Speaker</option>
                                            <option value="Chairperson">Chairperson</option>
                                            <option value="Committee">Committee</option>
                                            <option value="Panel">Panel</option>
                                            <option value="Sponsor">Sponsor</option>
                                            <!-- <option value="Organizer">Organizer</option>
                                            <option value="Oral Presenter">Oral Presenter</option>
                                            <option value="Poster Oral Presenter">Poster Oral Presenter</option>
                                            <option value="Satellite Attendee">Satellite Attendee</option> -->
                                            <option value="Press">Press</option>
                                            <!-- <option value="Exhibitior">Exhibitior</option> -->
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>참석자구분</th>
                                    <td>
                                        <input class="form-control member_type" type="text" value="<?php echo $item['member_type']; ?>" name="member_type" id="type1">
                                        <select class="form-control input-lg m-bot15" id="member_type_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Certified M.D.">Certified M.D.</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Researcher">Researcher</option>
                                            <option value="Nutritionist">Nutritionist</option>
                                            <option value="Exercise Specialist">Exercise Specialist</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Trainee">Trainee</option>
                                            <option value="Student">Student</option>
                                            <option value="Others">Others</option>
                                            <option value="Trainee (전공의)">Trainee (전공의)</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="detail_table">
                            <table>
                                <tr>
                                    <th>Registration No.</th>
                                    <td style="background-color:#fafafa;"> <input class="form-control" type="text" value="<?php echo $item['registration_no']; ?>" name="registration_no" id="registration_no" readonly></td>
                                </tr>

                                <tr>
                                    <th>등록시간</th>
                                    <td> <input id="time" type="text" value="<?php echo substr($item['time'], 0, 10) ?>" size="16" class="form-control" name="time">
                                    </td>
                                </tr>

                                <tr>
                                    <th>국가</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['nation']; ?>" name="nation" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>이름</th>
                                    <td>
                                        <div style="display: flex; align-items: center;"><span>firstname:</span> <input class="form-control" type="text" value="<?php echo $item['first_name']; ?>" name="first_name" id="nick_name"></div>
                                        <div style="display: flex; align-items: center;"><span>lastname:</span> <input class="form-control" type="text" value="<?php echo $item['last_name']; ?>" name="last_name" id="nick_name"></div>
                                        <div style="display: flex; align-items: center;"><span>
                                                fullname(수정불가):</span>
                                            <input class="form-control" type="text" value="<?php echo $item['first_name'] . " " . $item['last_name']; ?>" name="fullname" id="nick_name" style="width:330px;background-color:#fafafa;" disabled>
                                        </div>
                                        <div style="display: flex; align-items: center;">
                                            <p style="margin:0">성함(국문):</p> <input class="form-control" type="text" style="width:230px" value="<?php echo $item['name_kor']; ?>" name="name_kor" id="nick_name">
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <th>소속</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $item['affiliation']; ?>" name="affiliation" id="org" disabled>

                                    </td>
                                </tr>
                                <tr>
                                    <th>네임텍 소속</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $item['org_nametag']; ?>" name="org_nametag" id="org_nametag">
                                    </td>
                                </tr>
                                <tr>
                                    <th>회원유무</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $item['member_status']; ?>" name="member_status" id="member_status">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Department</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['department']; ?>" name="department" id="org">
                                    </td>
                                </tr>

                                <tr>
                                    <th>면허번호</th>
                                    <td>
                                        <div style="display:flex;  align-items: center;">
                                            <input class="form-control" type="text" value="<?php echo $item['licence_number']; ?>" name="licence_number" id="licence_number">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>전문의번호</th>
                                    <td>
                                        <div style="display:flex;  align-items: center;">
                                            <input class="form-control" type="text" value="<?php echo $item['specialty_number']; ?>" name="specialty_number" id="specialty_number">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th>연락처</th>
                                    <td>
                                        <div style="display:flex;  align-items: center;">
                                            <input class="form-control" type="text" value="<?php echo $item['phone']; ?>" name="phone" id="phone">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th>E-mail</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['email']; ?>" name="email" id="email"></td>
                                </tr>

                                <tr>
                                    <th>qr print 여부</th>
                                    <td><input class="form-control yn" type="text" value="<?php echo $item['qr_print']; ?>" name="qr_print" id="phone"></td>
                                </tr>
                                <tr>
                                    <th>day 1 출결여부</th>
                                    <td><input class="form-control yn" type="text" value="<?php echo $item['qr_chk_day_1']; ?>" name="qr_chk_day_1" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day 2 출결여부</th>
                                    <td><input class="form-control yn" type="text" value="<?php echo $item['qr_chk_day_2']; ?>" name="qr_chk_day_2" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day 3 출결여부</th>
                                    <td><input class="form-control yn" type="text" value="<?php echo $item['qr_chk_day_3']; ?>" name="qr_chk_day_3" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Where did you get the information about the conference?</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['conference_info']; ?>" name="conference_info" id="phone"></td>
                                </tr>
                                <tr>
                                    <th>결제수단</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['deposit_method']; ?>" name="deposit_method" id="etc4"></td>
                                </tr>

                                <!-- <tr>
                                    <th>결제수단<br>(은행/계좌번호)</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['etc4']; ?>" name="etc4" id="etc4"></td>
                                </tr> -->

                                <tr>
                                    <th>결제상태</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['deposit']; ?>" name="deposit" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>결제일</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['deposit_date']; ?>" size="16" class="form-control" name="deposit_date">

                                    </td>
                                </tr>
                            </table>

                        </div>

                        <div clss="btn_group" style="float: right;">
                            <button type="submit" data-toggle="modal" class="btn btn-primary">수정</button>
                            </form>
                            <button type="button" class="btn btn-danger" onclick="removeUser('<?php echo $item['registration_no']; ?>')">삭제</button>

                        </div>
                    </div>
            </div>
            <div class="alert" style="display:none;" id="alert">
            <p class="time"></p>
            <p class="alert_text">출결 체크 완료!</p>
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
    $(document).ready(function() {
        // var type1_val = $('select#type1').attr('data-select');
        // $('select#type1 option[value=' + type1_val + ']').attr('selected', 'selected');
        // var type2_val = $('select#type2').attr('data-select');
        // $('select#type2 option[value=' + type2_val + ']').attr('selected', 'selected');
        // var type3_val = $('select#type3').attr('data-select');
        // $('select#type3 option[value=' + type3_val + ']').attr('selected', 'selected');

        var registration_no = $('#registration_no').val();
        $("#updateForm").attr("action", "/admin/update_user?n=" + registration_no);
    });

    const attendance = document.querySelector(".attendance");
    const attendance_select = document.querySelector("#attendance_select")

    const member_type = document.querySelector(".member_type");
    const member_type_select = document.querySelector("#member_type_select")

    const ynList = document.querySelectorAll(".yn")


    /**참가 유형 select box */
    attendance_select.addEventListener("change", () => {
        attendance.value = attendance_select.options[attendance_select.selectedIndex].value;
    })

    /**member_type select box */
    member_type_select.addEventListener("change", () => {
        member_type.value = member_type_select.options[member_type_select.selectedIndex].value;
    })

    function removeUser(reg) {
        if (window.confirm("삭제하시겠습니까?")) {
            window.location.href = `/admin/delete_user?d=${reg}`
        }
    }

    function print(reg) {
        const url = `/qrcode/print_file?registration_no=${reg}`
        fetch(url).then((res) => window.open(res.url))
    }

    ynList.forEach((yn) => {
        yn.addEventListener("input", (e) => {
            ynRegExp(yn.value);
            e.target.value = yn.value.replace(/[^YN]/g, '');
        })
    })

    function ynRegExp(text) {
        const re = /^[YN]$/;
        if (!re.test(text)) {
            alert("Y, N만 입력 가능합니다.")
        }
    }


    function saveTime(qrvalue){
        
        const url = "/access/add_record"
        const data = {
            reg_no : qrvalue
        }
        if(qrvalue){
            $.ajax({
                type: "POST",
                url : url,
                data: data,
                success: function(result){

                    const alert = document.querySelector("#alert");
                    const alertText = document.querySelector(".alert_text");

                    alert.style.display = "";
                    const today = new Date();
                    const time = document.querySelector(".time");

                    time.innerText = `${today.toLocaleString()}`

                    setTimeout(() => {
                        alert.style.display = "none";
                    }, 1500)
                    // window.location.reload()
                },
                error:function(e){  
                    console.log(e)
                    alert("출결등록 이슈가 발생했습니다. 관리자에게 문의해주세요.")
                }
            })  
        }
    }
</script>


</body>

</html>