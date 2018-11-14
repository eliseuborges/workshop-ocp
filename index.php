<?php
echo "<h1>Openshift Workshop v3.0</h1> ";
echo $_SERVER['SERVER_ADDR'];

echo "<h1> Secrets </h1><br>";
echo $_ENV."<br>";
echo getEnv('usuario-banco').":".getEnv('password-banco');
?>
