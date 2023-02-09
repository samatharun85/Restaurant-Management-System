<!DOCTYPE html>
<html>
    <head>
        <title>
            Category
        </title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="menu.css?v=<?php echo time();?>">
    <h1>Menu Category</h1>
    <div class="container" >
        <div class="row  align-items-center justify-content-center">
            <a class=" row  align-items-center justify-content-center col-lg-12 col-md-12 col-sm-12 col-12" href="roti.php">
                <button class="btn btn-primary category-btn"  >Roti & Nan</button>
            </a>
           <a class=" row  align-items-center justify-content-center col-lg-12 col-md-12 col-sm-12 col-12  " href="non-veg-spl.php"> <button class="btn btn-primary category-btn " >Non-Veg specials</button></a>
            <a class=" row  align-items-center justify-content-center col-lg-12 col-md-12 col-sm-12 col-12 " href="veg-spl.php"><button class="btn btn-primary category-btn" >Veg specials</button></a>           
            
            <a class=" row  align-items-center justify-content-center col-lg-12 col-md-12 col-sm-12 col-12 " href="soft-drinks.php"> <button class="btn btn-primary category-btn" >Soft Drinks</button></a>
        </div>
        <a href="order-details.php"><button class="btn book-btn"><B>Book My Order</B></button></a>
        <?php
            
            
                $aroti=$_GET['vegbiryani'];
                $broti=$_GET['planerice'];
                $croti=$_GET['tomatocurry'];
                $droti=$_GET['mixedvegcurry'];
                $e=$_GET['hidden'];
              
                $connection=mysqli_connect('localhost','root','iiits123','customers');
                if(connection)
                {
                    echo "";
                }
                else{
                    echo "";
                }

                $query2="INSERT INTO veg(vegBiryani,planeRice,tomatoCurry,veMixedCurry,id) VALUES('$aroti','$broti','$croti','$droti','$e');";
                if(mysqli_query($connection,$query2))
                {
                    echo "";
                }
                else
                {
                    echo "";
                }

            
        ?>
        </div>
        
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   </body>
</html>
