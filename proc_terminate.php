<?php
$process = proc_open('id', $descriptorspec, $pipes);

proc_terminate($process);
?>
