<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
    <style>
        .topnav {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            width: 100%;
            height: 70px;
            flex-shrink: 0;
            border-radius: 20px 20px 0px 0px;
            background: #9FD8D8;
        }
        .navbar-links {
            display: flex;
            align-items: center;
            padding: 20px;
            gap: 15px;
        }
        .navbar-link {
            margin-right: 0px;
            color: #FFF; 
            text-align: center;
            font-family: Roboto Mono;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            cursor: pointer;
            text-decoration: none;
        }
        .form-section {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            width: 400px;
            max-width: 90%;
        }

        .form-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-button {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .form-button:hover {
            background-color: #2980b9;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
    <script>
        function toggleForm(sectionId) {
            var formSection = document.getElementById(sectionId);
            if (formSection.style.display === "none") {
                formSection.style.display = "block";
            } else {
                formSection.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="topnav">
        <div class="navbar-links">
			 <a class="navbar-link" href="#">Home</a>
            <a class="navbar-link" href="javascript:void(0);" onclick="toggleForm('signin-form')">Sign In</a>
            <a class="navbar-link" href="javascript:void(0);" onclick="toggleForm('contact-form')">Contact Us</a>
        </div>
    </div>
	     	 
    <!-- Sign In Form -->
    <div id="signin-form" class="form-section" style="display: none;">
        <div class="form-container">
            <span class="close-button" onclick="toggleForm('signin-form')">&times;</span>
            <h2 class="form-title">Sign In</h2>
            <form class="form" action="signin.php" method="POST">
    <input type="text" class="form-input" name="username" placeholder="Username" required>
    <input type="password" class="form-input" name="password" placeholder="Password" required>
    <button type="submit" class="form-button">Sign In</button>
</form>
            <p>Don't have an account? <a href="javascript:void(0);" onclick="toggleForm('signup-form')">Sign Up</a></p>
        </div>
    </div>

    <!-- Contact Us Form -->
    <div id="contact-form" class="form-section" style="display: none;">
        <div class="form-container">
            <span class="close-button" onclick="toggleForm('contact-form')">&times;</span>
            <h2 class="form-title">Contact Us</h2>
           <form class="form" action="contact.php" method="POST">
    <input type="text" class="form-input" name="name" placeholder="Your Name" required>
    <input type="email" class="form-input" name="email" placeholder="Your Email" required>
    <textarea class="form-input" name="message" placeholder="Your Message" required></textarea>
    <button type="submit" class="form-button">Submit</button>
</form>
        </div>
    </div>

    <!-- Sign Up Form -->
    <div id="signup-form" class="form-section" style="display: none;">
        <div class="form-container">
            <span class="close-button" onclick="toggleForm('signup-form')">&times;</span>
            <h2 class="form-title">Sign Up</h2>
           <form class="form" action="sign-up.php" method="POST">
    <input type="text" class="form-input" name="user_name" placeholder="Username" required>
    <input type="email" class="form-input" name="email" placeholder="Email" required>
    <input type="password" class="form-input" name="password" placeholder="Password" required>
    <button type="submit" class="form-button">Sign Up</button>
</form>
            <p>Already have an account? <a href="javascript:void(0);" onclick="toggleForm('signin-form')">Sign In</a></p>
        </div>
    </div>
</body>
</html>
	 
 
<head>
<style>
    .logo {
        display: block;
        margin: 0 auto;
        margin-top: 10px; 
        width: 70px; 
        height: auto;
    }
</style>

<img src="logo1.png" alt="Logo" class="logo">

</head>
<!DOCTYPE html>
<html>
  <head>
    <title>Addis Address Finder</title>
    <style>
      .addis-title {
        color: #2BA962;
        text-align: center;
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 40px;
        font-style: normal;
        font-weight: 200;
        line-height: normal;
        display: flex;
        width: 700px;
        height: 85px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 6px;
      }

      .find-address {
        color: #5A5895;
        text-align: center;
        font-family: 'Roboto Mono', monospace;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        display: flex;
        width: 990px;
        height: 98.563px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        margin: 0 auto;
        margin-top: -70px;
      }
    </style>
  </head>
  <body>
    <div class="addis-title">ADDIS ADDRESS FINDER</div>
    <div class="find-address">Find any address effortlessly!</div>
  </body>
</html>

 
 <?php
include "connect.php";
//include "searchall.php";

?>

<html>
<head>
<style>
.institution {
  width: 1000px;
  height: 90px;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #138cc4;
  text-align: center;
  font-family: Roboto Mono;
  font-size: 30px;
  font-style: normal;
  font-weight: 300;
  line-height: normal;
  border-radius: 50%;
  border: 2px solid #138cc4;
  margin: 20px auto 10px;
}

.search {
  width: 100px;
  height: 40px;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #138cc4;
  text-align: center;
  font-family: Roboto Mono;
  font-size: 36px;
  font-style: normal;
  font-weight: 500;
  line-height: normal;
  border-radius: 50%;
  border: 2px solid #138cc4;
  margin: 10px auto 20px;

}

.button-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.input-field {
  width: 700px;
  height: 40px;
  padding: 10px;
  font-size: 24px;
  font-family: Roboto Mono;
  border-radius: 10px;
  border: 2px solid #138cc4;
  margin: 10px;
}

.button {
  background-color: #9FD8D8;
  color: white;
  border: none;
  padding:5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  font-family: Roboto Mono;
  font-weight: 700;
  margin: 10px;
  border-radius: 15px;
}
</style>
<script>
function searchAddress() {
  var institutionName = document.querySelector('.input-field').value;
 
  console.log(institutionName);
}
</script>
</head>
<body>
<div class="button-container">
<form action="searchkey-word.php" >
  <input type="text" class="input-field institution" placeholder=" Please enter institution name to search for" name="keyword" required>
<button type="submit" class="button search">Search</button>
</form>
</div>
</body>
</html>
<html>

<form action="subcity_admin.php">
  <details>
    <summary>Click here to search Addis Ababa city Addminstration</summary>
    <p>Please enter sub city name here:</p>
    <input type="text" id="subcity" name="subcity_name"required><br><br>
    <p>Please enter main or wereda number:</p>
    <input type="text" id="wereda" name="wereda"required><br><br>
  <input type="submit" value="Submit">
  </details><br><br>
</form>
<form action="suggest-newaddress.php">
  <details>
    <summary>Click here to suggest new address</summary>
    <p>Please enter institution name to suggest new address here:</p>
    <input type="text" id="institution_name" name="institution_name"required><br><br>
    <p>Please enter detail address here:</p>
    <input type="text" id="detail_address" name="new_detail_address"required><br><br>
    <input type="submit" value="Submit">
  </details>
</form>

</html>


<br><br>
<html>
<head>
  <style>
    .accordion {
      background-color: #f5f5f5;
      color: #333;
      cursor: pointer;
      padding: 16px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      transition: 0.4s;
    }

    .accordion-content {
      padding: 0 18px;
      display: none;
      overflow: hidden;
      background-color: white;
    }

    .accordion-active .accordion {
      background-color: #9FD8D8;
      color: white;
    }

    .accordion-active .accordion-content {
      display: block;
    }
  </style>
</head>
<body>
  <details>
    <summary class="accordion">About Us</summary>
    <div class="accordion-content">
      <p>We are your go-to solution for address searches in Addis Ababa! We understand the value of your time and aim to save you precious minutes by eliminating tedious searches and phone calls. With Addis Address Finder, easily locate the address you need, helping you navigate the city efficiently. We ensure an up-to-date and accurate address database, providing you with the most reliable information.</p>
    </div>
  </details>

  <script>
    function toggleAccordion() {
      this.parentElement.classList.toggle("accordion-active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    }

    var accordion = document.getElementsByClassName("accordion");
    for (var i = 0; i < accordion.length; i++) {
      accordion[i].addEventListener("click", toggleAccordion);
    }
  </script>
</body>
</html>
<br><br><br>


 
 <?php
 //include "searchkey-word.php";
 $mysqli->close();
 
 ?>
 


    <style>
        .footer {
            background-color: #9FD8D8;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 25px;
        }
    </style>
</head>
<body>
   
    <div class="footer">
        <p>Copyright © 2024 Addis Addres Finder. All Rights Reserved.</p>
    </div>
</body>
</html>

