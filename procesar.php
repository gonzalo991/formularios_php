<?php
$nombre = $_REQUEST['nombre'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];
$image = $_FILES['image'];
$patch = $_SERVER['DOCUMENT_ROOT'] . "/formularios/img/" . basename($image['name']);

echo "<p>El nombre del usaurio es $nombre</p><br>";
echo "<p>La edad del usuario es $edad</p>";
echo "<p>El sexo del usuario es: $sexo<p>";
echo "<p>Los roles son: </p>";

echo "<ul>";
foreach ($roles as $role) {
    echo "<li>$role</li>";
}
echo "</ul>";

echo $patch;

move_uploaded_file($image['tmp_name'], $patch);