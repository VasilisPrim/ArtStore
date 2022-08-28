<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Programming Assignment </title>
    <style><?php include "css/assign2.css"?></style>
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
            <h2>Customer Registration</h2>
            
            
            <div class="myimg"><img  src="images/113010-m.jpg" class="img-thumbnail img-responsive" alt="Self-portrait in a Straw Hat" /></div>
            
            <div class="problem_occured-1">
                
                <?php 
                $status = true;
                $checkboxcheck = true;
                
                //έλεγχος αν συμπληρώθηκαν τα υποχρεωτικά πεδία
                if (empty($_POST['email']) && $status) {
                    $errmsg = "Please enter your email "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                    $status = false;
                }elseif (empty($_POST['lastname']) && $status) {
                    $errmsg = "Please enter your last name "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                    $status = false;
                }
                elseif (empty($_POST['firstname']) && $status) {
                        $errmsg = "Please enter your first name "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                        $status = false;  
                }
                elseif (empty($_POST['password-1']) && $status) {
                    $errmsg = "Please enter your password "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                    $status = false;
                }
                elseif (empty($_POST['password-2']) && $status) {
                        $errmsg = "Please enter your repeat password "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                        $status = false;
                }
                //έλεγχος για την ισότητα των passwords
                elseif ($_POST['password-2'] != $_POST['password-1'] && $status) {
                    $errmsg = "Wrong repeat password "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                    $status = false;
            }
                elseif (empty($_POST['mobile'])  && $status) {
                    $errmsg =  "Please enter your mobile phone "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                    $status = false;
                }
                //έλεγχος για το αν έγινε check το checkbox
                elseif (empty($_POST['checkbox'])  && $status) {
                    $errmsg =  "You must first agree with the Terms of Service "." <button id='alertBtn' onclick=\"goBack()\">Go Back</button>";
                    $status = false;
                    $checkboxcheck = false;
                }
            ?>
                <?php if ($status){//παρουσίαση στοιχείων πελάτη αν όλα πήγαν καλά ?>
                    
                    
                    <div class="table-user-info">
                        <p>User Info</p>
                        <table>
                            
                            <tr>
                                <th>First name:</th>
                                <td><?php echo $_POST['firstname'];?></td>
                            </tr>
                            <tr>
                                <th>Last name:</th>
                                <td><?php echo $_POST['lastname'];?></td>
                            </tr>
                            <tr>
                                <th>Birth date:</th>
                                <td><?php echo $_POST['birthdate'];?></td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td><?php echo $_POST['email'];?></td>
                            </tr>
                            <tr>
                                <th>Mobile:</th>
                                <td><?php echo $_POST['mobile'];?></td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td><?php echo $_POST['address'];?></td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td><?php echo $_POST['city'];?></td>
                            </tr>
                            <tr>
                                <th>State/Ragion:</th>
                                <td><?php echo $_POST['state/region'];?></td>
                            </tr>
                            <tr>
                                <th>Zip:</th>
                                <td><?php echo $_POST['zip'];?></td>
                            </tr>
                            <tr>
                                <th>Country:</th>
                                <td><?php echo $_POST['country'];?></td>
                            </tr>
                        </table>
                        <form action="assign3-insertCustomerDB.php" method="POST">
                            <!--αποστολή στοιχείων με hidden πεδία -->
                            <input type='hidden' name='firstname' value='<?php echo $_POST['firstname']; ?>'>
                            <input type='hidden' name='lastname' value='<?php echo $_POST['lastname']; ?>'>
                            <input type='hidden' name='email' value='<?php echo $_POST['email']; ?>'>
                            <input type='hidden' name='birthdate' value='<?php echo $_POST['birthdate']; ?>'>
                            <input type='hidden' name='mobile' value='<?php echo $_POST['mobile']; ?>'>
                            <input type='hidden' name='address' value='<?php echo $_POST['address']; ?>'>
                            <input type='hidden' name='city' value='<?php echo $_POST['city']; ?>'>
                            <input type='hidden' name='state/region' value='<?php echo $_POST['state/region']; ?>'>
                            <input type='hidden' name='zip' value='<?php echo $_POST['zip']; ?>'>
                            <input type='hidden' name='country' value='<?php echo $_POST['country']; ?>'>
                            <br>
                            <input id="proceed_btn" type="submit" value="Proceed">
                    </div>



                    
                    <!--αν δεν συμπληρώθηκε το checkbox -->
                <?php } elseif($checkboxcheck == false) { ?>
                    <h3 id="err_terms-1">A problem occured!</h3>
                    <p id="err_message-1"><?php echo $errmsg?></p>
                    <!--αν δεν συμπληρώθηκε κάποιο απο τα υποχρεωτικά πεδία -->    
                <?php } else {?>
                    <h3 id="err_terms-2">A problem occured!</h3>
                    <p id="err_message-2"><?php echo $errmsg?></p>
                    <?php } ?>

                      
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