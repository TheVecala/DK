'use strict';

function fmtTime(seconds) {
  if (!seconds || Number.isNaN(seconds)) return '0:00';
  return `${Math.floor(seconds / 60)}:${String(Math.floor(seconds % 60)).padStart(2, '0')}`;
}

function updateProgress(input, ratio, text) {
  const bounded = Math.max(0, Math.min(1, ratio || 0));
  input.value = Math.round(bounded * Number(input.max));
  input.style.setProperty('--progress', `${bounded * 100}%`);
  if (text) input.setAttribute('aria-valuetext', text);
}

let activeAudio = null;

function coordinateAudio(audio) {
  audio.addEventListener('play', () => {
    if (activeAudio && activeAudio !== audio) activeAudio.pause();
    activeAudio = audio;
  });
}

/* Demo playlist */
(() => {
  const audio = new Audio();
  const items = Array.from(document.querySelectorAll('#p1-list .pw-track'));
  const srcs = items.map((item) => item.dataset.src);
  const names = items.map((item) => item.querySelector('.pw-track-name').textContent);
  let current = 0;
  let repeat = false;

  const btnPlay = document.getElementById('p1-play');
  const icon = document.getElementById('p1-icon');
  const btnPrev = document.getElementById('p1-prev');
  const btnNext = document.getElementById('p1-next');
  const btnBack = document.getElementById('p1-back');
  const btnForward = document.getElementById('p1-forward');
  const btnRepeat = document.getElementById('p1-rep');
  const btnMute = document.getElementById('p1-mute');
  const volumeIcon = document.getElementById('p1-vol-icon');
  const volumeValue = document.getElementById('p1-vol-value');
  const seek = document.getElementById('p1-progwrap');
  const currentTime = document.getElementById('p1-cur');
  const duration = document.getElementById('p1-dur');
  const title = document.getElementById('p1-title');
  const volume = document.getElementById('p1-vol');

  audio.preload = 'metadata';
  audio.volume = Number(volume.value) / 100;
  audio.src = srcs[0];
  coordinateAudio(audio);

  function updateVolumeState() {
    const value = Number(volume.value);
    const muted = audio.muted || value === 0;
    volume.style.setProperty('--volume', `${muted ? 0 : value}%`);
    volumeValue.textContent = `${value} %`;
    volume.setAttribute('aria-valuetext', muted && value > 0 ? `Ztlumeno, nastaveno ${value} %` : `${value} %`);
    btnMute.classList.toggle('pw-active', muted);
    btnMute.setAttribute('aria-pressed', String(audio.muted));
    btnMute.setAttribute('aria-label', audio.muted ? 'Zapnout zvuk dema' : 'Ztlumit demo');
    btnMute.title = audio.muted ? 'Zapnout zvuk' : 'Ztlumit';
    volumeIcon.innerHTML = muted
      ? '<path d="M4 9v6h4l5 4V5L8 9H4zm12.6 3 2.7-2.7-1.4-1.4-2.7 2.7-2.7-2.7-1.4 1.4 2.7 2.7-2.7 2.7 1.4 1.4 2.7-2.7 2.7 2.7 1.4-1.4z"/>'
      : '<path d="M4 9v6h4l5 4V5L8 9H4zm11.5-.8v7.6a4 4 0 0 0 0-7.6zm0-3.2v2.1a6 6 0 0 1 0 9.8V19a8 8 0 0 0 0-14z"/>';
  }

  function skipBy(seconds) {
    if (!Number.isFinite(audio.duration)) return;
    audio.currentTime = Math.max(0, Math.min(audio.duration, audio.currentTime + seconds));
  }

  function setPlayState(playing) {
    icon.innerHTML = playing
      ? '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>'
      : '<path d="M8 5v14l11-7z"/>';
    btnPlay.setAttribute('aria-label', playing ? 'Pozastavit demo' : 'Přehrát demo');
    btnPlay.title = playing ? 'Pozastavit' : 'Přehrát';
  }

  function loadTrack(index, autoplay) {
    current = index;
    audio.src = srcs[index];
    title.textContent = names[index];
    currentTime.textContent = '0:00';
    duration.textContent = '0:00';
    updateProgress(seek, 0, '0:00');

    items.forEach((item, itemIndex) => {
      const selected = itemIndex === index;
      const number = item.querySelector('.pw-num');
      item.classList.toggle('pw-active-track', selected);
      item.setAttribute('aria-current', selected ? 'true' : 'false');
      number.innerHTML = selected
        ? '<img src="ikony/kytara.png" width="16" height="16" alt="" aria-hidden="true">'
        : String(itemIndex + 1);
    });

    if (autoplay) audio.play().catch(() => setPlayState(false));
  }

  btnPlay.addEventListener('click', () => {
    if (audio.paused) audio.play().catch(() => setPlayState(false));
    else audio.pause();
  });
  audio.addEventListener('play', () => setPlayState(true));
  audio.addEventListener('pause', () => setPlayState(false));
  btnBack.addEventListener('click', () => skipBy(-10));
  btnForward.addEventListener('click', () => skipBy(10));
  btnPrev.addEventListener('click', () => {
    if (audio.currentTime > 3) audio.currentTime = 0;
    else loadTrack((current - 1 + srcs.length) % srcs.length, !audio.paused);
  });
  btnNext.addEventListener('click', () => loadTrack((current + 1) % srcs.length, !audio.paused));

  btnRepeat.addEventListener('click', () => {
    repeat = !repeat;
    btnRepeat.classList.toggle('pw-active', repeat);
    btnRepeat.setAttribute('aria-pressed', String(repeat));
  });

  audio.addEventListener('ended', () => {
    if (repeat) {
      audio.play().catch(() => setPlayState(false));
      return;
    }
    const next = (current + 1) % srcs.length;
    loadTrack(next, next !== 0);
  });

  audio.addEventListener('timeupdate', () => {
    if (!audio.duration) return;
    const timeText = `${fmtTime(audio.currentTime)} z ${fmtTime(audio.duration)}`;
    updateProgress(seek, audio.currentTime / audio.duration, timeText);
    currentTime.textContent = fmtTime(audio.currentTime);
  });

  audio.addEventListener('loadedmetadata', () => {
    duration.textContent = fmtTime(audio.duration);
    const durationLabel = items[current].querySelector('.pw-dur');
    if (durationLabel) durationLabel.textContent = fmtTime(audio.duration);
  });

  seek.addEventListener('input', () => {
    if (!audio.duration) return;
    audio.currentTime = (Number(seek.value) / Number(seek.max)) * audio.duration;
  });

  volume.addEventListener('input', () => {
    audio.volume = Number(volume.value) / 100;
    if (audio.muted && Number(volume.value) > 0) audio.muted = false;
    updateVolumeState();
  });

  btnMute.addEventListener('click', () => {
    audio.muted = !audio.muted;
    updateVolumeState();
  });

  items.forEach((item, index) => item.addEventListener('click', () => loadTrack(index, true)));
  updateVolumeState();
})();

