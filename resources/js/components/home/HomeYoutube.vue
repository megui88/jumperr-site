<template>
    <div class="bg-white py-4 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <iframe class="youtubevid" src="https://www.youtube.com/embed/rJOaRTeC21A" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'home-youtube'
    }
</script>
<style scoped>
    .py-5 {
        padding-top: 140px !important;
        padding-bottom: 70px !important;
    }

    @media (min-width: 992px) {
        .youtubevid {
            width: 960px;
            height: 540px; /* 720px */
            margin-top: 80px;
        }
    }

    @media (min-width: 767px) and (max-width: 991px) {
        .youtubevid {
            width: 640px;
            height: 360px; /* 480px */
        }
    }

    @media (min-width: 481px) and (max-width: 766px) {
        .youtubevid {
            width: 480px;
            height: 270px; /* 320px */
        }
    }

    @media (max-width: 480px) {
        .youtubevid {
            width: 300px;
            height: 169px; /* 225px */
        }
    }
</style>
