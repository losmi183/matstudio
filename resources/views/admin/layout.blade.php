<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  {{-- Csrf token  --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">    
  
  {{-- Fontawsome Icons with my KIT CODE  --}}
  <script src="https://kit.fontawesome.com/7532718861.js"></script>
  
  {{-- <link rel="icon" href="{!! asset('/img/icon.png') !!}"/> --}}
  <title>Admin | Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  {{-- CSS CDN-s section  --}}
  @yield('css-cdn')

  <!-- Custom styles for this template -->
  <link href="/css/app.css" rel="stylesheet">

  {{-- Extra css  --}}
  @yield('extra-css')

</head>

<body>
  <div id="app">
      
      <!-- Top Navbar  -->
    <div id="top-area">
        <button title="hide/show sidebar" class="hamburger mr-3"><i class="fas fa-bars"></i></button>
        <a style="text-decoration: none" href="/admin"><h3 class="mt-0 primary-color " >Mat studio Admin panel</h3></a> 
    </div>


    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar">
            <ul class="sidebar-list">
                {{-- <li class="sidebar-item"><a href="/admin"><i class="fas fa-tachometer-alt"></i></i>Admin</a></li> --}}   

                <li class="sidebar-item">
                  <a id="projects" href="#"><i class="fas fa-image"></i></i></i>Projects</a>
                  <ul id="projects-sub" class="sublist">
                    <li><a href="/admin/projects/create"><i class="fas fa-chevron-circle-right"></i>Add project</a></li>
                    <li><a href="/admin/projects"><i class="fas fa-chevron-circle-right"></i>List projects</a></li>
                    <li><a href="/admin/sortProjects"><i class="fas fa-chevron-circle-right"></i>Sort projects</a></li>
                  </ul>
                </li>
                
                <li class="sidebar-item"><a href="/admin/"><i class="fas fa-user"></i></i>Users</a></li>                
                <li class="sidebar-item"><a href="/"><i class="fas fa-home"></i>Front end</a></li>
                <li class="sidebar-item"><a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt enlarge-mobile"></i><span class="hide-mobile">Logout</span>
                  </a></li>
                  

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

    
        </div>
        <!-- /#sidebar-wrapper -->

        <div id="content">

          <div class="mt-2">
            @include('admin.messages')
          </div>

              <div class="container-fluid p-0">
                  <div class="row no-gutters">
                      <div class="col-12">
                          <div class="card">
                              
                              @yield('content')
                              
                          </div>
                      </div>
                  </div>
              </div>

        </div>
    </div>

  </div>   {{-- #app div for vue.js  --}}

  <script src="/js/admin.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    // Toggle sidebar
    $( document ).ready(function() {        
        $('.hamburger').click(function() {        
            $('#sidebar').animate({width:'toggle'},300);
        });
    });

    // Sidebar items
    $('.sidebar-item').click(function() {
      $(this).find('.sublist').slideToggle();
      // alert('asd');
    });

  </script>

  {{-- extra JS  --}}
  @yield('extra-js')

</body>

</html>
