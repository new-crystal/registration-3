<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet"> -->

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
        /* font-family: Arial_italic; */
    }

    .nick_name {
        font-family: Arial_bold;
        font-size: 48px;
    }


    .small_nickname {
        font-family: Arial_bold;
    }

    #printThis {
        width: 10cm;
        height: 24cm;
        margin: 0;
        padding: 0;
    }

    #last_name {
        padding: 0 !important;
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
                $lang = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $users['name_kor']);
                $nicknameLength = mb_strlen($users['first_name'], "UTF-8") + mb_strlen($users['last_name'], "UTF-8");
                $orgLength = mb_strlen($users['org_nametag'], "UTF-8");
                $participant = $users['attendance_type'];
                $lucky_num = explode("-",$users['registration_no'])[1]; 
                //echo $nicknameLength;
                // echo mb_strlen($users['org_nametag'], "UTF-8") + mb_strlen($users['nation'], "UTF-8");
                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';
                echo '<div class="number_box">';
                // echo '<div class="reg_1">' .  $lucky_num . '</div>';
                // echo '<div class="reg_2">' .  $users['registration_no'] . '</div>';
                echo '</div>';
                echo '<div class="reg" id="reg">' .  $lucky_num . '</div>';
                if ($users['nt_info'] != '') {
                    echo '<div class="org" id="nt_info">' . $users['nt_info'] . '</div>';
                }
                /**닉네임 조건식 17글자이상 24글자 미만 */
                if ($nicknameLength >= 17 && $nicknameLength < 24) {
                    echo '<div class="nick_name lang_en small_nickname" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en small_nickname" id="last_name">' .  $users['last_name'] . '</div>';
                }
                /**닉네임 조건식 24글자 이상 */
                else if ($nicknameLength >= 24) {
                    echo '<div class="nick_name lang_en small_small_nickname" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en small_small_nickname" id="last_name">' .  $users['last_name'] . '</div>';
                }
                /**닉네임 조건식 17글자 미만 */
                else if ($nicknameLength < 17) {
                    echo '<div class="nick_name lang_en" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en" id="last_name">' .  $users['last_name'] . '</div>';
                }

                /**소속 조건식 30글자 기준 */
                if ($orgLength <= 30) {
                    echo '<div class="org" id="org">' . $users['org_nametag'] . '</div>';
                    echo '<div class="org nation" id="org">' . $users['nation'] . '</div>';
                } else {
                    echo '<div class="org" id="org">' . $users['org_nametag'] . '</div>';
                    echo '<div class="org nation" id="org">' . $users['nation'] . '</div>';
                }
                echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $users['registration_no'] . '.jpg"></div>';

                echo '<div class="receipt receipt_price number_box">' . $users['fee']. '</div>';
                echo '<div class="receipt receipt_name number_box">' . $users['first_name'] ." " . $users['last_name']. '</div>';
                echo '<div class="receipt end_num_1 number_box">' . $lucky_num . '</div>';
                echo '<div class="receipt end_num_2 number_box">' . $lucky_num . '</div></div>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                ?>
            </div>
        </div>
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
    printElement(document.getElementById("printThis"));
    //window.close();
}

function printElement(elem) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection") ? document.getElementById("printSection") : null ;

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




$(function() {
    $("#btnPrint").trigger("click");


    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function(mql) {
            if (mql.matches) {
                console.log(mql)
                console.log('프린트 이전에 호출됩니다.');
            } else {
                console.log('프린트 이후에 호출됩니다.');
                window.close();
            }
        });
    }
});
</script>

</body>