<?php 
          session_start(); // Start a new session or resume the existing session

          $loggedIn = false; // Initialize $loggedIn to false
          
          if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
              $loggedIn = true;
          }

          ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project Ashrya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- ===============================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <style>
   

/* Search Box
#search-box {
  flex: 2;
  display: flex;
  justify-content: center;
 
}

#search-box input[type="text"] {
  width: 100px;
  padding: 10px;
  margin-right: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
} */

#search-box button {
  padding: 10px 20px;
  background: #50d8af;
  border: none;
  color: #fff;
  border-radius: 4px;
  cursor: pointer;
}

#search-box button:hover {
  background: #45c69d;
}

/* Search Results */
.listing {
  border: 1px solid #ddd;
  padding: 20px;
  margin: 20px 0;
  border-radius: 4px;
}

.listing h3 {
  margin: 0 0 10px 0;
}

.listing p {
  margin: 5px 0;
}

.listing img {
  margin-top: 10px;
  max-width: 100px;
  height: auto;
  border-radius: 4px;
}
/*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/
#intro {
  width: 100%;
  height: 60vh;
  position: relative;
  background: url("../img/intro-carousel/1.jpg") no-repeat;
  background-size: cover;
}

#intro .intro-content {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
}

#intro .intro-content .intro-slides {
  position: relative;
  width: 100%;
  height: 100%; /* Ensure the container occupies the full height */
  display: flex; /* Center the content */
  align-items: center; /* Center the content */
}


#intro .intro-content .intro-slides h2 {
  width: 100%;
  margin-top: 10px;
  color: #0c2e8a;
  margin-bottom: 30px;
  font-size: 64px;
  font-weight: 700;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

#intro .intro-content .intro-slides h2.active {
  opacity: 1;
}

#intro .intro-content h2 span {
  color: #50d8af;
  text-decoration: underline;
}

@media (max-width: 767px) {
  #intro .intro-content h2 {
    font-size: 34px;
  }
}

#intro .intro-content .btn-get-started, #intro .intro-content .btn-projects {
  font-family: "Raleway", sans-serif;
  font-size: 15px;
  font-weight: bold;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 32px;
  border-radius: 2px;
  transition: 0.5s;
  margin: 10px;
  color: #fff;
}

#intro .intro-content .btn-get-started {
  background: #0c2e8a;
  border: 2px solid #0c2e8a;
}

#intro .intro-content .btn-get-started:hover {
  background: none;
  color: #0c2e8a;
}

#intro .intro-content .btn-projects {
  background: #50d8af;
  border: 2px solid #50d8af;
}

#intro .intro-content .btn-projects:hover {
  background: none;
  color: #50d8af;
}

#intro #intro-carousel {
  z-index: 8;
}

#intro #intro-carousel::before {
  content: '';
  background-color: rgba(255, 255, 255, 0.7);
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 7;
}

#intro #intro-carousel .item {
  width: 100%;
  height: 60vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  -webkit-transition-property: opacity;
  transition-property: opacity;
}



/* General container styling */
.form-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
}

