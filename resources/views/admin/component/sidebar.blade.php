<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{ asset('admincss') }}/img/jahid.jpg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Jahid Hasan</h1>
      <p>Laravel Developer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
          <li class="active"><a href="{{ url('/home') }}"> <i class="icon-home"></i>Home </a></li>
          <li><a href="{{ route('create.post') }}"> <i class="icon-grid"></i>Add Post </a></li>
          <li><a href="{{ route('show.post') }}"> <i class="fa fa-bar-chart"></i>Show Post </a></li>
        
          <li><a href="{{ route('create.about') }}"> <i class="icon-padnote"></i>Create About-Us</a></li>
          <li><a href="{{ route('about.show') }}"> <i class="icon-padnote"></i>Show About-Us</a></li>
         
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>
          <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
  </ul><span class="heading">Extras</span>
  <ul class="list-unstyled">
    <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
  </ul>

 

</nav>