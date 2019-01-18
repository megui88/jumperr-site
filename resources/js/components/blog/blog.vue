<template>
    <div id="blog-posts">
        
        <header_blog/>

        <section class="wrapper">
            <article v-for="(post, id) in posts" :key="id">
                <figure>
                    <img :src="post.image" :alt="post.title">
                </figure>
                <div class="category">
                    <small>{{ post.category }}</small>
                </div>
                <div class="title">
                    <h3 class="title-border-botton">{{ post.title }}</h3>
                </div>
                <div class="date-breadcrumbs">
                    <small><img width="12" src="/images/blog/weekly-calendar.svg" alt="calendar"> {{ post.published_at }}</small> /
                    <small><img width="12" src="/images/blog/man-user.svg" alt="calendar"> {{ post.owner_user }}</small> /
                    <small><img width="12" src="/images/blog/folder.svg" alt="folder"></small>
                </div>
                <div class="description">
                    {{ post.description }}
                </div>
                <div class="read-more">
                    <router-link :to="post.url">VER MÁS</router-link>
                </div>
            </article>
        </section>
    </div>
</template>
<script>
export default {
    data(){
        return {
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
                    image: '/images/blog/jumperr-blog1-home.jpg'
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

<style scoped lang="scss">
    .wrapper{
        max-width: 1140px;
        height: auto;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 250px 250px 250px 250px;
        grid-gap: 20px;
    }
    article figure img{
        width: 100%;
        max-width: 250px; 
        height: 250px;
        display: grid;
        object-fit: cover;
    }
    article:nth-child(1){
        grid-column: span 2;
    }
    article:nth-child(1) figure img{
        width: 100%;
        max-width: 520px; 
        height: 520px;
        display: grid;
        object-fit: cover;
    }
    article:nth-child(2){
        grid-column: span 2;
    }
    article:nth-child(2) figure img{
        width: 100%;
        max-width: 520px; 
        height: 520px;
        display: grid;
        object-fit: cover;
    }
</style>
