<!DOCTYPE html>
<html>
    <head>
        <title>
            Roti & Nan
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="roti.css">
    </head>
    <body>
        <h2 class="cat-title text-center">ROTI & NAN</h2>
        <div class="table-container table-responsive-sm">
         <table class="table table-borderless table-dark table-hover">
            <thead>
               <tr>
                 <th scope="col">Items</th>
                 <th scope="col">Price</th>
                 <th scope="col">Quantity</th>
               </tr>
             </thead>
             <tbody>
               <form action="menu2.php" method="get">
               <tr>
                <td>ROTI</td>
                <td>12/-</td>
                <td><button class="btn" type="button" onclick="decrement()">-</button>
                    <input id="demoInput" type=number min=0 max=100 name="roti">
                    <button class="btn" type="button" onclick="increment()">+</button>
                    
                    <script>
                       function increment() {
                          document.getElementById('demoInput').stepUp();
                       }
                       function decrement() {
                          document.getElementById('demoInput').stepDown();
                       }
                    </script></td>
            </tr>
            <tr>
                <td>BUTTER ROTI</td>
                <td>25/-</td>
                <td><button class="btn" type="button" onclick="decrement1()">-</button>
                    <input id="demoInput1" type=number min=0 max=100 name="butterroti">
                    <button class="btn" type="button" onclick="increment1()">+</button>
                    
                    <script>
                       function increment1() {
                          document.getElementById('demoInput1').stepUp();
                       }
                       function decrement1() {
                          document.getElementById('demoInput1').stepDown();
                       }
                    </script></td>
            </tr><tr>
                <td>BUTTER NAAN</td>
                <td>40/-</td>
                <td><button class="btn" type="button" onclick="decrement2()">-</button>
                    <input id="demoInput2" type=number min=0 max=100 name="butternaan">
                    <button class="btn" type="button" onclick="increment2()">+</button>
                    
                    <script>
                       function increment2() {
                          document.getElementById('demoInput2').stepUp();
                       }
                       function decrement2() {
                          document.getElementById('demoInput2').stepDown();
                       }
                    </script></td>
            </tr><tr>
                <td>TANDOORI NAAN</td>
                <td>40/-</td>
                <td><button class="btn" type="button" onclick="decrement3()">-</button>
                    <input id="demoInput3" type=number min=0 max=100 name="tandoorinaan">
                    <button class="btn" type="button" onclick="increment3()">+</button>
                    
                    <script>
                       function increment3() {
                          document.getElementById('demoInput3').stepUp();
                       }
                       function decrement3() {
                          document.getElementById('demoInput3').stepDown();
                       }
                    </script></td>
            </tr>
         </tbody>
        </table>
      </div>  
      <?php
         $connection=mysqli_connect('localhost','root','iiits123','customers');
          $query = "SELECT phone FROM `cust_details`;";
          // FETCHING DATA FROM DATABASE
          $result = mysqli_query($connection, $query);
          
          if (mysqli_num_rows($result) > 0) {
              // OUTPUT DATA OF EACH ROW
              while($row = mysqli_fetch_assoc($result)) {
                  $phone=$row['phone'];
              }
          } else {
              $phone=0;
          }
      ?>
      <input type="hidden" value="<?php print $phone ?>" name="hidden"> 
      <button type="submit" class="save save-btn">SAVE & PROCEED</button>
   </form>
   </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>

 