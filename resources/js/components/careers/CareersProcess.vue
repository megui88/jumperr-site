<template>
    <div id="section_proceso_carreras">
        <section class="wrapper">
            <article class="mb-4">
                <h3 class="title-border-bottom text-center text-white">{{ $store.getters.getTags({ tag: 'careers_text3' }) }}</h3>
            </article>
            <aside>
                <template v-for="career in careers">
                    <div class="item">
                        <img :src="career.img" :alt="'img-' + career.id">
                        <strong class="d-block">{{ career.id + '. ' + career.title }}</strong>
                    </div>
                </template>
            </aside>
        </section>
    </div>
</template>
<script>
    export default {
        name: 'careers-process',
        computed: {
            careers() {
                return [
                    { id: 1, img: '/images/carreras/telefono-min.png', title: this.$store.getters.getTags({ tag: 'careers_text4' }) },
                    { id: 2, img: '/images/carreras/user-min.png', title: this.$store.getters.getTags({ tag: 'careers_text7' }) },
                    { id: 3, img: '/images/carreras/tuerca-min.png', title: this.$store.getters.getTags({ tag: 'careers_text8' }) },
                    { id: 4, img: '/images/carreras/moneda-min.png', title: this.$store.getters.getTags({ tag: 'careers_text9' }) },
                    { id: 5, img: '/images/carreras/logocircular copy.svg', title: this.$store.getters.getTags({ tag: 'careers_text27' }) },
                ];
            }
        }
    }
</script>
<style scoped>
    #section_proceso_carreras {
        background-image: url('/images/carreras/imagen_2-min.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        min-height: 600px;
        padding: 50px 0;
        display: grid;
        align-items: center;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1.3rem auto 1.1rem;
    }

    .wrapper {
        width: 100%;
        max-width: 1140px;
        height: auto;
        min-height: 100%;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        align-content: center;
    }

    aside {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: flex-start;
    }

    .item {
        color: #fff;
        text-align: center;
        margin-bottom: 2rem;
        width: 100%;
    }

    .item img {
        height: 100px;
        margin-bottom: 1rem;
    }

    @media (min-width: 768px) {
        aside {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-start;
        }

        .item {
            color: #fff;
            text-align: center;
            margin-bottom: 2rem;
            width: 100%;
        }
    }
</style>
