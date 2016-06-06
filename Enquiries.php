<!DOCTYPE html>
<html>
    <head>
        
        <title>Enquiries</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        
        


        
        <link rel="stylesheet" href="css/Template.css">
        <link rel="stylesheet" href="css/Enquiries.css">

        <link href='https://fonts.googleapis.com/css?family=Lobster|Pacifico|Lora' rel='stylesheet' type='text/css'>
    
    </head>
    
    <body id="body">
        
        <?php
        
            if($_POST['submit']){
                
                if(!$_POST['name']){
                    
                    $error.='<br>Please enter your name'; 
                    
                }
                
                if(!$_POST['email']){
                    
                    $error.='<br>Please enter your email'; 
                    
                }
                
                if(!$_POST['request-date']){
                    
                    $error.='<br>Please enter a date'; 
                    
                }
                
                if(!$_POST['message']){
                    
                    $error.='<br>Please enter a message'; 
                    
                }
                
                if ($error) {

                    $result='<div class="error-container"><strong>There were error(s)
                    in your form:</strong><br>'. $error .'</div>';

	 	         } else {

                    if (mail("zoej311@cakesbyzozo.co.uk", "New Cake Request", 
                             
                            "Name: " . $_POST['name'] . "\r\n" .
                            "Email: " . $_POST['email'] . "\r\n" .
                            "Requested Date: " . $_POST['request-date'] . "\r\n" .
                            "Occasion: " . $_POST['occasion'] . "\r\n" .
                            "Occasion (Other): " . $_POST['specify-other'] . "\r\n" .
                            "Cake-size: " . $_POST['cake-size'] . "\r\n" .
                            "No. Cupcakes: " . $_POST['no-cupcakes'] . "\r\n" .
                            "Single Number: " . $_POST['single-number-option'] . "\r\n" .
                            "Double Number 1: " . $_POST['double-number-option-one'] . "\r\n" .
                            "Double Number 2: " . $_POST['double-number-option-two'] . "\r\n" .
                            "Sponge: " . $_POST['cake-flavour'] . "\r\n" .
                            "Message: " . $_POST['message'])) {

                        $result='<div class="email-confirmation"><strong>Thank
                        you!</strong> I\'ll be in touch.</div>';

                    } else {

                        $result='<div class="error-container">Sorry, there was
                        an error sending your message. Please try again later.</div>';

                    }



                }


            }              
            
        ?>
        
        <header>
            <h1>Cakes By ZoZo</h1>
        </header>

        <nav class="headerNav">
            
            <a href="#" id="toggleMenu" class="toggle-menu">Menu</a>

            <ul class="desktop-nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html" >Gallery</a></li>
                <li><a href="Enquiries.php">Enquiries</a></li>
                <li><a href="About.html">About</a></li>
            </ul>
            
        </nav>

        <div id='fixed-menu' class="slide-in-menu">
            <ul>
                <li><a href='#' id='back-btn'>Back</a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html" id="gallery">Gallery</a></li>
                <li><a href="Enquiries.php">Enquiries</a></li>
                <li><a href="About.html">About</a></li>
            </ul>
        </div>          

        <div class="main">
            <div class="content-container">
                
                <p id="content-header">Get in touch</p>

                <p id="form-message">Please use the form below to give me an idea of what cake you’d like.</p>
                    
                <div class="form-container">

                    <?php echo $result; ?>
                    
                    <p class="required-heading">*Required</p>
                    
                    <br>
                    <br>
                    
                    <form name="enquiry-form" method="post">
                        <p class="form-headings"><span>*</span>Name:</p>
                        <input type="text" id="required" name="name" class="input-fields" placeholder="Enter your full name" value="<?php echo $_POST['name']; ?>">

                        <p class="form-headings"><span>*</span>Email:</p>
                        <input type="email" id="required" name="email" class="input-fields" placeholder="Enter your email" value="<?php echo $_POST['email']; ?>">

                        <p class="form-headings"><span>*</span>Requested Date:</p>
                        <input type="date" id="required" name="request-date" class="input-fields" value="<?php echo $_POST['request-date']; ?>">

                        <p id="occasion-heading" class="form-headings">Whats the occasion?</p>
                        <select id="occasion" class="selection-field" name="occasion">
                            <option></option>
                            <option value="Birthday" <?php if ($_POST['occasion'] == "Birthday") echo 'selected="selected" '; ?>>Birthday</option>
                            <option value="Wedding" <?php if ($_POST['occasion'] == "Wedding") echo 'selected="selected" '; ?>>Wedding</option>
                            <option value="Christening" <?php if ($_POST['occasion'] == "Christening") echo 'selected="selected" '; ?>>Christening</option>
                            <option value="Holy Communion" <?php if ($_POST['occasion'] == "Holy Communion") echo 'selected="selected" '; ?>>Holy Communion</option>
                            <option value="Other" <?php if ($_POST['occasion'] == "Other") echo 'selected="selected" '; ?>>Other</option>
                        </select>

                        <p class="form-headings">If 'other' please specify:</p>
                        <input id="other-input-field" type="text" name="specify-other" class="input-fields" value="<?php echo $_POST['specify-other']; ?>"></input>

                        <p class="form-headings">Cake Size:</p>
                        <select id="size" class="selection-field" name="cake-size">
                            <option></option>
                            <option value="6" <?php if ($_POST['cake-size'] == "6") echo 'selected="selected" '; ?>>6</option>
                            <option value="8" <?php if ($_POST['cake-size'] == "8") echo 'selected="selected" '; ?>>8</option>
                            <option value="10" <?php if ($_POST['cake-size'] == "10") echo 'selected="selected" '; ?>>10</option>
                            <option value="12" <?php if ($_POST['cake-size'] == "12") echo 'selected="selected" '; ?>>12</option>
                            <option value="cupcakes" <?php if ($_POST['cake-size'] == "cupcakes") echo 'selected="selected" '; ?>>Cupcakes</option>
                            <option value="single-number" <?php if ($_POST['cake-size'] == "single-number") echo 'selected="selected" '; ?>>Single number</option>
                            <option value="double-number" <?php if ($_POST['cake-size'] == "double-number") echo 'selected="selected" '; ?>>Double number</option>
                        </select>

                        <p id="cupcake-heading" class="form-headings">No Cupcakes:</p>
                        <select id="no-cupcakes" class="selection-field" name="no-cupcakes">
                            <option></option>
                            <option value="6" <?php if ($_POST['no-cupcakes'] == "6") echo 'selected="selected" '; ?>>6</option>
                            <option value="8" <?php if ($_POST['no-cupcakes'] == "8") echo 'selected="selected" '; ?>>8</option>
                            <option value="10" <?php if ($_POST['no-cupcakes'] == "10") echo 'selected="selected" '; ?>>10</option>
                            <option value="12" <?php if ($_POST['no-cupcakes'] == "12") echo 'selected="selected" '; ?>>12</option>
                        </select>

                        <p id="single-number-selection-heading" class="form-headings">Select Number</p>

                        <select id="single-number-option" class="selection-field single-number-options" name="single-number-option">
                            <option></option>
                            <option value="0" <?php if ($_POST['single-number-option'] == "0") echo 'selected="selected" '; ?>>0</option>
                            <option value="1" <?php if ($_POST['single-number-option'] == "1") echo 'selected="selected" '; ?>>1</option>
                            <option value="2" <?php if ($_POST['single-number-option'] == "2") echo 'selected="selected" '; ?>>2</option>
                            <option value="3" <?php if ($_POST['single-number-option'] == "3") echo 'selected="selected" '; ?>>3</option>
                            <option value="4" <?php if ($_POST['single-number-option'] == "4") echo 'selected="selected" '; ?>>4</option>
                            <option value="5" <?php if ($_POST['single-number-option'] == "5") echo 'selected="selected" '; ?>>5</option>
                            <option value="6" <?php if ($_POST['single-number-option'] == "6") echo 'selected="selected" '; ?>>6</option>
                            <option value="7" <?php if ($_POST['single-number-option'] == "7") echo 'selected="selected" '; ?>>7</option>
                            <option value="8" <?php if ($_POST['single-number-option'] == "8") echo 'selected="selected" '; ?>>8</option>
                            <option value="9" <?php if ($_POST['single-number-option'] == "9") echo 'selected="selected" '; ?>>9</option>
                        </select>

                        <p id="double-number-selection-heading" class="form-headings">Select Numbers:</p>

                        <select id="double-number-option-one" class="selection-field double-number-options" name="double-number-option-one">
                            <option></option>
                            <option value="0" <?php if ($_POST['double-number-option-one'] == "0") echo 'selected="selected" '; ?>>0</option>
                            <option value="1" <?php if ($_POST['double-number-option-one'] == "1") echo 'selected="selected" '; ?>>1</option>
                            <option value="2" <?php if ($_POST['double-number-option-one'] == "2") echo 'selected="selected" '; ?>>2</option>
                            <option value="3" <?php if ($_POST['double-number-option-one'] == "3") echo 'selected="selected" '; ?>>3</option>
                            <option value="4" <?php if ($_POST['double-number-option-one'] == "4") echo 'selected="selected" '; ?>>4</option>
                            <option value="5" <?php if ($_POST['double-number-option-one'] == "5") echo 'selected="selected" '; ?>>5</option>
                            <option value="6" <?php if ($_POST['double-number-option-one'] == "6") echo 'selected="selected" '; ?>>6</option>
                            <option value="7" <?php if ($_POST['double-number-option-one'] == "7") echo 'selected="selected" '; ?>>7</option>
                            <option value="8" <?php if ($_POST['double-number-option-one'] == "8") echo 'selected="selected" '; ?>>8</option>
                            <option value="9" <?php if ($_POST['double-number-option-one'] == "9") echo 'selected="selected" '; ?>>9</option>
                        </select>

                        <select id="double-number-option-two" class="selection-field double-number-options" name="double-number-option-two">
                            <option></option>
                            <option value="0" <?php if ($_POST['double-number-option-two'] == "0") echo 'selected="selected" '; ?>>0</option>
                            <option value="1" <?php if ($_POST['double-number-option-two'] == "1") echo 'selected="selected" '; ?>>1</option>
                            <option value="2" <?php if ($_POST['double-number-option-two'] == "2") echo 'selected="selected" '; ?>>2</option>
                            <option value="3" <?php if ($_POST['double-number-option-two'] == "3") echo 'selected="selected" '; ?>>3</option>
                            <option value="4" <?php if ($_POST['double-number-option-two'] == "4") echo 'selected="selected" '; ?>>4</option>
                            <option value="5" <?php if ($_POST['double-number-option-two'] == "5") echo 'selected="selected" '; ?>>5</option>
                            <option value="6" <?php if ($_POST['double-number-option-two'] == "6") echo 'selected="selected" '; ?>>6</option>
                            <option value="7" <?php if ($_POST['double-number-option-two'] == "7") echo 'selected="selected" '; ?>>7</option>
                            <option value="8" <?php if ($_POST['double-number-option-two'] == "8") echo 'selected="selected" '; ?>>8</option>
                            <option value="9" <?php if ($_POST['double-number-option-two'] == "9") echo 'selected="selected" '; ?>>9</option>
                        </select>


                        <p class="form-headings">Sponge Flavour:</p>
                        <select id="sponge" class="selection-field" name="cake-flavour">
                            <option></option>
                            <option value="Vanilla" <?php if ($_POST['cake-flavour'] == "Vanilla") echo 'selected="selected" '; ?>>Vanilla</option>
                            <option value="Chocolate" <?php if ($_POST['cake-flavour'] == "Chocolate") echo 'selected="selected" '; ?>>Chocolate</option>
                            <option value="Lemon" <?php if ($_POST['cake-flavour'] == "Lemon") echo 'selected="selected" '; ?>>Lemon</option>
                        </select>

                        <p class="form-headings"><span>*</span>Message:</p>
                        <textarea id="message" name="message" class="text-area input-fields" placeholder="Enter your message"><?php echo htmlspecialchars($_POST['message']);?></textarea>

                        <input id="submit-btn" class="btn" type="submit" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
            
            
        
        <footer>
            <div class="footer-content-container">
            
                <div class="footer-link-container">

                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/CakesByZoZo/?fref=ts" target="_blank"><img src="images/facebook-img.png">Facebook</a>
                            </li>
                            <li>
                                <a href="https://twitter.com/CakesByZozo" target="_blank"><img src="images/twitter-img.png">Twitter</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/cakesbyzozo/?hl=en" target="_blank"><img src="images/instagram-img.png">Instagram</a>
                            </li>
                            <li>
                                <a href="https://uk.pinterest.com/zoejackson311/?etslf=4138&eq=zoe" target="_blank"><img src="images/pinterest-img.png">Pinterest</a>
                            </li>
                        </ul>
                    </div> 
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Enquiries</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div> 

                </div>

                <p class="copyright">&copy Copyright Matt Palmer</p>

            </div>
        </footer>
        
        <script src="js/jquery-2.2.0.min.js"></script>

        <script src='js/jquery-ui.min.js'></script>
        <script src="js/javascript.js"></script>
    
    </body>
</html>