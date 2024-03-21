<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MotorEmpire</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <!--SWIPER JS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!--FONT AWESOME LINK-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!--STYLESHEET I KTIJ PAGE-->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <!--HEADER/NAVBAR start-->
    <header>
      
      <div id="MenuBtn" class="fas fa-bars"></div>

      <a href="#" class="logo"><span> <img src="images/logo2.png" width="100px " height="50px" > </span></a>
      <nav class="navbar">
        <a href="#Home">Home</a>
        <a href="vehicles.html" target="blank">Vehicles</a>
        <a href="featured.html" target="_blank">Featured</a>
        <a href="#Services">Services</a>
        <a href="#Review">Review</a>
        <a href="#Contact">Contact</a>
        <a href="price.html" target="blank">PriceRange</a>
      </nav>

      <!-- Login Button -->

<div id="LoginBtn">
  <button id="loginButton" class="btn">Login</button>
  <i class="fas fa-user"></i>
</div>
    </header>


<!-- Login Form Container -->

<div id="id01" class="loginFormContainer">
  <form action="" method="post">
      <div>

          <span class="close" title="Close Modal">&times;</span>
    
    </div>

        <h3>User Login</h3>
        <input type="email" placeholder="Email" required class="box" />
        <input type="password" placeholder="Password" required class="box" />
        <p>Forgot your Password? <a href="#">Click Here</a></p>
        <button class="btn">Submit</button>
        <p>or Login With</p>
        <div class="buttons">
          <a href="http://www.gmail.com" target="_blank" class="btn">Google</a>
          <a href="http://www.facebook.com" target="_blank" class="btn">Facebook</a>
        </div>
      </form>
    </div>  


    <!--HOME SECTION startpoint-->
    <!--HOME SECTION startpoint-->
    <!--HOME SECTION-->

<!--HOME SECTION-->
<section id="Home" class="home">
  <div class="home-background">
      <img src="images/bgfr.png" alt="Featured Car" class="hero-image"> <!-- Replace with your hero image -->
  </div>
  <div class="home-content">
    <h1 data-speed="-2" class="homeParallaxEffect">Motor Empire   </h1>

    </div>
  <div>
    <a href="https://www.bmwusa.com/special-offers.html" class="btn">Explore Vehicles</a>
  </div>
</section>




    <!--ICONS CONTAINER START (kishim mujt me bo edhe me bootstrap amo mir osht qishtu)-->
    <section class="iconsContainer">
      <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
          <h3>200+</h3>
          <p>Branches</p>
        </div>
      </div>
      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
          <h3>4370+</h3>
          <p>Cars Sold</p>
        </div>
      </div>
      <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
          <h3>3200+</h3>
          <p>Happy Customers</p>
        </div>
      </div>
      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
          <h3>1000+</h3>
          <p>New Launches</p>
        </div>
      </div>
    </section>


    <!--VEHICLE SECTION START-->
    <!-- MA POSHT OSHT KODI PER KIT PJES