.form-wrapper {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Message styling */
.message-success, .message-error {
    display: none;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 5px;
    font-size: 14px;
}

.message-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.message-error {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

/* Input and textarea styling */
.input-field, .textarea-field {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

.input-field:focus, .textarea-field:focus {
    border-color: #5cb3fd;
    outline: none;
}

/* Button styling */
.submit-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-button:hover {
    background-color: #0056b3;
}


#header #logo .image {

height: 80px;
width: 80px;
background-image:url('img/logo.png');
background-size:contain;
background-repeat:no-repeat;
border-radius:50%;
}

@media (max-width: 767px) {

  #header #logo .image {
    height:40px;
    width:40px;
}


  .mapouter {
      position: relative;
      text-align: right;
      height: 0;
      overflow: hidden;
      padding-bottom: 50%; /* Adjust this value to change the aspect ratio */
      max-width: 100%; /* Adjust this value to set the maximum width */
      margin: 0 auto; /* Center the map horizontally */
    }
    .gmap_canvas {
      overflow: hidden;
      background: none !important;
      height: 100%;
      width: 100%;
      position: absolute;
      top: 0;
      left: 0;
    }
    .gmap_canvas iframe {
      width: 100%;
      height: 100%;
      border: 0
    }
    </style>
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:pokhrelsurya703@gmail.com">pokhrelsurya703@gmail.com</a>
        <i class="fa fa-phone"></i> 9867218297
      </div>
      <div class="social-links float-right">
        <a href="https://x.com/PanthiPava35832?t=tB-W58Hc8b1A6CETI9BBJw&s=09" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="https://www.facebook.com/surya.pokhrel.965" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="https://www.instagram.com/ravithakur.4531/" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="https://www.linkedin.com/in/%E0%A4%AA%E0%A4%B5%E0%A4%A8-%E0%A4%AA%E0%A4%A8%E0%A5%8D%E0%A4%A5%E0%A5%80-4b501227b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app " class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">आ<span>श्रय </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      
        <a href="">  <div class="image"></div></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
         
          
          
         <?php if (!$loggedIn): ?>
            <li><a href="login.php">Login</a></li>
	
	<?php endif; ?>
          
  <?php if ($loggedIn): ?>
            <li><a href="logout.php">Logout</a></li>

	<?php endif; ?>
          
          
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
      <br>
      <div id="search-box">
        <form action="" method="POST">
          <input type="text" id='search' name="query" placeholder="Search for rentals...">
          <button type="submit" onclick="showsearch()">Search</button>
        </form>
      </div>

     
    </div>
  </header><!-- #header -->
  <section id="search-results" >
    <div class="container">
      <?php
      include 'connect.php'; // Ensure this file establishes the database connection

      // Check if the form has been submitted and the query parameter exists
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['query']) && !empty(trim($_POST['query']))) {
          $query = $conn->real_escape_string(trim($_POST['query']));
          $sql = "SELECT * FROM Rent WHERE Rent_Description LIKE '%$query%' OR Renter_Address LIKE '%$query%' OR Rent_Type LIKE '%$query%'";

          $result = $conn->query($sql);

          if ($result === false) {
              echo "Error: " . $conn->error;
          } elseif ($result->num_rows > 0) {
              echo "<h2>Search Results</h2>";
              while ($row = $result->fetch_assoc()) {
                  echo "<div class='listing'>";
                  echo "<h3>" . htmlspecialchars($row['Rent_Type']) . "</h3>";
                  echo "<p>" . htmlspecialchars($row['Rent_Description']) . "</p>";
                  

                  echo "<p>Address: " . htmlspecialchars($row['Renter_Address']) . "</p>";

                  echo "<p>Price: $" . htmlspecialchars($row['Rent_price']) . "</p>";
                  echo '<a href="post_details.php?id=' . $row['Rent_id'] . '">';
                  if (!empty($row['Rent_images'])) {
                      echo "<p><img src='" . htmlspecialchars($row['Rent_images']) . "' alt='Rent Image' width='100'></p>";
                  }
                  echo '</a>';
                  echo "</div>";
              }
          } else {
              echo "<p>No results found</p>";
          }
      } else {
          
      }
      ?>
    </div>
    <script>

document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('#intro .intro-content .intro-slides h2');
  let currentSlide = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove('active');
      if (i === index) {
        slide.classList.add('active');
      }
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  // Initial display
  showSlide(currentSlide);

  // Change slide every 4 seconds
  setInterval(nextSlide, 4000);
});
      function showSearch() {

       

          let searchResults = document.getElementById('search-results');
          if (searchResults.style.display === 'none' || searchResults.style.display === '') {
              searchResults.style.display = 'block';
          } else {
              searchResults.style.display = 'none';
          }
      }
      </script>
    </section>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
  <div class="intro-content">
    <div class="intro-slides">
      <h2>अब कोठा खोजौ <span>निर्धारक्क</span><br> संग!</h2>
      <h2>सस्तो र राम्रो <span>कोठा</span><br> पाउनुस्!</h2>
      <h2>सुनिश्चित <span>भएको</span><br> कोठा भाडा दिनुस्!</h2>
    </div>
    <div>
      <a href="#search" class="btn-get-started scrollto">Rent</a>
      <a href="sale.php" class="btn-projects scrollto">Sale</a>
    </div>
  </div>
  <div id="intro-carousel" class="owl-carousel">
    <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
    <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
  </div>
