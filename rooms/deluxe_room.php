<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/room_details.css">
    <title>Deluxe Room</title>
</head>
<body>
    <header class="header d-flex-between">
        <div>
            <a class="contact"><i class="fa-solid fa-phone"></i></i> +012 345 6789</a>
            <a class="contact"><i class="fa-regular fa-envelope"></i></i> contact@company.com</a>
        </div>
    </header>

    <nav class="navbar d-flex-between">
        <div>
            <a href="../index.php" class="name">Mermaid</a><br>
            <a href="../index.php" class="name-bottom">Pearl Resort</a>
        </div>
        <div class="menu-options">
            <a href="../index.php">HOME</a>
            <a href="../index.php">ROOMS</a>
            <a href="../index.php">ABOUT US</a>
            <a href="../service_booking.php">OUR SERVICES</a>
            <a href="../room_booking.php" class="booking-btn">BOOK NOW</a>
        </div>
    </nav>

    <section class="room-hero">
       <h1>Deluxe Room</h1>
    </section>

    <section class="room-details">
        <div class="room-details-container">
            <div class="room-info">
                <div>
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="../images/deluxe.jpg" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                          <div class="numbertext">1 / 3</div>
                          <img src="../images/room1.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">2 / 3</div>
                          <img src="../images/room3.jpg" style="width:100%">
                        </div>
                        
                        <div class="mySlides fade">
                          <div class="numbertext">3 / 3</div>
                          <img src="../images/room4.jpg" style="width:100%">
                        </div>
    
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="../images/room5.jpg" style="width:100%">
                          </div>
                        
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>   
                    </div>
    
                    <div class="gallery-images">
                        <img src="../images/room5.jpg" alt="" >
                        <img src="../images/room6.jpg" alt="" >
                        <img src="../images/double.jpg" alt="" >
                        <img src="../images/room8.jpg" alt="" >
                    </div>

                </div>
                <div class="overview">
                    <h1>Overview</h1>
                    <p>Our Deluxe Room offers a stunning view of the white sand beach. This room is designed and decorated with modern style and equipped with the most luxurious facilites. Little luxuries include free Wi-Fi, deluxe bath amenities and a 4K technology flat-screen television with cable channels.</p>
                </div>
                <div class="amenities-container">
                    <h1>Free Amenities</h1>
                    <div class="amenities">
                        <div><i class="fa-solid fa-temperature-low"></i><p>Air Conditioner</p></div>
                        <div><i class="fa-solid fa-tv"></i><p>Big TV</p></div>
                        <div><i class="fa-solid fa-wifi"></i><p>Wifi</p></div>
                        <div><i class="fa-solid fa-key"></i><p>Door Key</p></div>
                    </div>
                    <div class="amenities">
                        <div><i class="fa-solid fa-mug-saucer"></i><p>Coffee Maker</p></div>
                        <div><i class="fa-solid fa-box-tissue"></i><p>Tissue Box</p></div>
                        <div><i class="fa-solid fa-car"></i><p>Free Car Wash</p></div>
                        <div><i class="fa-solid fa-square-parking"></i><p>Free Parking</p></div>
                    </div>
                </div>
            </div>
            <div class="booking-form">
                <div class="booking-form-inside">
                    <form action="">
                    <h1 class="booking-head color-primary">BOOKING</h1>
                    <p>Name</p>
                    <input class="margin-bottom" type="text" required>
                    <p>Phone</p>
                    <input class="margin-bottom" type="number" required>
                    <p>Email</p>
                    <input class="margin-bottom" type="text" required>
                    <div class="form-inputs margin-bottom">
                        <div><p>Check in </p><input type="date" name="" id="" required></div>
                        <div><p>Check Out</p> <input type="date" name="" id="" required></div>
                    </div>
                    <div class="form-inputs margin-bottom">
                        <div><p>Guests</p> <input type="number" name="" id="" required></div>
                        <div><p>Rooms</p><input type="number" name="" id=" required"></div>
                    </div>
                    <div class="margin-bottom">
                        <label for="service">Extra Service</label>
                        <select name="service" id="service" class="extra-service">
                            <option value="wifi">Strong Wifi</option>
                            <option value="pool">Personal Pool</option>
                            <option value="cleaning">Room Cleaning</option>
                            <option value="gym">Gym</option>
                        </select>
                    </div>
                    <input class="book-btn" onclick="confirm()" type="submit" value="BOOK NOW">
                </form>
                </div>
            </div>
        </div>
    </section>
    
    <section class="rooms room-sugg-bg">
        <div class="rooms-container">
        <h1 class="room-sugg-heading">YOU MAY LIKE</h1>
        <div class="d-flex-between">
             <div class="room">
                 <img src="../images/family.jpg" alt="deluxe room">
                 <p class="room-price"><span class="color-primary">From BDT 18000/night</span></p>
                 <a href="../rooms/royal_suite.php"><h2>Royal Suite</h2></a>
                 <a href="../rooms/royal_suite.php">BOOK NOW <i class="fa-solid fa-caret-right"></i></a>
             </div>
             <div class="room">
                 <img src="../images/room3.jpg" alt="deluxe room">
                 <p class="room-price"><span class="color-primary">From BDT 15000/night</span></p>
                 <a href="../rooms/executive_suite.php"><h2>Executive Suite</h2></a>
                 <a href="../rooms/executive_suite.php">BOOK NOW <i class="fa-solid fa-caret-right"></i></a>
             </div>
             <div class="room">
                <img src="../images/room1.jpg" alt="deluxe room">
                <p class="room-price"><span class="color-primary">From BDT 20000/night</span></p>
                <a href="../rooms/presidential_suite.php"><h2>Presidential Suite</h2></a>
                <a href="../rooms/presidential_suite.php">BOOK NOW <i class="fa-solid fa-caret-right"></i></a>
            </div>
        </div>
     </section>
   
    <footer>
        <div class="footer-details">
            <div>
                <h3 class="name">Mermaid</h3>
                <p class="name-bottom">Pearl Resort</p>
                <p>
                 We started building our hotel in 1995. Since <br>
                 then, we’ve grown into the hotel with the best <br>
                 client service in our country
                </p>
            </div>
            <div>
                <h3>
                    Useful Links
                </h3>
                <ul>
                    <li>About Us</li>
                    <li>Contact Us</li>
                    <li>Terms & Conditions</li>
                    <li>Help Desk</li>
                </ul>
            </div>
            <div>
                <h3>Address</h3>
                <p>
                    26/7 Kolatoli, <br> 
                    Cox's Bazar, Bangladesh
                </p>
                <a class="color-primary" href="">View Map</a>
            </div>
            <div>
                <h3>Contact Us</h3>
                <p>+012 345 6789</p>
                <p>example@company.com</p>
                <div class="socials">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
        <div class="foot">
            <p>© 2022 All Rights Reserved. Developed By Ishita</p>
        </div>
    </footer>
</body>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }
    function confirm() {
        alert("Congratulations! Your booking is confirmed!");
        window.location.replace("../index.php");
    }
    </script>
</html>