<section id="Vehicle" class="vehicle">
    <h1 class="heading">Popular Vehicles</h1>
    <div class="swiper VehiclesSlider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="images/bmwzez.jpg" alt="">
                <div class="content">
                    <h3>NewModels</h3>
                    <div class="price"><span>Price: </span>
                    $100,000</div>
                    <p>
                        <span class="fas fa-circle"></span>2022
                        <span class="fas fa-circle"></span>Automatic
                        <span class="fas fa-circle"></span>Electric
                        <span class="fas fa-circle"></span>200mph
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
-->


    <!--SLIDESHW I FOTOVE -->
    <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/bmwzez.jpg" style="width: 100%" />
        <div class="text">BMW M4 CSL</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/bmwred.jpg" style="width: 100%" />
        <div class="text">BMW M4 Coupe 50 Jahre</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/bmwgrey.jpg" style="width: 100%" />
        <div class="text">BMW M4 Edition 50 Jahre</div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br />
    <div style="text-align: center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <!--VEHICLE SECTION START-->
    <section id="Vehicle" class="vehicle">
      <h1 class="heading">Popular Vehicles</h1>
      <div class="swiper VehiclesSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="images/vehiclesbmw3.webp" alt="Fotoja1" />
            <div class="content">
              <h3>New Models</h3>
              <div class="price"><span>Price:</span> $100,000</div>
              <p>
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>Automatic
                <span class="fas fa-circle"></span>Electric
                <span class="fas fa-circle"></span>180mph
              </p>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/vehiclessbmw.webp" alt="Fotoja2" />
            <div class="content">
              <h3>New Models</h3>
              <div class="price"><span>Price:</span> $120,000</div>
              <p>
                <span class="fas fa-circle"></span>2022
                <span class="fas fa-circle"></span>Automatic
                <span class="fas fa-circle"></span>Electric
                <span class="fas fa-circle"></span>250mph
              </p>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/vehiclesbmw1.avif" alt="fotoja3" />
            <div class="content">
              <h3>New Models</h3>
              <div class="price"><span>Price:</span> $90,000</div>
              <p>
                <span class="fas fa-circle"></span>2021
                <span class="fas fa-circle"></span>Automatic
                <span class="fas fa-circle"></span>Petrol
                <span class="fas fa-circle"></span>150mph
              </p>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/vehiclesbmw2.webp" alt="fotoja4" />
            <div class="content">
              <h3>New Models</h3>
              <div class="price"><span>Price:</span> $140,000</div>
              <p>
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>Automatic
                <span class="fas fa-circle"></span>Electric
                <span class="fas fa-circle"></span>170mph
              </p>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/vehiclesbmw.png" alt="Fotoja5" />
            <div class="content">
              <h3>New Models</h3>
              <div class="price"><span>Price:</span> $150,000</div>
              <p>
                <span class="fas fa-circle"></span>2022
                <span class="fas fa-circle"></span>Automatic
                <span class="fas fa-circle"></span>Electric
                <span class="fas fa-circle"></span>200mph
              </p>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/vehiclesbmw4.jpg" alt="fotoja6" />
            <div class="content">
              <h3>New Models</h3>
              <div class="price"><span>Price:</span>$160,000</div>
              <p>
                <span class="fas fa-circle"></span>2023
                <span class="fas fa-circle"></span>Automatic
                <span class="fas fa-circle"></span>Electric
                <span class="fas fa-circle"></span>240mph
              </p>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <!--per do circles posht kerreve PER ME I KALLXU SPECIFIKAT -->
      </div>
    </section>

    
    <!--Featured Section Start-->
    <section id="Feature" class="feature">
      <h1 class="heading">Featured Cars</h1>
      <div class="swiper FeatureSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="images/featured1bmw.png" alt="" />
            <div class="content">
              <h3>BMW M4 Coupe</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$85,000</div>
              <a href="https://www.bmwusa.com/vehicles/m-models/m4-coupe/overview.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="images/featuredbmwreplace.avif" alt="" />
            <div class="content">
              <h3>BMW i8</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$140,000</div>
              <a href="https://www.bmw.co.uk/en/topics/discover/bmw-i8.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="images/featured6.png" alt="" />
            <div class="content">
              <h3>BMW 3 Series Sedan M Automobiles</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$60,900</div>
              <a href="https://www.bmw.co.th/en/all-models/m-series/m3-sedan/2023/bmw-3-series-sedan-m-automobiles-overview.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="images/featuredx6comp.png" alt="" />
            <div class="content">
              <h3>BMW X6 M Competition</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$128,000</div>
              <a href="https://www.bmwusa.com/vehicles/m-models/x6-m/sports-activity-coupe/overview.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="images/featuredbmwww.png" alt="" />
            <div class="content">
              <h3>BMW X2 M35i xDrive</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$60,000</div>
              <a href="https://www.bmw-m.com/en/all-models/overview-m-and-m-performance/bmw-x2-m35i-xdrive/2023/bmw-x2-m35i-xdrive.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>
          <div class="swiper-slide box">
            <img src="images/featured4.png" alt="" />
            <div class="content">
              <h3>BMW 5 Series Sedan</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$85,000</div>
              <a href="https://www.bmwusa.com/vehicles/5-series/sedan/overview.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/featured5.png" alt="" />
            <div class="content">
              <h3>BMW i7 M70</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$169,495</div>
              <a href="https://www.bmwusa.com/vehicles/all-electric/i7/sedan/electric-bmw-m.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/featuredm3.webp" alt="" />
            <div class="content">
              <h3>BMW M3 Competition</h3>
              <div class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">$76,995</div>
              <a href="https://www.bmwusa.com/vehicles/m-models/m3-sedan/overview.html" target="_blank" class="btn">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Services Section Start-->
    <section id="Services" class="services">
      <h1 class="heading">Our Services</h1>
      <div class="boxContainer">
        <div class="box">
          <i class="fas fa-car"></i>
          <h3>Car Selling</h3>
          <p>
            Discover a world of automotive sophistication as you peruse our
            extensive inventory, featuring an array of makes and models that
            epitomize cutting-edge engineering, design, and performance. From
            sleek sedans to robust SUVs and luxurious sports cars, our diverse
            range caters to every taste and preference.
          </p>
          <button class="btn">Read More</button>
        </div>
        <div class="box">
          <i class="fas fa-tools"></i>
          <h3>Parts Repair</h3>
          <p>Whether your car requires routine maintenance, diagnostic services, or complex repairs, we offer a comprehensive range of solutions tailored to address each issue with precision. From engine diagnostics and brake repairs to suspension tuning and electrical system troubleshooting, our technicians are adept at handling a diverse array of automotive challenges.</p>
          <button class="btn">Read More</button>
      </div>
      <div class="box">
          <i class="fas fa-car-crash"></i>
          <h3>Car Insurance</h3>
          <p>As part of our commitment to enhancing your insurance experience, we offer a range of additional benefits and discounts. These may include features such as roadside assistance, rental car coverage, and discounts for safe driving habits. Our goal is to add value to your policy while ensuring it remains tailored to your specific needs.</p>
          <button class="btn">Read More</button>
      </div>

        <div class="box">
          <i class="fas fa-car-battery"></i>
          <h3>Battery Replacement</h3>
          <p>
            Recognizing the importance of quality and reliability, we
            exclusively offer premium replacement batteries from trusted
            manufacturers. Our selection ensures that your new battery meets or
            exceeds the specifications of your vehicle, providing consistent and
            dependable power for your daily journeys.
          </p>
          <button class="btn">Read More</button>
        </div>

        <div class="box">
          <i class="fas fa-gas-pump"></i>
          <h3>Oil Change</h3>
          <p>
            Adhering to manufacturer-recommended service intervals is a
            cornerstone of our oil change services. Our technicians are
            well-versed in the specifications of various vehicle makes and
            models, ensuring that your oil change is performed in accordance
            with the guidelines set forth by your vehicle's manufacturer.
          </p>
          <button class="btn">Read More</button>
        </div>
        <div class="box">
          <i class="fas fa-headset"></i>
          <h3>24/7 Support</h3>
          <p>
            Our 24/7 support is not limited to problem resolution. We are also
            here to provide guidance and information about our products and
            services. Whether you need assistance navigating features,
            understanding policies, or exploring additional offerings, our team
            is dedicated to ensuring you have the information you need.
          </p>
          <button class="btn">Read More</button>
        </div>
      </div>
    </section>

    <!--News Letter Section Start-->
    <section class="newsletter">
      <h3>Subscribe to Our NewsLetter</h3>
      <p>
        Don't miss out on the exciting updates and offers we have in store for
        you. Subscribe to our newsletter today and embark on a journey of
        discovery and connection with MotorEmpire
      </p>
      <form action="">
        <input type="email" required placeholder="Enter Your Email..." />
        <input type="submit" value="Subscribe" />
      </form>
    </section>

    <!--REVIEW SECTION START-->
    <section id="Review" class="review">
      <h1 class="heading">Client's Review</h1>
      <div class="swiper ReviewSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="images/user1.jpg" alt="" />
            <div class="content">
              <p>
                Exemplifies a strong commitment to teamwork, fostering a
                collaborative environment that enhances overall productivity.
              </p>
              <h3>MotorEmpire</h3>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/user2.jpg" alt="" />
            <div class="content">
              <p>
                Highly organized and detail-oriented, ensuring accuracy and
                precision in all tasks undertaken
              </p>
              <h3>MotorEmpire</h3>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/user3.webp" alt="" />
            <div class="content">
              <p>
                A highly motivated team who consistently deliver high-quality
                results on time.
              </p>
              <h3>MotorEmpire</h3>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/user4.webp" alt="" />
            <div class="content">
              <p>
                Demonstrates strong leadership qualities and effectively
                collaborates with colleagues to achieve common goals.
              </p>
              <h3>MotorEmpire</h3>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/user5.jpg" alt="" />
            <div class="content">
              <p>
                Demonstrates a strong sense of initiative and takes ownership of
                tasks, contributing to the overall success of the team
              </p>
              <h3>MotorEmpire</h3>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="images/user6.jpg" alt="" />
            <div class="content">
              <p>
                Reliable and trustworthy, with a proven track record of meeting
                and exceeding expectations.
              </p>
              <h3>MotorEmpire</h3>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--CONTACT FORM START-->
    <section id="Contact" class="contact">
      <h1 class="heading">Contact us</h1>
      <div class="row">
        <iframe title="Anfahrt Konzernzentrale. " width="100%" height="500px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d332.57204895274396!2d11.561623099999997!3d48.17624500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e77652a744cd9%3A0x1d187ce191fc1f02!2sBMW%20Group%20Konzernzentrale%20Empfang%20Petuelring!5e0!3m2!1sde!2sde!4v1582273128261!5m2!1sde!2sde">
        </iframe>
        <form action="">
          <h3>Book Appointment</h3>
          <input type="text" placeholder="Your Name" required class="box" />
          <input type="email" placeholder="Your Email" required class="box" />
          <textarea class="box" required placeholder="Your Message" name="" id="" cols="30" rows="10"
