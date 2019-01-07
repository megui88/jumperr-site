<template>
<div>

    <footer class="d-flex align-items-end">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <a href="#">
                        <img src="/images/logo/logojumperrwhite.svg" alt="" width="200px">
                    </a>
                </div>
                <div class="col-12 col-md-5 enlaces ml-auto">
                    <a href="#">La Compañia</a>
                    <a href="#">Especialidades</a>
                    <a href="#">Agencias</a>
                    <a href="#">Contactos</a>
                    <a href="#">Jumperr Start</a>
                    <a href="#">Redes Sociales</a>
                    <a href="#">Diseño Gráfico</a>
                    <a href="#">Desarrollo Web y App</a>
                </div>
                <div class="col-12 col-md-3">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/001-facebook.svg" alt="Facebook">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/002-instagram.svg" alt="Instagram">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/003-linkedin.svg" alt="Linkedin">
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img class="d-inline-block mx-2" width="36px" src="/images/iconos/004-youtube.svg" alt="Youtube">
                    </a>
                </div>
            </div>
        </div>

    </footer>
    <div class="power-by-jumperr d-flex align-items-end pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-left d-flex align-items-center">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        © Jumperr Digital Company
                    </a>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right d-flex align-items-center">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        Politica de privacidad | Terminos y condiciones
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<style scoped>
footer{
    position: relative;
    background-image: url('/images/home/imagenes/footerr_tapaprincipal.svg');
    background-size: 100%;
    background-position: left top;
    background-repeat: repeat-y;
    height: 300px;
    width: 100%;
}
footer:before{
    content: '';
    background-image: url('/images/home/imagenes/footerr_ultimatapa.svg');
    background-size: 100%;
    background-position: right top;
    background-repeat: repeat-x;
    width: 100%;
    height: 200px;
    position: absolute;
    top: -20px;
    left: 0;
    z-index: -1;
}
.power-by-jumperr{
    width: 100%;
    background-color: #F96332;
    background-image: url('/images/home/imagenes/footerr_1.svg');
    background-size: 100%;
    background-position: bottom center;
    background-repeat: no-repeat;
    min-height: 126px;
}
.power-by-jumperr a{
    font-weight: 700;
}
a, a:hover, a:link, a:focus{
    color: #fff;
    text-decoration: none;
}
.enlaces{
    display: flex;
    flex-wrap: wrap;
}
.enlaces a{
    display: inline-block;
    width: 50%;
    font-weight: 500;
    line-height: 2.5;
}


</style>

