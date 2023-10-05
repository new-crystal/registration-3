<?php
    echo '<script type="text/javascript"> ';
    echo ' function goback(newurl) {';
    echo '  if (confirm("※ 중복된 전화번호가 있습니다!")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo 'goback(\'/admin\')';
    echo '</script>';
?>
