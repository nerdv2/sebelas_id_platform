<select name="category">
    <?php
    $sql1 = "select * from product_category";
    $query1 = mysqli_query($db_link,$sql1);
    while($data1 = mysqli_fetch_array($query1)){
        echo $data1['name']."<br>";
        echo "<option value =$data1[id]> $data1[name] </option>";
    } 
    ?>
</select>