<?php
$p = $data['currentProduct'];
$products = $data['sameProducts']; 
?>
<div><img style="height: 400px" src="<?php echo BASE_URL ?>public/upload/<?php echo $p['image'] ?>" class='imgfluid' alt="<?php echo $p['productName'] ?>"></div>
<div class="text-info" ><h3><?php echo $p['productName']?></h3></div>

<div>
<?php if ($p['saleprice'] <> 0) { ?>
            <span class='text-decoration-line-through'>
              <?php echo number_format($p['price'], 2) ?>$
            </span>
            <span class='fw-bold fs-5 text-danger'>
              <?php echo number_format($p['saleprice'], 2) ?>$
            </span>
          <?php } else { ?>
            <span class='fw-bold fs-5 text-danger'>
              <?php echo number_format($p['price'], 2) ?>$

            </span>

          <?php } ?>
</div>

<?php echo $p['detail']?>
<div class="text-danger" >-------------------------------------------------</div>
<div class="row g-1">
 <div class="bg-secondary text-white" class="mb-20"><h2>Sảm phẩm tương tự</h2></div> 
  <?php foreach ($products as $p) { ?>
    <div class="col-4 col-md-4">
      <div class="card-body card-bottom">
        <a href="<?php echo BASE_URL ?>product/productDetail/<?php echo $p['alias'] ?>" class='text-decoration-none'>
          <img src="<?php echo BASE_URL ?>public/upload/<?php echo $p['image'] ?>" style="height: 200px" alt="productName" class="img-fluid" />
          <h2> <?php echo $p['productName'] ?></h2>

          <?php if ($p['saleprice'] <> 0) { ?>
            <span class='text-decoration-line-through'>
              <?php echo number_format($p['price'], 2) ?>$
            </span>
            <span class='fw-bold fs-5 text-danger'>
              <?php echo number_format($p['saleprice'], 2) ?>$
            </span>
          <?php } else { ?>
            <span class='fw-bold fs-5 text-danger'>
              <?php echo number_format($p['price'], 2) ?>$

            </span>

          <?php } ?>

          <a class=' btn btn-primary' href='<?php echo BASE_URL ?>cart/add/<?php echo $p['productId']?>/<?php echo $p['productName']?>/<?php if ($p['saleprice']<>0) echo $p['saleprice']; else echo $p['price']?>'>
Add to Cart
</a>
      </div>
    </div>
  <?php } ?>