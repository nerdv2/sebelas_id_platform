<?php
    include('header.php');
    include('config.php');
?>
</p>
<script type="text/javascript">
      $(document).ready(function() {
        $('#autoWidth').lightSlider({
                autoWidth:true,
                item: 1,
                speed: 800,
                pause: 5000,
                pauseOnHover: true,
                auto: true,
                loop: true,
                onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
                
            });
        });
    </script>
<div class="box-slider">
<ul id="autoWidth" class="cs-hidden">
  <li class="item-a">
        <a href="itemdetails.php?id=50"><img src="img/Slide.jpg" style="min-width:100%;max-height:100%;"></a>
  </li>
  <li class="item-b">
        <a href="itemdetails.php?id=48"><img src="img/Slide3.jpg" style="min-width:100%;max-height:100%;"></a>
  </li>
  <li class="item-c">
        <a href="itemdetails.php?id=49"><img src="img/Slide2.jpg" style="min-width:100%;max-height:100%;"></a>
  </li>
</ul>
</div>
<br>
<?php

    function getData(){
        global $connect;
        $query = "SELECT id, name, category, price, image, info FROM product_data";
        $results = mysqli_query($connect, $query) or die(mysql_error());
        $x=1;
        echo "<div class='row'>";
        
        
        while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
            
 		        extract($row);
?>  
            
<div class='col-md-4'>
    <div class="thumbnail">
        <h4 class="text-center"><span class="label label-info"><?php echo $row['category']; ?></span></h4>
        <?php echo '<img src=img/' . $row['image'] . ' style="max-width:220px;max-height:240px;width:220px;height:240px"</img>'; ?>
    <div class="caption">
        <div class="row">
            <div class="col-md-12 col-xs-6 text-center">
                <div class="truncate">
                    <?php echo $row['name']; ?>
                </div>
            </div>
            <div class="col-md-12 col-xs-6 text-center">
                <h3><br>
                <label><?php echo "Rp. ". $row['price'];   ?></label></h3>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12 text-center">
            <a <?php echo "href='itemdetails.php?id=$id'"; ?> class="btn btn-success btn-product">Product Detail</a> 
        </div>
        
    </div>
    <br>
</div>
</div>
<?php
   		    
        }

        }   
?>
</div>
    <?php
        getData();
        include('footer.php');
    ?>
