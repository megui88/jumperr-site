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


/**
 * Components
 * */
import index from '../components/';
Vue.component('index', index);

// Home
import Home from '../components/home/';

// The Company
import TheCompany from '../components/the-company/';

// Specialties
import Specialties from '../components/specialties/';

// Blog
import Blog from '../components/blog/Blog';
import Post from '../components/blog/Post';

// Partners
import Partners from '../components/partners/';

// Careers
import Careers from '../components/careers/';
import showCarreras from '../components/careers/show/showCarreras';


// Routes
let router = new Router({
    mode:'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/la-compagnia',
            name: 'TheCompany',
            component: TheCompany
        },
        {
            path: '/specialita',
            name: 'Specialties',
            component: Specialties
        },
        {
            path: '/blog',
            name: 'Blog',
            component: Blog
        },
        {
            path: '/post',
            name: 'Post',
            component: Post
        },
        {
            path: '/partners',
            name: 'Partners',
            component: Partners
        },
        {
            path: '/labori',
            name: 'Careers',
            component: Careers,
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
