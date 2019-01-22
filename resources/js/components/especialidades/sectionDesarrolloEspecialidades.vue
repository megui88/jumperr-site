<template>
    <div>
        <section class="wrapper">
            <div class="column-row">
                <img class="img-fluid mano" src="/images/especialidades/jumperr_telefono_especialidades-min.png" alt="">
            </div>

            <div class="columna-row ml-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-11 ml-lg-auto">
                            <h3 class="title-border-bottom text-white">
                                {{$store.getters.getTags({tag:'specialties_title2'})}}
                            </h3>
                            {{$store.getters.getTags({tag:'specialties_text4'})}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped>
ul{
    list-style: none;
    padding: 0;
}
li{
    line-height: 2;
}
li::before{
    font-family: "Font Awesome 5 Free";
    content: "\f067";
    display: inline-block;
    padding-right: 3px;
    vertical-align: middle;
    font-weight: 900;
    font-size: .8rem;
    margin-right: .8rem;
    color: #f26336;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1.3rem 0 1.1rem;
}
.wrapper{
    -webkit-clip-path: polygon(0 0, 100% 5%, 100% 100%, 0 95%);
    clip-path: polygon(0 0, 100% 5%, 100% 100%, 0 95%);
    background-image: url('/images/especialidades/photo-1541462608143-67571c6738dd copy-min copy-min.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    width: 100%;
    min-height: 980px;
    display: grid;
    grid-template-columns: 100%;
    align-items: center;
    padding-top: 5rem;
    padding-bottom: 0rem;
}
.column-row:nth-child(1){
    order: 1;
}
.column-row:nth-child(2){
    order: 0;
}
.mano{
    width: 240px;
}
@media (min-width: 768px) {
    .mano{
        width: 400px;
    }
}
@media (min-width: 1024px) {
    .wrapper{
        -webkit-clip-path: polygon(0 0, 100% 10%, 100% 100%, 0 90%);
        clip-path: polygon(0 0, 100% 10%, 100% 100%, 0 90%);
        grid-template-columns: 40% 50%;
        min-height: 680px;
        padding-top: 5rem;
        padding-bottom: 4rem;
    }
    .column-row:nth-child(1){
        order: 0;
        align-self: flex-end;
    }
    .column-row:nth-child(2){
        order: 1;
    }
    .mano{
        width: 450px;
    }
}
</style>
