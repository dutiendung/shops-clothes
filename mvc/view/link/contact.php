<?php
$products = $data['products'];
?>
<div class="row">
  <div class="col-md-3">
    <div class="card text-center">
      <img src="<?php echo BASE_URL ?>public/imgs/sale.jpeg" alt="" class='img-fluid'>
    </div>
  </div>
  <?php foreach ($products as $p) { ?>
    <div class="col-3 col-md-3">
      <div class="card-body card-bottom">
        <a href="<?php echo BASE_URL ?>product/productDetail/<?php echo $p['alias'] ?>" class='text-decoration-none'>
          <img src="<?php echo BASE_URL ?>public/upload/<?php echo $p['image'] ?>" style="height: 200px" alt="productName" class="img-fluid" />
          <h2> <?php echo $p['productName'] ?></h2>
          <span class='text-decoration-line-through'>
            <?php echo number_format($p['price'], 2) ?>$
          </span>
          <span class='fw-bold fs-5 text-danger'>
            <?php echo number_format($p['saleprice'], 2) ?>$
          </span>
          <a href="#" class="btn btn-add" style="background: rgb(37 99 235); color: white">Add to cart</a>
        </a>
      </div>
    </div>
  <?php } ?>
  <div class="center">
      <?php
    $paging = $data['paging'];
    $paging->createLinks();
    ?></div>
  </div>
</div>
</div>