<template>
    <div id="info_header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="mailto:info@jumperr.com">Email: info@jumperr.com</a>
                </div>
                <div class="col-6">
                    <nav class="redes_sociales text-right">
                        <a class="pl-2" href="http://" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="pl-2" href="http://" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a class="pl-2" href="http://" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a class="pl-2" href="http://" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'info-header'
    }
</script>
<style scoped>
    #info_header {
        padding-bottom: 5px;
        padding-top: 5px;
        border-bottom: 1px solid #fff;
    }

    a, a:hover, a:focus, a:active, a:link {
        color: #fff;
        font-weight: 700 !important;
        text-decoration: none;
    }
</style>
