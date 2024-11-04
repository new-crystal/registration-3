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

</style>
<div class="w-full h-screen flex flex-col items-center justify-center">
    <div class="page_1">
        <img src="../../assets/images/new_index.png" />
    </div>
    <div class="page_2" style="display: none;">
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
    </div> 
    <?php   } ?>
    
    <!-- <div class="alert"  id="alert"> -->
    <div class="alert_modal" style="display:none;" id="alert">
        <h6 class="alert_name"></h6>
        <h6 class="time"></h6>
        <p class="alert_text">Attendance Checked!</p>
    </div>
</div>
<script>
    const page1 = document.querySelector(".page_1");
    const page2 = document.querySelector(".page_2")
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
            const alertModal = document.querySelector(".alert_modal");
            const alertText = document.querySelector(".alert_text");
            //console.log(alert)
            alertModal.style.display = "";
            const today = new Date();
            const time = document.querySelector(".time");
            const alertName = document.querySelector(".alert_name")

            const hours = ('0' + today.getHours()).slice(-2); 
            const minutes = ('0' + today.getMinutes()).slice(-2);
            const year = today.getFullYear();
            const month = ('0' + (today.getMonth() + 1)).slice(-2);
            const day = ('0' + today.getDate()).slice(-2);

            const dateString = year + '-' + month  + '-' + day;

            alertName.innerText = `${data.nickname}`;
            time.innerText = `${dateString} ${hours}:${minutes}`;

            setTimeout(() => {
                alertModal.style.display = "none";
            }, 3000)

        }
    }

    window.onload = () => {
        page1.style.display = "";
        page2.style.display = "none";
        if (window.location.search) {
            page1.style.display = "none";
            page2.style.display = "";
            setTimeout(() => {
                page1.style.display = "";
                page2.style.display = "none";
            }, 10000)
        }
    }



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