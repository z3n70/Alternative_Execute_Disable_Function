<?php
$command = 'id';

$reflection = new ReflectionFunction('passthru');
$reflection->invoke($command);
?>

// access http://localhost/localhost/reflection.php
