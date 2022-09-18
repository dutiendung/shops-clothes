<?php
require_once 'config.php';
require_once PATH_TO_CORE . 'db.php';
require_once PATH_TO_CORE . 'basemodel.php';
require_once PATH_TO_MODEL . 'imagemodel.php';
$a = new ImageModel;
$rows = $a->getAll(['trash' => 0, 'status' => 1]);
echo '<pre>';
print_r($rows);
echo '</pre>';
?>