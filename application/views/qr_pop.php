<style>
.checkbox {
    display: flex;
}
</style>

<div class="container">
    <h1>Check List</h1>
    <?php if ($users['memo'] != "") { ?>
    <div class="checkbox">
        <p>memo</p>
        <input type="checkbox" class="check" />
        <p>
            <?php echo $users['memo'] ?>
        </p>
    </div>
    <?php  } ?>
    <?php if ($users['remark1'] != "") { ?>
    <div class="checkbox">
        <p>remark1</p>
        <input type="checkbox" class="check" />
        <p>
            <?php echo $users['remark1'] ?>
        </p>
    </div>
    <?php  } ?>
    <?php if ($users['remark2'] != "") { ?>
    <div class="checkbox">
        <p>remark2</p>
        <input type="checkbox" class="check" />
        <p>
            <?php echo $users['remark2'] ?>
        </p>
    </div>
    <?php  } ?>
    <?php if ($users['remark3'] != "") { ?>
    <div class="checkbox">
        <p>remark3</p>
        <input type="checkbox" class="check" />
        <p>
            <?php echo $users['remark3'] ?>
        </p>
    </div>
    <?php  } ?>
    <?php if ($users['remark4'] != "") { ?>
    <div class="checkbox">
        <p>remark4</p>
        <input type="checkbox" class="check" />
        <p>
            <?php echo $users['remark4'] ?>
        </p>
    </div>
    <?php  } ?>
    <button onclick="confirmBtn()">확인</button>
</div>

<script>
const checkList = document.querySelectorAll(".check")

function confirmBtn() {
    let allChecked = true;

    checkList.forEach((check) => {
        if (!check.checked) {
            allChecked = false;
        }
    });

    if (allChecked) {
        window.close();
    } else {
        alert("체크를 해주세요");
    }
}
window.addEventListener('beforeunload', function(e) {
    const checkList = document.querySelectorAll(".check");
    let allChecked = true;

    checkList.forEach((check) => {
        if (!check.checked) {
            allChecked = false;
        }
    });

    if (!allChecked) {

        e.preventDefault();
        e.returnValue = '';
    }
});
</script>