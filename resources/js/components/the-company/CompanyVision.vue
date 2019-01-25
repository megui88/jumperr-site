<template>
    <div class="bg pt-4">
        <section class="container">
            <div class="row">
                <article class="col-12 col-md-6 d-flex">
                    <div class="align-self-center">
                        <h6 class="text-uppsercase text-theme">{{ $store.getters.getTags({ tag: 'text3' }) }}</h6>
                        <h3 class="title-border-bottom">{{$store.getters.getTags({tag:'company_text15'})}}</h3>
                        <span v-html="$store.getters.getTags({ tag:'company_text4'})"></span>
                    </div>
                </article>
                <aside class="col-12 col-md-6 text-center text-md-left">
                    <img class="img-fluid" src="/images/la-empresa/cart.png" alt="img-company" srcset="/images/la-empresa/cart.png">
                </aside>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'company-vision'
    }
</script>
<style scoped>
    .text-theme {
        color: #f26336;
    }

    h3 {
        font-size: 1.6rem;
    }

    p {
        font-size: 1.2rem;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem 0rem 1.1rem;
    }

    .bg {
        background-image: url('/images/la-empresa/teclado.jpeg');
        background-size: 430px;
        background-position: top right;
        background-repeat: no-repeat;
    }

    @media (max-width: 767.98px) {
        .bg {
            background-image: none;
        }
    }

    aside {
        min-height: 440px;
    }
</style>
