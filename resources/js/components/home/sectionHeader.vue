<template>
    <div id="section_bio">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6">
                        <h1>
                            Líderes <br>en la construcción<br> de negocios<br> y Éxitos Digitales.
                        </h1>
                    </div>
                </div>
            </div>
            <img class="img-1" src="/images/iconos/circulo.svg" alt="elemento jumperr">
            <img class="img-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
            <img class="img-3" src="/images/iconos/circulo.svg" alt="elemento jumperr">
            <img class="img-4" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
        </header>
    </div>
</template>
<style scoped>
header{
    position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 100vh;
    background-image: url('/images/home/imagenes/jumperr-header-home.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
}
h1{
    margin-top: 4rem;
    color: #fff;
    font-size: 2rem;
}
@media (min-width: 768px) {
    h1{
        font-size: 3rem;
    }
}
@media (min-width: 992px) {
    h1{
        font-size: 3.8rem;
    }
}


.img-1{
    position: absolute;
    bottom: 60px;
    left: -15px;
    display: inline-block;
    width: 52;
    height: 52px;
    animation: rotarRight 5s linear infinite;
}
.img-2{
    position: absolute;
    bottom: 120px;
    left: 22px;
    display: inline-block;
    width: 18px;
    height: 18px;
    animation: rotarRight 1s linear infinite;
}
.img-3{
    position: absolute;
    bottom: 30px;
    right: -21px;
    display: inline-block;
    width: 82;
    height: 82px;
    animation: rotarRight 5s linear infinite;
}
.img-4{
    position: absolute;
    top: 140px;
    right: 34px;
    display: inline-block;
    width: 18px;
    height: 18px;
    animation: rotarRight 1s linear infinite;
}
@keyframes rotarRight {
    0% {
		transform: translatey(0px);
	}
	50% {
		transform: translatey(-20px);
	}
	100% {
		transform: translatey(0px);
	}
}
</style>
