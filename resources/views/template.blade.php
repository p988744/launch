<!DOCTYPE html>
<html lang="zh-tw">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>今天吃什麼？</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/creative.css') }}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/"><i class="fa fa-cutlery"></i> / 今天吃什麼？</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="/restaurants">編輯餐廳</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#services">如何篩選</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#portfolio">隨選推薦</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="/#contact">聯絡我們</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    @yield('header')

    @yield('content')


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">願意為大家出一份力嗎？</h2>
                    <hr class="primary">
                    <p>不論您是程式高手、神奇的資料科學家、又或者是喜歡到處品嚐的老饕<br>只要您願意為煩惱吃什麼的廣大民眾出一份心力，歡迎與我們聯繫！</p>
                </div>
                <!-- <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div> -->
                <div class="col-lg-12 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:p988744@gmail.com">p988744@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

     <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>有什麼不對勁的嗎？</h2>
                <a href="/coming" class="btn btn-default btn-xl wow tada">告訴我們您的寶貴建議</a>
            </div>
        </div>
    </aside>

    

    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.fittext.js') }}"></script>
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('js/creative.js') }}"></script>

</body>

</html>
