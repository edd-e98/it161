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
                <img class="slideshow-image-img" src="./images/index/carousel2.png" alt="Gerard way holding a flamethrower">
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
        </div> 
        <!-- END IMAGE CAROUSEL -->
        <div class="section justify">
            <h1>ABOUT</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="button" href="./about.php">ABOUT</a>
        </div>
        <div class="section justify">
            <h1>Here is a main container for my page!</h1>
            <p>    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </main>
<?php
    include('./includes/footer.php');
?>