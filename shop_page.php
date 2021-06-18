<?php  

//$id=$_GET["id"];
$id = isset($_GET['id']) ? $_GET['id'] : '';
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"web_project");

     if(isset($_POST["submit1"]))
        {
            $d=0;
            if(is_array($_COOKIE['item']))//this is for checking cookie avaible or not//problem1
            {
                foreach($_COOKIE['item'] as $name => $value)
                {
                    $d=$d+1;
                }
                $d=$d+1;
            }
            else
            {
                $d=$d+1;
            }

        //to get item description from table
            $res3=mysqli_query($link,"select * from product where id=$id");
            while($row3=mysqli_fetch_array($res3))
            {
                $img1=$row3["product_image"];
                $nm=$row3["product_name"];
                $prize=$row3["product_price"];
                $qty="1";
                $total=$prize*$qty;
            }


            if(is_array($_COOKIE['item'])) //this is for chheck cookie are aviable or not//problem2
            {
                $found=0;
                foreach ($_COOKIE['item'] as $name => $value) 
                {
                    $value11=explode("__",$value);
                    
                    if($img1==$value11[0]) //this is to check same cookie avaible or not
                    {
                        // check here for quantity add in the cart for more than avaible quantity
                        $found=$found+1;
                        $qty=$value11[3]+1;

                        $tb_qty;
                        $res = mysqli_query($link,"select * from product where product_image='$img1'");
                        while ($row = mysqli_fetch_array($res))
                        {
                            $tb_qty = $row["product_qty"];
                        }
                        if($tb_qty < $qty)
                        {
                            ?>
                                <script type="text/javascript">
                                    alert("this much quantity not avaible");
                                </script>

                            <?php
                        }
                        else
                        {
                            $total=$value11[2]*$qty;
                            setcookie("item[$name]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800);
                        }
                    }                
                }
                if($found==0)
                {
                        $tb_qty;
                        $res = mysqli_query($link,"select * from product where product_image='$img1'");
                        while ($row = mysqli_fetch_array($res))
                        {
                            $tb_qty = $row["product_qty"];
                        }
                        if($tb_qty < $qty)
                        {
                            ?>
                                <script type="text/javascript">
                                    alert("this much quantity not avaible");
                                </script>

                            <?php
                        }
                        else
                        {
                            setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800);
                        }
                }
            }
            else
            {
                        $tb_qty;
                        $res = mysqli_query($link,"select * from product where product_image='$img1'");
                        while ($row = mysqli_fetch_array($res))
                        {
                            $tb_qty = $row["product_qty"];
                        }
                        if($tb_qty < $qty)
                        {
                            ?>
                                <script type="text/javascript">
                                    alert("this much quantity not avaible");
                                </script>

                            <?php
                        }
                        else
                        {
                            setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800); //new cookie
                        }
            }
        }
                                
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FARMER E-COMMERCE</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mainnew.css">
        <script src="js/main.js"></script>
        <script src="https://kit.fontawesome.com/eafc8c3b76.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <header>
     
        
            <div class="logo">
                <img src="img/ICON.png" alt="company logo">    
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" >HOME</a></li>    
                    <li><a href="#shop_item">SHOP</a></li>        
                    <li><a href="#contactus">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="cartlogomoney">
                <!-- <p><i id="wishlistcount" class="fas fa-heart fa-2x "></i></p> -->
                <a href="cart.php"><i id="cartlistcount" class="fas fa-cart-plus fa-2x"></i></a>
                <!-- <p><strong><em>Total Cost:  Rs. <span></span></em></strong></p> -->
             <!--<p class="cartcounter">0</p> -->
            </div>
        </header>-->

        <main class="main">
            <div class="first">
                <div class="categories">
                    <p onclick="drop()" id="p1"><i class="far fa-caret-square-down"></i> All Departments </p>
                    <div class="categoriesshadow">
                        <a href="#secondlink1" onclick="border(1)" class="dropdown">All</a>
                        <a href="#secondlink2" onclick="border(2)" class="dropdown">Fruits</a>
                        <a href="#secondlink3" onclick="border(3)" class="dropdown">Vegetables</a>
                        <a href="#secondlink4" onclick="border(4)" class="dropdown">Grain</a>
                    </div>

                </div>
                <div class="searchandimage">
                    <!-- <div class="search">
                        <p> Here will the search function </p>
                    </div> -->
                    <div class="images">
                        <img id="slideimage" src="images/1.jpg" alt="xyz">
                        <p id="firstslide" onclick="lslide()"> < </p>
                        <p id="second slide" onclick="rslide()"> > </p>
                    </div>
                </div>
            </div>
            <div class="second">
                <p id="secondheading"> Featured Product </p>
                <ul>
                    <li><span id="secondlink1" onclick="border(1)"> All </span></li>
                    <li><span id="secondlink2" onclick="border(2)"> fruits </span></li>
                    <li><span id="secondlink3" onclick="border(3)"> Vegetables </span></li>
                    <li><span id="secondlink4" onclick="border(4)"> Grains </span></li>
                </ul>
                
                    <!--<div style="width: 33.33%;">
                        <img src="img/1.jpg" alt="fruit 1" style="width: 200px; height: 200px;">
                        <h2>Banana</h2>
                        <h3>50/kg</h3>
                    </div>
                    <div style="width: 33.33%;">
                        <img src="img/1.jpg" alt="fruit 1" style="width: 200px; height: 200px;">
                        <h2>Banana</h2>
                        <h3>50/kg</h3>
                    </div>-->
                    <div id="shop_item" class="items">
                    <?php

                        $res=mysqli_query($link,"select * from product");
                        while($row=mysqli_fetch_array($res))
                        {
                            ?>
                                <form name="form1" action="shop_page.php?id=<?php echo $row["id"]; ?>" method="POST">
                                <div  class="column <?php echo $row["product_category"]; ?>">
                                    <img src="<?php echo $row["product_image"]; ?>" alt="fruit 1" >
                                    <h2><?php echo $row["product_name"]; ?> </h2>
                                    <h3><?php echo $row["product_price"]; ?>/kg</h3>
                                   <button type="submit" name="submit1" ><i class="fas fa-cart-plus  likecart" ></i> Add to Cart 
                                   </button>
                                   <!-- <button type="submit" name="submit1" ><i class="fas fa-cart-plus  likecart" ></i> Add to Cart</button>-->
                                </div>
                                
                                </form>

                            <?php
                        }
                        
                        
                        
                    ?>
                                
                    </div>
                    
            </div>
        </main>

        <footer>
            <div class="footimg" id="contactus">
                <div class="location">
                    <img src="images/location.png"> 
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore consectetur obcaecati quas illo commodi ad velit </p>
                </div>
                <div class="phone">
                    <img src="images/phone.png">
                    <p>+91999999999 <br> +021838289382</p>
                </div>
                <div class="email">
                    <img src="images/mail.png">
                    <p> fjdsajf@gmail.com<br> fjdsakfjjsdaj@gmail.com</p>
                </div>

            </div>
        </footer>
    </body>

</html>