<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserve</title>
  <link rel="shortcut icon" type="x-icon" href="logo-no-background.png"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="index.css">
</head>


<body class="home-link">
<div class="background">

  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <span class="menu-icon"><ion-icon name="menu-outline"></ion-icon></ion-icon></span>
    </label>
    <label class="logo">Logo</label>
    <ul>
      <li><a class="active" href="index.php">HOME</a></li>
      <li><a href="AboutUs1.html">ABOUT</a></li>
      <li><a href="Gallery1.html">GALLERY</a></li>
      <li><a href="#">CONTACT</a></li>
      <li><a href="login.php">LOG IN</a></li>

    </ul>
  </nav>
</div>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  
</body>
</html>
  
</head>
<body class="home-link">
  <div class="background">
    <div>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <span class="menu-icon"><ion-icon name="menu-outline"></ion-icon></ion-icon></span>
        </label>
        <img src="logo-no-background.png" alt="logo" class="image-style1">
       
        <ul>
          <li><a class="active" href="index.html">HOME</a></li>
          <li><a class="active" href="AboutUs.html">ABOUT</a></li>
          <li><a class="active" href="Gallery.html">GALLERY</a></li>
          <li><a href="#">CONTACT</a></li>
          <li><a href="login.html">LOG IN</a></li>
    
        </ul>
      </nav>
    </div>

    <div>
      <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="chuttersnap-aEnH4hJ_Mrs-unsplash.jpg" alt="picture1">
        </div>
        <div class="mySlides fade">
            <img src="photos-by-lanty-O38Id_cyV4M-unsplash.jpg" alt="picture2">
        </div>
        <div class="mySlides fade">
            <img src="thomas-william-K8V2NDNJDYo-unsplash.jpg" alt="picture3">
        </div>
      </div>
      
      <script src="script.js"></script>
      
      <script>
      let slideIndex = 0;
        showSlides();
        
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
        
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
        
            slideIndex++;
        
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
        
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Променете 5000 с времето в милисекунди между снимките
        }
        </script>
      
      </div>



  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <div>
    <h1> Our work </h1>
    <div class="container">
        <img src="chuttersnap-aEnH4hJ_Mrs-unsplash.jpg" alt="Herd of horses" class="common-image">
        <img src="ibrahim-boran-m8YjB0noWiY-unsplash.jpg" alt="Baby Elephant" class="common-image">
        <img src="jazmin-quaynor-18mUXUS8ksI-unsplash.jpg" alt="Koi Fish" class="common-image">
        <img src="jordan-arnold-Ul07QK2AR-0-unsplash (1).jpg" alt="Ibis Bird" class="common-image">
        <img src="matthew-essman-jTnipV64uLo-unsplash.jpg" alt="Lemur" class="common-image">
        <img src="rahel-daniel-L88iz147ZFY-unsplash.jpg" alt="Berber Monkeys" class="common-image">
    </div>
  
  <footer>Created with ❤️ by Mila and Vanesa^2 </footer>
  

  
</body>
</html>
