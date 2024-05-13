<?php
include("header.php");
?>
body{
 background-color:black;
 color: white;
}
</style>
<div id="main">
<div class="inner">
<div class="container-fluid" style="background-color:black; color:white">
<?php
$qry = "select * from books WHERE Bookid= $Id";
$result = mysqli_query($conn, $qry);
while ($data = mysqli_fetch_assoc($result)) {
?>
<div class="row">
<div class="col-lg-6 col-md-12">
<img src="../../Admin/images/books/<?php echo $data['BookImage'] ?>" class="img-fluid"> </div>
<div class="col-lg-6 col-md-12">
<p><?php echo $data['Description'] ?></p>
<p><?php echo $data['Price'] ?></p>
<div class="col-sm-6">
<input type="submit" class="primary" value="Add to Cart"> </div>
<?php } ?>
</div>
</div>
</div>
</div>