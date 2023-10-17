<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Roboto', sans-serif;
}

input[type=text] {
    border: 1px solid #ddd;
    padding: 8px 16px;
    height: 2.5rem;
    /* width: 300px; */
}

input[type=checkbox] {
    width: 18px;
    height: 18px;
    margin-right: 10px;
    transform: translateY(2.5px);
}

input[type=radio] {
    width: 18px;
    height: 18px;
    margin-right: 10px;
    transform: translateY(2.5px);
}

span {
    color: #c1121f;
    font-weight: 600;
}

label {
    /* font-weight: 600; */
    font-size: 1rem;
    margin-right: 1rem;
}

textarea {
    height: 150px;
    background-color: #fff;
}

table {
    border-collapse: collapse;
    width: 100%;
}

p {
    margin: 0;
}

.tbl_type01 {
    border: 1px solid #ccc;
    border-top: 2px solid #ccc;
    /* text-align: center; */
    border-collapse: collapse;
}

.tbl_type01 th,
.tbl_type01 td {
    border: 1px solid #ccc;
    font-size: 1rem;
    /* font-weight: 600; */
}

.tbl_type01 th,
.tbl_type01 td {
    border: 1px solid #ccc;
}

th {
    height: 50px;
    border: 1px solid #ccc;
    background-color: #EBF2F9;
    text-align: left;
    padding: 16px;
}

td {
    border: 1px solid #ccc;
    padding: 16px;
}

.container {
    width: 1300px;
    padding: 0;
    margin: 20px auto;
}

.confirm_box {
    width: 100%;
    height: 200px;
    text-align: center;
    border: 1px solid #eee;
}

.confirm_box_title {
    text-align: center;
    background-color: rgb(186 230 253);
}

.all_checkbox {
    display: flex;
    width: 100%;
    height: 100px;
    align-items: center;
    justify-content: center;
}

.personal_checkbox {
    display: flex;
    flex-direction: column;
    margin-bottom: 50px;
}

.personal_checkbox>div {
    margin-bottom: 30px;
    display: flex;
    align-items: center;
    justify-content: left;
}

.next_btn_box,
.final_btn_box {
    display: flex;
    justify-content: center;
    align-items: center;
}

.next_btn_box>button,
.final_btn {
    width: 30%;
    height: 50px;
    font-size: 24px;
    border: 1px solid #7d8597;
    margin: 20px;
}

.full_input {
    width: 70%;
}

.tbl_type01 td {
    padding: 16px;
    text-align: left;
}

.wrap_2_2>table {
    border: none;
}

.category {
    height: 80px;
}

.select_category {
    width: 95%;
    height: 40px;
    border: 1px solid #ddd;
}

.member {
    height: 40px;
    display: flex;
    align-items: center;
}

.submit_btn {
    width: 150px;
    height: 50px;
    background-color: #e1e1e1;
}

.survey th {
    text-align: left;
    padding: 16px;
}

#addForm {
    width: 60%;
    margin: 0 auto;
}

#Email3 {
    width: 100px;
    height: 40px;
}

@media screen and (max-width:480px) {
    #addForm {
        width: 80%;
    }

    .number {
        display: none;
    }

    th,
    td,
    .tbl_type01 th,
    .tbl_type01 td {
        font-size: 0.7rem;
        padding: 8px;
    }

    label {
        font-size: 0.7rem;
    }

    input[type=checkbox] {
        width: 11px;
        height: 11px;
        margin-right: 10px;
        transform: translateY(2.5px);
    }

    input[type=radio] {
        width: 12px;
        height: 12px;
    }

    #Email3 {
        width: 20px;
    }

    .check_btn {
        display: block;
    }
}

.sign_up {
    height: 2.8em;
    padding: 4px 8px;
    border: 1px solid #ccc;
    /* background-color: #EBF2F9 !important; */
    font-weight: 600;
    margin: 4px;
}

.sign_up:hover {
    background-color: #EBF2F9
}

