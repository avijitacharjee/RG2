<html>
    <head>
        <title></title>
        @yield('links')

         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Research Gateway</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <link href="../assets/css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/mysite.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>

     <header id="header">
    <div class="Headr">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="top-number" style="font-size: xx-large; font-family: Calibri; font-weight: bold;">
                        <!--<a  href="Default">
                            <IMG alt="Isara Solutions" class="img-rounded"  src="images/small_logo.jpg">
            </a>-->
                        Research Gateway
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="social">
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/researchg.gateway.1"  target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>


    </div>

        
    <nav class="navbar navbar-inverse" role="banner">

<nav>
    <a id="resp-menu" class="responsive-menu" href="#">
        <i class="fa fa-reorder"></i> Menu
    </a>
    <ul class="menu">
        <li>
            <a  href="/">
                <i class="fa fa-user"></i> Home
            </a>
        </li>
        <li>
            <a href="/studentRequests" style="color: #FFFFFF;">StudentRequests</a>
            <ul class="sub-menu">
                <li>
                    <a href="{{ url('/paperRequests')}}" style="color: #FFFFFF; font-size: 14px">Paper Requests</a>
                </li>
            </ul>
        </li>
   <!--  <li>
        <a href="know-writers.html"  style="color: #FFFFFF; font-size: 12px">Our Team</a>
    </li> -->
    <li>
        <a href="plagiarism-removal-service.html"  style="color: #FFFFFF">Plagiarism</a>
    </li>
        <!-- <li>
            <a  href="index.html#"> CrossRef Doi-Srevices</a>
            <ul class="sub-menu">
                <li>
                    <A       href="What-Is-Doi.html" style="color: #FFFFFF; font-size: 14px">What-Is-Doi</A>
                </li>
                <li>
                    <A      href="Benefits-of-Doi.html" style="color: #FFFFFF; font-size: 14px">Benefits Of-Doi</A>
                </li>
                <li>
                    <A      href="How-to-get-Doi.html" style="color: #FFFFFF; font-size: 14px">How-to-get-Doi</A>
                </li>
                <li>
                    <a href="Crossref-Approved.html"  style="color: #FFFFFF ; font-size: 14px">CrossRef-Approved</a>
                    
                </li>
                
                </li>
            </ul>
        </li> -->
        <li>
            <a  href="thesis.html"> Thesis</a>
            <ul class="sub-menu">

                <li>
                    <A       href="thesis-topics.html" style="color: #FFFFFF; font-size: 14px">Thesis Topics</A>
                </li>
                <li>
                    <A      href="thesis-synopsis-writing.html" style="color: #FFFFFF; font-size: 14px">Thesis Synopsis Writing</A>
                </li>
                <li>
                    <A        href="thesis.html" style="color: #FFFFFF; font-size: 14px">Thesis Writing</A>
                </li>
                <li>
                    <A        href="thesis-editing.html" style="color: #FFFFFF; font-size: 14px">Thesis Editing</A>
                </li>

                <li>
                    <A        href="thesis-statistics-help.html" style="color: #FFFFFF; font-size: 14px">Thesis Statistics Help</A>
                </li>
                <li>
                    <A        href="journal-paper-writing-services.html" style="color: #FFFFFF; font-size: 14px">Journal Paper writing service</A>
                </li>

            </ul>
        </li>
        <li>
            <a  href="research.html"> Research</a>
            <ul class="sub-menu">
                
                
                <li>
                    <a href="qualitative-research.html" style="color: #FFFFFF; font-size: 14px">Qualitative Research</a>
