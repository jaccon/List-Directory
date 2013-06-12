<?php
# Update 01/01/2005
# by @jaccon - http://www.jaccon.com.br

$dir=@opendir(".");
if ($dir):
$oculto = array(".", "..", "index.php", ".htaccess", ".index.php.swp");
while ($conteudo = readdir($dir)) {
if (!in_array($conteudo, $oculto))
print "<a href=\"./$conteudo\" target=\"_blank\">$conteudo</a><br />";
}
endif;
closedir($dir);
?>
