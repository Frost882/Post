<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href={{asset('plugins/select2/css/select2.min.css')}}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->


    @include('admin.layouts.sidebar');

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            @include('admin.layouts.sidebar');


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Добавление постов</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div>
                                <!-- Main row -->
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <div class="form-group w-25">
                                                    <input type="text" class="form-control"name="title" placeholder="Название постов" value="{{old('title')}}">
                                                    @error('title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <!-- content -->
                                            <div class="form-group">
                                            <textarea id="summernote" name='content'>
                                                {{old('content')}}
                                            </textarea>
                                            @error('content')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            </div>
                                            <!-- /.content -->

                                        <!-- File input -->
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Добавить превью</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="preview_image" >
                                                                <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Загрузка</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @error('preview_image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Добавить главное изображение</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="main_image">
                                                                <label class="custom-file-label" for="exampleInputFile">Выберите изображение</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Загрузка</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @error('main_image')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            <!-- /File input -->
                                                <!-- /.card-body -->
                                            <!-- Select -->
                                            <div class="form-group">
                                                <label>Выберите категорию</label>
                                                <select name="category_id" class="form-control">
                                                   @foreach($categories as $category)
                                                    <option value="{{$category->id}}"
                                                        {{$category->id == old('$category_id') ? 'selected': ''}}
                                                    >{{$category->title}}</option>
                                                    @endforeach

                                                </select>
                                                @error('category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- /Select -->
                                            <!-- Select Multiple -->
                                            <div class="form-group" data-select2-id="30">
                                                <label>Теги</label>
                                                <div class="select2-purple" data-select2-id="29">
                                                    <select class="select2 select2-hidden-accessible" name="tag_ids" multiple="tag_ids" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true">
                                                        @foreach($tags as $tag)
                                                        <option  value = "{{$tag->id}}">{{$tag->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('tag_ids')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- /Select Multiple -->
                                            <!-- Button -->
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Добавить</button>
                                            </div>
                                            <!-- /Button -->

                                        </form>

                                        <!-- Control Sidebar -->
                                        <aside class="control-sidebar control-sidebar-dark">
                                            <!-- Control sidebar content goes here -->
                                        </aside>
                                        <!-- /.control-sidebar -->
                                    <!-- ./wrapper -->

                                    <!-- jQuery -->
                                    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
                                    <!-- jQuery UI 1.11.4 -->
                                    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
                                    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                                    <script>
                                        $.widget.bridge('uibutton', $.ui.button)
                                    </script>
                                    <!-- Bootstrap 4 -->
                                    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                                    <!-- ChartJS -->
                                    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
                                    <!-- Sparkline -->
                                    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
                                    <!-- JQVMap -->
                                    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
                                    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
                                    <!-- jQuery Knob Chart -->
                                    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
                                    <!-- daterangepicker -->
                                    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
                                    <script src={{asset('plugins/select2/js/select2.full.min.js')}}></script>
                                    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
                                    <!-- Tempusdominus Bootstrap 4 -->
                                    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
                                    <!-- Summernote -->
                                    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
                                    <!-- overlayScrollbars -->
                                    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
                                    <!-- AdminLTE App -->
                                    <script src="{{asset('dist/js/adminlte.js')}}"></script>
                                    <!-- AdminLTE for demo purposes -->
                                    <script src="{{asset('dist/js/demo.js')}}"></script>
                                    <!-- AdminLTE  demo (This is only for demo purposes) -->
                                    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
                                    <script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                    <script>
                                        $(function () {
                                            bsCustomFileInput.init();
                                        });
                                    </script>

                                    <script>
                                        $(function () {
                                            //Initialize Select2 Elements
                                            $('.select2').select2()
                                            })
                                    </script>
</body>
</html>
