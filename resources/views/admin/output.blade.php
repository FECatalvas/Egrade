<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../public/css/style.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <head>
        <title> AppName - @yield('title')</title>
    </head>
    <body>
    <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">E-Grade System</a>
       
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
         
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li >
          <a href="{{url('/admin/Dashboard')}}" class="btn btn-outline-info">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <!-- <span class="badge badge-pill badge-warning">New</span> -->
            </a>
         
          </li>
          <li >
            <a href="{{url('admin/showCourses')}}" class="btn btn-outline-info">
              <i class="fa fa-book"></i>
              <span>Courses</span>
              <!-- <span class="badge badge-pill badge-danger">3</span> -->
            </a>
          </li>
          <li >
            <a href="{{url('admin/addCourseForm')}}" class="btn btn-outline-info">
              <i class="fa fa-plus"></i>
              <span>Add Course</span>
            </a>
            
           
          </li>
          <li >
            <a href="{{url('/admin/addAnnouncementForm')}}" class="btn btn-outline-info">
              <i class="fa fa-folder"></i>
              <span>Add announcement</span>
            </a>
          </li>
          <li >
            <a href="{{url('/admin/addAnnouncementForm')}}" class="btn btn-outline-info">
            <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    @yield('content')
    

  </main>
  <!-- page-content" -->
</div>
    
   
    </body>
 
</html>