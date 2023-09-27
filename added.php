<?php

session_start();
if ( !isset( $_SESSION['user_id']))
{
    require ( 'login_tools.php');
    load();
}
$page_title = 'Cart Addition' ;
include( 'includes/header.php');
if ( isset($_GET['id']))$id = $GET['id'];
require ('../connect_db.php');
$q = "SELECT * FROM shop WHERE item_id = $id ";
$r = mysqli_query($conn , $q);
if (mysqli_num_rows($r) == 1)
{
    $row = mysqli_fetch_array($r , MYSQLI_ASSOC) ;
}

if ( isset($_SESSION['cart'][$id]))
{
    $_SESSION['cart'][$id]['quantity']++;
    echo '<p>Another '.$row class="$row["item_name"].
    'has been added to your cart </p>';

}
else
{
 $_SESSION['cart'][$id]=
    array ( 'quantity' => 1, 'price' => $row['item_price']);
 echo '<p>A '<div class="$row"></div>
        'has been added to your cart</P>

}
mysqli_close($dbc);
echo'<p><a href="shop.php">Shop</a> |
echo'<p><a href="forum.php">Forum</a> |
echo'<p><a href="home.php">Home</a> |
echo'<p><a href="goodbye.php">Logout</a> |
include ( 'includes/footer.php');
}