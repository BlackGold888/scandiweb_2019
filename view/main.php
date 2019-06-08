<?php
$print = new PrintAll();
$printProduct = $print->printAllProduct();
if (isset($_POST['submit'])) {
    $delete = new DeleteProduct();
    $delete->deleteProduct($_POST);
    header('Location: index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Germania+One" rel="stylesheet">
    <title>ScandiWeb</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <img src="img/scandiweb.png" alt="">
                <br><br>
                <a href="index.php?page=disc" class="btn btn-info">Add Product</a>
            </div>
            <div class="col-sm-1">
                <select class="float-right " id="sel1">
                    <option value="0">Delete selected</option>
                    <option value="1">Mass Delete</option>
                </select>
            </div>
            <div class="col-sm-1">
                <button class="btn btn-success" type="submit" name="submit" form="product">Apply</button>
            </div>
        </div>
    </div>
</header>
<hr>
<div class="container-fluid">
    <div class="row">
        <form action="index.php" id="product" method="post">
            <?php if (!empty($printProduct)) :?>
            <?php foreach ($printProduct as $item) : ?>
                <div class="col-sm-3">
                    <div class="thumbnail text-center" id="card">
                        <?php if ($item['type']=='disc') : ?>
                            <input type="checkbox" class="checkbox" name="<?=$item['sku']?>" value="<?=$item['sku']?>"><br>
                            <p><?=$item['sku']?></p>
                            <p><?=$item['name']?></p>
                            <p><?=$item['price']?> $</p>
                            <p>Size <?=$item['size']?> MB</p>
                        <?php endif;?>
                        <?php if ($item['type']=='book') : ?>
                            <input type="checkbox" class="checkbox" name="<?=$item['sku']?>" value="<?=$item['sku']?>"><br>
                            <p><?=$item['sku']?></p>
                            <p><?=$item['name']?></p>
                            <p><?=$item['price']?> $</p>
                            <p>Weight: <?=$item['weight']?> KG</p>
                        <?php endif;?>
                        <?php if ($item['type']=='furniture') : ?>
                            <input type="checkbox" class="checkbox" name="<?=$item['sku']?>" value="<?=$item['sku']?>"><br>
                            <p><?=$item['sku']?></p>
                            <p><?=$item['name']?></p>
                            <p><?=$item['price']?> $</p>
                            <p>Dimension: <?=$item['height'].'x'.$item['width'].'x'.$item['length']?></p>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif;?>
        </form>
    </div>
</div>
<script src="js/myscript.js"></script>
</body>
</html>