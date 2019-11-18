<?php
session_start();
if (isset($_POST['loginname']) && !empty($_POST['loginname']))
{
    $_SESSION['user'] = $_POST['loginname'];
}
if (!isset($_SESSION['user']))
{
    header('Location: login.php');
}

$cookies = [58, 32, 46, 36];
if (isset($_GET['add_to_cart']))
{
    if (in_array($_GET['add_to_cart'], $cookies))
    {
        $addCookies = $_GET['add_to_cart'];
        if (!isset($_SESSION['cart'][$addCookies]))
        {
            $_SESSION['cart'][$addCookies] = 1;
        } else {
            $_SESSION['cart'][$addCookies] += 1;
        }
    }
}
require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <a href="logout.php"><button class="btn btn-primary">Déconnexion</button></a>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Pecan nuts</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=46" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate chips</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=36" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>Chocolate cookie</h3>
                        <p>Cooked by Bernadette !</p>
                        <a href="?add_to_cart=58" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
                    <figcaption class="caption">
                        <h3>M&M's&copy; cookies</h3>
                        <p>Cooked by Penny !</p>
                        <a href="?add_to_cart=32" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>