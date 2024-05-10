<?php
include("header.php");
?>

<!-- Main -->
<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>

							<br>

							<h2 class="h2">Category Products</h2>

							<!-- Products -->
							<section class="tiles">
                            <?php
                                $sql ="select * from category order by id asc limit 3";
                                $result=mysqli_query($conn,$sql);
                                while ($rows = mysqli_fetch_assoc($result)) {                                            
                                    ?>
								<article class="style1">
									<span class="image">
                                    <?php 
                                                    echo "<img src=\"../../Admin/images/category/{$rows['CategoryImage']}\"
                                                    height=300px width=300px"
                                                    ?>
										
									</span>
									<a href="product-details.html">

										<h2><?php  echo $rows['CategoryImage'] ?></h2>
										
										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>
								</article>
                                <?php } ?>
								
							</section>

							
							<br>
							<br>


<?php
include("footer.php");
?>