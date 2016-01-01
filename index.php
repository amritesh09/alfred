<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Mentored Research Equity Research Initiative - the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities.">
    <meta name="keywords" content="Mentored Research Equity Research Initiative - the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities. ERI and Technical Analysis by Mentored-Research.">
    <meta name="author" content="Sagar Anand, Mentored-Research Tech Team">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
	<link rel="icon" href="img/logo.png" type="image/x-icon" />

    <title>Mentored-Research</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- for jQuery -->
    <script src="js/jquery-1.7.1.min.js"></script>

    <!-- for my own custom jQuery Scripts -->
    <script src="js/customScripts.js"></script>

    <!-- for the social buttons coming from Bootstrap -->
    <link href="css/bootstrap-social.css" rel="stylesheet">    

    <!-- the latest jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- for the scrolly thing -->
    <script src="js/jquery.scrolly.min.js"></script>

    <!-- For validation of the Form input elements -->
    <script src="js/validator.min.js"></script>

    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>

    <script src="js/jquery.lighter.js" type="text/javascript"></script>
	<link href="css/jquery.lighter.css" rel="stylesheet" type="text/css" />
   
    <style type="text/css">

        @font-face {
            font-family: regularText;
            src: url('fonts/AlegreyaSansSC-Regular.ttf');
        }

        @font-face {
            font-family: boldText;
            src: url('fonts/AlegreyaSansSC-Bold.ttf');
        }

        @font-face {
            font-family: lightText;
            src: url('fonts/AlegreyaSansSC-Light.ttf');
        }

        @font-face {
            font-family: mediumText;
            src: url('fonts/AlegreyaSansSC-Medium.ttf');
        }

        @font-face {
            font-family: writingText;
            src: url('fonts/SEGOEUIL.ttf');
        }

        #alertMsg {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;
            font-family: boldText;
            position: fixed;
        }

        #popup {
        	width: 60%;
            z-index:999999; 
            margin: 2% 2% 2% 2%;    
            font-family: boldText;
            position: fixed;
        }

        footer {
        	background: rgb(233, 233, 233);
        }

        body {
        	background: url('img/back-pattern.jpg') repeat;
        }

        #btnSampleReport {
			cursor: pointer;
		}
		#btnReadMore {
			cursor: pointer;	
		}

         /*for the smallest phones*/ 
        @media (max-width:767px){
			.carousel-caption h2 {
	        	font-family: writingText;
	        }

	        .carousel-caption p {
	        	font-family: writingText;
	        	font-weight: 400;
	        	font-size: 0.4em;
	        }   

		    #headerCarousal {
		    	background: url('img/pattern-grid-dark.gif') repeat;
		    	margin-top: 30px;
		    }

		    .recoDiv {
		    	height: 400px;
		    }
		    .recoDiv p {
		    	font-size: 0.8em;
		    }
        }   

        /*for the tablets and all*/
        @media (min-width:768px){
        	.carousel-caption h2 {
	        	font-family: writingText;
	        }

	        .carousel-caption p {
	        	font-family: writingText;
	        	font-weight: 400;
	        	font-size: 1.0em;
	        }  

		   	#headerCarousal {
		    	background: url('img/pattern-grid-dark.gif') repeat;
		    	margin-top: 30px;
		    }

		    .recoDiv {
		    	height: 400px;
		    }
		    .recoDiv p {
		    	font-size: 0.8em;
		    }
        }

        /*for medium screens and desktops*/
        @media (min-width:992px){
            .carousel-caption h2 {
	        	font-family: writingText;
	        }

	        .carousel-caption p {
	        	font-family: writingText;
	        	font-weight: 700;
	        	font-size: 1.2em;
	        }
	        .contentSection {
				margin-top: -100px;
				background: url('img/back-pattern.jpg') repeat;
		    }  

		    #headerCarousal {
		    	margin-top: -80px;
		    	background: url('img/pattern-grid-dark.gif') repeat;
		    } 

		    .recoDiv {
		    	height: 250px;
		    }
		    .recoDiv p {
		    	font-size: 1em;
		    }
        }

        /*for large screens*/ 
        @media (min-width:1200px){
        	 .carousel-caption h2 {
	        	font-family: writingText;
	        }

	        .carousel-caption p {
	        	font-family: writingText;
	        	font-weight: 700;
	        	font-size: 1.2em;
	        }
	        .contentSection {
				margin-top: -100px;
				background: url('img/back-pattern.jpg') repeat;
		    }   

		    #headerCarousal {
		    	margin-top: -80px;
		    	background: url('img/pattern-grid-dark.gif') repeat;
		    }

		    .recoDiv {
		    	height: 250px;
		    }
		    .recoDiv p {
		    	font-size: 1em;
		    }
        }

        .recoImg {
        	float: left;
        	margin-right: 1%;
        }

        #presence-slide {
            height: 250px;
            /*background: blue;*/
            overflow:hidden;
        }

        #presence-slide ul {
            position:relative;
            list-style:none;
            width: 11620px;
            height: 100%;
            overflow:hidden;
        }

        #presence-slide ul li {
            float:left;
            width: 375px;
            margin-right: 12px;
            height: 100%;
        }

        #slider-nav img {
            cursor:pointer;
        }

        .hiddenMenu {
			background: url(img/pattern-grid-dark.gif) repeat; 
			height: auto; 
			position: fixed; 
			z-index: 9;
		}

		.shownMenu {
			background: url(img/pattern-grid-dark.gif) repeat; 
			height: auto; 
			position: fixed; 
			z-index: 9;
		}			

		.hiddenMenu>ul {
			margin: 60% 10% 80% 10%;
			background: transparent;
		}
		.shownMenu>ul {
			margin: 60% 10% 80% 10%;
			background: transparent;
		}

		.list-group {
			border: none;
		}
		.list-group-item {
            background: url(img/pattern-grid-dark.gif) repeat;
            /*border: none;
            border-top: solid 1px gray;*/
        }
        .list-group-item a {
            font-size: 1.2em;
            color:white;
            text-transform:uppercase;
            font-family: boldText;

        }
        .list-group-item:hover {
            opacity: 0.7;
        }

        #btnMenu {
        	cursor: pointer;
        }

        .dropMenuLink {
        	cursor: pointer;
        }

        .ERIContent {
        	text-align: justify;
        }

    </style>

	<script type="text/javascript">
        
        $(document).ready(function() {

            var alertMsg = $('#alertMsg').fadeOut();
            var popup = $('#popup').fadeOut();    

            $('#btnExitPopup').on('click', function() {
                popup.children('p').remove();
                popup.fadeOut();
                return false;
            });

            // for checking the query string and all.
	    	var qs = getQueryStrings();

    		// for the scrolly thing.
    		$('.scrolly').scrolly();

    		// for the read more link
    		$('#btnReadMore').on('click', function() {
            	window.open("docs/MRERI.pdf", "_blank");
            	return false;
            });

            //for opening the sample report.
            $('#btnSampleReport').on('click', function() {
            	window.open("docs/SampleFinalReport.pdf", "_blank");
            	return false;
            });

            // for opening the Tech Analysis report
            $('#btnTechReadMore').on('click', function() {
            	window.open("docs/TechnicalAnalysis.pdf", "_blank");
            	return false;
            });

			//for the login button on the rightMenu
			$('#btnLoginMenu').on('click', function() {
				window.location.href = "http://mentored-research.azurewebsites.net/Login2.aspx";
				return false;
			});

        });    // end of ready function.

	</script>

	<script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-41267406-1', 'auto');
        ga('send', 'pageview');
	</script>

