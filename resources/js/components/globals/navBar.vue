<template>
    <div id="container-nav" class="fixed-top w-100">
            <!-- info header -->
            <info_header class="d-none d-lg-block" v-if="sticky"></info_header>

            <!-- menu navbar -->
            <div id="navbar"                                        :class="sticky ? '' : 'bg-white'">
                <nav class="navbar navbar-expand-lg"                :class="sticky ? 'navbar-dark' : 'navbar-light'">
                    <div class="container">
                        <router-link class="navbar-brand" to="/">
                            <img src="images/logo/logojumperr.svg" alt="Jumperr" class="logo">
                        </router-link>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>

                        <div class="collapse navbar-collapse text-uppercase font-weight-bold" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/">Inicio</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/#lacompañia">La Compañia</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/#especialidades" >Especialidades</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/#blog" >Blog</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/partners" >Partners</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link" to="/#carreras" >Carreras</router-link>
                                </li>
                            </ul>
                            <a href="/#contacto" class="btn btn-primary ml-lg-3 d-none d-lg-block">Contactanos</a>
                        </div>
                    </div>
                </nav>
            </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            sticky: true
        }
    },
    mounted(){
        //detectamos el evento scroll
        var that = this;
        window.onscroll = function() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                that.sticky = false;
            } else {
                that.sticky = true;
            }
        };
    }
}
</script>

<style scoped>
.logo{
    width: 160px;
    height: auto;
}
#container-nav{
    
}
@media (min-width: 992px){
.navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1.1rem;
    padding-left: 1.1rem;
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

.navbar-dark .nav-link.router-link-exact-active.router-link-active{ color: #ffffffed; }
.navbar-light .nav-link.router-link-exact-active.router-link-active{ color: #f26336; }


@media (max-width: 991.98px) {
    .navbar{
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

    .navbar-dark .nav-link.router-link-exact-active.router-link-active{ color: #f26336; }
    .navbar-light .nav-link.router-link-exact-active.router-link-active{ color: #f26336; }

    .navbar-dark .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
    }
    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
    }
}
</style>
