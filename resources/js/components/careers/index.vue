<template>
    <div>
        <careers-header />
        <careers-ads />
        <careers-process />
        <careers-employment />
        <careers-contact />
    </div>
</template>
<script>
    import CareersHeader from './CareersHeader';
    import CareersAds from './CareersAds';
    import CareersProcess from './CareersProcess';
    import CareersEmployment from './CareersEmployment';
    import CareersContact from './CareersContact';

    export default {
        name: 'careers',
        components: { CareersHeader, CareersAds, CareersProcess, CareersEmployment, CareersContact }
    }
</script>
