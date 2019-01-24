<template>
    <div class="bg-white">
        <section class="grid-wrapper">
            <aside>
                <img class="img-fluid" src="/images/la-empresa/jumperr_mision_compañia-min.png" alt="Jumperr">
            </aside>
            <article>
                <div class="mb-0 mb-md-5">
                    <h6 class="text-uppsercase text-theme">{{ $store.getters.getTags({ tag: 'text2' }) }}</h6>
                    <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'company_text3' }) }}</h3>

                    <span v-html="$store.getters.getTags({ tag: 'company_text14' })"></span>
                </div>
            </article>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'company-mission'
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

    .grid-wrapper {
        max-width: 1140px;
        height: auto;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: 470px 430px;
    }

    aside {
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        order: 2;
    }

    article {
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-bottom: 4rem; */
        order: 1;
    }

    @media (min-width: 768px) {
        .grid-wrapper {
            grid-template-columns: 50% 45%;
            grid-template-rows: 600px;
        }

        aside {
            order: 1;
        }

        article {
            justify-content: center;
            align-items: flex-end;
            order: 2;
        }
    }
</style>
