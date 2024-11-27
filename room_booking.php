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
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/room_details.css">
    <title>Mermaid Pearl Resort</title>
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
            <a href="./index.php" class="name">Mermaid</a><br>
            <a href="./index.php" class="name-bottom">Pearl Resort</a>
        </div>
        <div class="menu-options">
            <a href="./index.php">HOME</a>
            <a href="./about_us.php">ABOUT US</a>
            <a href="./service_booking.php">OUR SERVICES</a>
        </div>
    </nav>
    
     <section class="room-details">
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
                    <label for="room">Select Room</label>
                    <select name="room" id="room" class="extra-service">
                        <option value="Deluxe">Deluxe Room</option>
                        <option value="Royal">Royal Room</option>
                        <option value="Executive">Executive Suite</option>
                        <option value="Presidential">Presidential Suite</option>
                        <option value="Couple">Couple Room</option>
                        <option value="Twin">Twin Room</option>
                    </select>
                </div>
                <input class="book-btn" onclick="confirm()" type="submit" value="BOOK NOW">
            </form>
            </div>
        </div>
    </section>

    <section class="rooms room-sugg-bg">
        <div class="rooms-container">
        <h1 class="room-sugg-heading">YOU MAY LIKE</h1>
        <div class="d-flex-between">
            <div class="room">
                <img src="./images/double.jpg" alt="deluxe room">
                <p class="room-price"><span class="color-primary">From BDT 13000/night</span></p>
                <a href="./rooms/twin_room.php"><h2>Twin Room</h2></a>
                <a href="./rooms/twin_room.php">BOOK NOW <i class="fa-solid fa-caret-right"></i></a>
            </div>
             <div class="room">
                 <img src="./images/deluxe.jpg" alt="deluxe room">
                 <p class="room-price"><span class="color-primary">From BDT 17000/night</span></p>
                 <a href="./rooms/deluxe_room.php"><h2>Deluxe Room</h2></a>
                 <a href="./rooms/deluxe_room.php">BOOK NOW <i class="fa-solid fa-caret-right"></i></a>
             </div>
             <div class="room">
                 <img src="./images/family.jpg" alt="deluxe room">
                 <p class="room-price"><span class="color-primary">From BDT 18000/night</span></p>
                 <a href="./rooms/royal_suite.php"><h2>Royal Suite</h2></a>
                 <a href="./rooms/royal_suite.php">BOOK NOW <i class="fa-solid fa-caret-right"></i></a>
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
    function confirm() {
        alert("Congratulations! Your booking is confirmed!");
        window.location.replace("./index.php");
    }
</script>
</html>