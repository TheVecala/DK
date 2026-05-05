<!DOCTYPE html>
<html lang="cs">
<head>
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<link rel="manifest" href="/site.webmanifest" />

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dušanova kapela</title>
    <meta name="description" content="Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="js/player/soundmanager2.js"></script>
<script src="js/player/bar-ui.js"></script>
<link rel="stylesheet" href="css/player/bar-ui.css" />

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Lucida Console", "Courier New", monospace;}
.w3-row-padding img {margin-bottom: 12px}
.w3-sidebar {width: 120px;background: #222;}
#main {margin-left: 120px}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

.sm2-bar-ui {
 font-size: 16px;
}
.sm2-bar-ui .sm2-main-controls,
.sm2-bar-ui .sm2-playlist-drawer {
 background-color: #2288cc;
}
.sm2-bar-ui .sm2-inline-texture {
 background: transparent;
}

        /* Malá úprava pro responzivní iframe */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Poměr stran 16:9 */
            height: 0;
            overflow: hidden;
            width: 100%;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="dk_logo.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <img src="singer.png" width="50" height="50" alt="">
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="kytarista.png" width="50" height="50" alt="">
    <p>NAHRÁVKY</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="singer.png" width="50" height="50" alt="">
    <p>FOTKY</p>
  </a>
  <a href="#video" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src="kytarista.png" width="50" height="50" alt="">
    <p>VIDEO</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">NAHRÁVKY</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">FOTKY</a>
    <a href="#video" class="w3-bar-item w3-button" style="width:25% !important">VIDEO</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span>Dušanova kapela</h1>
    <img src="kapela1.jpeg" alt="Dušanova kapela" class="w3-image" width="992" height="1108">
    <p>Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.</p>
  </header>

  <!-- player Section -->
  <div class="w3-content w3-justify w3-padding-64" id="about">
      <div class="w3-display-container">
      <hr>
      <h2>Demo</h2>

        <!-- fixed, full-width player -->
        <div class="sm2-bar-ui  playlist-open flat  textured full-width">

         <div class="bd sm2-main-controls">

          <div class="sm2-inline-texture"></div>
          <div class="sm2-inline-gradient"></div>

          <div id="tady_stiskni" class="sm2-inline-element sm2-button-element" data-container="body" data-toggle="popover" data-placement="top" data-content=" ">
           <div class="sm2-button-bd">
            <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
           </div>
          </div>

          <div class="sm2-inline-element sm2-inline-status">

           <div class="sm2-playlist">
            <div class="sm2-playlist-target">
             <noscript><p>JavaScript is required.</p></noscript>
            </div>
           </div>

           <div class="sm2-progress">
            <div class="sm2-row">
            <div class="sm2-inline-time">0:00</div>
             <div class="sm2-progress-bd">
              <div class="sm2-progress-track">
               <div class="sm2-progress-bar"></div>
               <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
              </div>
             </div>
             <div class="sm2-inline-duration">0:00</div>
            </div>
           </div>

          </div>

          <div class="sm2-inline-element sm2-button-element sm2-volume">
           <div class="sm2-button-bd">
            <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
            <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
           </div>
          </div>

          <div class="sm2-inline-element sm2-button-element">
           <div class="sm2-button-bd">
            <a href="#prev" title="Previous" class="sm2-inline-button previous">&lt; previous</a>
           </div>
          </div>

          <div class="sm2-inline-element sm2-button-element">
           <div class="sm2-button-bd">
            <a href="#next" title="Next" class="sm2-inline-button next">&gt; next</a>
           </div>
          </div>

          <div class="sm2-inline-element sm2-button-element">
           <div class="sm2-button-bd">
            <a href="#repeat" title="Repeat playlist" class="sm2-inline-button repeat">&infin; repeat</a>
           </div>
          </div>

          <div class="sm2-inline-element sm2-button-element sm2-menu">
           <div class="sm2-button-bd">
            <a href="#menu" class="sm2-inline-button menu">menu</a>
           </div>
          </div>

         </div>

         <div class="bd sm2-playlist-drawer sm2-element">

          <div class="sm2-inline-texture">
           <div class="sm2-box-shadow"></div>
          </div>

          <div class="sm2-playlist-wrapper">

            <ul class="sm2-playlist-bd">
              <!-- OPRAVENO: cesty změněny z /dk/data/ na /data/ pro novou doménu -->
              <li><a href="/data/mp3_mix1/mix_bus_14_4.mp3"><b>DK</b> - Autobus</a></li>
              <li><a href="/data/mp3_mix1/mix_fish_30.mp3"><b>DK</b> - Fishbelly</a></li>
              <li><a href="/data/mp3_mix1/mix_dum_18_1.mp3"><b>DK</b> - O dům dál</a></li>
              <li><a href="/data/mp3_mix1/mix_kolotoc_16.mp3"><b>DK</b> - Kolotoč</a></li>
              <li><a href="/data/mp3_mix1/mix_tvare_12.mp3"><b>DK</b> - Tváře</a></li>
              <li><a href="/data/mp3_mix1/mix_mesto_14_2.mp3"><b>DK</b> - Město na kopci</a></li>
              <li><a href="/data/mp3_mix1/mix_sestup_7_4.mp3"><b>DK</b> - Sestup</a></li>
              <li><a href="/data/mp3_mix1/DK_S85_T927_slunko.mp3"><b>DK</b> - Slunko</a></li>
            </ul>

          </div>

         </div>

        </div>
        <!--prehravac-->
      </div>

      <div class="w3-display-container">
      <hr>
      <h2>Live v Unleaded cafe 2025</h2>

      <div class="sm2-bar-ui compact full-width">

       <div class="bd sm2-main-controls">

        <div class="sm2-inline-texture"></div>
        <div class="sm2-inline-gradient"></div>

        <div class="sm2-inline-element sm2-button-element">
         <div class="sm2-button-bd">
          <a href="#play" class="sm2-inline-button play-pause">Play / pause</a>
         </div>
        </div>

        <div class="sm2-inline-element sm2-inline-status">

         <div class="sm2-playlist">
          <div class="sm2-playlist-target">
           <noscript><p>JavaScript is required.</p></noscript>
          </div>
         </div>

         <div class="sm2-progress">
          <div class="sm2-row">
          <div class="sm2-inline-time">0:00</div>
           <div class="sm2-progress-bd">
            <div class="sm2-progress-track">
             <div class="sm2-progress-bar"></div>
             <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
            </div>
           </div>
           <div class="sm2-inline-duration">0:00</div>
          </div>
         </div>

        </div>

        <div class="sm2-inline-element sm2-button-element sm2-volume">
         <div class="sm2-button-bd">
          <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
          <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
         </div>
        </div>

       </div>

       <div class="bd sm2-playlist-drawer sm2-element">

        <div class="sm2-inline-texture">
         <div class="sm2-box-shadow"></div>
        </div>

        <div class="sm2-playlist-wrapper">
          <ul class="sm2-playlist-bd">
           <!-- OPRAVENO: cesta změněna z /dk/data/ na /data/ -->
           <li><a href="/data/koncert_unleaded/DK_S95_T1000_koncert.mp3">Live v Unleaded cafe 2025</a></li>
          </ul>
        </div>

       </div>

      </div>  <!-- konec druhého přehrávače-->

      </div>

  </div>  <!-- konec player Section -->

     <!-- Portfolio Section -->
     <div class="w3-padding-64 w3-content" id="photos">
        <hr>
        <h2>Fotky</h2>

        <!-- Grid for photos -->
        <div class="w3-row-padding" style="margin:0 -16px">

          <div class="w3-half">
            <img src="dusan1.jpg" style="width:100%">
            <img src="DK_zk.jpg" style="width:100%">
          </div>

          <div class="w3-half">
            <img src="kopr2.jpg" style="width:100%">
          </div>

        </div> <!-- End photo grid -->
     </div> <!-- End Portfolio Section -->


     <!-- Grid for videos -->
     <div class="w3-container w3-padding-16" id="video">
        <hr>
        <h2>Live v Unleaded cafe 2025</h2>

        <div class="w3-row w3-border">

            <div class="w3-col m8 l8">
                <div class="video-container">
                    <iframe id="videoPlayer"
                            src="https://www.youtube.com/embed/BWg6EmP4nRI?rel=0"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>

            <div class="w3-col m4 l4">

                <div class="w3-bar-block w3-black w3-card" style="height: 100%; overflow-y: auto;">
                    <a href="#" class="w3-bar-item w3-button videoLink w3-blue" data-video-id="BWg6EmP4nRI?rel=0">DK - Autobus</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="XpCJqwfjje0?rel=0">DK - Fishbelly</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="zqf4TJtvRsw?rel=0">DK - Kolotoč</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="KSZIlw23K5s?rel=0">DK - Tváře</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="1IGYq1520BM?rel=0">DK - O dům dál</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="SBz-Ofr01k4?rel=0">DK - Město</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="7pwvNBzqQm4?rel=0">DK - Sestup</a>
                    <a href="#" class="w3-bar-item w3-button videoLink" data-video-id="znySxPRXuBg?rel=0">DK - Slunko</a>
                </div>
            </div>

        </div>
    </div>
    <!-- End video grid -->

  <!-- Kontakt Section -->
  <!-- OPRAVENO: přidáno id="kontakt" aby přesměrování po formuláři fungovalo -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="kontakt">
    <h2 class="w3-text-light-grey">Kontakt</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
       <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: dusan@mezi3a5.cz</p>
    </div><br>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo '<div class="w3-panel w3-green w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Úspěch!</h3><p>Vzkaz byl odeslán.</p></div>';
        } elseif ($_GET['status'] == 'error') {
            echo '<div class="w3-panel w3-red w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Chyba!</h3><p>Vzkaz se nepodařilo odeslat.</p></div>';
        } elseif ($_GET['status'] == 'bot') {
            echo '<div class="w3-panel w3-orange w3-display-container"><span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-large w3-display-topright">&times;</span><h3>Chyba!</h3><p>Detekován spam.</p></div>';
        }
    }
    ?>

    <p>Napiš vzkaz:</p>

    <form action="send_comment.php" method="POST">

      <!-- Honeypot ochrana proti botům - pole musí být vizuálně skryté přes CSS, ne type="hidden" -->
      <div style="display:none; opacity:0; visibility:hidden;">
          <label>Nevyplňujte toto pole, pokud jste člověk:</label>
          <input type="text" name="robot_check" value="">
      </div>

        <p><textarea class="w3-input w3-padding-16" placeholder="Zpráva pro kapelu..." required name="Message" rows="5"></textarea></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Jméno" required name="Name"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> ODESLAT
        </button>
      </p>
    </form>

  </div>


<!-- END PAGE CONTENT -->
</div>

<script>
    const activeClass = 'w3-blue';
    const videoLinks = document.querySelectorAll('.videoLink');
    const playerFrame = document.getElementById('videoPlayer');

    videoLinks.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();

        // Odebereme aktivní třídu ze všech odkazů
        videoLinks.forEach(otherLink => {
          otherLink.classList.remove(activeClass);
        });

        // Přidáme aktivní třídu kliknutému odkazu
        this.classList.add(activeClass);

        const videoId = this.getAttribute('data-video-id');

        // OPRAVENO: přidán autoplay=1 aby se video spustilo po kliknutí
        playerFrame.src = `https://www.youtube.com/embed/${videoId}&autoplay=1`;
      });
    });
</script>
</body>
</html>
