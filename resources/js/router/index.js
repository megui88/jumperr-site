import Vue from 'vue';

// Router Vue
import Router from 'vue-router';
Vue.use(Router);

// Swiper slider
import VueAwesomeSwiper from 'vue-awesome-swiper';
Vue.use(VueAwesomeSwiper, {});

//youtube
import VueYoutube from 'vue-youtube';
Vue.use(VueYoutube);


// Sweetalert2
import VueSweetalert2 from 'vue-sweetalert2';
Vue.use(VueSweetalert2);


//Componente Padre
import index from '../components/';

//import componentes globals
import ContentHome from '../components/home/ContentHome.vue';
import navBar from '../components/globals/navBar.vue';
import infoHeader from '../components/globals/infoHeader.vue';
import sectionFooter from '../components/globals/footer.vue';

//import componentes home
import sectionHeader from '../components/home/sectionHeader.vue';
import sectionServices from '../components/home/sectionServices.vue';
import sectionBio from '../components/home/sectionBio.vue';
import sectionMarca from '../components/home/sectionMarca.vue';
import sectionYoutube from '../components/home/sectionYoutube.vue';
import sectionPortafolio from '../components/home/sectionPortafolio.vue';
import sectionBlog from '../components/home/sectionBlog.vue';
import sectionCarreras from '../components/home/sectionCarreras.vue';
import clock from '../components/home/clock/clock.vue';
import sectionClock from '../components/home/sectionClock.vue';
import sectionContacto from '../components/home/sectionContacto.vue';

// import componentes empresa
import ContentEmpresa from '../components/empresa/ContentEmpresa.vue';
import sectionAboutEmpresa from '../components/empresa/sectionAboutEmpresa.vue';
import sectionDondeEstamosEmpresa from '../components/empresa/sectionDondeEstamosEmpresa.vue';
import sectionElegirnosEmpresa from '../components/empresa/sectionElegirnosEmpresa.vue';
import sectionHeaderEmpresa from '../components/empresa/sectionHeaderEmpresa.vue';
import sectionMisionEmpresa from '../components/empresa/sectionMisionEmpresa.vue';
import sectionTeamEmpresa from '../components/empresa/sectionTeamEmpresa.vue';
import sectionVisionEmpresa from '../components/empresa/sectionVisionEmpresa.vue';

/*
* Components globas
*/
Vue.component('index',index);
Vue.component('content_home',ContentHome);
Vue.component('navbar',navBar);
Vue.component('info_header', infoHeader);
Vue.component('section_footer', sectionFooter);

/*
* Components Home
*/
Vue.component('section_header', sectionHeader);
Vue.component('section_services', sectionServices);
Vue.component('section_bio', sectionBio);
Vue.component('section_marca', sectionMarca);
Vue.component('section_youtube', sectionYoutube);
Vue.component('section_portafolio', sectionPortafolio);
Vue.component('section_blog', sectionBlog);
Vue.component('section_carreras', sectionCarreras);
Vue.component('clock', clock);
Vue.component('section_clock', sectionClock);
Vue.component('section_contacto', sectionContacto);

//Components Empresa | compañia
Vue.component('ContentEmpresa', ContentEmpresa);
Vue.component('section_about_empresa', sectionAboutEmpresa);
Vue.component('section_donde_estamos_empresa', sectionDondeEstamosEmpresa);
Vue.component('section_elegirnos_empresa', sectionElegirnosEmpresa);
Vue.component('section_header_empresa', sectionHeaderEmpresa);
Vue.component('section_mision_empresa', sectionMisionEmpresa);
Vue.component('section_team_empresa', sectionTeamEmpresa);
Vue.component('section_vision_empresa', sectionVisionEmpresa);

// Routes
let router = new Router({
    mode:'history',
    routes: [
        {
            path: '/',
            name: 'ContentHome',
            component: ContentHome
        },
        {
            path: '/la-compagnia',
            name: 'ContentEmpresa',
            component: ContentEmpresa
        },

    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else return { x: 0, y: 0 }
    }
});
export default router;