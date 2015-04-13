<!DOCTYPE html>

<html>
<head>
    <meta charset = "utf-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <title>ŚDM Wrocław 2016</title>
    {{ HTML::style('css/style.css'); }}
    @yield('header')
</head>

<body>

<div id="main">
    <header>
        <div id="logo">
            <div id="logo_text">

         
            </div>
        </div>
        <nav>
            <div id="menu_container">
                <ul class="sf-menu" id="nav">
                    <li><a href="http://zpi.dev/index.php/index">Aktualności</a></li>
                    <li><a href="http://zpi.dev/index.php/about">O ŚDM</a></li>
                    <li><a href="http://zpi.dev/index.php/grupa/addgroup">Zgłoś grupę</a></li>
                    <li><a href="http://zpi.dev/index.php/nocleg/places">Miejsca noclegowe</a></li>
					<li><a href="http://zpi.dev/index.php/search">Wyszukaj</a></li>
                    <li><a href="http://zpi.dev/index.php/contact">Kontakt</a></li>
                    <li><a href="http://zpi.dev/index.php/login">Zaloguj się</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div id="site_content">
        <div id="sidebar_container">
            <div class="sidebar">
				<h1>ŚDM Kraków 2016</h1>
				<a href="http://www.krakow2016.com"><img src="http://www.krakow2016.com/common/images/logos/logo_pl.png"/></a>
            </div>
            <div class="sidebar">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">First Link</a></li>
                    <li><a href="#">Another Link</a></li>
                    <li><a href="#">And Another</a></li>
                    <li><a href="#">Last One</a></li>
                </ul>
            </div>
            <div class="sidebar">
                <h3>More Useful Links</h3>
                <ul>
                    <li><a href="#">First Link</a></li>
                    <li><a href="#">Another Link</a></li>
                    <li><a href="#">And Another</a></li>
                    <li><a href="#">Last One</a></li>
                </ul>
            </div>
        </div>
@yield('content')

    </div>
        <div id="scroll">
            <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top"/></a>
        </div>
        <footer>

            <p> <a href="http://zpi.dev/index.php/index">Aktualności</a> |
                <a href="http://zpi.dev/index.php/about">O ŚDM</a> |
                <a href="http://zpi.dev/index.php/grupa/addgroup">Zgłoś grupę</a> |
                <a href="http://zpi.dev/index.php/nocleg/places">Nasze miejsca noclegowe</a> |
                <a href="http://zpi.dev/index.php/contact">Kontakt</a>
            </p>

        </footer>
    </div>
    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
    <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('ul.sf-menu').sooperfish();
            $('.top').click(function () {
                $('html, body').animate({scrollTop: 0}, 'fast');
                return false;
            });
        });
    </script>

</body>
</html>