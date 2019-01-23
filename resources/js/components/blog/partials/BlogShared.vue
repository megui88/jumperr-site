<template>
    <div>
        <aside>
            <a href="#">
                <img src="/images/iconos/001-facebook-orange.svg" alt="Redes sociales jumperr">
            </a>
            <a href="#">
                <img src="/images/iconos/002-instagram-orange.svg" alt="Redes sociales jumperr">
            </a>
            <a href="#">
                <img src="/images/iconos/003-linkedin-orange.svg" alt="Redes sociales jumperr"> 
            </a>
            <a href="#">
                <img src="/images/iconos/004-youtube-orange.svg" alt="Redes sociales jumperr">  
            </a>
            <a href="#">
                <img src="/images/iconos/014-share-orange.svg" alt="Redes sociales jumperr">    
            </a>
        </aside>
    </div>
</template>
<script>
    export default {
        name: 'blog-shared'
    }
</script>
<style scoped>
aside{
    display: flex;
    margin: 2rem 0rem;
}
a img{
    width: 32px;
    height: auto;
    display: inline-block;
    margin: 0 .3rem;
}
</style>
