<?php
echo '<script type="text/javascript"> ';
echo ' function goback(newurl) {';
echo '  if (confirm("※ Registration is complete.")) {';
echo '    document.location.replace(newurl);';
echo '  }';
echo '}';
echo 'goback(\'/onSite/sicem\')';
echo '</script>';
