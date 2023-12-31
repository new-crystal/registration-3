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

    @font-face {
        font-family: Arial_bold;
        src: url("../../../assets/font/arial_bold.otf");
    }

    @font-face {
        font-family: Arial_italic;
        src: url("../../../assets/font/Arial_Italic.otf");
    }

    .org {
        font-family: Arial_italic;
    }

    .nick_name {
        font-family: Arial_bold;
        font-size: 48px;
    }

    #printThis {
        width: 10cm;
        height: 24cm;
        margin: 0;
        padding: 0;
    }

    .receipt {
        transform: rotate(0.5turn);
    }


    .text_box>.receipt_name {
        left: -42px !important;
    }

    #last_name {
        padding: 0 !important;
    }

    .text_box {
        position: absolute;
        top: 302px;
    }

    .kor_box {
        position: absolute;
        top: 24px;
    }

    .small {
        font-size: 34px !important;
        line-height: 64px !important;
    }

    .org_small {
        transform: translateY(7px) !important;
    }

    .small_box {
        top: 302px !important;
    }

    .reg {
        text-align: right !important;
        transform: translate(-16px, -43px);
    }

    /* 
    .long_nick>.receipt {
        position: static !important;
        transform: rotate(0.5turn) !important;
    }

    .long_nick {
        padding-top: 249px;
    } */

    .tag_price,
    .tag_name {
        transform: rotate(0.5turn);
        width: 77%;
        margin: 0 auto;
        text-align: right !important;
    }

    .tag_name {
        position: relative;
        top: 265px;
    }

    .tag_price {
        position: relative;
        top: 250px;
    }
</style>

<!-- Main content -->
<div id="nametag_wrapper">
    <div class="edit_wrapper">
        <button onclick="" id="btnPrint" type="button" class="btn btn-primary" style="margin-left:20px;">Print<?php $num_row ?></button>
    </div>

    <!-- Content area -->
    <div class="content" id="nametag">
        <div id="printThis">
            <?php
            $num_int = 1;
            foreach ($users as $item) {
                $lang = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $item['name_kor']);
                $nicknameLength = mb_strlen($item['first_name'], "UTF-8") + mb_strlen($item['last_name'], "UTF-8");
                $orgLength = mb_strlen($item['org_nametag'], "UTF-8") + mb_strlen($item['nation'], "UTF-8");
                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';
                echo '<div class="reg" id="reg">' .  $item['registration_no'] . '</div>';
                if ($item['nt_info'] != '') {
                    echo '<div class="org" id="nt_info">' . $item['nt_info'] . '</div>';
                }

                /**닉네임 조건식 */
                /**1. 총 글자 수 22글자 이하 */
                if ($nicknameLength < 22) {
                    echo '<div class="nick_name lang_en" id="first_name">' .  $item['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en" id="last_name">' .  $item['last_name'] . '</div>';
                }
                /**2. 총 글자 수 22글자 이상 */
                else if ($nicknameLength >= 22) {
                    echo '<div class="nick_name lang_en small" id="first_name">' .  $item['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en small" id="last_name">' .  $item['last_name'] . '</div>';
                }

                /**소속, 나라 조건식 */
                /**1. 총 글자 수 44글자 이하 */
                // if ($orgLength < 44) {
                //     echo '<div class="org" id="org">' . $item['org_nametag'] . ',' . ' ' . $item['nation'] . '</div>';
                // }
                // /**2. 총 글자 수 44글자 이상 */
                // else if ($orgLength >= 44) {
                //     echo '<div class="org org_small" id="org">' . $item['org_nametag'] . ',' . ' ' . $item['nation'] . '</div>';
                // }
                echo '<div class="org" id="org">' . $item['org_nametag'] . ',' . ' ' . $item['nation'] . '</div>';
                echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $item['registration_no'] . '.jpg"></div>';

                /**소속, 나라 조건식 */
                /**1. 총 글자 수 44글자 이하 */
                // if ($orgLength < 44) {
                //     echo '<div class ="text_box small_box">';
                // }
                // /**2. 총 글자 수 44글자 이상 */
                // else if ($orgLength >= 44) {
                //     echo '<div class ="text_box">';
                // }
                echo '<div class ="text_box small_box">';
                echo '<div class="receipt receipt_price">' . $item['fee'] . '</div>';
                echo '<div class="receipt receipt_name">' . $item['first_name'] . ' ' . $item['last_name'] .   '</div>';
                echo '</div>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                $num_int = $num_int + 1;
            }
            ?>
        </div>
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
        // const id = "<?php echo $users['registration_no']; ?>";

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
        window.print();
    }
</script>
</body>