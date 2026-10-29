document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.mySwiper', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    loopPreventsSliding: false,
    slidesPerView: 'auto',
    slidesPerGroup: 1,
    roundLengths: true,
    spaceBetween: 18,
    speed: 700,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    coverflowEffect: {
      rotate: 0,
      stretch: -18,
      depth: 180,
      modifier: 1.2,
      slideShadows: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  const pagination = document.querySelector('.mySwiper .swiper-pagination');
  const gallerySize = swiper.slides.length / 2;

  for (let index = 0; index < gallerySize; index++) {
    const bullet = document.createElement('button');
    bullet.type = 'button';
    bullet.className = 'swiper-pagination-bullet';
    bullet.setAttribute('aria-label', `Go to slide ${index + 1}`);
    bullet.addEventListener('click', function () {
      swiper.slideToLoop(index);
    });
    pagination.appendChild(bullet);
  }

  function updatePagination() {
    const activeIndex = swiper.realIndex % gallerySize;

    pagination.querySelectorAll('.swiper-pagination-bullet').forEach(function (bullet, index) {
      const isActive = index === activeIndex;
      bullet.classList.toggle('swiper-pagination-bullet-active', isActive);
      if (isActive) {
        bullet.setAttribute('aria-current', 'true');
      } else {
        bullet.removeAttribute('aria-current');
      }
    });
  }

  swiper.on('realIndexChange', updatePagination);
  updatePagination();
});
