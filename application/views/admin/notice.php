<div class="notice_container">
    <div class="notice_header">
        <button onclick="addNotice()">추가하기</button>
        <button>삭제하기</button>
    </div>
    <div>
        <?php
        // print_r($notice) 
        foreach ($notice as $item) {
            echo '<div style="text-align: center;"><input type="checkbox" name="depositChk" class="depositChk" value="' .  $item['idx'] . '">
            <input class="notice" value="' .  $item['notice'] . '"/><button>수정</button></div>';
        } ?>
    </div>
</div>

<script>
    function addNotice(id) {
        const url = `/admin/add_notice`;
        window.open(url, "Certificate", "width=500, height=300, top=30, left=30");
    }
</script>