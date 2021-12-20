<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>University Website Design </title>
    <link rel="shortcut icon" href="Education,_Studying,_University,_Alumni_-_icon.png"
        type="Education,_Studying,_University,_Alumni_-_icon.png/x-icon">
<link rel="stylesheet" href="indstyle.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section class="sub-header">
<nav>
    <a href="index.php"><img src="logo.png"></a>
    <div class="nav-links" id="navLinks">
    <i class="fa fa-times" onclick="hideMenu()"></i>
    <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="course.php">COURSE</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT </a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
    <h1>Contact Us</h1>
</section>

<!------contact us ------->

<section class="location">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995401.7898678131!2d77.07045819732328!3d12.953398510910255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2z4Kas4KeH4KaZ4KeN4KaX4Ka-4Kay4KeB4Kaw4KeBLCDgppXgprDgp43gpqPgpr7gpp_gppUsIOCmreCmvuCmsOCmpA!5e0!3m2!1sbn!2sbd!4v1627475219422!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
</section>

<section class=".contact-us">

    <div class ="row">
        <div class ="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>  
                    <h5>XYZ Road,ABC Building</h5>
                    <p>Bangalore,Karnataka,IN</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                     <h5>01685218172</h5>
                     <p>Monday to Saturday,10AM to 6PM</p>
                 </span>
            </div>
            <div>
            <i class="fa fa-envelope-o"></i>
                 <span>
                     <h5>monaiburkhan@gmail.com</h5>
                     <p>Email us your query</p>
                 </span>
            </div>
            
        </div>
        <div class ="contact-col">
        <form action="form-handler.php"method="post">
                <input type="text" name="name" placeholder="Enter your name"required>
                <input type="email"name="email"placeholder="Enter email address"required>
                <input type="text"name="subject"placeholder="Enter your subject"required>
                <textarea rows="8"name="message" placeholder="Message"required ></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>







<!-------Footer-------->

<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    pellentesque aliquet turpis nulla,eleifend faucibus est,<br>
    sollicitudin ut.Maecenas ut venenatis ex,et dapibus purus.</p>
    <div class ="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>
</section>


<!--------JavaScript for Toggle Menu--------->
<script>
var navLinks=document.getElementById("navLinks");
function showMenu(){
navLinks.style.right="0";
}
function hideMenu(){
navLinks.style.right="-200px";
}
</script>
</body>
</html> 