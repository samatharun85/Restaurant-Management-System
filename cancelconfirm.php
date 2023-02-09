<!DOCTYPE html>
<html>
    <head>
        <title>
            ThankYou
        </title>
        <link rel="stylesheet" type="text/css" href="cancelconfirm.css">
    </head>
    <body>
        <?php
            $name=$_GET['cancelname'];
            $num=$_GET['cancelnumber'];
            //echo $num;
            $connection=mysqli_connect('localhost','root','iiits123','customers');

                if(!$connection)
                {
                    echo "";
                    
                }
                // else{
                //     echo "connection not established";
                // }

                
                $query = "SELECT phone FROM cust_details";
                $result = mysqli_query($connection, $query);
                if(!$result){
                    die('Cold water');
                }
                
                $row=mysqli_fetch_assoc($result);
                //print_r($row);
                //echo"<br>".$row['phone'];
                //$data = mysqli_num_rows($row);
                $nu=$row['phone'];
               echo "$nu<br>";
            
                $query2="DELETE FROM cust_details WHERE phone=$num";
                // echo $v;
                $ar=mysqli_query($connection,$query2);
                if($ar)
                {
                    echo "";
                }
                else
                {
                    echo "";
                }

                $query3="DELETE FROM roti WHERE id='$num'";
                // echo $v;
                $ar=mysqli_query($connection,$query3);
                if($ar)
                {
                    echo "";
                }
                else
                {
                    echo "";
                }
                $query4="DELETE FROM veg WHERE id='$num'";
                // echo $v;
                $ar=mysqli_query($connection,$query4);
                if($ar)
                {
                    echo "";
                }
                else
                {
                    echo "";
                }
                $query5="DELETE FROM nonveg WHERE id='$num'";
                // echo $v;
                $ar=mysqli_query($connection,$query5);
                if($ar)
                {
                    echo "";
                }
                else
                {
                    echo "";
                }
                $query6="DELETE FROM drinks WHERE id='$num'";
                // echo $v;
                $ar=mysqli_query($connection,$query6);
                if($ar)
                {
                    echo "";
                }
                else
                {
                    echo "<br>";
                }
        ?>
        <h3>Your Order Is Cancelled!</h3>
        <h4>Visit Again</h4>
        <h2>BLACK OAK</h2>
        <form action="home.html">
        <button>GO TO HOME</button>
        </form>
        <h4 class="query">For Queries</h4>
        <h3 class="contact">Contact:+919999888844</h3>
        <h3 class="contact">blackoak@gmail.com</h3>
    </body>
</html>
