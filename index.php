<?php
echo "<h1>Openshift Workshop v3.0</h1> ";
echo $_SERVER['SERVER_ADDR'];

echo getEnv('usuario-banco');
echo getEnv('password-banco');

?>
