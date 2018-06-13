<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
  <meta name="keywords" content="Sensors, micro-location, Bluetooth, BLE, IoT, Internet Of Things">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:title" content="Kasia i Marcin Kaczmarek">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="image_src" type="image/jpeg" href="" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet/less" type="text/css" href="less/style.less" />
  <link rel="stylesheet/less" type="text/css" href="less/<768.less" />
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
  <link rel="stylesheet" href="less/blog.css" media="all">
  <link rel="stylesheet" href="less/<1200.css" media="all">
  <link rel="stylesheet" href="less/<786.css" media="all">
  <!-- Tutaj wstawić Google Analytics -->
  <?php wp_head();?>
</head>
<body>
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-lg">
        <a id="logo" class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
          <svg width="89px" height="85px" viewBox="0 0 89 85" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <desc>Kasia i Marcin logo</desc>
            <defs>
              <polygon id="path-1" points="0 84.2907 88.949 84.2907 88.949 -0.0003 0 -0.0003"></polygon>
            </defs>
            <g id="logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="strona-główna" transform="translate(-22.000000, -26.000000)">
                <g id="Page-1" transform="translate(22.000000, 26.000000)">
                  <path d="M62.6195,68.7474 L53.2265,55.7004 L56.5245,48.1684 L71.5795,68.7474 L62.6195,68.7474 Z M44.5845,68.7474 L36.6075,68.7474 L36.6075,27.7644 L44.5845,27.7644 L44.5845,47.2444 L61.8105,27.7054 L70.5035,27.7054 L44.5845,57.5234 L44.5845,68.7474 Z M52.8265,12.0464 C32.8765,12.0464 16.7035,28.2194 16.7035,48.1684 C16.7035,68.1184 32.8765,84.2904 52.8265,84.2904 C72.7765,84.2904 88.9485,68.1184 88.9485,48.1684 C88.9485,28.2194 72.7765,12.0464 52.8265,12.0464 Z" id="Fill-1" fill="#49DEFC"></path>
                  <path d="M35.2533,17.6263 C35.2533,27.3613 27.3613,35.2533 17.6273,35.2533 C7.8923,35.2533 0.0003,27.3613 0.0003,17.6263 C0.0003,7.8923 7.8923,0.0003 17.6273,0.0003 C27.3613,0.0003 35.2533,7.8923 35.2533,17.6263" id="Fill-3" fill="#FEFEFE"></path>
                  <path d="M32.2044,16.8206 C32.2044,24.8266 25.7144,31.3166 17.7074,31.3166 C9.7014,31.3166 3.2114,24.8266 3.2114,16.8206 C3.2114,8.8136 9.7014,2.3236 17.7074,2.3236 C25.7144,2.3236 32.2044,8.8136 32.2044,16.8206" id="Fill-5" fill="#F03A47"></path>
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <g id="Clip-7"></g>
                  <text id="1" mask="url(#mask-2)" font-family="JosefinSans-Bold, Josefin Sans" font-size="21.1271" font-weight="bold" fill="#FEFEFE">
                    <tspan x="14.3311" y="23.231">1</tspan>
                  </text>
                </g>
              </g>
            </g>
          </svg>
        </a>
        <button class="navbar-toggler hamburger" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <svg width="24px" height="22px" viewBox="0 0 24 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                <g id="Tablet" transform="translate(-408.000000, -75.000000)" stroke="#2A2D34">
                  <g id="Group" transform="translate(408.000000, 74.000000)">
                    <path d="M0.5,1.5 L23.5,1.5" id="Line-3"></path>
                    <path d="M0.5,11.5 L23.5,11.5" id="Line-3"></path>
                    <path d="M0.5,22.5 L23.5,22.5" id="Line-3"></path>
                  </g>
                </g>
              </g>
            </svg>
          </span>
        </button>

        <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="menu-element" href="">O NAS</a></li>
            <li class="nav-item"><a class="menu-element" href="">SKLEP</a></li>
            <li class="nav-item"><a class="menu-element" href="">NASZE PROJEKTY</a></li>
            <li class="nav-item"><a class="menu-element" href="">WYDARZENIA</a></li>
            <li class="nav-item"><a class="menu-element" href="">BLOG</a></li>
            <li class="nav-item"><a class="menu-element" href="">ZESPÓŁ</a></li>
            <li class="nav-item"><a class="menu-element" href="">KONTAKT</a></li>
          </ul>
          <ul class="social-media d-flex">
            <li class="nav-item order-1 order-lg-2 sm-icon">
              <a class="" href="">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
                  <desc>Facebook</desc>
                  <defs>
                    <polygon id="path-1" points="0 0 24 0 24 23.9999 0 23.9999"></polygon>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="strona-główna---Desktop-HD" transform="translate(-1332.000000, -61.000000)">
                      <g id="Page-1" transform="translate(1332.000000, 61.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <g id="Clip-2"></g>
                        <path d="M15,7.9999 L13.65,7.9999 C13.112,7.9999 13,8.2209 13,8.7779 L13,9.9999 L15,9.9999 L14.791,11.9999 L13,11.9999 L13,18.9999 L10,18.9999 L10,11.9999 L8,11.9999 L8,9.9999 L10,9.9999 L10,7.6919 C10,5.9229 10.931,4.9999 13.029,4.9999 L15,4.9999 L15,7.9999 Z M12,-0.0001 C5.373,-0.0001 0,5.3729 0,11.9999 C0,18.6269 5.373,23.9999 12,23.9999 C18.627,23.9999 24,18.6269 24,11.9999 C24,5.3729 18.627,-0.0001 12,-0.0001 Z" id="Fill-1" fill="#2A2D34" mask="url(#mask-2)"></path>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </li>
            <li class="nav-item order-2 order-lg-3 sm-icon sm-icon-end">
              <a class="" href="">
                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch -->
                  <desc>Instagram</desc>
                  <defs>
                    <polygon id="path-1" points="0 0 24 0 24 24 0 24"></polygon>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="strona-główna---Desktop-HD" transform="translate(-1293.000000, -61.000000)">
                      <g id="Page-1" transform="translate(1293.000000, 61.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <g id="Clip-2"></g>
                        <path d="M18.958,14.886 C18.843,17.431 17.426,18.841 14.887,18.958 C14.14,18.991 13.901,19 12,19 C10.099,19 9.861,18.991 9.114,18.958 C6.57,18.841 5.159,17.429 5.042,14.886 C5.008,14.14 5,13.901 5,12 C5,10.099 5.008,9.861 5.042,9.114 C5.159,6.57 6.571,5.159 9.114,5.043 C9.861,5.008 10.099,5 12,5 C13.901,5 14.14,5.008 14.887,5.043 C17.432,5.16 18.844,6.575 18.958,9.114 C18.992,9.861 19,10.099 19,12 C19,13.901 18.992,14.14 18.958,14.886 M12,0 C5.373,0 0,5.373 0,12 C0,18.627 5.373,24 12,24 C18.627,24 24,18.627 24,12 C24,5.373 18.627,0 12,0 M14.333,12 C14.333,13.289 13.288,14.333 12,14.333 C10.712,14.333 9.667,13.289 9.667,12 C9.667,10.711 10.712,9.667 12,9.667 C13.288,9.667 14.333,10.711 14.333,12 M15.737,9.104 C15.273,9.104 14.897,8.728 14.897,8.264 C14.897,7.8 15.273,7.424 15.737,7.424 C16.201,7.424 16.577,7.8 16.577,8.264 C16.577,8.727 16.201,9.104 15.737,9.104 M12,15.595 C10.015,15.595 8.405,13.986 8.405,12 C8.405,10.015 10.015,8.406 12,8.406 C13.985,8.406 15.595,10.015 15.595,12 C15.595,13.985 13.985,15.595 12,15.595 M14.829,6.302 C14.091,6.268 13.869,6.262 12,6.262 C10.131,6.262 9.91,6.269 9.172,6.302 C7.273,6.389 6.389,7.288 6.302,9.172 C6.269,9.91 6.261,10.131 6.261,12 C6.261,13.868 6.269,14.09 6.302,14.829 C6.389,16.708 7.269,17.612 9.172,17.699 C9.909,17.732 10.131,17.74 12,17.74 C13.87,17.74 14.091,17.733 14.829,17.699 C16.728,17.613 17.611,16.711 17.699,14.829 C17.732,14.091 17.739,13.868 17.739,12 C17.739,10.131 17.732,9.91 17.699,9.172 C17.611,7.289 16.726,6.389 14.829,6.302" id="Fill-1" fill="#2A2D34" mask="url(#mask-2)"></path>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
