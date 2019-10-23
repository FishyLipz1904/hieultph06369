@include('top')
      <section class="site-section py-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb-4">Your Posts</h2>
            </div>
          </div>

            <div class="row blog-entries">
              <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                  @foreach($posts as $post)
                    <div class="col-md-6">
                      <a href="{{route('general.show', $post['id'])}}">     
                        <div class="blog-content-body">
                        <div class="post-meta">
                          <span class="author mr-2"><img src="{{ asset('images/person_1.jpg')}}" alt="Colorlib">{{$post['users']['name']}}</span>&bullet;
                          <span class="mr-2">{{ $post['created_at'] }}</span> &bullet;
                        </div>
                          <h2><a href="{{route('general.show', $post['id'])}}">{{ $post['title'] }}</a></h2>
                        </div>
                      </a>
                    </div>
                    @endforeach
                  </div>
                </div>
               
                
              <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box">
                  <div class="bio text-center">
                    <img src="{{ asset('images/person_1.jpg')}}" alt="Image Placeholder" class="img-fluid">
                      <div class="bio-body">
                    <h2>@if(Auth::check())
                  {{Auth::user()->name}}
                @else()
                  Unauthenticated
                @endif</h2>
                <form method="POST" action="{{ route('auth.logout') }}">
                  @csrf
                    <button type="submit" class='btn btn-success'>Logout</button>
                </form>
              </div>
                
        </div>
        
      </section>
    </div>
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>