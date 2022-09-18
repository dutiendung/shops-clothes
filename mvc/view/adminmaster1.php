<?php require_once PATH_TO_MODUL . 'header.php'; ?>
<div class="row">
 <div class="col-md-4"><img class="w-25"  src="<?php echo BASE_URL?>public/imgs/admin.png" alt="brand"></div>
 <div class="col-md-4"></div>
 <div class="col-md-4">
 <div class="mt-5">
 <?php echo "Xin chào ".$_SESSION['username']?>
 <button class='btn-primary'>
 <a class='btn btn-primary' href='<?php echo BASE_URL ?>auth/adminLogout'>Đăng xuất</a></button>
 </div>
 </div>
 </div>

<div class="" >
<a class="nav-link btn btn-success text-light"
href="<?php echo BASE_URL?>adminproduct/AddProduct/"> Thêm sản phẩm</a>
<a class="nav-link btn btn-success text-light"
href="<?php echo BASE_URL?>adminproduct/productlist/<?php echo LIMIT.'/0'?>"> Xem danh sách sản phẩm</a>
<a class="nav-link btn btn-success text-light"
href="<?php echo BASE_URL?>adminproduct/productListInTrash/<?php echo LIMIT.'/0'?>">Xem thùng rác</a>
</div>
    <div class="col-md-13  text-center">
      <?php include_once PATH_TO_VIEW . $view . '.php'; ?>
    </div>
  </div>
  <?php require_once PATH_TO_MODUL.'cart.php';?>
</div>