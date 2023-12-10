<?php
ob_start();
echo "<h1>BienVenu</h1>";
$contenu = ob_get_clean();
include "view/template.php";
