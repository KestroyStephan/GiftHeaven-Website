<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tutorial</title>

     
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="css/index.css">

 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
          #home {
            background-image: url("home.jpg");
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        #banner {
            background-image: url("back.jpg");
            width: 100%;
            height: 60vh;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        </style>
        
    </head>

    <body>
      <!--Header-->
      <header class="header">
        <a href="#" class="logo">
            <i class="fa fa-gift" aria-hidden="true"></i> GiftHeaven
        </a>
        <nav class="nav-bar">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="aboutus.php">About Us</a>
            <a href="faq.php">FAQ</a>
            <a href="contact-us.php">Contact Us</a>
        </nav>
        
        <div class="icons">
            <div class="fa fa-bars" id="menu-btn"></div> <!-- Menu Bar Icon -->
            <div class="fa fa-search" id="search-btn"></div>
            
            <a href="cart.php">
                <div class="fa fa-shopping-cart" id="cart-btn"></div> <!-- Cart Icon with link -->
            </a>
            
           <a href="login.php">
            <div class="fa fa-user" id="user-btn"></div></a>
          </div>

        <!-- Search Form -->
        <form class="search-form">
            <input type="search" id="search-box" placeholder="Search here....">
            <label for="search-box" class="fa fa-search"></label>
        </form>
        </header>
      

      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1><span>Best Price</span> This Year</h1>
          <p>
            Shoomatic Offers Your Very Comfortable time <br> on walking and exercises.
          </p>
          <button>Shop Now</button>
        </div>
      </section>

      <section id="brand" class="container">
        <div class="row m-0 py-3" >
          <img class="img-fluid col-lg-2 col-lg-2 col-md-4 col-6"  src="Catogories/nike.png" alt="">
          <img class="img-fluid col-lg-2 col-lg-2 col-md-4 col-6"  src="Catogories/addidas.png" alt="">
          <img class="img-fluid col-lg-2 col-lg-2 col-md-4 col-6"  src="Catogories/rolex.png" alt="">
          <img class="img-fluid col-lg-2 col-lg-2 col-md-4 col-6"  src="Catogories/richburry.jpeg" alt="">
          <img class="img-fluid col-lg-2 col-lg-2 col-md-4 col-6"  src="Catogories/candos.png" alt="">
          <img class="img-fluid col-lg-2 col-lg-2 col-md-4 col-6"  src="Catogories/puma.png" alt="">
        </div>
      </section>

      <section id="new" class="w-100">
        <div class="row p-0 m-0" >
          <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="Catogories/sneakers.jpg" alt="">
            <div class="details">
              <h2>Extreame Rare Sneakers</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="Catogories/blank.jpg" alt="">
            <div class="details">
              <h2>Awesome Blank Outfit</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <div class="one col-lg-4 col-md-12 col-12 p-0">
            <img class="img-fluid" src="Catogories/sport.jpg" alt="">
            <div class="details">
              <h2>Sportswear Upto 50% Off</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
        </div>
        
      </section>

      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-3">
          <h3>Our featured</h3>
          <hr class="mx-auto">
          <p>Here you can check out our new products with fair price on promo</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="Featured/cake4.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Espresso Chocolate Cake with Almond Thins</h5>
            <h4 class="p-price">Rs 5,950</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="Featured/chocolate.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Candy Sprinkle Meringue Kisses</h5>
            <h4 class="p-price">Rs 1,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="Featured/bouquet.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Colours In Love Fresh Flower Bouquet</h5>
            <h4 class="p-price">Rs 4,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="Featured/watch.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Emporio Armani Mens Stainless Steel Chronograph </h5>
            <h4 class="p-price">Rs 69,510</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>

      <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>Autumn Collection<br>UP TO 20% OFF</h1>
          <button class="text-uppercase">Shop Now</button>
        </div>
      </section>

      <section id="cloths" class="my-5 pb-5">
        <div class="container text-center mt-5 py-3">
          <h3>Dresses and Jumpsuits </h3>
          <hr class="mx-auto">
          <p>Here you can check out our new products with fair price on promo</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="clothes/1.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Espresso Chocolate Cake with Almond Thins</h5>
            <h4 class="p-price">Rs 5,950</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="clothes/2.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Candy Sprinkle Meringue Kisses</h5>
            <h4 class="p-price">Rs 1,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="clothes/3.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Colours In Love Fresh Flower Bouquet</h5>
            <h4 class="p-price">Rs 4,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="clothes/1.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Emporio Armani Mens Stainless Steel Chronograph </h5>
            <h4 class="p-price">Rs 69,510</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>

      <section id="watches" class="my-5 pb-5">
        <div class="container text-center mt-5 py-3">
          <h3>Best watches </h3>
          <hr class="mx-auto">
          <p>Here you can check out our new products with fair price on promo</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="watches/1.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Espresso Chocolate Cake with Almond Thins</h5>
            <h4 class="p-price">Rs 5,950</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="watches/2.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Candy Sprinkle Meringue Kisses</h5>
            <h4 class="p-price">Rs 1,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="watches/3.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Colours In Love Fresh Flower Bouquet</h5>
            <h4 class="p-price">Rs 4,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="watches/4.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Emporio Armani Mens Stainless Steel Chronograph </h5>
            <h4 class="p-price">Rs 69,510</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>

      <section id="shoes" class="my-5 pb-5 pb-5">
        <div class="container text-center mt-5 py-3">
          <h3>Running Shoes </h3>
          <hr class="mx-auto">
          <p>Here you can check out our new products with fair price on promo</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="shoes/1.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Espresso Chocolate Cake with Almond Thins</h5>
            <h4 class="p-price">Rs 5,950</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="shoes/2.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Candy Sprinkle Meringue Kisses</h5>
            <h4 class="p-price">Rs 1,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="shoes/3.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Colours In Love Fresh Flower Bouquet</h5>
            <h4 class="p-price">Rs 4,250</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="shoes/4.jpg" alt="">
            <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name">Emporio Armani Mens Stainless Steel Chronograph </h5>
            <h4 class="p-price">Rs 69,510</h4>
            <button class="buy-btn">Buy Now</button>
          </div>
        </div>
      </section>

      <!--Footer-->
      <footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <h3>About <span>GiftHeaven</span></h3>
            <p>"Where your gifting dreams come true. Discover the perfect gifts for every occasion with our curated collection designed to make your loved ones smile."</p>
        </div>

        <div class="footer-section quick-links">
            <h3>Quick <span>Links</span></h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Gift Builder</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-section contact-info">
            <h3>Contact <span>Us</span></h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +94 123 456 789</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> info@giftheaven.com</p>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 Gift Lane, Malabe, Sri Lanka</p>
        </div>

        <div class="footer-section newsletter">
            <h3>Join Our <span>Newsletter</span></h3>
            <p>Get the latest updates, exclusive offers, and more delivered to your inbox.</p>
            <form>
                <input type="email" placeholder="Enter your email" required>
                <button class="btn">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 GiftHeaven. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a>
            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
        </div>
    </div>
    </footer>

     
    <!-- JavaScript at the end of the body -->
    <script src="scripts\script.js"></script>

     
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      
 
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>     
</html>
