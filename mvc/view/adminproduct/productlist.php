<?php $products=$data['products'];
?>

 <div class="col-md-3 button btn-warning text-center">
<?php
if(!empty($_SESSION['msg'])) {echo $_SESSION['msg'];unset($_SESSION['msg']);}
?>
</div>
<tbody> 
<?php
$i=1;
foreach($products as $p){?>
<table class="table table-bordered table-striped  border-success">
<tr>
 <td class="w-1"><?php echo $p['productId'] ?></td>
 <td class="w-25"><?php echo $p['productName']?></td>
 <td class="w-25">
<a class="text-decoration-none" href='<?php echo BASE_URL?>adminproduct/productToggleStatus/<?php echo $p["productId"]?>'>
<?php if($p['status']==1)  echo (" Ẩn sảm phẩm<i class='fas fa-check text-primary'></i>");
else echo (" Hiện sảm phẩm<i class='fas fa-times text-danger'></i>")?>
</a>
</td class="w-25">
 <td class="w-25"><?php echo number_format($p['price'],2) ?>$</td>
 <td  class="w-25"><?php echo number_format($p['saleprice'],2) ?>$</td>
 <td class="w-25"><a class="text-decoration-none" href='<?php echo BASE_URL?>adminproduct/productToggleTrash/<?php echo $p[
"productId"]?>'onClick='return confirm("Bạn có chắc chắn xóa sản phẩm này ?");'>Xóa</a>||<a
a class="text-decoration-none" href='<?php echo BASE_URL.'adminproduct/updateProduct/'.$p['productId']?>'>Sửa</a></td>
 </tr>
</table>
<?php }?>
<div class="row">
    <?php
    $paging = $data['paging'];
    $paging->createLinks();
    ?>
  </div>
 </tbody>

