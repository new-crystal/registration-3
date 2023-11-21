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

@media screen and (max-width:600px) {
    #addForm {
        width: 95%;
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
        font-size: 0.6rem;
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

    .onsite_title {
        font-size: 25px;
    }

    .term_wrap .term_box {
        max-height: 100px !important;
    }

    .term_label {
        text-align: left;
    }

    .term_label>label {
        margin: 0;
        font-size: 0.6rem;

    }

    .email_text {
        transform: translate(0px, 1px) !important;
        margin: 0 !important;
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
    margin-top: 1rem !important;
}

.kes_check_btn {
    padding: 0px 12px;
    height: 40px;
}

.check_btn:hover {
    background-color: rgb(147 197 253);
}

.button_text_box {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.email_text {
    transform: translate(10px, 10px);
    color: #c1121f;
    margin-bottom: 1rem;
}

.justify-between {
    justify-content: space-between !important;
}


.term_wrap .term_box {
    max-height: 200px;
    overflow-y: scroll;
    text-align: justify;
    font-size: 0.7rem;
}

.term_label {
    text-align: right;
}
</style>
<script src="https://cdn.tailwindcss.com"></script>
<?php echo form_open('/onSite/sicem', 'id="addForm" name="addForm" ') ?>
<!-- <form action="/onSite/sicem" class="w-3/5 mx-auto"> -->
<!-- <img src="./mail_header.png" alt="header" class="w-full h-96" /> -->
<div class="wrap_1">
    <img class="onsite_header" src="../../assets/images/ISCP_onsite.png" />
    <div class="flex justify-left items-center w-8/12 h-12 mx-auto mt-5 text-4xl sm:text-3xl font-semibold w-full">
        <img src="../../assets/images/subTit_bl.png" />
        <h1 class="onsite_title">On-site Registration</h1>
    </div>

    <div class="term_wrap">
        <img src="../../assets/images/circle.png" class="inline" />
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Use of Personal Information</h1>
        <div class="term_box border p-5">
            <strong>Purpose</strong>
            <p class="mb-3">International Society of Cardiovascular Pharmacotherapy(ISCP) with KSCVP & KSCP provides
                online on-site
                registration services for ISCP 2023. Based on your personal information, you can sign up for the
                conference and complete the payment for registration.</p>
            <strong>Collecting Personal Information</strong>
            <p class="mb-3">ISCP 2023 requires you to provide your personal information to complete on-site registration
                online. You
                will be asked to enter your name, ID (email), password, date of birth, institution/organization,
                department, mobile, and telephone number.</p>
            <strong>Storing Personal Information</strong>
            <p>ISCP 2023 will continue to store your personal information to provide you with useful services, such as
                conference updates and newsletters.</p>
        </div>
        <div class="term_label">
            <input type="checkbox" class="checkbox input required" id="terms" name="terms" value="Y">
            <label for="terms">I agree to the collection and use of my personal information. </label>
        </div>
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

                        <div class="flex items-center w-full justify-between p-1 flex-wrap">
                            <input type="text" name="email1" id="Email1" maxlength="64" value="" class="w-4/12">
                            <p class="mx-1">@</p>
                            <input type="text" name="email2" id="Email2" maxlength="64" value="" class="w-5/12">
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
                        <button class="check_btn bg-blue-700 text-white px-4 font-semibold" type="button">Check
                            ID</button>
                        </div>
                        <p class="email_text">Please enter your ID(E-mail)</p>
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
                        <option data-nt="500" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                        </option>
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
                        <option data-nt="856" value="Lao People's Democratic Republic">Lao People's Democratic
                            Republic
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
                        <option data-nt="691" value="Micronesia, Federated States of">Micronesia, Federated States
                            of
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
                        <option data-nt="255" value="Tanzania, United Republic of">Tanzania, United Republic of
                        </option>
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
                        <div class="w-full justify-between  mb-3">
                            <input type="text" id="firstName" name="first_name" placeholder="First Name (ex. Gildong) "
                                class="w-full" disabled />
                            <input type="text" id="lastName" placeholder="Last name (ex. Hong) " id="lastName"
                                name="last_name" type="text" class="w-full" disabled />
                        </div>
                        <input id="koreanName" name="name_kor" id="koreanName" placeholder="국문 이름 (ex. 홍길동)" type="text"
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
                        placeholder="Affiliation (ex. Korea Hospital) " disabled />
                    <input type="text" id="affiliation_kor" name="affiliation_kor" class="w-11/12"
                        placeholder="국문 소속 (ex. 한국대병원)" disabled />
                </td>
            </tr>
            <tr>
                <th>
                    Department <br>(부서)
                    <span class="hit">*</span>
                </th>
                <td>
                    <input type="text" id="department" name="department" class="w-11/12  mb-3" placeholder="Department"
                        disabled />
                    <input type="text" id="department_kor" name="department_kor" class="w-11/12  mb-3" placeholder="부서"
                        disabled />
                </td>
            </tr>
            <tr>
                <th>
                    Mobile Phone Number<br>
                    (휴대전화번호)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="flex w-11/12">
                        <input type="text" id="contryNum" name="phone1" class="w-2/6" placeholder="contry number"
                            value="82" />
                        <input type="text" id="phoneNumber" name="phone2" class="w-4/6" placeholder="ex)01012345678"
                            disabled />
                    </div>
                </td>
            </tr>


        </table>
        <img src="../../assets/images/circle.png" class="inline" />
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Survey</h1>
        <table class="survey">
            <colgroup>
                <col width="30%">
                <col width="*">
            </colgroup>
            <tr>
                <th>Where did you get the information about the conference?(가입 경로) <span class="hit">*</span></th>
                <td>
                    <div>
                        <input name="conference_info" id="conference_info" hidden />
                        <div>
                            <input type="checkbox" id="conference_email" data-id="Website or newletter of KSCP or KSCVP"
                                class="confer" />
                            <label for="conference_email">Website or newletter of KSCP or KSCVP</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_tel" data-id="Website or notice of related society"
                                class="confer" />
                            <label for="conference_tel">Website or notice of related society</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_letter" data-id="Went to the last ISCP"
                                class="confer" />
                            <label for="conference_letter">Went to the last ISCP</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_medi" data-id="Invitation for speaker or chair"
                                class="confer" />
                            <label for="conference_medi">Invitation for speaker or chair</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_colleague" data-id="Friend / Colleague"
                                class="confer" />
                            <label for="conference_colleague">Friend / Colleague</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_colleague" data-id="Medical corporate"
                                class="confer" />
                            <label for="conference_colleague">Medical corporate</label>
                        </div>
                        <div>
                            <input type="checkbox" id="conference_colleague" data-id="Internet banner ads or search"
                                class="confer" />
                            <label for="conference_colleague">Internet banner ads or search</label>
                        </div>
                        <!-- <div>
                            <input type="checkbox" id="cofer_other" class="confer" />
                            <label for="cofer_other">Other</label>
                            <input type="text" class="w-9/12 mt-3" placeholder="other" id="conference_other" style="display:none" />
                        </div> -->
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
        <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Registration Fees</h1>
        <table class="survey">
            <colgroup>
                <col width="20%">
                <col width="*">
            </colgroup>

            <tr>
                <th>
                    Type of Participation<br>(참석유형)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="flex w-11/12 justify-between items-center">
                        <select id="Participation_1" style="background-color:#ffffff;"
                            class="px-2 py-1 w-full h-10 border" name="attendance_type">
                            <option value="" selected="selected">Select</option>
                            <option value="Participants">Participants</option>
                            <option value="Sponsor">Sponsor</option>
                            <option value="Chairperson">Chairperson</option>
                            <option value="Speaker">Speaker</option>
                            <option value="Panel">Panel</option>
                            <option value="ISCP full member">ISCP full member</option>
                            <option value="Other">Other</option>
                            <input type="text" id="participation_others" name="attendance_other_type"
                                style="display: none;width:140%;" placeholder="please write type of Participation" />
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Category<br>(참석자 구분)
                    <span class="hit">*</span>
                </th>
                <td>
                    <div class="flex w-11/12 justify-between items-center">
                        <select id="Category_1" style="background-color:#ffffff;" class="px-2 py-1 w-full h-10 border"
                            name="member_type">
                            <option value="" selected="selected">Select</option>
                            <option value="Specialist">Specialist</option>
                            <option value="Professor">Professor</option>
                            <option value="Fellow">Fellow</option>
                            <option value="Researcher">Researcher</option>
                            <option value="Nurse">Nurse</option>
                            <option value="Nutritionist">Nutritionist</option>
                            <option value="Pharmacists">Pharmacists</option>
                            <option value="Corporate member">Corporate member</option>
                            <option value="Military medical officer">Military medical officer</option>
                            <option value="Student">Student</option>
                            <option value="Resident">Resident</option>
                            <option value="Others">Others</option>
                            <input type="text" id="category_others" name="member_other_type"
                                style="display: none;width:140%;" placeholder="category" />
                        </select>
                    </div>
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
                    <label for="transfer">Bank transfer (Korean only)</label>
                    <div id="transfer_box" class="mt-5" style="display: none;">
                        <input id="etc4" hidden name="etc4" />
                        <input type="text" placeholder="은행명" class="bank" />
                        <input type="text" placeholder="계좌번호" class="account" />
                    </div>
                </td>
            </tr>
            <tr>
                <th>Total</th>
                <td id="total" class="font-semibold underline underline-offset-8 text-2xl sm:text-base">
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

const terms = document.querySelector("#terms")

const firstName = document.querySelector("#firstName");
const LastName = document.querySelector("#lastName");
const KoreanName = document.querySelector("#koreanName");

const contry = document.querySelector("#nation_no");

const affilation = document.querySelector("#affiliation");
const koreanAffiliation = document.querySelector("#affiliation_kor")
const department = document.querySelector("#department")
const department_kor = document.querySelector("#department_kor")

const contryNumber = document.querySelector("#contryNum");
const phone = document.querySelector("#phoneNumber")

const email_1 = document.querySelector("#Email1")
const email_2 = document.querySelector("#Email2")
const email_3 = document.querySelector("#Email3")
const check_btn = document.querySelector(".check_btn")
const email_text = document.querySelector(".email_text")


const participationSelect = document.querySelector("#Participation_1")

// const category = document.querySelector("#Category")
const categorySelect = document.querySelector("#Category_1")
const categoryOthers = document.querySelector("#category_others")


const card = document.querySelector("#card");
const transfer = document.querySelector("#transfer")
const deposit_method = document.querySelector("#deposit_method")
const bank = document.querySelector(".bank");
const account = document.querySelector(".account")
const transfer_box = document.querySelector("#transfer_box")
const etc4 = document.querySelector("#etc4")

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

// const abstract_yes = document.querySelector("#abstract_yes");
// const abstract_no = document.querySelector("#abstract_no")
// const copy_yn = document.querySelector("#copy_yn")

const is_score = document.querySelector("#is_score")

const first_time_yn = document.querySelector("#first_time_yn")
const time_num = document.querySelector(".time_num")
const first_time = document.querySelector("#first_time")
const three = document.querySelector("#three")
const six = document.querySelector("#six")
const nine = document.querySelector("#nine")
const ten = document.querySelector("#ten")

const special_request_food = document.querySelector("#special_request_food")
const special_no = document.querySelector("#special_no");
const special_halal = document.querySelector("#special_halal");
const special_vege = document.querySelector("#special_vege")

const fee_input = document.querySelector("#fee")

const header = document.querySelector(".onsite_header")

let fee;
let member_other_type;
let check_email = false;
let kes_check_email = false;

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

department.addEventListener("input", (event) => {
    englishInput(event)
})

function englishInput(event) {
    const inputValue = event.target.value;
    const onlyEnglish = /^[A-Za-z\s\-_,.]+$/;

    if (!onlyEnglish.test(inputValue)) {
        event.target.value = inputValue.replace(/[^A-Za-z\s\-_,.]+/g, '');
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

department_kor.addEventListener("input", (event) => {
    const inputValue = event.target.value;
    const onlyHangul = /^[ㄱ-ㅎㅏ-ㅣ가-힣\s\-_,]+$/;

    if (!onlyHangul.test(inputValue)) {
        event.target.value = inputValue.replace(/[^\uAC00-\uD7AF\u1100-\u11FF\u3130-\u318F\s\-_,]+/g, '');
    }
})

/**email 유효성 검사 */
email_1.addEventListener("input", (event) => {
    const inputValue = event.target.value;
    const emailreg = /^[a-zA-Z0-9\-_,.]*$/;

    if (!emailreg.test(inputValue)) {
        event.target.value = inputValue.replace(/[^A-Za-z0-9\-_,.]+/g, '');
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
        department_kor.style.display = "none"

    } else if (contry.value === "Republic of Korea") {
        KoreanName.style.display = "";
        koreanAffiliation.style.display = ""
        department_kor.style.display = ""
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
    const personalInfoList = [firstName, LastName, KoreanName, contry, affilation, koreanAffiliation,
        department, department_kor,
        phone
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


// /** 가입 경로 other input*/
// cofer_other.addEventListener("click", () => {
//     if (cofer_other.checked) {
//         conference_other.style.display = "";
//         conference_info.value = conference_other.value
//     } else {
//         conference_other.style.display = "none";
//     }
// })

/**가입 경로 */
conferList.forEach((checkbox) => {
    checkbox.addEventListener("change", (e) => {
        conferList.forEach((otherCheckbox) => {
            if (otherCheckbox !== checkbox) {
                otherCheckbox.checked = false;
            }
        });
        // if (e.target.dataset.id) {
        //     conference_other.style.display = "none";
        // }
        conference_info.value = e.target.dataset.id
    });
});


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
    if (categoryValue === "Others") {
        categoryOthers.style.display = "";
    } else {
        categoryOthers.style.display = "none";
    }
    calRegiFee()
})


/**special request food */
special_no.addEventListener("click", () => {
    special_request_food.value = "None"
    special_halal.checked = false;
    special_vege.checked = false;
})

special_halal.addEventListener("click", () => {
    special_vege.checked = false;
    special_no.checked = false;
    special_request_food.value = "Halal"
})

special_vege.addEventListener("click", () => {
    special_halal.checked = false;
    special_no.checked = false;
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

    if (!terms.checked) {
        alert("Please check the Terms section.")
        terms.focus()
        return;
    }

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
    if (!contry.options[contry.selectedIndex].value) {
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

    if (contry.options[contry.selectedIndex].value === "Republic of Korea") {
        if (!KoreanName.value) {
            alert("invaild Name");
            KoreanName.focus()
            return;
        }

        if (!koreanAffiliation.value) {
            alert("invaild affilation");
            koreanAffiliation.focus()
            return;
        }

        if (!department_kor.value) {
            alert("invaild Department");
            department_kor.focus()
            return;
        }
    }


    /** Survey */

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


    // if (!special_no.checked && !special_halal.checked && !special_vege.checked) {
    //     alert("invaild special food");
    //     special_no.focus()
    //     return;
    // }



    /** Registration Fees */

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
    const categoryValue = categorySelect.options[categorySelect.selectedIndex].value;
    const contryValue = contry.options[contry.selectedIndex].value;
    const participationValue = participationSelect.options[participationSelect.selectedIndex].value;

    if (contryValue === "Republic of Korea") {
        if (participationValue === "Participants") {
            if (categoryValue === "Specialist" || categoryValue === "Professor") {
                fee = "70,000";
            } else if (categoryValue === "Fellow" || categoryValue === "Researcher" || categoryValue === "Nurses" ||
                categoryValue === "Nutritionists" || categoryValue === "Corporate member" || categoryValue ===
                "Military medical officer") {
                fee = "30,000";
            } else if (categoryValue === "Resident" || categoryValue === "Student") {
                fee = "0"
            } else {
                fee = "30,000";
            }
        } else {
            fee = 0;
        }
    } else {
        if (participationValue === "Participants") {
            if (categoryValue === "Specialist" || categoryValue === "Professor") {
                fee = "USD 300(KRW 405,000)";
            } else if (categoryValue === "Fellow" || categoryValue === "Researcher" || categoryValue === "Nurses" ||
                categoryValue === "Nutritionists" || categoryValue === "Corporate member" || categoryValue ===
                "Military medical officer") {
                fee = "USD 150(KRW 202,500)";
            } else if (categoryValue === "Resident" || categoryValue === "Student") {
                fee = "0"
            } else {
                fee = "USD 150(KRW 202,500)";
            }
        } else {
            fee = 0;
        }
    }
    if (contryValue === "Republic of Korea" && fee !== undefined) {
        total.innerText = `￦${fee}`
    } else if (fee !== undefined) {
        total.innerText = fee;
    }
    fee_input.value = fee;
}
</script>