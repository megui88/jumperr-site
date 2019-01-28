<template>
    <div>
        <header>
            <h2 class="text-white text-center mt-4">Contacto</h2>
            <!-- <p class="lead text-center">Rellena el formulario con la duda que tengas</p> -->
        </header>
    </div>
</template>
<script>
    export default {
        name: 'contact-header',
        data() {
            return {}
        }
    }
</script>

<style scoped>
    header {
        display: grid;
        height: 300px;
        width: 100%;
        align-items: center;
        background-image: url('/images/contacto/banner_contacto-min.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
</style>
