<script src="https://cdn.tailwindcss.com"></script>
<style>
    
    @font-face {
        font-family: Gong;
        src: url("../../../assets/font/Gong_Gothic_OTF_Bold.otf");
    }

    .text_box {
        font-size: 7rem;
        color: #000;
        z-index: 49;
        font-weight: 600;
        animation: fadeIn 2s;
        text-align: left;
    }

    .small_text_box {
        font-size: 7rem;
        color: #000;
        z-index: 49;
        font-weight: 600;
        animation: fadeIn 2s;
        position: relative;
        top: 0;
        left: 80px;
        text-align: left;
    }

    .long_small_text_box {
        font-size: 7rem;
        color: #000;
        z-index: 49;
        font-weight: 600;
        animation: fadeIn 2s;
        position: relative;
        top: 0;
        left: 80px;
        text-align: left;
    }

    .long_small_text_box #org {
        top: 172px;
    }

    .text_box #org {
        top: 141px;
    }

    #nickname {
        position: absolute;
        top: -121px;
        left: -500px;
        width: 1000px;
    }

    #org {
        position: absolute;
        top: 159px;
        left: -493px;
        width: 1050px;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translate3d(0, 0, -100%);
        }

        to {
            opacity: 1;
            transform: translateZ(0);
        }
    }

    .alert_modal {
        width: 100%;
        height: 380px;
        background: #ffc425;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #FFF;
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0.85;
        z-index: 999;
    }

    .alert_modal>p{
        font-size: 5.5rem;
        font-weight: 700;
        position: relative;
        /* animation: fadeInUp 1s; */
        font-family: Gong;
        -webkit-text-stroke-width: 4px;
        -webkit-text-stroke-color: #004471;
    }

    .alert_modal>h6 {
        font-size: 4.5rem;
        font-weight: 600;
        position: relative;
        /* animation: fadeInUp 1s; */
        font-family: Gong;
        -webkit-text-stroke-width: 4px;
        -webkit-text-stroke-color: #004471;
        }


    input #accessForm {
        padding: 0 3rem;
        /* height: 60%; */
    }

    #qrcode:focus {
        outline: none;
    }

    .qr_info_wrap {
        width: 800px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 5.5rem;
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

    /* .info_content {
        width: 66%;
        height: 100%;
    } */

    .info_content>input {
        width: 843px;
        height: 100%;
        padding: 0 2rem;
        z-index: 999;
    }

    input {
        /* background-color: orange; */
        background-color: transparent;
        font-size: 3rem;
        font-family: 'Roboto', sans-serif !important;
    }

    .info_content>input:focus {
        outline: none
    }

    #text_box {
        font-size: 1.88rem;
    }

    .input_box {
        transform: translate(0px, 200px);
        height :340px;
        width:1780px; 
    }


