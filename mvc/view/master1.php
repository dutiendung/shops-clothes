<?php require_once PATH_TO_MODUL . 'header.php'; ?>
<?php require_once PATH_TO_MODUL . 'slide.php'; ?>
<?php require_once PATH_TO_MODUL.'cart.php';?>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-3">
      <?php require_once PATH_TO_MODUL . 'leftcategorymenu.php'; ?>
      <?php require_once PATH_TO_MODUL . 'leftbrandmenu.php'; ?>
    </div>
    <div class="col-md-9  text-center">
      <?php include_once PATH_TO_VIEW . $viewname . '.php'; ?>
    </div>
  </div>
</div>
