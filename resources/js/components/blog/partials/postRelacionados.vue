<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5">
                    <swiper :options="swiperOption">
                        <swiper-slide v-for="(post, id) in posts" :key="id">
                            <article>
                                <figure>
                                    <img :src="post.image" :alt="post.title">
                                </figure>
                                <div class="category">
                                    <small>{{ post.category }}</small>
                                </div>
                                <div class="title">
                                    <h3 class="title-border-botton">{{ post.title }}</h3>
                                </div>
                                <div class="read-more">
                                    <router-link to="post">VER MÁS</router-link>
                                </div>
                            </article>
                        </swiper-slide>
                        <!-- <div class="swiper-pagination" slot="pagination"></div> -->
                    </swiper>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            swiperOption: {
                slidesPerView: 3,
                spaceBetween: 40,
                autoplay: {
                    delay: 3000,
                    // disableOnInteraction: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    460: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        freeMode: false,
                        loop: false,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                        freeMode: false,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 15,
                        freeMode: false,
                    },
                }
            },
            posts: [
                {
                    id: 1,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/blog1-min.jpg'
                },
                {
                    id: 2,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/blog2-min.jpg'
                },
                {
                    id: 3,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/jumperr_fotooriginal_blog-min.jpg'
                },
                {
                    id: 4,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/jumperr-blog2-home.jpg'
                },
                {
                    id: 5,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/jumperr-blog3-home.jpg'
                },
                {
                    id: 6,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/jumperr-blog4-home.jpg'
                },
                {
                    id: 7,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/jumperr-blog1-home.jpg'
                },
                {
                    id: 8,
                    title: 'Crea tu página web de la manera más rápida',
                    url: 'crea-tu-pagina-web-de-la-manera-mas-rapida',
                    description: 'Crea tu página web de la manera más rápida y fácil con nuestras plantillas categorizadas y con una herramienta adaptada a tus necesidades de negocios',
                    published_at: '08/16/2018',
                    category: 'Categoria',
                    owner_user: 'Jumperr',
                    image: '/images/blog/jumperr-blog1-home.jpg'
                }
            ]
        }
    }
}
</script>
<style scoped>
    article figure img{
        width: 100%; 
        height: 240px;
        display: grid;
        object-fit: cover;
    }
    .title-border-botton:after{
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem 0 1.1rem;
    }
    .category{
        color: #f26336;
    }
    article h3{
        font-size: 1.4rem;
    }
</style>
