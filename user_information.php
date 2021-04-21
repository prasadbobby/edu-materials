<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
require('user_info/UserInfo.php');

//get user ip address
$ip_address = $_SERVER['REMOTE_ADDR'];

//get user ip address details with geoplugin.net
$geopluginURL = 'http://www.geoplugin.net/php.gp?id='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));


//get city name by return array
$city = $addrDetailsArr['geoplugin_city'];


//get country name by return array
$country = $addrDetailsArr['geoplugin_countryName'];


?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed'>
<link rel="stylesheet" href="./profile/user_info.css">

</head>
<body>

<div class="contact-area">
  <div class="contact">
    <main>
      <section>
        <div class="content">
           <img src="<?php echo ($_SESSION['image']); ?>" alt="Profile Image">

          <aside>
            <h1><?php echo ($_SESSION['name']); ?></h1>
            <p>Hi <?php echo ($_SESSION['name']); ?> <br>This is your Device Information</p>
          </aside>
          
          <button>
            <span>My Device info</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M14.83 30.83L24 21.66l9.17 9.17L36 28 24 16 12 28z"></path> </g> </svg>
          </button>
        </div>

        <div class="title"><p>My Device information</p></div>
      </section>

      
    </main>

    <nav>
      <a href="#" class="ip">
        <div class="icon">
          
          <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
           width="50.000000pt" height="50.000000pt" viewBox="0 0 50.000000 50.000000"
           preserveAspectRatio="xMidYMid meet">
          <g transform="translate(0.000000,50.000000) scale(0.100000,-0.100000)"
          fill="#000000" stroke="none">
          <path d="M178 464 c-59 -31 -76 -129 -37 -214 25 -55 98 -170 109 -170 11 0
          84 115 109 170 39 86 21 184 -39 215 -37 19 -107 19 -142 -1z m143 -43 c23
          -23 29 -38 29 -71 0 -44 -42 -143 -80 -190 l-20 -25 -20 25 c-39 50 -80 147
          -80 189 0 60 41 101 100 101 33 0 48 -6 71 -29z"/>
          <path d="M41 113 c-12 -38 -25 -74 -28 -80 -4 -10 48 -13 237 -13 189 0 241 3
          237 13 -3 6 -16 42 -28 79 l-23 68 -47 0 c-26 0 -51 -4 -54 -10 -4 -6 10 -10
          33 -10 40 0 40 0 60 -60 l21 -60 -199 0 -199 0 21 60 c20 60 20 60 60 60 23 0
          37 4 33 10 -3 6 -28 10 -54 10 l-47 0 -23 -67z"/>
          </g>
          </svg>
<!-- 
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
         width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000"
         preserveAspectRatio="xMidYMid meet">

        <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
        fill="#000000" stroke="none">
        <path d="M363 560 c-24 -10 -57 -65 -48 -79 8 -14 92 -61 108 -61 31 0 49 90
        25 123 -16 20 -57 29 -85 17z"/>
        <path d="M203 307 c-83 -145 -107 -207 -101 -268 4 -46 23 -47 82 -2 39 30 67
        68 137 188 49 83 89 156 89 163 0 6 -9 12 -19 12 -14 0 -40 -37 -97 -137 -69
        -122 -138 -213 -151 -199 -12 12 24 94 97 220 44 77 80 145 80 153 0 7 -8 13
        -17 13 -12 0 -44 -45 -100 -143z"/>
        </g>
        </svg> -->

        </div>

        <div class="content">
          <h1>IP Address</h1>

          <span><?php echo ''.$addrDetailsArr['geoplugin_request'];?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href="#" class="country">
        <div class="icon">
          
          <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" width="64px" height="64px">    <path d="M 70 18.074219 C 69.225 18.074219 68.450391 18.350391 67.900391 18.900391 L 14.099609 72.599609 C 12.899609 73.799609 12.899609 75.700781 14.099609 76.800781 L 22.599609 85.300781 C 23.199609 85.900781 23.899219 86.199219 24.699219 86.199219 C 25.499219 86.199219 26.300781 85.900781 26.800781 85.300781 L 70 42.199219 L 102 74.199219 L 102 114.5 C 99.1 115.5 96.899219 118 96.199219 121 L 84 121 L 84 80 C 84 78.3 82.7 77 81 77 L 59 77 C 57.3 77 56 78.3 56 80 L 56 121 L 38 121 L 38 94 C 38 92.3 36.7 91 35 91 C 33.3 91 32 92.3 32 94 L 32 101.40039 C 27.1 102.60039 23.300781 106.40078 22.300781 111.30078 C 17.400781 112.30078 13.500391 116.2 12.400391 121 L 4 121 C 2.3 121 1 122.3 1 124 C 1 125.7 2.3 127 4 127 L 99 127 C 100.7 127 102 125.7 102 124 L 102 123 C 102 121.3 103.3 120 105 120 C 106.7 120 108 121.3 108 123 L 108 124 C 108 125.7 109.3 127 111 127 L 114 127 C 115.7 127 117 125.7 117 124 C 117 122.3 115.7 121 114 121 L 113.80078 121 C 113.10078 118 110.9 115.5 108 114.5 L 108 80.199219 L 113.09961 85.300781 C 113.69961 85.900781 114.39922 86.199219 115.19922 86.199219 C 115.99922 86.199219 116.80078 85.900781 117.30078 85.300781 L 125.80078 76.800781 C 127.00078 75.600781 127.00078 73.699609 125.80078 72.599609 L 72.099609 18.900391 C 71.549609 18.350391 70.775 18.074219 70 18.074219 z M 70 25.300781 L 119.5 74.800781 L 115.30078 79 L 72.099609 35.900391 C 71.499609 35.300391 70.8 35 70 35 C 69.2 35 68.500391 35.300391 67.900391 35.900391 L 24.699219 79 L 20.5 74.800781 L 70 25.300781 z M 64 101 C 65.7 101 67 102.3 67 104 C 67 105.7 65.7 107 64 107 C 62.3 107 61 105.7 61 104 C 61 102.3 62.3 101 64 101 z M 32 107.69922 L 32 121 L 18.699219 121 C 19.799219 118.6 22.2 117 25 117 C 26.7 117 28 115.7 28 114 C 28 111.2 29.6 108.79922 32 107.69922 z M 124 121 A 3 3 0 0 0 121 124 A 3 3 0 0 0 124 127 A 3 3 0 0 0 127 124 A 3 3 0 0 0 124 121 z"/></svg>
        </div>

        <div class="content">
          <h1>Country</h1>
          <span><?php echo ''.$addrDetailsArr['geoplugin_timezone'];echo ','.$addrDetailsArr['geoplugin_countryName'];?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href="#" class="os">
        <div class="icon">
        
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
  <g>
    <path d="M495.304,61.217H16.696C7.475,61.217,0,68.693,0,77.913v356.174c0,9.22,7.475,16.696,16.696,16.696h478.609
      c9.22,0,16.696-7.475,16.696-16.696V77.913C512,68.693,504.525,61.217,495.304,61.217z M478.609,417.391H33.391V194.424h445.217
      V417.391z M478.609,161.033H33.391V94.609h445.217V161.033z"/>
  </g>
