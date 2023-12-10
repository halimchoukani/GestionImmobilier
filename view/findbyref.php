<?php
ob_start();
echo "<h1>Find</h1>";
echo "<form action='../controller/findbyref.php' method='POST'>";
echo "<label for='reference'>Reference</label>";
echo "<input type='text' class='form-control' name='reference' id='reference' required><br>";
echo "<input type='submit' class='btn btn-primary' value='Find' name='ok'>";
