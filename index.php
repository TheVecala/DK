<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#080808">
  <meta name="color-scheme" content="dark">
  <title>Dušanova kapela</title>
  <meta name="description" content="Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.">
  <link rel="canonical" href="https://www.dusanovakapela.cz/">

  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">

  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.dusanovakapela.cz/">
  <meta property="og:title" content="Dušanova kapela">
  <meta property="og:description" content="Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.">
  <meta property="og:image" content="https://www.dusanovakapela.cz/fotky/kapela1.jpeg">
  <meta property="og:image:width" content="1600">
  <meta property="og:image:height" content="1196">
  <meta property="og:locale" content="cs_CZ">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Dušanova kapela">
  <meta name="twitter:description" content="Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.">
  <meta name="twitter:image" content="https://www.dusanovakapela.cz/fotky/kapela1.jpeg">

  <link rel="stylesheet" href="/css/site.css">
  <script src="/js/site.js" defer></script>
</head>
<body>
  <a class="skip-link" href="#main-content">Přeskočit na obsah</a>

  <nav class="side-nav" aria-label="Hlavní navigace">
    <img class="side-logo" src="/dk_logo.jpg" width="424" height="316" alt="Dušanova kapela">
    <a href="#home" class="nav-link is-active" data-section-link="home">
      <img src="/ikony/drummer2.png" width="50" height="50" alt="" aria-hidden="true">
      <span>HOME</span>
    </a>
    <a href="#about" class="nav-link" data-section-link="about">
      <img src="/ikony/radio.png" width="50" height="50" alt="" aria-hidden="true">
      <span>DEMO</span>
    </a>
    <a href="#video" class="nav-link" data-section-link="video">
      <img src="/ikony/player2.png" width="50" height="50" alt="" aria-hidden="true">
      <span>LIVE</span>
    </a>
    <a href="#photos" class="nav-link" data-section-link="photos">
      <img src="/ikony/drinking.png" width="50" height="50" alt="" aria-hidden="true">
      <span>FOTKY</span>
    </a>
    <a href="#kontakt" class="nav-link" data-section-link="kontakt">
      <img src="/ikony/jack3.png" width="50" height="50" alt="" aria-hidden="true">
      <span>KONTAKT</span>
    </a>
  </nav>

  <nav class="mobile-nav" aria-label="Mobilní navigace">
    <a href="#home" class="mobile-link is-active" data-section-link="home">Home</a>
    <a href="#about" class="mobile-link" data-section-link="about">Demo</a>
    <a href="#video" class="mobile-link" data-section-link="video">Live</a>
    <a href="#photos" class="mobile-link" data-section-link="photos">Fotky</a>
    <a href="#kontakt" class="mobile-link" data-section-link="kontakt">Kontakt</a>
  </nav>

  <main id="main-content">
    <header class="hero" id="home">
      <p class="hero-kicker">Brno · alternativní hudba</p>
      <h1>Dušanova kapela</h1>

      <picture class="hero-media">
        <source srcset="/fotky/kapela1-1200.webp" type="image/webp">
        <img class="hero-image" src="/fotky/kapela1.jpeg" width="1600" height="1196"
             alt="Dva členové Dušanovy kapely na cestě krajinou"
             fetchpriority="high" decoding="async">
      </picture>

      <p class="hero-lead">Alternativní hudební těleso vzniklé organickým procesem na troskách legendárních i bezejmenných brněnských uskupení.</p>
      <div class="hero-actions" aria-label="Rychlé odkazy">
        <a class="cta cta-primary" href="#about">Poslechnout demo</a>
        <a class="cta" href="#kontakt">Napsat kapele</a>
      </div>
    </header>

    <section class="page-section page-section-narrow" id="about" aria-labelledby="demo-heading">
      <h2 class="section-heading" id="demo-heading">Demo</h2>

      <div class="pw" aria-label="Přehrávač demo nahrávek">
        <div class="pw-header">
          <img class="pw-cover" src="/ikony/radio.png" width="80" height="80" alt="" aria-hidden="true">
          <div class="pw-track-info">
            <div class="pw-title" id="p1-title" aria-live="polite">DK — Autobus</div>
            <label class="sr-only" for="p1-progwrap">Pozice v demo nahrávce</label>
            <input class="pw-progress-wrap" id="p1-progwrap" type="range" min="0" max="1000" value="0"
                   aria-valuetext="0:00">
            <div class="pw-times" aria-live="off">
              <span id="p1-cur">0:00</span>
              <span id="p1-dur">0:00</span>
            </div>
          </div>
        </div>

        <div class="pw-controls-row">
          <div class="pw-controls" role="group" aria-label="Ovládání demo nahrávek">
            <button class="pw-btn" id="p1-restart" type="button" title="Začátek skladby" aria-label="Na začátek skladby">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6 6h2v12H6zm3.5 6 8.5 6V6z"/></svg>
            </button>
            <button class="pw-btn" id="p1-prev" type="button" title="Předchozí" aria-label="Předchozí skladba">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M8 6h2v12H8zm3 6 8 6V6z"/></svg>
            </button>
            <button class="pw-btn pw-play" id="p1-play" type="button" title="Přehrát" aria-label="Přehrát demo">
              <svg viewBox="0 0 24 24" id="p1-icon" aria-hidden="true" focusable="false"><path d="M8 5v14l11-7z"/></svg>
            </button>
            <button class="pw-btn" id="p1-next" type="button" title="Další" aria-label="Další skladba">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6 18l8.5-6L6 6v12zM16 6h2v12h-2z"/></svg>
            </button>
            <button class="pw-btn" id="p1-rep" type="button" title="Opakovat" aria-label="Opakovat skladbu" aria-pressed="false">
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M7 7h10v3l4-4-4-4v3H5v6h2V7zm10 10H7v-3l-4 4 4 4v-3h12v-6h-2v4z"/></svg>
            </button>
          </div>
        </div>

        <div class="pw-volume-below">
          <span class="pw-vol-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24"><path d="M18.5 12c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM5 9v6h4l5 5V4L9 9H5z"/></svg>
          </span>
          <div class="pw-vol-wrap">
            <div class="pw-vol-track-bg"></div>
            <label class="sr-only" for="p1-vol">Hlasitost demo nahrávek</label>
            <input type="range" class="pw-vol-slider" min="0" max="100" value="80" id="p1-vol" aria-valuetext="80 %">
          </div>
        </div>

        <hr class="pw-divider">
        <ol class="pw-playlist" id="p1-list" aria-label="Demo nahrávky">
          <li><button type="button" class="pw-track pw-active-track" data-src="/data/mp3_mix1/mix_bus_14_4.mp3" aria-current="true"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num"><img src="/ikony/kytara.png" width="16" height="16" alt="" aria-hidden="true"></span><span class="pw-track-name">DK — Autobus</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/mix_fish_30.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">2</span><span class="pw-track-name">DK — Fishbelly</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/mix_dum_18_1.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">3</span><span class="pw-track-name">DK — O dům dál</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/mix_kolotoc_16.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">4</span><span class="pw-track-name">DK — Kolotoč</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/mix_tvare_12.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">5</span><span class="pw-track-name">DK — Tváře</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/mix_mesto_14_2.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">6</span><span class="pw-track-name">DK — Město na kopci</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/mix_sestup_7_4.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">7</span><span class="pw-track-name">DK — Sestup</span><span class="pw-dur"></span></button></li>
          <li><button type="button" class="pw-track" data-src="/data/mp3_mix1/DK_S85_T927_slunko.mp3" aria-current="false"><img src="/ikony/kazety.png" width="18" height="18" alt="" aria-hidden="true"><span class="pw-num">8</span><span class="pw-track-name">DK — Slunko</span><span class="pw-dur"></span></button></li>
        </ol>
      </div>
    </section>

    <section class="page-section" id="video" aria-labelledby="live-heading">
      <h2 class="section-heading" id="live-heading">Live v Unleaded Café 2025</h2>
      <p class="section-intro">Vyber skladbu nebo spusť celý zvukový záznam koncertu.</p>

      <div class="video-container" id="videoStage">
        <button class="video-facade" id="videoFacade" type="button" aria-label="Přehrát video DK — Autobus">
          <img src="https://img.youtube.com/vi/BWg6EmP4nRI/hqdefault.jpg" width="480" height="360"
               alt="" loading="lazy" decoding="async">
          <span class="video-facade-overlay">
            <span class="video-facade-play">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              Přehrát video
            </span>
          </span>
        </button>
      </div>
      <div class="video-grid" id="videoGrid" aria-label="Výběr živých videí"></div>

      <div class="concert-player">
        <div class="pw" aria-label="Přehrávač celého koncertu">
          <div class="pw-subtitle">Zvukový záznam celého koncertu</div>
          <div class="pw-title">Live v Unleaded Café 2025</div>
          <label class="sr-only" for="p2-progwrap">Pozice v koncertním záznamu</label>
          <input class="pw-progress-wrap" id="p2-progwrap" type="range" min="0" max="1000" value="0" aria-valuetext="0:00">
          <div class="pw-times">
            <span id="p2-cur">0:00</span>
            <span id="p2-dur">0:00</span>
          </div>
          <div class="pw-controls-row">
            <div class="pw-controls" role="group" aria-label="Ovládání koncertního záznamu">
              <button class="pw-btn" id="p2-restart" type="button" title="Začátek" aria-label="Na začátek koncertního záznamu">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6h2v12H6zm3.5 6 8.5 6V6z"/></svg>
              </button>
              <button class="pw-btn pw-play" id="p2-play" type="button" title="Přehrát" aria-label="Přehrát koncertní záznam">
                <svg viewBox="0 0 24 24" id="p2-icon" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg>
              </button>
            </div>
            <div class="pw-volume">
              <span class="pw-vol-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24"><path d="M18.5 12c0-1.77-1.02-3.29-2.5-4.03v8.05c1.48-.73 2.5-2.25 2.5-4.02zM5 9v6h4l5 5V4L9 9H5z"/></svg>
              </span>
              <div class="pw-vol-wrap">
                <div class="pw-vol-track-bg"></div>
                <label class="sr-only" for="p2-vol">Hlasitost koncertního záznamu</label>
                <input type="range" class="pw-vol-slider" min="0" max="100" value="80" id="p2-vol" aria-valuetext="80 %">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section" id="photos" aria-labelledby="photos-heading">
      <h2 class="section-heading" id="photos-heading">Fotky</h2>
      <div class="photo-grid">
        <div class="photo-column">
          <picture>
            <source srcset="/fotky/dusan1-1200.webp" type="image/webp">
            <img src="/fotky/dusan1.jpg" width="3264" height="2448" loading="lazy" decoding="async"
                 alt="Dušan ve studiu za mixážním pultem">
          </picture>
          <picture>
            <source srcset="/fotky/DK_zk-1000.webp" type="image/webp">
            <img src="/fotky/DK_zk.jpg" width="1224" height="918" loading="lazy" decoding="async"
                 alt="Zkouška Dušanovy kapely s kytarami a bicími">
          </picture>
        </div>
        <div class="photo-column">
          <picture>
            <source srcset="/fotky/kopr2-640.webp" type="image/webp">
            <img src="/fotky/kopr2.jpg" width="636" height="1068" loading="lazy" decoding="async"
                 alt="Baskytarista Dušanovy kapely ve zkušebně">
          </picture>
        </div>
      </div>
    </section>

    <section class="page-section" id="kontakt" aria-labelledby="contact-heading">
      <h2 class="section-heading" id="contact-heading">Kontakt</h2>
      <p class="contact-row">
        <img src="/ikony/jack3.png" width="28" height="28" alt="" aria-hidden="true">
        <span>Email: <a href="mailto:dusan@mezi3a5.cz">dusan@mezi3a5.cz</a></span>
      </p>

      <p class="section-intro">Napiš nám vzkaz. Povinná jsou jen dvě krátká pole.</p>
      <form class="contact-form" action="/send_comment.php" method="post">
        <div hidden aria-hidden="true">
          <label for="robot-check">Nevyplňujte toto pole</label>
          <input id="robot-check" type="text" name="robot_check" value="" tabindex="-1" autocomplete="off">
        </div>

        <div class="form-field">
          <label for="message">Zpráva</label>
          <textarea id="message" name="Message" required rows="5" maxlength="5000"
                    placeholder="Co nám chceš napsat?" aria-describedby="message-help"></textarea>
          <small class="form-help" id="message-help">Maximálně 5 000 znaků.</small>
        </div>

        <div class="form-field">
          <label for="name">Jméno</label>
          <input id="name" type="text" name="Name" required maxlength="120"
                 autocomplete="name" placeholder="Jak ti máme říkat?">
        </div>

        <div class="form-actions">
          <button class="contact-submit" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
            <span>ODESLAT VZKAZ</span>
          </button>

          <?php if (isset($_GET['status'])): ?>
            <?php if ($_GET['status'] === 'success'): ?>
              <div class="form-status form-status-success" role="status" aria-live="polite">
                <img src="/ikony/sleeping.png" width="28" height="28" alt="" aria-hidden="true">
                <span>Vzkaz byl odeslán.</span>
                <button class="status-close" type="button" aria-label="Skrýt zprávu">&times;</button>
              </div>
            <?php elseif ($_GET['status'] === 'error'): ?>
              <div class="form-status form-status-error" role="alert">
                <span>Vzkaz se nepodařilo odeslat. Zkus to prosím znovu.</span>
                <button class="status-close" type="button" aria-label="Skrýt zprávu">&times;</button>
              </div>
            <?php elseif ($_GET['status'] === 'bot'): ?>
              <div class="form-status form-status-warning" role="alert">
                <span>Zpráva byla vyhodnocena jako spam.</span>
                <button class="status-close" type="button" aria-label="Skrýt zprávu">&times;</button>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </form>
    </section>

    <footer class="site-footer">
      <span>&copy; <?php echo date('Y'); ?> Dušanova kapela</span>
    </footer>
  </main>
</body>
</html>
