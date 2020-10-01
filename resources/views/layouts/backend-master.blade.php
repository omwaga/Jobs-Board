
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Azzara Bootstrap 4 Admin Dashboard</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="{{asset('assets/img/icon.ico')}}" type="image/x-icon"/>

  <!-- Fonts and icons -->
  <script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
  <script>
    WebFont.load({
      google: {"families":["Open+Sans:300,400,600,700"]},
      custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{asset('assets/css/fonts.css')}}']},
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/azzara.min.css')}}">
</head>
<body>
  @include('sweetalert::alert')
  <div class="wrapper">
    <!--
      Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
    -->
    <div class="main-header" data-background-color="purple">
      <!-- Logo Header -->
      <div class="logo-header">

        <a href="#" class="logo">
          <img src="{{asset('assets/img/logoazzara.svg')}}" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="fa fa-bars"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize">
          <button class="btn btn-minimize btn-rounded">
            <i class="fa fa-bars"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg">

        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div>
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item toggle-nav-search hidden-caret">
              <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                <i class="fa fa-search"></i>
              </a>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
              </a>
              <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                <li>
                  <div class="dropdown-title d-flex justify-content-between align-items-center">
                    Messages                  
                    <a href="#" class="small">Mark all as read</a>
                  </div>
                </li>
                <li>
                  <div class="message-notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="assets/img/jm_denis.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jimmy Denis</span>
                          <span class="block">
                            How are you ?
                          </span>
                          <span class="time">5 minutes ago</span> 
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="notification">4</span>
              </a>
              <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                <li>
                  <div class="dropdown-title">You have 4 new notification</div>
                </li>
                <li>
                  <div class="notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            New user registered
                          </span>
                          <span class="time">5 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            Rahmad commented on Admin
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img"> 
                          <img src="assets/img/profile2.jpg" alt="Img Profile">
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Reza send messages to you
                          </span>
                          <span class="time">12 minutes ago</span> 
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                        <div class="notif-content">
                          <span class="block">
                            Farrah liked Admin
                          </span>
                          <span class="time">17 minutes ago</span> 
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="{{asset('assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="{{asset('assets/img/profile.jpg')}}" alt="image profile" class="avatar-img rounded"></div>
                    <div class="u-text">
                      <h4>Hizrian</h4>
                      <p class="text-muted">hello@example.com</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{route('jobseeker.profile')}}">My Profile</a>
                  <a class="dropdown-item" href="#">My Balance</a>
                  <a class="dropdown-item" href="#">Inbox</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"> Log Out</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                  </form>
                </li>
              </ul>
            </li>
            
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar">

      <div class="sidebar-background"></div>
      <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="{{asset('assets/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  Hizrian
                  <span class="user-level">Administrator</span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>

              <div class="collapse in" id="collapseExample">
                <ul class="nav">
                  <li>
                    <a href="#profile">
                      <span class="link-collapse">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="#edit">
                      <span class="link-collapse">Edit Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="#settings">
                      <span class="link-collapse">Settings</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a href="{{route('admin.dashboard')}}">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
                <span class="badge badge-count">5</span>
              </a>
            </li>
            <li class="nav-item active">
              <a href="{{route('jobseeker.fillDetails')}}">
                <i class="fas fa-home"></i>
                <p>My Resume</p>
                <span class="badge badge-count">5</span>
              </a>
            </li>
            @can('manage-users')
            <li class="nav-item">
              <a data-toggle="collapse" href="#forms">
                <i class="fas fa-pen-square"></i>
                <p>Users</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="forms">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{route('admin.users.index')}}">
                      <span class="sub-item">User Management</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </li>
            @endcan
            <li class="nav-item">
              <a data-toggle="collapse" href="#vacancies">
                <i class="fas fa-pen-square"></i>
                <p>Job Listings</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="vacancies">
                <ul class="nav nav-collapse">
                  @can('manage-categories')
                  <li>
                    <a href="{{route('admin.categories.index')}}">
                      <span class="sub-item">Categories</span>
                    </a>
                  </li>
                  @endcan
                  @can('manage-jobtypes')
                  <li>
                    <a href="{{route('admin.jobtypes.index')}}">
                      <span class="sub-item">Job Types</span>
                    </a>
                  </li>  
                  @endcan
                  @can('manage-posting-subscriptions')
                  <li>
                    <a href="{{route('admin.postingsubscriptions.index')}}">
                      <span class="sub-item">Posting Subscriptions</span>
                    </a>
                  </li> 
                  @endcan
                  @can('manage-vacancies')
                  <li>
                    <a href="{{route('admin.vacancies.index')}}">
                      <span class="sub-item">Manage Vacancies</span>
                    </a>
                  </li> 
                  @endcan
                  @can('apply-job')
                  <li>
                    <a href="{{route('jobseeker.vacancies')}}">
                      <span class="sub-item">Job Listings</span>
                    </a>
                  </li> 
                  @endcan                 
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="#">
                <i class="fas fa-desktop"></i>
                <p>Applications</p>
                <span class="badge badge-count badge-success">4</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#">
                <i class="fas fa-desktop"></i>
                <p>Talent Pools</p>
                <span class="badge badge-count badge-success">4</span>
              </a>
            </li>
            @can('manage-companies')
            <li class="nav-item">
              <a data-toggle="collapse" href="#companies">
                <i class="fas fa-pen-square"></i>
                <p>Companies</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="companies">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{route('admin.industries.index')}}">
                      <span class="sub-item">Industries</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="sub-item">New Company</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('admin.companies.index')}}">
                      <span class="sub-item">Company Types</span>
                    </a>
                  </li> 
                  <li>
                    <a href="#">
                      <span class="sub-item">Company Profiles</span>
                    </a>
                  </li>                  
                </ul>
              </div>
            </li>
            @endcan
            <li class="nav-item">
              <a href="#">
                <i class="fas fa-desktop"></i>
                <p>Candidates</p>
                <span class="badge badge-count badge-success">4</span>
              </a>
            </li>


            @can('manage-locations')
            <li class="nav-item">
              <a data-toggle="collapse" href="#locations">
                <i class="fas fa-pen-square"></i>
                <p>Locations</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="locations">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{route('admin.countries.index')}}">
                      <span class="sub-item">Manage Countries</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('admin.cities.index')}}">
                      <span class="sub-item">Manage Cities</span>
                    </a>
                  </li>                 
                </ul>
              </div>
            </li>
            @endcan            
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    @yield('content')


  </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

