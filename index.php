<!DOCTYPE html>
<html lang="en">
<?php
include_once("connection.php"); ?>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Creative Minds | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/general.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/home.css" />
  <link rel="stylesheet" href="css/footer.css" />

</head>

<body>

<?php include("components/header.php"); ?>

  <main>
    <section class="hero-section">
      <div class="container">
        <div class="hero-wrapper">
          <div class="hero-left">
            <span class="hero-text-1">Foraging the youth’s Creativity</span>
            <span class="hero-text-2">Open the modern gateway to a brighter future and gain financial freedom with us at
              our enagaging and
              ting-tong campus.</span>
            <button class="enroll-btn">
              <a href="">Enroll Now</a>
            </button>
          </div>
          <div class="hero-right">
            <img style="object-fit: cover;" width="100%" height="100%" src="assets/5353146.jpg" alt="">
          </div>
        </div>
      </div>
      <span class="half-border">
      </span>
    </section>
    <section class="section-1">
      <div class="container">

        <span class="section1-heading">
          Apply Now!
        </span>
        <div class="form-container">
          <form method="post">
            <input name="first-name" placeholder="first-name" type="text">
            <input name="last-name" placeholder="last-name" type="text">
            <input name="age"  placeholder="age" type="number">
            <input name="email"  placeholder="email" type="email">

            <button name="submit" type="submit">Submit</button>
          </form>
        </div>


      </div>                                                                        
    <?php
    if(isset($_POST["submit"])) {
      $first_name = $_POST["first-name"];
      $last_name = $_POST["last-name"];
      $age = $_POST["age"];
      $email = $_POST["email"]; 

      $query = "INSERT INTO students(first_name, last_name, age, email) VALUES ('$first_name','$last_name','$age','$email')";

      $insert = mysqli_query($conn, $query) or die(mysqli_error($conn));  

      if($insert) { 
          echo "insert";
      } else {  
      echo "not";
      }

    }
    
    
    ?>
    </section>



  </main>

  <footer>
    <div class="footer">
      <div class="container">
        <div class="footer-wrapper">


        </div>
      </div>
    </div>
  </footer>

  <script src="js/script.js">

  </script>
</body>

</html>