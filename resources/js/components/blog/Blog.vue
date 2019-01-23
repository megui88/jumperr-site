<template>
    <div id="blog-posts">

        <blog-header title="Blog"/>

        <section class="wrapper py-5">
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
                    <small><img width="12" src="/images/blog/weekly-calendar.svg" alt="calendar"> {{ post.published_at }}</small>
                    /
                    <small><img width="12" src="/images/blog/man-user.svg" alt="calendar"> {{ post.owner_user }}</small>
                    /
                    <small><img width="12" src="/images/blog/folder.svg" alt="folder"></small>
                </div>
                <div class="description">{{ post.description }}</div>
                <div class="read-more">
                    <router-link to="post">VER MÁS</router-link>
                </div>
            </article>
        </section>
    </div>
</template>
<script>
    import BlogHeader from './partials/BlogHeader';

    export default {
        name: 'blog',
        components: { BlogHeader },
        data() {
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
<style scoped lang="scss">

    .wrapper {
        max-width: 1140px;
        height: auto;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 100%;
        grid-gap: 20px;
    }

    article figure img {
        width: 100%;
        height: auto;
        display: grid;
        object-fit: cover;
    }

    article .description, article .date-breadcrumbs, {
        display: none;
    }

    article:nth-child(1) .description,
    article:nth-child(2) .description,
    article:nth-child(1) .date-breadcrumbs,
    article:nth-child(2) .date-breadcrumbs {
        display: block;
    }

    article:nth-child(1) .category,
    article:nth-child(2) .category {
        display: none;
    }

    article:nth-child(1) .title-border-botton:after,
    article:nth-child(2) .title-border-botton:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem 0 1.1rem;
    }

    .category {
        color: #f26336;
    }

    @media (min-width: 576px) {
    }

    // Medium devices (tablets, 768px and up)
    @media (min-width: 768px) {
    }

    // Large devices (desktops, 992px and up)
    @media (min-width: 992px) {
        .wrapper {
            grid-template-columns: 220px 220px 220px 220px;
            grid-gap: 20px;
            justify-content: center;
        }
        article figure img {
            width: 100%;
            max-width: 200px;
            height: 200px;
            display: grid;
            object-fit: cover;
        }
        article:nth-child(1) {
            grid-column: span 2;
        }
        article:nth-child(1) figure img, article:nth-child(2) figure img {
            width: 100%;
            max-width: 480px;
            height: 480px;
            display: grid;
            object-fit: cover;
        }
        article:nth-child(2) {
            grid-column: span 2;
        }
        article h3 {
            font-size: 1.4rem;
        }
    }

    // Extra large devices (large desktops, 1200px and up)
    @media (min-width: 1200px) {
        .wrapper {
            grid-template-columns: 264px 264px 264px 264px;
            grid-gap: 25px 15px;
        }
        article figure img {
            width: 100%;
            max-width: 264px;
            height: 264px;
            display: grid;
            object-fit: cover;
        }
        article:nth-child(1) {
            grid-column: span 2;
        }
        article:nth-child(1) figure img, article:nth-child(2) figure img {
            width: 100%;
            max-width: 542px;
            height: 542px;
            display: grid;
            object-fit: cover;
        }
        article:nth-child(2) {
            grid-column: span 2;
        }
    }
</style>
