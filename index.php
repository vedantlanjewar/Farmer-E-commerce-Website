<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FARMER E-COMMERCE</title>
        <link rel="stylesheet" href="css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <header id="top" > 
           
            <div class="top">
                <div class="logo">
                    <img src="images/ICON.png" alt="company logo">
                </div>
                
                <nav>
                    <ul>
                        <li><a href="#top">Home</a></li>    
                        <!-- href="#" is used so that the link dosent open -->
                        <li><a href="#service">Services</a></li>  
                        <li><a href="#aboutus">About Us</a></li>      
                        <li><a href="#contactus">Contact Us</a></li>
                        <li><a href="login_user.php">Login</a></li>
                        <!-- <li><a href="#">Login</a></li> -->
                    </ul>
                </nav>
            </div> 
            <div class="title">
                <h1> <span class="span1"> </span></h1>
                <!-- <h3> <span class="span2"> </span></h3> -->
            </div>   
            <div class="backtotop">
                <a href="#top"><img src="images/backtotop.png"></a>
            </div>
        </header>
        <main>
            <div class="serv" id="service">
                <h2> SERVICES </h2>
                    <div class="farmserv">
                        <p> For Farmer </p>
                        <img src="images/megan-thomas-xMh_ww8HN_Q-unsplash.jpg">
                        <ul>
                            <li style="font-size:17px;"> Sell Your Produce</li>
                            <li style="font-size:17px;"> Get extra for<br> Indemand produce</li>
                            <li style="font-size:17px;"> Get Market prices,support...</li>
                        </ul>
                        <div class="sell">
                           <a href="farmerlogin.php"> <p> Sell to us </p></a>
                        </div>
                    </div>
                    <div class="custserv">
                        <p> For Buyers</p>
                        <img src="images/megan-thomas-xMh_ww8HN_Q-unsplash.jpg">
                        <ul>
                            <li style="font-size:17px;"> Buy Fresh</li>
                            <li style="font-size:17px;"> Get Seasonal<br> Discounts</li>
                            <li style="font-size:17px;"> Guranted Return <br>policy</li>
                        </ul> 
                        <div class="buy">
                            <a href="userlogin.php"> <p> Buy from us </p></a>
                         </div>
                    </div>
             </div>

            <div class="aboutus" id="aboutus">
                <div class="abtlogo">
                <img  src="images/ABOUT US.png" alt="about us">
                </div>
                <div class="leftimg">
                <img src="images/portrait.jpg"  alt="photo">
                <p><b> Name 1 : co-founder </b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ex possimus quo nesciunt id eveniet, porro quam excepturi dolores ut maiores aspernatur. Cupiditate nulla explicabo ullam at reprehenderit tempora velit.</p>
                </div>
                <div class="rightimg">
                <img src="images/portrait.jpg"  alt="photo">
                <p><b> Name 3 : co-founder </b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ex possimus quo nesciunt id eveniet, porro quam excepturi dolores ut maiores aspernatur. Cupiditate nulla explicabo ullam at reprehenderit tempora velit.</p>
                </div>
                <div class="centerimg">
                <img  src="images/portrait.jpg"  alt="photo">
                <p><b> Name 2 : co-founder </b><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ex possimus quo nesciunt id eveniet, porro quam excepturi dolores ut maiores aspernatur. Cupiditate nulla explicabo ullam at reprehenderit tempora velit.</p>
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