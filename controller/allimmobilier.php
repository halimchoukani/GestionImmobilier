<?php
require_once '../model/crudImmobilier.php';
require_once '../model/immobilier.php';
$crudImmobilier = new CrudImmobilier();
$LesImmobilier = $crudImmobilier->getAllImmobilier();
include_once '../view/allimmobilier.php';
