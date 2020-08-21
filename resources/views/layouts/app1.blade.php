<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" type="image/png" href="/images/checklist.png"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{  csrf_token() }}">

        <title> @yield('title') </title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapacdn.com/font-awesome/latest/css/font-awesome.min.css">
        
        <!-- Material Kit CSS -->
        {{-- <link href="{{ assets('assets/css/material-dashboard.css') }}" rel="stylesheet" /> --}}
        <link href="{{ url('/assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
    </head>

    <body>
        <div class="sidebar" data-color="azure" data-background-color="white">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
      
            Tip 2: you can also add an image using data-image tag -->
            
            <div class="logo">
              {{-- <img class="logo-tim" src="/images/checklist.png"/> --}}
              <a href="#" class="simple-text logo-normal">
               task manager
              </a>
            </div>
      
            <div class="sidebar-wrapper">
              <ul class="nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/dashboard">
                    <i class="material-icons">dashboard</i>
                    <p>Tasks Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#0">
                    <i class="material-icons">supervisor_account</i>
                    <p>Meetings</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/">
                    <i class="material-icons">exit_to_app</i>
                    <p>Logout</p>
                  </a>
                </li>
                <!-- your sidebar here -->
              </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                  <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#">Welcome Elvis</a>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">notifications</i>
                          <span class="notification">3</span>
                          <p class="d-lg-none d-md-block">
                            Some Actions
                          </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">David needs more time on his task</a>
                          <a class="dropdown-item" href="#">You have 5 new tasks</a>
                          <a class="dropdown-item" href="#">Ugo just completed his task</a>
                          <a class="dropdown-item" href="notifications.html" style="color: cornflowerblue" >View all</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="material-icons">person</i>
                          <p class="d-lg-none d-md-block">
                            Account
                          </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                          <a class="dropdown-item" href="#">Profile</a>
                          <a class="dropdown-item" href="#">Settings</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Log out</a>
                        </div>
                      </li>
                      <!-- your navbar here -->
                    </ul>
                  </div>
                </div>
              </nav>
            <!-- End Navbar -->
      
            <!--CONTENT-->
            <div class="content">
              <div class="container-fluid">
                <!-- your content here -->
                
                 
      
                  <!--NEW TASK MODAL-->
      
                  <div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-signup" role="document">
                      <div class="modal-content">
                        <div class="card card-signup card-plain">
                          <div class="modal-header">
                            <h5 class="modal-title card-title" style="font-weight: bold;">New Personal Task</h5>
                            <!-- <button class="btn btn-default">Register</button> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">clear</i>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12 mr-auto">
                  
                                <form class="form" method="" action="">
                                  <div class="card-body">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="material-icons">create</i></div>
                                        </div>
                                          <input type="text" class="form-control" placeholder="Task Title">
                                      </div>
                                    </div>
                  
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">description</i></div>
                                      </div>
                                        <input type="text" class="form-control" placeholder="Task Description">
                                    </div>
                                  </div>
                  
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">calendar_today</i></div>
                                      </div>
                                        <input type="date" id="taskDate" name="taskDate" placeholder="Select Due Date" title="Select due date" class="form-control">
                                        <span>Select a due date.</span>
                                    </div>
                                  </div>
                                  
                                </div>
          
                                <div class="modal-footer justify-content-center">
                                  <a href="#pablo" class="btn btn-info btn-round"><i class="material-icons">add</i> Add Task</a>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                  <!--NEW TASK MODAL END-->
      
      
      
                  <!--ASSIGN TASK MODAL-->
      
                  <div class="modal fade" id="assignTaskModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-signup" role="document">
                      <div class="modal-content">
                        <div class="card card-signup card-plain">
                          <div class="modal-header">
                            <h5 class="modal-title card-title" style="font-weight: bold;">Assign Task</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">clear</i>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12 mr-auto">
                                <form class="form" method="" action="">
                                  <div class="card-body">
                                    <div class="form-group">
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text"><i class="material-icons">create</i></div>
                                        </div>
                                          <input type="text" class="form-control" placeholder="Task Title">
                                      </div>
                                    </div>
                  
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">description</i></div>
                                      </div>
                                        <input type="text" class="form-control" placeholder="Task Description">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group" style="color: black;">
                                      <div class="input-group-text"><i class="material-icons">contacts</i></div>
                                      <div class="input-group-prepend">
                                        <label title="Recepient">
                                          Recepient
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <!-- <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">calendar_today</i></div>
                                      </div> -->
                                      <!-- <input type="date" id="taskDate" name="taskDate" placeholder="Select Due Date" title="Select due date" class="form-control"> -->
                                      <div class="input-group-text"><i class="material-icons"></i></div>
                                      
                                      <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Individual
                                          <span class="circle">
                                              <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                      
                                      <div class="form-check form-check-radio form-check-inline">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Group
                                          <span class="circle">
                                              <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    
                                    </div>
                                  </div>
                  
                                  <div class="form-group">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">calendar_today</i></div>
                                      </div>
                                        <input type="date" id="taskDate" name="taskDate" placeholder="Select Due Date" title="Select due date" class="form-control">
                                        <span>Select a due date.</span>
                                    </div>
                                  </div>
                                  
                                </div>
          
                                <div class="modal-footer justify-content-center">
                                  <a href="#pablo" class="btn btn-info btn-round"><i class="material-icons">add</i> Assign</a>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                  <!--ASSIGN TASK MODAL END-->

                  @include('inc.messages')
      
                  <!--ALL TASKS STATISTICS-->
                    @yield('content')
                  <!--ALL TASKS STATISTICS-->
                <!-- end of content-->
              </div>
            
            </div>
      
            <!--FOOTER DIV-->
            <footer class="footer">
              <div class="container-fluid">
                <nav class="float-left">
                  <ul>
                    <li>
                      <a href="http://www.standardlife.org.ng" target="_blank">
                        Standard Life Organization
                      </a>
                    </li>
                  </ul>
                </nav>
                <div class="copyright float-right">
                  &copy;
                  <script>
                    document.write(new Date().getFullYear())
                  </script>, <b>Standard Life Sofware Dev Team</b>.
                </div>
                <!-- your footer here -->
              </div>
            </footer>
            <!--FOOTER DIV END-->
          </div>
    
    
        
        
        
    <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js"></script>
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="/assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="/assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="/assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="/assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="/assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="/assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="/assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="/assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="/assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ url('/assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('/assets/js/plugins/bootstrap-notify.js') }}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src={{ url('/assets/js/material-dashboard.js?v=2.1.2') }} type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('/assets/demo/demo.js') }}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
        
    </body>


</html>