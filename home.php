<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>CozyCorners - Get Quality Furniture</title>
  <meta name="title" content="CozyCorners - Get Quality Furniture">
  

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/home.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mr+De+Haviland&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-product-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-3.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-4.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-product-5.jpg">

</head>

<body id="top" >

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="input-wrapper">
        <input type="search" name="search" style="color: white;" placeholder="Search Anything..." class="input-field">

        <ion-icon name="search-outline" aria-hidden="true" style="color: #2d9596;"></ion-icon>
      </div>

      <a href="#" class="logo" style="color: white; border: 1px solidblack;">ＣｏｚｙＣｏｒｎｅｒｓ</a>

      <div class="header-action" style="color: #e5d3b3;">
<a href="./loginpage/log.html">
       <button class="header-action-btn" aria-label="user" >
        <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
       </button>
      </a>

        
<a href="./cartpage/cart.html">
        <button  class="header-action-btn" aria-label="cart">
          <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
            <span class="btn-badge"></span>
        </button>
      </a>
        <button  class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

    </div>
  </header>





  <!-- 
    - #SIDEBAR
  -->

  <div class="sidebar" data-navbar>

    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
      <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
    </button>

    <div class="wrapper">

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Language</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">English</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">hindi</a>
        </li>

        

      </ul>

      <ul class="sidebar-list">

        <li>
          <p class="sidebar-list-title">Currency</p>
        </li>

        <li>
          <a href="#" class="sidebar-link">IND - RS RUPEES</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">USD - US Dollar</a>
        </li>

        <li>
          <a href="#" class="sidebar-link">Pound</a>
        </li>

      </ul>

    </div>

    <nav class="navbar">
      <ul class="navbar-list">

        <li class="navbar-item">
          <a href="#home" class="navbar-link" data-nav-link>Home</a>
        </li>

        <li class="navbar-item">
          <a href="#about" class="navbar-link" data-nav-link>About</a>
        </li>

        <li class="navbar-item">
          <a href="#product" class="navbar-link" data-nav-link>Product</a>
        </li>

        <li class="navbar-item">
          <a href="#blog" class="navbar-link" data-nav-link>Blogs</a>
        </li>

      </ul>
    </nav>

    <ul class="contact-list">

      <li>
        <p class="contact-list-title">Contact Us</p>
      </li>

      <li class="contact-item">
        <address class="address">
          CozyCorners, Ahmedabad,India
        </address>
      </li>

      <li class="contact-item">
        <a href="mailto:support.center@CozyCorners.co" class="contact-link">support.center@CozyCorners.co</a>
      </li>

      <li class="contact-item">
        <a href="tel:00001235567890" class="contact-link">(0000) 1235 567890</a>
      </li>

    </ul>

    <div class="social-wrapper">

      <p class="social-list-title">Follow US On Socials</p> <br>

      


      <ul class="social-list">

        <li>
          <a href="https://facebook.com" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="https://instagram.com" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="https://threads.com" class="social-link">
            <ion-icon name="logo-tumblr"></ion-icon>
          </a>
        </li>
                      
      </ul>

    </div>
   
  </div>
  
  <div class="overlay" data-overlay data-nav-toggler></div>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="home">
        <div class="container">

          <ul class="hero-list">

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/images/hero-product-1.jpg" width="285" height="396" alt="Art Deco Home"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Art Deco Home</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 568; --height: 389;">
                  <img src="./assets/images/hero-product-2.jpg" width="568" height="389" alt="Helen Chair"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Helen Chair</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li>
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 285; --height: 396;">
                  <img src="./assets/images/hero-product-3.jpg" width="285" height="396" alt="Vase Of Flowers"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Vase Of Flowers</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/images/hero-product-4.jpg" width="580" height="213" alt="Wood Eggs"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Wood Eggs</a>
                  </h3>

                  <p class="card-text">Decoration</p>
                </div>

              </div>
            </li>

            <li class="colspan-2">
              <div class="hero-card">

                <figure class="card-banner img-holder" style="--width: 580; --height: 213;">
                  <img src="./assets/images/hero-product-5.jpg" width="580" height="213" alt="Table Wood Pine"
                    class="img-cover">
                </figure>

                <div class="card-content">
                  <h3>
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <p class="card-text">Furniture</p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <h2 class="section-title">CozyCorners Store</h2>

          <p class="section-text">
            When you start with a portrait and search for a pure form, a clear volume, through successive eliminations,
            you arrive
            inevitably at the egg. Likewise, starting with the egg and following the same process in reverse, one
            finishes with the
            portrait.
          </p>

         
            <video width="90%"
            height="20%" controls="controls"
            >
          <source src="./assets/video/VN20240501_135933.mp4" type="video/mp4">
         your browser does not support the video tag
      </video>

          </div>

        </div>
      </section>





      <!-- 
        - #PRODUCTS
      -->

      <section class="section product" id="product" aria-label="product">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Popular Products</h2>

            <ul class="filter-btn-list">

              <li class="filter-btn-item">
                <button class="filter-btn active" data-filter-btn="all">All Products</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="accessory">Accessory</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="decoration">Decoration</button>
              </li>

              <li class="filter-btn-item">
                <button class="filter-btn" data-filter-btn="furniture">Furniture</button>
              </li>

            </ul>
          </div>

          <ul class="grid-list product-list" data-filter="all">

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" id="1" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-1.jpg" width="300" height="300" loading="lazy"
                    alt="Animi Dolor Pariatur" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>

                  <ul class="badge-list">

                    <li>
                      <div class="badge orange">Sale</div>
                    </li>

                    <li>
                      <div class="badge cyan">-10%</div>
                    </li>

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Animi Dolor Pariatur</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">Rs 240.00</del>

                    <data class="price" value="10">Rs 216.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" id="2" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-2.jpg" width="300" height="300" loading="lazy" alt="Art Deco Home"
                    class="img-cover">


                    <div class="card-badge">Out of Stock</div>

                  <ul class="card-action-list">

                    <li>
                      <button class="addtocart" aria-label="addtocart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="addtocart" aria-label="addtocart" title="addtocart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                   
                  </ul>

                  
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Art Deco Home</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30">Rs 549.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-3.jpg" width="300" height="300" loading="lazy"
                    alt="Artificial potted plant" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Artificial potted plant</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="40">Rs 380.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-4.jpg" width="300" height="300" loading="lazy" alt="Dark Green Jug"
                    class="img-cover">


                    <div class="card-badge">Coming Soon</div>

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Dark Green Jug</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="17.10">Rs499.99</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-5.jpg" width="300" height="300" loading="lazy"
                    alt="Drinking Glasses" class="img-cover">

                    <div class="card-badge">Out of Stock</div>

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                   

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wood Morter And Pestle</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="21">Rs 249.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-6.jpg" width="300" height="300" loading="lazy" alt="Helen Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Spine Lounge petit Chair </a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="69.50">Rs 2470.50</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-7.jpg" width="300" height="300" loading="lazy"
                    alt="High Quality Glass Bottle" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">High Quality Glass Bottle</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="30.10">Rs 385.10</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-8.jpg" width="300" height="300" loading="lazy"
                    alt="Living Room & Bedroom Lights" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>


                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Study Table Lamp</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="45">Rs 1760.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-9.jpg" width="300" height="300" loading="lazy" alt="Nancy Chair"
                    class="img-cover">
                    
                    <div class="card-badge">Coming Soon</div>


                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Nancy Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="90">Rs 13830.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-10.jpg" width="300" height="300" loading="lazy" alt="Simple Chair"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>


                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Simple Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="40">Rs 9999.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-11.jpg" width="300" height="300" loading="lazy" alt="Smooth Disk"
                    class="img-cover">

                    
                    <div class="card-badge">Out of Stock</div>

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                   
                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Smooth Disk</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="46">Rs 439.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-12.jpg" width="300" height="300" loading="lazy" alt="Table Black"
                    class="img-cover">

                    <ul class="badge-list">

                      <li>
                        <div class="badge orange">Sale</div>
                      </li>
  
                      <li>
                        <div class="badge cyan">-6%</div>
                      </li>
  
                    </ul>

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>


                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Table Black</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">Rs 7450.00</del>
                    <data class="price" value="67">Rs 7003.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-13.jpg" width="300" height="300" loading="lazy"
                    alt="Table Wood Pine" class="img-cover">

                    
                    <div class="card-badge">Coming Soon</div>


                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>


                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Table Wood Pine</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="50">Rs 12899.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="accessory">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-14.jpg" width="300" height="300" loading="lazy"
                    alt="Teapot with black tea" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Teapot with black tea</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="25">Rs 549.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-15.jpg" width="300" height="300" loading="lazy"
                    alt="Unique Decoration" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    
                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Unique Decoration</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="15">Rs 249.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-16.jpg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Vase Of Flowers</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 1199.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-17.jpg" width="300" height="300" loading="lazy" alt="Wood Eggs"
                    class="img-cover">

                    <div class="card-badge">Out of Stock</div>

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                   

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wood Eggs</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="19">Rs 459.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-18.jpg" width="300" height="300" loading="lazy" alt="Wooden Box"
                    class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Box</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="27">Rs 619.00</data>
                  </div>
                </div>

              </div>
            </li>

            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-19.jpg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Cups</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 430.00</data>
                  </div>
                </div>

              </div>
            </li>
                

            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-20.jpg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">4

                    <div class="card-badge">Coming Soon</div>

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Study Table With Chair</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 30000.00</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="decoration">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-21.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                    <div class="card-badge">Out of Stock</div>



                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>


                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden bowl</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 749.00</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-22.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Wall Bookshelves</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 4499.00</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-23.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Wall shelf, Set Of 4</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 2898.00</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-24.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                    <ul class="badge-list">

                      <li>
                        <div class="badge orange">Sale</div>
                      </li>
  
                      <li>
                        <div class="badge cyan">-10%</div>
                      </li>
  
                    </ul>


                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>


                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Wooden Wall shelf, Set Of 3</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">Rs 2598.00</del>
                      <data class="price" value="25">Rs 2338.02</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-25.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">


                    <ul class="badge-list">

                      <li>
                        <div class="badge orange">Sale</div>
                      </li>
  
                      <li>
                        <div class="badge cyan">-10%</div>
                      </li>
  
                    </ul>


                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Modern White TV Unit With A Patterned Wallpaper For The Back Wall</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">Rs 29999.00</del>
                      <data class="price" value="25">Rs 26999.01</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-26.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                  

                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">T.V Unit</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 34499.00</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-27.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                   
                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">T.V Unit</a>
                  </h3>

                  <div class="card-price">
                    <data class="price" value="77">Rs 24999.00</data>
                  </div>
                </div>

              </div>
            </li>
            <li class="furniture">
              <div class="product-card">

                <a href="#" class="card-banner img-holder has-before" style="--width: 300; --height: 300;">
                  <img src="./assets/images/product-28.jpeg" width="300" height="300" loading="lazy"
                    alt="Vase Of Flowers" class="img-cover">

                    <ul class="badge-list">

                      <li>
                        <div class="badge orange">Sale</div>
                      </li>
  
                      <li>
                        <div class="badge cyan">-3%</div>
                      </li>
  
                    </ul>


                  <ul class="card-action-list">

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="Read More..">
                        <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                    <li>
                      <button class="card-action-btn" aria-label="add to cart" title="add to cart">
                        <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                      </button>
                    </li>

                   
                  </ul>
                </a>

                <div class="card-content">
                  <h3 class="h3">
                    <a href="#" class="card-title">Study Table</a>
                  </h3>

                  <div class="card-price">
                    <del class="del">Rs 6959.00.00</del>
                      <data class="price" value="25">Rs 6750.23</data>
                  </div>
                </div>

              </div>
            </li>
          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Explore our blog</h2>

            <a href="#" class="btn-link">
              <span class="span">View All</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-1.jpg" width="374" height="243" loading="lazy"
                    alt="Unique products that will impress your home in 2022." class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Unique products that will impress your home in 2024.</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-27">November 27, 2023</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-2.jpg" width="374" height="243" loading="lazy"
                    alt="Navy Blue & White Striped Area Rugs" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Navy Blue & White Striped Area Rugs</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-25">November 25, 2023</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <div class="card-banner img-holder" style="--width: 374; --height: 243;">
                  <img src="./assets/images/blog-3.jpg" width="374" height="243" loading="lazy"
                    alt="CozyCorners White Coated Staircase Floating" class="img-cover">

                  <a href="#" class="card-btn">
                    <span class="span">Read more</span>

                    <ion-icon name="add-outline" aria-hidden="true"></ion-icon>
                  </a>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">CozyCorners White Coated Staircase Floating</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <time class="card-meta-text" datetime="2022-09-18">November 18, 2023</time>
                    </li>

                    <li class="card-meta-item">
                      <a href="#" class="card-meta-text">Admin</a>
                    </li>

                    <li class="card-meta-item">
                      in <a href="#" class="card-meta-text">deco</a>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #NEWSLETTER
      -->

      <section class="section newsletter" aria-label="newsletter" style="color:#664229 ;">
        <div class="container">

          <div class="newsletter-card">

            <div class="card-content">
              <h2 class="h2 section-title">Our Newsletter</h2>

              <p class="section-text">
                Subscribe our newsletter and get discount 50% off
              </p>
            </div>

            <form action="" class="card-form">
              <input type="email" name="email_address" placeholder="Your email address" required class="email-field" style="border: 1px solid black; background-color: white; ">

              <button type="submit" class="newsletter-btn" aria-label="subscribe">
                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
              </button>
            </form>

          </div>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">CozyCorners</a>

          <ul>

            <li class="footer-list-item">
              <ion-icon name="location-sharp" aria-hidden="true"></ion-icon>

              <address class="address">
                CozyCorners, Ahmedabad,India 
              </address>
            </li>

            <li class="footer-list-item">
              <ion-icon name="call-sharp" aria-hidden="true"></ion-icon>

              <a href="tel:+1234567890" class="footer-link">+1234567890</a>
            </li>

            <li>
              <ul class="social-list">

                <li>
                  <a href="https://facebook.com" class="social-link">
                    <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://instagram.com" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </li>

                <li>
                  <a href="https://threads.com" class="social-link">
                    <ion-icon name="logo-twitter"></ion-icon>
                  </a>
                </li>

              </ul>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Help & Information</p>
          </li>

          
          <li>
            <a href="./return/return/Return.html" class="footer-link">Returns & Refunds</a>
          </li>

         

          <li>
            <a href="./return/return/Terms.html" class="footer-link">Terms & Conditions</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#about" class="footer-link">About Us</a>
          </li>

          

          

          <li>
            <a href="./return/return/contact us.html" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Newsletter</p>

          <form action="" class="footer-form">
            <input type="email" name="email_address" placeholder="Your email address" required class="email-field">

            <button type="submit" class="footer-form-btn">
              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <div class="wrapper">

           

          </div>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2023 & 2024 All Rights Reserved by <a href="#" class="copyright-link">CozyCorners</a>.
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./script2.js" defer></script>
  <script src="./assets/js/script.js" defer></script>
  <script>
    const product = [
        {
            id: 1,
            image: './assets/images/product-2.jpg',
            title: 'Art Deco Home',
            price: 549.00,
        },
        {
            id: 1,
            image: 'image/hh-2.jpg',
            title: 'Air Pods Pro',
            price: 60,
        },
        {
            id: 2,
            image: 'image/ee-3.jpg',
            title: '250D DSLR Camera',
            price: 230,
        },
        {
            id: 3,
            image: 'image/aa-1.jpg',
            title: 'Headphones',
            price: 100,
        },
        {
            id: 4,
            image: 'image/bb-1.jpg',
            title: 'Audio Microphone',
            price: 230,
        },
        {
            id: 5,
            image: 'image/cc-1.jpg',
            title: 'Smart Watch',
            price: 100,
        },
    ];

    const categories = [...new Set(product.map((item) => { return item }))]

    document.getElementById('searchBar').addEventListener('keyup', (e) => {
        const searchData = e.target.value.toLowerCase();
        const filteredData = categories.filter((item) => {
            return (
                item.title.toLowerCase().includes(searchData)
            )
        })
        displayItem(filteredData)
    });

    const displayItem = (items) => {
        document.getElementById('root').innerHTML = items.map((item) => {
            var { image, title, price } = item;
            return (
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div> 
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>$ ${price}.00</h2>
                    <button>Add to cart</button>
                    </div>
                </div>`
            )
        }).join('')
    };
    displayItem(categories);

</script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>