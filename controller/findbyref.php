<?php
require_once '../model/crudImmobilier.php';
require_once '../model/immobilier.php';
$crudImmobilier = new CrudImmobilier();
include_once '../view/findbyref.php';
if (isset($_POST['ok'])) {
    $reference = $_POST['reference'];
    $found_immobilier = $crudImmobilier->getImmobilier($reference);
    if ($found_immobilier) {
        header('location:../controller/updateImmobilier.php?reference=' . $reference . '');
    } else {
        echo "<h1>Immobilier not found</h1>";
    }
}
