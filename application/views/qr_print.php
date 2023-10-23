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
    font-size: 38px !important;
    line-height: 50px !important;

}

.org_small {
    transform: translateY(7px) !important;
}

.small_box {
    padding: 15px 10px 15px 10px !important;
}

.reg {
    text-align: right !important;
    transform: translate(-16px, -33px);
}

.tag_price,
.tag_name {
    transform: rotate(0.5turn);
    width: 77%;
    margin: 0 auto;
    text-align: right !important;
}

.tag_name {
    position: relative;
    top: 280px;
}

.tag_price {
    position: relative;
    top: 265px;
}

.long_tag>.tag_name {
    top: 285px;
}

.long_tag>.tag_price {
    top: 270px;
}

.three {
    line-height: 110px !important;
    font-weight: 900 !important;
    font-size: 77px !important;
}

.small_25 {
    font-size: 32px !important;
}

.tag_long>.tag_name {
    top: 255px;
}

.tag_long>.tag_price {
    top: 240px;
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
            <div id="editor1" contenteditable="true">
                <?php
                $lang = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $users['name_kor']);
                $nicknameLength = mb_strlen($users['first_name'], "UTF-8") + mb_strlen($users['last_name'], "UTF-8");
                $orgLength = mb_strlen($users['org_nametag'], "UTF-8") + mb_strlen($users['nation'], "UTF-8");
                $participant = $users['attendance_type'];
                // echo $nicknameLength;
                // echo mb_strlen($users['org_nametag'], "UTF-8") + mb_strlen($users['nation'], "UTF-8");
                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';
                echo '<div class="reg" id="reg">' .  $users['registration_no'] . '</div>';
                if ($users['nt_info'] != '') {
                    echo '<div class="org" id="nt_info">' . $users['nt_info'] . '</div>';
                }

                /**닉네임 조건식 */
                /**1. 총 글자 수 17글자 이하 */
                if ($nicknameLength < 17 && $participant !== "Press") {
                    echo '<div class="nick_name lang_en" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en" id="last_name">' .  $users['last_name'] . '</div>';
                }
                /**2. 총 글자 수 17글자 이상 */
                else if ($nicknameLength >= 17 && $nicknameLength < 23 && $participant !== "Press") {
                    echo '<div class="small_box">';
                    echo '<div class="nick_name lang_en small" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en small" id="last_name">' .  $users['last_name'] . '</div>';
                    echo '</div>';
                }
                /**2. 총 글자 수 23글자 이상 */
                else if ($nicknameLength >= 23 && $participant !== "Press") {
                    echo '<div class="small_box">';
                    echo '<div class="nick_name lang_en small_25" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en small_25" id="last_name">' .  $users['last_name'] . '</div>';
                    echo '</div>';
                }
                /**3. 기자일때 */
                else if ($participant === "Press") {
                    echo '<div class="nick_name lang_en three" id="first_name">' .  $users['first_name'] .  $users['last_name'] .  '</div>';
                }
                /**1. 기자 아닐 때*/
                if ($participant !== "Press") {
                    echo '<div class="org" id="org">' . $users['org_nametag'] . ',' . ' ' . $users['nation'] . '</div>';
                }
                /**2. 기자일때 */
                else if ($participant === "Press") {
                    echo '<div class="org" id="org" style="height:70px;">' . $users['org_nametag'] . '</div>';
                }
                echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $users['registration_no'] . '.jpg"></div>';


                if ($nicknameLength < 19) {
                    echo '<div class="long_tag">';
                    echo '<div class="tag_price">' . $users['fee'] . '</div>';
                    echo '<div class="tag_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
                    echo '</div>';
                }
                /**2. 총 글자 수 19글자 이상 */
                else if ($nicknameLength >= 19 && $nicknameLength < 23) {
                    echo '<div class="tag_price">' . $users['fee'] . '</div>';
                    echo '<div class="tag_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
                }
                /**2. 총 글자 수 25글자 이상 */
                else if ($nicknameLength >= 23) {
                    echo '<div class="tag_long">';
                    echo '<div class="tag_price">' . $users['fee'] . '</div>';
                    echo '<div class="tag_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
                    echo '</div>';
                }

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
<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("qrcode"));
dragElement(document.getElementById("org"));
dragElement(document.getElementById("nick_name"));

function dragElement(elmnt) {
    var pos1 = 0,
        pos2 = 0,
        pos3 = 0,
        pos4 = 0;
    if (document.getElementById(elmnt.id)) {
        /* if present, the header is where you move the DIV from:*/
        document.getElementById(elmnt.id).onmousedown = dragMouseDown;
    } else {
        /* otherwise, move the DIV from anywhere inside the DIV:*/
        elmnt.onmousedown = dragMouseDown;
    }

    function dragMouseDown(e) {
        e = e || window.event;
        e.preventDefault();
        // get the mouse cursor position at startup:
        pos3 = e.clientX;
        pos4 = e.clientY;
        document.onmouseup = closeDragElement;
        // call a function whenever the cursor moves:
        document.onmousemove = elementDrag;
    }

    function elementDrag(e) {
        e = e || window.event;
        e.preventDefault();
        // calculate the new cursor position:
        pos1 = pos3 - e.clientX;
        pos2 = pos4 - e.clientY;
        pos3 = e.clientX;
        pos4 = e.clientY;
        // set the element's new position:
        elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
        elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
    }

    function closeDragElement() {
        /* stop moving when mouse button is released:*/
        document.onmouseup = null;
        document.onmousemove = null;
    }
}
</script>
<script src="/ckeditor/ckeditor.js"></script>
<script>
// Replace the <textarea id="editor1"> with a CKEditor 4
// instance, using default configuration.
//        CKEDITOR.replace( 'editor1' );

// Turn off automatic editor creation first.
CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editor1');
</script>
</body>