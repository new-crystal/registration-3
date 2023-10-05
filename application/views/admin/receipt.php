<style>
p {
    margin: 5px;
}

.name {
    position: absolute;
    top: 46px;
    left: 165px;
}

.btn_wrap {
    display: flex;
    align-items: center;
    justify-content: center;
}

.save_btn {
    width: 150px;
    padding: 4px;
    background-color: #fff;
}

#container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
</style>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.2/FileSaver.min.js"></script>
</head>
<div>
    <div id="container">
        <img src="../../../assets/images/receipt.jpg" />
        <div class="name">
            <p><?php echo $users['name_kor']; ?></p>
            <p><?php echo $users['fee']; ?></p>
        </div>
    </div>
    <div class="btn_wrap">
        <button id="exportBtn" class="save_btn" onclick="PrintDiv()">Save</button>
    </div>
</div>
<script>
document.getElementById('exportBtn').onclick = function() {
    domtoimage.toBlob(document.getElementById('container'))
        .then(function(blob) {
            window.saveAs(blob, 'receipt.png');
        });
}
</script>