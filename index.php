<!DOCTYPE html>
<html>
    <head>
        <title>Bon Hotels</title>
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Gio Bilana">
    </head>
    <body>
        <header>
            <a href="index.html"><img src="images/logo.png" alt=""></a>
            <nav>
                <a href="#section1">Our Hotel</a>
                <a href="#section2">Rooms & Rate</a>
                <a href="#section3">Facilities</a>
                <a href="contuct us.html">Contact Us</a>
            </nav>

            <?php
           $room2='<div class="room2">
           <h3>Standart Rooms</h3>
           <a href="#" class="btn1">Check Rate</a>
           </div>'

           
                
            ?>
            <?php
               $room3='<div class="room3">
               <h3>Standart Viev Rooms</h3>
               <a href="#" class="btn1">Check Rate</a>
           </div>'

            ?>

            <?php
               $room4='<div class="room4">
               <h3>Deluxe Rooms</h3>
               <a href="#" class="btn1">Check Rate</a>
           </div>'
            ?>
        </header>

        <section class="section1" id="section1">
            <h1>WELCOME TO BON HOTEL</h1>
            <p>Good people. Good thinking. Good feeling.</p>
            <a href="#" class="button">EXPLORE</a>
        </section>

        <section class="section2" id="section2">
            <h2>Rooms & Rates</h2>
            <div class="allrooms">
                <div class="room1">
                    <h3>Standart Twin Rooms</h3>
                    <a href="#" class="btn1">Check Rate</a>
                </div>
                <?php
                echo ($room2);
                echo ($room3);
                echo ($room4);

                
                ?>

                
                
            
<!-- 
                    <div class="room2">
                    <h3>Standart Rooms</h3>
                    <a href="#" class="btn1">Check Rate</a>
                </div>

                <div class="room3">
                    <h3>Standart Viev Rooms</h3>
                    <a href="#" class="btn1">Check Rate</a>
                </div>

                <div class="room4">
                    <h3>Deluxe Rooms</h3>
                    <a href="#" class="btn1">Check Rate</a>
                </div>
            </div>
             -->
        </section>

        <section class="section3" id="section3">
            <h2>Get a room already!</h2>
            <a href="#" class="button">Book Now!</a>
        </section>


        <footer>
            <img src="images/logo footer.png" alt="img">
            <nav class="footernav">
                <a href="#">Our Hotels</a>
                <a href="#">Our Conferencing</a>
                <a href="#">Our Company</a>
                <a href="#">Hotel Design</a>
                <a href="#">Careers</a>
            </nav>
            <div class="footerdiv">
            <p>Bon Hotels Head Office</p>
                <a href="tel:+27 434 344 432">+27 434 344 432</a>
                <a href="mailto:info@bonhotels.com">info@bonhotels.com</a>
                </div>
        </footer>


       


        
    </body>
</html>