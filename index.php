<link rel="stylesheet" href="css/style.css">
<?php 
include "includes/nav.php"
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Home</title>

<center>
<img src="img/wel.svg" style="width: 350px;">
<h1 class="display-2" style="margin: 20px auto;"><b>Welcome</b></h1>
</center>



<div class="row">
<?php 
$query = mysqli_query($conn ,"SELECT * FROM `card` ORDER BY `id` DESC");
while($row = mysqli_fetch_assoc($query)){
  include "includes/card1.php";
}
?>
</div>


<footer class="footer">
<h3>Erbil Real Estate</h3>
<h5>Houses Are Here</h5>
<h5>Get Your Home very Fast</h5>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-youtube"></a>

</footer>
