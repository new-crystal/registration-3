<script src="https://cdn.tailwindcss.com"></script>
<style>
body {
    -ms-overflow-style: none;
}

body::-webkit-scrollbar {
    display: none;
}

.text_box {
    font-size: 7rem;
    color: #000;
    z-index: 49;
    font-weight: 600;
    animation: fadeIn 2s;
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
</style>
<div class="w-full h-screen flex flex-col items-center justify-center overflow-hiddens">
    <div class="page_1">
        <!-- <img src="../../assets/images/new_index.png" /> -->

    </div>

</div>

<script>
const page1 = document.querySelector(".page_1");
const page2 = document.querySelector(".page_2")
const nickname = document.querySelector("#nickname")
const org = document.querySelector("#org")

function childFunction(data) {
    if (data.qrcode) {
        window.location.href = `/qrcode/open?qrcode=${data.qrcode}`
        window.opener.postMessage("child", '*');
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