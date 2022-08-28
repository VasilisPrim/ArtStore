<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Programming Assignment </title>
    <style><?php include "css/assign2.css"?></style>
    <?php include "config.php" ?>
    <link href="css/all.css" rel="stylesheet">
    <link href="css/assign2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Licorice&family=Miniver&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
</head>
<script>function goBack() {
  window.history.back();
}</script>


<body>

    <header>
        <div id="topHeaderRow">
            <nav>
                <ul  class="header">
                    <p>Welcome to <strong>Art Store</strong>,<strong>Login </strong> or <strong>Create new account</strong></p>
                    <li><a href="#"><i class="fas fa-user"></i> My Account</a></li>
                    <li><a href="#"><i class="fas fa-gift"></i> Wish List</a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i> Shopping Cart</a></li>
                    <li><a href="#"><i class="fas fa-arrow-right"></i> Checkout</a></li>
                </ul>
            </nav>
        </div>
        <!-- end topHeaderRow -->

        <div id="logoRow">
            <h1>Art Store</h1>

            <form>
                <input type="text" placeholder="Search" name="search"><button type="submit"><span class="fas fa-search"></span></button>
            </form>
        </div>
        <!-- end logoRow -->

        <div id="mainNavigationRow">
            <nav>
                <ul class="mainNav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Art Works</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">Specials </a></li>
                </ul>

            </nav>
        </div>
        <!-- end mainNavigationRow -->

    </header>

    <main>
        <section class="section-1">
            <h2>Customer Administration</h2>
            <div class="table-user-info">
                <p>Customers</p>
                <table class="customers">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
               
                <?php
                    try { 
                        $conn = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = "SELECT * FROM customer ORDER BY id";
                        $result = $conn->query($stmt);
                        
                            
                        while ($row = $result->fetch()) {?>
                            <tr>
                                <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['country'];?></td>
                                <td> <a href="assign3-viewCustomer.php?id=<?php echo $row['id'];?>">View<a> </td>
                                <td> <a href="assign3-updateCustomer.php?id=<?php echo $row['id'];?>">Edit<a> </td>
                                <td> <a href="assign3-deleteCustomer.php?id=<?php echo $row['id'];?>">Delete</a> </td>
                            </tr>
                                
                        

                                <?php } 
                            }
                        catch(PDOException $e)
                            {
                                
                            echo "Error: " . $e->getMessage();
                            }
                        $conn = null;
                        ?>
                </table>  
                <button id='alertBtn' style="margin: 4rem;" ><a href="assign2a.html">Go to the main page</a></button>  
                
                        
            </div>
        
        </section>
        <h3 class="section_2">Similar Products </h3>
        <section class="section-2">
            
            <div class="first-product">
                
                <img  src="images/thumbs/116010.jpg" alt="...">
                
                <div>
                    <p class="similarTitle"><a href="#">Artist Holding a Thistle</a></p>
                    <button class="view" type="button"><i class="fas fa-info-circle"></i> View</button>
                    <button class="wish" type="button"><i class="fas fa-gift"></i>Wish</button>
                    <button class="cart" type="button"><i class="fas fa-shopping-cart"></i> Cart</button>
                </div>
            </div>

            <div class="second-product">
                <img src="images/thumbs/120010.jpg" alt="...">
                <div>
                    <p class="similarTitle"><a href="#">Portrait of Eleanor of Toledo</a></p>
                    <button class="view" type="button"><i class="fas fa-info-circle"></i> View</button>
                    <button  class="wish" type="button"><i class="fas fa-gift"></i>Wish</button>
                    <button class="cart" type="button"><i class="fas fa-shopping-cart"></i> Cart</button>
                </div>
            </div>
            <div class="third-product">
                <img src="images/thumbs/107010.jpg" alt="...">
                <div>
                    <p class="similarTitle"><a href="#">Madame de Pompadour</a></p>
                    <button class="view" type="button"><i class="fas fa-info-circle"></i> View</button>
                    <button  class="wish" type="button"><i class="fas fa-gift"></i>Wish</button>
                    <button class="cart" type="button"><i class="fas fa-shopping-cart"></i> Cart</button>




                </div>
            </div>
            <div class="forth-product">
                <img src="images/thumbs/106020.jpg" alt="...">
                <div>
                    <p class="similarTitle"><a href="#">Girl with a Pearl Earring</a></p>
                    <button class="view" type="button"><i class="fas fa-info-circle"></i> View</button>
                    <button  class="wish" type="button"><i class="fas fa-gift"></i>Wish</button>
                    <button class="cart" type="button"><i class="fas fa-shopping-cart"></i> Cart</button>


                </div>
            </div>
        </section>
        <section class="section-3">
            
            <div class="aside">
                <div class="cart1">
                    <h3>Cart </h3>
                    <div class="in-cart">
                        <a href="#">
                            <img src="images/tiny/116010.jpg" alt="..." width="32">
                        </a>
                        
                        <p><a href="#">Artist Holding a Thistle</a></p>
                        
                        <a href="#">
                            <img src="images/tiny/113010.jpg" alt="..." width="32">
                        </a>
                        <p><a  href="#">Self-portrait in a Straw Hat</a></p>
                    </div>
                    
                    <strong class="cartText">Subtotal: <span >$1200</span></strong>
                    <div class="cart-buttons">
                        <button type="button"><i class="fas fa-info-circle"></i> Edit</button>
                        <button type="button"> <i class="fas fa-arrow-right"></i>Checkout</button>

                    </div>
                </div>

                <div class="popular-artists">
                    <h3>Popular Artists</h3>
                    <ul>
                        <li><a href="#">Caravaggio</a></li>
                        <li><a href="#">Cezanne</a></li>
                        <li><a href="#">Matisse</a></li>
                        <li><a href="#">Michelangelo</a></li>
                        <li><a href="#">Picasso</a></li>
                        <li><a href="#">Raphael</a></li>
                        <li><a href="#">Van Gogh</a></li>
                    </ul>
                </div>
                <div class="popular-genres">
                    <h3>Popular Genres</h3>
                    <ul>
                        <li><a href="#">Baroque</a></li>
                        <li><a href="#">Cubism</a></li>
                        <li><a href="#">Impressionism</a></li>
                        <li><a href="#">Renaissance</a></li>
                    </ul>
                </div>
            </div>
        </section>    
    </main>


    <footer>
        <div class="first-container">
            <h4><i class="fas fa-info-circle"></i> About Us</h4>
            <p class="about-us">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>

        <div class="second-container">
            <h4> <i class="fas fa-phone"></i> Customer Service</h4>
            <ul class="contact">
                <li><a href="#">Delivery Information</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>

        <div class="third-container">
            <h4><i class="fas fa-shopping-cart"></i> Just Ordered</h4>
            <div class="orders-1">
                <a href="#">
                    <img src="images/tiny/13030.jpg" alt="...">
                </a>
                <p> <a href="#">Arrangement in Grey and Black</a></p>
                <em>5 minutes ago</em>
            </div>
            <div class="orders-2">
                <a href="#">
                    <img src="images/tiny/116010.jpg" alt="...">
                </a>
                <p> <a href="#">Artist Holding a Thistle</a></p>
                <em>11 minutes ago</em>
            </div>
            <div class="orders-3">
                <a href="#">
                    <img src="images/tiny/113010.jpg" alt="...">
                </a>
                <p> <a href="#">Artist Holding a Thistle</a></p>
                <em>23 minutes ago</em>
            </div>
        </div>

        

        <div class="forth-container">
            <h4><i class="fas fa-envelope"></i> Contact us</h4>
            
            <form>
                <div>
                    
                    <input type="text" placeholder="Enter name...">
                </div>
                <div>
                    
                    <input type="email" placeholder="Enter email...">
                </div>
                <div>
                    <textarea placeholder="Enter message..."></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>


        <div id="copyrightRow">
                <p>All images are copyright to their owners. This is just a hypothetical site.<span>&copy; 2021 Copyright Art Store</span>
                </p>
                
        </div>
    
    </footer>


</body>

</html>