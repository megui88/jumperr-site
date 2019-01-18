<template>
    <div>
        <header>
            <div id="slider-especialidades" class="wrapper">
                <swiper :options="swiperOption">
                    <swiper-slide>
                        <h2 class="text-white text-center mb-0">
                            Especialistas en el área digital
                        </h2>
                    </swiper-slide>
                    <swiper-slide>
                        <h2 class="text-white text-left text-md-center mb-0">
                            Generamos Inteligencia Digital y la distribuimos a todos los miembros de nuestra comunidad a través del procesamiento de Big Data.
                        </h2>
                    </swiper-slide>
                    <div class="swiper-pagination swiper-pagination-x" slot="pagination"></div>
                </swiper>
            </div>
        </header>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        swiperOption: {
            centeredSlides: true,
            slidesPerView: 1,
            spaceBetween: 40,
            loop: true,
            autoplay: {
                delay: 3000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet(index, className) {
                    return `<span class="${className} swiper-pagination-bullet-x"></span>`
                }
            },
        }
      }
    }
  }
</script>
<style scoped>
header{
    width: 100%;
    height: 640px;
    background-image: url('/images/especialidades/Jumperr_banner_especialidades.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    display: grid;
    align-items: center;
    grid-template-columns: 100%;
}
.wrapper{
    width: 100%;
    max-width: 1024px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px;
}

.swiper-slide{
    align-self: center;
}


@media (max-width: 480px){
    h2{
    font-size: 2rem;
}
}
</style>
