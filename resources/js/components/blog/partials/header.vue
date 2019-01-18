<template>
    <div id="header-blog">
        <header>
            <h2 class="text-white text-center mt-4">{{ title }}</h2>
        </header>
    </div>
</template>
<script>
export default {
    props: ['title'],
    data(){
        return {

        }
    }
}
</script>

<style scoped>
header{
    display: grid;
    height: 300px;
    width: 100%;
    align-items: center;
    background-image: url('/images/blog/jumperr_banner_blog-min.jpg');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}
</style>
