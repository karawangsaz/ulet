@extends ('layouts.dash')

@section ('title', $title)

@section ('stylesheets')
    @foreach ($stylesheets as $stylesheet)
        <link rel="stylesheet" href="{{ $stylesheet }}">
    @endforeach
@endsection

@section ('content')
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{ url('img/logo2.png') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="{{ url('img/logo2.png') }}" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-plus"></i> Buat Topik</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-elevation-rise"></i>Reports</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-file-document-box"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                            </p>
                            <span class="badge badge-pill badge-warning float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                                <p class="font-weight-light small-text">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                                <p class="font-weight-light small-text">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                                <p class="font-weight-light small-text">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-text">Hello, {{ $user->nama }} !</span>
                        <img class="img-xs rounded-circle" src="{{ $user->foto }}" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                                </div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Check Inbox
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Richard V.Welsh</p>
                                <div>
                                    <small class="designation text-muted">Manager</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">New Project
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-content-copy"></i>
                        <span class="menu-title">Basic UI Elements</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="menu-icon mdi mdi-backup-restore"></i>
                        <span class="menu-title">Form elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/charts/chartjs.html">
                        <i class="menu-icon mdi mdi-chart-line"></i>
                        <span class="menu-title">Charts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/tables/basic-table.html">
                        <i class="menu-icon mdi mdi-table"></i>
                        <span class="menu-title">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/icons/font-awesome.html">
                        <i class="menu-icon mdi mdi-sticker"></i>
                        <span class="menu-title">Icons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-restart"></i>
                        <span class="menu-title">User Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/login.html"> Login </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/register.html"> Register </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper courses">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Series</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($courses as $course)
                                                <tr>
                                                    <td style="max-width:300px">
                                                        <h2 class="title">
                                                            <a href="{{ url('course/' . $course->id . '/topics') }}">{{ $course->nama }}</a>
                                                        </h2>
                                                        <div class="btn-actions">
                                                            <a href="{{ url('course/' . $course->id) }}">Edit</a>
                                                            |
                                                            <a href="{{ url('series/' . $course->slug) }}" target="_blank">View</a>        
                                                        </div>
                                                    </td>
                                                    <td class="text-success">Published</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@endsection