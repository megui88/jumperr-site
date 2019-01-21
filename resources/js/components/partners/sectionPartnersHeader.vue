<template>
    <div id="header-partners">
        <header class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h2 class="text-white">
                            ¿Estas buscando un aliado digital para tu empresa?
                        </h2>
                    </div>
                </div>
            </div>

            <img class="img-float-1" src="/images/iconos/circulo.svg" alt="elemento jumperr">
            <img class="img-float-2" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
            <img class="img-float-3" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
        </header>
    </div>
</template>
<style scoped>
#header-partners{
    background-color: #fff;
}
header{
    position: relative;
    width: 100%;
    min-height: 100vh;
    background-color: black;
    background-image: url('/images/partners/jumperr_banner_partners.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 97%, 0% 100%);
    clip-path: polygon(0 0, 100% 0, 100% 97%, 0% 100%);
}

@media (min-width: 992px) {
    header{
        webkit-clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
        clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
    }
}


/*Animaciones*/
.img-float-1{
    position: absolute;
    top: 120px;
    left: -15px;
    display: inline-block;
    width: 62px;
    height: 62px;
    animation: rotarRight 5s linear infinite;
}
.img-float-2{
    position: absolute;
    top: 140px;
    right: 34px;
    display: inline-block;
    width: 18px;
    height: 18px;
    animation: rotarRight 1s linear infinite;
}
.img-float-3{
    position: absolute;
    bottom: 100px;
    left: 20px;
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
