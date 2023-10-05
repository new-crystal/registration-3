<!-- container section start -->
<section id="container" class="">

    <!--main content start-->
    <?php echo form_open('/admin/update_user?n=' . $item['registration_no'], 'id="updateForm" name="updateForm"') ?>
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">등록번호</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['registration_no']; ?>" name="registration_no"
                                        id="registration_no" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Registration No.(Lucky Draw)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['date_of_birth']; ?>" name="date_of_birth"
                                        id="registration_no">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">비자 생년월일</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['date_of_birth']; ?>" name="date_of_birth"
                                        id="date_of_birth">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 1</label>
                                <div class="col-sm-10"><input class="form-control" type="text"
                                        value="<?php echo $item['member_type']; ?>" name="member_type" id="member_type">

                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 2</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['attendance_type']; ?>" name="attendance_type"
                                        id="attendance_type">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 3</label>
                                <div class="col-sm-10"> <input class="form-control" type="text"
                                        value="<?php echo $item['occupation_type']; ?>" name="occupation_type"
                                        id="occupation_type">
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">회원여부</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="member_status"
                                        id="member_status" data-select="<?php echo $item['member_status']; ?>">
                                        <option value="회원">회원</option>
                                        <option value="비회원">비회원</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">KSSO 회원 여부</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        value="<?php echo  $item['ksso_member_status']; ?>" name="ksso_member_status"
                                        id="ksso_member_status">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">국가</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $item['nation']; ?>"
                                        name="nation" id="nation">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">평점신청여부</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $item['is_score']; ?>"
                                        name="is_score" id="is_score">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">면허번호</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        value="<?php echo $item['licence_number']; ?>" name="licence_number"
                                        id="licence_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">전문의번호</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        value="<?php echo $item['specialty_number']; ?>" name="specialty_number"
                                        id="specialty_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">영양사면허번호</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        value="<?php echo $item['nutritionist_number']; ?>" name="nutritionist_number"
                                        id="nutritionist_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">임상영양사자격번호</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                        value="<?php echo $item['dietitian_number']; ?>" name="dietitian_number"
                                        id="dietitian_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">이름</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['last_name']; ?>"
                                        name="last_name" id="nick_name">
                                    <input class="form-control" type="text" value="<?php echo $item['first_name']; ?>"
                                        name="first_name" id="nick_name">
                                    <input class="form-control" type="text" value="<?php echo $item['name_kor']; ?>"
                                        name="nick_name" id="nick_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">전화번호</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['phone']; ?>"
                                        name="phone" id="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">정보획득매체</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['conference_info']; ?>" name="conference_info"
                                        id="conference_info">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['email']; ?>"
                                        name="email" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">소속</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['affiliation']; ?>"
                                        name="affiliation" id="affiliation">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['affiliation_kor']; ?>" name="affiliation_kor"
                                        id="affiliation_kor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">소속(네임택용)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['org_nametag']; ?>"
                                        name="org_nametag" id="org_nametag">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">부서</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['department']; ?>"
                                        name="department" id="department">
                                    <input class="form-control" type="text"
                                        value="<?php echo $item['department_kor']; ?>" name="department_kor"
                                        id="department_kor">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">주소</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['addr']; ?>"
                                        name="addr" id="addr">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">사전등록비</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['fee']; ?>"
                                        name="fee" id="fee">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">입금자명</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $item['deposit_name']; ?>"
                                        name="deposit_name" id="deposit_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">입금예정일</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['deposit_date']; ?>" size="16"
                                        class="form-control" name="deposit_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">메모</label>
                                <div class="col-sm-10">
                                    <?php if ($item['memo'] == 'null') { ?>
                                    <input id="memo" type="text" value="" size="16" class="form-control" name="memo">
                                    <?php  } else { ?>
                                    <input id="memo" type="text" value="<?php echo $item['memo']; ?>" size="16"
                                        class="form-control" name="memo">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">welcome_reception</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['welcome_reception_yn']; ?>"
                                        size="16" class="form-control" name="welcome_reception_yn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day2_breakfast</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['day2_breakfast_yn']; ?>"
                                        size="16" class="form-control" name="day2_breakfast_yn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day2_luncheon</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['day2_luncheon_yn']; ?>"
                                        size="16" class="form-control" name="day2_luncheon_yn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day3_breakfast</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['day3_breakfast_yn']; ?>"
                                        size="16" class="form-control" name="day3_breakfast_yn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day3_luncheon</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['day3_luncheon_yn']; ?>"
                                        size="16" class="form-control" name="day3_luncheon_yn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">총회 만찬식 참석 여부</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['banquet_yn']; ?>" size="16"
                                        class="form-control" name="banquet_yn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">특이식단</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" value="<?php echo $item['special_request_food']; ?>"
                                        size="16" class="form-control" name="special_request_food">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">등록시간</label>
                                <div class="col-sm-10">
                                    <input id="time" type="text" value="<?php echo substr($item['time'], 0, 10) ?>"
                                        size="16" class="form-control" name="time">
                                </div>
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
</script>


</body>

</html>