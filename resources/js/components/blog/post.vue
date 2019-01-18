<template>
    <div id="blog-posts">
        
        <header_blog title="Blog"/>

        <section class="wrapper pt-5">
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
            </article>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <shared_post/>
                </div>
            </div>
        </div>

        <post_relacionados_post />
        
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
        grid-template-columns: 100%;
        grid-gap: 20px;
    }
    article figure img{
        width: 100%; 
        height: auto;
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
</style>
