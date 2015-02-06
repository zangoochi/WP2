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
<span class="self">Main Page</span>
<?php } else {?>
<a href="main.php">Main Page</a><?php }?>

<?php if($page == "products.php") {?>
<span class="self">Products</span>
<?php } else {?>
<a href="computershop.php">Products</a><?php }?>

<?php if($page == "memberarea.php") { ?>
<span class="self">MemberArea</span>
<?php } else {?>
<a href="memberarea.php">MemberArea</a><?php }?>

<?php if($page == "myprofile.php") { ?>
<span class="self">MyProfile</span>
<?php } else {?>
<a href="myprofile.php">MyProfile</a><?php }?>

<?php if($page == "login.php") { ?>
<span class="self">Login</span>
<?php } else {?>
<a href="<?php loginLink();?>"><?php loginLabel();?></a><?php }?>
</nav>
