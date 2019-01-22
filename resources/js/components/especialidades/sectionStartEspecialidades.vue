<template>
    <div>
        <section class="container-fluid position-relative">
            <!-- nube  -->
            <img class="nube" src="/images/especialidades/nube.svg" alt="nube jumperr">
            <!--  -->
            <div class="row">
                <div class="col-12">
                    <article class="py-4">
                        <h3 class="title-border-bottom text-center">
                            {{$store.getters.getTags({tag:'specialties_title3'})}}
                        </h3>
                        <p class="mb-4 text-center">
                            {{$store.getters.getTags({tag:'specialties_text5'})}}
                        </p>
                    </article>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <swiper :options="swiperOption">
                            <swiper-slide>
                            <div>
                                    <figure class="bg-oscuro">
                                    <img src="/images/especialidades/Jumperr_creatusitioweb_especialidades.svg" alt="jumperr start">
                                </figure>
                                <p class="text-center mt-3"><strong>{{$store.getters.getTags({tag:'specialties_text6'})}}</strong></p>
                            </div>
                            </swiper-slide>

                            <swiper-slide>
                                <div>
                                    <figure class="bg-naranja">
                                    <img src="/images/especialidades/jumperr_creartublog_especialidades.svg" alt="jumperr start">
                                </figure>
                                <p class="text-center mt-3"><strong>{{$store.getters.getTags({tag:'specialties_tex9'})}}</strong></p>
                                </div>
                            </swiper-slide>


                            <swiper-slide>
                                <div>
                                    <figure class="bg-naranja">
                                    <img src="/images/especialidades/Jumperr_subetusproductos_especialidades.svg" alt="jumperr start">
                                </figure>
                                <p class="text-center mt-3"><strong>{{$store.getters.getTags({tag:'specialties_text7'})}}</strong></p>
                                </div>
                            </swiper-slide>
                            <swiper-slide>
                                <div>
                                    <figure class="bg-oscuro">
                                        <img src="/images/especialidades/jumperr_estadisticas_especialidades.svg" alt="jumperr start">
                                    </figure>
                                    <p class="text-center mt-3"><strong>{{$store.getters.getTags({tag:'specialties_text10'})}}</strong></p>
                                </div>
                            </swiper-slide>
                            <swiper-slide>
                            <div>
                                    <figure class="bg-oscuro">
                                    <img src="/images/especialidades/Jumperr_calendario_especialidades.svg" alt="jumperr start">
                                </figure>
                                <p class="text-center mt-3"><strong>{{$store.getters.getTags({tag:'specialties_text8'})}}</strong></p>
                            </div>
                            </swiper-slide>
                            <swiper-slide>
                                <div>
                                    <figure class="bg-naranja">
                                    <img src="/images/especialidades/jumperr_eligetudominio_especialidades.svg" alt="jumperr start">
                                </figure>
                                <p class="text-center mt-3"><strong>{{$store.getters.getTags({tag:'specialties_text11'})}}</strong></p>
                                </div>
                            </swiper-slide>
                             <div class="swiper-pagination swiper-pagination-x" slot="pagination"></div>
                        </swiper>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        swiperOption: {
            slidesPerView: 3,
            slidesPerColumn: 2,
            spaceBetween: 30,
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
            breakpoints: {
                380: {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerColumn: 1,

                },
                560: {
                slidesPerView: 1,
                spaceBetween: 30,
                slidesPerColumn: 1,

                },
                768: {
                slidesPerView: 3,
                spaceBetween: 30,
                slidesPerColumn: 2,
                }
            }
        }
      }
    }
  }
</script>
<style scoped>
  .swiper-container {
    height: auto !important;
    margin-left: auto;
    margin-right: auto;
    padding: 1rem;
  }
  .swiper-slide {
    background-color: #fff;
    box-shadow: 0 0 10px 2px #cecece;
    border-radius: 10px;
    height: 270px;
    width: 280px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  figure{
      width: 110px;
      height: 110px;
      border-radius: 100%;
      margin: 0 auto;
      padding: 25px;
  }
  figure img{
      max-width: 100%;
  }
  p{
      font-size: 1.4rem;
  }
  strong{
      color: #000;
  }
  .bg-oscuro{
      background-color: #222;
  }
  .bg-naranja{
      background-color: #f26336;
  }
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1.3rem auto 1.1rem;
}
.nube{
    position: absolute;
    top: 150px;
    left: 100px;
    width: 200px;
    animation: float 16s linear infinite;
}
@keyframes float {
	0% {
        left: -5%;
        transform: translateY(-10px);
        opacity: .5;
	}
    35% {
        left: 35%;
        transform: translateY(10px);
        opacity: 1;
	}
    65% {
        left: 65%;
        transform: translateY(-10px);
        opacity: 1;
    }
    85% {
        left: 85%;
        transform: translateY(10px);
        opacity: 1;
    }
    90% {
        left: 90%;
        transform: translateY(-10px);
        opacity: 1;
	}
	100% {
        left: 150%;
        transform: translateY(-10px);
        opacity: 0;
	}
}

@media (min-width: 768px) {
.nube{
    position: absolute;
    top: 50px;
    left: 100px;
    width: 300;
    animation: float 22s linear infinite;
}

@keyframes float {
	0% {
        left: -5%;
        transform: translateY(-10px);
        opacity: 1;
	}
    5% {
        left: 5%;
        transform: translateY(10px);
        opacity: 1;
	}
    10% {
        left: 10%;
        transform: translateY(-10px);
        opacity: 1;
	}
    15% {
        left: 15%;
        transform: translateY(10px);
        opacity: 1;
	}

    20% {
        left: 20%;
        transform: translateY(-10px);
        opacity: 1;
	}
    25% {
        left: 25%;
        transform: translateY(10px);
        opacity: 1;
	}
    30% {
        left: 30%;
        transform: translateY(-10px);
        opacity: 1;
	}
    35% {
        left: 35%;
        transform: translateY(10px);
        opacity: 1;
	}
    40% {
        left: 40%;
        transform: translateY(-10px);
        opacity: 1;
	}
    45% {
        left: 45%;
        transform: translateY(10px);
        opacity: 1;
	}
	50% {
        left: 50%;
        transform: translateY(-10px);
        opacity: 1;
	}
    55% {
        left: 55%;
        transform: translateY(10px);
        opacity: 1;
	}
    60% {
        left: 60%;
        transform: translateY(-10px);
        opacity: 1;
	}
    65% {
        left: 65%;
        transform: translateY(10px);
        opacity: 1;
	}
    70% {
        left: 70%;
        transform: translateY(-10px);
        opacity: 1;
	}
    75% {
        left: 75%;
        transform: translateY(10px);
        opacity: 1;
	}
    80% {
        left: 80%;
        transform: translateY(-10px);
        opacity: 1;
    }
    85% {
        left: 85%;
        transform: translateY(10px);
        opacity: 1;
    }
    90% {
        left: 90%;
        transform: translateY(-10px);
        opacity: 1;
	}
    95% {
        left: 100%;
        transform: translateY(10px);
        opacity: 1;
	}
	100% {
        left: 150%;
        transform: translateY(-10px);
        opacity: 0;
	}
}
}

</style>