</g>
<g>
  <g>
    <path d="M443.568,103.247c-12.275,0-22.261,9.986-22.261,22.261c0,12.275,9.985,22.261,22.261,22.261
      c12.275,0,22.261-9.986,22.261-22.261C465.829,113.233,455.843,103.247,443.568,103.247z"/>
  </g>
</g>
<g>
  <g>
    <path d="M382.926,103.247c-12.275,0-22.261,9.986-22.261,22.261c0,12.275,9.986,22.261,22.261,22.261s22.261-9.986,22.261-22.261
      C405.187,113.233,395.201,103.247,382.926,103.247z"/>
  </g>
</g>
<g>
  <g>
    <path d="M322.285,103.247c-12.275,0-22.261,9.986-22.261,22.261c0,12.275,9.985,22.261,22.261,22.261
      c12.275,0,22.261-9.986,22.261-22.261C344.546,113.233,334.56,103.247,322.285,103.247z"/>
  </g>
</g>
<g>
  <g>
    <path d="M235.45,293.193l-54.653-46.504c-7.022-5.976-17.559-5.128-23.535,1.896c-5.976,7.022-5.127,17.559,1.896,23.535
      l39.709,33.789l-39.709,33.789c-7.023,5.976-7.871,16.512-1.896,23.535c5.975,7.022,16.512,7.871,23.535,1.896l54.653-46.504
      C243.28,311.962,243.28,299.854,235.45,293.193z"/>
  </g>
</g>
<g>
  <g>
    <path d="M342.022,335.716h-65.954c-9.22,0-16.696,7.475-16.696,16.696s7.475,16.696,16.696,16.696h65.954
      c9.22,0,16.696-7.475,16.696-16.696S351.242,335.716,342.022,335.716z"/>
  </g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>


        </div>

        <div class="content upper">
          <h1>Operating System</h1>
          <span><?= UserInfo::get_os();?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>

      <a href="#" class="browser">
        <div class="icon">
          
          <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
           width="64.000000pt" height="64.000000pt" viewBox="0 0 64.000000 64.000000"
           preserveAspectRatio="xMidYMid meet">
          <g transform="translate(0.000000,64.000000) scale(0.100000,-0.100000)"
          fill="#000000" stroke="none">
          <path d="M190 599 c-60 -27 -117 -83 -146 -144 -19 -39 -24 -67 -24 -125 0
          -88 22 -145 78 -204 57 -59 122 -86 212 -86 90 0 155 27 212 86 56 59 78 116
          78 204 0 58 -5 86 -24 125 -29 61 -86 117 -146 144 -62 28 -178 28 -240 0z
          m226 -28 c42 -19 105 -75 124 -111 10 -20 8 -20 -133 -20 -130 0 -147 -2 -170
          -20 -14 -11 -29 -30 -32 -42 -6 -17 -14 -9 -51 53 l-43 74 27 23 c72 63 194
          81 278 43z m-257 -211 c34 -61 73 -117 84 -125 12 -8 39 -15 60 -15 l39 0 -37
          -67 c-21 -38 -41 -72 -45 -76 -13 -14 -94 27 -135 68 -52 53 -75 107 -75 182
          0 57 23 143 39 143 3 0 35 -50 70 -110z m405 44 c13 -34 5 -140 -13 -180 -38
          -83 -135 -153 -213 -154 -21 0 -38 3 -38 6 0 3 27 52 60 108 65 111 77 168 44
          214 l-15 22 84 0 c68 0 86 -3 91 -16z m-197 -16 c51 -48 15 -138 -56 -138 -47
          0 -81 32 -81 79 0 72 84 109 137 59z"/>
          </g>
          </svg>

        </div>

        <div class="content">
          <h1>Browser</h1>
          <span><?= UserInfo::get_browser();?></span>
        </div>
        
        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"> <g class="nc-icon-wrapper" fill="#444444"> <path d="M17.17 32.92l9.17-9.17-9.17-9.17L20 11.75l12 12-12 12z"></path> </g> </svg>
      </a>
    </nav>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="./profile/script.js"></script>

</div>
</div>
       

 <?php
include('includes/scripts.php');
include('includes/footer.php');
?>