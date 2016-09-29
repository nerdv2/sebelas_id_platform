<?php
    include('header.php');
    include('config.php');


    function getItemData(){
        global $connect;
        $code = $_REQUEST['id'];
        $query = "SELECT id, name, category, price, image, info, stock, weight, dimension FROM product_data WHERE id LIKE '$code'";
        $results = mysqli_query($connect, $query) or die(mysql_error());
        if($results === FALSE) { 
            echo mysql_error();
        } else {
            $row = mysqli_fetch_array($results, MYSQLI_ASSOC);

            $item_code = $row['id'];
            $itemname = $row['name'];
            $itemprice = $row['price'];
?>
         <div class="container">
                <div class="col-md-12">
                 <div class="row">
                        <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<h4 class="text-center"><span class="label label-info"><?php echo $row['category']; ?></span></h4>
					<?php echo '<img src=img/' . $row['image'] . ' style="max-width:220px;max-height:240px;width:220px;height:240px"</img>'; ?>
					<div class="caption">
						<div class="row">
							<div class="col-md-6 col-xs-6 text-center">
								<h3><?php echo $row['name']; ?></h3>
							</div>
							<div class="col-md-6 col-xs-6 text-center">
								<h3>
								<label><?php echo "Rp. ". $row['price'];   ?></label></h3>
							</div>
						</div>
						<div class="row">
                            <form method="POST" <?php echo "action='cart.php?action=add&icode=$item_code&iname=$itemname&iprice=$itemprice'"; ?>>
							<div class="col-md-6 text-center">
								<input type="submit" name="buynow" value="Buy Now" class="btn btn-primary btn-product"> 
							</div>
							<div class="col-md-6 text-center">
								<input type="submit" name="addtocart" value="Add To Cart" class="btn btn-success btn-product"> 
                                </form>
                            </div>
                        </div>
					</div>
				</div>
			</div>
                
                    <div class="col-md-6">
                        <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Description:</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                            <h3><?php echo $row['name']; ?></h3>
                            <?php
                                echo "Stock : ". $row['stock'] ."<br>";
                                echo "Weight : ". $row['weight'] ."gram<br>";
                                echo "Dimension : ". $row['dimension'] ."cm<br>";
                                echo "Price : Rp.". $row['price'] ."<br><br>";
                                
                            ?>
                            <p>
                                <?php echo $row['info']; ?>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <?php
         }
    }   
?>
        

</p>
    <?php
        getItemData();
        include('footer.php');
    ?>