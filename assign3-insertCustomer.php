<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Programming Assignment </title>
    
    <link href="css/all.css" rel="stylesheet">
    
    <style> <?php include "css/assign2.css" ?></style>
    <link href="css/assign2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Licorice&family=Miniver&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">
</head>


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

    <main class="main-b">
        <section class="section-1b">
            <h2>Customer Registration</h2>
            <p class="descriptionb">-Last item viewed</p>
            
            <div class="myimg-b"><img  src="images/113010-m.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat" /></div>
        </section>
        <section class="section-2b">
            <div class="form-2b">
                <h3 class="acc-header">Account</h3>
                <form action="assign3-checkCustomer.php" method="POST" class="form" >
                    <div class="one-b">
                        <div>
                            <label>Email*</label>
                            <input type="email" name="email" placeholder="email@example.com">
                        </div>
                        <div>
                            <label>Password*</label>
                            <input type="password" name="password-1" placeholder="At least 8 characters">
                        </div>
                        <div>
                            <label>Password Repeat*</label>
                            <input type="password" name="password-2" placeholder="At least 8 characters">
                        </div>
                    </div>
                    <h3 class="profile-header">Profile</h3>
                    <div class="two-b">
                        <div>
                            <label>First Name*</label>
                            <input type="text" name="firstname" >
                        </div>
                        <div>
                            <label>Last Name*</label>
                            <input type="text" name="lastname">
                        </div>
                        <div>
                            <label>Birth Date</label>
                            <input type="date" name="birthdate" ></div>
                    </div>
                    <h3 class="contact-header">Contact</h3>
                    <div class="three-b">
                        <div>
                            <label>Address</label>
                            <input type="text" name="address" >
                        </div>
                        <div>
                            <label>State/Region</label>
                            <input type="text" name="state/region">
                        </div>
                        <div>
                            <label>City</label>
                            <input type="text" name="city" >
                        </div>
                        <div>
                            <label>Zip</label>
                            <input type="text" name="zip" >
                        </div>
                        <div>
                            <label>Country</label>
                            <select name="country" >
                                <option value="Not selected">Select a country</option>
                                <?php
                                    //?????????????????? ?????? ???????????? country ?????? ?????????? 
                                    $fileContents = file_get_contents("countries.txt");
                                    $countries = explode("\n",$fileContents);
                                    foreach($countries as $country){
                                        echo '<option value="' .$country . '"';
                                        echo ">";
                                        echo htmlentities($country, ENT_HTML5, "UTF-8");
                                        echo '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div>
                            <label>Mobile*</label>
                            <input name="mobile" type="tel" placeholder="NNN-NNN-NNNN">
                        </div>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" value="1" >
                        <label style="display: inline;">I agree to the <span style="color: rgb(5, 111, 197);"><a href="#" style="text-decoration: none; color:rgb(5, 111, 197) ;">Terms of the Site</a> </span> </label>
                    </div>
                    <button type="submit">Create Account</button>        
                </div>
                </form>
                
                
               
                
                







            


        </section>
       <section class="section-3b">
            
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