<!DOCTYPE html>
<html lang="en">

<head>
<title>The Puzzles</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#9d4edd">
  <meta name="title" content="The Puzzles">
  <meta name="description" content="Digital Marketing and IT Consulation and Service Company">
  <meta name="keywords" content="Best Digital Marketing and IT Consulation and Service Company in Muzaffarpur, Best Webdevlopment company in bihar, Best Digital Marketing company in bihar, Best Graphic design in Bihar, Best Animation Company in Bihar Muzaffarpur">
  <meta property="og:title" content="The Puzzles">
  <meta property="og:image" content="https://www.thepuzzles.tech//assets/image/logo.png">
  <meta property="og:image:alt" content="The Puzzles">
  <meta property="og:description" content="Digital Marketing and IT Consulation and Service Company">
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Wendy+One&display=swap" rel="stylesheet">

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

  /* content box start */
  main .content {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
  }

  .background-image {
    background-image: url(assets/image/background1.jpg);
    background-size: cover;
    animation: change 50s infinite ease-in-out
  }

  main .content .box {
    height: 100%;
    width: 100%;
    text-align: center;
    /* box-shadow: 10px 10px 10px #a6b0b9; */
    padding: 20px;
    position: relative;
  }

  main .content .box h1 span:nth-child(1) {
    padding-top: 40px;
    position: relative;
    color: rgb(255, 136, 0);
    font-size: 30px;
    display: block;
  }

  main .content .box h1 span:nth-child(2) {
    color: rgb(255, 136, 0);
    font-size: 20px;
    position: relative;
    top: -10px;
  }

  main .content .box img {
    width: 19%;
    position: absolute;
    right: 15%;
    height: 60%;
  }

  main .content .box button {
    background: linear-gradient(to right, #6191c7, rgb(133, 123, 218));
    padding: 7px;
    color: white;
    border-radius: 10px;
    border: 2px solid skyblue;
    margin: 10px;
    width: 100px;
    cursor: pointer;
    /* z-index: 1000; */
  }

  main .content .box button a {
    text-decoration: none;
    color: #FFF;
  }

  main .content .box button:hover {
    background: #000;
    color: #fff;
  }


  main .content .box p {
    padding: 10px;
    font-size: 70%;
    color: #ffffff;
    font-weight: bold;
    margin-top: 8px;
    margin-bottom: 0;
  }

  #creative {
    font-size: 10px;
    padding: 10px;
    color: yellow;
    font-weight: bold;
  }

  h3 {
    margin-top: 20px;
    color: whitesmoke;
    font-weight: bold;
  }

  @keyframes change {
    20% {
      background-image: url(assets/image/background2.jpg);
    }

    80% {
      background-image: url(assets/image/background3.jpg);
    }
  }

  /* content box end */

  /* what we do start */

  .about-puzzles {
    margin-bottom: 80px;
  }

  .about-puzzles h2.header-content {
    text-align: center;
    margin-top: 12%;
    margin-bottom: 4%;
    font-weight: 530;
    color: #000000;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }

  .paragraph {
    text-align: center;
    color: #555555;
    font-weight: 453;
    margin-bottom: 50px;
    font-size: 16px;
    font-family: auto;
  }

  .about-content p {
    display: inline-block;
    margin-left: 7px;
    font-size: 15px;
    color: #555555;
    text-align: center;
    font-family: 'Maven Pro', sans-serif;
    font-weight: 200;
    margin-bottom: 51px;
    padding: 6%;
  }

  #second-paragraph {
    display: inline-block;
    font-size: 15px;
    color: rgb(255, 13, 13);
    font-family: cursive;
    font-weight: 700;
  }

  .about-puzzles button {
    color: #ffffff;
    background: #72c02c;
    padding: 13px 30px;
    border-radius: 25px !important;
    border-style: hidden;
    margin-left: 43%;
  }

  .about-puzzles a {
    text-decoration: none;
    color: #ffffff;
  }

  /* what we do end */

  /* tagline start */
  .tagline {
    position: relative;
    margin-bottom: -1%;
  }

  .tagline img {
    width: 100%;
    height: 532px;
  }

  .tagline-content {
    position: absolute;
    top: 47%;
    left: 33%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    font-size: 30px;
    display: flex;
    border: 2px solid #007bff;
    padding: 14px;
    width: 60%;
  }

  /* tagline end */

  /* services box start */

  .content_down h1 {
    color: rgb(65, 62, 62);
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 500;
    text-align: center;
    margin-top: 50px;
    margin-bottom: 45px;
  }

  .content_down {
    height: auto;
    width: auto;
    margin-top: 10px;
    background-color: #f8f9fa;
    padding: 20px;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }

  .content_down .box {
    display: flex;
  }

  .box_small {
    background-color: #fff;
    display: flex;
    padding: 10px;
    flex-direction: column;
    margin: 10px;
    width: 100%;
    height: 180px;
    align-items: center;
    color: #fff;
    border: 1px solid #656565;
  }

  .box_small:hover {
    box-shadow: 6px 6px #6c757d;
    cursor: pointer;
  }

  .box_small #round {
    height: 3.92857rem;
    align-items: center;
    justify-content: center;
    width: 3.92857rem;
    font-size: 1.57143rem;
    border-radius: 70%;
    display: flex;
    min-height: 30px;
    box-shadow: 0 15px 20px 0 hsla(0, 10%, 90%, 0.89);
  }

  .box_small #round p {
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
    font-size: 40px;
    opacity: 0.6;
  }

  .box_small h4 {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    color: black;
    font-size: 10px;
    padding: 10px;
    margin-top: 20px;
  }

  /* services box end */

  /* hire section start */
  .hire-us {
    background: #72c02c;
    padding: 30px;
    text-align: center;
    margin-top: 9%;
    margin-bottom: 9%;
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

  /* philosphy section start */
  .philosphy {
    padding: 40px;
    background-color: snow;
  }

  .philosphy h2.philosphy-header {
    text-align: center;
    margin-top: 25px;
    margin-bottom: 51px;
    font-weight: 530;
    color: #000;
    ;
    font-family: fagsong;
  }

  .philosphy-content p {
    font-size: 14px;
    font-family: cursive;
    color: hotpink;
    font-weight: 500;
    margin-bottom: 7%;
    margin-top: 7%;
  }

  /* philosphy section end */


  /* client style start */
  .client-main {
    background-color: #fff;
    margin-top: 6%;
    margin-bottom: 6%;
  }

  .client-main h2 {
    text-align: center;
    font-weight: 700;
    font-family: serif;
    font-size: 29px;
    color: revert;
  }

  .client-image {
    text-align: center;
    margin-top: 3%;
    margin-bottom: 3%;
  }

  /* client style end */

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
  a.links-links:hover{
    text-decoration: underline;
  }

  /*footer-bottom style end */

  /* Media query start */

  @media screen and (max-width:750px) {
    main .content .box img {
      display: none;
    }

    .content_down .box {
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
    }

    .about-puzzles button {
      margin-left: 31%;
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

  @media screen and (max-width:700px) {
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
      margin-left: 3rem;
    }
  }

  @media screen and (max-width:400px) {
    main .content .box h1 span:nth-child(1) {
      font-size: 18px;
      font-weight: bold;
    }

    main .content .box h1 span:nth-child(2) {
      font-size: 14px;
      font-weight: bold;
    }

    header .the span:nth-child(2) {
      font-size: 30px;
    }

    header .the span:nth-child(3) {
      font-size: 30px;
    }
  }


  /* ============ small devices-NAVBAR ============ */
  @media (max-width: 900px) {

    .dropdown-menu .dropdown-menu {
      margin-left: 0.7rem;
      margin-right: 0.7rem;
      margin-bottom: .5rem;
    }

  }

  /* ============ small devices .end// ============ */
</style>

<body>
<?php include 'email.php'; ?>
  <!-- ============= nav-start ============== -->

  <!-- ============= COMPONENT ============== -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="assets/image/logo.png" alt="logo" width="60px"><span>THE </span>
        <span>PUZZLES </span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav">


        <ul class="navbar-nav ms-auto">
          <li class="nav-item active"><a class="nav-link" href="#"> HOME </a></li>
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
              <li><a class="dropdown-item" href="#">MOBILE DEV &nbsp;&raquo;</a>
                <ul class="submenu submenu-left dropdown-menu">
                  <li><a class="dropdown-item" href="#">ANDROID </a></li>
                  <li><a class="dropdown-item" href="#">IOS </a></li>
                  <li><a class="dropdown-item" href="#">SCHOOL MOBILE APPLICATION </a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="#">SMO/DIGITAL MARKETING &nbsp;&raquo;</a>
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
              <li><a class="dropdown-item" href="#"> GRAPHICS DESIGNING &nbsp; &raquo;</a>
                <ul class="submenu submenu-left dropdown-menu">
                  <li><a class="dropdown-item" href="#">SOCIAL MEDIA &nbsp;&raquo;</a>
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
                  <li><a class="dropdown-item" href="#">PERSONAL &nbsp;&raquo;</a>
                    <ul class="submenu submenu-left dropdown-menu">
                      <li><a class="dropdown-item" href="#">INVITATION CARD</a></li>
                      <li><a class="dropdown-item" href="#">MARRIAGE CARD</a></li>
                      <li><a class="dropdown-item" href="#">CALENDER</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="#">BUSINESS &nbsp;&raquo;</a>
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
          <li class="nav-item"><a class="nav-link" href="portfolios.php"> PORTFOLIOS </a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php"> CONTACT US </a></li>
        </ul>

      </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
  </nav>

  <!-- ============= COMPONENT END// ============== -->


  <!-- container //  -->

  <main>
    <div class="background-image">
      <div class="content">
        <div class="box">
          <img src="assets/image/human-brain-technology-decorations-a5b7839aaa2389249b0f4cd42ef4e32c.png" alt="" />
          <h1><span>WELCOME TO</span><span>THE PUZZLES</span></h1>
          <button><a href="contact.php">Contact us</a></button>
          <button><a href="#">Services</a></button>
          <p>
            You are at right place we provide all software solutions at cheapset
            price check our plans for more details.
          </p>
        </div>
        <h3>Creative and Dynamic Work!</h3>
        <p id="creative">
          we are working creative and dynamic that allows us to work beyond
          imagination.
        </p>
      </div>
    </div>
    <!-- what we do start //  -->
    <div class="about-puzzles">
      <div class="about-content">
        <h2 class="header-content">What we do?</h2>
        <div class="paragraph"> A Solution Provider of Web and IT Services</div>
        <p>Today everyone wants to grow their business or organizations.<span id="second-paragraph"> We providing an
            Umbrella of Solutions under one roof</span>. We deals with Website designing and Development, Graphic
          designing, Digital marketing, Social media optimization, Political campaign, Video editing and Animation, Web
          apps, Android apps With Creativity, Visual effects and Research-based approach.</p>
      </div>
      <button><a href="#">Read More</a></button>
    </div>
    <!-- what we do end //  -->

    <!-- tagline start //  -->
    <div class="tagline">
      <img src="assets/image/tagline.jpg" alt="">
      <div class="tagline-content">" We Give Our Best For Your Success "</div>
    </div>
    <!-- tagline end //  -->

    <div class="content_down">
      <h1>
        OUR KEY <br />
        SERVICES
      </h1>
      <div class="box">
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M27.52,27.52c-7.71592,0 -13.76,6.04408 -13.76,13.76v75.68c0,2.53872 0.70542,4.86072 1.85437,6.88h-8.73437c-1.90232,0 -3.44,1.53768 -3.44,3.44c0,9.48408 7.71592,17.2 17.2,17.2h130.72c9.48408,0 17.2,-7.71592 17.2,-17.2c0,-1.90232 -1.53768,-3.44 -3.44,-3.44h-8.73437c1.14896,-2.01928 1.85437,-4.34128 1.85437,-6.88v-75.68c0,-7.71592 -6.04408,-13.76 -13.76,-13.76zM27.52,34.4h116.96c3.92504,0 6.88,2.95496 6.88,6.88v75.68c0,3.92504 -2.95496,6.88 -6.88,6.88h-116.96c-3.92504,0 -6.88,-2.95496 -6.88,-6.88v-75.68c0,-3.92504 2.95496,-6.88 6.88,-6.88zM91.15328,51.55297c-1.63539,0.00697 -3.03985,1.16424 -3.35938,2.76813l-10.32,48.16c-0.25719,1.20273 0.14691,2.4513 1.06005,3.27524c0.91314,0.82394 2.19653,1.09804 3.3666,0.71901c1.17006,-0.37903 2.04897,-1.35358 2.30554,-2.55645l10.32,-48.16c0.23374,-1.02395 -0.01305,-2.09858 -0.67012,-2.91795c-0.65707,-0.81937 -1.65242,-1.29371 -2.70269,-1.28799zM62.04765,61.87969c-1.13595,-0.0325 -2.21467,0.49806 -2.88234,1.41766l-11.86531,15.82265l11.86531,15.82265c1.13917,1.52137 3.29597,1.8312 4.81734,0.69203c1.52137,-1.13917 1.8312,-3.29597 0.69203,-4.81734l-8.77469,-11.69735l8.77469,-11.69735c0.79195,-1.02461 0.94145,-2.40713 0.38684,-3.57735c-0.55461,-1.17022 -1.71937,-1.92986 -3.01387,-1.96562zM109.85156,61.8864c-1.27389,0.07328 -2.40259,0.84561 -2.9323,2.00646c-0.52971,1.16085 -0.37341,2.51953 0.40605,3.52979l8.77469,11.69735l-8.77469,11.69735c-1.13917,1.52137 -0.82934,3.67817 0.69203,4.81734c1.52137,1.13917 3.67817,0.82934 4.81734,-0.69203l11.86531,-15.82265l-11.86531,-15.82265c-0.68921,-0.94764 -1.81335,-1.47934 -2.98312,-1.41094zM10.91125,130.72h16.60875h116.96h16.60875c-1.42072,4.00416 -5.24299,6.88 -9.72875,6.88h-130.72c-4.48576,0 -8.30803,-2.87584 -9.72875,-6.88z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>WEB DESIGN AND DEVLOPMENT</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M18.8125,1.34375c-9.675,0 -17.46875,7.79375 -17.46875,17.46875v18.8125v115.5625c0,9.675 7.79375,17.46875 17.46875,17.46875h134.375c9.675,0 17.46875,-7.79375 17.46875,-17.46875v-134.375c0,-9.675 -7.79375,-17.46875 -17.46875,-17.46875zM18.8125,9.40625h134.375c5.24062,0 9.40625,4.16563 9.40625,9.40625v20.15625h-153.1875v-20.15625c0,-5.24062 4.16563,-9.40625 9.40625,-9.40625zM24.1875,20.15625c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h5.375c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125zM45.6875,20.15625c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h5.375c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125zM9.40625,47.03125h153.1875v106.15625c0,5.24062 -4.16563,9.40625 -9.40625,9.40625h-134.375c-5.24062,0 -9.40625,-4.16563 -9.40625,-9.40625zM36.28125,77.9375c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74688,4.03125 4.03125,4.03125h99.4375c2.28438,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125zM36.28125,98.09375c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74688,4.03125 4.03125,4.03125h99.4375c2.28438,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125zM36.28125,118.25c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74688,4.03125 4.03125,4.03125h71.21875c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM129,118.25c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74688,4.03125 4.03125,4.03125h6.71875c2.28438,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74687,-4.03125 -4.03125,-4.03125z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>SEARCH ENGINE OPTIMIZATION</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M5.375,14.78125c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125v147.8125c0,2.28438 1.74687,4.03125 4.03125,4.03125h147.8125c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-143.78125v-143.78125c0,-2.28438 -1.74688,-4.03125 -4.03125,-4.03125zM139.75,55.09375c-2.28438,0 -4.03125,1.74687 -4.03125,4.03125c0,2.28438 1.74687,4.03125 4.03125,4.03125h17.20105l-41.2547,41.11822c-1.6125,1.6125 -4.16457,1.6125 -5.6427,0l-28.89062,-28.89062c-4.70312,-4.70312 -12.36407,-4.70312 -17.0672,0l-14.51093,14.51355c-1.6125,1.6125 -1.6125,4.16457 0,5.6427c0.80625,0.80625 1.88072,1.2099 2.82135,1.2099c0.94063,0 2.0151,-0.40365 2.82135,-1.2099l14.51355,-14.51093c1.6125,-1.6125 4.16457,-1.6125 5.6427,0l28.89063,28.89063c4.70313,4.70313 12.36407,4.70313 17.0672,0l41.25208,-41.12085v17.20105c0,2.28437 1.74687,4.03125 4.03125,4.03125c2.28438,0 4.03125,-1.74688 4.03125,-4.03125v-26.875c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125zM37.57513,103.46875c-1.02461,0 -2.03242,0.40365 -2.77148,1.2099l-5.375,5.375c-1.6125,1.6125 -1.6125,4.16457 0,5.6427c0.80625,0.80625 1.88072,1.2099 2.82135,1.2099c0.94062,0 2.0151,-0.40365 2.82135,-1.2099l5.375,-5.375c1.6125,-1.6125 1.6125,-4.16457 0,-5.6427c-0.80625,-0.80625 -1.84661,-1.2099 -2.87121,-1.2099z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>DIGITAL MARKETING</h4>
        </div>
      </div>
      <div class="box">
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M56.4375,0c-10.38987,0 -18.8125,8.42263 -18.8125,18.8125v134.375c0,10.38987 8.42263,18.8125 18.8125,18.8125h59.125c10.38988,0 18.8125,-8.42263 18.8125,-18.8125v-28.67542v-86.88708v-18.8125c0,-10.38987 -8.42262,-18.8125 -18.8125,-18.8125zM56.4375,5.375h59.125c7.42019,0 13.4375,6.01731 13.4375,13.4375v2.6875h-86v-2.6875c0,-7.42019 6.01731,-13.4375 13.4375,-13.4375zM72.5625,10.75c-1.4835,0 -2.6875,1.204 -2.6875,2.6875c0,1.4835 1.204,2.6875 2.6875,2.6875h5.375c1.4835,0 2.6875,-1.204 2.6875,-2.6875c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM88.6875,10.75c-1.4835,0 -2.6875,1.204 -2.6875,2.6875c0,1.4835 1.204,2.6875 2.6875,2.6875h10.75c1.4835,0 2.6875,-1.204 2.6875,-2.6875c0,-1.4835 -1.204,-2.6875 -2.6875,-2.6875zM43,26.875h86v112.875h-86zM67.1875,32.25c-10.37106,0 -18.8125,8.44144 -18.8125,18.8125c0,5.1095 2.05584,9.74423 5.375,13.13831v37.92419c0,1.48619 1.20131,2.6875 2.6875,2.6875h59.125c1.48619,0 2.6875,-1.20131 2.6875,-2.6875v-13.4375v-45.6875c0,-1.48619 -1.20131,-2.6875 -2.6875,-2.6875h-32.96387c-3.40466,-4.86452 -9.03782,-8.0625 -15.41113,-8.0625zM67.1875,37.625c7.40944,0 13.4375,6.02806 13.4375,13.4375c0,7.40944 -6.02806,13.4375 -13.4375,13.4375c-7.40944,0 -13.4375,-6.02806 -13.4375,-13.4375c0,-7.40944 6.02806,-13.4375 13.4375,-13.4375zM67.1875,43c-2.96431,0 -5.375,2.41069 -5.375,5.375c0,1.37869 0.53893,2.62846 1.39624,3.57983c-1.79256,0.84119 -3.03839,2.10507 -3.63232,2.99194c-0.54825,0.82506 -0.6041,1.8823 -0.13647,2.75574c0.46762,0.87344 1.38087,1.42249 2.37256,1.42249h10.75c0.99169,0 1.90493,-0.5438 2.37256,-1.41724c0.46763,-0.87344 0.41178,-1.93592 -0.13647,-2.76099c-0.59125,-0.88687 -1.83976,-2.15076 -3.63232,-2.99194c0.86,-0.95137 1.39624,-2.20115 1.39624,-3.57983c0,-2.96431 -2.41069,-5.375 -5.375,-5.375zM85.2074,45.6875h27.6676v34.9375l-11.2854,-15.04895c-1.01319,-1.3545 -3.29101,-1.3545 -4.3042,0l-14.88623,19.8518l-11.52685,-4.60864c-0.774,-0.31444 -1.66281,-0.24372 -2.38306,0.18896l-9.36426,5.61646v-18.59204c2.44763,1.16797 5.17526,1.84241 8.0625,1.84241c10.37106,0 18.8125,-8.44144 18.8125,-18.8125c0,-1.8691 -0.28236,-3.66936 -0.7926,-5.375zM99.4375,71.67017l13.4375,17.90967v9.85767h-53.75v-6.54028l10.99146,-6.59277l12.19873,4.88159c1.118,0.44613 2.4211,0.08579 3.14941,-0.88709zM56.4375,112.875c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875c0,1.48619 1.20131,2.6875 2.6875,2.6875h59.125c1.48619,0 2.6875,-1.20131 2.6875,-2.6875c0,-1.48619 -1.20131,-2.6875 -2.6875,-2.6875zM56.4375,126.3125c-1.48619,0 -2.6875,1.20131 -2.6875,2.6875c0,1.48619 1.20131,2.6875 2.6875,2.6875h43c1.48619,0 2.6875,-1.20131 2.6875,-2.6875c0,-1.48619 -1.20131,-2.6875 -2.6875,-2.6875zM43,145.125h86v8.0625c0,7.42019 -6.01731,13.4375 -13.4375,13.4375h-59.125c-7.42019,0 -13.4375,-6.01731 -13.4375,-13.4375zM86,150.5c-2.96853,0 -5.375,2.40647 -5.375,5.375c0,2.96853 2.40647,5.375 5.375,5.375c2.96853,0 5.375,-2.40647 5.375,-5.375c0,-2.96853 -2.40647,-5.375 -5.375,-5.375z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>SOCIAL MEDIA OPTIMIZATION</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 226 226" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,226v-226h226v226z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M193.90977,13.10094c-4.77015,0 -9.54527,1.803 -13.14508,5.40281l-3.72547,3.72547c-0.67078,-0.35703 -1.42073,-0.5392 -2.18055,-0.52969c-1.17725,0.01644 -2.30163,0.49153 -3.13398,1.32422l-141.92094,141.92094c-0.45905,0.4576 -0.81432,1.00857 -1.04172,1.61554l-14.9107,39.77071c-0.62062,1.65906 -0.21506,3.52774 1.03747,4.78027c1.25253,1.25253 3.1212,1.65809 4.78027,1.03747l39.7707,-14.9107c0.60697,-0.2274 1.15794,-0.58267 1.61554,-1.04172l141.92094,-141.92094c1.57592,-1.57974 1.76339,-4.07307 0.44141,-5.8707l3.62836,-3.62836c7.19962,-7.19962 7.19962,-19.07288 0,-26.2725c-3.59981,-3.59981 -8.3661,-5.40281 -13.13625,-5.40281zM193.90094,22.15859c2.46246,0 4.92933,0.91253 6.75351,2.73672c3.64838,3.64838 3.64838,9.841 0,13.48938l-3.59305,3.58422l-13.48937,-13.48937l3.58422,-3.58422c1.82419,-1.82419 4.28223,-2.73672 6.74469,-2.73672zM174.92047,32.61109l18.46844,18.46844l-12.35937,12.35937l-18.46844,-18.46844zM156.16953,51.36203l18.46844,18.46844l-117.00797,117.00797l-3.39,-3.39v-7.16844c-0.00025,-2.49622 -2.02378,-4.51975 -4.52,-4.52h-7.16844l-3.39,-3.39zM34.64156,176.63312l2.84266,2.84266c0.84755,0.84766 1.99708,1.32399 3.19578,1.32422h4.52v4.52c0.00023,1.1987 0.47656,2.34823 1.32422,3.19578l2.84266,2.84266l-17.37375,6.51516l-3.86672,-3.86672z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>GRAPHICS DESIGNING</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M38.78678,14.31934l-24.43945,0.11198l0.06999,14.33333l14.83724,-0.06999l5.96289,14.30534h9.46224v0.014h93.61458l-19.9043,35.83333h-51.70638v-0.014h-8.69238l-12.69564,20.25423c-2.86667,4.58667 -3.01493,10.38036 -0.39193,15.10319c2.623,4.72283 7.59991,7.65657 13.00358,7.65657h85.41211v-14.33333h-85.41211l-0.46191,-0.83984l8.44043,-13.49349h52.50423c5.21017,0 10.005,-2.83296 12.52767,-7.37663l25.8252,-46.48535c1.23983,-2.22167 1.20601,-4.91768 -0.08399,-7.11068c-1.29,-2.18583 -3.64985,-3.52734 -6.18685,-3.52734h-105.69434zM0,57.33333v14.33333h45.57552l0.29395,-0.43392l8.73438,-13.89941zM0,86v14.33333h27.51888l9.09831,-14.33333zM57.31934,129.014c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333zM128.986,129.014c-7.91608,0 -14.33333,6.41725 -14.33333,14.33333c0,7.91608 6.41725,14.33333 14.33333,14.33333c7.91608,0 14.33333,-6.41725 14.33333,-14.33333c0,-7.91608 -6.41725,-14.33333 -14.33333,-14.33333z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>E-COMMERCE SOLUTION</h4>
        </div>
      </div>
      <div class="box">
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M30.6375,13.6525c-0.14781,0.02688 -0.29562,0.06719 -0.43,0.1075c-1.59906,0.36281 -2.72781,1.80063 -2.6875,3.44v33.97c0,12.85969 3.1175,20.69375 7.6325,26.445c4.00438,5.09281 8.65375,8.66719 13.0075,13.33v12.255h-20.64c-0.1075,0 -0.215,0 -0.3225,0c-1.47812,0.16125 -2.6875,1.23625 -3.01,2.6875l-10.32,48.16c-0.22844,1.00781 0.02688,2.06938 0.67188,2.88906c0.645,0.80625 1.62594,1.29 2.66062,1.30344h137.6c1.03469,-0.01344 2.01563,-0.49719 2.66063,-1.30344c0.645,-0.81969 0.90031,-1.88125 0.67187,-2.88906l-10.32,-48.16c-0.34937,-1.55875 -1.73344,-2.67406 -3.3325,-2.6875h-20.64v-34.4c-0.01344,-1.89469 -1.54531,-3.42656 -3.44,-3.44h-0.215c-1.03469,-8.78812 -5.83187,-16.90437 -10.8575,-22.8975c-5.60344,-6.67844 -24.1875,-27.52 -24.1875,-27.52c-0.76594,-0.90031 -1.94844,-1.35719 -3.1175,-1.1825c-1.24969,0.18813 -2.29781,1.04813 -2.71437,2.24406c-0.43,1.1825 -0.17469,2.51281 0.67187,3.45344c0,0 18.62438,21.15063 23.9725,27.52c4.23281,5.03906 8.14313,11.86531 9.245,18.3825h-40.85l-2.15,-4.73c-0.38969,-1.26312 -1.49156,-2.19031 -2.795,-2.37844c-1.31687,-0.18813 -2.62031,0.40312 -3.35937,1.505c-0.72563,1.10187 -0.76594,2.52625 -0.08063,3.66844l14.62,31.82v0.1075h0.1075c2.41875,4.52844 4.52844,9.27188 5.2675,12.9c0.73906,3.62813 0.43,5.44219 -1.6125,6.9875c-2.39187,1.81406 -5.02562,2.23063 -7.955,1.3975c-2.92937,-0.83312 -6.10062,-3.05031 -8.815,-6.88c-5.67062,-8.02219 -9.7825,-20.425 -9.7825,-20.425l-0.215,-0.645l-0.43,-0.5375c-0.13437,-0.16125 -0.29562,-0.26875 -0.43,-0.43c-0.3225,-0.73906 -0.88687,-1.35719 -1.6125,-1.72c-4.75687,-5.06594 -9.36594,-8.4925 -12.5775,-12.5775c-3.66844,-4.66281 -6.1275,-10.44094 -6.1275,-22.2525v-33.97c0.04031,-0.99437 -0.36281,-1.94844 -1.075,-2.62031c-0.72562,-0.68531 -1.70656,-1.02125 -2.6875,-0.92719zM75.5725,72.24h41.3875v58.48h-61.92v-25.37c1.42438,2.80844 3.02344,5.65719 4.945,8.385c3.45344,4.87781 7.82063,8.22375 12.5775,9.5675c4.75688,1.34375 9.90344,0.49719 13.975,-2.58c4.43438,-3.35937 5.20031,-8.9225 4.1925,-13.8675c-0.99437,-4.87781 -3.44,-9.86312 -5.9125,-14.5125l-0.1075,-0.215zM30.315,110.08h17.845v13.76h-3.44c-3.7625,0 -6.88,3.1175 -6.88,6.88c0,3.7625 3.1175,6.88 6.88,6.88h82.56c3.7625,0 6.88,-3.1175 6.88,-6.88c0,-3.7625 -3.1175,-6.88 -6.88,-6.88h-3.44v-13.76h17.845l8.9225,41.28h-129.215z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>POLITICAL CAMPAIGN</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M20.64,0c-5.65719,0 -10.32,4.66281 -10.32,10.32v113.52c0,5.65719 4.66281,10.32 10.32,10.32h48.16v-6.88h-48.16c-1.94844,0 -3.44,-1.49156 -3.44,-3.44v-113.52c0,-1.94844 1.49156,-3.44 3.44,-3.44h68.8c1.94844,0 3.44,1.49156 3.44,3.44v24.08h6.88v-24.08c0,-5.65719 -4.66281,-10.32 -10.32,-10.32zM26.875,13.76c-1.63937,0.30906 -2.82187,1.76031 -2.795,3.44v89.44c0,1.89469 1.54531,3.44 3.44,3.44h41.28v-6.88h-37.84v-82.56h48.16v13.76h6.88v-17.2c0,-1.89469 -1.54531,-3.44 -3.44,-3.44h-55.04c-0.1075,0 -0.215,0 -0.3225,0c-0.1075,0 -0.215,0 -0.3225,0zM82.56,37.84c-5.65719,0 -10.32,4.66281 -10.32,10.32v113.52c0,5.65719 4.66281,10.32 10.32,10.32h68.8c5.65719,0 10.32,-4.66281 10.32,-10.32v-113.52c0,-5.65719 -4.66281,-10.32 -10.32,-10.32zM82.56,44.72h68.8c1.94844,0 3.44,1.49156 3.44,3.44v113.52c0,1.94844 -1.49156,3.44 -3.44,3.44h-68.8c-1.94844,0 -3.44,-1.49156 -3.44,-3.44v-113.52c0,-1.94844 1.49156,-3.44 3.44,-3.44zM88.795,51.6c-1.63937,0.30906 -2.82187,1.76031 -2.795,3.44v89.44c0,1.89469 1.54531,3.44 3.44,3.44h55.04c1.89469,0 3.44,-1.54531 3.44,-3.44v-89.44c0,-1.89469 -1.54531,-3.44 -3.44,-3.44h-55.04c-0.1075,0 -0.215,0 -0.3225,0c-0.1075,0 -0.215,0 -0.3225,0zM92.88,58.48h48.16v82.56h-48.16zM55.04,113.52c-2.84875,0 -5.16,2.31125 -5.16,5.16c0,2.84875 2.31125,5.16 5.16,5.16c2.84875,0 5.16,-2.31125 5.16,-5.16c0,-2.84875 -2.31125,-5.16 -5.16,-5.16zM116.96,151.36c-2.84875,0 -5.16,2.31125 -5.16,5.16c0,2.84875 2.31125,5.16 5.16,5.16c2.84875,0 5.16,-2.31125 5.16,-5.16c0,-2.84875 -2.31125,-5.16 -5.16,-5.16z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>MOBILE APPLICATION</h4>
        </div>
        <div class="box_small">
          <div id="round"><img
              src="data:image/png;base64,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" />
          </div>
          <h4>SCHOOL ERP SOFTWARE</h4>
        </div>
      </div>
      <div class="box">
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M6.88,13.76c-1.89978,0.00019 -3.43981,1.54022 -3.44,3.44v16.62219c-0.0614,0.37149 -0.0614,0.75054 0,1.12203v102.07797c-0.0614,0.37149 -0.0614,0.75054 0,1.12203v16.65578c0.00019,1.89978 1.54022,3.43981 3.44,3.44h158.24c1.89978,-0.00019 3.43981,-1.54022 3.44,-3.44v-16.62219c0.0614,-0.37149 0.0614,-0.75054 0,-1.12203v-102.07797c0.0614,-0.37149 0.0614,-0.75054 0,-1.12203v-16.65578c-0.00019,-1.89978 -1.54022,-3.43981 -3.44,-3.44zM10.32,20.64h10.32v10.32h-10.32zM27.52,20.64h13.76v10.32h-13.76zM48.16,20.64h13.76v10.32h-13.76zM68.8,20.64h13.76v10.32h-13.76zM89.44,20.64h13.76v10.32h-13.76zM110.08,20.64h13.76v10.32h-13.76zM130.72,20.64h13.76v10.32h-13.76zM151.36,20.64h10.32v10.32h-10.32zM10.32,37.84h151.36v96.32h-151.36zM72.03844,61.92c-1.82064,0.10703 -3.2414,1.61622 -3.23844,3.44v41.28c0.00092,1.2383 0.66725,2.38058 1.7447,2.9909c1.07745,0.61032 2.39977,0.59452 3.46233,-0.04137l34.4,-20.64c1.03574,-0.62187 1.6694,-1.74144 1.6694,-2.94953c0,-1.20809 -0.63366,-2.32766 -1.6694,-2.94953l-34.4,-20.64c-0.49248,-0.29679 -1.05149,-0.46542 -1.62594,-0.49047c-0.11415,-0.00569 -0.22851,-0.00569 -0.34266,0zM75.68,71.43375l24.27485,14.56625l-24.27485,14.56625zM10.32,141.04h10.32v10.32h-10.32zM27.52,141.04h13.76v10.32h-13.76zM48.16,141.04h13.76v10.32h-13.76zM68.8,141.04h13.76v10.32h-13.76zM89.44,141.04h13.76v10.32h-13.76zM110.08,141.04h13.76v10.32h-13.76zM130.72,141.04h13.76v10.32h-13.76zM151.36,141.04h10.32v10.32h-10.32z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>VIDEO EDITING AND ANIMATION</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="45" height="45"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g>
                  <path d="M3.58333,17.91667l21.5,14.33333v71.66667l-21.5,-14.33333z" fill="#2ecc71"></path>
                  <path d="M168.41667,71.66667l-21.5,14.33333v46.58333l21.5,-14.33333z" fill="#3498db"></path>
                  <path d="M168.41667,21.5l-21.5,14.33333v25.08333l21.5,-14.33333z" fill="#3498db"></path>
                  <path d="M125.41667,17.91667l-21.5,14.33333v71.66667l21.5,-14.33333z" fill="#3498db"></path>
                  <path d="M3.58333,43l60.91667,39.41667v-25.08333l-60.91667,-39.41667z" fill="#2ecc71"></path>
                  <path d="M125.41667,43l-60.91667,39.41667v-25.08333l60.91667,-39.41667z" fill="#3498db"></path>
                  <path d="M125.41667,93.16667l-60.91667,39.41667v-25.08333l60.91667,-39.41667z" fill="#3498db"></path>
                  <path d="M168.41667,121.83333l-60.91667,39.41667v-25.08333l60.91667,-39.41667z" fill="#3498db"></path>
                  <path d="M107.5,135.32458l-43,-27.82458v25.08333l43,27.82458z" fill="#2ecc71"></path>
                </g>
              </g>
            </svg></div>
          <h4>UI DESIGN</h4>
        </div>
        <div class="box_small">
          <div id="round"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
              viewBox="0 0 172 172" style=" fill:#000000;">
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                style="mix-blend-mode: normal">
                <path d="M0,172v-172h172v172z" fill="none"></path>
                <g fill="#72c02c">
                  <path
                    d="M67.76531,3.44c-6.99467,0 -12.72531,5.73065 -12.72531,12.72531v36.81203c0,6.99467 5.73064,12.72531 12.72531,12.72531h36.81203c6.99467,0 12.72531,-5.73064 12.72531,-12.72531v-36.81203c0.00029,-0.0762 -0.00195,-0.15239 -0.00672,-0.22844c-0.45724,-6.861 -6.06658,-12.49687 -13.06125,-12.49687zM67.76531,10.32h36.46937c3.32007,0 5.95012,2.60945 6.18797,6.06031v36.59703c0,3.32533 -2.51998,5.84531 -5.84531,5.84531h-36.81203c-3.32533,0 -5.84531,-2.51998 -5.84531,-5.84531v-36.81203c0,-3.32533 2.51998,-5.84531 5.84531,-5.84531zM82.56,20.64v10.32h-10.32v6.88h10.32v10.32h6.88v-10.32h10.32v-6.88h-10.32v-10.32zM23.04531,30.96c-6.99467,0 -12.72531,5.73064 -12.72531,12.72531v114.55469h154.8v-114.55469c0,-6.99467 -5.73064,-12.72531 -12.72531,-12.72531h-28.55469v6.88h28.55469c3.32533,0 5.84531,2.51998 5.84531,5.84531v107.67469h-55.04v-37.84h-3.44h-12.38265h-18.57735v37.84h-51.6v-107.67469c0,-3.32533 2.51998,-5.84531 5.84531,-5.84531h25.11469v-6.88zM23.93891,75.5389v27.80219h31.24219v-27.80219h-3.5811h-14.10265zM68.6589,75.5389v27.80219h34.68219v-27.80219h-3.5811h-14.10265zM116.8189,75.5389v27.80219h31.24219v-27.80219h-3.5811h-10.66265zM31.10109,82.7011h6.39625h10.52156v13.47781h-16.91781zM75.8211,82.7011h9.83625h10.52156v13.47781h-20.35781zM123.9811,82.7011h9.83625h7.08156v13.47781h-16.91781zM23.93891,113.3789v27.80219h31.24219v-27.80219h-3.5811h-14.10265zM116.8189,113.3789v27.80219h31.24219v-27.80219h-3.5811h-10.66265zM75.68,120.4h11.69735h8.94265v30.96h-20.64zM31.10109,120.5411h6.39625h10.52156v13.47781h-16.91781zM123.9811,120.5411h9.83625h7.08156v13.47781h-16.91781z">
                  </path>
                </g>
              </g>
            </svg></div>
          <h4>HEALTH - CARE</h4>
        </div>
      </div>
    </div>

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

    <!-- philosphy section start //  -->

    <div class="philosphy">
      <div class="philosphy-content">
        <h2 class="philosphy-header"> Philoshpy</h2>
        <p>At THE PUZZLES business is abiding by the professional commitments, ethical values and services par
          excellence. It's a perfect example of keeping your mind above your heart but at the same time notunderlining
          the role of heart at any point of time. That is why great stress is laid on proper communication, transparency
          and human relations, which form an integral part of our company's culture. <br><br>
          Since we want your site to be a top class one and make your investment rewarding, our team based approach for
          acquiring new competencies continues. Forever searching, experimenting, innovating, learning, moving ahead
          with our sincere efforts and dedication, shaping the future, and challenging our competencies to create new
          opportunities.

        </p>
      </div>
    </div>
    <!-- philosphy section end //  -->
    <!-- client start //  -->
    <div class="client-main">
      <div class="client">
        <h2>Our Clients</h2>
        <div class="client-image">
          <img src="assets/image/client1.png" alt="" width="60px">
        </div>
      </div>
    </div>
    <!-- client end //  -->
    <!-- subscription section start //  -->
    <div class="subscription">
      <div class="subscription-content">
        <div class="title"> SUBSCRIBE TO OUR WEEKLY
          <strong>NEWSLETTER</strong>
        </div>
       <form action="index.php" method="POST">
        <div class="inputform">
          <input type="email" name="email" id="email" placeholder="Enter your email.." required>
          <div class="button">
            <button name="subscribe" value="subscribe"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172"
                style=" fill:#000000;">
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
          </form>
        </div>
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
                <li><a href="#">Home</a></li>
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


  <!-- footer section end //  -->
  </main>

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
          });
        })
      }
      // end if innerWidth

    });
      // DOMContentLoaded  end
  </script>
</body>

</html>