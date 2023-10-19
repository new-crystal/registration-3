<!-- container section start -->
<section id="container" class="">

    <!--main content start-->
    <?php echo form_open('/admin/add_user', 'id="addForm" name="addForm"') ?>
    <?php echo validation_errors(); ?>
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel form-horizontal">
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 1</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="attendance_type" id="type1">
                                        <option value="" selected="selected">선택사항</option>
                                        <option value="Participant">Participant</option>
                                        <option value="Speaker">Speaker</option>
                                        <option value="Chairperson">Chairperson</option>
                                        <option value="Moderator">Moderator</option>
                                        <option value="Panel">Panel</option>
                                        <option value="Preceptor">Preceptor</option>
                                        <option value="Organizer">Organizer</option>
                                        <!-- <option value="Oral Presenter">Oral Presenter</option> -->
                                        <!-- <option value="Poster Oral Presenter">Poster Oral Presenter</option> -->
                                        <option value="Satellite Attendee">Satellite Attendee</option>
                                        <option value="Press">Press</option>
                                        <option value="Exhibitior">Exhibitior</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 2</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="member_type" id="type2">
                                        <option value="Medical Doctor">Medical Doctor</option>
                                        <option value="Professor">Professor</option>
                                        <option value="Trainee">Trainee</option>
                                        <option value="Student">Student</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 3</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="member_other_type" id="type2">
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
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">KES 회원여부</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="kes_member_status" id="type3">
                                        <option value="Member">회원</option>
                                        <option value="Non-Member">비회원</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">면허번호</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="licence_number" id="sn">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">전문의번호</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="specialty_number" id="sn">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">이름 *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="first name" name="first_name" />
                                    <input class="form-control" type="text" placeholder="last name" name="last_name" />
                                    <input class="form-control" type="text" name="name_kor" id="nick_name" placeholder="*필수">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">전화번호 *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone" id="phone" placeholder="*필수 연락처 (외국인은 국가번호와 함께 입력해주세요 ex)01012345678)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">E-mail *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">국가 *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nation" id="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">소속 *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="affiliation" id="org" placeholder="*필수(영어)">
                                    <input class="form-control" type="text" name="affiliation_kor" id="org" placeholder="*필수(한글)">
                                    <input class="form-control" type="text" name="org_nametag" id="org" placeholder="*필수(네임택)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">부서 *</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="department" id="org" placeholder="*필수(영어)">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">주소</label>
                                <div class="col-sm-10">
                                    <input type="text" name="postcode" id="postcode" placeholder="*우편번호" readonly disabled style="display:none;">
                                    <input class="form-control" type="text" name="address" id="address" placeholder="*주소" readonly disabled>
                                    <input class="form-control" type="text" name="detailAddress" id="detailAddress" placeholder="*상세주소">
                                    <input style="display:none;" type="text" name="extraAddress" id="extraAddress" placeholder="참고항목" readonly disabled>
                                    <div clss="btn_group" style="float: right; margin-top: 20px;">
                                        <input type="button" class="btn btn-warning" onclick="execDaumPostcode()" value="주소 찾기">
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">입금자명</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="deposit_name" id="deposit_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">입금예정일</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="deposit_date">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">메모</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="memo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark1(명찰케이스)</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="remark1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark2(리본)</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="remark2">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">remark3</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="remark3">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark6(Gala dinner)</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="remark6">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark7(Gala dinner Table number)</label>
                                <div class="col-sm-10">
                                    <input id="dp1" type="text" size="16" class="form-control" name="remark7">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">welcome reception </label>
                                <div class="col-sm-10">
                                    <input placeholder="Y/N" class="form-control" type="text"
                                        name="welcome_reception_yn" id="deposit_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day2_breakfast_yn</label>
                                <div class="col-sm-10">
                                    <input placeholder="Y/N" class="form-control" type="text" name="day2_breakfast_yn"
                                        id="deposit_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day2_luncheon_yn</label>
                                <div class="col-sm-10">
                                    <input placeholder="Y/N" class="form-control" type="text" name="day2_luncheon_yn"
                                        id="deposit_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day3_breakfast_yn</label>
                                <div class="col-sm-10">
                                    <input placeholder="Y/N" class="form-control" type="text" name="day3_breakfast_yn"
                                        id="deposit_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">day3_luncheon_yn</label>
                                <div class="col-sm-10">
                                    <input placeholder="Y/N" class="form-control" type="text" name="day3_luncheon_yn"
                                        id="deposit_name">
                                </div>
                            </div> -->
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">생년월일</label>
                                <div class="col-sm-10">
                                    <input placeholder="dd-mm-yyyy" class="form-control" type="text"
                                        name="date_of_birth" id="deposit_name">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Special Request for Food</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="special_request_food" id="special_request_food">
                                </div>
                            </div>
                            <div clss="btn_group" style="float: right;">
                                <button type="submit" class="btn btn-primary">등록</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->

    </section>
    </form>
