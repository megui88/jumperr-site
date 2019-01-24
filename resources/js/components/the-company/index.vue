<template>
    <div>
        <company-header />
        <company-about />
        <company-mission />
        <company-vision />
        <company-choose />
        <company-location />
        <company-teamwork />
    </div>
</template>
<script>
    import CompanyHeader from './CompanyHeader';
    import CompanyAbout from './CompanyAbout';
    import CompanyMission from './CompanyMission';
    import CompanyVision from './CompanyVision';
    import CompanyChoose from './CompanyChoose';
    import CompanyLocation from './CompanyLocation';
    import CompanyTeamwork from './CompanyTeamwork';

    export default {
        name: 'the-company',
        components: {
            CompanyHeader,
            CompanyAbout,
            CompanyMission,
            CompanyVision,
            CompanyChoose,
            CompanyLocation,
            CompanyTeamwork
        }
    }
</script>
