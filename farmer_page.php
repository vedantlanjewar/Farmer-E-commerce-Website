<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"web_project");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FARMER </title>
        <link rel="stylesheet" href="css/farmer.css">
        <!-- <script src="js/main.js"></script> -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            function start(){
                document.getElementById("productreq").style.display="block";
                document.getElementById("rates").style.display="none";
                document.getElementById("news").style.display="none";
            }
            function req(){
                document.getElementById("productreq").style.display="block";
                document.getElementById("rates").style.display="none";
                document.getElementById("news").style.display="none";
            }
            function rate(){
                document.getElementById("productreq").style.display="none";
                document.getElementById("rates").style.display="block";
                document.getElementById("news").style.display="none";
            }
            function news(){
                document.getElementById("productreq").style.display="none";
                document.getElementById("rates").style.display="none";
                document.getElementById("news").style.display="block";
            }


        </script>
    </head>
    <body onload="start()">
    <header>
     <div class="logo">
         <img src="img/ICON.png" alt="company logo">    
     </div>
     <nav>
         <ul>
             <li><a href="#" onclick="req()" >Add Products Request</a></li>    
             <li><a href="#" onclick="rate()" >Rates</a></li>  
             <li><a href="#" onclick="news()" >News</a></li>      
             <li><a href="#contactus">Contact Us</a></li>
             <li><a href="index.php">Log Out</a></li>
         </ul>
     </nav>
</header>
     <main>
       
        <div id="productreq">
            <form name="form1" id="register" action="" method="POST" enctype="multipart/form-data">
            <h2>Add Product</h2><br>
            <table >
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="pnm"></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><input type="text" name="pprice"></td>
                </tr>
                <tr>
                    <td>Product Quantity</td>
                    <td><input type="text" name="pqty"></td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td><input id="imagefile" type="file" name="pimage"></td>
                </tr>
                <tr>
                    <td>Product Category</td>
                    <td>
                        <select name="pcategory">
                            <option value="Fruits">Fruits</option>
                            <option value="Vegetable">Vegetable</option>
                            <option value="Grains">Grain</option>
                            <option value="Cereals">Cereals</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Product Description</td>
                    <td>
                        <textarea cols="15" rows="10" name="pdesc"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input id="submit1" type="submit" name="submit1" value="upload"></td>
                </tr>
            </table>
            </form>
            <?php
                if(isset($_POST["submit1"]))
                    {
                         $v1=rand(111,999);
                        $v2=rand(111,999);

                        $v3=$v1.$v2;

                        $v3=md5($v3);

                        $fnm=$_FILES["pimage"]["name"];
                        $dst="./product_image_farmer/".$v3.$fnm;
                        $dst1="product_image_farmer/".$v3.$fnm;
                         move_uploaded_file($_FILES["pimage"]["tmp_name"], $dst);


                        mysqli_query($link,"insert into product_farmer values('','$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]')");
                        }
            ?>


        </div>

            <div id="rates">
                <table>
                 <tr>
                    <th>Produce</th>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Banana flower</td>
                    <td>Vegetable</td>
                    <td>₹ 13</td>
                </tr>
                <tr>
                <td>Bell Pepper (Capsicum)</td>
                    <td>Vegetable</td>
                    <td>₹ 43</td>
                </tr>
                <tr>
                    <td>Cabbage</td>
                    <td>Vegetable</td>
                    <td>₹ 32</td>
                </tr>
                <tr>
                <td>Cauliflower</td>
                    <td>Vegetable</td>
                    <td>₹ 30</td>
                </tr>
                <tr>
                <td>Banana Regular</td>
                    <td>Fruit</td>
                    <td>₹ 42</td>
                </tr>
                <tr>
                <td>Guava</td>
                    <td>Fruit</td>
                    <td>₹ 39</td>
                </tr>
                <tr>
                <td>Orange</td>
                    <td>Fruit</td>
                    <td>₹ 46</td>
                </tr>
                <tr>
                <td>Papaya</td>
                    <td>Fruit</td>
                    <td>₹ 23</td>
                </tr>
                <tr>
                <td>Sugar cane</td>
                    <td>Fruit</td>
                    <td>₹ 24</td>
                </tr>
                <tr>
                <td>Pomegranate</td>
                    <td>Fruit</td>
                    <td>₹ 83</td>
                </tr>
                <tr>
                <td>Soybean grain</td>
                    <td>Grain</td>
                    <td>₹ 40</td>
                </tr>
                <tr>
                <td>Maize</td>
                    <td>Grain</td>
                    <td>₹ 18</td>
                </tr>
                </table>
            </div>

            <div id="news">
                        <br><h2>Coconut growers urged to insure crops</h2><br>
                        <p>Ahead of the cyclone announcement made by the weather station, Collector Dinesh Ponraj Oliver on Monday said that the Agriculture Department officials have offered adequate preventive steps to be taken by farmers in such circumstances.

