<template>
    <div id="section_bio">
        <article class="container fondo pb-4 pb-md-0">
            <div class="phones">
                <img class="phone1" src="/images/home/imagenes/jumperr_telefono_3.png" alt="">
                <img class="phone2" src="/images/home/imagenes/jumperr_telefono_2.png" alt="">
                <img class="phone3" src="/images/home/imagenes/jumperr_telefono_1.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center">
                <div>
                    <h3 class="title-border-bottom">{$store.getters.getTags({tag:'home_text11'})}}
                    </h3>
                    <p>
                        {$store.getters.getTags({tag:'home_text12'})}}
                    </p>
                    <router-link to="#" class="btn btn-primary text-uppercase mt-4">
                        {$store.getters.getTags({tag:'general_vermas'})}}
                    </router-link>
                </div>
            </div>
        </article>
    </div>
</template>
<script>
    export default {
        name: 'home-brand'
    }
</script>
<style scoped>
    article {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .phones {
        position: relative;
    }

    .phones img {
        display: inline-block;
        max-height: 560px;
    }

    img.phone1 {
        position: absolute;
        top: -315px;
        left: 100px;
        animation: slicedown 15s infinite;
    }

    @keyframes slicedown {
        0% {
            top: -115px;
            left: 100px;
        }
        50% {
            top: -315px;
            left: 100px;
        }
        80% {
            top: -315px;
            left: 100px;
        }
        100% {
            top: -115px;
            left: 100px;
        }
    }

    img.phone2 {
        position: absolute;
        top: 30px;
        left: -20px;
        animation: sliceleft 15s infinite;
    }

    @keyframes sliceleft {
        0% {
            top: 30px;
            left: -600px;
        }
        50% {
            top: 30px;
            left: -20px;
        }
        80% {
            top: 30px;
            left: -20px;
        }
        100% {
            top: 30px;
            left: -600px;
        }
    }

    /* Standard syntax */
    img.phone3 {
        position: absolute;
        top: 40%;
        right: 60px;
        animation: floatfade 5s infinite;
    }

    /* Standard syntax */
    @keyframes floatfade {
        0% {
            top: 40%;
            right: 60px;
        }
        50% {
            top: 35%;
            right: 50px;
        }
        100% {
            top: 40%;
            right: 60px;
        }
    }

    .fondo {
        background-color: #f8f8f8;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: auto;
        height: 100%;
        min-height: 760px;
    }

    .title-border-bottom:after {
        content: ' ';
        border-bottom: 1px solid #f26336;
        display: block;
        width: 160px;
        margin: 1rem 0rem 1.1rem;
    }

    p {
        font-size: 1.2rem;
    }

    @media (max-width: 468px) {
        article {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
        }

        .phones {
            min-height: 470px;
        }

        .phones img {
            display: inline-block;
            max-height: 322px;
        }

        img.phone1 {
            position: absolute;
            top: -178px;
            left: 80px;
            animation: slicedown 15s infinite;
        }

        @keyframes slicedown {
            0% {
                top: -50px;
                left: 80px;
            }
            50% {
                top: -178px;
                left: 80px;
            }
            80% {
                top: -178px;
                left: 80px;
            }
            100% {
                top: -50px;
                left: 80px;
            }
        }
        img.phone2 {
            position: absolute;
            top: 30px;
            left: -10px;
            animation: sliceleft 15s infinite;
        }

        @keyframes sliceleft {
            0% {
                top: 30px;
                left: -300px;
            }
            50% {
                top: 30px;
                left: 5px;
            }
            80% {
                top: 30px;
                left: 5px;
            }
            100% {
                top: 30px;
                left: -300px;
            }
        }
        img.phone3 {
            position: absolute;
            top: 130px;
            right: 30px;
            animation: floatfade 5s infinite;
        }

        @keyframes floatfade {
            0% {
                top: 100px;
                right: 40px;
            }
            50% {
                top: 130px;
                right: 30px;
            }
            100% {
                top: 100px;
                right: 40px;
            }
        }
        h3 {
            font-size: 1.8rem;
            font-weight: 700;
        }
    }
</style>
