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
        font-size: 30px !important;
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
        top: 232px;
        left: -30px;
        text-align: right !important;
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
                $nation = $item['nation'];
                $luckyNum = substr($item['registration_no'], 11, 4);

                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';
                if ($item['nt_info'] != '') {
                    echo '<div class="org" id="nt_info">' . $item['nt_info'] . '</div>';
                }
                echo '<div class="lucky_num" id="lucky_num">' . $luckyNum  . '</div>';
                echo '<div class="org" id="org">' . $item['org_nametag'] . '</div>';
                if (mb_strlen($item['org_nametag']) <= 51) {
                    echo '<div class="org" id="nation" style="height:0;    transform: translateY(-21px);">' . $item['nation']  . '</div>';
                } else {
                    echo '<div class="org" id="nation" style="height:0;    transform: translateY(-13px);">' . $item['nation']     . '</div>';
                }

                /**닉네임 조건식 */
                // 한국인 X && firstname 또는 lastname 15글자 이상
                if ($nicknameLength < 25) {
                    if (mb_strlen($item['first_name']) >= 15 || mb_strlen($item['last_name']) >= 15) {
                        echo '<div class="nick_name lang_en small_name" id="first_name">' .  $item['first_name'] . '</div>';
                        echo '<div class="nick_name lang_en small_name" id="last_name">' .  $item['last_name'] . '</div>';
                        // 한국인 X && firstname 15글자 이하
                    } else if (mb_strlen($item['first_name']) <= 15) {
                        echo '<div class="nick_name lang_en" id="first_name">' .  $item['first_name'] . '</div>';
                        echo '<div class="nick_name lang_en" id="last_name">' .  $item['last_name'] . '</div>';
                    }
                } else if ($nicknameLength >= 25) {
                    echo '<div class="nick_name lang_en" id="first_name" style="line-height: 40px;font-size: 25px;">' .  $item['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en" id="last_name" style="line-height: 40px;font-size: 25px;">' .  $item['last_name'] . '</div>';
                }
                // //한국인 O
                // if ($nation == "Republic of Korea") {
                //     echo '<div class="nick_name lang_en small_name" id="first_name">' . $users['last_name'] . " " . $users['first_name'] . '</div>';
                // }
                echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $item['registration_no'] . '.jpg"></div>';

                //한국인 X firstname & lastName 15글자 이상
                if (mb_strlen($item['first_name']) >= 15 || mb_strlen($item['last_name']) >= 15) {
                    echo '<div class ="small_text_box">';

                    //한국인 X firstname & lastName 15글자 이하
                } else if (mb_strlen($item['first_name']) <= 15 && mb_strlen($item['last_name']) <= 15) {
                    echo '<div class ="text_box">';
                }

                echo '<div class="receipt receipt_name">' . $item['first_name'] . ' ' . $item['last_name'] .   '</div>';
                echo '<div class="receipt receipt_num_1">' . $item['registration_no'] . '</div>';
                if (mb_strlen($item['fee']) == 3) {
                    echo '<div class="receipt receipt_price">' . 'USD ' . number_format($item['fee']) . '</div>';
                } else if (mb_strlen($item['fee']) == 1) {
                    echo '<div class="receipt receipt_price">' . number_format($item['fee']) . '</div>';
                } else {
                    echo '<div class="receipt receipt_price">' . number_format($item['fee']) . '원' . '</div>';
                }

                echo '</div>';

                echo '<div class="lucky_num_bottom" id="lucky_num_bottom">' . $luckyNum . '</div>';
                // echo '<div class="receipt receipt_num_2">' . $users['registration_no'] . '</div>';
                // echo '<div class="receipt receipt_small small_nick">' . $users['nick_name'] . '</div>';
                // echo '<div class="receipt receipt_small smaill_ln">' . $users['ln'] . '</div>';
                // echo '<div class="receipt receipt_small small_sn">' . $users['sn'] . '</div>';
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