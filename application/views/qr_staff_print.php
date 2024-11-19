<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

<style>
@page {
    size: 10cm 24cm;
    margin: 0;
}

body {
    margin: 0;
    padding: 0;
}

/* @font-face {
    font-family: NanumSquare;
    src: url("../../../assets/font/NanumSquare-Hv.otf");
} */

.nick_name {
    font-family: 'Open Sans', sans-serif;
}

#printThis {
    width: 10cm;
    height: 24cm;
    margin: 0;
    padding: 0;
}

.small_name {
    font-size: 25px !important
}

.small_text_box {
    position: relative;
    top: -18px;
}

.small_text_box>.receipt_name {
    left: -42px !important;
}

.text_box>.receipt_name {
    left: -42px !important;
}

#last_name {
    padding: 0 !important;
}

.text_box {
    position: relative;
    top: -19px;
}

.kor_box {
    position: relative;
    top: 24px;
}

.lucky_num {
    position: relative;
    top: -130px;
    left: -22px;
    font-size: 15px;
    text-align: right !important;
}

.lucky_num_bottom {
    position: relative;
    top: 229px;
    left: -30px;
    text-align: right !important;
}
</style>
<!-- Main content -->
<div id="nametag_wrapper">
    <div class="edit_wrapper">
        <button id="btnPrint" type="button" class="btn btn-primary">Print</button>
        <!--
                    <div id="edit_area">
                        <textarea name="editor1" id="editor1" rows="10" cols="50">
                            This is my textarea to be replaced with CKEditor 4.
                        </textarea>
                    </div>
-->
    </div>
    <!-- Content area -->
    <div class="content" id="nametag">
        <div id="printThis">
            <div id="editor1" contenteditable="true" style="height:24cm;">
                <?php
                // $lang = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $users['name_kor']);
                // $nicknameLength = mb_strlen($users['first_name'], "UTF-8") + mb_strlen($users['last_name'], "UTF-8");
                // $nation = $users['nation'];
                // $luckyNum = substr($users['registration_no'], 11, 4);

                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';




                /**닉네임 조건식 */
                // 한국인 X && firstname 15글자 이상

                echo '<div class="nick_name lang_en" id="first_name" style="font-size: 100px;padding: 78px 10px 0 10px;line-height: 86px;">' . 'PRESS' . '</div>';

                // 한국인 X && firstname 15글자 이하

                // //한국인 O
                // if ($nation == "Korea") {
                //     echo '<div class="nick_name lang_en small_name" id="first_name">' . $users['last_name'] . " " . $users['first_name'] . '</div>';
                // }
                //echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $users['registration_no'] . '.jpg"></div>';


                echo '<div class="receipt receipt_name">' .  '</div>';
                echo '<div class="receipt receipt_num_1">' . '</div>';

                echo '</div>';

                echo '<div class="lucky_num_bottom" id="lucky_num_bottom">' .  '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';

                ?>
            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
<style>
body {
    background-color: #fff;
}
</style>
<script>
document.getElementById("btnPrint").onclick = function() {

    // window.location.href = `https://reg2.webeon.net/qrcode/print_file?registration_no=${id}`
    printElement(document.getElementById("printThis"));
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.style.width = "10cm";
        $printSection.style.height = "24cm";
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    //            console.log($printSection);
    window.print();
}
</script>


</body>