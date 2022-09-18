<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <header class="container">
    <div class="row">
      <div class="col-md-4"><a class="navbar-brand" href="<?php echo BASE_URL ?>product/home/<?php echo LIMIT . '/0' ?>"><a class="navbar-brand" href="<?php echo BASE_URL ?>product/home/<?php echo LIMIT . '/0' ?>"><img src="http://cdn.shopify.com/s/files/1/0253/7553/9281/collections/Untitled_design_5_1024x.png?v=1577932023" alt="Brand" style="width:200px"></a></div>
    </div>
  </header>

  <div class="container mt-4">
    <?php include_once PATH_TO_VIEW . $viewname . '.php'; ?>

  </div>
  <footer class="container-fluid bg-dark">

  </footer> 
</body>

</html>