<?php
    echo '<script type="text/javascript"> ';
    echo ' function goback(newurl) {';
    echo '  if (confirm("※ QR 코드가 생성되었습니다.")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo 'goback(\'/admin\')';
    echo '</script>';
?>
