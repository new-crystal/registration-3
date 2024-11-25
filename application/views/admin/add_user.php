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
                                        <option value="Participants">Participant</option>
                                        <option value="Speaker">Speaker</option>
                                        <option value="Chairperson">Chairperson</option>
                                        <option value="Committee">Committee</option>
                                        <option value="Panel">Panel</option>
                                        <option value="Sponsor">Sponsor</option>
                                        <!-- <option value="Organizer">Organizer</option> -->
                                        <!-- <option value="Oral Presenter">Oral Presenter</option> -->
                                        <!-- <option value="Poster Oral Presenter">Poster Oral Presenter</option> -->
                                        <!-- <option value="Satellite Attendee">Satellite Attendee</option> -->
                                        <option value="Press">Press</option>
                                        <!-- <option value="Exhibitior">Exhibitior</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">구분 2</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="member_type" id="type2">
                                        <option value="Certified M.D.">Certified M.D.</option>
                                        <option value="Professor">Professor</option>
                                        <option value="Researcher">Researcher</option>
                                        <option value="Nutritionist">Nutritionist</option>
                                        <option value="Exercise Specialist">Exercise Specialist</option>
                                        <option value="Nurse">Nurse</option>
                                        <option value="Pharmacist">Pharmacist</option>
                                        <option value="Trainee">Trainee</option>
                                        <option value="Trainee (전공의)">Trainee (전공의)</option>
                                        <option value="Student">Student</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="form-group form-inline">
                                <label class="col-sm-2 control-label">회원여부</label>
                                <div class="col-sm-10">
                                    <select class="form-control input-lg m-bot15" name="member_status" id="type3">
                                        <option value="0">비회원</option>
                                        <option value="1">KSCVP</option>
                                        <option value="2">KSCP</option>
                                    </select>
                                </div>
                            </div> -->
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
                                    <input class="form-control" type="text" name="name_kor" id="nick_name" placeholder="한국 이름">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">전화번호</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="phone" id="phone" placeholder="*필수 연락처 (외국인은 국가번호와 함께 입력해주세요 ex)01012345678)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">E-mail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">국가</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nation" id="nation">
                                    <select id="nation_no" name="nation_no" class="required">
										<option value="" selected="" hidden="">Choose</option>
                                        <option data-nt="82" value="25">Korea</option>
                                        <option data-nt="93" value="122">Afghanistan</option>
                                        <option data-nt="355" value="124">Albania</option>
                                        <option data-nt="213" value="125">Algeria</option>
                                        <option data-nt="1684" value="117">American Samoa</option>
                                        <option data-nt="376" value="123">Andorra</option>
                                        <option data-nt="244" value="126">Angola</option>
                                        <option data-nt="1264" value="128">Anguilla</option>
                                        <option data-nt="1268" value="127">Antigua and Barbuda</option>
                                        <option data-nt="54" value="116">Argentina</option>
                                        <option data-nt="374" value="115">Armenia</option>
                                        <option data-nt="297" value="114">Aruba</option>
                                        <option data-nt="61" value="138">Australia</option>
                                        <option data-nt="43" value="139">Austria</option>
                                        <option data-nt="994" value="121">Azerbaijan</option>
                                        <option data-nt="1242" value="70">Bahamas</option>
                                        <option data-nt="973" value="67">Bahrain</option>
                                        <option data-nt="880" value="71">Bangladesh</option>
                                        <option data-nt="1246" value="68">Barbados</option>
                                        <option data-nt="375" value="77">Belarus</option>
                                        <option data-nt="32" value="76">Belgium</option>
                                        <option data-nt="501" value="78">Belize</option>
                                        <option data-nt="229" value="73">Benin</option>
                                        <option data-nt="1441" value="72">Bermuda</option>
                                        <option data-nt="975" value="84">Bhutan</option>
                                        <option data-nt="591" value="81">Bolivia</option>
                                        <option data-nt="387" value="79">Bosnia and Herzegovina</option>
                                        <option data-nt="267" value="80">Botswana</option>
                                        <option data-nt="55" value="87">Brazil</option>
                                        <option data-nt="673" value="88">Brunei</option>
                                        <option data-nt="359" value="86">Bulgaria</option>
                                        <option data-nt="226" value="83">Burkina Faso</option>
                                        <option data-nt="257" value="82">Burundi</option>
                                        <option data-nt="855" value="172">Cambodia</option>
                                        <option data-nt="237" value="168">Cameroon</option>
                                        <option data-nt="1" value="173">Canada</option>
                                        <option data-nt="238" value="169">Cape Verde</option>
                                        <option data-nt="1345" value="175">Cayman Islands</option>
                                        <option data-nt="236" value="159">Central Africa</option>
                                        <option data-nt="235" value="165">Chad</option>
                                        <option data-nt="56" value="167">Chile</option>
                                        <option data-nt="86" value="161">China</option>
                                        <option data-nt="57" value="179">Colombia</option>
                                        <option data-nt="242" value="180">Congo</option>
                                        <option data-nt="682" value="184">Cook Islands</option>
                                        <option data-nt="506" value="177">Costa Rica</option>
                                        <option data-nt="385" value="185">Croatia</option>
                                        <option data-nt="53" value="182">Cuba</option>
                                        <option data-nt="357" value="188">Cyprus</option>
                                        <option data-nt="420" value="166">Czech</option>
                                        <option data-nt="45" value="26">Denmark</option>
                                        <option data-nt="253" value="162">Djibouti</option>
                                        <option data-nt="1767" value="28">Dominica</option>
                                        <option data-nt="1809" value="27">Dominican R.</option>
                                        <option data-nt="850" value="157">DPR of Korea</option>
                                        <option data-nt="243" value="181">DR Congo</option>
                                        <option data-nt="670" value="30">East Timor</option>
                                        <option data-nt="593" value="132">Ecuador</option>
                                        <option data-nt="20" value="149">Egypt</option>
                                        <option data-nt="503" value="134">El Salvador</option>
                                        <option data-nt="240" value="156">Equatorial Guinea</option>
                                        <option data-nt="291" value="129">Eritrea</option>
                                        <option data-nt="372" value="131">Estonia</option>
                                        <option data-nt="268" value="130">Eswatini</option>
                                        <option data-nt="251" value="133">Ethiopia</option>
                                        <option data-nt="500" value="208">Falkland Islands</option>
                                        <option data-nt="679" value="212">Fiji</option>
                                        <option data-nt="358" value="213">Finland</option>
                                        <option data-nt="33" value="211">France</option>
                                        <option data-nt="241" value="1">Gabon</option>
                                        <option data-nt="220" value="3">Gambia</option>
                                        <option data-nt="995" value="158">Georgia</option>
                                        <option data-nt="49" value="29">Germany</option>
                                        <option data-nt="350" value="163">Gibraltar</option>
                                        <option data-nt="30" value="8">Greece</option>
                                        <option data-nt="299" value="9">Greenland</option>
                                        <option data-nt="1473" value="7">Grenada</option>
                                        <option data-nt="590" value="5">Guadeloupe</option>
                                        <option data-nt="1671" value="4">Guam</option>
                                        <option data-nt="502" value="6">Guatemala</option>
                                        <option data-nt="224" value="10">Guinea</option>
                                        <option data-nt="245" value="11">Guinea-Bissau</option>
                                        <option data-nt="592" value="2">Guyana</option>
                                        <option data-nt="509" value="119">Haiti</option>
                                        <option data-nt="504" value="140">Honduras</option>
                                        <option data-nt="852" value="216">Hong Kong</option>
                                        <option data-nt="36" value="215">Hungary</option>
                                        <option data-nt="354" value="118">Iceland</option>
                                        <option data-nt="91" value="151">India</option>
                                        <option data-nt="62" value="152">Indonesia</option>
                                        <option data-nt="98" value="147">Iran</option>
                                        <option data-nt="964" value="146">Iraq</option>
                                        <option data-nt="353" value="120">Ireland</option>
                                        <option data-nt="972" value="148">Israel</option>
                                        <option data-nt="39" value="150">Italy</option>
                                        <option data-nt="225" value="178">Ivory Coast</option>
                                        <option data-nt="1876" value="154">Jamaica</option>
                                        <option data-nt="81" value="153">Japan</option>
                                        <option data-nt="962" value="141">Jordan</option>
                                        <option data-nt="7" value="170">Kazakstan</option>
                                        <option data-nt="254" value="174">Kenya</option>
                                        <option data-nt="686" value="187">Kiribati</option>
                                        <option data-nt="965" value="183">Kuwait</option>
                                        <option data-nt="996" value="186">Kyrgizstan</option>
                                        <option data-nt="856" value="31">Laos</option>
                                        <option data-nt="371" value="33">Latvia</option>
                                        <option data-nt="961" value="35">Lebanon</option>
                                        <option data-nt="266" value="36">Lesotho</option>
                                        <option data-nt="231" value="32">Liberia</option>
                                        <option data-nt="218" value="40">Libya</option>
                                        <option data-nt="423" value="42">Liechtenstein</option>
                                        <option data-nt="370" value="41">Lithuania</option>
                                        <option data-nt="352" value="38">Luxembourg</option>
                                        <option data-nt="853" value="47">Macao</option>
                                        <option data-nt="389" value="85">Macedonia</option>
                                        <option data-nt="261" value="43">Madagascar</option>
                                        <option data-nt="265" value="48">Malawi</option>
                                        <option data-nt="60" value="49">Malaysia</option>
                                        <option data-nt="960" value="60">Maldives</option>
                                        <option data-nt="373" value="59">Maldova</option>
                                        <option data-nt="223" value="50">Mali</option>
                                        <option data-nt="356" value="61">Malta</option>
                                        <option data-nt="692" value="45">Marshall Islands</option>
                                        <option data-nt="596" value="44">Martinique</option>
                                        <option data-nt="222" value="55">Mauritania</option>
                                        <option data-nt="230" value="54">Mauritius</option>
                                        <option data-nt="269" value="46">Mayotte</option>
                                        <option data-nt="52" value="51">Mexico</option>
                                        <option data-nt="691" value="65">Micronesia</option>
                                        <option data-nt="377" value="52">Monaco</option>
                                        <option data-nt="976" value="62">Mongolia</option>
                                        <option data-nt="382" value="57">Montenegro</option>
                                        <option data-nt="1664" value="58">Montserrat</option>
                                        <option data-nt="212" value="53">Morocco</option>
                                        <option data-nt="258" value="56">Mozambique</option>
                                        <option data-nt="95" value="64">Myanmar</option>
                                        <option data-nt="264" value="12">Namibia</option>
                                        <option data-nt="674" value="13">Nauru</option>
                                        <option data-nt="977" value="18">Nepal</option>
                                        <option data-nt="687" value="20">New Caledonia</option>
                                        <option data-nt="64" value="21">New Zealand</option>
                                        <option data-nt="505" value="24">Nicaragua</option>
                                        <option data-nt="227" value="23">Niger</option>
                                        <option data-nt="234" value="14">Nigeria</option>
                                        <option data-nt="683" value="22">Niue</option>
                                        <option data-nt="47" value="19">Norway</option>
                                        <option data-nt="968" value="137">Oman</option>
                                        <option data-nt="92" value="202">Pakistan</option>
                                        <option data-nt="680" value="204">Palau</option>
                                        <option data-nt="507" value="200">Panama</option>
                                        <option data-nt="675" value="203">Papua New Guinea</option>
                                        <option data-nt="595" value="201">Paraguay</option>
                                        <option data-nt="51" value="206">Peru</option>
                                        <option data-nt="48" value="209">Poland</option>
                                        <option data-nt="351" value="207">Portugal</option>
                                        <option data-nt="1787" value="210">Puerto Rico</option>
                                        <option data-nt="974" value="171">Qatar</option>
                                        <option data-nt="40" value="37">Romania</option>
                                        <option data-nt="7" value="34">Russia</option>
                                        <option data-nt="250" value="39">Rwanda</option>
                                        <option data-nt="290" value="98">Saint Helena</option>
                                        <option data-nt="1758" value="97">Saint Lucia</option>
                                        <option data-nt="508" value="92">Saint Pierre and Miquelon</option>
                                        <option data-nt="685" value="89">Samoa</option>
                                        <option data-nt="378" value="91">San Marino</option>
                                        <option data-nt="966" value="90">Saudi Arabia</option>
                                        <option data-nt="221" value="94">Senegal</option>
                                        <option data-nt="381" value="95">Serbia</option>
                                        <option data-nt="248" value="96">Seychelles</option>
                                        <option data-nt="232" value="110">Sierra Leone</option>
                                        <option data-nt="65" value="112">Singapore</option>
                                        <option data-nt="1721" value="111">Sint Maarten</option>
                                        <option data-nt="421" value="107">Slovakia</option>
                                        <option data-nt="386" value="108">Slovenia</option>
                                        <option data-nt="677" value="100">Solomon Islands</option>
                                        <option data-nt="252" value="99">Somalia</option>
                                        <option data-nt="27" value="16">South Africa</option>
                                        <option data-nt="211" value="15">South Sudan</option>
                                        <option data-nt="34" value="106">Spain</option>
                                        <option data-nt="94" value="103">Sri Lanka</option>
                                        <option data-nt="970" value="205">State of Palestine</option>
                                        <option data-nt="249" value="101">Sudan</option>
                                        <option data-nt="597" value="102">Suriname</option>
                                        <option data-nt="46" value="104">Sweden</option>
                                        <option data-nt="41" value="105">Switzerland</option>
                                        <option data-nt="963" value="109">Syria</option>
                                        <option data-nt="886" value="160">Taiwan</option>
                                        <option data-nt="992" value="189">Tajikistan</option>
                                        <option data-nt="255" value="190">Tanzania</option>
                                        <option data-nt="66" value="191">Thailand</option>
                                        <option data-nt="269" value="176">the Comoros</option>
                                        <option data-nt="31" value="17">the Netherlands</option>
                                        <option data-nt="63" value="214">the Philippines</option>
                                        <option data-nt="228" value="193">Togo</option>
                                        <option data-nt="690" value="194">Tokelau</option>
                                        <option data-nt="676" value="195">Tonga</option>
                                        <option data-nt="1868" value="199">Trinidad and Tobago</option>
                                        <option data-nt="216" value="198">Tunisia</option>
                                        <option data-nt="90" value="192">Turkey</option>
                                        <option data-nt="993" value="196">Turkmenistan</option>
                                        <option data-nt="688" value="197">Tuvalu</option>
                                        <option data-nt="256" value="142">Uganda</option>
                                        <option data-nt="44" value="135">UK</option>
                                        <option data-nt="380" value="145">Ukraine</option>
                                        <option data-nt="971" value="113">United Arab Emirates</option>
                                        <option data-nt="598" value="143">Uruguay</option>
                                        <option data-nt="1" value="63">USA</option>
                                        <option data-nt="998" value="144">Uzbekistan</option>
                                        <option data-nt="678" value="66">Vanuatu</option>
                                        <option data-nt="379" value="69">Vatican</option>
                                        <option data-nt="58" value="74">Venezuela</option>
                                        <option data-nt="84" value="75">Vietnam</option>
                                        <option data-nt="212" value="93">Western Sahara</option>
                                        <option data-nt="967" value="136">Yemen</option>
                                        <option data-nt="260" value="155">Zambia</option>
                                        <option data-nt="263" value="164">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">소속</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="affiliation" id="org" placeholder="*필수(영어)">
                                    <!-- <input class="form-control" type="text" name="affiliation_kor" id="org" placeholder="한글"> -->
                                    <!-- <input class="form-control" type="text" name="org_nametag" id="org" placeholder="*필수(네임택)"> -->
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">부서</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="department" id="org" placeholder="*필수(영어)">
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">등록비</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="fee">
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">결제 방법</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="deposit_method">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">결제수단- 은행 / 계좌번호</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="etc4">
                                </div>
                            </div> -->

                            <!-- <div class="form-group">
                                <label class="col-sm-2 control-label">remark1</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="remark1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark2</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="remark2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark3</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="remark3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">remark4</label>
                                <div class="col-sm-10">
                                    <input type="text" size="16" class="form-control" name="remark4">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label"> Special Request for Food</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="special_request_food" id="special_request_food">
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="col-sm-2 control-label">메모</label>
                                <div class="col-sm-10">
                                    <input id="" type="text" size="16" class="form-control" name="memo">
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


        const nationInput = document.querySelector("#nation");
        const nationSelect = document.querySelector("#nation_no")

        nationSelect.addEventListener("change", () => {
            nationInput.value = nationSelect.options[nationSelect.selectedIndex].innerText;
            })
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