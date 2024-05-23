
// Mengambil elemen audio ======================
const audioPlayers = document.querySelectorAll(".audioPlayer");

audioPlayers.forEach(audioPlayer => {
    // Menghapus atribut controls
    audioPlayer.removeAttribute('controls');

    // Membuat tombol putar
    const playButton = document.createElement('button');
    playButton.style.border = "none";
    playButton.style.backgroundColor = "white"; 
    playButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="30"><g><rect fill="none" height="24" width="24"/></g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M9.5,16.5v-9l7,4.5L9.5,16.5z"/></g></svg>';
    
    playButton.onclick = function () {
        if (audioPlayer.paused) {
            audioPlayer.play();
            // playButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30" viewBox="0 0 24 24" width="30"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M11,16H9V8h2V16z M15,16h-2V8h2V16z"/></g></g></svg>';
        } else {
            audioPlayer.pause();
            // playButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30" viewBox="0 0 24 24" width="30"><g><rect fill="none" height="24" width="24"/></g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M9.5,16.5v-9l7,4.5L9.5,16.5z"/></g></svg>';
        }
    };

    // Menyisipkan tombol putar setelah elemen audio
    audioPlayer.parentNode.insertBefore(playButton, audioPlayer.nextSibling);
});

// end

// ========== MODE DARK OR NIGHT
  var originalIcon = document.getElementById('sun').outerHTML;
  var changed = false;
  const nav = document.getElementById('navbar');

  const linkDataJuz = document.getElementById("juz");
  const linkDataSurah = document.getElementById("surah");

  // Fungsi untuk mengubah ikon saat tombol diklik
  function changeIcon() {
    var button = document.getElementById('myButton');
    var icon = document.getElementById('sun');

    linkDataJuz.style.color="white";
    linkDataSurah.style.color="white";

    if (!changed) {
      // Mengganti ikon dengan SVG yang baru
      nav.style.backgroundColor="#2C3333";
      icon.outerHTML = '<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><rect fill="none" height="24" width="24"/><path d="M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36c-0.98,1.37-2.58,2.26-4.4,2.26 c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z"/></svg>';
      changed = true;
    } else {
      // Mengembalikan ikon ke SVG awal
      icon.outerHTML = originalIcon;
      changed = false;
    }
  }

  // =============
  window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');

require('bootstrap');

$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});



