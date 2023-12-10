<?php
ob_start();
echo "<h1>Immobiliers</h1>";
echo "<table class='table table-striped' id='example'>";
echo "<thead>";
echo "<tr>";
echo "<th>Reference</th>";
echo "<th>Proprietaire</th>";
echo "<th>Localite</th>";
echo "<th>Nombre de piece</th>";
echo "<th>Domaine d'usage</th>";
echo "<th>Nature</th>";
echo "<th>Nombre d'etage</th>";
echo "<th>Surface</th>";
echo "<th>Modifier</th>";
echo "<th>Supprimer</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($LesImmobilier as $immobilier) {
    echo "<tr>";
    echo "<td>" . $immobilier[0] . "</td>";
    echo "<td>" . $immobilier[1] . "</td>";
    echo "<td>" . $immobilier[2] . "</td>";
    echo "<td>" . $immobilier[3] . "</td>";
    echo "<td>" . $immobilier[4] . "</td>";
    echo "<td>" . $immobilier[5] . "</td>";
    echo "<td>" . $immobilier[6] . "</td>";
    echo "<td>" . $immobilier[7] . "</td>";
    echo "<td><a href='../controller/updateImmobilier.php?reference=" . $immobilier[0] . "' class='btn btn-primary'>Modifier</a></td>";
    echo "<td><a href='../controller/deleteImmobilier.php?reference=" . $immobilier[0] . "' class='btn btn-danger'>Supprimer</a></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
$contenu = ob_get_clean();
include "template.php";
