<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ">
                            <a href="{{ url('index1') }}" class="site-brand">
                                <img src="../images/logo-book.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Free Support 24/7</p>
                                    <p class="font-weight-bold number">+06-12-34-56-78</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right ">
                                    <li class="menu-item has-children">
                                        <a href="{{ url('index1') }}">Home 
                                                </a>
                                      
                                    </li>
                                 
                                    <li class="menu-item has-children mega-menu">
                                        <a href="{{ url('getInformation') }}">shop </a>
                                        
                                    </li>             
                                  
                               
                                    <li class="menu-item has-children mega-menu">
                                        <a href="{{ url('blog') }}">Blog</a>
                                    </li>   
                                            
                                         
                                           
                                    <li class="menu-item ">
                                        <a href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div style="    margin-left: 900px;"   class="login-block">
                                        <a    href="login" class="font-weight-bold">Login</a> <br>
                                        <span>or</span><a href="register">Register</a>
                                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div style="       margin-top: -60px;"  class="col-lg-3">
                            <nav class="category-nav   ">
                                <div>
                                    <a  class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        
                                        
                                            
                                        
                                        
                                        
                                        
                                        
                                        <li class="cat-item "><a href="{{ url('getInformation') }}">EDUCATION BOOKS</a></li>
                                        
                                        <li class="cat-item "><a href="{{ url('getInformation') }}">TRAVEL BOOKS</a></li>
                                        <li class="cat-item "><a href="{{ url('getInformation') }}">BUSINESS & MONEY</a></li>
                                        <li class="cat-item hidden-menu-item"><a href="{{ url('getInformation') }}">Children Books</a></li>
                                        <li class="cat-item"><a href="{{ url('getInformation') }}" class="js-expand-hidden-menu">More
                                                Categories</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                       
                        <div class="col-lg-4">
                            <div class="main-navigation flex-lg-right">
                                <div class="cart-widget">
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a  class="site-brand">
                                <img src="./image/logo-book.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            
                             
                                
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a  class="cart-link link-icon"><i class="ion-bag"></i></a>
                                    </li>
                                    <li class="sin-link">
                                        <a  class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
         
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
               
                    <div class="search-box offcanvas">
                        <form>
                            <input type="text" placeholder="Search Here">
                            <button class="search-btn"><i class="ion-ios-search-strong"></i></button>
                        </form>
                    </div>
                  
                    <div class="mobile-navigation">
                      
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item-has-children">
                                    <a >Home</a>
                                    
                                </li>
                                <li class="menu-item-has-children">
                                    <a >Blog</a>
                                    
                                </li>
                                <li class="menu-item-has-children">
                                    <a >Shop</a>
                                 
                                </li>
                               
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                       
                    </div>
                   
                    
                </div>
            </aside>
          
        </div>
        <div class="sticky-init fixed-header common-sticky">
            <div class="container d-none d-lg-block">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <a href=" {{ url('index1')}}"class="site-brand">
                            <img src="../images/logo-book.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-navigation flex-lg-right">
                            <ul class="main-menu menu-right ">
                                <li class="menu-item has-children">
                                    <a href=" {{ url('index1')}}">Home 
                                          </a>
                                   
                                </li>
                                <!-- Shop -->
                                <li class="menu-item has-children mega-menu">
                                    <a href=" {{ url('getInformation')}}">shop 
                                         </a>
                                   
                                                
                                                
                                          
                                               
                                      
                                </li>
                                <!-- Pages -->
                               
                                <!-- Blog -->
                                <li class="menu-item">
                                    <a href=" {{ url('blog')}}">blog</a>
                                </li>
                               
                                        
                                   
                                </li>
                                <li class="menu-item">
                                    <a href=" {{ url('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=================================
        Hero Area
        ===================================== -->
        <section class="hero-area hero-slider-1">
            <div class="sb-slick-slider" data-slick-setting='{
                            "autoplay": true,
                            "fade": true,
                            "autoplaySpeed": 3000,
                            "speed": 3000,
                            "slidesToShow": 1,
                            "dots":true
                            }'>
                <div class="single-slide bg-shade-whisper  ">
                    <div class="container">
                        <div class="home-content text-center text-sm-left position-relative">
                            <div class="hero-partial-image image-right">
                                <img src="./image/image.png" alt="">
                            </div>
                            <div class="row g-0">
                                <div class="col-xl-6 col-md-6 col-sm-7">
                                    <div class="home-content-inner content-left-side text-start">
                                        <div class="color">
                                        <h1 style="color:white;">Welcome<br>
                                            to our site web</h1>
                                        <h2  style="color:white;"> Let's discover with us the best books for all the time</h2>
                                        <a  style="    color: black;     background-color: wheat;" href="register" class="btn btn-outlined--primary">
                                             Register Now !
                                        </a>
                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide bg-ghost-white">
                    <div class="container">
                        <div class="home-content text-center text-sm-left position-relative">
                            <div class="hero-partial-image image-left">
                                <img src="./image/letters.png" alt="">
                                
                            </div>
                            <div class="row align-items-center justify-content-start justify-content-md-end">
                                <div class="col-lg-6 col-xl-7 col-md-6 col-sm-7">
                                    <div class="home-content-inner content-right-side text-start">
                                        <h1 style="color:white;">Welcome <br>
                                            to our site web</h1>
                                        <h2 style="color:white;"> Let's discover with us the best books for all the time </h2>
                                        <a style="    color: black;     background-color: wheat;" href="login" class="btn btn-outlined--primary">
                                            Login  Now !
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
       
        <section class="section-padding">
            <h2 class="sr-only">Home Tab Slider Section</h2>
            <div class="container">
                <div class="sb-custom-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="shop-tab" data-bs-toggle="tab" href="index.html#shop" role="tab"
                                aria-controls="shop" aria-selected="true">
                                Featured Products
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="men-tab" data-bs-toggle="tab" href="index.html#men" role="tab"
                                aria-controls="men" aria-selected="true">
                                New Arrivals
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="woman-tab" data-bs-toggle="tab" href="index.html#woman" role="tab"
                                aria-controls="woman" aria-selected="false">
                                Most view products
                            </a>
                            <span class="arrow-icon"></span>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a > The complete guide to amazing budget traveling </a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book1.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >Glam Italia! How To Travel Italy</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book2.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book2.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a >Scottsdale and Privatization in the 1980s</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book3.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>A Modern Day Coming-of-Age Story</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book4.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book4.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>My Story of Disentangling Faith from Fear
                                                    </a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book5.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>A Memoir of Unbound Action and Failing My Way to Success</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book6.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>33 Powerful Stories and Leadership Lessons </a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book7.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book7.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Practical Lessons For Today's Leader</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book8.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a>The Half Moon: A Novel , Mary Beth Keane</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book9.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Tiny changes , Remarkable results </a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book10.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book10.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Practical Lessons For Today's Leader</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book8.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Do you wanna to Success without any plan
                                                    </a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book6.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                                <h3><a >The Half Moon: A Novel , Mary Beth Keane</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/product-1.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">$51.20</span>
                                                <del class="price-old">$51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >Do you wanna to Success without any plan</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book6.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>33 Powerful Stories and Leadership Lessons</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book7.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book7.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >A Memoir of Unbound Action and Failing My Way to Success</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book6.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>My Story of Disentangling Faith from Fear</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book5.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Scottsdale and Privatization in the 1980s</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book3.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >The complete guide to amazing budget traveling</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book1.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >Glam Italia! How To Travel Italy</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book2.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book2.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>A Modern Day Coming-of-Age Story</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book4.jpg" alt="">
                                               
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book4.jpg" alt="">
                                                        
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Practical Lessons For Today's Leader</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book8.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Tiny changes , Remarkable results</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book10.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book10.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >My Story of Disentangling Faith from Fear</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book5.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                                <h3><a >Tiny changes , Remarkable results</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book10.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book10.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >Practical Lessons For Today's Leader</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book8.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >A Modern Day Coming-of-Age Story</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book4.jpg" alt="">
                                                
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book4.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a >Glam Italia! How To Travel Italy</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book2.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book2.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a>The complete guide to amazing budget traveling</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book1.jpg" alt="">
                                                    </a>
                                                  
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Scottsdale and Privatization in the 1980s</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book3.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a >My Story of Disentangling Faith from Fear</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book5.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>
                                                A Memoir of Unbound Action and Failing My Way to Success</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book6.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a >33 Powerful Stories and Leadership Lessons</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book7.jpg" alt="">
                                                
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book7.jpg" alt="">
                                                    </a>
                                                 
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>Do you wanna to Success without any plan</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a  class="hover-image">
                                                        <img src="image/products/book6.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                           
                                            <h3><a>The Half Moon: A Novel , Mary Beth Keane</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book9.jpg" alt="">
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            
                                            <h3><a>A Modern Day Coming-of-Age Story</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="image/products/book4.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a class="hover-image">
                                                        <img src="image/products/book4.jpg" alt="">
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       
        <section class="section-margin">
            <div class="container">
                <div class="section-title">
                    <h2>LATEST BLOGS</h2>
                </div>
                <div class="blog-slider sb-slick-slider" data-slick-setting='{
                "autoplay": true,
                "autoplaySpeed": 8000,
                "slidesToShow": 2,
                "dots": true
            }' data-slick-responsive='[
                {"breakpoint":1200, "settings": {"slidesToShow": 1} }
            ]'>
                    <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="./image/blog.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            13
                                        </span>
                                        <span class="month">
                                            Aug
                                        </span>
                                    </div>
                                    <h3 class="title"><a >Découvrez notre aventure </a>
                                    </h3>
                                </div>
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Dans ce blog, nous partageons notre expérience de lecture du livre "Carnets de voyage". Ce livre...</p>
                                </article>
                                <a href="{{ url('blog') }}" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="./image/blog.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            19
                                        </span>
                                        <span class="month">
                                            Jan
                                        </span>
                                    </div>
                                    <h3 class="title"><a>Découvrez notre aventure </a>
                                    </h3>
                                </div>
                               
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Dans ce blog, nous partageons notre expérience de lecture du livre "Carnets de voyage". Ce livre...</p>
                                </article>
                                <a href="{{ url('blog') }}" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="blog-card">
                            <div class="image">
                                <img src="./image/blog.jpg" alt="">
                            </div>
                            <div class="content">
                                <div class="content-header">
                                    <div class="date-badge">
                                        <span class="date">
                                            31
                                        </span>
                                        <span class="month">
                                            Aug
                                        </span>
                                    </div>
                                    <h3 class="title"><a >Découvrez notre aventure </a>
                                    </h3>
                                </div>
                        
                                <article class="blog-paragraph">
                                    <h2 class="sr-only">blog-paragraph</h2>
                                    <p>Dans ce blog, nous partageons notre expérience de lecture du livre "Carnets de voyage". Ce livre...</p>
                                </article>
                                <a href="{{ url('blog') }}" class="card-link">Read More <i
                                        class="fas fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Footer
        ===================================== -->
        <!-- Modal -->
        <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".product-slider-nav"
                                    }'>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Product Details Slider Nav -->
                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                    data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 mt--30 mt-lg--30">
                                <div class="product-details-info pl-lg--30 ">
                                    <p class="tag-block">Tags: <a href="index.html#">Movado</a>, <a href="index.html#">Omega</a></p>
                                    <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                    <ul class="list-unstyled">
                                        <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                        <li>Brands: <a href="index.html#" class="list-value font-weight-bold"> Canon</a></li>
                                        <li>Product Code: <span class="list-value"> model1</span></li>
                                        <li>Reward Points: <span class="list-value"> 200</span></li>
                                        <li>Availability: <span class="list-value"> In Stock</span></li>
                                    </ul>
                                    <div class="price-block">
                                        <span class="price-new">£73.79</span>
                                        <del class="price-old">£91.86</del>
                                    </div>
                                    <div class="rating-widget">
                                        <div class="rating-block">
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star "></span>
                                        </div>
                                        <div class="review-widget">
                                            <a href="">(1 Reviews)</a> <span>|</span>
                                            <a href="">Write a review</a>
                                        </div>
                                    </div>
                                    <article class="product-details-article">
                                        <h4 class="sr-only">Product Summery</h4>
                                        <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                            the Dust with ruffles
                                            at the bottom
                                            of the
                                            dress.</p>
                                    </article>
                                    <div class="add-to-cart-row">
                                        <div class="count-input-block">
                                            <span class="widget-label">Qty</span>
                                            <input type="number" class="form-control text-center" value="1">
                                        </div>
                                        <div class="add-cart-btn">
                                            <a href="" class="btn btn-outlined--primary"><span
                                                    class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="compare-wishlist-row">
                                        <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                        <a href="" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="widget-social-share">
                            <span class="widget-label">Share:</span>
                            <div class="modal-social-share">
                                <a href="index.html#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="index.html#" class="single-icon"><i class="fab fa-twitter"></i></a>
                                <a href="index.html#" class="single-icon"><i class="fab fa-youtube"></i></a>
                                <a href="index.html#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    Brands Slider
    ===================================== -->
    
                   
    <!--=================================
    Footer Area
    ===================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row justify-content-between  section-padding">
                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="single-footer pb--50">
                       
                        
                    </div>
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    
                </div>
                <div class=" col-xl-3 col-lg-2 col-sm-6">
                    
                </div>
                
            </div>
        </div>
        <div style="   display:flex ; "  class="footer-bottom">
        <div  style="       margin-left: 170px; "  class="social-block">
                        <h3 style="   color:white; " class="title">STAY CONNECTED</h3>
                        <ul class="social-list list-inline">
                            <li class="single-social facebook"><a ><i class="ion ion-social-facebook"></i></a>
                            </li>
                            <li class="single-social twitter"><a ><i class="ion ion-social-twitter"></i></a></li>
                            <li class="single-social google"><a ><i
                                        class="ion ion-social-googleplus-outline"></i></a></li>
                            <li class="single-social youtube"><a ><i class="ion ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
            <div style="       margin-right: -30px; "  class="container">
                
                  
                <a  class="payment-block">
                    <img src="image/icon/payment.png" alt="">
                </a>
                <p class="copyright-text">Copyright © 2022 . All Right Reserved.
                    </p>
            </div>
            <div style="   color:white; " class="single-footer pb--50">
                       
                        <div style="       margin-right: 150px; " class="footer-contact">
                            <p><span style="   color:white; " class="label">Address:</span><span class="text">Appt N°35, Avenue Bir Anzarane, Immeuble Al Krar <br> Eljadida
                                 
                                  </span></p>
                            <p><span style="   color:white; " class="label">Phone:</span><span class="text">080-8562295</span></p>
                            <p><span style="   color:white; " class="label">Email:</span><span class="text">info@grandecharte.co</span></p>
                        </div>
                    </div>
        </div>
        
    </footer>
    
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>