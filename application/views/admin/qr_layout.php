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


    #last_name {
        padding: 0 !important;
    }

    .text_box {
        position: relative;
        top: 140px !important;
    }

    .small {
        font-size: 34px !important;
        line-height: 64px !important;
    }

    .org_small {
        transform: translateY(7px) !important;
    }

    .small_box {
        top: 147px !important;
    }

    .reg {
        text-align: right !important;
        transform: translate(-16px, -43px);
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
                $orgLength = mb_strlen($users['org_nametag'], "UTF-8") + mb_strlen($users['nation'], "UTF-8");
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
                /**1. 총 글자 수 22글자 이하 */
                if ($nicknameLength < 22) {
                    echo '<div class="nick_name lang_en" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en" id="last_name">' .  $users['last_name'] . '</div>';
                }
                /**2. 총 글자 수 22글자 이상 */
                else if ($nicknameLength >= 22) {
                    echo '<div class="nick_name lang_en small" id="first_name">' .  $users['first_name'] . '</div>';
                    echo '<div class="nick_name lang_en small" id="last_name">' .  $users['last_name'] . '</div>';
                }

                /**소속, 나라 조건식 */
                /**1. 총 글자 수 44글자 이하 */
                if ($orgLength < 44) {
                    echo '<div class="org" id="org">' . $users['org_nametag'] . ',' . ' ' . $users['nation'] . '</div>';
                }
                /**2. 총 글자 수 44글자 이상 */
                else if ($orgLength >= 44) {
                    echo '<div class="org org_small" id="org">' . $users['org_nametag'] . ',' . ' ' . $users['nation'] . '</div>';
                }


                echo '<div id="qrcode" class=""><img src="/assets/images/QR/qrcode_' . $users['registration_no'] . '.jpg"></div>';

                /**소속, 나라 조건식 */
                /**1. 총 글자 수 44글자 이하 */
                if ($orgLength < 44) {
                    echo '<div class ="text_box small_box">';
                    echo '<div class="receipt receipt_price">' . $users['fee'] . '</div>';
                    echo '<div class="receipt receipt_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
                    echo '</div>';
                }
                /**2. 총 글자 수 44글자 이상 */
                else if ($orgLength >= 44) {
                    echo '<div class ="text_box">';
                    echo '<div class="receipt receipt_price">' . $users['fee'] . '</div>';
                    echo '<div class="receipt receipt_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
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
        const id = "<?php echo $users['registration_no']; ?>";

        window.location.href = `https://reg3.webeon.net/qrcode/print_file?registration_no=${id}`
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