.email_box {
    width: 100%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.check_btn {
    /* background-color: #EBF2F9 !important; */
    border: 1px solid #CCC;
    padding: 0px 12px;
    height: 40px;
    /* margin-top: 1rem; */
}

.check_btn:hover {
    background-color: #CCC;
}

.button_text_box {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.email_text {
    transform: translate(10px, 10px);
    color: #c1121f;
}

.justify-between {
    justify-content: space-between !important;
}
</style>
<script src="https://cdn.tailwindcss.com"></script>
<?php echo form_open('/onSite/sicem', 'id="addForm" name="addForm" ') ?>
<!-- <form action="/onSite/sicem" class="w-3/5 mx-auto"> -->
<!-- <img src="./mail_header.png" alt="header" class="w-full h-96" /> -->
<div class="wrap_1">
    <img class="onsite_header" src="../../assets/images/SICEM_onsite.png" />
    <div class="flex justify-left items-center w-8/12 h-12 mx-auto mt-5 text-4xl sm:text-3xl font-semibold w-full">
        <img src="../../assets/images/subTit_bl.png" />
        <h1>On-site Registration</h1>
    </div>
    <div>
        <img src="../../assets/images/circle.png" class="inline" />
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Personal Information</h1>
        <table class="tbl_type01">
            <colgroup>
                <col width="20%">
                <col width="*">
            </colgroup>
            <tr>
                <th>
                    E-mail<br>(이메일)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="email_box w-11/12">
                        <div class="flex items-center w-full justify-between flex-wrap">
                            <div class="flex items-center w-10/12 justify-between p-1">
                                <input type="text" name="email1" id="Email1" maxlength="64" value="" class="w-6/12">
                                <p class="mx-1">@</p>
                                <input type="text" name="email2" id="Email2" maxlength="64" value="" class="w-6/12">
                                <select id="Email3" class="border mx-1" style="background-color:#ffffff;">
                                    <option value="" selected="selected">직접입력</option>
                                    <option value="naver.com">naver.com</option>
                                    <option value="daum.net">daum.net</option>
                                    <option value="hotmail.com">hotmail.com</option>
                                    <option value="nate.com">nate.com</option>
                                    <option value="yahoo.co.kr">yahoo.co.kr</option>
                                    <option value="paran.com">paran.com</option>
                                    <option value="empas.com">empas.com</option>
                                    <option value="dreamwiz.com">dreamwiz.com</option>
                                    <option value="freechal.com">freechal.com</option>
                                    <option value="lycos.co.kr">lycos.co.kr</option>
                                    <option value="korea.com">korea.com</option>
                                    <option value="gmail.com">gmail.com</option>
                                    <option value="hanmir.com">hanmir.com</option>
                                </select>
                            </div>
                            <button class="check_btn bg-slate-600 text-white" type="button">Check ID</button>
                        </div>
                        <p class="email_text">Please enter your ID(E-mail)</p>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Country<br> (국가)<span class="hit">*</span></th>
                <td>
                    <select id="nation_no" name="nation" class="px-2 py-1 w-11/12 h-10 border" disabled>
                        <option data-nt="82" value="Republic of Korea" selected="">Republic of Korea</option>
                        <option data-nt="93" value="Afghanistan">Afghanistan</option>
                        <!-- <option data-nt="358" value="Aland Islands">Aland Islands</option> -->
                        <option data-nt="335" value="Albania">Albania</option>
                        <option data-nt="213" value="Algeria">Algeria</option>
                        <option data-nt="684" value="American Samoa">American Samoa</option>
                        <option data-nt="376" value="Andorra">Andorra</option>
                        <option data-nt="244" value="Angola">Angola</option>
                        <option data-nt="1" value="Anguilla">Anguilla</option>
                        <option data-nt="672-1" value="Antarctica">Antarctica</option>
                        <option data-nt="1-809" value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option data-nt="54" value="Argentina">Argentina</option>
                        <option data-nt="374" value="Armenia">Armenia</option>
                        <option data-nt="297" value="Aruba">Aruba</option>
                        <option data-nt="61" value="Australia">Australia</option>
                        <option data-nt="43" value="Austria">Austria</option>
                        <option data-nt="994" value="Azerbaijan">Azerbaijan</option>
                        <option data-nt="1-242" value="Bahamas">Bahamas</option>
                        <option data-nt="973" value="Bahrain">Bahrain</option>
                        <option data-nt="880" value="Bangladesh">Bangladesh</option>
                        <option data-nt="1-246" value="Barbados">Barbados</option>
                        <option data-nt="375" value="Belarus">Belarus</option>
                        <option data-nt="32" value="Belgium">Belgium</option>
                        <option data-nt="501" value="Belize">Belize</option>
                        <option data-nt="229" value="Benin">Benin</option>
                        <option data-nt="1-441" value="Bermuda">Bermuda</option>
                        <option data-nt="975" value="Bhutan">Bhutan</option>
                        <option data-nt="591" value="Bolivia">Bolivia</option>
                        <option data-nt="387" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option data-nt="267" value="Botswana">Botswana</option>
                        <!-- <option data-nt="47" value="Bouvet Island">Bouvet Island</option> -->
                        <option data-nt="55" value="Brazil">Brazil</option>
                        <!-- <option data-nt="246" value="British Indian Ocean Territory">British Indian Ocean Territory
                        </option> -->
                        <option data-nt="673" value="Brunei Darussalam">Brunei Darussalam</option>
                        <option data-nt="359" value="Bulgaria">Bulgaria</option>
                        <option data-nt="226" value="Burkina Faso">Burkina Faso</option>
                        <option data-nt="257" value="Burundi">Burundi</option>
                        <option data-nt="855" value="Cambodia">Cambodia</option>
                        <option data-nt="237" value="Cameroon">Cameroon</option>
                        <option data-nt="1" value="Canada">Canada</option>
                        <option data-nt="238" value="Cape Verde">Cape Verde</option>
                        <option data-nt="1" value="Cayman Islands">Cayman Islands</option>
                        <option data-nt="236" value="Central African Republic">Central African Republic</option>
                        <option data-nt="235" value="Chad">Chad</option>
                        <option data-nt="56" value="Chile">Chile</option>
                        <option data-nt="86" value="China">China</option>
                        <option data-nt="57" value="Colombia">Colombia</option>
                        <option data-nt="269" value="Comoros">Comoros</option>
                        <option data-nt="242" value="Congo">Congo</option>
                        <option data-nt="242" value="Congo, The Democratic Republic of th">Congo, The Democratic
                            Republic of the</option>
                        <option data-nt="682" value="Cook Islands">Cook Islands</option>
                        <option data-nt="506" value="Costa Rica">Costa Rica</option>
                        <option data-nt="225" value="Cote D'Ivoire">Cote D'Ivoire</option>
                        <option data-nt="385" value="Croatia">Croatia</option>
                        <option data-nt="53" value="Cuba">Cuba</option>
                        <option data-nt="357" value="Cyprus">Cyprus</option>
                        <option data-nt="420" value="Czech Republic">Czech Republic</option>
                        <option data-nt="45" value="Denmark">Denmark</option>
                        <option data-nt="253" value="Djibouti">Djibouti</option>
                        <option data-nt="1-767" value="Dominica">Dominica</option>
                        <option data-nt="1-767" value="Dominican Republic">Dominican Republic</option>
                        <option data-nt="593" value="Ecuador">Ecuador</option>
                        <option data-nt="20" value="Egypt">Egypt</option>
                        <option data-nt="503" value="El Salvador">El Salvador</option>
                        <option data-nt="240" value="Equatorial Guinea">Equatorial Guinea</option>
                        <option data-nt="291" value="Eritrea">Eritrea</option>
                        <option data-nt="372" value="Estonia">Estonia</option>
                        <option data-nt="251" value="Ethiopia">Ethiopia</option>
                        <option data-nt="500" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option data-nt="298" value="Faroe Islands">Faroe Islands</option>
                        <option data-nt="679" value="Fiji">Fiji</option>
                        <option data-nt="358" value="Finland">Finland</option>
                        <option data-nt="33" value="France">France</option>
                        <option data-nt="594" value="French Guiana">French Guiana</option>
                        <option data-nt="689" value="French Polynesia">French Polynesia</option>
                        <option data-nt="241" value="Gabon">Gabon</option>
                        <option data-nt="220" value="Gambia">Gambia</option>
                        <option data-nt="995" value="Georgia">Georgia</option>
                        <option data-nt="49" value="Germany">Germany</option>
                        <option data-nt="233" value="Ghana">Ghana</option>
                        <option data-nt="350" value="Gibraltar">Gibraltar</option>
                        <option data-nt="30" value="Greece">Greece</option>
                        <option data-nt="299" value="Greenland">Greenland</option>
                        <option data-nt="1-809" value="Grenada">Grenada</option>
                        <option data-nt="590" value="Guadeloupe">Guadeloupe</option>
                        <option data-nt="1" value="Guam">Guam</option>
                        <!-- <option data-nt="502" value="Guatemala">Guatemala</option>
                        <option data-nt="44" value="Guernsey">Guernsey</option> -->
                        <option data-nt="224" value="Guinea">Guinea</option>
                        <option data-nt="245" value="Guinea-Bissau">Guinea-Bissau</option>
                        <option data-nt="592" value="Guyana">Guyana</option>
                        <option data-nt="509" value="Haiti">Haiti</option>
                        <!-- <option data-nt="672" value="Heard Island and McDonald Islands">Heard Island and McDonald
                            Islands</option> -->
                        <option data-nt="379" value="Holy See (Vatican City State)">Holy See (Vatican City State)
                        </option>
                        <option data-nt="504" value="Honduras">Honduras</option>
                        <option data-nt="852" value="Hong Kong">Hong Kong</option>
                        <option data-nt="36" value="Hungary">Hungary</option>
                        <option data-nt="354" value="Iceland">Iceland</option>
                        <option data-nt="91" value="India">India</option>
                        <option data-nt="62" value="Indonesia">Indonesia</option>
                        <option data-nt="98" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option data-nt="964" value="Iraq">Iraq</option>
                        <option data-nt="353" value="Ireland">Ireland</option>
                        <!-- <option data-nt="44" value="Isle of Man">Isle of Man</option> -->
                        <option data-nt="972" value="Israel">Israel</option>
                        <option data-nt="39" value="Italy">Italy</option>
                        <option data-nt="1-876" value="Jamaica">Jamaica</option>
                        <option data-nt="81" value="Japan">Japan</option>
                        <!-- <option data-nt="44" value="Jersey">Jersey</option> -->
                        <option data-nt="962" value="Jordan">Jordan</option>
                        <option data-nt="7" value="Kazakhstan">Kazakhstan</option>
                        <option data-nt="254" value="Kenya">Kenya</option>
                        <option data-nt="686" value="Kiribati">Kiribati</option>
                        <option data-nt="965" value="Kuwait">Kuwait</option>
                        <option data-nt="7" value="Kyrgyzstan">Kyrgyzstan</option>
                        <option data-nt="856" value="Lao People's Democratic Republic">Lao People's Democratic Republic
                        </option>
                        <option data-nt="371" value="Latvia">Latvia</option>
                        <option data-nt="961" value="Lebanon">Lebanon</option>
                        <option data-nt="266" value="Lesotho">Lesotho</option>
                        <option data-nt="231" value="Liberia">Liberia</option>
                        <option data-nt="218" value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option data-nt="41-75" value="Liechtenstein">Liechtenstein</option>
                        <option data-nt="370" value="Lithuania">Lithuania</option>
                        <option data-nt="362" value="Luxembourg">Luxembourg</option>
                        <option data-nt="853" value="Macau">Macau</option>
                        <option data-nt="389" value="Macedonia">Macedonia</option>
                        <option data-nt="261" value="Madagascar">Madagascar</option>
                        <option data-nt="265" value="Malawi">Malawi</option>
                        <option data-nt="60" value="Malaysia">Malaysia</option>
                        <option data-nt="960" value="Maldives">Maldives</option>
                        <option data-nt="223" value="Mali">Mali</option>
                        <option data-nt="356" value="Malta">Malta</option>
                        <option data-nt="692" value="Marshall Islands">Marshall Islands</option>
                        <option data-nt="596" value="Martinique">Martinique</option>
                        <option data-nt="222" value="Mauritania">Mauritania</option>
                        <option data-nt="230" value="Mauritius">Mauritius</option>
                        <option data-nt="269-6" value="Mayotte">Mayotte</option>
                        <option data-nt="52" value="Mexico">Mexico</option>
                        <option data-nt="691" value="Micronesia, Federated States of">Micronesia, Federated States of
                        </option>
                        <option data-nt="373" value="Moldova, Republic of">Moldova, Republic of</option>
                        <option data-nt="377" value="Monaco">Monaco</option>
                        <option data-nt="976" value="Mongolia">Mongolia</option>
                        <option data-nt="381" value="Montenegro">Montenegro</option>
                        <option data-nt="1-664" value="Montserrat">Montserrat</option>
                        <option data-nt="212" value="Morocco">Morocco</option>
                        <option data-nt="258" value="Mozambique">Mozambique</option>
                        <option data-nt="95" value="Myanmar">Myanmar</option>
                        <option data-nt="264" value="Namibia">Namibia</option>
                        <option data-nt="674" value="Nauru">Nauru</option>
                        <option data-nt="977" value="Nepal">Nepal</option>
                        <option data-nt="31" value="Netherlands">Netherlands</option>
                        <option data-nt="31" value="Netherlands Antilles">Netherlands Antilles</option>
                        <option data-nt="687" value="New Caledonia">New Caledonia</option>
                        <option data-nt="64" value="New Zealand">New Zealand</option>
                        <option data-nt="505" value="Nicaragua">Nicaragua</option>
                        <option data-nt="227" value="Niger">Niger</option>
                        <option data-nt="234" value="Nigeria">Nigeria</option>
                        <option data-nt="683" value="Niue">Niue</option>
                        <option data-nt="672-3" value="Norfolk Island">Norfolk Island</option>
                        <option data-nt="1-670" value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option data-nt="47" value="Norway">Norway</option>
                        <option data-nt="968" value="Oman">Oman</option>
                        <option data-nt="92" value="Pakistan">Pakistan</option>
                        <option data-nt="680" value="Palau">Palau</option>
                        <!-- <option data-nt="970" value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                        </option> -->
                        <option data-nt="507" value="Panama">Panama</option>
                        <option data-nt="675" value="Papua New Guinea">Papua New Guinea</option>
                        <option data-nt="595" value="Paraguay">Paraguay</option>
                        <option data-nt="51" value="Peru">Peru</option>
                        <option data-nt="63" value="Philippines">Philippines</option>
                        <option data-nt="48" value="Poland">Poland</option>
                        <option data-nt="351" value="Portugal">Portugal</option>
                        <option data-nt="1-787" value="Puerto Rico">Puerto Rico</option>
                        <option data-nt="974" value="Qatar">Qatar</option>
                        <option data-nt="262" value="Reunion">Reunion</option>
                        <option data-nt="40" value="Romania">Romania</option>
                        <option data-nt="7" value="Russian Federation">Russian Federation</option>
                        <option data-nt="250" value="Rwanda">Rwanda</option>
                        <option data-nt="1-809" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option data-nt="1-758" value="Saint Lucia">Saint Lucia</option>
                        <option data-nt="508" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option data-nt="1-809" value="Saint Vincent and the Grenadines">Saint Vincent and the
                            Grenadines</option>
                        <option data-nt="685" value="Samoa">Samoa</option>
                        <option data-nt="378" value="San Marino">San Marino</option>
                        <option data-nt="239" value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option data-nt="966" value="Saudi Arabia">Saudi Arabia</option>
                        <option data-nt="221" value="Senegal">Senegal</option>
                        <option data-nt="381" value="Serbia">Serbia</option>
                        <option data-nt="248" value="Seychelles">Seychelles</option>
                        <option data-nt="232" value="Sierra Leone">Sierra Leone</option>
                        <option data-nt="65" value="Singapore">Singapore</option>
                        <option data-nt="421" value="Slovakia">Slovakia</option>
                        <option data-nt="386" value="Slovenia">Slovenia</option>
                        <option data-nt="677" value="Solomon Islands">Solomon Islands</option>
                        <option data-nt="252" value="Somalia">Somalia</option>
                        <option data-nt="27" value="South Africa">South Africa</option>
                        <option data-nt="34" value="Spain">Spain</option>
                        <option data-nt="94" value="Sri Lanka">Sri Lanka</option>
                        <option data-nt="249" value="Sudan">Sudan</option>
                        <option data-nt="597" value="Suriname">Suriname</option>
                        <option data-nt="268" value="Swaziland">Swaziland</option>
                        <option data-nt="46" value="Sweden">Sweden</option>
                        <option data-nt="41" value="Switzerland">Switzerland</option>
                        <option data-nt="963" value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option data-nt="886" value="Taiwan">Taiwan</option>
                        <option data-nt="7" value="Tajikistan">Tajikistan</option>
                        <option data-nt="255" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option data-nt="66" value="Thailand">Thailand</option>
                        <option data-nt="228" value="Togo">Togo</option>
                        <option data-nt="690" value="Tokelau">Tokelau</option>
                        <option data-nt="676" value="Tonga">Tonga</option>
                        <option data-nt="1-868" value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option data-nt="216" value="Tunisia">Tunisia</option>
                        <option data-nt="90" value="Turkey">Turkey</option>
                        <option data-nt="993" value="Turkmenistan">Turkmenistan</option>
                        <option data-nt="1" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option data-nt="688" value="Tuvalu">Tuvalu</option>
                        <option data-nt="256" value="Uganda">Uganda</option>
                        <option data-nt="380" value="Ukraine">Ukraine</option>
                        <option data-nt="971" value="United Arab Emirates">United Arab Emirates</option>
                        <option data-nt="44" value="United Kingdom">United Kingdom</option>
                        <option data-nt="1" value="United States">United States</option>
                        <!-- <option data-nt="1-808" value="United States Minor Outlying Islands">United States Minor
                            Outlying Islands</option> -->
                        <option data-nt="598" value="Uruguay">Uruguay</option>
                        <option data-nt="998" value="Uzbekistan">Uzbekistan</option>
                        <option data-nt="678" value="Vanuatu">Vanuatu</option>
                        <option data-nt="58" value="Venezuela">Venezuela</option>
                        <option data-nt="84" value="Vietnam">Vietnam</option>
                        <option data-nt="1-284" value="Virgin Islands, British">Virgin Islands, British</option>
                        <option data-nt="1-809" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option data-nt="681" value="Wallis and Futuna">Wallis and Futuna</option>
                        <option data-nt="967" value="Yemen">Yemen</option>
                        <option data-nt="260" value="Zambia">Zambia</option>
                        <option data-nt="263" value="Zimbabwe">Zimbabwe</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Name<br>(이름)<span class="hit">*</span></th>
                <td>
                    <div class="w-11/12 flex flex-col">
                        <div class="flex w-full justify-between  mb-3">
                            <input type="text" id="firstName" name="first_name" placeholder="First name" class="w-6/12"
                                disabled />
                            <input type="text" id="lastName" placeholder="Last name" id="lastName" name="last_name"
                                type="text" class="w-6/12" disabled />
                        </div>
                        <input id="koreanName" name="name_kor" id="koreanName" placeholder="국문 이름" type="text"
                            class="w-full" disabled>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                    Affiliation<br>(소속)
                    <span class="hit">*</span>
                </th>
                <td>
                    <input type="text" id="affiliation" name="affiliation" class="w-11/12  mb-3"
                        placeholder="Affiliation" disabled />
                    <input type="text" id="affiliation_kor" name="affiliation_kor" class="w-11/12" placeholder="국문 소속"
                        disabled />
                </td>
            </tr>
            <tr>
                <th>
                    Department <br>(부서)
                    <span class="hit">*</span>
                </th>
                <td>
                    <input type="text" id="department" name="department" class="w-11/12  mb-3" placeholder="department"
                        disabled />
                </td>
            </tr>
            <tr>
                <th>
                    Mobile Number<br>
                    (휴대전화번호)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="flex w-11/12">
                        <input type="text" id="contryNum" name="phone1" class="w-1/6" placeholder="contry number"
                            value="82" />
                        <input type="text" id="phoneNumber" name="phone2" class="w-5/6" placeholder="ex)01012345678"
                            disabled />
                    </div>
                </td>
            </tr>

            <tr class="ln">
                <th>
                    평점신청 여부<br>(Only Korean)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="h-12">
                        <input id="is_score" name="is_score" hidden />
                        <input type="radio" id="need" disabled />
                        <label for="need">필요</label>
                        <input type="radio" id="non_need" disabled />
                        <label for="non_need">불필요</label>
                    </div>
                    <div class="flex items-center w-12/12 justify-left flex-wrap" id="ln_box" style="display: none;">
                        <div class="flex items-center ">
                            <p class="mx-2 number">의사면허번호</p>
                            <input name="licence_number" id="doctor" type="text" class="mx-2" placeholder="123456"
                                disabled />
                        </div>
                        <div class="flex items-center">
                            <p class="mx-4 number"> 전문의번호 </p>
                            <input name="specialty_number" id="specialist" class="mx-2" type="text" placeholder="123456"
                                disabled />
                        </div>
                        <select class="px-2 py-1 h-10 border" name="etc3">
                            <option value="교수" selected="">교수</option>
                            <option value="전문의">전문의</option>
                            <option value="전공의">전공의</option>
                            <option value="기타">기타</option>
                        </select>
                    </div>
                </td>
            </tr>
        </table>
        <img src="../../assets/images/circle.png" class="inline" />
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Survey</h1>
        <table class="survey">
            <colgroup>
                <col width="50%">
                <col width="*">
            </colgroup>
            <tr>
                <th>Is this your first time attending SICEM? (참석 횟수 조사) <span class="hit">*</span></th>
                <td>
                    <div>
                        <input id="first_time_yn" name="first_time_yn" hidden />
                        <input type="checkbox" id="attend_yes" />
                        <label for="attend_yes">Yes</label>
                        <input type="checkbox" id="attend_no" />
                        <label for="attend_no">No</label>

                    </div>
                </td>
            </tr>
            <tr class="time_num" style="display:none">
                <th>How many SICEMs have you attended before?</th>
                <td>
                    <div>
                        <input id="first_time" name="first_time" hidden />

                        <input type="radio" id="three" />
                        <label for="three">1-3</label>
                        <input type="radio" id="six" />
                        <label for="six">4-6</label>
                        <input type="radio" id="nine" />
                        <label for="nine">7-9</label>
                        <input type="radio" id="ten" />
                        <label for="ten">10+</label>

                    </div>
                </td>
            </tr>
            <tr>
                <th>Where did you get the information about the conference?(가입 경로) <span class="hit">*</span></th>
                <td>
                    <div>
                        <input name="conference_info" id="conference_info" hidden />
                        <div>
                            <input type="checkbox" id="conference_email" data-id="Email" class="confer" />
                            <label for="conference_email">Email</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_tel" data-id="Telephone text" class="confer" />
                            <label for="conference_tel">Telephone text</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_letter" data-id="Letter from Korean" class="confer" />
                            <label for="conference_letter">Letter from Korean</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_medi" data-id="Medical Association" class="confer" />
                            <label for="conference_medi">Medical Association</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_colleague" data-id="Colleague" class="confer" />
                            <label for="conference_colleague">Colleague</label>
                        </div>
                        <div>
                            <input type="checkbox" id="cofer_other" />
                            <label for="cofer_other">Other</label>
                            <input type="text" class="w-9/12 mt-3" placeholder="other" id="conference_other"
                                style="display:none" />
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Would you like to apply for an abstract book copy? <br>(초록집 요청) <span class="hit">*</span></th>
                <td>
                    <div>
                        <input id="copy_yn" name="copy_yn" hidden />
                        <input type="checkbox" id="abstract_yes" />
                        <label>Yes (Hard copy)</label>
                        <br>
                        <input type="checkbox" id="abstract_no" />
                        <label>No (PDF file)</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Special meal request <span class="hit">*</span></th>
                <td>
                    <div>
                        <input id="special_request_food" name="special_request_food" hidden />
                        <input type="checkbox" id="special_no" data-id="None" />
                        <label for="special_no">None</label>
                        <br>
                        <input type="checkbox" id="special_halal" data-id="Halal" />
                        <label for="special_halal">Halal food</label>
                        <br>
                        <input type="checkbox" id="special_vege" data-id="Vegetarian" />
                        <label for="special_vege">Vegetarian food</label>
                    </div>
                </td>
            </tr>
        </table>

        <img src="../../assets/images/circle.png" class="inline" />
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Session Participation</h1>
        <table class="survey">
            <colgroup>
                <col width="50%">
                <col width="*">
            </colgroup>
            <tr>
                <th>Welcome reception – Thursday, October 26</th>
                <td>
                    <div>
                        <input id="yn_1" name="welcome_reception_yn" class="yn" hidden />
                        <input type="checkbox" id="yes_1" />
                        <label>Yes</label>
                        <input type="checkbox" id="no_1" />
                        <label>No</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Satellite Symposium - Thursday, October 26</th>
                <td>
                    <div>
                        <input id="yn_2" name="day1_satellite_yn" class="yn" hidden />
                        <input type="checkbox" id="yes_2" />
                        <label>Yes</label>
                        <input type="checkbox" id="no_2" />
                        <label>No</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Satellite Symposium - Friday, October 27</th>
                <td>
                    <div>
                        <input id="yn_3" name="day2_satellite_yn" class="yn" hidden />
                        <input type="checkbox" id="yes_3" />
                        <label>Yes</label>
                        <input type="checkbox" id="no_3" />
                        <label>No</label>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Breakfast Symposium – Saturday, October 28</th>
                <td>
                    <div>
                        <input id="yn_4" name="day3_breakfast_yn" class="yn" hidden />
                        <input type="checkbox" id="yes_4" />
                        <label>Yes</label>
                        <input type="checkbox" id="no_4" />
                        <label>No</label>
                    </div>
                </td>
            </tr>
        </table>

        <img src="../../assets/images/circle.png" class="inline" />
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Registration Fees</h1>
        <table class="survey">
            <colgroup>
                <col width="20%">
                <col width="*">
            </colgroup>
            <tr>
                <th>
                    Member<br>(학회 회원 여부)
                    <span class="hit">*</span>
                </th>
                <td>
                    <input id="kes_member_status" name="kes_member_status" hidden />
                    <input type="radio" id="member" />
                    <label for="member">Member (회원)</label>
                    <br>
                    <input type="radio" id="non_member" />
                    <label for="non_member">Non-Member (비회원)</label>
                    <div class="sign_up_btn_box" style="display: none;">
                        <br>
                        <a target="_blank" href="https://www.endocrinology.or.kr/member/info.php"><button type="button"
                                class="sign_up">KES 회원가입(Korean only)</button></a>
                        <a target="_blank"
                            href="https://docs.google.com/forms/d/e/1FAIpQLSeST6AvFwdi3EvAyudol6PeD7evWTcNEH7oh-weHNGORk2izg/viewform"><button
                                type="button" class="sign_up">KES Sign up(For foreigner)</button></a>
                    </div>
                    <div class="kes_id" style="display: none;">
                        <input class="kes_id_input" name="kes_id" class="border p-2 mt-2"
                            placeholder="KES ID를 입력해주세요" />
                    </div>
                </td>
            </tr>

            <tr>
                <th>
                    Type of Participation<br>(참석유형)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="flex w-11/12 justify-between items-center">
                        <select id="Participation_1" style="background-color:#ffffff;"
                            class="px-2 py-1 w-full h-10 border" name="attendance_type">
                            <option value="" selected="selected">선택사항</option>
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
                    </div>
                </td>
            </tr>
            <tr>
                <th>Category<br>(참석자 구분)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="flex w-11/12 justify-between items-center border">
                        <select id="Category_1" style="background-color:#ffffff;" class="px-2 py-1 w-full h-10"
                            name="member_type">
                            <option value="" selected="selected">선택사항</option>
                            <option value="Medical Doctor">Medical Doctor</option>
                            <option value="Professor">Professor</option>
                            <option value="Trainee">Trainee</option>
                            <option value="Student">Student</option>
                            <option value="Other">Other</option>
                            <option value="Corporate">Corporate</option>
                        </select>
                    </div>

                    <div class="flex w-11/12 justify-between items-center ">
                        <select name="member_other_type" id="category_2" style="background-color:#ffffff; display:none"
                            class="px-2 py-1 w-full h-10 border">
                            <option value="Fellow">Fellow</option>
                            <option value="Resident">Resident</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Individual Researcher">Individual Researcher</option>
                        </select>
                    </div>

                    <div class="flex w-11/12 justify-between items-center">
                        <select name="member_other_type" id="category_3" style="background-color:#ffffff;display:none"
                            class="px-2 py-1 w-full h-10 border">
                            <option value="Public Health Doctor">Public Health Doctor</option>
                            <option value="Military Doctor">Military Doctor</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Nutritionist">Nutritionist</option>
                            <option value="Pharmacist">Pharmacist</option>
                            <option value="Exercise Specialist">Exercise Specialist</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Other">Other</option>
                            <input type="text" id="category_others" name="member_other_type" style="display: none;"
                                placeholder="category" />
                        </select>
                    </div>
                </td>
                <!-- <td>
                        <div class="flex w-11/12 justify-between items-center border">
                            <select id="Category_1" style="background-color:#ffffff;" class="px-2 py-1 w-full h-10"
                                name="member_type">
                                <option value="" selected="selected">선택사항</option>
                                <option value="Medical Doctor">Medical Doctor</option>
                                <option value="Professor">Professor</option>
                                <option value="Fellow">Fellow</option>
                                <option value="Public Health Doctor">Public Health Doctor</option>
                                <option value="Military Doctor">Military Doctor</option>
                                <option value="Resident">Resident</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Student"> Student</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Nutritionist">Nutritionist</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Exercise Specialist">Exercise Specialist</option>
                                <option value="Researcher">Researcher</option>
                                <option value="Corporate">Corporate</option>
                                <input type="text" id="category_others" style="display: none;" />
                            </select>
                        </div>
                    </td> -->
            </tr>
            <tr>
                <th>Attendance Date<br>(참석 날짜)
                    <span class="hit">*</span>
                </th>
                <td>
                    <input id="attendance_date" name="attendance_date" hidden />
                    <input type="checkbox" id="full" class="day" />
                    <label for="full">Full registration </label>
                    <br>
                    <input type="checkbox" id="thursday" class="day" />
                    <label for="thursday">Thursday, October 26 </label>
                    <br>
                    <input type="checkbox" id="friday" class="day" />
                    <label for="friday">Friday, October 27</label>
                    <br>
                    <input type="checkbox" id="saturday" class="day" />
                    <label for="saturday">Saturday, October 28</label>
                </td>
            </tr>
            <tr>
                <th>Payment Method<br>(지불 방법)
                    <span class="hit">*</span>
                </th>
                <td>
                    <input id="deposit_method" name="deposit_method" hidden />
                    <input type="checkbox" id="card" />
                    <label for="card">Credit card</label>
                    <br>
                    <input type="checkbox" id="transfer" />
                    <label for="transfer">Bank transfer(Korean only)</label>
                    <div id="transfer_box" class="mt-5" style="display: none;">
                        <input id="etc4" hidden name="etc4" />
                        <input type="text" placeholder="은행명" class="bank" />
                        <input type="text" placeholder="계좌번호" class="account" />
                    </div>
                </td>
            </tr>
            <tr>
                <th>Total</th>
                <td id="total" class="font-semibold underline underline-offset-8 text-2xl">
                    <input name="fee" id="fee" hidden />
                </td>
            </tr>
        </table>

        <div class="flex items-center justify-center">
            <button id="Submit" type="submit" class="w-60 h-15 bg-sky-900 text-white p-3 my-5 text-lg">Submit</button>
        </div>
    </div>
</div>

<!-- ==================================================================== -->

</form>
<!-- </body>


</html> -->

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
const wrap_1 = document.querySelector(".wrap_1")

const firstName = document.querySelector("#firstName");
const LastName = document.querySelector("#lastName");
const KoreanName = document.querySelector("#koreanName");

const contry = document.querySelector("#nation_no");

const affilation = document.querySelector("#affiliation");
const koreanAffiliation = document.querySelector("#affiliation_kor")
const department = document.querySelector("#department")

const contryNumber = document.querySelector("#contryNum");
const phone = document.querySelector("#phoneNumber")

const email_1 = document.querySelector("#Email1")
const email_2 = document.querySelector("#Email2")
const email_3 = document.querySelector("#Email3")
const check_btn = document.querySelector(".check_btn")
const email_text = document.querySelector(".email_text")

const member = document.querySelector("#member");
const nonMember = document.querySelector("#non_member")
const kes_member_status = document.querySelector("#kes_member_status")
const sign_up_btn_box = document.querySelector(".sign_up_btn_box")
const kes_id = document.querySelector(".kes_id")
const kes_id_input = document.querySelector(".kes_id_input")

// const participation = document.querySelector("#Participation");
const participationSelect = document.querySelector("#Participation_1")

// const category = document.querySelector("#Category")
const categorySelect = document.querySelector("#Category_1")
const categoryOthers = document.querySelector("#category_others")
const category_2 = document.querySelector("#category_2")
const category_3 = document.querySelector("#category_3")

const need = document.querySelector("#need");
const nonNeed = document.querySelector("#non_need")
const ln_box = document.querySelector("#ln_box")

const doctor = document.querySelector("#doctor");
const specialist = document.querySelector("#specialist")

const attendance_date = document.querySelector("#attendance_date")
const full = document.querySelector("#full");
const thursday = document.querySelector("#thursday");
const friday = document.querySelector("#friday");
const saturday = document.querySelector("#saturday");
const dayList = document.querySelectorAll(".day")

const card = document.querySelector("#card");
const transfer = document.querySelector("#transfer")
const deposit_method = document.querySelector("#deposit_method")
const bank = document.querySelector(".bank");
const account = document.querySelector(".account")
const transfer_box = document.querySelector("#transfer_box")
const etc4 = document.querySelector("#etc4")

const yes_1 = document.querySelector("#yes_1")
const no_1 = document.querySelector("#no_1")
const yes_2 = document.querySelector("#yes_2")
const no_2 = document.querySelector("#no_2")
const yes_3 = document.querySelector("#yes_3")
const no_3 = document.querySelector("#no_3")
const yes_4 = document.querySelector("#yes_4")
const no_4 = document.querySelector("#no_4")
const ynList = document.querySelectorAll(".yn")
const yn_1 = document.querySelector("#yn_1")
const yn_2 = document.querySelector("#yn_2")
const yn_3 = document.querySelector("#yn_3")
const yn_4 = document.querySelector("#yn_4")

const participationRadios = document.querySelectorAll('.session_radio');
const checkboxes = document.querySelectorAll('.checkbox');
const allCheck = document.querySelector("#all_check");
const checkedbox2 = document.querySelectorAll('.check');
const firstCheck = document.querySelector("#first_check");
const secondCheck = document.querySelector("#second_check");
const thirdCheck = document.querySelector("#third_check");
const fourthCheck = document.querySelector("#fourth_check");

const total = document.querySelector("#total")

const submitButton = document.querySelector("#Submit")
const finalButton = document.querySelector(".next_btn")
const preButton = document.querySelector(".pre_btn")
const conference_other = document.querySelector("#conference_other")
const cofer_other = document.querySelector("#cofer_other")
const conference_info = document.querySelector("#conference_info")
const conferList = document.querySelectorAll(".confer")

const attend_yes = document.querySelector("#attend_yes");
const attend_no = document.querySelector("#attend_no")

const abstract_yes = document.querySelector("#abstract_yes");
const abstract_no = document.querySelector("#abstract_no")
const copy_yn = document.querySelector("#copy_yn")

const is_score = document.querySelector("#is_score")

const first_time_yn = document.querySelector("#first_time_yn")
const time_num = document.querySelector(".time_num")
const first_time = document.querySelector("#first_time")
const three = document.querySelector("#three")
const six = document.querySelector("#six")
const nine = document.querySelector("#nine")
const ten = document.querySelector("#ten")

const special_request_food = document.querySelector("#special_request_food")
const special_no = document.querySelector("#special_request_food");
const special_halal = document.querySelector("#special_halal");
const special_vege = document.querySelector("#special_vege")

const fee_input = document.querySelector("#fee")

const ln = document.querySelector(".ln")
const header = document.querySelector(".onsite_header")

let fee;
let member_other_type;
let check_email = false;

/**header 새로고침 */
header.addEventListener("click", () => {
    window.location.reload()
})

/**영어 유효성 검사 */
firstName.addEventListener("input", (event) => {
    englishInput(event)
})
LastName.addEventListener("input", (event) => {
    englishInput(event)
})

affilation.addEventListener("input", (event) => {
    englishInput(event)
})

function englishInput(event) {
    const inputValue = event.target.value;
    const onlyEnglish = /^[A-Za-z\s\-_,]+$/;

    if (!onlyEnglish.test(inputValue)) {
        event.target.value = inputValue.replace(/[^A-Za-z\s\-_,]+/g, '');
    }
}


/**한국어 유효성 검사 */
KoreanName.addEventListener('input', (event) => {
    const inputValue = event.target.value;
    const onlyHangul = /^[ㄱ-ㅎㅏ-ㅣ가-힣\s\-_,]+$/;


    if (!onlyHangul.test(inputValue)) {
        event.target.value = inputValue.replace(/[^\uAC00-\uD7AF\u1100-\u11FF\u3130-\u318F\s\-_,]+/g, '');
    }
});

koreanAffiliation.addEventListener("input", (event) => {
    const inputValue = event.target.value;
    const onlyHangul = /^[ㄱ-ㅎㅏ-ㅣ가-힣\s\-_,]+$/;

    if (!onlyHangul.test(inputValue)) {
        event.target.value = inputValue.replace(/[^\uAC00-\uD7AF\u1100-\u11FF\u3130-\u318F\s\-_,]+/g, '');
    }
})

/**email 유효성 검사 */
email_1.addEventListener("input", (event) => {
    const inputValue = event.target.value;
    const emailreg = /^[a-zA-Z0-9\-_,]*$/;

    if (!emailreg.test(inputValue)) {
        event.target.value = inputValue.replace(/[^A-Za-z0-9\-_,]+/g, '');
    }
});

email_2.addEventListener("input", (event) => {
    const inputValue = event.target.value;
    const emailreg = /^[a-zA-Z0-9\-_,]*$/;

    if (!emailreg.test(inputValue)) {
        event.target.value = inputValue.replace(/[^A-Za-z0-9\-_,.]+/g, '');
    }
});

/**휴대폰 유효성 검사 */
phone.addEventListener('input', (event) => {
    const inputValue = event.target.value;
    const onlyNumbers = /^[0-9]+$/;

    if (!onlyNumbers.test(inputValue)) {
        event.target.value = inputValue.replace(/\D/g, '');
    }
});

/**국적 -> 한국인만 한국이름 작성 */
contry.addEventListener("click", () => {
    contryNumber.value = contry.options[contry.selectedIndex].dataset.nt
    if (contry.value !== "Republic of Korea") {
        KoreanName.style.display = "none"
        koreanAffiliation.style.display = "none"
        ln.style.display = "none"
    } else if (contry.value === "Republic of Korea") {
        KoreanName.style.display = "";
        koreanAffiliation.style.display = "";
        ln.style.display = ""
    }
})

/**email selectbox */
email_3.addEventListener("click", () => {
    email_2.value = email_3.options[email_3.selectedIndex].value
})

email_1.addEventListener("change", () => {
    check_email = false;
})

email_2.addEventListener("change", () => {
    check_email = false;
    email_text.innerText = "Please check the availability of this E-mail"
    email_text.style.color = "#c1121f"
})

/**중복확인 버튼 */
check_btn.addEventListener("click", () => {
    if (!email_1.value || !email_2.value) {
        alert("Please enter your ID(E-mail)");
        email_1.focus()
        return;
    }
    checkEmail()
})

/**이메일 중복검사 */
async function checkEmail() {
    const email = `${email_1.value}@${email_2.value}`
    const url = `/onSite/check_email?n=${email}`
    const personalInfoList = [firstName, LastName, KoreanName, contry, affilation, koreanAffiliation, department,
        phone, need,
        nonNeed, doctor, specialist
    ]

    const response = await fetch(url, {
        method: "GET"
    })

    const data = await response.json()

    if (data.user) {
        alert("This email address is already taken")
        check_email = false;
        email_text.innerText = "This email address is already taken"
        email_text.style.color = "#c1121f"
    } else {
        alert("This email address is available")
        check_email = true;
        email_text.innerText = "This email address is available"
        email_text.style.color = "blue"

        personalInfoList.map((info) => {
            removeDisabled(info)
        })
    }
}

/**disabled 지우기 */
function removeDisabled(content) {
    content.disabled = false;
}

/**회원 여부 checkbox */
member.addEventListener("click", () => {
    if (member.checked) {
        kes_id.style.display = ""
        nonMember.checked = false;
        kes_member_status.value = "Y"
        sign_up_btn_box.style.display = "none"
    } else {
        member.checked = true;
    }
    calRegiFee()
})


nonMember.addEventListener("click", () => {
    if (nonMember.checked) {
        kes_id.style.display = "none"
        member.checked = false;
        kes_member_status.value = "N"
        sign_up_btn_box.style.display = ""
    } else {
        nonMember.checked = true;
    }
    calRegiFee()
})


/**참석 횟수 checkbox */
attend_yes.addEventListener("click", () => {
    if (attend_yes.checked) {
        attend_no.checked = false;
        first_time_yn.value = "Y"
        time_num.style.display = "none"
        first_time.value = null
    }
})

attend_no.addEventListener("click", () => {
    if (attend_no.checked) {
        attend_yes.checked = false;
        first_time_yn.value = "N"
        time_num.style.display = "";
    }
})

/**참석 횟수 */

three.addEventListener("click", () => {
    six.checked = false;
    nine.checked = false;
    ten.checked = false;
    first_time.value = "1-3"
})

six.addEventListener("click", () => {
    three.checked = false;
    nine.checked = false;
    ten.checked = false;
    first_time.value = "4-6"
})

nine.addEventListener("click", () => {
    three.checked = false;
    six.checked = false;
    ten.checked = false;
    first_time.value = "7-9"
})

ten.addEventListener("click", () => {
    three.checked = false;
    six.checked = false;
    nine.checked = false;
    first_time.value = "10+"
})

/** 가입 경로 other input*/
cofer_other.addEventListener("click", () => {
    if (cofer_other.checked) {
        conference_other.style.display = "";
        conference_info.value = conference_other.value
    } else {
        conference_other.style.display = "none";
    }
})

/**가입 경로 */
conferList.forEach((confer) =>
    confer.addEventListener("click", () => {
        const conferValue = []
        if (confer.checked) {
            conferValue.push(confer.dataset.id);
        }
        conference_info.value = conferValue
    })
)


/**참석 날짜 checkbox */
full.addEventListener("click", () => {
    attendance_date.value = "Full registration"
    dayCheck("full")
})

thursday.addEventListener("click", () => {
    attendance_date.value = "Thursday, October 26"
    dayCheck("thursday")
})

friday.addEventListener("click", () => {
    attendance_date.value = "Friday, October 27"
    dayCheck("friday")
})

saturday.addEventListener("click", () => {
    attendance_date.value = "Saturday, October 28"
    dayCheck("saturday")
})

function dayCheck(selected) {
    dayList.forEach((day) => {
        if (day.id !== selected) {
            day.checked = false;
        } else {
            day.checked = true;
        }
    })
    calRegiFee()
}

/**지불방법 checkbox */
card.addEventListener("click", () => {
    transfer.checked = false;
    deposit_method.value = "Credit card"
    transfer_box.style.display = "none"
    calRegiFee()
})

transfer.addEventListener("click", () => {
    card.checked = false;
    deposit_method.value = "transfer"
    transfer_box.style.display = ""
    calRegiFee()
})



/**category select */
categorySelect.addEventListener("change", () => {
    const categoryValue = categorySelect.options[categorySelect.selectedIndex].value;
    member_other_type = "";

    if (categoryValue === "Trainee") {
        category_2.style.display = "";
        category_3.style.display = "none";
        categoryOthers.style.display = "none"
    }
    if (categoryValue !== "Trainee" && categoryValue !== "Other") {
        category_2.style.display = "none";
        category_3.style.display = "none";
        categoryOthers.style.display = "none"
    }
    if (categoryValue === "Other") {
        category_2.style.display = "none";
        category_3.style.display = "";
    }
    calRegiFee()
})

category_2.addEventListener("click", () => {
    member_other_type = category_2.options[category_2.selectedIndex].value;
    calRegiFee()
})

category_3.addEventListener("click", () => {
    const categoryOtherInput = category_3.options[category_3.selectedIndex].value;
    member_other_type = categoryOtherInput
    if (categoryOtherInput === "Other") {
        categoryOthers.style.display = ""
        categoryOtherInput = categoryOthers.value
    }
    calRegiFee()
})




/**평점 신청 X -> input disabled */
nonNeed.addEventListener("click", () => {
    if (nonNeed.checked) {
        ln_box.style.display = "none"
        need.checked = false;
        doctor.disabled = true;
        specialist.disabled = true;
        is_score.value = "N"
    } else {
        need.checked = true
        doctor.disabled = false;
        specialist.disabled = false;
    }
})


/**평점 신청 O -> input disabled X */
need.addEventListener("click", () => {
    if (need.checked) {
        ln_box.style.display = ""
        nonNeed.checked = false;
        doctor.disabled = false;
        specialist.disabled = false;
        is_score.value = "Y"
    }
})

/**면허 번호 유효성 검사 */

doctor.addEventListener("input", () => {
    const inputValue = event.target.value;
    const onlyNumbers = /^[0-9]+$/;

    if (!onlyNumbers.test(inputValue)) {
        event.target.value = inputValue.replace(/\D/g, '');
    }
})

specialist.addEventListener("input", () => {
    const inputValue = event.target.value;
    const onlyNumbers = /^[0-9]+$/;

    if (!onlyNumbers.test(inputValue)) {
        event.target.value = inputValue.replace(/\D/g, '');
    }
})

/**participation */
function participationY(number) {
    if (document.querySelector(`#yes_${number}`).checked) {
        document.querySelector(`#no_${number}`).checked = false;
    }
    ynList.forEach((yn) => {
        if (yn.id === `yn_${number}`) {
            yn.value = "Y"
        }
    })
}

function participationN(number) {
    if (document.querySelector(`#no_${number}`).checked) {
        document.querySelector(`#yes_${number}`).checked = false;
    }
    ynList.forEach((yn) => {
        if (yn.id === `yn_${number}`) {
            yn.value = "N"
        }
    })
}

/**Session Participation */
const yesList = [yes_1, yes_2, yes_3, yes_4];

const noList = [no_1, no_2, no_3, no_4];

yesList.map((yes, i) => {
    yes.addEventListener("click", () => {
        participationY(i + 1)
    })
})

noList.map((no, i) => {
    no.addEventListener("click", () => {
        participationN(i + 1)
    })
})

/**abstract book */
abstract_yes.addEventListener("click", () => {
    if (abstract_yes.checked) {
        abstract_no.checked = false;
        copy_yn.value = "Y"
    }
})

abstract_no.addEventListener("click", () => {
    if (abstract_no.checked) {
        abstract_yes.checked = false;
        copy_yn.value = "N"
    }
})

/**special request food */
special_no.addEventListener("click", () => {
    special_request_food.value = "None"
})

special_halal.addEventListener("click", () => {
    if (special_no.checked) {
        special_no.checked = false;
    }
    special_request_food.value = "Halal"
})

special_vege.addEventListener("click", () => {
    if (special_no.checked) {
        special_no.checked = false;
    }
    special_request_food.value = "Vegetarian"
})


participationSelect.addEventListener("change", () => {
    calRegiFee()
})
// submitButton.addEventListener("click", (e) => {
//     e.preventDefault()
//     onSubmit()
// })

/**은행명과 계좌번호 합치기 */
function addBankAccount() {
    etc4.value = bank.value + "/" + account.value
}

$(function() {
    $("#Submit").click(function(e) {
        const submit = onSubmit(e)
        if (submit) {

            $("#addForm").submit();
        } else {

            e.preventDefault();
        }
    });
});

function onSubmit(e) {
    e.preventDefault()
    /** Personal Information */
    if (!email_1.value || !email_2.value) {
        alert("invaild email");
        email_1.focus()
        return;
    }
    if (check_email === false) {
        alert("invaild Check for Duplicate");
        email_1.focus()
        return;
    }
    if (!firstName.value || !LastName.value) {
        alert("invaild Name");
        firstName.focus()
        return;
    }
    if (!contry.value) {
        alert("invaild contry");
        contry.focus()
        return;
    }
    if (!affilation.value) {
        alert("invaild affilation");
        affilation.focus()
        return;
    }
    if (!department.value) {
        alert("invaild department")
        department.focus()
        return;
    }
    if (!phone.value) {
        alert("invaild phone");
        phone.focus()
        return;
    }
    if (contry.value === "Republic of Korea" && !need.checked && !nonNeed.checked) {
        alert("invaild grade");
        need.focus()
        return;
    }
    if (need.checked && !doctor.value && !specialist.value) {
        alert("invaild grade");
        need.focus()
        return;
    }

    /** Survey */

    if (!attend_yes.checked && !attend_no.checked) {
        alert("invaild attend");
        attend_yes.focus()
        return;
    }
    let conferCheck = false
    conferList.forEach((confer) => {
        if (confer.checked) {
            conferCheck = true;
        }
    })
    if (!conferCheck) {
        alert("invaild conference");
        conference_other.focus()
        return;
    }
    if (!abstract_yes.checked && !abstract_no.checked) {
        alert("invaild abstract");
        abstract_yes.focus()
        return;
    }

    if (!special_no.checked && !special_halal.checked && !special_vege.checked) {
        alert("invaild special food");
        special_no.focus()
        return;
    }

    /** Session Participation */
    if (!yes_1.checked && !no_1.checked) {
        alert("invaild Session Participation");
        yes_1.focus()
        return;
    }
    if (!yes_2.checked && !no_2.checked) {
        alert("invaild Session Participation");
        yes_1.focus()
        return;
    }
    if (!yes_3.checked && !no_3.checked) {
        alert("invaild Session Participation");
        yes_1.focus()
        return;
    }
    if (!yes_4.checked && !no_4.checked) {
        alert("invaild Session Participation");
        yes_1.focus()
        return;
    }

    /** Registration Fees */
    if (!member.checked && !nonMember.checked) {
        alert("invaild member");
        member.focus()
        return;
    }
    if (member.checked && !kes_id_input.value) {
        alert("invaild member");
        kes_id_input.focus()
        return;
    }
    if (!participationSelect.options[participationSelect.selectedIndex].value) {
        alert("invaild participation");
        participationSelect.focus()
        return;
    }
    if (!categorySelect.options[categorySelect.selectedIndex].value) {
        alert("invaild category");
        categorySelect.focus()
        return;
    }
    if (categorySelect.options[categorySelect.selectedIndex].value === "Others" && !categoryOthers.value) {
        alert("invaild category");
        categoryOthers.focus()
        return;
    }
    if (!full.checked && !thursday.checked && !friday.checked && !saturday.checked) {
        alert("invaild Attendance Date");
        full.focus()
        return;
    }
    if (!card.checked && !transfer.checked) {
        alert("invaild Payment Method");
        card.focus()
        return;
    }
    if (transfer.checked && !bank.value && !account.value) {
        alert("invaild Payment Method");
        bank.focus()
        return;
    }
    addBankAccount()
    return true;
}



/**금액 계산 */
function calRegiFee() {

    /**fee = 0*/
    if (participationSelect.value === "Speaker" || participationSelect.value === "Chairperson" ||
        participationSelect.value === "Moderator" || participationSelect.value === "Panel" || participationSelect
        .value === "Preceptor" || participationSelect.value === "Organizer" || participationSelect.value ===
        "Press" || participationSelect.value === "Exhibitior" || participationSelect.value === "Satellite Attendee"
    ) {
        if (contry.value === "Republic of Korea") {
            fee = "KRW 0"
        } else {
            fee = "USD 0"
        }
    }
    /**fee != 0*/
    else {
        if (member.checked) {
            /**full day & member*/
            if (full.checked) {
                if (categorySelect.value === "Medical Doctor" || categorySelect.value === "Professor") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 250,000"
                    } else {
                        fee = "USD 250"
                    }
                } else if (categorySelect.value === "Student" || categorySelect.value === "Trainee") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 125,000"
                    } else {
                        fee = "USD 125"
                    }
                } else if (categorySelect.value === "Corporate" || categorySelect.value === "Other") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 200,000"
                    } else {
                        fee = "USD 200"
                    }
                } else {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 200,000"
                    } else {
                        fee = "USD 200"
                    }
                }
            }

            /** one day & member */
            else {
                if (contry.value === "Republic of Korea") {
                    fee = "KRW 200,000"
                } else {
                    fee = "USD 200"
                }
            }



        } else if (!member.checked) {

            /**full day & non-member */
            if (full.checked) {
                if (categorySelect.value === "Medical Doctor" || categorySelect.value === "Professor") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 350,000"
                    } else {
                        fee = "USD 350"
                    }
                } else if (categorySelect
                    .value === "Trainee" || categorySelect
                    .value === "Student") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 175,000"
                    } else {
                        fee = "USD 175"
                    }
                } else if (categorySelect.value === "Corporate" || categorySelect.value === "Other") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 250,000"
                    } else {
                        fee = "USD 250"
                    }
                } else {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 250,000"
                    } else {
                        fee = "USD 250"
                    }
                }
            }

            /** one day  & non-member */
            else {
                if (contry.value === "Republic of Korea") {
                    fee = "KRW 230,000"
                } else {
                    fee = "USD 230"
                }
            }
        }
    }
    total.innerText = fee;
    fee_input.value = fee;

}
</script>