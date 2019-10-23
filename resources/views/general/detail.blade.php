@include('top')
      <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12"> 
            </div>
          </div>
        </div>
      </section>
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
                <div class="col-md-6">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="mr-2">{{$posts_by_id['created_at'] }}</span> &bullet;
                      </div>
                    </div>
                </div>
                <h2>{{$posts_by_id['title']}}</h2>
                <p>{{$posts_by_id['content']}}</p>
            <div class="pt-5">
              <h3 class="mb-5">{{count($comments)}} Comments</h3>
              <ul class="comment-list">
                @foreach($comments as $comment)
                <li class="comment">
                  <div class="vcard">
                    <img src="{{ asset('images/person_1.jpg')}}" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>{{$comment['users']['name']}}</h3>
                    <div class="meta">{{$comment['created_at']}}</div>
                    <p>{{$comment['content']}}</p>
                    
                  </div>
                </li>
                @endforeach
              </ul>
              </div>
              </div>
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="{{ route ('comments.store')}}" method="POST" class="p-5 bg-light">
                   @csrf
                  <div class="form-group">
                    <label for="message">Message</label>
                    <input type="hidden" name="auth_id" value={{Auth::id()}}>
                    <input type="hidden" name="post_id" value={{$posts_by_id['id']}}>
                    <textarea name="content" id="message" cols="30" rows="10" class="form-control" ></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
            <!-- END main-content -->
            <div class="col-md-12 col-lg-4 sidebar">
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <div class="bio text-center">
                  <img src="{{ asset('images/person_1.jpg')}}" alt="Image Placeholder" class="img-fluid">
                  <div class="bio-body">
                    <h2>@if(Auth::check())
                  {{Auth::user()->name}}
                @else()
                  Unauthenticated
                @endif</h2>
                  </div>
                </div>
              </div>
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