</section>
<script src="/assets/js/form-component.js"></script>
<script src="/assets/js/bootstrap-datepicker.js"></script>
<script>
    $(document).ready(function() {
        var type1_val = $('select#type1').attr('data-select');
        $('select#type1 option[value=' + type1_val + ']').attr('selected', 'selected');
        var type2_val = $('select#type2').attr('data-select');
        $('select#type2 option[value=' + type2_val + ']').attr('selected', 'selected');

        var phone = $('#phone').val();
        $("#addForm").attr("action", "/admin/add_user");
    });
</script>


<script src="https://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script type="text/javascript">
    function execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if (data.userSelectedType === 'R') {
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if (data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if (data.buildingName !== '' && data.apartment === 'Y') {
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if (extraAddr !== '') {
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("extraAddress").value = extraAddr;
                    $('#extraAddress').attr('val', extraAddr);

                } else {
                    document.getElementById("extraAddress").value = '';
                    $('#extraAddress').attr('val', '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById("postcode").value = data.zonecode;
                $('#postcode').attr('val', data.zonecode);
                document.getElementById("address").value = addr;
                $('#address').attr('val', addr);
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("detailAddress").focus();
            }
        }).open();
    }



    // $('#phone').bind('keyup', function(event) {
    //     var regNumber = /^[0-9]*$/;
    //     var temp = $('#phone').val();
    //     if (!regNumber.test(temp)) {
    //         alert('숫자만 입력하세요!');
    //         $('#phone').val(temp.replace(/[^0-9]/g, ''));
    //     }
    // })
    $(function() {
        $("#addForm").submit(function() {
            // if (!$.trim($("#name_kor").val())) {
            //     alert("이름을 입력해주세요.");
            //     $("#name_kor").focus();
            //     return false;
            // }
            // if (!$.trim($("#sn").val())) {
            //     $("#sn").val('00000');
            // }
            // if (!$.trim($("#org").val())) {
            //     alert("소속단체명을 입력해주세요.");
            //     $("#org").focus();
            //     return false;
            // }
            // if (!$.trim($("#type1").val())) {
            //     alert("구분1을 입력해주세요.");
            //     $("#type1").focus();
            //     return false;
            // }
            // if (!$.trim($("#type2").val())) {
            //     alert("구분2을 입력해주세요.");
            //     $("#type2").focus();
            //     return false;
            // }
            // if (!$.trim($("#type3").val())) {
            //     alert("구분3을 입력해주세요.");
            //     $("#type3").focus();
            //     return false;
            // }
            // if (!$.trim($("#phone").val())) {
            //     alert("연락처(전화번호)를 입력해주세요.");
            //     $("#phone").focus();
            //     return false;
            // }
            // if (!$.trim($("#email").val())) {
            //     alert("이메일을 입력해주세요.");
            //     $("#email").focus();
            //     return false;
            // }


            $("#addForm").attr("action", "/admin/add_user");

            return true;
        });
    });
</script>


</body>

</html>