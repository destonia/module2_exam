<?php
ob_start();
require "src/model/DBConnect.php";

require "src/model/ProductDB.php";
require "src/model/Product.php";
require "src/controller/ProductController.php";


use \Controller\ProductController;
/*require __DIR__ . '/vendor/autoload.php';*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Management</title>
</head>
<body>
<div class="container" style = "height: auto">
    <header class="row">
        <img class = "pull-right" src="Image/head.png">
    </header>
    <nav class="navbar navbar-inverse">
        <div class="navbar navbar-default">
            <a class="navbar-brand" href="index.php">Product management</a>
            <form method="post" >
                <input type="text" name="search" placeholder="search what?" class="form-control">
                <input type="submit" value="search">
            </form>
        </div>
</div>
</div>
</nav>

<aside class="col-sm-3">

</aside>
</div>

<?php
$productController = new ProductController();
$page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;
switch ($page){
    default:
        $productController->index();
        break;
    case 'add':
        $productController->add();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'edit':
        $productController->edit();
        break;

}
ob_end_flush();
?>


</div>
<footer class="panel panel-default">
    <div class = "panel-heading text-center">
        <p>CodeGym &copy; 2017</p>
    </div>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>


