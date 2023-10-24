<style>
.detail_table {
    display: flex;
    align-items: left;
    justify-content: space-between;
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
</style>
<?php
$contry = "";
$date = "";
$type1 = "";
$remark3 = "";

if ($item['nation'] == 'Korea') $contry = 'KOR';
else {
    $contry = 'ENG';
}
if ($item['attendance_date'] == "Full registration") {
    $date = "Full registration";
} else {
    $date = "One-day registration";
}
if ($item['kes_member_status'] == "Non-Member") {
    $type1 = $item['member_type'] . ' - ' . "Non-Member";
} else {
    $type1 = $item['member_type'] . ' - ' . "member";
}

if ($item['kes_member_status'] != "Non-Member" && $item['first_time_yn'] == 'Y') {
    $remark3 = 'Y';
} else {
    $remark3 = 'N';
}

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
                                    <th>Registration No.</th>
                                    <td style="background-color:#fafafa;"> <input class="form-control" type="text"
                                            value="<?php echo $item['registration_no']; ?>" name="registration_no"
                                            id="registration_no" readonly></td>
                                </tr>
                                <tr>
                                    <th>국적구분<br>(수정불가)</th>
                                    <td> <input class="form-control" style="background-color:#fafafa;" type="text"
                                            value="<?php echo $contry;  ?>" name="contry" id="contry" disabled></td>
                                </tr>
                                <tr>
                                    <th>등록시간</th>
                                    <td> <input id="time" type="text" value="<?php echo substr($item['time'], 0, 10) ?>"
                                            size="16" class="form-control" name="time">
                                    </td>
                                </tr>
                                <tr>
                                    <th>등록구분<br>(Early / Pre / On-site)</th>
                                    <td> <input class="form-control onsite_reg" type="text"
                                            value="<?php echo $item['onsite_reg'];  ?>" name="onsite_reg"
                                            id="onsite_reg">
                                        <select class="onsite_reg_select input-lg m-bot15">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Pre-registration">Pre-registration</option>
                                            <option value="Early-bird registration">Early-bird registration</option>
                                            <option value="On-site registration">On-site registration</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Attendance date<br>(Full / One)<br>(수정불가)</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $date; ?>"
                                            name="date" id="date" style="background-color:#fafafa;" disabled></td>
                                </tr>
                                <tr>
                                    <th>KES Membership Check-up</th>
                                    <td> <input type="text" class="form-control memeber_status"
                                            value="<?php echo  $item['kes_member_status']; ?>" name="kes_member_status"
                                            id="ln">
                                        <select class="memeber_status_select input-lg m-bot15">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Non-Member">Non-Member</option>
                                            <option value="Member"> Member ( ID : kesId 필수입력 )</option>
                                        </select>
                                        <input class="kes_id" placeholder="KES ID를 적어주세요"
                                            style="padding:8px; display:none; border:1px solid red" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>국가</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['nation']; ?>"
                                            name="nation" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>이름</th>
                                    <td>
                                        <div style="display: flex; align-items: center;"><span>firstname:</span> <input
                                                class="form-control" type="text"
                                                value="<?php echo $item['first_name']; ?>" name="first_name"
                                                id="nick_name"></div>
                                        <div style="display: flex; align-items: center;"><span>lastname:</span> <input
                                                class="form-control" type="text"
                                                value="<?php echo $item['last_name']; ?>" name="last_name"
                                                id="nick_name"></div>
                                        <div style="display: flex; align-items: center;"><span>
                                                fullname(수정불가):</span>
                                            <input class="form-control" type="text"
                                                value="<?php echo $item['first_name'] . " " . $item['last_name']; ?>"
                                                name="fullname" id="nick_name"
                                                style="width:330px;background-color:#fafafa;" disabled>
                                        </div>
                                        <div style="display: flex; align-items: center;">
                                            <p style="margin:0">성함(국문):</p> <input class="form-control" type="text"
                                                style="width:230px" value="<?php echo $item['name_kor']; ?>"
                                                name="name_kor" id="nick_name">
                                        </div>

                                    </td>
                                </tr>

                                <tr>
                                    <th>Affiliation</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['affiliation']; ?>" name="affiliation" id="org">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Name Badge_affiliation</th>
                                    <td> <input class="form-control" type="text"
                                            value="<?php echo $item['org_nametag']; ?>" name="org_nametag"
                                            id="org_nametag">
                                    </td>
                                </tr>
                                <tr>
                                    <th>소속</th>
                                    <td>
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['affiliation_kor']; ?>" name="affiliation_kor"
                                            id="org">
                                    </td>
                                </tr>
                                <tr>
                                    <th>부서</th>
                                    <td>
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['department']; ?>" name="department" id="org">
                                    </td>
                                </tr>
                                <tr>
                                    <th>평점신청여부</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['is_score']; ?>" name="is_score" id="is_score">
                                    </td>
                                </tr>
                                <tr>
                                    <th>의사면허번호</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['licence_number']; ?>" name="licence_number"
                                            id="ln">
                                    </td>
                                </tr>
                                <tr>
                                    <th>전문의번호</th>
                                    <td> <input type="text" class="form-control"
                                            value="<?php echo $item['specialty_number']; ?>" name="specialty_number"
                                            id="sn"></td>
                                </tr>
                                <tr>
                                    <th>직책</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['etc3']; ?>"
                                            name="etc3" id="etc3"></td>
                                </tr>
                                <tr>
                                    <th>연락처</th>
                                    <td>
                                        <div style="display:flex;  align-items: center;">
                                            <input class="form-control" type="text"
                                                value="<?php echo $item['phone']; ?>" name="phone" id="phone">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>참가유형</th>
                                    <td> <input class="form-control attendance" type="text"
                                            value="<?php echo $item['attendance_type']; ?>" name="attendance_type"
                                            id="attendance_type">
                                        <select class="form-control input-lg m-bot15" id="attendance_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Participant">Participant</option>
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
                                </tr>
                                <tr>
                                    <th>참석자구분1<br>(수정불가)</th>
                                    <td> <input class="form-control" type="text" value="<?php echo $type1; ?>"
                                            name="type1" id="type1" style="background-color:#fafafa;" disabled></td>
                                </tr>

                                <tr>
                                    <th>참석자구분1(수정용)</th>
                                    <td>
                                        <input class="form-control member_type" type="text"
                                            value="<?php echo $item['member_type']; ?>" name="member_type" id="type1">
                                        <select class="form-control input-lg m-bot15" id="member_type_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Medical Doctor">Medical Doctor</option>
                                            <option value="Professor">Professor</option>
                                            <option value="Trainee">Trainee</option>
                                            <option value="Student">Student</option>
                                            <option value="Other">Other</option>
                                            <option value="Corporate">Corporate</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>참석자구분2</th>
                                    <td><input class="form-control member_other_type" type="text"
                                            value="<?php echo $item['member_other_type']; ?>" name="member_other_type"
                                            id="type1">
                                        <select class="form-control input-lg m-bot15" id="member_other_type_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Fellow">Fellow</option>
                                            <option value="Resident">Resident</option>
                                            <option value="Graduate">Graduate</option>
                                            <option value="Individual Researcher">Individual Researcher</option>
                                            <option value="Public Health Doctor">Public Health Doctor</option>
                                            <option value="Military Doctor">Military Doctor</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Nutritionist">Nutritionist</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Exercise Specialist">Exercise Specialist</option>
                                            <option value="Researcher">Researcher</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>참석날짜(수정용)</th>
                                    <td> <input class="form-control attendance_date" type="text"
                                            value="<?php echo $item['attendance_date']; ?>" name="attendance_date"
                                            id="date">
                                        <select class="form-control input-lg m-bot15" id="attendance_date_select">
                                            <option value="" selected="selected">직접입력</option>
                                            <option value="Full registration">Full registration</option>
                                            <option value="Thursday, October 26">Thursday, October 26</option>
                                            <option value="Friday, October 27">Friday, October 27</option>
                                            <option value="Saturday, October 28">Saturday, October 28</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th>E-mail</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['email']; ?>"
                                            name="email" id="email"></td>
                                </tr>
                            </table>


                            <table>
                                <tr>
                                    <th>등록비</th>
                                    <td><input class="form-control" type="text" name="fee"
                                            value="<?php echo $item['fee']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Invitation Code Discount</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['etc1']; ?>" size="16"
                                            class="form-control" name="etc1">

                                    </td>
                                </tr>
                                <tr>
                                    <th>How did you get your invitation code?</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['etc2']; ?>" size="16"
                                            class="form-control" name="etc2">

                                    </td>
                                </tr>
                                <tr>
                                    <th>결제수단</th>
                                    <td> <input type="text" class="form-control" name="deposit_method" id="ln"
                                            value="<?php echo $item['deposit_method']; ?>"></td>
                                </tr>
                                <tr>
                                    <th>결제수단<br>(은행/계좌번호)</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['etc4']; ?>"
                                            name="etc4" id="etc4"></td>
                                </tr>

                                <tr>
                                    <th>결제상태</th>
                                    <td> <input type="text" class="form-control" value="<?php echo $item['deposit']; ?>"
                                            name="deposit" id="ln"></td>
                                </tr>
                                <tr>
                                    <th>결제일</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['deposit_date']; ?>"
                                            size="16" class="form-control" name="deposit_date">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Breakfast Symposium</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day3_breakfast_yn']; ?>"
                                            size="16" class="form-control" name="day3_breakfast_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Satellite(10/26)</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day1_satellite_yn']; ?>"
                                            size="16" class="form-control" name="day1_satellite_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Satellite(10/27)</th>
                                    <td> <input id="dp1" type="text" value="<?php echo $item['day2_satellite_yn']; ?>"
                                            size="16" class="form-control" name="day2_satellite_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>welcome reception</th>
                                    <td> <input id="dp1" type="text"
                                            value="<?php echo $item['welcome_reception_yn']; ?>" size="16"
                                            class="form-control" name="welcome_reception_yn">

                                    </td>
                                </tr>
                                <tr>
                                    <th>Is this your first time attending SICEM?</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['first_time_yn']; ?>" name="first_time_yn"
                                            id="first_time_yn">
                                    </td>
                                </tr>
                                <tr>
                                    <th>How many SICEMs have you attended before?</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['first_time']; ?>" name="first_time"
                                            id="first_time">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Where did you get the information about the conference?</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['conference_info']; ?>" name="conference_info"
                                            id="phone"></td>
                                </tr>
                                <tr>
                                    <th>qr print 여부</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['qr_print']; ?>"
                                            name="qr_print" id="phone"></td>
                                </tr>
                                <tr>
                                    <th>day 1 출결여부</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['qr_chk_day_1']; ?>" name="qr_chk_day_1" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day 2 출결여부</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['qr_chk_day_2']; ?>" name="qr_chk_day_2" id="phone">
                                    </td>
                                </tr>
                                <tr>
                                    <th>day 3 출결여부</th>
                                    <td><input class="form-control" type="text"
                                            value="<?php echo $item['qr_chk_day_3']; ?>" name="qr_chk_day_3" id="phone">
                                    </td>
                                </tr>


                            </table>
                        </div>
                        <div class="detail_table">
                            <table>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 1<br>(명찰케이스)</th>
                                    <td><input class="form-control" type="text" name="remark1" id="remark1"
                                            value="<?php echo $item['remark1']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 2<br>(리본)</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['remark2']; ?>"
                                            name="remark2" id="remark2">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 3<br>(First Time Attendee (KES
                                        Member))<br>(수정불가)</th>
                                    <td><input class="form-control" type="text" name="remark"
                                            value="<?php echo $remark3; ?>" id="remark3"
                                            style="background-color:#fafafa;" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 4<br>(Abstact)</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['copy_yn']; ?>"
                                            name="copy_yn" id="remark4">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 5<br>(special request food)</th>
                                    <td>
                                        <input class="form-control" type="text"
                                            value="<?php echo $item['special_request_food']; ?>"
                                            name="special_request_food" id="remark5">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 6<br>(Gala dinner)</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['remark6']; ?>"
                                            name="remark6" id="remark6">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 7<br>(Gala dinner
                                        테이블넘버)</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['remark7']; ?>"
                                            name="remark7" id="remark7">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">Remarks 7<br>(Presidential Dinner)</th>
                                    <td>
                                        <input class="form-control" type="text" value="<?php echo $item['remark8']; ?>"
                                            name="remark8" id="remark8">
                                    </td>
                                </tr>
                                <tr>
                                    <th style="background-color: #fb8500">memo</th>
                                    <td><input class="form-control" type="text" value="<?php echo $item['memo']; ?>"
                                            name="memo" id="memo">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div clss="btn_group" style="float: right;">
                            <button type="submit" data-toggle="modal" class="btn btn-primary">수정</button>
                            </form>
                            <a href="/admin/delete_user?d=<?php echo $item['registration_no']; ?>"
                                class="btn btn-danger">삭제</a>
                        </div>
                    </div>
            </div>
    </section>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel form-horizontal">
                <div class="panel-body">
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <p class="col-sm-2">입장</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['min_time'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    echo $item2['min_time'];
                                };
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="col-sm-2">퇴장</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['max_time'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    echo $item2['max_time'];
                                };
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-lg-12">
                            <p class="col-sm-2">총 시간</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['duration'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    echo $item2['duration'] . '분';
                                };
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="col-sm-2">총 평점</p>
                            <p class="col-sm-10">
                                <?php
                                if (empty($item2['duration'])) {
                                    echo "태깅 기록이 없습니다.";
                                } else {
                                    $score = $item2['duration'] / 60;
                                    echo round($score, 2) . '점';
                                };
                                ?>
                            </p>
                        </div>
                    </div>
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

const onsite_reg_select = document.querySelector(".onsite_reg_select");
const onsite_reg = document.querySelector(".onsite_reg");

const memeber_status_select = document.querySelector(".memeber_status_select");
const memeber_status = document.querySelector(".memeber_status")
const kes_id_input = document.querySelector(".kes_id")

const attendance = document.querySelector(".attendance");
const attendance_select = document.querySelector("#attendance_select")

const member_type = document.querySelector(".member_type");
const member_type_select = document.querySelector("#member_type_select")
const member_other_type = document.querySelector(".member_other_type")
const member_other_type_select = document.querySelector("#member_other_type_select")

const attendance_date = document.querySelector(".attendance_date")
const attendance_date_select = document.querySelector("#attendance_date_select")


/**등록구분 select box 선택시 input에 값 전달 */
onsite_reg_select.addEventListener("change", () => {
    onsite_reg.value = onsite_reg_select.options[onsite_reg_select.selectedIndex].value
})

/**KES Membership select box 선택시 input에 값 전달 */
memeber_status_select.addEventListener("change", () => {
    const selected = memeber_status_select.options[memeber_status_select.selectedIndex].value;

    if (selected === "Non-Member") {
        memeber_status.value = selected;
        kes_id_input.style.display = "none"
    } else {
        kes_id_input.style.display = ""
    }
})
/** member id 입력*/
kes_id_input.addEventListener("input", () => {
    memeber_status.value = `Member ( ID : ${kes_id_input.value})`
})

/**참가 유형 select box */
attendance_select.addEventListener("change", () => {
    attendance.value = attendance_select.options[attendance_select.selectedIndex].value;
})

/**member_type select box */
member_type_select.addEventListener("change", () => {
    member_type.value = member_type_select.options[member_type_select.selectedIndex].value;
})

/**member_other_type select box */
member_other_type_select.addEventListener("change", () => {
    member_other_type.value = member_other_type_select.options[member_other_type_select.selectedIndex].value;
})


/**attendance select box */
attendance_date_select.addEventListener("change", () => {
    attendance_date.value = attendance_date_select.options[attendance_date_select.selectedIndex].value;
})
</script>


</body>

</html>