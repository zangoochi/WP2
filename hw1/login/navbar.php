<?php   /////    navbar.php    ///// 
function loginLabel()
{  echo file_exists("login.mark")? "Logout":"Login";
}
function loginLink()
{  echo file_exists("login.mark") ? "logout.php":"login.php";
}
?>
<nav class="leftnavbar">
<?php if($page == "main.php") {?>
<span class="self">About Us</span>
<?php } else {?>
<a href="main.php">About Us</a><?php }?>

<?php if($page == "computershop.php") {?>
<span class="self">Products</span>
<?php } else {?>
<a href="computershop.php">Products</a><?php }?>

<?php if($page == "myprofile.php") { ?>
<span class="self">MyProfile</span>
<?php } else {?>
<a href="myprofile.php">MyProfile</a><?php }?>

<?php if($page == "login.php") { ?>
<span class="self">Login</span>
<?php } else {?>
<a href="<?php loginLink();?>"><?php loginLabel();?></a><?php }?>
</nav>
