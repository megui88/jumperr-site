<template>
    <div>
        <specialties-header />
        <specialties-studio />
        <specialties-develop />
        <specialties-start />
        <specialties-newsletter />
        <specialties-network />
        <specialties-cms />
        <specialties-design />
        <specialties-process />
    </div>
</template>
<script>
    import SpecialtiesHeader from './SpecialtiesHeader';
    import SpecialtiesStudio from './SpecialtiesStudio';
    import SpecialtiesDevelop from './SpecialtiesDevelop';
    import SpecialtiesStart from './SpecialtiesStart';
    import SpecialtiesNewsletter from './SpecialtiesNewsletter';
    import SpecialtiesNetwork from './SpecialtiesNetwork';
    import SpecialtiesProcess from './SpecialtiesProcess';
    import SpecialtiesDesign from './SpecialtiesDesign';
    import SpecialtiesCms from './SpecialtiesCMS';

    export default {
        name: 'specialties',
        components: {
            SpecialtiesHeader,
            SpecialtiesStudio,
            SpecialtiesDevelop,
            SpecialtiesStart,
            SpecialtiesNewsletter,
            SpecialtiesNetwork,
            SpecialtiesProcess,
            SpecialtiesDesign,
            SpecialtiesCms
        }
    }
</script>
