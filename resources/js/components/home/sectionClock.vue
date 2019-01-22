<template>
    <div id="section_services" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 mx-auto">
                    <article class="text-center">
                        <h3 class="title-border-bottom">{{$store.getters.getTags({tag:'home_text16'})}}</h3>
                    </article>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <clock/>
                </div>
                <div class="col">
                    <clock/>
                </div>
                <div class="col">
                    <clock/>
                </div>
                <div class="col">
                    <clock/>
                </div>
                <div class="col">
                    <clock/>
                </div>
            </div>
        </div>



    </div>
</template>

<script>
export default {
    data() {
        return {
            swiperOption: {
                slidesPerView: 5,
                spaceBetween: 40,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    460: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                        freeMode: false,
                        loop: false,
                    },
                    680: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                        freeMode: false,
                    },
                    860: {
                        slidesPerView: 3,
                        spaceBetween: 5,
                        freeMode: false,
                    },
                }
            }
        }
    }
}
</script>
<style scoped>
</style>
