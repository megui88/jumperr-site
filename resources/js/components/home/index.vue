<template>
    <div>
        <home-header />
        <home-services />
        <home-bio />
        <home-brand />
        <home-youtube />
        <home-portfolio />
        <home-blog />
        <home-careers />
        <!--<home-our-offices />-->
        <home-contact />
    </div>
</template>
<script>
    import HomeHeader from './HomeHeader';
    import HomeServices from './HomeServices';
    import HomeBio from './HomeBio';
    import HomeBrand from './HomeBrand';
    import HomeYoutube from './HomeYoutube';
    import HomePortfolio from './HomePortfolio';
    import HomeBlog from './HomeBlog';
    import HomeCareers from './HomeCareers';
    import HomeOurOffices from './HomeOurOffices';
    import HomeContact from './HomeContact';

    export default {
        name: 'home',
        components: {
            HomeHeader, HomeServices, HomeBio, HomeBrand, HomeYoutube, HomePortfolio, HomeBlog, HomeCareers, HomeOurOffices, HomeContact
        }
    }
</script>
