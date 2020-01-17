<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("workshop", "workshop");

if (isset($_POST['add'])){
    ///print_r($_POST['tshirts_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "tshirts_id");

        if(in_array($_POST['tshirts_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'tshirts_id' => $_POST['tshirts_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'tshirts_id' => $_POST['tshirts_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php require_once ("php/header.php"); ?>
<div id="container" class="container">
        <div class="row text-center py-5">
        <?php
// $result=$database->getData();
// while($row = mysqli_fetch_assoc($result)){
// component($row['omschriving'], $row['tshirt'], $row['maat'], $row['prijs'], $row['kleur']);
// }

?>


        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
        <div>
        <img src="./upload/product1.png" alt="image1" class="img-fluid card card-img-top">
        </div>
        <div class="card-body">
        <h5 class="card-title">Product1</h5>
        <h6>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        </h6>
        <p class="card-text">
        Sinteklaas dames T-shirt
        </p>
        <p class="card-text">
            kleuren : rood en blauw.
            </p>
            <p class="card-text">
            maat : S, M, L en XL 
            </p>
        <h5>
        <small><s class="text.secondary">€18</s></small>
        <span class="price">€14</span>
        </h5>
        <button type="submit" class="btn btn-warning my-3" name="add">In winkelwagen <i class="fas fa-shopping-cart"></i></button>
        </div>
        </form>
        </div>
        </div>
        <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
        <div>
        <img src="./upload/product2.png" alt="image1" class="img-fluid card card-img-top">
        </div>
        <div class="card-body">
        <h5 class="card-title">Product2</h5>
        <h6>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        </h6>
        <p class="card-text">
        Sinteklaas Heren T-shirt
        </p>
        <p class="card-text">
            kleuren : rood en blauw.
            </p>
            <p class="card-text">
            maat : S, M, L en XL 
            </p>
        <h5>
        <small><s class="text.secondary">€20</s></small>
        <span class="price">€16</span>
        </h5>
        <button type="submit" class="btn btn-warning my-3" name="add">In winkelwagen <i class="fas fa-shopping-cart"></i></button>
        </div>
        </form>
        </div>
        </div>

        <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
        <div>
        <img src="./upload/product3.png" alt="image1" class="img-fluid card card-img-top">
        </div>
        <div class="card-body">
        <h5 class="card-title">Product3</h5>
        <h6>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        </h6>
        <p class="card-text">
        Sinteklaas kinderen T-shirt
        </p>
        <p class="card-text">
            kleuren : rood en blauw.
            </p>
            <p class="card-text">
            maat : S, M, L en XL 
            </p>
        <h5>
        <small><s class="text.secondary">€14</s></small>
        <span class="price">€10</span>
        </h5>
        <button type="submit" class="btn btn-warning my-3" name="add">In winkelwagen <i class="fas fa-shopping-cart"></i></button>
        </div>
        </form>
        </div>
        </div>
            <?php
                 $result = $database->setAttribute();
                while ($row = setAttribute($result)){
                    component($row['tshirt'], $row['prijs'], $row['kleur'], $row['id']);
                }
            ?>



        </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
