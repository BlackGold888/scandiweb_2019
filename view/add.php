<?php

$add = new AddProduct();
$placeholder;

// Change PHP_SELF for action form
if ($_GET['page'] == 'disc') {$_SERVER['PHP_SELF']=$_SERVER['PHP_SELF'].'?page=disc';}
if ($_GET['page'] == 'book') {$_SERVER['PHP_SELF']=$_SERVER['PHP_SELF'].'?page=book';}
if ($_GET['page'] == 'furniture') {$_SERVER['PHP_SELF']=$_SERVER['PHP_SELF'].'?page=furniture';}


// Remove backslashes and strip unnecessary characters
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    switch ($_GET['page']) {
        case 'disc':
            $disc = new Disc();
            $disc->setSize(validate($_POST['size']));
            $disc->setPrice(validate($_POST['price']));
            $disc->setName(validate($_POST['name']));
            $disc->setSku(validate($_POST['sku']));
            //Validate SKU and name
            if (!preg_match("/^[a-zA-Z0-9]*$/",$disc->getSku())&& !preg_match("/^[a-zA-Z0-9]*$/",$disc->getName())){
                $add->message = "<div class='alert alert-danger'><strong>SKU</strong> or <strong>Name</strong> must contain only letters and numbers</div>";
            } elseif (!preg_match("/^[0-9.0-9]*$/",$disc->getPrice())) {
                $add->message = "<div class='alert alert-danger'><strong>Price</strong> must contain only numbers</div>";
            }else{
                $add->addDisc($disc);
            }
            break;
        case 'book':
            $book = new Book();
            $book->setSku(validate($_POST['sku']));
            $book->setName(validate($_POST['name']));
            $book->setPrice(validate($_POST['price']));
            $book->setWeight(validate($_POST['weight']));

            //Validate SKU and name
            if (!preg_match("/^[a-zA-Z0-9]*$/",$book->getSku())&& !preg_match("/^[a-zA-Z0-9]*$/",$book->getName())){
                $add->message = "<div class='alert alert-danger'><strong>SKU</strong> or <strong>Name</strong> must contain only letters and numbers</div>";
            }elseif (!preg_match("/^[0-9.0-9]*$/",$book->getPrice())) {
                $add->message = "<div class='alert alert-danger'><strong>Price</strong> must contain only numbers</div>";
            }else{
                $add->addBook($book);
            }
            break;
        case 'furniture':
            $furniture = new Furniture();
            $furniture->setSku(validate($_POST['sku']));
            $furniture->setName(validate($_POST['name']));
            $furniture->setPrice(validate($_POST['price']));
            $furniture->setHeight(validate($_POST['height']));
            $furniture->setWidth(validate($_POST['width']));
            $furniture->setLength(validate($_POST['length']));

            //Validate SKU and name
            if (!preg_match("/^[a-zA-Z0-9]*$/",$furniture->getSku())&& !preg_match("/^[a-zA-Z0-9]*$/",$furniture->getName())){
                $add->message = "<div class='alert alert-danger'><strong>SKU</strong> or <strong>Name</strong> must contain only letters and numbers</div>";
            }elseif (!preg_match("/^[0-9.0-9]*$/",$furniture->getPrice())) {
                $add->message = "<div class='alert alert-danger'><strong>Price</strong> must contain only numbers</div>";
            }else{
                $add->addFurniture($furniture);
            }
            break;
        default:
            break;
    }
}
//Change dynamic placeholder
if ($_GET['page'] == 'disc') {$placeholder = "JVB200123";}
elseif ($_GET['page'] == 'book') {$placeholder = "GGWP0007";}
elseif ($_GET['page'] == 'furniture'){$placeholder = "TR120555";}
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
    <title>Add Product</title>
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-11">
               <h2>Product Add</h2>
                <br>
                <a href="index.php">Home</a>
            </div>
            <div class="col-sm-1">
                <br><br><br>
                <button class="btn btn-success" type="submit" name="submit" form="add">Add</button>
            </div>
        </div>
    </div>
</header>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <p><?=$add->message?></p>
<!--            I am using $_SERVER['PHP_SELF'] for sends the submitted form data to the page itself-->
<!--            and user can will get error messages on the same pages as the form-->
            <form id="add" method="post" class="form-group" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                <label for="sku">SKU</label>
                <input type="text" name="sku" class="form-control" placeholder="<?=$placeholder?>" required>
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" placeholder="10.00" required>
                <br><br><br>
                <p>Type swtcher
                <select onchange="location = this.value;">
                    <option  selected>Select product</option>
                    <option value="index.php?page=disc">Disc</option>
                    <option value="index.php?page=book">Book</option>
                    <option value="index.php?page=furniture">Furniture</option>
                </select></p>
                <br><br>
                <?php if ($_GET['page'] == 'disc') : ?>
                <label for="size">Size</label>
                <input type="number" name="size" class="form-control" placeholder="MB" required>
                <?php endif;?>
                <?php if ($_GET['page'] == 'book') : ?>
                    <label for="weight">Weight</label>
                    <input type="number" name="weight" class="form-control" placeholder="KG" required>
                <?php endif;?>
                <?php if ($_GET['page'] == 'furniture') : ?>
                    <div class="well well-sm">For furniture you must enter height, width, length. Example: 24x45x15</div>
                    <label for="size">Height</label>
                    <input type="number" name="height" class="form-control" placeholder="24" required>
                    <label for="size">Width</label>
                    <input type="number" name="width" class="form-control" placeholder="45" required>
                    <label for="size">Length</label>
                    <input type="number" name="length" class="form-control" placeholder="15" required>
                <?php endif;?>
                <br>
            </form>
        </div>
    </div>
</div>
</body>
</html>