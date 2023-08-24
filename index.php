<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | HEDSO</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Include custom CSS -->
  <style>
    body {
      background-color: #191919;
      color: #fff;
    }
    
    .navbar {
    background-color: #161b24;
}

.nav-link {
    color: #fff !important;
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
    
    .footer {
      background-color: #161b24;
      color: #fff;
      margin-top: 30px;
      padding: 20px 0;
    }
    
    .footer a {
      color: #4CAF50;
    }
    
    .footer a:hover {
      color: #fff;
    }
    
    .contact-section {
      background-color: #161b24;
      color: #fff;
      margin-top: 30px;
      padding: 40px 0;
    }
    
    .contact-form .form-group label {
      color: #4CAF50;
    }
    
    .contact-form .form-group input,
    .contact-form .form-group textarea {
      background-color: #161b24;
      border-color: #4CAF50;
      color: #fff;
    }
    
    .contact-form .form-group input:focus,
    .contact-form .form-group textarea:focus {
      background-color: #191919;
      border-color: #4CAF50;
      color: #fff;
    }
    
    .contact-form .btn-primary {
      background-color: #4CAF50;
      border-color: #4CAF50;
    }
    
    .contact-form .btn-primary:hover {
      background-color: #fff;
      color: #4CAF50;
    }
    
    .newsletter-form .form-group input {
      background-color: #161b24;
      border-color: #4CAF50;
      color: #fff;
    }
    
    .newsletter-form .form-group input:focus {
      background-color: #191919;
      border-color: #4CAF50;
      color: #fff;
    }
    
    .newsletter-form .btn-primary {
      background-color: #4CAF50;
      border-color: #4CAF50;
    }
    
    .newsletter-form .btn-primary:hover {
      background-color: #fff;
      color: #4CAF50;
    }
  </style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HEDSO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="./index.html">Home</a>
      </li>
      <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="aboutDropdown">
          <a class="dropdown-item" href="./about.html">OverView</a>
          <a class="dropdown-item" href="./board.html">Meet The Team</a>
        </div>
      </li>
      <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
        <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Programs
        </a>
        <div class="dropdown-menu dropdown-menu-side" aria-labelledby="programsDropdown">
          <div class="dropdown-submenu" onmouseover="showSubmenu(this)" onmouseout="hideSubmenu(this)">
            <a class="dropdown-item dropdown-toggle" href="./integ.html" role="button">
               Integrated Health and Well-Being
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./gbv.html">GBV PREVENTION</a>
              <a class="dropdown-item" href="./srhr.html">AYSRH</a>
              <a class="dropdown-item" href="./wash.html">WASH</a>
              <a class="dropdown-item" href="./hiv.html">HIV PREVENTION</a>
            </div>
          </div>
          <div class="dropdown-submenu">
            <a class="dropdown-item " href="./agw.html" role="button">
              AGYW, PWDs and Youths Economic Empowerment
            </a>
          </div>
          <div class="dropdown-submenu" onmouseover="showSubmenu(this)" onmouseout="hideSubmenu(this)">
            <a class="dropdown-item dropdown-toggle" href="./climateres.html" role="button">
              Climate Change Resilience
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="./waste.html">WASTE MANAGEMENT</a>
              <a class="dropdown-item" href="./tree.html">ECOSYSTEM RESTORATION</a>
              <a class="dropdown-item" href="./disaster.html">DISASTER RISK REDUCTION</a>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./approach.html">Our Approach</a>
      </li>
      <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
        <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
          <a class="dropdown-item" href="#program2">Newsletters</a>
          <a class="dropdown-item" href="#program4">Our Gallery</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./donate.html">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./volunteer.html">Volunteer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contact.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<?php

if(!empty($_POST["send"])){

  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Message= $_POST['Message'];
  $toEmail = "collinsyogoh@gmail.com";

  $mailHeaders = "Name: " . $Name .
  "\r\n Email: " . $Email .
  "\r\n Message: " . $Message . "\r\n";

  if(mail($toEmail, $Name, $mailHeaders)){
    $message = "Message Sent Successfully Hedso Will Reply Shortly.";
  }


}

?>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <h2 class="text-center mb-4">Contact Us</h2>
          <form class="contact-form" method="POST" name="emailContact">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="Name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="Email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="Message" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-primary btn-block">Submit</button>
          </form>
        </div>
        <?php
        if(!empty($message)){
        }
        ?>
        <div class="success">
          <strong> <?php echo $message; ?> </strong>
        </div>
        <?php ?>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h3>HEDSO ORGANIZATION</h3>
          <p>Tom Mboya Estate, Kisumu, Kenya</p>
          <p>Phone: +254773222909 | +254768546640</p>
          <p>Email: info@hedso.org</p>
        </div>
        <div class="col-lg-4">
          <h3>Quick Links</h3>
          <ul class="list-unstyled">
            <li><a href="./index.html">The Issue</a></li>
            <li><a href="./approach.html">Our Approach</a></li>
            <li><a href="./about.html">About Us</a></li>
            <li><a href="./contact.html">Contact Us</a></li>
            <li><a href="./donate.html">Donate</a></li>
            <li><a href="./volunteer.html">Volunteer</a></li>
          </ul>
        </div>
        <div class="col-lg-4">
          <h3>Connect with Us</h3>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100082997605803" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/HealthandEcono1" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.linkedin.com/company/health-and-economic-development-strategy-organization-hedso/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="small">&copy; 2023 Hedso Organization. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    function showDropdown(element) {
      var dropdownMenu = element.querySelector('.dropdown-menu');
      if (dropdownMenu) {
        dropdownMenu.style.display = 'block';
      }
    }
  
    function hideDropdown(element) {
      var dropdownMenu = element.querySelector('.dropdown-menu');
      if (dropdownMenu) {
        dropdownMenu.style.display = 'none';
      }
    }
  
    function showSubmenu(element) {
      var submenu = element.querySelector('.dropdown-menu');
      if (submenu) {
        submenu.style.display = 'block';
      }
    }
  
    function hideSubmenu(element) {
      var submenu = element.querySelector('.dropdown-menu');
      if (submenu) {
        submenu.style.display = 'none';
      }
    }
</script>
  <script src="scripts.js"></script>
</body>
</html>

