<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="./homepage.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->

   
 </head>

<body>
    <!--VIDEO SECTION  -->
    <div class="container" data-aos="zoom-out" data-aos-duration="1500" data-aos-once="true">
        <video autoplay loop muted plays-inline class="video">
            <source src="/img-vid/homevid.video.mp4"> 
        </video>
    </div>

    <!-- LOGO -->
 <nav>

 <div class="con main-nav">
      <a href="index.php" class="company-logo">
         <img src="\img-vid\logo.jpeg" alt="image not updated">
      </a>
      
      <!-- NAVIGATION SECTION -->
      <div class="navlink">
           <ul class="flex ul">
               <li><a href="editaboutus.php" class="hover-links">About us</a></li>
               <li><a href="Manufaturing.php"class="hover-links">Manufacturing</a></li>
               <li><a href="ourproduct.php"class="hover-links">Our products</a></li>
               <!-- <li><a href="#"class="hover-links">Contact us</a></li> -->
                <li><a href="user/"class="hover-links">Registration / Login </a></li>
               <li><a href="user/"class="hover-links">Booking</a></li>
              
         </ul>
 
            <!--HAMBURGER ICON  -->
          <div class="nav-toggle" onclick="toggleMenu()">
             <i class="fa-solid fa-bars"></i>
          </div>
     </div>
 </div>
 </nav>

    
  
    <!-- Our Product Start -->
 <div class="our-product">
  <h1>OUR PRODUCTS</h1>
    <div class="card-list">
        <a href="ourproduct.php#sugstp" class="card-item">
            <img src="\img-vid\sugar.jpg" alt="Card Image" height="350px">
            <span class="sug">Sugar</span>
            <h3> Cane sugar is a category of sugar that is made exclusively from sugar cane, as opposed to sugar products that are made from sugar beets.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div> 
        </a>
        <a href="ourproduct.php#biostp" class="card-item">
            <img src="\img-vid\power.jpg" alt="Card Image" height="350px">
            <span class="bio">Bio flue</span>
            <h3>sugarcane ethanol is an alcohol-based fuel produced by the fermentation of sugarcane juice, molasses, and both senescent and nonsenescent tissues</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="ourproduct.php#renewstp" class="card-item">
            <img src="\img-vid\reuse.jpg" alt="Card Image" height="350px">
            <span class="renew">Renewable</span>
            <h3>Generating energy that produces no greenhouse gas emissions from fossil fuels and reduces some types of air pollution.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
    
    <div class="card-list">
        <a href="ourproduct.php#bagstp" class="card-item">
            <img src="\img-vid\Sugarcane_bagasse.jpg" alt="Card Image" height="350px">
            <span class="sug">bagasse</span>
            <h3>Bagasse is used to generate steam required to operate sugar-mill .Mill producing per tonne of cane, about 35 kWh & 450 kg of exhaust steam. </h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div> 
        </a>
        <a href="ourproduct.php#orgstp" class="card-item">
            <img src="\img-vid\organic.jpg" alt="Card Image" height="350px">
            <span class="bio">Organic fertilizer</span>
            <h3>Organic fertilizer is a fertilizer that is derived from organic sources, including cattle manures, poultry droppings and domestic sewage.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="ourproduct.php#brownstp" class="card-item">
            <img src="\img-vid\brown.jpg" alt="Card Image" height="350px">
            <span class="renew">Brown sugar</span>
            <h3>Brown sugar can be made by adding molasses syrup to boiling sugar crystals that result from the sugar-refining process.</h3>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
    </div>
 <div class="manufact" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
    <h1 > Manufacturing Process </h1>
  </div>
 <div class="htmlcards" data-aos="fade-up" data-aos-duration="1800" data-aos-once="true">

    <div class="slider owl-carousel">
        <!-- First slider card -->
        <!-- Cane Yard -->
       <div class="card">
                <div class="img">
        <img src="\img-vid\caneyard.png" alt=""></div>
        <div class="content">
                  <div class="title">
        Cane Yard</div>
        <div class="sub-title">
        Sugar Mill</div>
        <p>
      Cane yard operator is responsible for offloading of canes from cane tranports,and organized feeding of canes into the cane conveyors for efficient cane preparation.....</p> 
        <div class="btn">
          <button class="bot"><a href="Manufaturing.php#manustp" class="btn">Read more</a></button>
                  </div>
        </div>
        </div>
    
    <!-- Second Slider card -->
    <!-- Milling House -->
    
    <div class="card">
        <div class="img">
    <img src="img-vid/millhouse.png" alt=""></div>
    <div class="content">
          <div class="title">
    Miling area</div>
    <div class="sub-title">
    Sugar Mill</div>
    <p> Mill house is the cane crushing unit which consists of cane carrier,cane cutter having cutting knives,milling tandem,bagasse carrier and conveyor.....
    </p>
    <div class="btn">
    <button class="bot"><a href="mill.php#manustp" class="btn">Read more</a></button>
          </div>
    </div>
    </div>
     <!-- Third slider card -->
    <!-- Boiler House -->
    <div class="card">
        <div class="img">
    <img src="\img-vid\boilerhouse.png" alt=""></div>
    <div class="content">
          <div class="title">
    Boiling house</div>
    <div class="sub-title">
    Sugar Mill</div>
    <p>The function of boiler is to generate steam at desired pressure and tempreture by transferring heat producting by burning of fuel from water to change into steam...
    .</p>
    <div class="btn">
            <button class="bot"><a href="boiler.php#manustp" class="btn">Read more</a></button>
          </div>
    </div>
    </div>
    <!-- Fourth Slider Card -->
    <!-- Clarification Section -->
    <div class="card">
        <div class="img">
    <img src="\img-vid\Clarificaion.jpg" alt=""></div>
    <div class="content">
          <div class="title">
    Clarification Section</div>
    <div class="sub-title">
    Sugar Mill</div>
    <p>The clarification section is to remove as many nonsugar components as possible,improve the purity of the juice, and reduce its viscosity and color values....
   .</p>
    <div class="btn">
    <button class="bot"><a href="classification.php#manustp" class="btn">Read more</a></button>
          </div>
    </div>
    </div>
     <!-- Fifth Slider Card -->
    <!-- Curing House -->
    <div class="card">
        <div class="img">
    <img src="\img-vid\curinghouse.jpg" alt=""></div>
    <div class="content">
          <div class="title">
    Curing House</div>
    <div class="sub-title">
    Sugar Mill</div>
    <p>Curing is a term in polymer chemistry. it is the addition to meats of some combination of salt,sugar,nitrite and/or nitrate for the purposes of preservation,flavor and color....
   </p>
    <div class="btn">
    <button class="bot"><a href="curing.php#manustp" class="btn">Read more</a></button>
          </div>
    </div>
    </div>
    <!-- Sisth Slider Crad -->
    <!-- Crystallization -->
    <div class="card">
            <div class="img">
    <img src="\img-vid\crystalization.jpeg" alt=""></div>
    <div class="content">
              <div class="title">
                Crystallization </div>
    <div class="sub-title">
    Sugar Mill</div>
    <p>In crystallization a vaccum boiling pan.Thick juice or syrup is fed to the vaccum pans and evaporated until saturated.Seed crystals are added during a strike to grow sugar crystals...
   .</p>
    <div class="btn">
      <button class="bot"><a href="crystalization.php#manustp" class="btn">Read more</a></button>
              </div>
              </div>
    </div>
    </div>
    <script>
          $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s;
            autoplayHoverPause: true,
          });
        </script>

  </div>

<!-- Footer section -->

 <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Navalsingh Sugar factory<span>Navalnagar</span></h3>

        <p class="footer-links">
          <a href="index.php" class="link-1">Home</a>
          
          <a href="editaboutus.php">About us</a>
        
          <a href="Manufaturing.php">Manufacturing</a>
        
          <a href="ourproduct.php">Our Product</a>
          
        
          <a href="user/">Booking</a>
          
        </p>

        
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Navalnagar(Jhiri),Burhanpur,MP</span></p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+091000000087</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">nssk.mp@gamil.com</a></p>
        </div> 

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
        Navalsingh Sahakari Shakkar Karkhana Maryadit is sugar manufacturing company establishes in 1981 by Thakur Shivkumar Singh
        </p>
        <p class="footer-company-name">©2024 Navalsingh sugar mill. All Rights Reserved.</p>
      

      </div>

    </footer>

 


 <!-- script for hamburger icon -->
  <script>
    function toggleMenu() {
        var navMenu = document.querySelector('.navlink ul');
        navMenu.classList.toggle('active');
    }
  </script>

</body>

</html>
