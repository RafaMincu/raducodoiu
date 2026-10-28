window.addEventListener('load', function() {

  document.addEventListener('click', function startAudio() {
      const audio = document.getElementById('background-audio');
      if (!audio) return;

      const AudioContext = window.AudioContext || window.webkitAudioContext;
      const audioCtx = new AudioContext();
      const source = audioCtx.createMediaElementSource(audio);
      source.connect(audioCtx.destination);

      audio.play().then(() => {
          console.log("Audio a pornit cu succes!");
          document.removeEventListener('click', startAudio);

          audio.addEventListener('ended', function() {
              console.log("Muzica s-a terminat. Oprim totul definitiv.");
              if (audioCtx.state !== 'closed') {
                  audioCtx.close();
              }
          });

      }).catch(error => {
          console.log("Sistemul audio a fost blocat de browser:", error);
      });
  }, { once: true });

});