</section>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/OIG2.jpeg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Discover your perfect rental home effortlessly with कोठा</h2>
            <h3> where finding the ideal space is just a click away!</h3>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> From rooms and flats to offices and more, we have a wide range of rental options to fit your needs and budget.</li>
              <li><i class="ion-android-checkmark-circle"></i> Get all the important details upfront – descriptions, prices, images, and addresses – so you can make informed decisions</li>
              <li><i class="ion-android-checkmark-circle"></i> Our search tool helps you find exactly what you're looking for with just a few clicks.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="services/room.php">Room Rentals</a></h4>
              <p class="description">Our room rentals are perfect for individuals looking for a comfortable and affordable living space. Each room is well-furnished and includes essential amenities such as a bed, wardrobe, and study desk.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="services/flat.php">Flat Rentals</a></h4>
              <p class="description">Our flat rentals offer complete living spaces suitable for singles, couples, and families. Each flat features multiple rooms, including bedrooms, a living room, a kitchen, and bathrooms.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="services/office.php">Office Space Rentals</a></h4>
              <p class="description">Our office space rentals cater to businesses of all sizes, from startups to established companies. We offer flexible office solutions, including private offices, shared coworking spaces, and virtual offices. </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="services/shutter.php">Shutter Rentals</a></h4>
              <p class="description">Our shop and shutter rentals provide excellent opportunities for retail businesses to thrive. Located in bustling commercial areas, these spaces are designed to attract high foot traffic and offer visibility for your products and services.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Clients</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->
   -->
    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Recent Posts</h2>
                <p></p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row no-gutters">
                <?php
                

                include 'connect.php'; // Include your database connection file

                $sql = "SELECT Rent_id, Rent_Type, Rent_Price, Renter_Address, Rent_images FROM Rent";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-3 col-md-4">';
                        echo '<div class="portfolio-item card wow fadeInUp">';
                        echo '<a href="post_details.php?id=' . $row['Rent_id'] . '">';
                        echo '<img src="' . $row['Rent_images'] . '" class="card-img-top" alt="">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row['Rent_Type'] . '</h5>';
                        echo '<p class="card-text">Price: $' . $row['Rent_Price'] . '</p>';
                        echo '<p class="card-text">Location: ' . $row['Renter_Address'] . '</p>';
                        echo '</div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No posts found.</p>';
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section><!-- #portfolio -->

    
    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team/surya.jpg" alt=""></div>
              <div class="details">
                <h4>Surya Pokhrel</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team/ravi1.jpg" alt=""></div>
              <div class="details">
                <h4>Ravi Thakur</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team/panthi.jpg" alt=""></div>
              <div class="details">
                <h4>Pawan Panthi</h4>
                <span>CTO & Founder</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>For the service we are here to help you for 24/7 </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Lalitpur-imadol,krishnamadir</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">9826110703</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:pokhrelsurya703@gamil.com">pokhrelsurya703@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <!-- <div id="google-map" data-latitude="27.66399079535582" data-longitude="- 85.34132924452409"></div> -->
      <div class="mapouter">
    <div class="gmap_canvas">
      <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=27.663858655157824%2C+85.34175434252688&t=&z=14&ie=UTF8&iwloc=&output=embed"></iframe>
    </div>
  </div>
      <div class="form-container">
    <div class="form-wrapper">
        <div class="message-success">Your message has been sent. Thank you!</div>
        <div class="message-error"></div>
        <form action="https://api.web3forms.com/submit" method="POST">

            <input type="hidden" name="access_key" value="4ea4f573-31da-4cbd-8965-1b045ddef6c8">
            Name:
            <input class="input-field" type="text" name="name" required>
            Email:
            <input class="input-field" type="email" name="email" required>
            FeedBack:
            <textarea class="textarea-field" name="message" required></textarea>
            <button class="submit-button" type="submit">Sent</button>

        </form>
    </div>
</div>

    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