<!-- Moment JS -->
<script src="{{asset('assets/js/plugin/moment/moment.min.js')}}"></script>

<!-- Chart JS -->
<script src="{{asset('assets/js/plugin/chart.js/chart.min.js')}}"></script>

<!-- jQuery Sparkline -->
<script src="{{asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Chart Circle -->
<script src="{{asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>

<!-- Datatables -->
<script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>

<!-- Bootstrap Notify -->
<script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

<!-- Bootstrap Toggle -->
<script src="{{asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

<!-- jQuery Vector Maps -->
<script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="{{asset('assets/js/ready.min.js')}}"></script>
<script >
  $(document).ready(function() {
    $('#basic-datatables').DataTable({
    });

    $('#multi-filter-select').DataTable( {
      "pageLength": 20,
      initComplete: function () {
        this.api().columns().every( function () {
          var column = this;
          var select = $('<select class="form-control"><option value=""></option></select>')
          .appendTo( $(column.footer()).empty() )
          .on( 'change', function () {
            var val = $.fn.dataTable.util.escapeRegex(
              $(this).val()
              );

            column
            .search( val ? '^'+val+'$' : '', true, false )
            .draw();
          } );

          column.data().unique().sort().each( function ( d, j ) {
            select.append( '<option value="'+d+'">'+d+'</option>' )
          } );
        } );
      }
    });
  });
</script>
</body>
</html>