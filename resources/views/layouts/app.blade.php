<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Haninge Islamiska Kulturcentret</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('public/asset/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/dataTables.bootstrap4.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/daterangepicker.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('public/asset/css/app-dark.css') }}" id="darkTheme" disabled>
    <script src="{{asset('public/asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/jquery.edatagrid.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/ec7qoowpxuewg1129uubuv87kbnd1nbtl4rud6ohj840iwea/tinymce/5/tinymce.min.js"></script>
    
  </head>
  <body class="vertical  light">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <!-- <i class="fe fe-menu navbar-toggler-icon"></i> -->
        </button>
        
        <ul class="nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0 my-2" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="fe fe-globe"> </span>{{ ($aLanguage[0]->english == 1 ? 'English' : 'Sindhi') }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ route('changeLanguage') }}" onclick="event.preventDefault();document.getElementById('changeLanguage').submit();">{{ ($aLanguage[0]->english == 1 ? 'Sindhi' : 'English') }}</a>
              <form id="changeLanguage" action="{{ route('changeLanguage') }}" method="POST" style="display: none;">
                @csrf
                <?php
                  if($aLanguage[0]->english == 1){
                    echo '<input type="hidden" name="sindhi" value="1">';
                    echo '<input type="hidden" name="english" value="0">';
                  }else{
                    echo '<input type="hidden" name="english" value="1">';
                    echo '<input type="hidden" name="sindhi" value="0">';
                  }
                ?>
              </form>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <span class="fa fa-sign-out"> </span>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
              <img src="{{ asset('public/asset/assets/images/logo.png') }}" alt="Haninge Islamic Center" width="165" height="140" />
            </a>
          </div>
          <br>
          <br>

          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Orgnization</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            
            <li class="nav-item w-100">
              <a class="nav-link" href="">
                <i class="fe fe-video fe-16"></i>
                <span class="ml-3 item-text">{{ $aLan['dashboard'] }}</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('project') }}">
                <i class="fe fe-video fe-16"></i>
                <span class="ml-3 item-text">{{ $aLan['projects'] }}</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('client') }}">
                <i class="fe fe-video fe-16"></i>
                <span class="ml-3 item-text">{{ $aLan['clients'] }}</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('shareholder') }}">
                <i class="fe fe-video fe-16"></i>
                <span class="ml-3 item-text">{{ $aLan['shareholder'] }}</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="{{ route('translation') }}">
                <i class="fe fe-video fe-16"></i>
                <span class="ml-3 item-text">{{ (isset($aLan['translation']) ? $aLan['translation'] : '' ) }}</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link collapsed">
                <i class="fe fe-grid fe-16"></i>
                <span class="ml-3 item-text">Accounts</span>
              </a>
              <ul class="list-unstyled pl-4 w-100 collapse" id="tables">
                <li class="nav-item">
                  <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Income</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href=""><span class="ml-1 item-text">Expanse</span></a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </aside>
      <main role="main" class="main-content py-4">
        @yield('content')
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    
    <script src="{{asset('public/asset/js/popper.min.js')}}"></script>
    <script src="{{asset('public/asset/js/moment.min.js')}}"></script>
    <script src="{{asset('public/asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/asset/js/simplebar.min.js')}}"></script>
    <script src="{{asset('public/asset/js/daterangepicker.js')}}"></script>
    <script src="{{asset('public/asset/js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{asset('public/asset/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('public/asset/js/config.js')}}"></script>
    <script src="{{asset('public/asset/js/d3.min.js')}}"></script>
    <script src="{{asset('public/asset/js/topojson.min.js')}}"></script>
    <script src="{{asset('public/asset/js/datamaps.all.min.js')}}"></script>
    <script src="{{asset('public/asset/js/datamaps-zoomto.js')}}"></script>
    <script src="{{asset('public/asset/js/datamaps.custom.js')}}"></script>
    <script src="{{asset('public/asset/js/Chart.min.js')}}"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{asset('public/asset/js/gauge.min.js')}}"></script>
    <script src="{{asset('public/asset/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('public/asset/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('public/asset/js/apexcharts.custom.js')}}"></script>
    <script src="{{asset('public/asset/js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('public/asset/js/select2.min.js')}}"></script>
    <script src="{{asset('public/asset/js/jquery.steps.min.js')}}"></script>
    <script src="{{asset('public/asset/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('public/asset/js/jquery.timepicker.js')}}"></script>
    <script src="{{asset('public/asset/js/dropzone.min.js')}}"></script>
    <script src="{{asset('public/asset/js/uppy.min.js')}}"></script>
    <script src="{{asset('public/asset/js/quill.min.js')}}"></script>
    <script src='{{asset("public/asset/js/jquery.dataTables.min.js")}}'></script>
    <script src='{{asset("public/asset/js/dataTables.bootstrap4.min.js")}}'></script>
    <script>
      $('#dataTable-1').DataTable(
      {
        autoWidth: true,
        "lengthMenu": [
          [16, 32, 64, -1],
          [16, 32, 64, "All"]
        ]
      });
    </script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example3').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true,
          "responsive": true,
          "buttons": ["excel", "pdf"]
        });
      });
    </script>
    
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="{{ asset('public/asset/js/apps.js') }}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>