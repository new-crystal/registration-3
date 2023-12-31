<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Gothic A1', sans-serif;
    width: 1920px;
    height: 1080px;
}

#accessForm {
    padding: 0 3rem;
    /* height: 60%; */
}

#qrcode:focus {
    outline: none;
}

.font_nanum {
    font-family: 'Nanum Gothic', sans-serif;
}

.qr_info_wrap {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 5.5rem;
    /* border: 1px solid #eee; */
    margin: 1rem auto;
    font-weight: 500;
    font-size: 2.5rem;
}

.info_name {
    width: 33%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgb(49 46 129);
    color: white;

}

.info_content {
    width: 66%;
    height: 100%;
    /* border: 2px solid rgb(49 46 129); */
}

.info_content>input {
    margin-left: 139px;
    margin-top: 10px;
    padding: 0 2rem;
    z-index: 999;
}

input {
    /* background-color: orange; */
    background-color: transparent;
    font-size: 3rem;
}

.info_content>input:focus {
    outline: none
}

#text_box {
    font-size: 1.88rem;
}

.fresh {
    width: 152%;
    height: 291px;
    /* background-color: #ddd; */
    /* transform: translate(71px, 114px); */
}

.name {
    position: absolute;
    top: 485px;
    left: 74px;
    font-family: 'DM Serif Text', serif;
    font-size: 45px;
    overflow: hidden;
    width: 688px;
}


.number {
    position: absolute;
    top: 443px;
    left: 1029px;
    font-family: 'DM Serif Text', serif;
    font-size: 250px;
    width: 500px;
}

.none_number {
    position: absolute;
    top: 561px;
    left: 802px;
    font-family: 'DM Serif Text', serif;
    font-size: 200px;
    width: 759px;
    height: 202px;
}

#qrcode {
    position: absolute;
    top: -12px;
    left: 0;
}
</style>

<body id="body" class="flex items-center justify-center">
    <!-- <?php print_r($users) ?> -->
    <div id="container" class="w-full h-full flex items-center overflow-hidden">
        <div class="h-full">
            <div>
                <div>
                    <img src="../../assets/images/gala_table.png" onclick="window.location.replace()"
                        style="position: absolute;z-index: -999;width: 1920px;" />
                    <dl>
                        <script type="text/javascript">
                        $(function() {
                            $("#accessForm").submit(function() {
                                if (!$.trim($("#qrcode").val())) {
                                    alert("QR CODE를 입력하세요.");
                                    $("#qrcode").focus();
                                    return false;
                                }

                                $("#accessForm").attr("action", "/access/gala_table");

                                return true;
                            });
                        });
                        </script>
                        <div class="input_box">
                            <?php echo form_open('/access/gala_table', 'id="accessForm" name="accessForm"') ?>
                            <fieldset>
                                <div class="fresh"></div>
                                <div>
                                    <dl class="pl-2">
                                        <dd><input type="text" name="qrcode" id="qrcode"
                                                class=" h-20  px-3 py-3 mt-5 border-indigo-900 mx-auto"
                                                style="width: 656px;" placeholder="" autofocus></dd>
                                    </dl>
                                    <dl class="pl-2">
                                        <div id="qr_nick_name" class="qr_info_wrap">
                                            <div class="info_name" style="opacity: 0;">성 명</div>
                                            <div class="info_content"><input type="text" class="qr_info input name"
                                                    value="<?php if (isset($users['first_name'])) echo $users['first_name'] . ' ' . $users['last_name'] ?>"
                                                    readonly>
                                            </div>
                                        </div>
                                    </dl>
                                    <dl class="pl-2">
                                        <div id="qr_nick_name" class="qr_info_wrap">
                                            <div class="info_table_num" style="opacity: 0;">테이블 넘버</div>
                                            <?php if (isset($users['remark6']) && !$users['remark7']) { ?>
                                            <div class="info_content"><input type="text"
                                                    class="qr_info input none_number" value="No Data." readonly>
                                            </div>
                                            <?php } else { ?>
                                            <div class="info_content"><input type="text" class="qr_info input number"
                                                    value="<?php if (isset($users['remark7'])) echo $users['remark7'] ?>"
                                                    readonly>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </dl>
                                    <div class="w-full flex items-center justify-center"><button type="submit"
                                            value="등록"
                                            class="btnPoint w-full flex items-center justify-center"></button></div>
                                </div>
                            </fieldset>
                            </form>

                        </div>
                    </dl>
                </div>
            </div>

            <script type="text/javascript">
            const qrcode = document.querySelector("#qrcode");
            const accessForm = document.querySelector("#accessForm");
            const body = document.querySelector("#body")
            const textList = document.querySelectorAll(".qr_info")

            let hideTimeout;
            accessForm.addEventListener(
                "submit", (e) => {
                    // e.preventDefault();
                    qrcdoe.value.replace(/ /g, "")
                })

            /**body 클릭시 qr input focus */
            body.addEventListener("click", () => {
                qrcode.focus();
            })
            window.onload = () => {
                qrcode.focus();
                //hideText()
            }

            /**10초 이후 텍스트 자동 제거 */
            function hideText() {
                let hideTimeout = setTimeout(() => {
                    textList.forEach((text) => {
                        text.value = ""
                    })
                }, 10000)
            }
            </script>