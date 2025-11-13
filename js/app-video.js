// Data (změňte cesty k vašim skutečným souborům)
const videoList = [
  {
    id: 1,
    title: "DK - Autobus",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6023.mp4 ",
      ogg: "data/koncert_unleaded/IMG_6023.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 2,
    title: "DK - Fishbelly",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6024.m44 ",
      ogg: "data/koncert_unleaded/IMG_6024.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 3,
    title: "DK - Kolotoč",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6025.mp4 ",
      ogg: "data/koncert_unleaded/IMG_6025.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 4,
    title: "DK - Tváře",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6026.mp4 ",
      ogg: "data/koncert_unleaded/IMG_6026.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 5,
    title: "DK - O dům dál",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6028.mp4 ",
      ogg: "data/koncert_unleaded/IMG_6028.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 6,
    title: "DK - Město",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6029.mp4 ",
      ogg: "data/koncert_unleaded/IMG_6029.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 7,
    title: "DK - Sestup",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6030.mp4 ",
      ogg: "data/koncert_unleaded/IMG_6030.ogg"
    },
    poster: "dk_logo.jpg"
  },
  {
    id: 8,
    title: "DK - Slunko",
    sources: {
      mp4: "data/koncert_unleaded/IMG_6031.mp4",
      ogg: "data/koncert_unleaded/IMG_6031.ogg"
    },
    poster: "dk_logo.jpg"
  }
];

window.addEventListener('DOMContentLoaded', () => {

  // Reference na HTML elementy
  const videoPlayer = document.getElementById('mainVideoPlayer');
  const sourceMP4 = document.getElementById('sourceMP4');
  const sourceOGG = document.getElementById('sourceOGG');
  const playlistContainer = document.getElementById('playlistContainer');

  // Funkce pro přehrání a aktualizaci zdrojů
  function playVideo(videoData) {
    sourceMP4.src = videoData.sources.mp4;
    sourceOGG.src = videoData.sources.ogg;
    videoPlayer.poster = videoData.poster;

    // KLÍČOVÝ KROK: Donutí přehrávač načíst nové zdroje
    videoPlayer.load(); 
    videoPlayer.play();
  }

  // Funkce pro zvýraznění aktivní položky
  function highlightActiveItem(clickedItem) {
    const allItems = document.querySelectorAll('.playlistItem');
    allItems.forEach(item => item.classList.remove('active'));
    clickedItem.classList.add('active');
  }

  // Vytvoření seznamu
  videoList.forEach(video => {
    
    const item = document.createElement('div');
    item.className = 'playlistItem'; 
    item.textContent = video.title;
    
    // Posluchač události
    item.addEventListener('click', () => {
      playVideo(video);
      highlightActiveItem(item);
    });
    
    playlistContainer.appendChild(item);
  });
  
  // Načtení a příprava prvního videa po startu
  if (videoList.length > 0) {
    const firstVideo = videoList[0];
    sourceMP4.src = firstVideo.sources.mp4;
    sourceOGG.src = firstVideo.sources.ogg;
    videoPlayer.poster = firstVideo.poster;
    
    const firstPlaylistItem = playlistContainer.querySelector('.playlistItem');
    if(firstPlaylistItem) {
      firstPlaylistItem.classList.add('active');
    }
  }

});