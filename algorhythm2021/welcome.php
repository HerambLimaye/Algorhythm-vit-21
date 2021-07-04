<?php
    session_start();

    require_once "config.php";

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AlgoRhythm 2021 | Welcome</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Return Portfolio Template" />
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images//favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images//favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images//favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images//favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images//favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images//favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/images//favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images//favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/images//favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images//favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/images//favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images//favicon/favicon-16x16.png">
<link rel="manifest" href="/images//favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images//favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/../css/style.css" />
    <script
      src="https://kit.fontawesome.com/720d275f39.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="dark">
    <div id="loader" class="preloader">
      <span class="loading">
        <span class="loading_text">Loading</span>
        <span class="progress">
          <span class="bar_loading"></span>
        </span>
      </span>
    </div>
    <div id="cursor">
      <div class="cursor_label"></div>
      <div class="cursor_background"></div>
    </div>
    <div class="page_overlay">
      <div class="page_transition"></div>
      <div class="page_transition_two"></div>
    </div>
    <header class="my_menu">
      <div class="header_container">
        <a
          href="/"
          data-type="ajax-load"
          class="logo visible"
          data-dist="3"
          data-cursor-type="medium"
        >
          <img
            class="logo_white"
            data-dist="4"
            data-cursor-type="medium"
            data-cursor-text=""
            src="/../images/logo/logo.png"
            alt=""
          />
          <img
            class="logo_dark"
            data-dist="4"
            data-cursor-type="medium"
            data-cursor-text=""
            src="/../images/logo/logo-dark.png"
            alt=""
          />
        </a>
        <div class="nav_icon visible" data-dist="3" data-cursor-type="medium">
          <div class="nav_icon_inner" data-cursor-type="medium">
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
    <div
      class="background_overlay"
      data-cursor-text="CLOSE"
      data-cursor-type="big"
    ></div>
    <div class="menu_right">
      <div class="outer">
        <div class="inner">
          <div class="row">
            <ul class="social col-xl-4 offset-xl-1 col-md-4 offset-md-1">
              <li class="menu_text">Social</li>
              <li>
                <a data-cursor-type="medium" href="#" style="cursor: none"
                  >Instagram</a
                >
              </li>
            </ul>
            <nav class="col-xl-6 col-md-6 col-sm-5 offset-sm-1">
              <ul>
                <li class="menu_text">Menu</li>
                <li>
                  <a
                    data-type="ajax-load"
                    data-cursor-type="medium"
                    href="/../"
                    >Home</a
                  >
                </li>
                <li>
                  <a data-cursor-type="medium" href="/../about-us">About Us</a>
                </li>
                <li>
                  <a
                    data-type="ajax-load"
                    data-cursor-type="medium"
                    href="/../contact"
                    >Contact</a
                  >
                </li>
                <li>
                  <a data-cursor-type="medium" href="logout">Logout</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="menu_footer">
        <div class="menu_text">Email</div>
        <a data-cursor-type="medium" href="mailto:hi@algorhythm-vit.in">hi@algorhythm-vit.in</a>
      </div>
    </div>
    <main id="main">
      <div class="data-scroll">
        <div class="page_header type_two box-animate">
          <h1 class="event_title">Data</h1>
        </div>
        <div class="container text_center top_60 box-animate row">


              <div class="col-xl-12" style="margin: 10px">
                <a href="data.php?event=hackathon"
                  class="submit_btn visible"
                  data-dist="2"
                  target="_blank"
                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
Hackathon
                </a>
              </div>
              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=competitive_coding"
                  class="submit_btn visible"
                  data-dist="2"
                                    target="_blank"

                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
Competitive Coding
                </a>
              </div>

              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=error_hunting"
                  class="submit_btn visible"
                  data-dist="2"
                  data-cursor-type="medium"
                                    target="_blank"

                  value="Hackathon"
                                    name="submit_button"

                />
Error Hunting
                </a>
              </div>

              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=circuit_frenzy"
                  class="submit_btn visible"
                  data-dist="2"
                  data-cursor-type="medium"
                                    target="_blank"

                  value="Hackathon"
                                    name="submit_button"

                />
Circuit Frenzy
                </a>
              </div>

              
              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=e_portfolio"
                  class="submit_btn visible"
                                    target="_blank"

                  data-dist="2"
                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
E-Portfolio
                </a>
              </div>

              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=csgo"
                  class="submit_btn visible"
                  data-dist="2"
                                    target="_blank"

                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
CS-GO
                </a>
              </div>

              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=valorant"
                                 target="_blank"

                  class="submit_btn visible"
                  data-dist="2"
                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
Valorant
                </a>
              </div>

              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=codm"
                                 target="_blank"
                  class="submit_btn visible"
                  data-dist="2"
                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
COD-M
                </a>
              </div>

              <div class="col-xl-12"  style="margin: 10px">
               <a href="data.php?event=chess_variants"
                  class="submit_btn visible"
                                    target="_blank"

                  data-dist="2"
                  data-cursor-type="medium"
                  value="Hackathon"
                                    name="submit_button"

                />
Chess Variants
                </a>
              </div>


              
    
        </div>
        
        
        
    </main>

    <script src="/../js/jquery.js"></script>
    <script src="/../js/plugins.js"></script>
    <script src="/../js/main.js"></script>
  </body>
</html>
