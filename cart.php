<?php session_start();
require 'inc/head.php'; ?>
    <section class="cookies container-fluid">
        <div class="row">
            <?php if (!empty($_SESSION['cart'][46])) {
                echo '<h2>Pecan Nuts cookies : ' . $_SESSION['cart'][46] . '</h2><br>';
            }
            if (isset($_SESSION['cart'][36])) {
                echo '<h2>Chocolate chips cookies : ' . $_SESSION['cart'][36] . '</h2><br>';
            }
            if (isset($_SESSION['cart'][58])) {
                echo '<h2>Chocolate cookies : ' . $_SESSION['cart'][58] . '</h2><br>';
            }
            if (isset($_SESSION['cart'][32])) {
                echo '<h2>M&Ms cookies : ' . $_SESSION['cart'][32] . '</h2><br>';
            } var_dump($_SESSION);?>
        </div>
    </section>
<?php require 'inc/foot.php'; ?>