<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/{{Auth::user()->filename}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
                  {{Auth::user()->name}}

         
         
        </div>
        
      </div>
      <form method="POST" action="{{ route('auth.logout') }}">
                @csrf
                <button type="submit" class='btn btn-success'>Logout</button>
              </form>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{route('index')}}"><i class="fa fa-link"></i> <span>Admin</span></a></li>
        <li ><a href="{{route('users.index')}}"><i class="fa fa-link"></i> <span>Users</span></a></li>
        <li><a href="{{route('categories.index')}}"><i class="fa fa-link"></i> <span>Categories</span></a></li>
        <li><a href="{{route('posts.index')}}"><i class="fa fa-link"></i> <span>Posts</span></a></li>
        <li><a href="{{route('blogs.index')}}"><i class="fa fa-link"></i> <span>Blogs</span></a></li>
        
        <li><a href="{{route('comments.index')}}"><i class="fa fa-link"></i> <span>Comments</span></a></li>
        <li><a href="{{route('contacts.index')}}"><i class="fa fa-link"></i> <span>Contacts</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>