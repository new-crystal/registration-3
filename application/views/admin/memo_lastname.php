<script src="https://cdn.tailwindcss.com"></script>

<?php echo form_open('/admin/memo_lastname?n=' . $item['registration_no'], 'id="memoForm" name="memoForm"');
?>
<div class="flex flex-col items-center justify-center w-full h-full">
    <p>변경하실 last name 을 입력해주세요.</p>
    <input id="last_name" name="last_name" class="w-10/12 h-4/6 border p-5"
        value="<?php echo isset($item['last_name']) && $item['last_name'] != 'null' ? $item['last_name']: ''; ?>">
    </input>
    <div class="flex items-center justify-center w-full mt-5">
        <button type="submit" id="save" class="h-8 w-28 bg-pink-600 text-white mx-5">Save</button>
        <button id="close" type="button" class="h-8 w-28 border border-pink-600 text-pink-600">Close</button>
    </div>
</div>
</form>
<script>
const closeButton = document.querySelector("#close")
const saveButton = document.querySelector("#save")
const memo = document.querySelector("#last_name")
const form = document.querySelector("#memoForm")

closeButton.addEventListener("click", () => {
    window.close()
})

form.addEventListener("submit", (event) => {
    event.preventDefault();
    saveMemo();
});

async function saveMemo() {
    const memoValue = memo.value;
    const url = form.action;
    const formData = new FormData(form);
    const registration_no = window.location.search.split("=")[1];

    if (memoValue === "") {
        formData.set('last_name', null); // 메모 필드의 값을 공백으로 설정
    } else {
        formData.set('last_name', memoValue);
    }
    try {
        const response = await fetch(url, {
            method: 'POST',
            body: formData
        });

        if (response.ok) {
            // 메모 저장 성공
            alert("성함 저장 성공");
            const parentWindow = window.opener;   
            window.opener.postMessage(registration_no, "*");
            window.close();
        } else {
            // 메모 저장 실패
            alert("성함 저장 실패");
        }
    } catch (error) {
        console.log("성함 저장 중 오류 발생:", error);
    }
}
</script>