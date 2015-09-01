@extends('master')

@section('contents')

    <div id="innercontainer">
        <ol id="menu" class="nav navbar-right">
            <li><a class="btn btn-link" href="{{url('/eport')}}"><b>E Portal</b></a></li>
            <li><a class="btn btn-link" href="{{url('/home')}}"><b>Student</b></a></li>
            <li><a class="btn btn-link" href="{{url('/home')}}"><b>Staff</b></a></li>
            <li><a class="btn btn-link" href="{{url('/')}}"><b>Life at Citygate</b></a></li>
            <li><div><form><input name="search" type="text" placeholder="Quick Search" id="search" /></form></div></li>
        </ol>
    </div>

    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
        </div>
    </div>

    <!-- Logo/Title -->
    <div id="site_title"><a href="{{url('/')}}"> <img src="/image/citylogo.gif" width="250" alt=""></a> </div>

    <div class="maincontainer" align="center">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="header">
                    <!-- Main Menu -->
                    <ol id="menu" style="width:100%">
                        <li class="active_menu_item"><a href="index.php">Home</a></li>
                        <!-- end sub menu -->
                        <li><a href="#">Units</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">Simple</a></li>
                                <li><a href="#">Filterable</a></li>
                                <li><a href="#">Fade Scroll</a></li>
                                <li><a href="#">Video</a></li>
                                <li class="last"><a href="#">PhotoGrid</a></li>
                            </ol><!-- end sub menu -->
                        </li>

                        <li><a href="#">Admission</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">Simple</a></li>
                                <li><a href="#">Filterable</a></li>
                                <li><a href="#">Fade Scroll</a></li>
                                <li><a href="#">Video</a></li>
                                <li class="last"><a href="#">PhotoGrid</a></li>
                            </ol>
                        </li><!-- end sub menu -->

                        <li><a href="#">Institutes</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">FPT</a></li>
                                <li><a href="#">GreenWich University</a></li>
                                <li class="last"><a href="#">Osun State College of Tech</a></li>
                            </ol><!-- end sub menu -->
                        </li>

                        <li><a href="#">Admin</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">FPT</a></li>
                                <li><a href="#">GreenWich University</a></li>
                                <li class="last"><a href="#">Osun State College of Tech</a></li>
                            </ol><!-- end sub menu -->
                        </li>

                        <li><a href="#">Faculty</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">FPT</a></li>
                                <li><a href="#">GreenWich University</a></li>
                                <li class="last"><a href="#">Osun State College of Tech</a></li>
                            </ol><!-- end sub menu -->
                        </li>

                        <li><a href="#">Explore</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">FPT</a></li>
                                <li><a href="#">GreenWich University</a></li>
                                <li class="last"><a href="#">Osun State College of Tech</a></li>
                            </ol><!-- end sub menu -->
                        </li>

                        <li><a href="#">About</a>
                            <!-- sub menu -->
                            <ol>
                                <li><a href="#">Vision and Mission</a></li>
                                <li><a href="#">Administration</a></li>
                                <li><a href="#">Academics</a></li>
                                <li><a href="#">Other Links</a></li>
                            </ol><!-- end sub menu -->
                        </li>

                    </ol>
                </div>
            </div>
        <!-- END header -->
        <hr />

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/image/IMAG0252.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Example headline.</h1>
                                <p>Note: If you're viewing this page via a <code>file://heriade_soft-media.com</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/nature-photo3.png" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/tempimage-1.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/web_image5.jpg" alt="Fourth slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Fourth Slid.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/image/nature-photo6.png" alt="Fifty slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Fourth Slid.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div id="dinfo">
            <div id="lcontainer">
                    <p><strong>CITYGATE INSTITUTE</strong></p>
                    <div class="col-sm-12 col-xs-12" align="left">UNIVERSITY TOP UP EDUCATION. Welcome to the LONG-SHORT ROUTE to a bachelors degree in Information technology, Computer Science and Management Sciences. </div>

                    <div class="col-xs-12 col-sm-12" align="left">
                        <br />
                        <ol>
                            <li style="text-align:justify">
                                Citygate Institute is a premier University Top Up institution, a destination of choice for alternative career paths and credible programs at the level of tertiary education. We have assembled a comprehensive suite of programs, alternative career plans, international partners and resources to chart a new course to a bachelors degree and a successful career.
                            </li>
                            <br />
                            <li style="text-align:justify">
                                We realized that most candidates have good Unified Tertiary Matriculation Examination (UTME) scores and five O/Level credits but cannot secure admission because of the low admission capacity of universities, CITI UNIVERSITY TOP EDUCATION provides alternative career paths and opportunity to start at home and finish abroad with a bachelors degree. Other candidates have completed a two-year diploma from a polytechnic or other diploma awarding institutions, they can now cross over to an international university and still finish in record time with a honors award. This opportunity also appeals to candidates at two hundred level in a university program who desire a change.
                                CITI UNIVERSITY TOP EDUCATION emphasizes: teams, an education model with multiple entry/exit points, incremental study plans, and a unique blend of academic, vocational and professional training in technology and management sciences. START YOUR CAREER AT HOME TODAY AND FINISH ABROAD.
                            </li>
                        </ol>

                    </div>
            </div>
            <div id="rcontainer">
                <strong style="color:#FFF">NEWS HEADLINES</strong>
                <div class="col-sm-12 col-lg-8">
                    <marquee direction="up" scrollamount="1" behavior="slid" loop="infinite" style="line-height:150%">
                        CONVOCATION CEREMONY
                        CITYGATE Instiute ANNOUNCE B.SC (HONS) PASSPORT for June 2012 Admission.
                        CITYGATE HOSTS WORKSHOP ON UNIVERSITY OF GREENWICH B.SC TOP UP: JAN 2012 ADMISSION
                        Nguyen Thanh Nam, Chairman FPT Corporation visited Nigeria and CITYGATE Institute.
                        University of Greenwich Top Up Programme graduates 1st batch of 20 candidates of CITYGATE institute
                        CITYGATE Institute offers Dual Admission and Scholarship to JAMB Candidates.
                    </marquee>
                </div>
                <div class="col-sm-12 col-lg-8">
                    <strong style="color:#FFF;">NOTIFICATION</strong>

                </div>

            </div>
        </div>

    </div>
    @endsection