/* Full concert recording */
(() => {
  const audio = new Audio('/data/koncert_unleaded/DK_S95_T1000_koncert.mp3');
  const btnPlay = document.getElementById('p2-play');
  const icon = document.getElementById('p2-icon');
  const btnRestart = document.getElementById('p2-restart');
  const seek = document.getElementById('p2-progwrap');
  const currentTime = document.getElementById('p2-cur');
  const duration = document.getElementById('p2-dur');
  const volume = document.getElementById('p2-vol');

  audio.preload = 'metadata';
  audio.volume = Number(volume.value) / 100;
  coordinateAudio(audio);

  function setPlayState(playing) {
    icon.innerHTML = playing
      ? '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>'
      : '<path d="M8 5v14l11-7z"/>';
    btnPlay.setAttribute('aria-label', playing ? 'Pozastavit koncertní záznam' : 'Přehrát koncertní záznam');
    btnPlay.title = playing ? 'Pozastavit' : 'Přehrát';
  }

  btnPlay.addEventListener('click', () => {
    if (audio.paused) audio.play().catch(() => setPlayState(false));
    else audio.pause();
  });
  audio.addEventListener('play', () => setPlayState(true));
  audio.addEventListener('pause', () => setPlayState(false));
  btnRestart.addEventListener('click', () => { audio.currentTime = 0; });

  audio.addEventListener('timeupdate', () => {
    if (!audio.duration) return;
    const timeText = `${fmtTime(audio.currentTime)} z ${fmtTime(audio.duration)}`;
    updateProgress(seek, audio.currentTime / audio.duration, timeText);
    currentTime.textContent = fmtTime(audio.currentTime);
  });
  audio.addEventListener('loadedmetadata', () => { duration.textContent = fmtTime(audio.duration); });

  seek.addEventListener('input', () => {
    if (!audio.duration) return;
    audio.currentTime = (Number(seek.value) / Number(seek.max)) * audio.duration;
  });
  volume.addEventListener('input', () => {
    audio.volume = Number(volume.value) / 100;
    volume.style.setProperty('--volume', `${volume.value}%`);
    volume.setAttribute('aria-valuetext', `${volume.value} %`);
  });
})();

