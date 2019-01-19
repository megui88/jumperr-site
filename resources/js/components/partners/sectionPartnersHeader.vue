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
        </header>
    </div>
</template>
<style scoped>
#header-partners{
    background-color: #fff;
}
header{
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
</style>
