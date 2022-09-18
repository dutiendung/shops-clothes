<?php
$linkmodel = new LinkModel;
$links = $linkmodel->getAll(['trash' => 0, 'status' => 1, 'position' => 'bottommenu1']);
?>
<div class="col-md-4 p-5">
  <?php foreach ($links as $link) { ?>
    <a href="<?php echo  $link['link'] ?>" class='text-decoration-none '>
      <?php echo $link['title'] ?></a><br>
  <?php } ?>
</div>
