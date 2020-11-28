<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Collective Admin Panel a Flat Bootstrap Responsive Website Template | Home :: W3Layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/style-starter.css') }}">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body class="sidebar-menu-collapsed">
    <div class="se-pre-con"></div>
    <section>
        <!-- sidebar menu start -->
        <div class="sidebar-menu sticky-sidebar-menu">

            <!-- logo start -->
            <div class="logo">
                <h1><a href="index.html">Collective</a></h1>
            </div>

            <!-- if logo is image enable this -->
            <!-- image logo --
    <div class="logo">
      <a href="index.html">
        <img src="image-path" alt="Your logo" title="Your logo" class="img-fluid" style="height:35px;" />
      </a>
    </div>
    <!-- //image logo -->

            <div class="logo-icon text-center">
                <a href="index.html" title="logo"><img src="{{ asset('assets/dashboard/images/logo.png') }}" alt="logo-icon"> </a>
            </div>
            <!-- //logo end -->

            <div class="sidebar-menu-inner">

                <!-- sidebar nav start -->
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li class="active"><a href="index.html"><i class="fa fa-tachometer"></i><span> Dashboard</span></a>
                    </li>
                    <li class="menu-list">
                        <a href="#"><i class="fa fa-cogs"></i>
                            <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
                        <ul class="sub-menu-list">
                            <li><a href="carousels.html">Carousels</a> </li>
                            <li><a href="cards.html">Default cards</a> </li>
                            <li><a href="people.html">People cards</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span></a></li>
                    <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span></a></li>
                    <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a></li>
                </ul>
                <!-- //sidebar nav end -->
                <!-- toggle button start -->
                <a class="toggle-btn">
                    <i class="fa fa-angle-double-left menu-collapsed__left"><span>Collapse Sidebar</span></i>
                    <i class="fa fa-angle-double-right menu-collapsed__right"></i>
                </a>
                <!-- //toggle button end -->
            </div>
        </div>
        <!-- //sidebar menu end -->
        <!-- header-starts -->
        <div class="header sticky-header">

            <!-- notification menu start -->
            <div class="menu-right">
                <div class="navbar user-panel-top">
                    <div class="search-box">
                        <form action="#search-results.html" method="get">
                            <input class="search-input" placeholder="Search Here..." type="search" id="search">
                            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                    <div class="user-dropdown-details d-flex">
                        <div class="profile_details_left">
                            <ul class="nofitications-dropdown">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notifications</h3>
                                            </div>
                                        </li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Johnson purchased template</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a></li>
                                        <li class="odd"><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar2.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>New customer registered </p>
                                                    <span>1 hour ago</span>
                                                </div>
                                            </a></li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar3.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <span>2 hours ago</span>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#all" class="bg-primary">See all notifications</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 4 new messages</h3>
                                            </div>
                                        </li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Johnson purchased template</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a></li>
                                        <li class="odd"><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar2.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>New customer registered </p>
                                                    <span>1 hour ago</span>
                                                </div>
                                            </a></li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar3.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor sit amet </p>
                                                    <span>2 hours ago</span>
                                                </div>
                                            </a></li>
                                        <li><a href="#" class="grid">
                                                <div class="user_img"><img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Johnson purchased template</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#all" class="bg-primary">See all messages</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true" aria-expanded="false">
                                        <div class="profile_img">
                                            <img src="{{ asset('assets/dashboard/images/profileimg.jpg') }}" class="rounded-circle" alt="" />
                                            <div class="user-active">
                                                <span></span>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                                        <li class="user-info">
                                            <h5 class="user-name">{{ Auth::user()->name }}</h5>
                                            <span class="status ml-2">Available</span>
                                        </li>
                                        <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                                        <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                                        <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                                        <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>
                                        <li class="logout"> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--notification menu end -->
        </div>
        <!-- //header-ends -->
        <!-- main content start -->
        <div class="main-content">

            <!-- content -->
            <div class="container-fluid content-top-gap">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <div class="welcome-msg pt-3 pb-4">
                    <h1>Hi <span class="text-primary">John</span>, Welcome back</h1>
                    <p>Very detailed & featured admin.</p>
                </div>

                <!-- statistics data -->
                <div class="statistics">
                    <div class="row">
                        <div class="col-xl-6 pr-xl-2">
                            <div class="row">
                                <div class="col-sm-6 pr-sm-2 statistics-grid">
                                    <div class="card card_border border-primary-top p-4">
                                        <i class="lnr lnr-users"> </i>
                                        <h3 class="text-primary number">29.75 M</h3>
                                        <p class="stat-text">Total Users</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2 statistics-grid">
                                    <div class="card card_border border-primary-top p-4">
                                        <i class="lnr lnr-eye"> </i>
                                        <h3 class="text-secondary number">51.25 K</h3>
                                        <p class="stat-text">Daily Visitors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 pl-xl-2">
                            <div class="row">
                                <div class="col-sm-6 pr-sm-2 statistics-grid">
                                    <div class="card card_border border-primary-top p-4">
                                        <i class="lnr lnr-cloud-download"> </i>
                                        <h3 class="text-success number">166.89 M</h3>
                                        <p class="stat-text">Downloads</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 pl-sm-2 statistics-grid">
                                    <div class="card card_border border-primary-top p-4">
                                        <i class="lnr lnr-cart"> </i>
                                        <h3 class="text-danger number">1,250k</h3>
                                        <p class="stat-text">Purchased</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //statistics data -->

                <!-- charts -->
                <div class="chart">
                    <div class="row">
                        <div class="col-lg-6 pr-lg-2 chart-grid">
                            <div class="card text-center card_border">
                                <div class="card-header chart-grid__header">
                                    Bar Chart
                                </div>
                                <div class="card-body">
                                    <!-- bar chart -->
                                    <div id="container">
                                        <canvas id="barchart"></canvas>
                                    </div>
                                    <!-- //bar chart -->
                                </div>
                                <div class="card-footer text-muted chart-grid__footer">
                                    Updated 2 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-2 chart-grid">
                            <div class="card text-center card_border">
                                <div class="card-header chart-grid__header">
                                    Line Chart
                                </div>
                                <div class="card-body">
                                    <!-- line chart -->
                                    <div id="container">
                                        <canvas id="linechart"></canvas>
                                    </div>
                                    <!-- //line chart -->
                                </div>
                                <div class="card-footer text-muted chart-grid__footer">
                                    Updated just now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //charts -->

                <!-- chatting -->
                <div class="data-tables">
                    <div class="row">
                        <div class="col-lg-12 chart-grid mb-4">
                            <div class="card card_border p-4">
                                <div class="card-header chart-grid__header pl-0 pt-0">
                                    Chatting
                                </div>
                                <div class="messaging">
                                    <div class="inbox_msg">
                                        <div class="inbox_people">
                                            <div class="headind_srch">
                                                <div class="srch_bar">
                                                    <div class="stylish-input-group">
                                                        <input type="text" class="search-bar" placeholder="Search Chat">
                                                        <span class="input-group-addon">
                                                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                                        </span> </div>
                                                </div>
                                            </div>
                                            <div class="inbox_chat">
                                                <div class="chat_list active_chat">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar5.jpg') }}" alt="Alexander" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Alexander <span class="chat_date">1 hour ago</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar3.jpg') }}" alt="Anderson" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Anderson <span class="chat_date">5 hours ago</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar5.jpg') }}" alt="Isabella" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Isabella <span class="chat_date">Yesterday</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar4.jpg') }}" alt="Charlotte" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Charlotte <span class="chat_date">Mar 04</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar4.jpg') }}" alt="Davidson" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Davidson <span class="chat_date">Feb 18</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar1.jpg') }}" alt="Elexa ker" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Elexa ker <span class="chat_date">Feb 04</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat_list">
                                                    <div class="chat_people">
                                                        <div class="chat_img"> <img src="{{ asset('assets/dashboard/images/avatar4.jpg') }}" alt="Charlotte" class="img-fluid">
                                                        </div>
                                                        <div class="chat_ib">
                                                            <h5>Charlotte <span class="chat_date">Jan 28</span></h5>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mesgs">
                                            <div class="msg_history">
                                                <div class="incoming_msg">
                                                    <div class="incoming_msg_img"> <img src="{{ asset('assets/dashboard/images/avatar5.jpg') }}" alt="Alexander" class="img-fluid"> </div>
                                                    <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                            <p>Coming along nicely, we've got a Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            </p>
                                                            <span class="time_date"> 10:05 AM | Mar 9</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="outgoing_msg">
                                                    <div class="sent_msg">
                                                        <p>Great start, I've added some Lorem ipsum dolor sit amet. </p>
                                                        <span class="time_date"> 12:15 PM | Mar 9</span>
                                                    </div>
                                                </div>
                                                <div class="incoming_msg">
                                                    <div class="incoming_msg_img"> <img src="{{ asset('assets/dashboard/images/avatar5.jpg') }}" alt="Alexander" class="img-fluid"> </div>
                                                    <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit</p>
                                                            <span class="time_date"> 09:16 AM | Yesterday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="outgoing_msg">
                                                    <div class="sent_msg">
                                                        <p>But I must explain to you.</p>
                                                        <span class="time_date"> 03:15 PM | Today</span>
                                                    </div>
                                                </div>
                                                <div class="incoming_msg">
                                                    <div class="incoming_msg_img"> <img src="{{ asset('assets/dashboard/images/avatar5.jpg') }}" alt="Alexander" class="img-fluid"> </div>
                                                    <div class="received_msg">
                                                        <div class="received_withd_msg">
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                                                voluptatum deleniti atque corrupti quos dolores.</p>
                                                            <span class="time_date"> 03:16 PM | Today</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="type_msg">
                                                <div class="input_msg_write">
                                                    <input type="text" class="write_msg" placeholder="Type a message" />
                                                    <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //chatting -->

                <!-- accordions -->
                <div class="accordions">
                    <div class="row">
                        <!-- accordion style 1 -->
                        <div class="col-lg-12 mb-4">
                            <div class="card card_border">
                                <div class="card-header chart-grid__header">
                                    Bootstrap Accordions
                                </div>
                                <div class="card-body">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header bg-white p-0" id="headingOne">
                                                <a href="#" class="card__title p-3" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsed accordion heading </a>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body para__style">
                                                    Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                                                    libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                                                    Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                                                    ex. Maecenas pharetra pulvinar tincidunt.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-white p-0" id="headingTwo">
                                                <a href="#" class="card__title p-3" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Click here to collapse accordion</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body para__style">
                                                    Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                                                    libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                                                    Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                                                    ex. Maecenas pharetra pulvinar tincidunt.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header bg-white p-0" id="headingThree">
                                                <a href="#" class="card__title p-3" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Click here to
                                                    collapse accordion</a>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body para__style">
                                                    Nulla tincidunt quam justo, in tincidunt tortor sollicitudin a. Donec porta posuere
                                                    libero sed varius. Phasellus hendrerit commodo sem, at sagittis sapien semper quis.
                                                    Etiam vitae facilisis nibh. Maecenas erat nisl, blandit at nunc a, lobortis sagittis
                                                    ex. Maecenas pharetra pulvinar tincidunt.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //accordion style 1 -->
                    </div>
                </div>
                <!-- //accordions -->

                <!-- modals -->
                <section class="template-cards">
                    <div class="card card_border">
                        <div class="cards__heading">
                            <h3>Modals - <span>2 different types of bootstrap modals</span></h3>
                        </div>
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-6 pr-lg-2 chart-grid">
                                    <div class="card text-center card_border">
                                        <div class="card-header chart-grid__header">
                                            Demo modal
                                        </div>
                                        <div class="card-body">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-style" data-toggle="modal" data-target="#exampleModal">
                                                Launch demo
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 chart-grid">
                                    <div class="card text-center card_border">
                                        <div class="card-header chart-grid__header">
                                            Vertical centered
                                        </div>
                                        <div class="card-body">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary btn-style" data-toggle="modal" data-target="#exampleModalCenter">
                                                Launch demo
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ...
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-success">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- //modals -->

            </div>
            <!-- //content -->
        </div>
        <!-- main content end-->
    </section>
    <!--footer section start-->
    <footer class="dashboard">
        <p>&copy 2020 Collective. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank" class="text-primary">W3layouts.</a></p>
    </footer>
    <!--footer section end-->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->


    <script src="{{ asset('assets/dashboard/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/jquery-1.10.2.min.js') }}"></script>

    <!-- chart js -->
    <script src="{{ asset('assets/dashboard/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/utils.js') }}"></script>
    <!-- //chart js -->

    <!-- Different scripts of charts.  Ex.Barchart, Linechart -->
    <script src="{{ asset('assets/dashboard/js/bar.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/linechart.js') }}"></script>
    <!-- //Different scripts of charts.  Ex.Barchart, Linechart -->


    <script src="{{ asset('assets/dashboard/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/scripts.js') }}"></script>

    <!-- close script -->
    <script>
        var closebtns = document.getElementsByClassName("close-grid");
        var i;

        for (i = 0; i < closebtns.length; i++) {
            closebtns[i].addEventListener("click", function() {
                this.parentElement.style.display = 'none';
            });
        }
    </script>
    <!-- //close script -->

    <!-- disable body scroll when navbar is in active -->
    <script>
        $(function() {
            $('.sidebar-menu-collapsed').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll when navbar is in active -->

    <!-- loading-gif Js -->
    <script src="{{ asset('assets/dashboard/js/modernizr.js') }}"></script>
    <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>

</body>

</html>