<template>
    <div>
        <partners-header />
        <partners-presentation />
        <partners-service-presentation />
        <partners-services />
        <home-contact />
    </div>
</template>
<script>
    import PartnersHeader from './PartnersHeader';
    import PartnersPresentation from './PartnersPresentation';
    import PartnersServicePresentation from './PartnersSevicePresentation';
    import PartnersServices from './PartnersSevices';
    import HomeContact from '../home/HomeContact';

    export default {
        name: 'partners',
        components: {
            PartnersHeader,
            PartnersPresentation,
            PartnersServicePresentation,
            PartnersServices,
            HomeContact,
        }
    }
</script>
