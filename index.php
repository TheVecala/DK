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

<style>
body, h1, h2, h3, h4, h5, h6 { font-family: "Lucida Console", "Courier New", monospace; }
.w3-row-padding img { margin-bottom: 12px; }
.w3-sidebar { width: 120px; background: #222; }
#main { margin-left: 120px; }
@media only screen and (max-width: 600px) { #main { margin-left: 0; } }

/* Sjednocené sekce */
.page-section { padding: 48px 16px 48px; max-width: 980px; margin: 0 auto; box-sizing: border-box; }
.page-section h2 { font-size: 1.4rem; color: #fff; margin: 0 0 16px; letter-spacing: 1px; text-transform: uppercase; border-bottom: 1px solid #444; padding-bottom: 8px; }
@media (max-width: 600px) {
  .page-section { scroll-margin-top: 44px; padding-top: 24px; }
}

.video-container {
  position: relative; padding-bottom: 56.25%;
  height: 0; overflow: hidden; width: 100%;
}
.video-container iframe {
  position: absolute; top: 0; left: 0; width: 100%; height: 100%;
}

/* ===== AUDIO PŘEHRÁVAČ ===== */
.pw { background:#111; border:1px solid #1a6fba; border-radius:8px; padding:20px; font-family:"Courier New",monospace; box-sizing:border-box; max-width:480px; }
.pw-label { font-size:12px; color:#888; letter-spacing:2px; text-transform:uppercase; margin-bottom:12px; }
.pw-title { font-size:17px; color:#fff; margin-bottom:4px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
.pw-subtitle { font-size:13px; color:#888; margin-bottom:14px; }
.pw-progress-wrap { position:relative; height:5px; background:#333; cursor:pointer; margin-bottom:6px; }
.pw-progress-fill { height:100%; background:#ddd; width:0%; pointer-events:none; }
.pw-times { display:flex; justify-content:space-between; font-size:13px; color:#888; margin-bottom:14px; }
.pw-controls-row { display:flex; align-items:center; gap:10px; margin-bottom:16px; }
.pw-controls { display:flex; align-items:center; justify-content:center; gap:6px; flex-shrink:0; }
.pw-btn { background:transparent; border:1px solid #444; color:#bbb; border-radius:4px; width:40px; height:40px; cursor:pointer; display:flex; align-items:center; justify-content:center; padding:0; transition:background .15s,border-color .15s; }
.pw-btn:hover { background:#222; border-color:#bbb; color:#fff; }
.pw-btn.pw-play { width:48px; height:48px; border-color:#ccc; color:#fff; }
.pw-btn.pw-active { background:#222; border-color:#fff; color:#fff; }
.pw-btn svg { width:20px; height:20px; fill:currentColor; flex-shrink:0; }
.pw-btn.pw-play svg { width:24px; height:24px; }
.pw-volume { display:flex; align-items:center; gap:8px; flex:1; min-width:0; }
.pw-vol-icon { display:flex; flex-shrink:0; }
.pw-vol-icon svg { width:18px; height:18px; fill:#888; }
.pw-vol-slider { flex:1; min-width:0; -webkit-appearance:none; appearance:none; height:4px; background:#333; outline:none; cursor:pointer; }
.pw-vol-slider::-webkit-slider-thumb { -webkit-appearance:none; width:14px; height:14px; border-radius:50%; background:#bbb; cursor:pointer; }
.pw-vol-slider::-moz-range-thumb { width:14px; height:14px; border-radius:50%; background:#bbb; cursor:pointer; border:none; }

/* Hlasitost pod tlačítky — přehrávač 1 */
.pw-volume-below { display:flex; align-items:center; gap:8px; width:60%; margin-bottom:16px; }
.pw-vol-wrap { position:relative; flex:1; display:flex; align-items:center; height:20px; }
.pw-vol-track-bg {
  position:absolute; left:0; right:0;
  height:14px;
  background: linear-gradient(to right, #2a2a2a, #666);
  clip-path: polygon(0 44%, 100% 10%, 100% 90%, 0 56%);
  pointer-events:none;
  border-radius:0 3px 3px 0;
}
.pw-vol-wrap .pw-vol-slider {
  position:relative; z-index:1;
  width:100%; background:transparent;
}
.pw-vol-wrap .pw-vol-slider::-webkit-slider-thumb { background:#ccc; width:16px; height:16px; }
.pw-vol-wrap .pw-vol-slider::-moz-range-thumb { background:#ccc; width:16px; height:16px; }
.pw-divider { border:none; border-top:1px solid #222; margin:0 0 12px; }
.pw-playlist { list-style:none; margin:0; padding:0; }
@media (max-width:600px) {
  .pw-playlist { max-height:400px; overflow-y:auto; }
  .pw-playlist::-webkit-scrollbar { width:4px; }
  .pw-playlist::-webkit-scrollbar-track { background:#111; }
  .pw-playlist::-webkit-scrollbar-thumb { background:#333; border-radius:2px; }
}
.pw-playlist li { display:flex; align-items:center; gap:10px; padding:8px 6px; cursor:pointer; border-radius:3px; font-size:14px; color:#888; transition:background .1s; }
.pw-playlist li:hover { background:#1a1a1a; color:#fff; }
.pw-playlist li.pw-active-track { color:#fff; background:#1a1a1a; }
.pw-playlist li .pw-num { min-width:18px; text-align:right; flex-shrink:0; }
.pw-playlist li .pw-dur { margin-left:auto; flex-shrink:0; }

/* Mobilní lišta */
.mob-link { display:inline-block; width:25%; color:#888; font-family:Arial,sans-serif; font-size:13px; letter-spacing:1px; padding:15px 0; text-transform:uppercase; text-align:center; text-decoration:none; background:#111; border-bottom:1px solid #333; box-sizing:border-box; transition:background .15s,color .15s; }
.mob-link:hover { background:#222; color:#eee; }
.mob-link.mob-active { background:#000; color:#fff; }
</style>
</head>
<body class="w3-black">

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <img src="dk_logo.jpg" style="width:100%" alt="DK logo">
  <a href="#home"   class="w3-bar-item w3-button w3-padding-large w3-hover-black nav-link" id="nav-home"><img src="ikony/drummer2.png" width="50" height="50" alt=""><p>HOME</p></a>
  <a href="#about"  class="w3-bar-item w3-button w3-padding-large w3-hover-black nav-link" id="nav-about"><img src="ikony/radio.png" width="50" height="50" alt=""><p>DEMO</p></a>
  <a href="#video"  class="w3-bar-item w3-button w3-padding-large w3-hover-black nav-link" id="nav-video"><img src="ikony/player2.png" width="50" height="50" alt=""><p>LIVE</p></a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black nav-link" id="nav-photos"><img src="ikony/drinking.png" width="50" height="50" alt=""><p>FOTKY</p></a>
</nav>

<!-- Navbar na mobilu -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div style="display:flex; border-bottom:1px solid #333;">
    <a href="#home"   class="mob-link mob-active" id="mob-home">Home</a>
    <a href="#about"  class="mob-link" id="mob-about">Demo</a>
    <a href="#video"  class="mob-link" id="mob-video">Live</a>
    <a href="#photos" class="mob-link" id="mob-photos">Fotky</a>
  </div>
</div>

<div class="w3-padding-large" id="main">

  <!-- Header -->
  <header class="w3-container w3-center w3-black" id="home" style="min-height:100vh; display:flex; flex-direction:column; align-items:center; justify-content:center; padding:32px 16px; box-sizing:border-box;">
    <h1 class="w3-jumbo">Dušanova kapela</h1>
    <img src="fotky/kapela1.jpeg" alt="Dušanova kapela" class="w3-image"
         style="border-radius:250px; max-height:65vh; width:auto; max-width:100%;">
    <p style="max-width:600px; margin-top:24px;">Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.</p>
  </header>

  <!-- Přehrávače -->
  <div class="page-section" id="about">

    <div style="max-width:480px; margin:0 auto;">
    <h2>Demo</h2>

    <!-- Přehrávač 1: Demo playlist -->
    <div class="pw">
      <!-- Záhlaví: velká ikona vlevo, nápis + progress vpravo -->
      <div style="display:flex; align-items:center; gap:14px; margin-bottom:14px;">
        <img src="ikony/radio.png" alt="" style="width:80px; height:80px; flex-shrink:0; opacity:0.85;">
        <div style="flex:1; min-width:0;">
         
          <div class="pw-title" id="p1-title">DK — Autobus</div>
          <div class="pw-progress-wrap" id="p1-progwrap" style="margin-top:10px; margin-bottom:4px;">
            <div class="pw-progress-fill" id="p1-prog"></div>
          </div>
          <div class="pw-times"><span id="p1-cur">0:00</span><span id="p1-dur">0:00</span></div>
        </div>
      </div>
      <div class="pw-controls-row">
        <div class="pw-controls">
          <button class="pw-btn" id="p1-restart" title="Začátek skladby">
            <svg viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6 8.5 6V6z"/></svg>
          </button>
          <button class="pw-btn" id="p1-prev" title="Předchozí">
            <svg viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zm2-8.14L11.03 12 8 14.14V9.86zM16 6h2v12h-2z" transform="scale(-1,1) translate(-24,0)"/></svg>
          </button>
          <button class="pw-btn pw-play" id="p1-play" title="Přehrát / Pozastavit">
            <svg viewBox="0 0 24 24" id="p1-icon"><path d="M8 5v14l11-7z"/></svg>
          </button>
          <button class="pw-btn" id="p1-next" title="Další">
            <svg viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zm2-8.14L11.03 12 8 14.14V9.86zM16 6h2v12h-2z"/></svg>
          </button>
          <button class="pw-btn" id="p1-rep" title="Opakovat">
            <svg viewBox="0 0 24 24"><path d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z"/></svg>
          </button>
        </div>
      </div>
      <div class="pw-volume-below">
        <span class="pw-vol-icon"><svg viewBox="0 0 24 24"><path d="M18.5 12c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM5 9v6h4l5 5V4L9 9H5z"/></svg></span>
        <div class="pw-vol-wrap">
          <div class="pw-vol-track-bg"></div>
          <input type="range" class="pw-vol-slider" min="0" max="100" value="80" id="p1-vol">
        </div>
      </div>
      <hr class="pw-divider">
      <ul class="pw-playlist" id="p1-list">
        <li data-src="/data/mp3_mix1/mix_bus_14_4.mp3"       class="pw-active-track"><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num"><img src="ikony/kytara.png" alt="▶" style="width:16px;height:16px;vertical-align:middle;filter:invert(1);"></span><span>DK — Autobus</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/mix_fish_30.mp3"        ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">2</span><span>DK — Fishbelly</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/mix_dum_18_1.mp3"       ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">3</span><span>DK — O dům dál</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/mix_kolotoc_16.mp3"     ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">4</span><span>DK — Kolotoč</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/mix_tvare_12.mp3"       ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">5</span><span>DK — Tváře</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/mix_mesto_14_2.mp3"     ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">6</span><span>DK — Město na kopci</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/mix_sestup_7_4.mp3"     ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">7</span><span>DK — Sestup</span><span class="pw-dur"></span></li>
        <li data-src="/data/mp3_mix1/DK_S85_T927_slunko.mp3" ><img src="ikony/kazety.png" style="width:18px;height:18px;vertical-align:middle;flex-shrink:0;"><span class="pw-num">8</span><span>DK — Slunko</span><span class="pw-dur"></span></li>
      </ul>
    </div>

    </div><!-- konec wrapperu 480px -->

  </div><!-- konec page-section -->

  <!-- Video -->
  <div class="page-section" id="video">
    <h2>Live v Unleaded cafe 2025</h2>
    <div class="video-container" style="margin-bottom:16px;">
      <iframe id="videoPlayer"
              src="https://www.youtube-nocookie.com/embed/BWg6EmP4nRI?rel=0&modestbranding=1&iv_load_policy=3"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
      </iframe>
    </div>
    <div id="videoGrid" style="display:grid; grid-template-columns:repeat(auto-fill,minmax(140px,1fr)); gap:10px; margin-top:12px;"></div>

    <!-- Přehrávač 2: Koncert — zvukový záznam -->
    <div style="max-width:480px; margin:40px auto 0;">
      <div class="pw">
        <div class="pw-subtitle" style="margin-bottom:10px;">Zvukový záznam celého koncertu</div>
        <div class="pw-title">Live v Unleaded cafe 2025</div>
        <div class="pw-progress-wrap" id="p2-progwrap" style="margin-top:12px;">
          <div class="pw-progress-fill" id="p2-prog"></div>
        </div>
        <div class="pw-times"><span id="p2-cur">0:00</span><span id="p2-dur">0:00</span></div>
        <div class="pw-controls-row">
          <div class="pw-controls">
            <button class="pw-btn" id="p2-restart" title="Začátek">
              <svg viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6 8.5 6V6z"/></svg>
            </button>
            <button class="pw-btn pw-play" id="p2-play" title="Přehrát / Pozastavit">
              <svg viewBox="0 0 24 24" id="p2-icon"><path d="M8 5v14l11-7z"/></svg>
            </button>
          </div>
          <div class="pw-volume">
            <span class="pw-vol-icon"><svg viewBox="0 0 24 24"><path d="M18.5 12c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM5 9v6h4l5 5V4L9 9H5z"/></svg></span>
            <div class="pw-vol-wrap">
              <div class="pw-vol-track-bg"></div>
              <input type="range" class="pw-vol-slider" min="0" max="100" value="80" id="p2-vol">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Fotky -->
  <div class="page-section" id="photos">
    <h2>Fotky</h2>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="fotky/dusan1.jpg" style="width:100%" alt="">
        <img src="fotky/DK_zk.jpg"  style="width:100%" alt="">
      </div>
      <div class="w3-half">
        <img src="fotky/kopr2.jpg" style="width:100%" alt="">
      </div>
    </div>
  </div>

  <!-- Kontakt -->
  <div class="page-section" id="kontakt" style="color:#bbb;">
    <h2 style="color:#ccc;">Kontakt</h2>
    <div class="w3-section">
      <p style="display:flex; align-items:center; gap:10px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="#666" style="flex-shrink:0;" aria-hidden="true">
          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/>
        </svg>
        Email: dusan@mezi3a5.cz
      </p>
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
      <div style="display:none; opacity:0; visibility:hidden;">
        <label>Nevyplňujte toto pole:</label>
        <input type="text" name="robot_check" value="">
      </div>
      <p><textarea name="Message" required rows="5" placeholder="Zpráva pro kapelu..."
        style="width:100%; background:#1a1a1a; color:#ccc; border:1px solid #333; border-radius:6px; padding:12px; font-family:'Courier New',monospace; font-size:13px; resize:vertical; box-sizing:border-box;"></textarea></p>
      <p><input type="text" name="Name" required placeholder="Jméno"
        style="width:100%; background:#1a1a1a; color:#ccc; border:1px solid #333; border-radius:6px; padding:12px; font-family:'Courier New',monospace; font-size:13px; box-sizing:border-box;"></p>
      <p>
        <button type="submit"
          style="background:transparent; color:#bbb; border:1px solid #444; border-radius:6px; padding:8px 18px; font-family:'Courier New',monospace; font-size:13px; letter-spacing:1px; cursor:pointer; display:inline-flex; align-items:center; gap:8px; transition:background .15s,border-color .15s,color .15s;"
          onmouseover="this.style.background='#222';this.style.borderColor='#bbb';this.style.color='#fff';"
          onmouseout="this.style.background='transparent';this.style.borderColor='#444';this.style.color='#bbb';">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
          ODESLAT
        </button>
      </p>
    </form>
  </div>

</div><!-- konec #main -->

<script>
function fmtTime(s) {
  if (!s || isNaN(s)) return '0:00';
  return Math.floor(s / 60) + ':' + String(Math.floor(s % 60)).padStart(2, '0');
}

/* ===== PŘEHRÁVAČ 1 — Demo playlist ===== */
(function () {
  const audio   = new Audio();
  const items   = Array.from(document.querySelectorAll('#p1-list li'));
  const srcs    = items.map(li => li.dataset.src);
  const names   = items.map(li => li.querySelector('span:nth-child(3)').textContent);
  let current   = 0;
  let repeat    = false;

  const btnPlay    = document.getElementById('p1-play');
  const icon       = document.getElementById('p1-icon');
  const btnPrev    = document.getElementById('p1-prev');
  const btnNext    = document.getElementById('p1-next');
  const btnRestart = document.getElementById('p1-restart');
  const btnRep     = document.getElementById('p1-rep');
  const progWrap   = document.getElementById('p1-progwrap');
  const progFill   = document.getElementById('p1-prog');
  const curEl      = document.getElementById('p1-cur');
  const durEl      = document.getElementById('p1-dur');
  const titleEl    = document.getElementById('p1-title');
  const volSlider  = document.getElementById('p1-vol');

  audio.volume = volSlider.value / 100;
  audio.src = srcs[0];

  function loadTrack(i, autoplay) {
    current = i;
    audio.src = srcs[i];
    titleEl.textContent = names[i];
    progFill.style.width = '0%';
    curEl.textContent = '0:00';
    durEl.textContent = '0:00';
    items.forEach((el, idx) => {
      el.classList.toggle('pw-active-track', idx === i);
      const num = el.querySelector('.pw-num');
      if (idx === i) {
        num.innerHTML = '<img src="ikony/kytara.png" alt="▶" style="width:16px;height:16px;vertical-align:middle;filter:invert(1);">';
      } else {
        num.textContent = idx + 1;
      }
    });
    if (autoplay) audio.play();
  }

  function setIcon(playing) {
    icon.innerHTML = playing
      ? '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>'
      : '<path d="M8 5v14l11-7z"/>';
  }

  btnPlay.addEventListener('click', () => { audio.paused ? audio.play() : audio.pause(); });
  audio.addEventListener('play',  () => setIcon(true));
  audio.addEventListener('pause', () => setIcon(false));

  btnRestart.addEventListener('click', () => { audio.currentTime = 0; });
  btnPrev.addEventListener('click', () => loadTrack((current - 1 + srcs.length) % srcs.length, !audio.paused));
  btnNext.addEventListener('click', () => loadTrack((current + 1) % srcs.length, !audio.paused));

  btnRep.addEventListener('click', () => {
    repeat = !repeat;
    btnRep.classList.toggle('pw-active', repeat);
  });

  audio.addEventListener('ended', () => {
    if (repeat) { audio.play(); return; }
    const next = (current + 1) % srcs.length;
    loadTrack(next, !(next === 0));
  });

  audio.addEventListener('timeupdate', () => {
    if (!audio.duration) return;
    progFill.style.width = (audio.currentTime / audio.duration * 100) + '%';
    curEl.textContent = fmtTime(audio.currentTime);
  });

  audio.addEventListener('loadedmetadata', () => {
    durEl.textContent = fmtTime(audio.duration);
    const durSpan = items[current].querySelector('.pw-dur');
    if (durSpan) durSpan.textContent = fmtTime(audio.duration);
  });

  progWrap.addEventListener('click', (e) => {
    if (!audio.duration) return;
    audio.currentTime = ((e.clientX - progWrap.getBoundingClientRect().left) / progWrap.offsetWidth) * audio.duration;
  });

  volSlider.addEventListener('input', () => { audio.volume = volSlider.value / 100; });
  items.forEach((li, i) => li.addEventListener('click', () => loadTrack(i, true)));
})();

/* ===== PŘEHRÁVAČ 2 — Live Unleaded ===== */
(function () {
  const audio      = new Audio('/data/koncert_unleaded/DK_S95_T1000_koncert.mp3');
  const btnPlay    = document.getElementById('p2-play');
  const icon       = document.getElementById('p2-icon');
  const btnRestart = document.getElementById('p2-restart');
  const progWrap   = document.getElementById('p2-progwrap');
  const progFill   = document.getElementById('p2-prog');
  const curEl      = document.getElementById('p2-cur');
  const durEl      = document.getElementById('p2-dur');
  const volSlider  = document.getElementById('p2-vol');

  audio.volume = volSlider.value / 100;

  function setIcon(playing) {
    icon.innerHTML = playing
      ? '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>'
      : '<path d="M8 5v14l11-7z"/>';
  }

  btnPlay.addEventListener('click', () => { audio.paused ? audio.play() : audio.pause(); });
  audio.addEventListener('play',  () => setIcon(true));
  audio.addEventListener('pause', () => setIcon(false));
  btnRestart.addEventListener('click', () => { audio.currentTime = 0; });

  audio.addEventListener('timeupdate', () => {
    if (!audio.duration) return;
    progFill.style.width = (audio.currentTime / audio.duration * 100) + '%';
    curEl.textContent = fmtTime(audio.currentTime);
  });
  audio.addEventListener('loadedmetadata', () => { durEl.textContent = fmtTime(audio.duration); });

  progWrap.addEventListener('click', (e) => {
    if (!audio.duration) return;
    audio.currentTime = ((e.clientX - progWrap.getBoundingClientRect().left) / progWrap.offsetWidth) * audio.duration;
  });
  volSlider.addEventListener('input', () => { audio.volume = volSlider.value / 100; });
})();

/* ===== AKTIVNÍ ODKAZ V SIDEBARU ===== */
(function () {
  const sections = ['home', 'about', 'video', 'photos'];
  const links = {};
  const mobLinks = {};
  sections.forEach(id => {
    links[id] = document.getElementById('nav-' + id);
    mobLinks[id] = document.getElementById('mob-' + id);
  });

  function setActive(id) {
    sections.forEach(s => {
      if (links[s])    links[s].classList.toggle('w3-black', s === id);
      if (mobLinks[s]) mobLinks[s].classList.toggle('mob-active', s === id);
    });
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) setActive(entry.target.id);
    });
  }, { threshold: 0.25 });

  sections.forEach(id => {
    const el = document.getElementById(id);
    if (el) observer.observe(el);
  });

  /* Okamžité zvýraznění při kliknutí — desktop i mobil */
  sections.forEach(id => {
    if (links[id])    links[id].addEventListener('click', () => setActive(id));
    if (mobLinks[id]) mobLinks[id].addEventListener('click', () => setActive(id));
  });

  setActive('home');
})();
(function () {
  const videos = [
    { id: 'BWg6EmP4nRI', title: 'DK — Autobus' },
    { id: 'XpCJqwfjje0', title: 'DK — Fishbelly' },
    { id: 'zqf4TJtvRsw', title: 'DK — Kolotoč' },
    { id: 'KSZIlw23K5s', title: 'DK — Tváře' },
    { id: '1IGYq1520BM', title: 'DK — O dům dál' },
    { id: 'SBz-Ofr01k4', title: 'DK — Město' },
    { id: '7pwvNBzqQm4', title: 'DK — Sestup' },
    { id: 'znySxPRXuBg', title: 'DK — Slunko' },
  ];
  const grid   = document.getElementById('videoGrid');
  const player = document.getElementById('videoPlayer');
  let activeCard = null;

  videos.forEach((v, i) => {
    const card = document.createElement('div');
    card.style.cssText = 'background:#1a1a1a;border:2px solid transparent;border-radius:6px;overflow:hidden;cursor:pointer;';
    card.innerHTML =
      '<div style="position:relative;padding-bottom:56.25%;background:#000;overflow:hidden;">' +
        '<img src="https://img.youtube.com/vi/' + v.id + '/mqdefault.jpg" alt="' + v.title + '" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;display:block;">' +
        '<div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(0,0,0,0.3);">' +
          '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="white" opacity="0.85"><path d="M8 5v14l11-7z"/></svg>' +
        '</div></div>' +
      '<div style="padding:6px 8px 8px;font-size:12px;color:#ddd;line-height:1.3;">' + v.title + '</div>';

    if (i === 0) { card.style.border = '2px solid #2288cc'; activeCard = card; }
    card.addEventListener('click', () => {
      if (activeCard) activeCard.style.border = '2px solid transparent';
      card.style.border = '2px solid #2288cc';
      activeCard = card;
      player.src = 'https://www.youtube-nocookie.com/embed/' + v.id + '?rel=0&autoplay=1&modestbranding=1&iv_load_policy=3';
    });
    grid.appendChild(card);
  });
})();
</script>
</body>
</html>
