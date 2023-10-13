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

    .small_name {
        font-size: 30px !important;
    }

    .receipt {
        transform: rotate(0.5turn) translate(-100px, -180px);
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

    .small {
        font-size: 34px !important;
        line-height: 64px !important;
    }

    .org_small {
        transform: translateY(7px) !important;
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
                echo '<div class="a4_area">';
                echo '<div class="bg_area">';
                echo '<div class="txt_con">';
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

                echo '<div class ="text_box">';
                echo '<div class="receipt receipt_price">' . $users['fee'] . '</div>';
                echo '<div class="receipt receipt_name">' . $users['first_name'] . ' ' . $users['last_name'] .   '</div>';
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
        // window.print();
    }




    $(function() {
        $("#btnPrint").trigger("click");


        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('print');
            mediaQueryList.addListener(function(mql) {
                if (mql.matches) {
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