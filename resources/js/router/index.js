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

// import componentes especialidadse
import ContentEspecialidades from '../components/especialidades/ContentEspecialidades.vue';
import sectionCmsEspecialidades from '../components/especialidades/sectionCmsEspecialidades.vue';
import sectionDesarrolloEspecialidades from '../components/especialidades/sectionDesarrolloEspecialidades.vue';
import sectionDesignEspecialidades from '../components/especialidades/sectionDesignEspecialidades.vue';
import sectionHeaderEspecialidades from '../components/especialidades/sectionHeaderEspecialidades.vue';
import sectionProcesoEspecialidades from '../components/especialidades/sectionProcesoEspecialidades.vue';
import sectionRedesEspecialidades from '../components/especialidades/sectionRedesEspecialidades.vue';
import sectionStartEspecialidades from '../components/especialidades/sectionStartEspecialidades.vue';
import sectionStudioEspecialidades from '../components/especialidades/sectionStudioEspecialidades.vue';
import sectionNewsletterEspecialidades from '../components/especialidades/sectionNewsletterEspecialidades';

// import compoentes blog
import blog from '../components/blog/blog.vue';
import post from '../components/blog/post.vue';
import comentariosPost from '../components/blog/partials/comentarios.vue';
import headerPost from '../components/blog/partials/header.vue';
import postRelacionadosPost from '../components/blog/partials/postRelacionados.vue';
import sharedPost from '../components/blog/partials/shared.vue';

// import componentes partners
import ContentPartners from '../components/partners/ContentPartners.vue';
import sectionPartnersHeader from '../components/partners/sectionPartnersHeader.vue';
import sectionPartnersPresentation from '../components/partners/sectionPartnersPresentation.vue';
import sectionPartnersSevicePresentation from '../components/partners/sectionPartnersSevicePresentation.vue';
import sectionPartnersSevices from '../components/partners/sectionPartnersSevices.vue';

// Import componentes carreras
import ContentCarreras from '../components/carreras/ContentCarreras.vue';
import sectionAnuncioCarreras from '../components/carreras/sectionAnuncioCarreras.vue';
import sectionContactoCarreras from '../components/carreras/sectionContactoCarreras.vue';
import sectionEmpleosCarreras from '../components/carreras/sectionEmpleosCarreras.vue';
import sectionHeaderCarreras from '../components/carreras/sectionHeaderCarreras.vue';
import sectionProcesoCarreras from '../components/carreras/sectionProcesoCarreras.vue';
import showCarreras from '../components/carreras/show/showCarreras.vue';


/*
* Components globas
*/
Vue.component('index',index);
Vue.component('content_home',ContentHome);
Vue.component('navbar',navBar);
Vue.component('info_header', infoHeader);
Vue.component('section_footer', sectionFooter);

/*
* Components page Home
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

//Components page Empresa | compañia
Vue.component('ContentEmpresa', ContentEmpresa);
Vue.component('section_about_empresa', sectionAboutEmpresa);
Vue.component('section_donde_estamos_empresa', sectionDondeEstamosEmpresa);
Vue.component('section_elegirnos_empresa', sectionElegirnosEmpresa);
Vue.component('section_header_empresa', sectionHeaderEmpresa);
Vue.component('section_mision_empresa', sectionMisionEmpresa);
Vue.component('section_team_empresa', sectionTeamEmpresa);
Vue.component('section_vision_empresa', sectionVisionEmpresa);

//Components page Especialidades
Vue.component('ContentEmpresa', ContentEspecialidades);
Vue.component('section_cms_especialidades', sectionCmsEspecialidades);
Vue.component('section_desarrollo_especialidades', sectionDesarrolloEspecialidades);
Vue.component('section_design_especialidades', sectionDesignEspecialidades);
Vue.component('section_header_especialidades', sectionHeaderEspecialidades);
Vue.component('section_proceso_especialidades', sectionProcesoEspecialidades);
Vue.component('section_redes_especialidades', sectionRedesEspecialidades);
Vue.component('section_start_especialidades', sectionStartEspecialidades);
Vue.component('section_studio_especialidades', sectionStudioEspecialidades);
Vue.component('section_newsletter_especialidades', sectionNewsletterEspecialidades);

// Blog
Vue.component('comentarios_post', comentariosPost);
Vue.component('header_blog', headerPost);
Vue.component('post_relacionados_post', postRelacionadosPost);
Vue.component('shared_post', sharedPost);

/* Components partners */
Vue.component('section_partners_header', sectionPartnersHeader);
Vue.component('section_partners_presentation', sectionPartnersPresentation);
Vue.component('section_partners_service_presentation', sectionPartnersSevicePresentation);
Vue.component('section_partners_services', sectionPartnersSevices);

//Carreras
Vue.component('section_anuncio_carreras', sectionAnuncioCarreras);
Vue.component('section_contacto_carreras', sectionContactoCarreras);
Vue.component('section_empleos_carreras', sectionEmpleosCarreras);
Vue.component('section_header_carreras', sectionHeaderCarreras);
Vue.component('section_proceso_carreras', sectionProcesoCarreras);


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
        {
            path: '/specialita',
            name: 'ContentEspecialidades',
            component: ContentEspecialidades
        },
        {
            path: '/blog',
            name: 'blog',
            component: blog
        },
        {
            path: '/post',
            name: 'post',
            component: post
        },
        {
            path: '/partners',
            name: 'ContentPartners',
            component: ContentPartners
        },
        {
            path: '/labori',
            name: 'ContentCarreras',
            component: ContentCarreras,
        },
        {
            path: '/labori/1',
            name: 'showCarreras',
            component: showCarreras,
        }

    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else return { x: 0, y: 0 }
    }
});
export default router;