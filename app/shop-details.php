<?php 
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spoton</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./home.php">Home</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./home.php"><img src="img/logo.png" height="60px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./home.php">Home</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./login.html"><i class="fa fa-user"></i> <span></span></a></li>
                            <li><a href="./shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    
    <!-- Hero Section Begin -->
<!--     <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search" id="inner">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Hero Section End -->

    <?php
    if (isset($_POST["trip_id"])) {

    $_SESSION['id'] = $_POST["trip_id"];
    $_SESSION['nome'] = $_POST["nome"];
    $_SESSION['descricao'] = $_POST["descricao"];
    $_SESSION['lugar'] = $_POST["lugar"];
    $_SESSION['preco'] = $_POST["preco"];
    $_SESSION['avaliacao'] = $_POST["avaliacao"];

    }
    ?>

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/details/aveiro-foto-barco.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h2><?php echo $_SESSION['lugar']; ?></h2>
                        <h3><?php echo $_SESSION['nome;'] ?></h3>
                        <p><b>Avaliação: </b><?php echo $_SESSION['avaliacao']; ?>/5</p>
                        <div class="product__details__price"><?php echo $_SESSION['preco']; ?>€</div>
                        <p><?php echo $_SESSION['descricao']; ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Comments</a>
                            </li>
                        </ul>
                        <div class="container mt-5 mb-5">
                            <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="coment-bottom bg-white p-2 px-4">

                                        <!-- INTRODUZIR COMENTÁRIO -->
                                        <form method="POST">
                                            
                                            <div class="d-flex flex-row add-comment-section mt-4 mb-4"><input type="text" class="form-control mr-3" placeholder="Add comment" name="comment"><button type="submit" class="btn btn-primary" style="text-align: center;">Comment</button></div>
                                            
                                            <?php

                                            if (isset($_POST['comment']))
                                            {

                                                $query = "INSERT INTO comment (trip, autor, texto) VALUES ({$_SESSION['id']}, {$_SESSION['user_id']}, '".$_POST['comment']."')";
                    
                                                $result = mysqli_query($conn,$query);

                                                if (!$result){
                                                    echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">Invalid comment.</p> </div>";

                                                }

                                            }
                                            ?>


                                        </form>

                                        <!-- COMENTÁRIOS -->
                                        <?php

                                        $resultado = $conn->query("SELECT * FROM comment WHERE trip='{$_SESSION['id']}'") or die($conn->error);
                                        ?>
                                        <table>
                                            <?php 
                                                foreach($resultado as $row): ?>

                                                    <?php
                                                    $autor_id = $row['autor'];
                                                    $user = $conn->query("SELECT * FROM users WHERE id='{$autor_id}'") or die($conn->error);

                                                    foreach($user as $u): ?>
                                            
                                                        <tr>
                                                            <div class="commented-section mt-2">
                                                            <div class="d-flex flex-row align-items-center commented-user">
                                                                <h5 class="mr-2"><b><?php echo $u['nome']; ?></b></h5>
                                                            </div>
                                                            <div class="comment-text-sm"><span><?php echo $row['texto']; ?></span></div>
                                                        </tr>
                                                        <br>
                            
                                                    <?php endforeach; ?>
                        
                                                <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>