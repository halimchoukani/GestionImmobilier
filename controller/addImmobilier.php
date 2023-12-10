<?php
require_once '../model/crudImmobilier.php';
require_once '../model/immobilier.php';
$crudImmobilier = new CrudImmobilier();
if (isset($_POST['reference']) && isset($_POST['proprietaire']) && isset($_POST['localite']) && isset($_POST['nbpiece']) && isset($_POST['domaineUsage']) && isset($_POST['nature']) && isset($_POST['nbEtage']) && isset($_POST['surface'])) {
    $reference = $_POST['reference'];
    $proprietaire = $_POST['proprietaire'];
    $localite = $_POST['localite'];
    $nbpiece = $_POST['nbpiece'];
    $domaineUsage = $_POST['domaineUsage'];
    $nature = $_POST['nature'];
    $nbEtage = $_POST['nbEtage'];
    $surface = $_POST['surface'];
    $immobilier = new immobilier($reference, $proprietaire, $localite, $nbpiece, $domaineUsage, $nature, $nbEtage, $surface);
    $crudImmobilier->addImmobilier($immobilier);
    header("location:../controller/allimmobilier.php");
}
include_once '../view/addImmobilier.php';
