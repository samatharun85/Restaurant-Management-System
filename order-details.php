<!DOCTYPE html>
<html>
    <head>
        <title>Order Details</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="cust.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script type="text/javascript" src="mul.js"></script>
        <style>
            table{
                opacity: 0.9;
                box-shadow: rgb(38, 57, 77) 0px 20px 30px - 10px;
                text-align: center;
                border-radius:10px;
            
            }
            .table-container{
                width: 60%;
            }
            body{
                background-image: url("out.jpg");
                background-size: cover;
                background-repeat: no-repeat;
                width: 98%;
                height: 100%;
               
            }
            h1{
                font-size:30px;
            }
            .cat-title{
                margin-top:5%;
                color:white;

            }
            .btn-success{
                margin-bottom:3%;
            }
        </style>
    </head>
    <body>
        <?php
            $connection=mysqli_connect('localhost','root','iiits123','customers');
            // $query = "select *from cust_details ORDER BY phone;";
            $query = "select *from cust_details ORDER BY inc DESC LIMIT 1;";
            $result = mysqli_query($connection, $query);
          
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $name=$row['name'];
                    $phone=$row['phone'];
                    $email=$row['gmail'];
                    $date=$row['diningDate'];
                    $time=$row['diningTime'];
                    $members=$row['members'];
                    $table=$row['tableNum'];
                }
            } else {
                echo "";
            }      
            $qroti = "select *from roti where id=$phone ORDER BY inc DESC LIMIT 1;";
            $qveg = "select *from veg where id=$phone ORDER BY inc DESC LIMIT 1;";
            $qnonveg = "select *from nonveg where id=$phone ORDER BY inc DESC LIMIT 1;";
            $qdrinks = "select *from drinks where id=$phone ORDER BY inc DESC LIMIT 1;";
            $resultroti = mysqli_query($connection, $qroti);
            $resultveg = mysqli_query($connection, $qveg);
            $resultnonveg = mysqli_query($connection, $qnonveg);
            $resultdrinks = mysqli_query($connection, $qdrinks);
            if (mysqli_num_rows($resultroti) > 0) {
                while($row1 = mysqli_fetch_assoc($resultroti)){
                    $aroti=$row1['roti'];
                    $broti=$row1['butterRoti'];
                    $croti=$row1['butterNaan'];
                    $droti=$row1['tandooriNaan'];
                    $rotiId=$row1['id'];
                }
            }
            if (mysqli_num_rows($resultveg) > 0) {
                while($row2 = mysqli_fetch_assoc($resultveg)){
                    $aveg=$row2['vegBiryani'];
                    $bveg=$row2['planeRice'];
                    $cveg=$row2['tomatoCurry'];
                    $dveg=$row2['veMixedCurry'];
                    $vegId=$row2['id'];
                }
            }
            if (mysqli_num_rows($resultnonveg) > 0) {
                    while($row3 = mysqli_fetch_assoc($resultnonveg)){
                        $nonvegId=$row3['id'];
                        $anonveg=$row3['chickenBiryani'];
                        $bnonveg=$row3['MuttonBiryani'];
                        $cnonveg=$row3['butterChicken'];
                        $dnonveg=$row3['greenChicken'];
                    }
                }
            if (mysqli_num_rows($resultdrinks) > 0) {
                while($row4 = mysqli_fetch_assoc($resultdrinks)){             
                    $sprite=$row4['sprite'];
                    $coke=$row4['cocaCola'];
                    $thumsup=$row4['thumsup'];
                    $sting=$row4['sting'];
                    $drinksid=$row4['id'];
                }
            }
        ?>
        <a href="menu1.php"><button>Back</button></a>
        <div class="row justify-content-center align-content-center">
        <div class="table-container table-responsive">
        <h2 class="cat-title  text-center bg-dark w-40"><u>Customer Details:</u></h2>
        <table class="table table-striped  table-dark table-hover">
            <tbody>
                <tr><td> <B>Customer Name<B></td><td><?php echo $name; ?></td></tr>
                <tr><td> <B>Mobile<B></td><td><?php echo $phone; ?></td></tr>
                <tr><td> <B>Email<B></td><td><?php echo $email; ?></td></tr>
                <tr><td> <B>Dining Date<B></td><td><?php echo $date; ?></td></tr>
                <tr><td> <B>Dining Time<B></td><td><?php echo $time; ?></td></tr>
                <tr><td> <B>Total Members<B></td><td><?php echo $members; ?></td></tr>
                <tr><td> <B>Table Number<B></td><td><?php echo $table; ?></td></tr>
             <tbody>
                </table>
            </div>
                <div class="table-container table-responsive">
                    <h2 class=" cat-title text-center bg-dark w-40"><u>Order Details:</u></h2>
                    <table class="table table-striped  table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Item
                                    
                                </th>
                                <th scope="col">
                                    Price(in Rupees)
                                    
                                </th>
                                <th scope="col">
                                   Quantity
                                    
                                </th>
                                <th scope="col">
                                    Price(in Rupees)
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php
                                        if($aroti){
                                            echo nl2br("Roti\n");
                                        }
                                    ?>

                                    <?php
                                        if($broti){
                                            
                                            echo nl2br("\n Butter Roti \n");
                                        }
                                    ?>

                                    <?php
                                        if($croti){
                                            echo nl2br("\n Butter Naan \n");
                                        }
                                    ?>

                                    <?php
                                        if($droti){
                                            echo nl2br("\n Tandoori Naan \n");
                                        }
                                    ?>
                                    <!-- -->
                                    <?php
                                        if($anonveg){
                                            echo nl2br("\n Chicken Biryani \n");
                                        }
                                    ?>

                                    <?php
                                        if($bnonveg){
                                            
                                            echo nl2br("\n Mutton Biryni \n");
                                        }
                                    ?>

                                    <?php
                                        if($cnonveg){
                                            echo nl2br("\n Butter Chicken \n");
                                        }
                                    ?>

                                    <?php
                                        if($dnonveg){
                                            echo nl2br("\n Green Chicken \n");
                                        }
                                    ?>
                                    <!-- -->
                                    <?php
                                        if($aveg){
                                            echo nl2br("\n Veg Biryani \n");
                                        }
                                    ?>

                                    <?php
                                        if($bveg){
                                            
                                            echo nl2br("\n Plane Rice \n");
                                        }
                                    ?>

                                    <?php
                                        if($cveg){
                                            echo nl2br("\n Tamota Rice \n");
                                        }
                                    ?>

                                    <?php
                                        if($dveg){
                                            echo nl2br("\n Mixed Veg Curry \n");
                                        }
                                    ?>
                                    <!-- -->
                                    <?php
                                        if($sprite){
                                            echo nl2br("\n Sprite 750ML \n");
                                        }
                                    ?>

                                    <?php
                                        if($coke){
                                            
                                            echo nl2br("\n Coca Cola 750ML \n");
                                        }
                                    ?>

                                    <?php
                                        if($thumsup){
                                            echo nl2br("\n Thumsup 750ML \n");
                                        }
                                    ?>

                                    <?php
                                        if($sting){
                                            echo nl2br("\n Sting 250ML \n");
                                        }
                                    ?>
                                    
                                </td>
                                <td>
                                    <div id="price1"><?php
                                        if($aroti){
                                            
                                            echo nl2br("12\n");
                                            
                                        }
                                    ?></div>
                                    <div id="price2"><?php
                                        if($broti){
                                            echo nl2br("\n25\n");
                                        }
                                    ?></div>
                                    <div id="price3"><?php
                                        if($croti){
                                            echo nl2br("\n40\n");
                                        }
                                    ?></div>
                                    <div id="price4"><?php
                                        if($droti){
                                            echo nl2br("\n40\n");
                                        }
                                    ?></div>
                                    <!-- -->
                                    <div id="price5"><?php
                                        if($anonveg){
                                            echo nl2br("\n240\n");
                                        }
                                    ?></div>
                                    <div id="price6"><?php
                                        if($bnonveg){
                                            echo nl2br("\n320\n");
                                        }
                                    ?></div>
                                    <div id="price7"><?php
                                        if($cnonveg){
                                            echo nl2br("\n180\n");
                                        }
                                    ?></div>
                                    <div id="price8"><?php
                                        if($dnonveg){
                                            echo nl2br("\n190\n");
                                        }
                                    ?></div>
                                    <!-- -->
                                    <div id="price9"><?php
                                        if($aveg){
                                            echo nl2br("\n120\n");
                                        }
                                    ?></div>
                                    <div id="price10"><?php
                                        if($bveg){
                                            echo nl2br("\n60\n");
                                        }
                                    ?></div>
                                    <div id="price11"><?php
                                        if($cveg){
                                            echo nl2br("\n140\n");
                                        }
                                    ?></div>
                                    <div id="price12"><?php
                                        if($dveg){
                                            echo nl2br("\n120\n");
                                        }
                                    ?></div>
                                    <!-- -->
                                    <div id="price13"><?php
                                        if($sprite){
                                            echo nl2br("\n40\n");
                                        }
                                    ?></div>
                                    <div id="price14"><?php
                                        if($coke){
                                            echo nl2br("\n36\n");
                                        }
                                    ?></div>
                                    <div id="price15"><?php
                                        if($thumsup){
                                            echo nl2br("\n40\n");
                                        }
                                    ?></div>
                                    <div id="price16"><?php
                                        if($sting){
                                            echo nl2br("\n20");
                                        }
                                    ?></div>
                                </td>


                                <td>
                                    <div id="quantity1"><?php
                                        if($aroti){
                                            echo nl2br("$aroti\n");
                                            
                                        }
                                    ?></div>
                                    <div id="quantity2"><?php
                                        if($broti){
                                            echo nl2br("\n $broti\n");
                                        }
                                    ?></div>
                                    <div id="quantity3"><?php
                                        if($croti){
                                            echo nl2br("\n $croti \n");
                                        }
                                    ?></div>
                                    <div id="quantity4"><?php
                                        if($droti){
                                            echo nl2br("\n $droti \n");
                                        }
                                    ?></div>
                                    <!-- -->
                                    <div id="quantity5"><?php
                                        if($anonveg){
                                            echo nl2br("\n $anonveg \n");
                                        }
                                    ?></div>
                                    <div id="quantity6"><?php
                                        if($bnonveg){
                                            echo nl2br("\n $bnonveg \n");
                                        }
                                    ?></div>
                                    <div id="quantity7"><?php
                                        if($cnonveg){
                                            echo nl2br("\n $cnonveg \n");
                                        }
                                    ?></div>
                                    <div id="quantity8"><?php
                                        if($dnonveg){
                                            echo nl2br("\n $dnonveg \n");
                                        }
                                    ?></div>
                                    <!-- -->
                                    <div id="quantity9"><?php
                                        if($aveg){
                                            echo nl2br("\n $aveg \n");
                                        }
                                    ?></div>
                                    <div id="quantity10"><?php
                                        if($bveg){
                                            echo nl2br("\n $bveg \n");
                                        }
                                    ?></div>
                                    <div id="quantity11"><?php
                                        if($cveg){
                                            echo nl2br("\n $cveg \n");
                                        }
                                    ?></div>
                                    <div id="quantity12"><?php
                                        if($dveg){
                                            echo nl2br("\n $dveg \n");
                                        }
                                    ?></div>
                                    <!-- -->
                                    <div id="quantity13"><?php
                                        if($sprite){
                                            echo nl2br("\n $sprite \n");
                                        }
                                    ?></div>
                                    <div id="quantity14"><?php
                                        if($coke){
                                            echo nl2br("\n $coke \n");
                                        }
                                    ?></div>
                                    <div id="quantity15"><?php
                                        if($thumsup){
                                            echo nl2br("\n $thumsup \n");
                                        }
                                    ?></div>
                                    <div id="quantity16"><?php
                                        if($sting){
                                            echo nl2br("\n $sting ");
                                        }
                                    ?></div>
                                </td>


                                <td>
                                    <?php
                                        if($aroti){
                                            echo nl2br("<div id='res1'><div>\n");
                                        }
                                    ?>
                                    <script>
                                        const table=[]
                                            var n1=document.getElementById("price1").textContent;
                                            var n2=document.getElementById("quantity1").textContent;
                                            if (n2>=1){
                                                var n3=n1*n2;
                                                table.push(n3)
                                                res1=document.getElementById("res1");
                                                //res1.innerHTML=n3;
                                            }
                                        
                                        
                                            var n1=document.getElementById("price2").textContent;
                                            var n2=document.getElementById("quantity2").textContent;
                                            if(n2>=1){
                                                var n4=n1*n2
                                                table.push(n4)
                                                //res1.innerHTML+=n4
                                            }
                                        
                                            var n1=document.getElementById("price3").textContent;
                                            var n2=document.getElementById("quantity3").textContent;
                                            if(n2>=1){
                                                var n5=n1*n2
                                                table.push(n5)
                                                //res1.innerHTML+=n5;
                                            }

                                            var n1=document.getElementById("price4").textContent;
                                            var n2=document.getElementById("quantity4").textContent;
                                            if(n2>=1){
                                                var n6=n1*n2
                                                table.push(n6)
                                                //res1.innerHTML+=n6;
                                            }

                                            var n1=document.getElementById("price5").textContent;
                                            var n2=document.getElementById("quantity5").textContent;
                                            if(n2>=1){
                                                var n7=n1*n2
                                                table.push(n7)
                                                //res1.innerHTML+=n7;
                                            }


                                            var n1=document.getElementById("price6").textContent;
                                            var n2=document.getElementById("quantity6").textContent;
                                            if(n2>=1){
                                                var n8=n1*n2
                                                table.push(n8)
                                                //res1.innerHTML+=n8;
                                            }


                                            var n1=document.getElementById("price7").textContent;
                                            var n2=document.getElementById("quantity7").textContent;
                                            if(n2>=1){
                                                var n9=n1*n2
                                                table.push(n9)
                                                //res1.innerHTML+=n9;
                                            }


                                            var n1=document.getElementById("price8").textContent;
                                            var n2=document.getElementById("quantity8").textContent;
                                            if(n2>=1){
                                                var n10=n1*n2
                                                table.push(n10)
                                                //res1.innerHTML+=n10;
                                            }


                                            var n1=document.getElementById("price9").textContent;
                                            var n2=document.getElementById("quantity9").textContent;
                                            if(n2>=1){
                                                var n11=n1*n2
                                                table.push(n11)
                                                //res1.innerHTML+=n11;
                                            }


                                            var n1=document.getElementById("price10").textContent;
                                            var n2=document.getElementById("quantity10").textContent;
                                            if(n2>=1){
                                                var n12=n1*n2
                                                table.push(n12)
                                                //res1.innerHTML+=n12;
                                            }


                                            var n1=document.getElementById("price11").textContent;
                                            var n2=document.getElementById("quantity11").textContent;
                                            if(n2>=1){
                                                var n13=n1*n2
                                                table.push(n13)
                                                //res1.innerHTML+=n13;
                                            }


                                            var n1=document.getElementById("price12").textContent;
                                            var n2=document.getElementById("quantity12").textContent;
                                            if(n2>=1){
                                                var n14=n1*n2
                                                table.push(n14)
                                                //res1.innerHTML+=n14;
                                            }


                                            var n1=document.getElementById("price13").textContent;
                                            var n2=document.getElementById("quantity13").textContent;
                                            if(n2>=1){
                                                var n15=n1*n2
                                                table.push(n15)
                                                //res1.innerHTML+=n15;
                                            }


                                            var n1=document.getElementById("price14").textContent;
                                            var n2=document.getElementById("quantity14").textContent;
                                            if(n2>=1){
                                                var n16=n1*n2
                                                table.push(n16)
                                                //res1.innerHTML+=n16;
                                            }


                                            var n1=document.getElementById("price15").textContent;
                                            var n2=document.getElementById("quantity15").textContent;
                                            if(n2>=1){
                                                var n17=n1*n2
                                                table.push(n17)
                                                //res1.innerHTML+=n17;
                                            }


                                            var n1=document.getElementById("price16").textContent;
                                            var n2=document.getElementById("quantity16").textContent;
                                            if(n2>=1){
                                                var n18=n1*n2
                                                table.push(n18)
                                                //res1.innerHTML+=n18;
                                            }
                                            res1.innerHTML=""
                                            for(i=0;i<16;i++){
                                                if(table[i]){
                                                    res1.innerHTML+=table[i]+"<br/>"+"<br/>"
                                                }
                                            }
                                            
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <td colspan=4 >
                                    <div id="subtotal">
                                            <script>
                                                total=0
                                            for(i=0;i<16;i++){
                                                if(table[i]){
                                                    total+=table[i]
                                                }
                                            }
                                            console.log(total)
                                            document.getElementById('subtotal').innerHTML="Total Amount :  "+ total;
                                            </script>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <center><a href="end.html"><button class="btn btn-success">Confirm</button></a></center>
    </body>
</html>
