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
        <h1>Our Certificate & Online Programs For 2021</h1>
    </section>
    <!-------blog page content-------->

    <section class="blog-content">
        <div class ="row">
            <div class ="blog-left">
                <img src="Certificate.jpg">
                <h2>Our Certificate & Online Programs For 2021</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                pellentesque aliquet turpis nulla,eleifend faucibus eas
                solicitudin ut.Maecenas ut venenatis ex,et dapibus purus
                Donec sit amet nisl non justo malesuada fermentum.
                Donec eget felis dolor.Suspendisse condimentum vestibulum
                ex ac cursus.</p>

                
                <div class="comment-box">
                    <h3>Leave a comment</h3>
                    <from class="comment-from">
                        <input type="text"placeholder="Enter Name">
                        <input type="email"placeholder="Enter Email">
                        <textarea row="5" placeholder="Your comment"></textarea>
                        <button type="submit"class="hero-btn red-btn">POST COMMENT</button>
                    </from>
                </div>



            </div>
            <div class ="blog-right">
            <h3>Post Categories</h3>
            <div>
                <span>Business Analytics</span>
                <span>21</span>
            </div>

            <div>
                <span>Data Science</span>
                <span>28</span>
            </div>

            <div>
                <span>Machine Learning</span>
                <span>15</span>
            </div>

            <div>
                <span>Computer Science</span>
                <span>34</span>
            </div>

            <div>
                <span>AutoCAD</span>
                <span>42</span>
            </div>

            <div>
                <span>Journalism</span>
                <span>22</span>
            </div>
            <div>
                <span>Commerce</span>
                <span>30</span>
            </div>

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