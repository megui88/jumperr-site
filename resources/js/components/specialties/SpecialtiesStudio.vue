<template>
    <div id="jumperr-studio">
        <div class="wrapper py-5 py-md-0">
            <div class="column-row">
                <img class="img-fluid" src="/images/especialidades/Jumperr_laptop_Especialidades-min.png" alt="img-specialties-studio">
            </div>

            <div class="column-row">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-11 ml-lg-auto">
                            <h3 class="title-border-bottom">{{ $store.getters.getTags({ tag: 'specialties_title1' }) }}</h3>
                           <p v-html="$store.getters.getTags({ tag: 'specialties_text3' })"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'specialties-studio'
    }
</script>
<style scoped>
    ul {
        list-style: none;
        padding: 0;
    }

    li {
        line-height: 2;
    }

    li::before {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: .1rem;
        content: "\F111";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
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

    .wrapper {
        display: grid;
        grid-template-columns: 100%;
        align-items: center;
        width: 100%;
        min-height: 640px;
    }

    .column-row:nth-child(1) {
        padding-left: 2rem;
    }

    @media (min-width: 768px) {
        .column-row:nth-child(1) {
            order: 1;
            padding-left: 0px;
        }

        .column-row:nth-child(2) {
            order: 0;
        }

        .wrapper {
            grid-template-columns: 55% 45%;
        }
    }
</style>
