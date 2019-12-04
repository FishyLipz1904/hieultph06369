<!doctype html>
<html lang="en">
  <head>
    <title>Macro Studios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   
    <link rel="icon" 
     type="image/jpg" 
     href="../images/macro.jpg">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{route('website.index')}}" class="mb-0">Macro Studio</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">Thông tin</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Thành viên</a></li>
                  </ul>
                </li>
                <li><a href="#portfolio-section" class="nav-link">Sản phẩm</a></li>
                <li><a href="#blog-section" class="nav-link">Bài đăng</a></li>
                <li><a href="#contact-section" class="nav-link">Liên hệ</a></li>
                @if(Auth::check())
                <li><a href="{{route('index')}}">{{Auth::user()->name}}</a> 
                    <img src="../images/{{Auth::user()->filename}}" style='max-width:60px;max-height:60px;' alt="">
                
                </li>  
                  <li><form method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button type="submit" class='btn btn-danger'>Logout</button>
              </form></li>
                    
                @else()
                <li> <a href="{{route('auth.login')}}">Đăng nhập</a><li>
                @endif
                
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <div class="site-blocks-cover overlay" style="background-image: url(images/macro3.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase mb-5" data-aos="fade-up">"Biến giấc mơ của bạn thành hiện thực"</h1>
            
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Liên hệ chúng tôi</a>
            </div>
          </div>
            
        </div>
      </div>

      <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  

    
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Về Macro Studio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/about.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Ở Macro Studio chúng tôi cam kết:</h3>
              <p>Macro Studio là điểm đến được tin cậy bởi rất nhiều cá nhân và tập thể</p>
            </div>
          
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Chất lượng sản phẩm cao</li>
                <li>Thời gian hoàn thiện sản phẩm nhanh</li>
                <li>Giá thành tương đối</li>
                <li>Tận tâm tư vấn và chăm sóc khách hàng</li>
              </ul>
              
            </div>

            <p><a href="#contact-section" class="smoothscroll btn btn-primary">Liên hệ với chúng tôi</a></p>

            
            
          </div>
        </div>
      </div>  
    </div>

    
    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Các thành viên</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Macro Studio là sự đóng góp và tâm huyết của rất nhiều người góp phần tạo nên</p>
          </div>
        </div>
        <div class="row">
          
    @foreach($users as $user)
      @if($user['role']>=100)
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
            <div class="team-member">
              <figure>
                <ul class="social">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                </ul>
                <img src="../images/{{$user['filename']}}" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>{{$user['name']}}</h3>
                
              </div>
            </div>
          </div>
          @endif
    @endforeach
        </div>
      </div>
    </section>
    <section class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Sản phẩm của chúng tôi</h2>
          </div>
        </div>
        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters" class="filters text-center button-group col-md-7">
          <button class="btn btn-primary active" data-filter="*">All</button>
          @foreach($categories as $category)
            <button class="btn btn-primary active" data-filter=".{{$category['id']}}">{{$category['name']}}</button>
          @endforeach
            </div>
        </div>  
        <div id="posts" class="row no-gutter">
          @foreach($posts as $post)
          <div class="item {{$post['categories']['id']}} col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="../images/{{$post['filename']}}" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="../images/{{$post['filename']}}">
            </a>
          </div>
          @endforeach
        </div>
        
      </div>

    </section>

   
    <section class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Bài đăng</h2>
          </div>
        </div>

        <div class="row">
        @foreach($blogs as $blogs)
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="">
            <div class="h-entry">
              <a href="#" data-toggle="modal" data-target="#modal_posts">
                <img src="../images/{{$blogs['filename']}}" alt="Image" class="img-fluid">
              </a>
              <h2 class="font-size-regular"><a href="#">{{$blogs['title']}}</a></h2>
              <div class="meta mb-4">{{$blogs['users']['name']}}<span class="mx-2">&bullet;</span> {{$blogs['created_at']}}<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>{{$blogs['content']}}</p>
              <p><a href="#" data-toggle="modal" data-target="#modal_posts" >Continue Reading...</a></p>
            </div> 
          </div>
          <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modal_posts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{$blogs['title']}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="../images/{{$blogs['filename']}}" alt="Image" class="img-fluid">
      <p>{{$blogs['content']}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
         @endforeach 
        </div>
      </div>
    </section>
    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Liên hệ chúng tôi</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span></span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#"></a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#"></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">
            <form action="{{route('contact.store')}}" class="p-5 bg-white" method="POST">
            @csrf
              <h2 class="h4 text-black mb-5">Liên hệ chúng tôi</h2> 

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="name">Name</label> 
                  <input type="text" id="name" class="form-control" name='name'>
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name='email'>
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Chủ đề</label> 
                  <input type="subject" id="subject" class="form-control" name='subject'>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Nội dung</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Về chúng tôi</h2>
                <p>
                <ul class="list-unstyled ul-check success">
                <li>Chất lượng sản phẩm cao</li>
                <li>Thời gian hoàn thiện sản phẩm nhanh</li>
                <li>Giá thành tương đối</li>
                <li>Tận tâm tư vấn và chăm sóc khách hàng</li>
              </ul>
                </p>
              </div>
             
              <div class="col-md-3">
              <li>Tel:</li>
                <li>Add: </li>
                <li>Email:</li>
                
                
              </div>
              <div class="col-md-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.514428296121!2d105.79660521424422!3d20.97200639509074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x58240a9dd46645d7!2zVHLGsOG7nW5nIFRIUFQgTMawxqFuZyBUaOG6vyBWaW5o!5e0!3m2!1svi!2s!4v1574576446990!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            </div>
          </div>
          
        </div>
   
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>

  
    
  </body>
</html>