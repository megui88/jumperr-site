<template>
    <section id="section_contacto" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto mb-4">
                    <article class="text-center">
                        <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'conctac_title1' }) }}</h3>
                        <h4>{{ $store.getters.getTags({ tag: 'conctac_text1' }) }}</h4>
                    </article>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <div class="form-group">
                        <label for="">{{ $store.getters.getTags({ tag: 'conctac_text5' }) }}*</label>
                        <input class="form-control" type="text" v-model="form.fullname">
                    </div>
                    <div class="form-group">
                        <label for="">{{ $store.getters.getTags({ tag: 'conctac_text6' }) }}*</label>
                        <input class="form-control" type="text" v-model="form.email">
                    </div>
                    <div class="form-group">
                        <label for="">{{ $store.getters.getTags({ tag: 'conctac_text7' })  }}*</label>
                        <input class="form-control" type="text" v-model="form.phone">
                    </div>
                    <div class="form-group">
                        <label for="">{{ $store.getters.getTags({ tag: 'conctac_text8' }) }}*</label>
                        <input class="form-control" type="text" v-model="form.comment">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary text-uppercase">{{ $store.getters.getTags({ tag: 'general_btn_send' }) }}</button>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-1 d-none d-lg-inline-block" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
        <img class="img-2 d-none d-lg-inline-block" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
        <img class="img-3 d-none d-lg-inline-block" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
    </section>
</template>
<script>
export default {
    name: 'home-contact',
    data(){
        return {
            form: {
                fullname: null,
                email: null,
                phone: null,
                comment: null
            }
        }
    }
}
</script>
<style scoped>
    .img-1 {
        position: absolute;
        top: 150px;
        left: -30px;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: float 8s linear infinite;
    }

    .img-2 {
        position: absolute;
        bottom: 180px;
        right: -30px;
        display: inline-block;
        width: 120px;
        height: 120px;
        animation: float 5s linear infinite;
    }

    .img-3 {
        position: absolute;
        bottom: 350px;
        right: 80px;
        display: inline-block;
        width: 20px;
        height: 20px;
        animation: float 2s linear infinite;
    }


    @keyframes float {
        0% {
            transform: translatey(0px) rotate(0deg);
        }
        50% {
            transform: translatey(-20px) rotate(180deg);
        }
        100% {
            transform: translatey(0px) rotate(360deg);
        }
    }

    #section_contacto {
        -webkit-clip-path: polygon(0 12%, 100% 0, 100% 100%, 0% 100%);
        clip-path: polygon(0 12%, 100% 0, 100% 100%, 0% 100%);
        padding: 140px 0px 60px;
        position: relative;
        background-image: url('/images/home/imagenes/fondo-contacto.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin-bottom: -100px;
        padding-bottom: 100px;
    }

    h4 {
        font-size: 1.6rem;
        line-height: 1.4;
        font-weight: 300;
    }

    .form-group {
        position: relative;
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(2.35rem + 2px);
        padding: 0rem 0rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.6;
        color: #495057;
        background-color: transparent;
        background-clip: padding-box;
        border: 0px solid #ced4da;
        border-bottom: 1px solid #ced4da;
        border-radius: 0rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        color: #495057;
        background-color: transparent;
        border-color: #f26336;
        outline: 0;
        box-shadow: 0 0 0 0rem transparent;
    }

    label {
        display: inline-block;
        margin-bottom: 0rem;
        top: 0;
        left: 0;
    }
</style>
