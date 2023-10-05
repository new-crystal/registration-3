<?php
    echo '<script type="text/javascript"> ';
    echo ' function goback(newurl) {';
    echo '  if (confirm("등록 확인 메일은 등록 주신 메일 주소로 보내드리도록 하겠습니다.")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo 'goback(\'/registration/enroll\')';
    echo '</script>';
?>