</style>
<div class="w-full h-screen flex flex-col items-center justify-center">
    <div class="page_1">
        <img src="../../assets/images/new_index.png" />
    </div>
    <!-- <div class="page_2" style="display: none;">
        <img class="absolute top-0 left-0" style="z-index: -99;" src="../../assets/images/name_org.png" />
        <?php if (mb_strlen($users['affiliation']) > 7 && mb_strlen($users['affiliation']) <= 14) { ?>
            <div class="small_text_box">
                <div id="nickname" class="z-50 block">
                    <?php if (isset($users['first_name'])) echo $users['first_name'] ?>
                </div>
            </div>
            <div class="small_text_box">
                <div id="org" class=" z-50 block" style=" font-size: 5rem;">
                    <?php if (isset($users['affiliation'])) echo $users['affiliation'] ?></div>
            </div>
    </div> 
 <?php } else if (mb_strlen($users['affiliation']) >= 14) { ?>
    <div class="long_small_text_box">
        <div id="nickname" class=" z-50 block">
            <?php if (isset($users['first_name'])) echo $users['first_name'] ?>
        </div>
    </div>
    <div class="long_small_text_box">
        <div id="org" class=" z-50 block" style="font-size: 4rem;">
            <?php if (isset($users['affiliation'])) echo $users['affiliation'] ?></div>
    </div> 
</div>
<?php } else if (mb_strlen($users['affiliation']) <= 7) { ?>
    <div class="text_box" style="position: relative;left: 100px;">
        <div id="nickname" class=" z-50 block">
            <?php if (isset($users['first_name'])) echo $users['first_name'] ?>
        </div>
    </div>
    <div class="text_box" style="position: relative;left: 100px;">
        <div id="org" class=" z-50 block">
            <?php if (isset($users['affiliation'])) echo $users['affiliation'] ?></div>
    </div>
    </div>  -->
    <?php   } ?>
 <div class="page_3" style="display: none;">
    <div id="container" class="w-full h-full flex items-center">
        <div class="h-full">
            <div>
                <div>
                    <img src="../../assets/images/row_app_loading_bg.png" style="position: absolute;z-index: -999;width: 1920px;top:0;left:0;" />
                    <dl>
                        <div class="input_box">
                           <form>
                            <fieldset>
                                <div>
                                    <div>
                                    <dl class="pl-2">
                                        <dd><input type="text" name="qrcode" id="qrcode" class="h-20  px-3 py-3 mt-5 mx-auto" placeholder="" autofocus  autocomplete='off'>
                                        </dd>
                                    </dl>
                                <div>
                                    <div class="flex w-[1730px] h-[345px] items-center justify-between">
                                <div class="h-[340px] flex flex-col  items-center justify-between">
                                    <dl class="pl-2">
                                        <div id="qr_nick_name" class="qr_info_wrap">
                                            <div class="info_content"><input type="text" class="qr_info input name" value="<?php if (isset($users['first_name'])) echo $users['first_name'] . ' ' . $users['last_name'] ?>" readonly  autocomplete='off'>
                                            </div>
                                        </div>
                                    </dl>

                                    <dl class="pl-2">
                                        <div id="qr_nick_name" class="qr_info_wrap">
                                            <div class="info_content"><input type="text" class="qr_info input name" value="<?php if (isset($users['first_name'])) echo $users['first_name'] . ' ' . $users['last_name'] ?>" readonly  autocomplete='off'>
                                            </div>
                                        </div>
                                    </dl>
                                </div>
                                <div>
                                        <dl class="pl-2 h-[340px] flex flex-col  items-center justify-between">
                                            <div id="qr_entrance" class="qr_info_wrap">
                                                <div class="info_content">
                                                    <input type="text" class="qr_info input" value="<?php if(isset($times['min_time'])) { $enter = date("Y-m-d H:i", strtotime($times['min_time'])); echo $enter; } ?>
                                                    " readonly  autocomplete='off'>
                                                </div>

                                            </div>
                                            <div id="qr_exit" class="qr_info_wrap">
                                                <div class="info_content">
                                                    <input type="text" class="qr_info input" value="<?php if (isset($times['max_time'])) { $leave = date("Y-m-d H:i", strtotime($times['max_time'])); echo $leave;} ?>
                                                    " readonly  autocomplete='off'>
                                                </div>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                                </div>
                                </div>
                            </fieldset>
                            </form>
                        </div>
                    </dl>
                </div>
            </div>
    </div>
    <!-- <div class="alert"  id="alert"> -->
    <!-- <div class="alert_modal" style="display:none;" id="alert">
        <h6 class="alert_name"></h6>
        <h6 class="time"></h6>
        <p class="alert_text">Attendance Checked!</p>
    </div> -->
</div>
<script>
    const page1 = document.querySelector(".page_1");
    const page2 = document.querySelector(".page_2")
    const page3 = document.querySelector(".page_3")
    const nickname = document.querySelector("#nickname");
    const org = document.querySelector("#org");
    
    const bc = new BroadcastChannel("test_channel");
    
    bc.onmessage = (data)=>{
        //console.log(data.data.qrcode)
        childFunction(data.data)
    }
    
    function childFunction(data) {
        if (data.qrcode && data.type !== 2) {
            window.location.href = `/qrcode/open?qrcode=${data.qrcode}`
        }else if(data.qrcode && data.type == 2){
            page3.style.display = "";
            page1.style.display = "none";
            // const alertModal = document.querySelector(".alert_modal");
            // const alertText = document.querySelector(".alert_text");
            // //console.log(alert)
            // alertModal.style.display = "";
            // const today = new Date();
            // const time = document.querySelector(".time");
            // const alertName = document.querySelector(".alert_name")

            // const hours = ('0' + today.getHours()).slice(-2); 
            // const minutes = ('0' + today.getMinutes()).slice(-2);
            // const year = today.getFullYear();
            // const month = ('0' + (today.getMonth() + 1)).slice(-2);
            // const day = ('0' + today.getDate()).slice(-2);

            // const dateString = year + '-' + month  + '-' + day;

            // alertName.innerText = `${data.nickname}`;
            // time.innerText = `${dateString} ${hours}:${minutes}`;

            setTimeout(() => {
                page3.style.display = "none";
                page1.style.display = "";
                //alertModal.style.display = "none";
            }, 3000)

        }
    }

    // window.onload = () => {
    //     page1.style.display = "";
    //     page2.style.display = "none";
    //     if (window.location.search) {
    //         page1.style.display = "none";
    //         page2.style.display = "";
    //         setTimeout(() => {
    //             page1.style.display = "";
    //             page2.style.display = "none";
    //         }, 10000)
    //     }
    // }



    window.addEventListener('message', function(event) {
        if (event.data) {
            childFunction(event.data);
        }
    });

    /**우클릭 방지 */
    document.addEventListener("contextmenu", function(event) {
        event.preventDefault();
    }, false);
</script>