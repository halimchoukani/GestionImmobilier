<?php
require_once '../model/crudImmobilier.php';
require_once '../model/immobilier.php';
$crudImmobilier = new CrudImmobilier();
if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];
    $found_immobilier = $crudImmobilier->getImmobilier($reference);
    if (isset($_POST['ok'])) {
        $reference = $_GET['reference'];
        $proprietaire = $_POST['proprietaire'];
        $localite = $_POST['localite'];
        $nbpiece = $_POST['nbpiece'];
        $domaineUsage = $_POST['domaineUsage'];
        $nature = $_POST['nature'];
        $nbEtage = $_POST['nbEtage'];
        $surface = $_POST['surface'];
        $immobilier = new immobilier($reference, $proprietaire, $localite, $nbpiece, $domaineUsage, $nature, $nbEtage, $surface);
        $crudImmobilier->updateImmobilier($immobilier);
        header("location:../view/allimmobilier.php");
    }
    include_once '../view/updateImmobilier.php';
}
