<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Puzzles</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9d4edd">
    <meta name="title" content="Portfolios">
    <meta name="description" content="Portfolios">
    <meta name="keywords" content="Best Digital Marketing and IT Consulation and Service Company in Muzaffarpur, Best Webdevlopment company in bihar, Best Digital Marketing company in bihar, Best Graphic design in Bihar, Best Animation Company in Bihar Muzaffarpur">
    <meta property="og:title" content="Portfolios">
    <meta property="og:image" content="https://www.thepuzzles.tech//assets/image/logo.png">
    <meta property="og:image:alt" content="The Puzzles">
    <meta property="og:description" content="Portfolios">
    <meta property="og:url" content="https://www.thepuzzles.tech" />
    <meta property="og:site_name" content="The Puzzles" />
    <meta property="og:locale" content="ne_NP" />
    <meta name="author" content="The Puzzles" />
    <meta name="coverage" content="Worldwide" />
    <meta name="Robots" content="INDEX,FOLLOW" />
    <meta name="Googlebot" content="index, follow" />
    <meta property="og:type" content="article" />
      <!--logo-->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/image/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/image/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/image/favicon-16x16.png">
<link rel="manifest" href="assets/image/site.webmanifest">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        /* user-select: none; */
        font-family: 'Poppins', sans-serif;
        transition: 0.5s;
    }

    body {
        width: 100%;
        height: 100vh;
    }

    /* logo brand name style start */
    .navbar-brand span:nth-child(2) {
        color: rgb(255, 136, 0);
        font-family: serif;
        font-size: 30px;
        font-weight: bold;
        position: relative;
    }

    .navbar-brand span:nth-child(3) {
        font-size: 25px;
        color: green;
        font-family: monospace;
    }

    .navbar-brand img {
        margin-bottom: 5%;
    }

    /* logo brand name style end */
    /* nav style start */
    .bg-primary {
        background-color: #ffffff !important;
        font-size: 13px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .navbar-dark .navbar-nav .nav-link {
        color: #555555 !important;
    }

    .navbar-dark .navbar-brand {
        color: #555555 !important;
        margin-left: 20px;
    }

    .navbar-toggler-icon {
        background-color: black;
    }

    .navbar-nav li ul.dropdown-menu {
        font-size: 13px;
    }

    .dropdown-menu {
        border-top: 2px solid #72c02c;
    }

    .nav-item a:hover {
        color: red !important;
    }

    /* Remove border from toggler */
    .navbar-toggler {
        border: 0;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none;
        box-shadow: none;
        border: 0;
    }

    /* Lines of the Toggler */
    .toggler-icon {
        width: 30px;
        height: 3px;
        background-color: #e74c3c;

        display: block;
        transition: all 0.2s;
    }

    /* Adds Space between the lines */
    .middle-bar {
        margin: 5px auto;
    }

    /* State when navbar is opened (START) */
    .navbar-toggler .top-bar {
        transform: rotate(45deg);
        transform-origin: 10% 10%;
    }

    .navbar-toggler .middle-bar {
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .navbar-toggler .bottom-bar {
        transform: rotate(-45deg);
        transform-origin: 10% 90%;
    }

    /* State when navbar is opened (END) */

    /* State when navbar is collapsed (START) */
    .navbar-toggler.collapsed .top-bar {
        transform: rotate(0);
    }

    .navbar-toggler.collapsed .middle-bar {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .navbar-toggler.collapsed .bottom-bar {
        transform: rotate(0);
    }

    /* State when navbar is collapsed (END) */

    /* Color of Toggler when collapsed */
    .navbar-toggler.collapsed .toggler-icon {
        background-color: #777777;
    }

    /* nav style end */


    /* header style start */
    .head-main h3 {
        text-align: center;
        color: #000000;
        margin-top: 2%;
        font-family: 'Maven Pro', sans-serif;
        font-weight: 900;
        font-size: 40px;
    }

    /* header style end */

    /* box style start */
    .work-main {
        padding: 2%;
        margin-top: 4%;
        background-color: #ffffff;
    }

    .box {
        display: flex;
    }

    .small-box {
        display: flex;
        flex-direction: column;
        margin: 10px;
        align-items: center;
    }

    .small-box img {
        width: 100%;
        height: 100%;
        border: 2px solid #555555;
        border-radius: 6px;
    }

    .small-box:hover {
        transform: scale(1.5);
    }

    /* box style end */

    /* hire section start */
    .hire-us {
        background: #72c02c;
        padding: 30px;
        text-align: center;
        margin-top: 1%;
        margin-bottom: 7%;
    }

    .hire-box {
        margin-top: 7px;
        margin-bottom: 4px;
    }

    .hire-main h2 {
        font-size: 27.5px;
        color: mintcream;
        font-family: cursive;
        margin-bottom: 10px;
        text-align: initial;
    }

    .hire-second {
        color: cornsilk;
        font-size: 30px;
        font-weight: bolder;
        font-family: 'Maven Pro', sans-serif;
        text-align: initial;
        margin-top: 2%;
    }

    .hire-box a {
        text-decoration: none;
        color: #fff;
    }

    .hire-box button {
        cursor: pointer;
        border: 1px solid #fff;
        background-color: transparent;
        height: 45px;
        width: 155px;
        font-size: 1em;
        border-radius: 52px;
        margin-top: 3%;
        transition: .2s ease;
    }

    .hire-box button:hover {
        background-color: rgb(82, 77, 77);
        color: snow;
    }

    /* hire section end */

    /* subscription section start */
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');

    .subscription {
        padding: 4%;
        background-color: #72c02c;
    }

    .subscription-content {
        display: flex;
    }

    .inputform {
        display: flex;
        align-items: center;
    }

    ::placeholder {
        color: #ffffff;
    }

    .inputform button {
        height: 50px;
        width: 66px;
        border: 1px solid #fff;
        outline-color: #fff;
        background-color: transparent;
    }

    .inputform button:hover {
        background-color: #000;
    }

    .title {
        font-family: 'Maven Pro', sans-serif;
        color: #ffffff;
        font-size: 24.5px;
        font-weight: 100;
        margin-right: 18%;
    }

    #email {
        width: 93%;
        height: 50px;
        font-size: 1.0625rem;
        padding-left: 13px;
        border: 1px solid #fff;
        color: #fff;
        background-color: transparent;
        outline-color: #fff;
    }

    /* subscription section end */
    /* Footer style*/
    .footer {
        background-color: rgba(0, 0, 0, .9);
        color: rgba(255, 255, 255, .8);
        padding-top: 4.28571rem;
        padding-bottom: 4.28571rem;
        font-size: 14px;
    }

    .container {
        max-width: 100%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .footer-logo img {
        max-width: 75%;
        margin-top: -8%;
    }

    .footer-content p {
        margin-left: 1rem;
        -webkit-font-smoothing: antialiased;
        margin-bottom: 3rem;
    }

    /* Footer-social style start*/
    .social {
        margin: 20px 0 20px 0;
        display: flex;
    }

    .social a {
        padding: 0 2px;
        color: #d9d9d9;
    }

    .social a span {
        height: 40px;
        width: 40px;
        background: #1a1a1a;
        line-height: 40px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .fa-facebook-f:before {
        content: "\f39e";
    }

    .social a span:hover {
        background: #f12020;
    }

    /* Footer-social style end*/

    .footer-wrap.footer-space {
        padding-left: 17px;
    }

    .container h3 {
        margin-top: 20px;
        color: rgba(255, 255, 255, .8);
        position: relative;
        display: inline-block;
        margin: 0;
        padding-bottom: 0.71429rem;
        border-bottom: 1px solid #72c02c;
        font-weight: 200;
    }

    .footer ul li {
        padding-top: .71429rem !important;
        padding-bottom: .71429rem !important;
    }

    ul {
        list-style: none;
        margin: 0px;
        padding: 0;
        padding-top: 0.8rem;
        -webkit-font-smoothing: antialiased;
    }

    .footer a {
        text-decoration: none;
        color: rgba(255, 255, 255, .8);
        display: block;
        font-weight: lighter;
    }

    .dotted {
        border: 1px dotted rgb(99, 97, 97);
    }

    .footer-contact-wrap {
        padding-top: 0.8rem;
        font-weight: lighter;
        -webkit-font-smoothing: antialiased;
    }

    a#second-email {
        color: #72c02c;
        text-decoration: underline;
        font-size: 15px;
    }

    a#second-email:hover {
        color: #dd1111;
    }

    /*footer style end*/
    /*footer-bottom style start */
    .footer-bottom {
        background-color: #151515;
        padding-top: 1rem;
        padding-bottom: 1rem;
        padding-left: 1rem;
    }

    .footer-bottom ul {
        display: flex;
        justify-content: space-between;
    }

    .footer-bottom ul li {
        color: rgba(255, 255, 255, .8);
        font-size: 14px;
        -webkit-font-smoothing: antialiased;
    }

    a.links-links {
        text-decoration: none;
        color: #72c032;
        margin-right: 0.2rem;
        transition: ease-in-out .3s;
    }

    a.links-links:hover {
        text-decoration: underline;
    }

    /*footer-bottom style end */

    /* Media Query Start*/

    /* ============ small devices-NAVBAR ============ */
    @media (max-width: 900px) {

        .dropdown-menu .dropdown-menu {
            margin-left: 0.7rem;
            margin-right: 0.7rem;
            margin-bottom: .5rem;
        }

    }

    /* ============ small devices .end// ============ */

    @media (max-width: 700px) {
        .box {
            flex-direction: column;
        }

        .small-box {
            flex-direction: column;
        }

        .work-main {
            padding: 17%;
            margin-top: -12%;
        }

        .hire-box button {
            margin-top: 21%;
        }

        .subscription-content {
            flex-direction: column;
        }

        .inputform {
            margin-top: 8%;
            margin-left: 7%;
            align-items: center;
            margin-right: 9%;
            margin-bottom: 4%;
        }

        .title {
            text-align: center;
            font-size: 20px;
        }

        /*footer media start*/
        .footer-wrap.footer-space {
            padding-left: 0px;
        }

        /* Footer-social media start*/
        .social {
            margin: 20px 0 30px 60px;
        }

        /* Footer-social media end*/
        .footer-bottom ul {
            flex-direction: column;
        }

        /*footer media end*/
    }

    /* Media Query end*/
</style>

<body>
<?php include 'email.php'; ?>
    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="assets/image/logo.png" alt="logo" width="60px"><span>THE
                </span>
                <span>PUZZLES </span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">


                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php"> HOME </a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> ABOUT </a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> SERVICES </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a class="dropdown-item" href="#">WEB DEV &raquo;</a>
                                <ul class="submenu submenu-left dropdown-menu">
                                    <li><a class="dropdown-item" href="#">STATIC WEBSITE</a></li>
                                    <li><a class="dropdown-item" href="#">DYNAMIC WEBSITE</a></li>
                                    <li><a class="dropdown-item" href="#">SCHOOL WEBSITE</a></li>
                                    <li><a class="dropdown-item" href="#">SCHOOL PARENT PORTAL</a></li>
                                    <li><a class="dropdown-item" href="#">HOSPITAL MANAGEMENT SYSTEM</a></li>
                                    <li><a class="dropdown-item" href="#">WEBSITE MAINTENENCE</a></li>
                                    <li><a class="dropdown-item" href="#">TRAVEL PORTAL</a></li>
                                    <li><a class="dropdown-item" href="#">BLOG DEVLOPMENT</a></li>
                                    <li><a class="dropdown-item" href="#">CUSTOME SOFTWARE FOR LOCAL BUSINESS</a></li>
                                    <li><a class="dropdown-item" href="#">PHP</a></li>
                                    <li><a class="dropdown-item" href="#">ANGULAR</a></li>
                                    <li><a class="dropdown-item" href="#">REACTJS</a></li>
                                    <li><a class="dropdown-item" href="#">NODEJS</a></li>
                                    <li><a class="dropdown-item" href="#">BOOTSTRAP</a></li>
                                    <li><a class="dropdown-item" href="#">JQUERY</a></li>
                                    <li><a class="dropdown-item" href="#">WORDPRESS</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">MOBILE DEV &raquo;</a>
                                <ul class="submenu submenu-left dropdown-menu">
                                    <li><a class="dropdown-item" href="#">ANDROID </a></li>
                                    <li><a class="dropdown-item" href="#">IOS </a></li>
                                    <li><a class="dropdown-item" href="#">SCHOOL MOBILE APPLICATION </a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">SMO/DIGITAL MARKETING&raquo;</a>
                                <ul class="submenu submenu-left dropdown-menu">
                                    <li><a class="dropdown-item" href="#">AFFILIATE MARKETING </a></li>
                                    <li><a class="dropdown-item" href="#">FACEBOOK PROMOTION </a></li>
                                    <li><a class="dropdown-item" href="#">YOUTUBE PROMOTION </a></li>
                                    <li><a class="dropdown-item" href="#">INSTAGRAM PROMOTION </a></li>
                                    <li><a class="dropdown-item" href="#">SMO PACKAGE </a></li>
                                    <li><a class="dropdown-item" href="#">POLITICAL ELECTION CAMPAIGN</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#"> SEO </a></li>
                            <li><a class="dropdown-item" href="#"> CUSTOMIZED APPLICATION </a></li>
                            <li><a class="dropdown-item" href="#"> SCHOOL/COLLEGE ERP SOFTWARE </a></li>
                            <li><a class="dropdown-item" href="#"> GRAPHICS DESIGNING &raquo;</a>
                                <ul class="submenu submenu-left dropdown-menu">
                                    <li><a class="dropdown-item" href="#">SOCIAL MEDIA &raquo;</a>
                                        <ul class="submenu submenu-left dropdown-menu">
                                            <li><a class="dropdown-item" href="#"> INSTAGRAM STORIES</a></li>
                                            <li><a class="dropdown-item" href="#"> INSTAGRAM POST</a></li>
                                            <li><a class="dropdown-item" href="#"> FACEBOOK POST</a></li>
                                            <li><a class="dropdown-item" href="#"> FACEBOOK COVER</a></li>
                                            <li><a class="dropdown-item" href="#"> YOUTUBE CHANNEL ART</a></li>
                                            <li><a class="dropdown-item" href="#"> LINKEDLEN BANNER</a></li>
                                            <li><a class="dropdown-item" href="#"> YOUTUBE INTROS</a></li>
                                            <li><a class="dropdown-item" href="#"> YOUTUBE THUMBNAIL</a></li>
                                            <li><a class="dropdown-item" href="#"> YOUTUBE Ad</a></li>
                                            <li><a class="dropdown-item" href="#"> INSTAGRAM Ad</a></li>
                                            <li><a class="dropdown-item" href="#"> FACEBOOK Ad</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">PERSONAL &raquo;</a>
                                        <ul class="submenu submenu-left dropdown-menu">
                                            <li><a class="dropdown-item" href="#">INVITATION CARD</a></li>
                                            <li><a class="dropdown-item" href="#">MARRIAGE CARD</a></li>
                                            <li><a class="dropdown-item" href="#">CALENDER</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="#">BUSINESS &raquo;</a>
                                        <ul class="submenu submenu-left dropdown-menu">
                                            <li><a class="dropdown-item" href="#">PRESENTATION</a></li>
                                            <li><a class="dropdown-item" href="#">LOGO</a></li>
                                            <li><a class="dropdown-item" href="#">BUSINESS CARD</a></li>
                                            <li><a class="dropdown-item" href="#">INVOICE</a></li>
                                            <li><a class="dropdown-item" href="#">BANNER</a></li>
                                            <li><a class="dropdown-item" href="#">POSTER</a></li>
                                            <li><a class="dropdown-item" href="#">BUSINESS PROPOSAL</a></li>
                                            <li><a class="dropdown-item" href="#">BOOK COVER</a></li>
                                            <li><a class="dropdown-item" href="#">MAGAZINE COVER</a></li>
                                            <li><a class="dropdown-item" href="#">CALENDER</a></li>
                                            <li><a class="dropdown-item" href="#">E-BOOK COVER</a></li>
                                            <li><a class="dropdown-item" href="#">BROCHURE</a></li>
                                            <li><a class="dropdown-item" href="#">PLANNER</a></li>
                                            <li><a class="dropdown-item" href="#">INFOGRAPHIC</a></li>
                                            <li><a class="dropdown-item" href="#">YEARBOOK</a></li>
                                            <li><a class="dropdown-item" href="#">FLYER</a></li>
                                            <li><a class="dropdown-item" href="#">CERTIFICATE</a></li>
                                            <li><a class="dropdown-item" href="#">T-SHIRT DESIGNING</a></li>
                                            <li><a class="dropdown-item" href="#">FOLDED CARD</a></li>
                                            <li><a class="dropdown-item" href="#">NEWS LETTER</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#"> E-COMMERCE SOLUTION </a></li>
                            <li><a class="dropdown-item" href="#"> POLITICAL CAMPAIGN </a></li>
                            <li><a class="dropdown-item" href="#"> VIDEO EDITING ANIMATION </a></li>
                            <li><a class="dropdown-item" href="#"> TRANSCRIPTION TRANSLATION </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#"> PORTFOLIOS </a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"> CONTACT US </a></li>
                </ul>

            </div> <!-- navbar-collapse.// -->
        </div> <!-- container-fluid.// -->
    </nav>

    <!-- ============= COMPONENT END// ============== -->


    <!-- container //  -->
    <!-- hire section start //  -->
    <div class="hire-us">
        <div class="hire-box">
            <div class="hire-main">
                <h2>WANT TO HIRE</h2>
            </div>
            <div class="hire-second">
                Connect Us and Grow Your Business From Today
            </div>
            <button><a href="contact.php">Connect Now</a> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="32" height="32" viewBox="0 0 32 32" style=" fill:whitesmoke;">
                    <path
                        d="M 15 3 L 15 5.203125 C 13.746458 5.3226114 12.535738 5.5504288 11.439453 6.0566406 L 10.388672 4.2304688 L 8.6542969 5.2265625 L 9.7773438 7.1796875 C 8.8858169 7.8111722 8.1160288 8.5185317 7.4472656 9.3808594 L 5.5644531 8.1835938 L 4.4921875 9.8710938 L 6.328125 11.037109 C 5.6998636 12.251672 5.3388374 13.576229 5.203125 15 L 3 15 L 3 17 L 5.203125 17 C 5.3226112 18.253541 5.5504295 19.464262 6.0566406 20.560547 L 4.2304688 21.611328 L 5.2265625 23.345703 L 7.1796875 22.222656 C 7.8111715 23.114183 8.5185323 23.883971 9.3808594 24.552734 L 8.1835938 26.435547 L 9.8710938 27.507812 L 11.037109 25.671875 C 12.251672 26.300137 13.576228 26.661162 15 26.796875 L 15 29 L 17 29 L 17 26.796875 C 18.253542 26.677389 19.464262 26.449571 20.560547 25.943359 L 21.611328 27.769531 L 23.345703 26.773438 L 22.222656 24.820312 C 23.114183 24.188828 23.883971 23.481468 24.552734 22.619141 L 26.435547 23.816406 L 27.507812 22.128906 L 25.671875 20.962891 C 26.300136 19.748328 26.661163 18.423771 26.796875 17 L 29 17 L 29 15 L 26.796875 15 C 26.677389 13.746459 26.449571 12.535738 25.943359 11.439453 L 27.769531 10.388672 L 26.773438 8.6542969 L 24.820312 9.7773438 C 24.188828 8.8858165 23.481468 8.1160294 22.619141 7.4472656 L 23.816406 5.5644531 L 22.128906 4.4921875 L 20.962891 6.328125 C 19.748328 5.6998628 18.423772 5.3388376 17 5.203125 L 17 3 L 15 3 z M 15 7.2011719 L 15 10.080078 C 13.539619 10.29395 12.334648 10.961655 11.501953 11.898438 C 10.485347 13.042118 10 14.527778 10 16 C 10 16.709351 10.119124 17.419869 10.349609 18.095703 L 7.7558594 19.583984 C 7.2782475 18.48401 7 17.278664 7 16 C 7 11.372697 10.514824 7.7186361 15 7.2011719 z M 17 7.2011719 C 21.485176 7.7186361 25 11.372697 25 16 C 25 17.422455 24.605375 18.719926 24.021484 19.914062 L 21.527344 18.328125 C 21.831435 17.611301 22 16.82482 22 16 C 22 13.039616 19.82834 10.572078 17 10.091797 L 17 7.2011719 z M 16 12 C 18.220986 12 20 13.779015 20 16 C 20 18.220985 18.220986 20 16 20 C 14.583334 20 13.648107 19.504756 12.998047 18.773438 C 12.347987 18.042119 12 17.027778 12 16 C 12 14.972222 12.347987 13.957881 12.998047 13.226562 C 13.648107 12.495245 14.583334 12 16 12 z M 11.302734 19.853516 C 11.36869 19.93678 11.43081 20.021526 11.501953 20.101562 C 12.518559 21.245244 14.083334 22 16 22 C 17.761782 22 19.347401 21.227922 20.447266 20.009766 L 22.90625 21.572266 C 21.258504 23.615419 18.838262 25 16 25 C 13.020883 25 10.513604 23.468169 8.8769531 21.248047 L 11.302734 19.853516 z">
                    </path>
                </svg></button>
        </div>
    </div>

    <!-- hire section end //  -->
    <!--Our header start-->
    <div class="head-main">
        <h3>Graphic Work</h3>
    </div>
    <!--Our header end-->

    <!--Our work section start -->
    <div class="work-main">
        <div class="box">
            <div class="small-box">
                <img src="assets/portfolios/demo1.jpeg" alt="">
            </div>
            <div class="small-box">
                <img src="assets/portfolios/demo2.jpeg" alt="">
            </div>
            <div class="small-box">
                <img src="assets/portfolios/demo3.jpeg" alt="">
            </div>
        </div>
        <div class="box">
            <div class="small-box">
                <img src="assets/portfolios/demo4.jpeg" alt="">
            </div>
            <div class="small-box">
                <img src="assets/portfolios/demo5.jpeg" alt="">
            </div>
            <div class="small-box">
                <img src="assets/portfolios/demo6.jpeg" alt="">
            </div>
        </div>
        <div class="box">
            <div class="small-box">
                <img src="assets/portfolios/demo7.jpeg" alt="">
            </div>
            <div class="small-box">
                <img src="assets/portfolios/demo8.jpeg" alt="">
            </div>
            <div class="small-box">
                <img src="assets/portfolios/demo9.jpeg" alt="">
            </div>
        </div>
    </div>
    <!--Our work section end-->

    <!-- subscription section start //  -->
    <div class="subscription">
        <div class="subscription-content">
            <div class="title"> SUBSCRIBE TO OUR WEEKLY
                <strong>NEWSLETTER</strong>
            </div>
            <form action="portfolios.php" method="post">
            <div class="inputform">
                <input type="email" name="email" id="email" placeholder="Enter your email.." required>
                <div class="button">
                    <button name="subscribe" value="subscribe"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ffffff">
                                    <path
                                        d="M157.66667,14.33333l-143.33333,52.1123l91.22103,91.22103zM133.70313,38.29688l-33.92969,93.32064l-23.96354,-23.96354l36.25326,-47.71712l-47.71712,36.25326l-23.96354,-23.96354z">
                                    </path>
                                </g>
                            </g>
                        </svg></button>
                  </div>
            </div>
        </form>
    </div>
</div>
    <!-- subscription section end //  -->

    <!-- footer section start //  -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="footer-content">
                        <div class="footer-logo">
                            <img src="assets/image/banner1.png" alt="The Puzzles.logo">
                        </div>
                        <p>Digital Marketing and IT Consultation and Services Company</p>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/puzzelsdevloper" target="blank"><span
                                class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="https://www.instagram.com/puzzelsdevlopers/" target="blank"><span
                                class="fab fa-instagram"></span></a>
                        <a href="https://www.youtube.com/channel/UCiB8jntye3-iEm60uk_S89Q" target="blank"><span
                                class="fab fa-youtube"></span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-wrap footer-space">
                        <h3>
                            Useful Links
                        </h3>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <div class="dotted"></div>
                            <li><a href="#">About</a></li>
                            <div class="dotted"></div>
                            <li><a href="#">Team</a></li>
                            <div class="dotted"></div>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-wrap footer-space1">
                        <h3>Services</h3>
                        <ul class="footer-links">
                            <li><a href="#">Web design & Dev.</a></li>
                            <div class="dotted"></div>
                            <li><a href="#">Mobile App Dev.</a></li>
                            <div class="dotted"></div>
                            <li><a href="#">Digital Marketing</a></li>
                            <div class="dotted"></div>
                            <li><a href="#">Software Dev.</a></li>
                            <div class="dotted"></div>
                            <li><a href="#">Advertising</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-wrap">
                        <h3>
                            Contact
                        </h3>
                        <ul class="footer-contact">

                            <div class="footer-contact-wrap">
                                Ramdayalu Road,
                                <br>
                                Muzaffarpur 842002,
                                <br>
                                Bihar India,
                                <br>
                                Phone:+916203147160
                                <br>
                                Email:
                                <a id="second-email" href="mailto:puzzelsteam@gmail.com">puzzlesteam@gmail.com</a>
                            </div>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer bottom start-->
    <div class="footer-bottom">
        <div class="container">
            <ul>
                <li>
                    Copyright © <?php echo date("Y"); ?> The Puzzles. All Right Reserved.
                </li>
                <li>
                    <a class="links-links" href="#">Privacy & Policy</a>


                    <span>|</span>


                    <a class="links-links" href="#">Terms of Use</a>
                </li>
            </ul>
        </div>
    </div>
    <!--footer bottom end-->


</body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/60efbd10649e0a0a5ccc493d/1fak7l3st';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->

<script type="text/javascript">
    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});


    document.addEventListener("DOMContentLoaded", function () {


        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function (element) {
            element.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        })



        // make it as accordion for smaller screens
        if (window.innerWidth < 900) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function (everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function () {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function (everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function (element) {
                element.addEventListener('click', function (e) {

                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        console.log(nextEl);
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                })
            })
        }
        // end if innerWidth

    });
      // DOMContentLoaded  end
</script>

</html>