></textarea>
          <button class="btn">Send</button>
        </form>
      </div>
    </section>

    <!--FOOTER START-->
    <footer>
      <div class="footer-content">
        <!-- Brand app links edhe ikona per social media-->
        <div class="footer-sectionbrand-section">
          <h1>MOTOR EMPIRE</h1>
          <p>Download Our App</p>
          <div class="app-link">
            <!-- Qasja ne app store -->
            <a href="https://www.apple.com/app-store/" target="_blank" class="google-play-link">
              <img src="assets/images/footerimg.png" alt="Download on the App Store">
            </a>
          </div>
          <div class="social-icons">
            <!-- Qasja ne social media -->
            <a href="https://www.facebook.com/" target="_blank" class="facebook-icon">
              <img src="assets/images/fb.png" alt="Facebook">
            </a>
            <a href="https://twitter.com/" target="_blank" class="twitter-icon">
              <img src="assets/images/twitter.png" alt="Twitter">
            </a>
            <a href="https://www.instagram.com/" target="_blank" class="instagram-icon">
              <img src="assets/images/ig.png" alt="Instagram">
            </a>
          </div>
        </div>
    
        <!-- Explore section -->
        <div class="footer-section explore-section">
          <h1>Explore</h1> 
          <ul>
            <!-- List items per nav -->
            <li><a href="#">New Inventory</a></li>
            <li><a href="#">Used Cars</a></li>
            <li><a href="#">Special Offers</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Locations</a></li>
          </ul>
        </div>
    
        <!-- Company section -->
        <div class="footer-section company-section">
          <h1>Company</h1>
          <ul>
            <li><a href="#">About MotorEmpire</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Partnerships</a></li>
            <li><a href="#">Press</a></li>
          </ul>
        </div>
    
        <!-- Contact section -->
        <div class="footer-section contact-section">
          <h1>Contact</h1>

          <ul>
            <li><i class="fas fa-map-marker-alt"></i> 123 Street, City, Country</li>
            <li><i class="fas fa-phone-alt"></i> +123 456 7890</li>
            <li><i class="fas fa-envelope"></i> contact@motorempire.com</li>

            <li> <a href="mailto:someone@example.com">Send email</a></p></li>
        </ul>
        </div>
    
        <!-- Legal section -->
        <div class="footer-section legal-section">
          <h1>Legal</h1>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
          <a href="#">Legal Notice</a>
        </div>
      </div>
    
      <!-- Footer bottom section per copyright -->
      <div class="footer-bottom">
        <p>&copy; 2024 MotorEmpire. ALL RIGHTS RESERVED.</p>
      </div>
    </footer>


    <!--THEME TOGGLE-- NI BUTTON PER ME ZGJEDH CILEN NGJYRE DON MI PARAQIT BUTONAT TJERE-->
    <div class="themeToggle">

      <div class="ToggleBtn">
        <i class="fas fa-cog"></i>
      </div>

      <h3>Choose Color</h3>
      <div class="buttons">

        <div class="themeBtn" style="background: #0011ff"></div>
        <div class="themeBtn" style="background: #d4990d"></div>
        <div class="themeBtn" style="background:rgb(43, 119, 43)"></div>
        <div class="themeBtn" style="background: #590e4fe6"></div>
        <div class="themeBtn" style="background: #c05508"></div>
        <div class="themeBtn" style="background: #ff041d"></div>
        
      </div>
    </div>

  <!-- VALIDIMI I FORMES LOGIN DUKE PERDORUR REGEX
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          const emailInput = document.getElementById("emailInput");
          const passwordInput = document.getElementById("passwordInput");
          const submitButton = document.getElementById("submitButton");
  
          // Regular expression for a valid email address
          const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
  
          // Event listener to validate the form when the Submit button is clicked
          submitButton.addEventListener("click", function () {
              const email = emailInput.value.trim();
              const password = passwordInput.value;
  
              // Validate email using regex
              if (!emailRegex.test(email)) {
                  alert("Please enter a valid email address.");
                  return;
              }
  
              // You can add more password validation logic here if needed
  
              // If both email and password are valid, you can proceed with form submission
              alert("Login successful!");
              // Replace the alert with your actual form submission logic
          });
      });
  </script>
  -->


    <!--SWIPER JS-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--Scripta per JS-->
    <script src="index.js"></script>
  </body>
</html>


<?php

  echo "<h1>PSE HACK??</h1>"

?>