/* Active navigation state */
(() => {
  const sectionIds = ['home', 'about', 'video', 'photos', 'kontakt'];
  const links = Array.from(document.querySelectorAll('[data-section-link]'));

  function setActive(id) {
    links.forEach((link) => {
      const active = link.dataset.sectionLink === id;
      link.classList.toggle('is-active', active);
      if (active) link.setAttribute('aria-current', 'location');
      else link.removeAttribute('aria-current');
    });
  }

  const observer = new IntersectionObserver((entries) => {
    const visible = entries
      .filter((entry) => entry.isIntersecting)
      .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
    if (visible) setActive(visible.target.id);
  }, { rootMargin: '-20% 0px -55%', threshold: [0, 0.1, 0.5] });

  sectionIds.forEach((id) => {
    const section = document.getElementById(id);
    if (section) observer.observe(section);
  });
  links.forEach((link) => link.addEventListener('click', () => setActive(link.dataset.sectionLink)));
  setActive('home');
})();

/* YouTube facade and accessible video selection */
(() => {
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
  const grid = document.getElementById('videoGrid');
  const stage = document.getElementById('videoStage');
  const facade = document.getElementById('videoFacade');
  const cards = [];

  function embedVideo(video) {
    const iframe = document.createElement('iframe');
    iframe.src = `https://www.youtube-nocookie.com/embed/${video.id}?rel=0&autoplay=1&modestbranding=1&iv_load_policy=3`;
    iframe.title = `${video.title} — přehrávač videa`;
    iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
    iframe.allowFullscreen = true;
    stage.replaceChildren(iframe);
  }

  function selectVideo(index, autoplay) {
    cards.forEach((card, cardIndex) => card.setAttribute('aria-pressed', String(cardIndex === index)));
    if (autoplay) embedVideo(videos[index]);
  }

  facade.addEventListener('click', () => selectVideo(0, true));

  videos.forEach((video, index) => {
    const card = document.createElement('button');
    card.type = 'button';
    card.className = 'video-card';
    card.setAttribute('aria-pressed', String(index === 0));
    card.setAttribute('aria-label', `Přehrát ${video.title}`);

    const media = document.createElement('span');
    media.className = 'video-card-media';
    const image = document.createElement('img');
    image.src = `https://img.youtube.com/vi/${video.id}/mqdefault.jpg`;
    image.alt = '';
    image.width = 320;
    image.height = 180;
    image.loading = 'lazy';
    image.decoding = 'async';
    const icon = document.createElement('span');
    icon.className = 'video-card-icon';
    icon.setAttribute('aria-hidden', 'true');
    icon.innerHTML = '<svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>';
    media.append(image, icon);

    const label = document.createElement('span');
    label.className = 'video-card-title';
    label.textContent = video.title;
    card.append(media, label);
    card.addEventListener('click', () => selectVideo(index, true));
    cards.push(card);
    grid.appendChild(card);
  });
})();

/* Form feedback */
(() => {
  document.querySelectorAll('.status-close').forEach((button) => {
    button.addEventListener('click', () => button.closest('.form-status').remove());
  });

  const form = document.querySelector('.contact-form');
  if (!form) return;
  form.addEventListener('submit', () => {
    const submit = form.querySelector('.contact-submit');
    submit.disabled = true;
    submit.setAttribute('aria-disabled', 'true');
    submit.querySelector('span').textContent = 'ODESÍLÁM…';
  });
})();
