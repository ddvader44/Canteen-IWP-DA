<?php
    include('connect.php');
    $query = mysqli_query($con,"select * from cart");
    if(mysqli_num_rows($query)){
    while($data=mysqli_fetch_array($query))
    {
        echo "<p>";
        echo $data['Item_name'];
        echo "<p>";
        echo $data['Price'];
    }
?>