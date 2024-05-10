<?php
include("header.php");
?>
		
							<h2 class="h2">Author Products</h2>

							<!-- Products -->
							<section class="tiles">
                            <?php
                                $sql ="select * from authors order by id asc limit 3";
                                $result=mysqli_query($conn,$sql);
                                while ($rows = mysqli_fetch_assoc($result)) {                                            
                                    ?>
								<article class="style1">
									<span class="image">
                                    <?php 
                                                    echo "<img src=\"../../Admin/images/authors/{$rows['image']}\"
                                                    height=300px width=300px"
                                                    ?>
										
									</span>
									<a href="product-details.html">

										<h2><?php  echo $rows['author_name'] ?></h2>
										<h2><?php  echo $rows['dob'] ?></h2>
										<h2><?php  echo $rows['location'] ?></h2>
										
										<p><del>$19.00</del> <strong>$19.00</strong></p>

										<p>Vestibulum id est eu felis vulputate hendrerit uspendisse dapibus turpis in </p>
									</a>

								</article>
								
                                <?php } ?>
							</section>

							
				


<?php
include("footer.php");
?>