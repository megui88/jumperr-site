<template>
    <div>
        <header>
            <div class="grid-container">
                <div class="grid-row">
                    <h2 class="text-white">{$store.getters.getTags({tag:'company_text1'})}}</h2>
                </div>
            </div>
        </header>
    </div>
</template>
<script>

    export default {
        name: 'company-header',
    }
</script>
<style scoped>
    header {
        width: 100%;
        min-height: 100vh;
        background-image: url('/images/la-empresa/jumperr_banner_compañia-min.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .grid-container {
        max-width: 1140px;
        min-height: 100vh;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 100%;
    }

    .grid-row {
        display: flex;
        align-items: center;
    }

    h2 {
        line-height: 1.5;
        font-size: 1.4rem;
        font-weight: 300;
        margin-top: 25%;
    }

    h2 strong {
        font-weight: 700;
    }

    @media (min-width: 768px) {
        .grid-container {
            grid-template-columns: 50%;
        }

        h2 {
            line-height: 1.5;
            font-size: 1.88rem;
        }
    }
</style>
