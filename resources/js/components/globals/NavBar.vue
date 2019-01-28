<template>
    <div id="container-nav" class="fixed-top w-100">
        <!-- info header -->
        <info-header class="d-none d-lg-block" v-if="sticky" />

            <!-- menu navbar -->
            <div id="navbar" :class="[sticky ? '' : 'bg-white', fondoNav ? 'bg-white' : '' ]">
                <nav class="navbar navbar-expand-lg" :class="sticky ? 'navbar-dark' : 'navbar-light'">
                    <div class="container">
                        <router-link class="navbar-brand" to="/">
                            <img src="/images/logo/logojumperr.svg" alt="Jumperr" class="logo">
                        </router-link>
                        <button class="navbar-toggler" @click="fondoNav=!fondoNav" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse text-uppercase font-weight-bold" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                             <template v-for="item in routes">
                                 <li class="nav-item">
                                     <router-link class="nav-link" :to="item.link">{{ item.name }}</router-link>
                                 </li>
                             </template>
                             <!-- lenguaje -->
                             <template v-if="sticky">
                                <li class="nav-item">
                                    <select name="lang" @change="changeLanguage" v-model="lang" class="form-control transparent text-uppercase">
                                        <template v-for="flag in getFlags">
                                            <option :value="flag.code">{{ flag.code }}</option>
                                        </template>
                                    </select>
                                </li>
                            </template>
                            <template v-else>
                                <li class="nav-item">
                                    <select name="lang" @change="changeLanguage" v-model="lang" class="form-control dark text-uppercase">
                                        <template v-for="flag in getFlags">
                                            <option :value="flag.code">{{ flag.code }}</option>
                                        </template>
                                    </select>
                                </li>
                            </template>
                            <!-- lenguaje -->
                            </ul>
                            <a href="/contatto" class="btn btn-primary ml-lg-3 d-none d-lg-block">{{ $store.getters.getTags({ tag: 'general_btn_contact'}) }}</a>
                        </div>
                    </div>
                </nav>
            </div>
    </div>
</template>
<script>
    import InfoHeader from './InfoHeader';

    export default {
        name: 'nav-bar',
        components: { InfoHeader },
        data() {
            return {
                sticky: true,
                fondoNav: false,
                lang: 'it'
            }
        },
        created() {
            this.lang = this.$store.getters.getFlagActive;
            this.$validator.localize(this.lang); // change language for vee-validate

            this.$store.dispatch('APIGetAllLanguagesTags');
        },
        mounted() {
            //detectamos el evento scroll
            var that = this;
            window.onscroll = function () {
                that.sticky = !(document.body.scrollTop > 10 || document.documentElement.scrollTop > 10);
            };
        },
        computed: {
            getFlags() {
                return this.$store.getters.getFlags;
            },
            routes() {
                return [
                        // { name: this.$store.getters.getTags({ tag: 'general_btn_home' }), link: '/'},
                        { name: this.$store.getters.getTags({ tag: 'general_btn_company' }), link: '/la-compagnia'},
                        { name: this.$store.getters.getTags({ tag: 'general_btn_especialities' }), link: '/specialita'},
                        // { name: this.$store.getters.getTags({ tag: 'partners_title12' }), link: '/blog'},
                        { name: this.$store.getters.getTags({ tag: 'partners_titulo' }), link: '/partners'},
                        { name: this.$store.getters.getTags({ tag: 'careers_titulo' }), link: '/labori'}
                    ]
            }
        },
        methods: {
            changeLanguage() {
                this.$validator.localize(this.lang); // change language for vee-validate

                this.$store.commit('changeLanguage', { list: this.lang });
            },
            cambiarFondoNav() {
                if ($this.fondoNav === true) {
                    $this.fondoNav = false;
                } else {
                    $this.fondoNav = true;
                }
            }
        }
    }
</script>
<style scoped>
    .logo {
        width: 160px;
        height: auto;
    }

    #container-nav {

    }
    .btn{
        font-size: 0.8rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 167px;
    }
    .form-control{
        background-color: transparent;
        background-position: right center;
        background-repeat: no-repeat;
        background-size: 24px;
        padding: 0.375rem 1.6rem 0.375rem .5rem;
        outline: none;
        -webkit-appearance: none;
        appearance: none;
        border: none;
        border-radius: 0;
        font-weight: 700;
        margin-left: 5px;

    }
    .form-control:focus{
        outline: none;
        box-shadow: none;
    }
    .form-control.transparent{
        background-image: url('/images/iconos/internet-white.svg');
        border-left: 1px solid #fff;
        color: #fff;
    }
    .form-control.transparent option{
        color: #f26336;
    }
    .form-control.dark{
        background-image: url('/images/iconos/internet.svg');
        border-left: 1px solid #4b4b4b9b;
        color: #4b4b4b; 
    }
    @media (min-width: 992px) {
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
            font-size: 1rem;
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .6rem;
            padding-left: .6rem;
        }
    }

    .btn {
        padding: 0.375rem 1.1rem;
        font-size: 0.9rem;
        line-height: 1.6;
        border-radius: 1.25rem;
        font-weight: bold;
    }

    /*link menu color blanco*/

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 1);
    }

    .navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
        color: rgb(206, 206, 206);
    }

    /*link menu color negro*/
    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5);
    }

    .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 1);
    }

    .navbar-dark .nav-link.router-link-exact-active.router-link-active {
        color: #ffffffed;
    }

    .navbar-light .nav-link.router-link-exact-active.router-link-active {
        color: #f26336;
    }


    @media (max-width: 991.98px) {
        .navbar {
            background-color: #fff;
        }

        .navbar-dark .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-dark .navbar-nav .show > .nav-link, .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 0.5);
        }

        /*link menu color negro*/
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }

        .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
            color: rgba(0, 0, 0, 1);
        }

        .navbar-dark .nav-link.router-link-exact-active.router-link-active {
            color: #f26336;
        }

        .navbar-light .nav-link.router-link-exact-active.router-link-active {
            color: #f26336;
        }

        .navbar-dark .navbar-toggler {
            color: rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.1);
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.1);
        }
    }

    @media (max-width: 991.98px) {
        .navbar[data-v-61279d3a] {
            background-color: #fff0;
        }

        button.navbar-toggler {
            color: #fff;
        }

        @media (max-width: 991.98px) {

        }
        .navbar-dark .navbar-toggler {
            color: rgb(242, 105, 55);
            border-color: rgb(242, 105, 55);
        }
    }
</style>
