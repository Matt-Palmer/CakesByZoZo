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
    
    <body>
        
        <?php
            $subject = 'New Cake Request';
            $name = $_POST['name'];
            $email = $_POST['email'];
            $request_date = $_POST['request-date'];
            $cake_size = $_POST['cake-size'];
            $cake_flavour = $_POST['cake-flavour'];
            $user_message = $_POST['message'];
        
            $message = 'Name: ' . $name . "\r\n" . 'Email: ' . $email . "\r\n" . 'Requested Date: ' . $request_date . "\r\n" . 'Flavour: ' . $cake_flavour . "\r\n" . 'Size: ' . $cake_size . "\r\n" . 'Message: ' . $user_message;
        
            $to = 'matt_palmer_20@hotmail.co.uk';
            /**$to = 'zoejackson311@hotmail.co.uk';**/
            
            mail($to, $subject, $message);
        ?>
        
        <header>
            <h1>Cakes By ZoZo</h1>
        </header>

        <nav class="headerNav">
            <a href="#" id="toggleMenu" class="toggle-menu">Menu</a>     
            <ul class="main-menu">
                <li> 
                    <a href="#" id="menu">Menu</a> 
                    <ul id="submenu" class="subMenu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Gallery.html">Gallery</a></li>
                        <li><a href="Enquiries.php">Enquiries</a></li>
                        <li><a href="About.html">About</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="main-nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#" id="main-gallery" style="padding-left: 40px;">Gallery<span style="margin-left: 30px;">&#9660</span></a>
                    <ul>
                        <li><a href="Weddings.html" id="gallery-choices">Weddings</a></li>
                        <li><a href="Birthdays.html" id="gallery-choices">Birthdays</a></li>
                        <li><a href="Celebrations.html" id="gallery-choices">Celebrations</a></li>
                        <li><a href="Cupcakes.html" id="gallery-choices">Cupcakes</a></li>
                    </ul>
                </li>
                <li><a href="Enquiries.php">Enquiries</a></li>
                <li><a href="About.html">About</a></li>
            </ul>
        </nav>

        <div id='fixed-menu' class="submenu-container">
            <ul>
                <li><a href='#' id='Back'>Back</a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="#" id="gallery">Gallery</a></li>
                <li><a href="Enquiries.php">Enquiries</a></li>
                <li><a href="About.html">About</a></li>
            </ul>
        </div>
            
        <div id='fixed-gallery-menu' class="gallery-submenu-container">
            <ul>
                <li><a href='#' id='Back-submenu'>Back</a></li>
                <li><a href="Weddings.html" id="gallery-choices">Weddings</a></li>
                <li><a href="Birthdays.html" id="gallery-choices">Birthdays</a></li>
                <li><a href="Celebrations.html" id="gallery-choices">Celebrations</a></li>
                <li><a href="Cupcakes.html" id="gallery-choices">Cupcakes</a></li>
            </ul>
        </div> 
            
           

        <div class="main">
            <div class="content-container">
                <div class="form-container">
                    <h3>Enquiries Form</h3>
                    
                    <form name="enquiry-form" method="post" onsubmit="return validateForm()">
                        <p class="form-headings">Name:</p>
                        <input type="text" id="required" name="name" class="input-fields" placeholder="Enter your full name">

                        <p class="form-headings">Email:</p>
                        <input type="email" id="required" name="email" class="input-fields">

                        <p class="form-headings">Requested Date:</p>
                        <input type="date" id="required" name="request-date" class="input-fields">

                        <p class="form-headings">Cake Size:</p>
                        <select id="required" class="selection-field" name="cake-size">
                            <option></option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                        </select>

                        <p class="form-headings">Cake Flavour:</p>
                        <select id="required" class="selection-field" name="cake-flavour">
                            <option></option>
                            <option value="Vanilla">Vanilla</option>
                            <option value="Chocolate">Chocolate</option>
                            <option value="Fruit">Fruit</option>
                            <option value="Strawberry">Strawberry</option>
                        </select>

                        <p class="form-headings">Message:</p>
                        <textarea id="required" name="message" class="text-area input-fields" placeholder="Enter your message"></textarea>

                        <input id="submit-btn" class="btn" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
            
            
        
        <footer>
            <p style="padding: 0; margin:0;">&copy Copyright Matt Palmer</p>
        </footer>
        
        <script src="js/jquery-2.2.0.min.js"></script>

        <script src='js/jquery-ui.min.js'></script>
        <script src="js/javascript.js"></script>
    
    </body>
</html>