<?php 
    include('./includes/header.php');
?>
    <main>
        <!-- !!!!!IMAGE CAROUSEL!!!!! -->
        <div class="slideshow-container fade">
            <!-- Slideshow images -->
            <div class="slideshow-image-div fade">
                <img class="slideshow-image-img" src="./images/index/carousel1.png" alt="Nik Romantik in the House of Cox">
                <div class="slideshow-caption">welcome to the house of cox</div>
            </div> 
            <div class="slideshow-image-div fade">
                <img class="slideshow-image-img" src="./images/index/carousel2.png" alt="The House of Cox">
                <div class="slideshow-caption">welcome to the house of cox</div>
            </div> 
            <div class="slideshow-image-div fade">
                <img class="slideshow-image-img" src="./images/index/carousel3.png" alt="Performers in the House of Cox">
                <div class="slideshow-caption">welcome to the house of cox</div>
            </div> 
            <!-- Back and Forward Buttons -->
            <a class="back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <!-- Little dots that change what the image is -->
        <div style="text-align:center">
            <span class="dots" onclick="currentSlide(1)"></span>
            <span class="dots" onclick="currentSlide(2)"></span>
            <span class="dots" onclick="currentSlide(3)"></span>
        </div> 
        <!-- END IMAGE CAROUSEL -->
        <div class="section justify">
            <h1>ABOUT</h1>
            <p>House of Cox is a Seattle-based drag art collective that celebrates all things creepy, weird, and gender-diverse.</p>
            <a class="button" href="./about.php">ABOUT</a>
        </div>
        <div class="section justify">
            <h1>MEET OUR PERFORMERS</h1>
            <p>Kings, Queens and Everything in Between make their home at the House of Cox. Meet our kick-ass cast of performers you might see at our next show!</p>
            <a class="button" href="./performers.php">PERFORMERS</a>
        </div>

        <div class="section justify">
            <h1>SHOWS</h1>
            <h2>OUR NEXT SHOW</h2>
            <h3><b>Playing it Straight</b></h3>
            <h3>Friday, February 10th, 2023</h3>
            <p>House of Cox Presents: Playing it Straight, a drag parody. Are you tired of attending local drag shows only to be accosted on all sides by queers, queens and fags? House of Cox is aiming to fix that. This year's valentines show will be upholding traditional gender roles and wholesome family values, so grab your sweetie and come see some sanitized drag!</p>
            <p>Doors at 7, show at 8. Tickets $10 each. Mask and Vax required for entry. This show will be RSVP only.</p>
            <a class="button" href="./shows.php">MORE SHOWS</a>
        </div>
    </main>
<?php
    include('./includes/footer.php');
?>
