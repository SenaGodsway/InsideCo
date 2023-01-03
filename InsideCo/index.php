
      <?php include 'views/navigation.php'?>
    <section id="canvas">
    <div id="banner">
        <div class="banner-text">
            <h3> Interior designers from the future.</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non corrupti voluptatum quod, ratione minus recusandae alias nisi ipsa amet similique.</p>
            <a href="#">Browse our works</a>
        </div>
        <div class="banner-img"></div>
        <div class="social">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-instagram"></i>
          <i class="fa fa-whatsapp"></i>
          <i class="fa fa-gmail"></i>
          <i class="fa fa-map"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-youtube"></i>
        </div>
    </div>

    </section>

    <!-- OUR APPROACH SECTION -->
    <section id="values">
        <div class="img-area"></div>
        <div class="info-area">
            <h3>Our Approach</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis porro sit nam natus voluptatem modi rem, fugit perspiciatis a animi?</p>
            <br>
            <h3>our values</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos quidem vitae quasi facilis non exercitationem saepe iure, ad eaque dicta.</p>
        </div>
    </section>


    <!-- SERVICES SECTION -->
    <section id="services">
        <div class="services-tab">
          <h3>services</h3>
          <input type="search" name="search" id="search" placeholder="search ">
          <li>Interior design</li>
          <li>painting and decor</li>
          <li>electrical works</li>
            <div class="category">
              <button  class="active">all</button>
                <button>dining room</button>
                <button>bedroom</button>
                <button>kitchen</button>
                <button>living room</button>
                <button>study room</button>
                <button>game room</button>
            </div>
        </div>
        <div class="works-tab">
            <h3>Recent works</h3>
            <div class="product">
                <div class=" itemBox" data-att="dining room">
                    <img src="img/room1.jpg" alt="">
                </div>
                <div class=" itemBox" data-att="living room">
                <img src="img/room2.jpg" alt="">
            </div>
                <div class="itemBox" data-att="bedroom">
                  <img src="img/room3.jpg" alt="">
                </div>
                <div class="itemBox" data-att="living room">
                  <img src="img/room4.jpg" alt="">
                </div>
                <div class="itemBox " data-att="kitchen">
                  <img src="img/2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
      <?php include 'views/footer.php';?>
