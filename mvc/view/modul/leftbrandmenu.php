<?php $branmodel = new BrandModel;
  $brands = $brandmodel->getAll(['trash' => 0, 'status' => 1]);
  ?>
<div class="card mt-2" style="width: 16rem;">
  <div class="card-header">
    Thương hiệu
  </div>
  <ul class="list-group list-group-flush">
<?php foreach ($brands as $brand){?>
<li class="list-group-item">
<a class='text-decoration-none' href="<?php echo BASE_URL?>product/productByBrand/<?php echo $brand['alias'].'/'.LIMIT.'/0'?>">
  <?php echo $brand['brandName']?>
</a>
</li>
<?php }?>
</ul>
</div>