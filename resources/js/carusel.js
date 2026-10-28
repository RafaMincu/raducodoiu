window.addEventListener('load', function() {
  
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    
    // Dezactivăm opțiunea nativă instabilă pentru a folosi logica manuală de click de jos
    slideToClickedSlide: false, 
    
    // Forțează rotunjirea pixelilor la numere întregi (elimină spațiile albe asimetrice)
    roundLengths: true,
    
    watchSlidesProgress: true,
    observer: true,
    observeParents: true,
    resizeObserver: true,

    coverflowEffect: {
      rotate: 0,            /* Rămân plate (drepte) */
      stretch: -20,         /* Spațiul de suprapunere dintre carduri */
      depth: 160,           /* Distanța de micșorare pentru cele laterale */
      modifier: 1,
      slideShadows: false,  
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    
    // SOLUȚIA DE CENTRARE PERFECTĂ:
    on: {
      // A. Rezolvă click-ul manual pe poze
      click: function(swiper, event) {
        const clickedSlide = event.target.closest('.swiper-slide');
        if (clickedSlide) {
          const slideIndex = parseInt(clickedSlide.getAttribute('data-swiper-slide-index'), 10);
          swiper.slideToLoop(slideIndex);
        }
      },
      // B. Rezolvă decalajul din săgeți: De fiecare dată când o animație se termină,
      // forțăm o aliniere matematică la milimetru pentru a elimina abaterile din coverflow.
      transitionEnd: function(swiper) {
        swiper.updateProgress();
        swiper.updateActiveIndex();
      }
    }
  });

  // Calibrare inițială la deschidere pagină
  setTimeout(function() {
    swiper.update();
  }, 150);

});