<ul class="sub-menu">

                            <li>
                                <a href="the-focus-group.html"  style="color: #FFFFFF; font-size: 14px">The Focus Group</a>
                                
                            </li>
                            <li>
                                <a href="validity.html"  style="color: #FFFFFF; font-size: 14px">Validity</a>
                            </li>
                            <li>
                                <a href="ethnography.html"  style="color: #FFFFFF; font-size: 14px">Ethnography</a>
                            </li>
                            
                            <li>
                                <a href="content-analysis.html"  style="color: #FFFFFF; font-size: 14px">Content Analysis</a>

                            </li>

                        </ul>
                </li>
                <li>
                    <a href="quantitative-research.html"  style="color: #FFFFFF; font-size: 14px">Quantitative Research</a>


                    <ul class="sub-menu">

                    
                            <li>
                                <a href="determining-sample-size.html"  style="color: #FFFFFF; font-size: 14px">Determining Sample Size</a>
                                
                            </li>
                            <li>
                                <a href="data-entry-and-management.html"  style="color: #FFFFFF; font-size: 14px">Data Entry &amp; Management</a>
                                

                            </li>
                            <li>
                                <a href="survey-research-administration.html"  style="color: #FFFFFF; font-size: 14px">Survey Research &amp; Administration</a>
                            </li>
                            <li>
                                <a href="descriptive-statistics.html"  style="color: #FFFFFF; font-size: 14px">Descriptive Statistics</a>
                                
                            </li>
                            <li>
                                <a href="inferential-statistics.html"  style="color: #FFFFFF; font-size: 14px">Interpretive Statistics</a>

                            </li>

                        </ul>
                </li>
</ul>
        </li>

        <li>
            <a  href="project-report.html"> Project Report</a>
            <ul class="sub-menu">
    <li>
                    <A       href="MBA-Projects.html" style="color: #FFFFFF; font-size: 14px">MBA Projects</A>
                </li>
                <li>
                    <A      href="MTech-Projects.html" style="color: #FFFFFF; font-size: 14px">M.Tech Projects</A>
                </li>
                <li>
                    <A        href="ngo-project.html" style="color: #FFFFFF; font-size: 14px">NGO Project</A>
                </li>
                <li>
                    <A        href="Corporate-Project.html" style="color: #FFFFFF; font-size: 14px">Corporate Project</A>
                </li>
                <li>
                    <A        href="syndicated-Project.html" style="color: #FFFFFF; font-size: 14px">Syndicated Project</A>
                </li>
            </ul>
        </li>
        <li>
            <A href="faq.html" >FAQS</A>
                <ul class="sub-menu">
                    <li>
                        <a href="faq.html"  style="color: #FFFFFF; font-size: 14px">FAQ</a>

                    </li>
                <li>
                    <A      href="academic-integrity-policy.html" style="color: #FFFFFF; font-size: 14px ">Academic Integrity Policy</A>
                </li>
                
                
                    <li>
                    <a  href="why-dissertation-india.html" style="color: #FFFFFF; font-size: 14px "> Why Us</a>
                    </li>

                
                    <li>
                        <a href="set-onlinemeeting.html"  style="color: #FFFFFF; font-size: 14px">Set up an online meeting</a>


                    </li>
                    <!--<li>
                        <a href="/testimonial.aspx"  style="color: #FFFFFF; font-size: 14px">Testimonials</a>
                    </li>-->
                

                </ul>
            </li>
    <LI class="has-child">
        <A href="#" >LIBRARY</A>
        <UL class="submenu">
        <LI class="submenu-item">
            <a href="search.html" style="color: #FFFFFF; font-size: 14px">Article/Research paper</a>
        </LI>
        <LI class="submenu-item">
            <a href="GenericErrorPage9e08.html" style="color: #FFFFFF; font-size: 14px">Thesis/Desertation</a>
        </LI>
        </UL>
    </LI>
    <li>
        <A href="ContactUs.html" >Contact</a>
        
        </li>
    <li>
        <a href="career.html"  style="color: #FFFFFF">Join Us</a>
    </li>
    <li>
        <form>
            <input type="text" name="search" >
    </li>
    <li>
        <input type="submit" class="searchButton" value="Search" name="submit">
        </form>
    <li>
        <a href="/login"  style="color: #FFFFFF">Login</a>
    </li>
    </ul>
</nav>
</nav>
</div>
@yield('content')
    </body>
</html>