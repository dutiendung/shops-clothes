<?php $products = $data['products'];
?>
<tbody>
    <?php
    $i = 1;
    foreach ($products as $p) { ?>
       <table class="table table-bordered table-striped  border-success"> 
        <tr>
            <td class="w-1"><?php echo $p['productId'] ?></td>
            <td class="w-25"><?php echo $p['productName'] ?></td>
            <td class="w-25">
                <a  class="text-decoration-none" href='<?php echo BASE_URL ?>adminproduct/productDelete/
<?php echo $p["productId"] ?>' onClick='return confirm("Bạn có muốn xóa vĩnh viễn sản phẩm này ?");'>
                    Xóa
                </a>
            </td>
            <td class="w-25">
                <a  class="text-decoration-none" href='<?php echo BASE_URL ?>adminproduct/productToggleTrash/
<?php echo $p["productId"] ?>' onClick='return confirm("Bạn có muốn khôi phục sản phẩm này ?");'>
                    Khôi phục
                </a>
            </td>
        </tr>
    </table>
    <?php } ?>
</tbody>
<div class="row button btn-warning">
    <?php
    if (!empty($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
</div>
<div class="row">
    <?php
    $paging = $data['paging'];
    $paging->createLinks();
    ?>
  </div>