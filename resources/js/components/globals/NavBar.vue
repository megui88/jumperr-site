<template>
    <div id="container-nav" class="fixed-top w-100">
        <!-- info header -->
        <info-header class="d-none d-lg-block" v-if="sticky" />

            <!-- menu navbar -->
            <div id="navbar" :class="[sticky ? '' : 'bg-white', fondoNav ? 'bg-white' : '' ]">
                <nav class="navbar navbar-expand-lg" :class="sticky ? 'navbar-dark' : 'navbar-light'">
                    <div class="container">
                        <a class="navbar-brand" href="/">
                            <img src="/images/logo/logojumperr.svg" alt="Jumperr" class="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuCollapse" aria-controls="menuCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse text-uppercase font-weight-bold" id="menuCollapse">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                             <template v-for="item in routes">
                                 <!-- movil -->
                                 <li class="nav-item d-md-none">
                                     <router-link class="nav-link" :to="item.link"
                                     data-toggle="collapse" data-target="#menuCollapse" aria-expanded="false" aria-controls="menuCollapse"
                                     >{{ item.name }}</router-link>
                                 </li>
                                 <!-- DESKTOP -->
                                 <li class="nav-item d-none d-md-flex">
                                     <router-link class="nav-link" :to="item.link"
                                     >{{ item.name }}</router-link>
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

            $('#menuCollapse').on('show.bs.collapse', function () {
                that.fondoNav = true;
            })
            $('#menuCollapse').on('hide.bs.collapse', function () {
                that.fondoNav = false;
            })
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

                $('#menuCollapse').collapse('hide')
            },
            cambiarFondoNav() {
                if ($this.fondoNav === true) {
                    $this.fondoNav = false;
                } else {
                    $this.fondoNav = true;
                }
            },
            cerrarCollapse(){
                $('#menuCollapse').collapse({
                    toggle: false
                })
            }
        }
    }
</script>
<style scoped>
    .logo {
        width: 160px;
        height: auto;
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

    .navbar-dark .navbar-nav .nav-link {
        color: rgb(255, 255, 255);
    }
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


    @media (max-width: 991.98px) {
        .navbar {
            background-color: rgba(255, 255, 255, 0);
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

        .navbar-dark .navbar-toggler, .navbar-light .navbar-toggler {
            color: rgb(242, 105, 55);
            border-color: rgb(242, 105, 55);
        }

        /* selected lang */
        .navbar-dark .form-control, .navbar-light .form-control{
            background-color: transparent;
            background-position: left center;
            background-repeat: no-repeat;
            background-size: 24px;
            padding: 0.375rem 1.6rem 0.375rem .5rem;
            outline: none;
            -webkit-appearance: none;
            appearance: none;
            border: none;
            border-radius: 0;
            font-weight: 700;
            margin-left: 0px;
            text-align: right;
        }
        .navbar-dark .form-control.transparent{
            background-image: url('/images/iconos/internet.svg');
            border: 0px solid #4b4b4b9b;
            color: #4b4b4b9b;
            padding-left: 28px; 
        }
        .navbar-light .form-control.dark{
            background-image: url('/images/iconos/internet.svg');
            border: 0px solid #4b4b4b9b;
            color: #4b4b4b9b;
            padding-left: 28px; 
        }
        
    }
</style>
