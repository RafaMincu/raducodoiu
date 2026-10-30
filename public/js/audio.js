document.addEventListener('DOMContentLoaded', function () {
  const audio = document.getElementById('background-audio');
  const toggle = document.getElementById('background-audio-toggle');
  const seek = document.getElementById('background-audio-seek');
  const playIcon = document.getElementById('background-audio-play-icon');
  const pauseIcon = document.getElementById('background-audio-pause-icon');
  const status = document.getElementById('background-audio-status');
  const preferenceKey = 'background-audio-enabled';
  const positionKey = 'background-audio-position';

  if (!audio || !toggle || !seek || !playIcon || !pauseIcon || !status) return;

  const savedPreference = localStorage.getItem(preferenceKey);
  const savedPosition = Number.parseFloat(localStorage.getItem(positionKey) || '0');
  const shouldStartOnInteraction = savedPreference !== 'false';

  function updatePlaybackState(isPlaying) {
    toggle.setAttribute('aria-pressed', String(isPlaying));
    toggle.setAttribute('aria-label', isPlaying ? 'Pune melodia pe pauză' : 'Redă melodia');
    playIcon.classList.toggle('hidden', isPlaying);
    pauseIcon.classList.toggle('hidden', !isPlaying);
  }

  function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60).toString().padStart(2, '0');

    return `${minutes}:${remainingSeconds}`;
  }

  function updateSeek() {
    if (!Number.isFinite(audio.duration)) return;

    const progress = audio.duration > 0 ? (audio.currentTime / audio.duration) * 100 : 0;
    seek.max = String(audio.duration);
    seek.value = String(audio.currentTime);
    seek.disabled = audio.duration <= 0;
    seek.style.setProperty('--audio-progress', `${progress}%`);
    seek.setAttribute('aria-valuetext', `${formatTime(audio.currentTime)} / ${formatTime(audio.duration)}`);
  }

  function savePlaybackPosition() {
    if (Number.isFinite(audio.currentTime)) {
      localStorage.setItem(positionKey, String(audio.currentTime));
    }
  }

  function restorePlaybackPosition() {
    if (!Number.isFinite(audio.duration)) return;

    if (Number.isFinite(savedPosition) && savedPosition > 0) {
      audio.currentTime = Math.min(savedPosition, audio.duration);
    }

    updateSeek();
  }

  async function playAudio() {
    try {
      await audio.play();
      localStorage.setItem(preferenceKey, 'true');
      updatePlaybackState(true);
      status.textContent = 'Melodia a pornit.';
    } catch (error) {
      updatePlaybackState(false);
      status.textContent = 'Melodia nu a putut porni.';
      console.error('Nu s-a putut porni melodia:', error);
    }
  }

  function startAudioOnFirstClick() {
    document.removeEventListener('click', startAudioOnFirstClick);
    playAudio();
  }

  toggle.addEventListener('click', function () {
    document.removeEventListener('click', startAudioOnFirstClick);

    if (audio.paused) {
      playAudio();
      return;
    }

    audio.pause();
    savePlaybackPosition();
    localStorage.setItem(preferenceKey, 'false');
    updatePlaybackState(false);
    status.textContent = 'Melodia este pe pauză.';
  });

  seek.addEventListener('input', function () {
    audio.currentTime = Number(seek.value);
    savePlaybackPosition();
    updateSeek();
  });

  audio.addEventListener('loadedmetadata', restorePlaybackPosition);
  audio.addEventListener('durationchange', updateSeek);
  audio.addEventListener('timeupdate', function () {
    updateSeek();
    savePlaybackPosition();
  });
  audio.addEventListener('pause', savePlaybackPosition);
  audio.addEventListener('play', function () {
    updatePlaybackState(true);
  });

  audio.addEventListener('ended', function () {
    localStorage.setItem(positionKey, '0');
    updatePlaybackState(false);
    status.textContent = 'Melodia s-a terminat.';
  });

  window.addEventListener('pagehide', savePlaybackPosition);

  if (shouldStartOnInteraction) {
    document.addEventListener('click', startAudioOnFirstClick);
  }

  updateSeek();
});