</head>

<body id="page-top" class="index">

    <div id="alertMsg" class="alert alert-warning" role="alert">
    </div>

    <div id="popup" class="alert alert-danger" role="alert">
          <button type="button" class="close" id="btnExitPopup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #070716;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
            	
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll scrolly" href="#page-top">Mentored Research</a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="scrolly" href="#page-top"></a>
                    </li>
                    <li>
                    <!-- <a id="btnMenu" class="hidden-sm hidden-xs" data-toggle="dropdown" aria-expanded="false">Menu</a> -->
                    	<div class="btn-group">
                			<button type="button" class="btn btn-lg btn-primary dropdown-toggle hidden-sm hidden-xs" data-toggle="dropdown" aria-expanded="false">
                				Menu   <span class="caret"></span>
                			</button>
							<ul class="dropdown-menu dropMenu" role="menu">
								<li><a class="scrolly" href="#ERISection" style="color: black;">Equity Research Initiative</a></li>
								<li><a class="scrolly" href="#techAnalysisSection" style="color: black;">Technical Analysis</a></li>
								<li><a class="scrolly" href="#sayingSection" style="color: black;">Our Collaborations</a></li>
								<li><a class="scrolly" href="#networkSection" style="color: black;">Our Network</a></li>
								<li class="divider"></li>
								<li><a href="http://mentored-research.com/contact" style="color: black;" class="dropMenuLink">Contact Us</a></li>
								<li><a href="http://mentored-research.com/contact" style="color: black;" class="dropMenuLink">Be a Campus Ambassador</a></li>
							</ul>
                    	</div>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com/Compendium">Compendium</a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com/MRConnect">M-R Connect</a>
                    </li>
                    <li>
                    	<a href="http://mentored-research.com/contact">Contact Us</a>
                    </li>
                     <li>
                    	<a href="http://mentored-research.com/login">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="contentSection" id="headerCarousal">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/backFinal.jpg" class="headerImg col-lg-12">
					<div class="carousel-caption">						
						<h2>
							Who we are
						</h2>
						<p>
							An organization run by alumni of BITS Pilani University, working to increase access to educational resources to determined students aspiring to explore the world of Finance. 
						</p>
					</div>
				</div>

				<div class="item">
					<img src="img/backFinal2.jpg" class="headerImg col-lg-12">
					<div class="carousel-caption">						
						<h2>
							Mission
						</h2>
						<p>
							To create a center of excellence in education in the field of Finance and Economics.
						</p>
					</div>
				</div>

				<div class="item">
					<img src="img/backFinal3.jpg" class="headerImg col-lg-12">
					<div class="carousel-caption">						
						<h2>
							Specialities
						</h2>
						<p>
							Technical Analysis, Fundamental Analysis, Financial Modeling using MS-Excel, Valuation Techniques, Equity Research, Research Report writing, Interactive sessions with experienced industry experts. 
						</p>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>   <!-- end of carousal -->
    </section>

    <section id="ERISection" class="contentSection">
		<div class="container">
			<div class="col-lg-8 col-md-8" id="ERIContent">
				<h2>
					Equity Research Initiative
				</h2>
				<p>
					Equity Research Initiative, the flagship program of Mentored-Research, is a 6 week course designed to help participants in the art of smart and logical investing. This is done by dealing with an application-based approach to analyses of securities. 
					<br /><br />
					In operations since 2010, 350+ students from BITS Pilani University, Indian Institute of Technology, Delhi, and other colleges of repute have been a part of this program. 
					<br /><br />
					Students are taught how to analyze businesses and their respective sectors, screen for comparable companies, read financial statements, use ratio analysis techniques, and construct valuation models. 
					<br /><br />
					With committed mentors to guide them through the program, the students are given dedicated support through carefully designed resource material, in sync with common industry practices.Students are also given the opportunity to interact and network with individuals with industry exposure via interactive webinars/chat sessions. 
					<a href="#" id="btnReadMore">Read More...</a>
					<br /><br />
					<!-- Applications for the next edition of Equity Research Initiative are now open. For Details on the next edition, <a href="http://mentored-research.com/mail/attachment/attachment.png" target="_blank">Click here</a>. -->
                    <b>Applications now open for Spring 2016 Edition, commencing on 13th February, 2016.</b>
                    <br /><br />
                    <b>See our pricing below:</b>
                    <br />
                    <div class="table-responsive">
                   	<table class="table table-hover table-bordered"data-toggle="table">
                   		<thead>
	                   		<tr>
	                   			<th></th>
	                   			<th>1/1/2016 to 31/1/2016</th>
	                   			<th>1/2/2016 to 12/2/2016</th>
	                   		</tr>
                   		</thead>
                   		<tbody>
                   			<tr>
                   				<td><b>Individual</b></td>
                   				<td>₹3500</td>
                   				<td>₹3750</td>
                   			</tr>
                   			<tr>
                   				<td><b>Team</b></td>
                   				<td>₹6000</td>
                   				<td>₹6500</td>
                   			</tr>
                   		</tbody>
                   	</table>
					</div>
					<br />
					<div style="color:#bf0d00">Take advantage of the early bird discount!!</div>
					<br/>
                    <a href="http://mentored-research.com/payment/" type="button" class="btn btn-warning btn-lg">Enroll Now</a>	
                    <br /><br />
                    Mail us at <code>pay@mentored-research.com</code> for details on <b> <kbd> Bank Transfer Payment</kbd></b>.
				</p>
			</div>

			<div class="col-lg-4 col-md-4"  style="padding-top: 30px;">
				 <button id="btnFAQ" class="btn btn-default btn-lg">
                    <b>ERI's  FAQs</b>
                </button>

                <div>
                	<h3 class="page-header" style="color:black;">Sample Components</h3>
	                <embed 	id="sampleVideo"
	                		src="http://www.youtube.com/v/WACT3vDr9fU?rel=0"
	                		type="application/x-shockwave-flash" />
	                <hr />
	                <a style="float:left;color:black;" id="btnSampleReport" >View Sample Report</a>
                </div>

			</div>
		</div>
		<a name="tap"></a>
    </section>


    <section class="contentSection" id="techAnalysisSection">
    	<div class="container">
    		<div class="col-lg-8 col-md-8">
				<h2>
					Technical Analysis
				</h2>
				<p>
					The program <b>Technical Analysis</b> is designed to impart skills that will enable students to trade in the stock markets. The students are empowered to forecast future price activity of stocks based on historic market data, price and volume information. Understanding the tools of technical analysis is crucial for a short-term investor, professionally, as a day trader and momentum trader, or personally as well. 
					<br /><br />
					Mentored-Research is happy to be collaborating with Mr. Balkrishna Sadekar, Founder, Profitable Candlesticks Charting, LLC. A member of the Technical Securities Analyst Association, the leading authority of Technical Analysis in United States, Balkrishna brings to the fore his real life experience. In course of this program, he will guide the participants through the popular technical trading methods, and their applications through assignments.
					<a href="#" id="btnTechReadMore">Read More...</a>
                    <br /><br />
                    <b>Applications now open for Spring 2016 Edition, commencing on 10th March, 2016. For full details on next edition, <a href='img/Poster_15_2_Fall.png' target="_blank">Click Here</a></b>
                    <br /><br />
                    <a href="http://mentored-research.com/payment/" type="button" class="btn btn-warning btn-lg">Enroll Now</a>
                    <br />
                    	<b><div id="getting-started" class="text-info"></div></b>
						<script type="text/javascript">
						  $('#getting-started').countdown('2016/2/10', function(event) {
						    $(this).html(event.strftime('Get ₹500 off if you register in %D days %H:%M:%S hrs'));
						  });
						</script>
                    <br /><br />
                    Mail us at <code>pay@mentored-research.com</code> for details on <b> <kbd> Bank Transfer Payment</kbd></b>.
				</p>
			</div>

			<div class="col-lg-4 col-md-4"  style="padding-top: 70px;">
				<a href="img/tap-poster.jpg" data-lighter>
					<img src="img/tap-poster.jpg" class="img-responsive">
				</a>
			</div>
    	</div>
    </section>

    <section class="contentSection" id="sayingSection">
    	<div class="container">
			<h2>
				What people are saying about us?	    	
		    </h2>
    	</div>

        <!--this is for the second carousal!-->
        <div id="recoCarousal" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" >
                <li data-target="#recoCarousal" data-slide-to="0" class="active" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="1" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="2" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="3" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="4" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="5" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="6" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="7" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="8" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="9" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="10" style="background: gray;"></li>
                <li data-target="#recoCarousal" data-slide-to="11" style="background: gray;"></li>
            </ol>
            <div class="carousel-inner" >   <!-- style="height:225px;" -->
                <div class="item active recoDiv">
                    <div class="container" style="padding: 2% 2% 2% 2%;">
                        <img src="RecoImages/savil.png" style="max-width:150px; max-height: 170px;" class="recoImg" />
                        <p>
                            “I have been associated with the program first as a student, and then as a mentor. I must say this program helped me immensely, not only by exposing me to some of the key concepts of fundamental equity research, but also by helping me understand the career opportunities one could pursue in investment banking domain.”
                        </p>
                        <span>
                            <b>Savil Gupta, Analyst at Credit Suisse, Student, IIM Ahemadabad</b>
                        </span>
                    </div>
                </div>
                <div class="item recoDiv">
                    <div class="container" style="padding: 2% 2% 2% 2%;">
                        <img src="RecoImages/chirag.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
                        <p>ERI is a perfect mix of theory & application. I personally have gained a lot from it- from being a student to director, solving challenges that you come across while analyzing a real firm actually enrich the learning experience. Be it recording video lectures on ratio analysis or taking class room lectures on valuation, it has helped me further polish my concepts which I believe played an important role in my success at the Credit Suisse HOLT Valuation Challenge 2012. Highly Recommended!</p>
                        <span>
                            <b>Chirag Sapra, Investment Banking Analyst- Financial Advisory, Avendus Capital</b>
                        </span>
                    </div>
                </div>
	            <div class="item recoDiv">
	                <div class="container" style="padding: 2% 2% 2% 2%;">
	                    <img src="RecoImages/prateek.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
	                    <p>Equity Research Initiative (ERI) provides a good learning platform to someone who intends to pursue his/her career in the domain of Finance. It provides a good exposure to basic concepts of fundamental analysis and valuation through course material and various assignments. Interaction with industry experts is another plus. I pursued ERI as a mentee in my fourth year.</p>
	                    <span>
	                        <b>Prateek Gupta, Analyst - Bain Capability Center (BCC) at Bain & Company</b>
	                    </span>
	                </div>
	            </div>
	            <div class="item recoDiv">
	                <div class="container" style="padding: 2% 2% 2% 2%;">
	                    <img src="RecoImages/radha.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
	                    <p>Equity research initiative (ERI) uses educational resources and interactions from industry practitioners and offers students a unique opportunity to complete an equity initiation project. I have been associated with ERI as a mentee, mentor and director and it has been an enriching experience. It has been great value addition and given me an opportunity to learn about equity valuation and technical analysis of stocks. I would recommend it for my fellow students interested in the field of finance</p>
	                    <span>
	                        <b>Radha Krotthapalli, Student, IIM Calcutta </b>
	                    </span>
	                </div>
	            </div>
	            <div class="item recoDiv">
	            <div class="container" style="padding: 2% 2% 2% 2%;">
	                <img src="RecoImages/aksha.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
	                <p>Equity Research Initiative is a great way for connecting students with financial industry professionals. It gave me an exposure to some of the contemporary practices in the industry. It was also a great way for getting good mentoring, giving me a more realistic idea of the career paths and options in the industry. Moreover it also helped build a network wherein I can still reach out to my colleagues and mentors for suggestions and advice. </p>
	                <span>
	                    <b>Aaksha Meghawat, Manager, Analytics at Sutherland Global Services</b>
	                </span>
	            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/bhawika.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>Finance being my major, ERI helped me to apply my theoretical knowledge in the practical world.It gave me exposure to the finance fundamentals, stock market, to analyse the movement and study the same in depth. The videos, assignments and chat sessions were very useful. ERI helped me to relate and grasp financial valuation models taught in the college easily and effectively.</p>
		                <span>
		                    <b>Bhawika Jain, Business Analyst at Credit Suisse</b>
		                </span>
		            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/anirudh.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>Participating as a student in the second edition of Mentored-Research's equity research initiative was one of the most productive things I'd done while in college. The program gave me as solid a grounding in basic financial analysis as I could have asked for, and I believe I became a more discerning investor as a result.</p>
		                <span>
		                    <b>
		                        Anirudh Nimmagadda, Analyst at Probe Equity         
		                    </b>
		                </span>
		            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/radhev.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>Its an excellent opportunity for students to get an idea of how their theoretical knowledge can be applied in the assessment and analysis for a company . The course structure is very well designed. This is also a great platform for students to interact with other experienced and learned professionals.</p>
		                <span>
		                    <b>Radhev Paleti, Sr. Business Analyst at Tata Consultancy Services</b>
		                </span>
		            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/aviral.jpg" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>I have participated in the program as both a mentor and a student. Mentored-Research's equity research initiative helps those looking forward to a career in finance by building a strong foundation through development of practical understanding of basic financial concepts. I would recommend it to all those who are interested in exploring the field of finance.</p>
		                <span>
		                    <b>Aviral Utkarsh, Masters In Management Student at LBS</b>
		                </span>
		            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/narasimhan.png" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>A brilliant opportunity for anyone who wants to learn equity research. Whether you're a student of engineering or a working professional, this program is bound to teach you how to value a company - right from the basics. Personally, it was one of the best things that ever happened to me; it gave me exposure to the field of finance and helped me realize my interest in the field.</p>
		                <span>
		                    <b>Narasimhan Viswanathan, Zonal Representative at ASME</b>
		                </span>
		            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/akanshya.jpg" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>At the very outset, I want to thank the team for not only letting me be a part of this programme, but also letting me express my gratitude for bringing up such an intensive course into our curriculum amidst the not-so-boring college life. A big thank you to the team for the constant support. Rohit, Navendu you have been truly awesome guides. Being a student of Economics and aspiring towards Finance, this course has helped me achieve the required knowledge and skills in leaps and bounds. I would definitely recommend it to anyone aspiring to enter the financial sector.</p>
		                <span>
		                    <b>Akanshya Hazarika, Lady Shri Ram College, Delhi University </b>
		                </span>
		            </div>
		        </div>
		        <div class="item recoDiv">
		            <div class="container" style="padding: 2% 2% 2% 2%;">
		                <img src="RecoImages/ankit.jpg" style="max-width:150px; max-height: 170px;" class="recoImg"/>
		                <p>ERI is a basic course to give you practical and outstanding understanding of valuing a company. It has provided me a deep understanding of the world of finance and in particular Equity Research. It's not just a course, but is also a great way to build a rich network with peers and industry professionals.</p>
		                <span>
		                    <b>Ankit Kumar Saw, IIT Kharagpur</b>
		                </span>
		            </div>
		        </div>
	    	</div>
    	</div><!-- /.carousel -->
    </section>

        <section class="contentSection hidden-sm hidden-xs" id="presenceSection">
    	<div class="container">

    		<h2>
    			Our Presence
    		</h2>

    		<div id="presence-slide">
                <ul>
                    <li>
                        <img src="img/5.png" />
                    </li>
                    <li>
                        <img src="img/7.png" />
                    </li>
                    <li>
                        <img src="img/3.png" />
                    </li>
                    <li>
                        <img src="img/4.png" />
                    </li>
                    <li>
                        <img src="img/1.png" />
                    </li>
                    <li>
                        <img src="img/6.png" />
                    </li>
                    <li>
                        <img src="img/2.png" />
                    </li>
                    <li>
                        <img src="img/5.png" />
                    </li>
                    <li>
                        <img src="img/7.png" />
                    </li>
                </ul>
            </div>  <!--/.presence-slide-->

            <div id="slider-nav" class="col-md-5 col-md-offset-4">
                <!--<button id="btn1"></button>
                <button id="btn2"></button>
                <button id="btn3"></button>-->
                <img id="btn1" src="img/presence-button.png" />
                <img id="btn2" src="img/presence-button.png" />
                <img id="btn3" src="img/presence-button.png" />
                <img id="btn4" src="img/presence-button.png" />
                <img id="btn5" src="img/presence-button.png" />
                <img id="btn6" src="img/presence-button.png" />
                <img id="btn7" src="img/presence-button.png" />
            </div>
    	</div>
    </section>

        <script type="text/javascript">
        $(document).ready(function () {

            var list = $('#presence-slide ul');
            var pos = list.position();
            $('#btn1').on('click', function () {
                //alert($('#btn1').attr('src').toString());
                pos = list.position();
                if (pos.left == 0) {
                    
                }
                else {
                    list.animate({
                        'left': '0px'
                    }, 700);
                }
                return false;
            });

            //for the second button click
            $('#btn2').on('click', function () {
                pos = list.position();
                if (pos.left == -400) {

                }
                else {
                    list.animate({
                        'left': '-400px'
                    }, 700);
                }
                return false;
            });

            //for the third button click
            $('#btn3').on('click', function () {
                pos = list.position();
                if (pos.left == -790) {

                }
                else {
                    list.animate({
                        'left': '-790px'
                    }, 700);
                }
                return false;
            });

            //for the 4th button click
            $('#btn4').on('click', function () {
                pos = list.position();
                if (pos.left == -1180) {

                }
                else {
                    list.animate({
                        'left': '-1180px'
                    }, 700);
                }
                return false;
            });

            //for the 5th button click
            $('#btn5').on('click', function () {
                pos = list.position();
                if (pos.left == -1565) {

                }
                else {
                    list.animate({
                        'left': '-1565px'
                    }, 700);
                }
                return false;
            });

            //for thr 6th button click
            $('#btn6').on('click', function () {
                pos = list.position();
                if (pos.left == -1950) {

                }
                else {
                    list.animate({
                        'left': '-1950px'
                    }, 700);
                }
                return false;
            });

            //for the 7th button click
            $('#btn7').on('click', function () {
                pos = list.position();
                if (pos.left == -2340) {

                }
                else {
                    list.animate({
                        'left': '-2340px'
                    }, 700);
                }
                return false;
            });
        });
    </script>

    <section class="contentSection" id="networkSection">
    	<div class="container">
    		<h2>
    			Our Network
    		</h2>
    	</div>
    	<img src="img/map1.jpg" style="width: 100%;" />
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Mentored-Research 2015</span>
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">   <!-- TODO -->
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/pages/Mentored-Researchs-Equity-Research-Initiative/313860081992430?ref=br_tf" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/2217419?trk=tyah&trkInfo=tarId%3A1401993298521%2Ctas%3Amentored%2Cidx%3A1-3-3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> 
    <script src="js/classie.js"></script> 
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="js/agency.js"></script> -->

</body>

</html>