Speaking to farmers at a coconut groove here at Vanniyan near Perungulam in Mandapam block, he said that coconut was grown on 8652 hectares in the district across Mandapam, Ramanathapuram, Thiruppulani and other locations.

The fruit crops too were grown in the district on a large scale. Hence, it was important to prevent them from such natural calamities, he said and added that by allowing the coconut trees to dry, the roots may remain stronger. Similarly, by creating adequate channels, the rainwater logging can be prevented in fields which may save the standing crops.

Above all, the Collector urged the farmers to ensure that they have insured their crops with insurance companies. By submitting the basic details with the Agriculture offices, which included the name, crop particulars, extent of area, type of crop, patta and " chitta adangal" can be furnished..............</p>
                        <br><h2>Handmade products organisations get together, launch online collective for sales</h2><br>
                        <p>With huge stocks having piled up during the lockdown, 25 organisations working with handmade products, especially clothes, home furnishings, masks, bags and stoles, have come together to form the India Handmade Collective. Since offline sales are yet to return to normal levels, they have now taken to promoting the products online.

Suresh Lakshmipathy, co-founder, Tula (a company that makes organic clothes), and one of the brains behind the effort, said that the idea was to help farmers, weavers, spinners and dyers, who are all part of the cotton value chain, and who have all been affected by the COVID-19 pandemic.

“A lot of people kept producing during the pandemic not knowing what to do, but could not sell their stocks. So instead of individually starting websites, where visibility would not be much, we started this common platform for around 25 brands. And as people who run the back-end operations, we don't make a profit but only take salaries from the sales,” he said....................</p>
                        <br><h2>ICAR develops improved tuber crop varieties</h2><br>
                        <p>The ICAR-Central Tuber Crops Research Institute (CTCRI) in association with the State Agriculture Department, is popularising climate-resilient, improved varieties of tuber crops developed by it among tribal communities in the State.

Organised under the auspices of the Rashtriya Krishi Vikas Yojana (RKVY) to ensure food and livelihood security for tribal populations and marginal farmers, the programme has been rolled out in Thiruvananthapuram district. In due course, it will be extended to other, selected districts, CTCRI officials said.

The three-year programme will see the propagation of cassava (tapioca), sweet potato and yam varieties, Dr. K. Sunilkumar, principal scientist and coordinator of the project at CTCRI, said......................</p>
                        <br><h2>A roving farmer brings paddy farming to Perumbavoor</h2><br>
                        <p>The Perumbavoor municipality has brought 20 hectares of fallow land under paddy cultivation, thanks to a 52-year-old roving farmer from Kuttanad.

Samuel Mathew, who hails from an agricultural family and owns nearly 40 acres of paddy farms in his native Kuttanad region, has been hopping around local bodies for the last 12 years, undertaking what he describes as the “Kuttanad style” of paddy farming on fallow land. Before launching his initiative in Perumbavoor, he has been to Kattanam, Mavelikkara, and Pathiyoor, all in Alappuzha district.

“We have so far arranged 20 hectares of land from owners on a five-year lease for the project being undertaken as part of the fallow land farming scheme being promoted by the State government under the Subiksha Keralam project. The land has been remaining fallow for over two decades,” said Sathi Jayakrishnan, chairperson of Perumbavoor municipality, which has been largely devoid of paddy farming.

It is a win-win situation both for the farmer and the landowners. The landowners will get paddy royalty of ₹2,000 per hectare and another ₹5,000 per hectare for facilitating fallow land farming, both one-time payments...............</p>
                        <br><h2></h2><br>
                        <p></p>

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