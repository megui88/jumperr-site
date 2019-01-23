<template>
    <div>
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 mx-auto">
                        <h3 class="text-white text-center">{{ $store.getters.getTags({ tag: 'specialties_text63' }) }}</h3>
                        <p class="text-white text-center">{{ $store.getters.getTags({ tag: 'specialties_text12' }) }}</p>
                    </div>
                    <div class="col-12 col-lg-5 mx-auto">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" id="button-addon2">{{ $store.getters.getTags({ tag: 'general_btn_send' }) }}</button>
                            </div>
                        </div>
                        <label for="terms" class="d-block text-center text-white mb-0">
                            <input type="checkbox" name="term" id="terms">
                            {{ $store.getters.getTags({ tag: 'specialties_text15' }) }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'specialties-newsletter'
    }
</script>
<style scoped>
    .newsletter {
        width: 100%;
        min-height: 380px;
        background-color: rgba(242, 99, 54, 1);
        background-image: url('/images/especialidades/jumperr_bg1_especialidades.svg'), url('/images/especialidades/jumperr_bg2_especialidades.svg');
        background-position: 103% center, -3% center;
        background-repeat: no-repeat, no-repeat;
        background-size: 180px, 180px;

        -webkit-clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
        clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);

        display: grid;
        align-items: center;
        padding: 4rem 0;
    }

    .input-group > .form-control:not(:last-child),
    .input-group > .input-group-append > .btn {
        border-radius: 1.25rem;
    }

    .input-group-append {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        z-index: 1010;
    }

    .form-control {
        border: 2px solid transparent;
    }

    .form-control:focus {
        color: #000000;
        background-color: #fff;
        border-color: #fac0ae00; /*valor con transparencia*/
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(242, 99, 54, 0); /*0.5 valor por defecto, se lo quite*/
    }

    .btn-primary {
        background-color: #f04712;
    }

    .btn-primary:focus, .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(244, 122, 84, 0); /*0.5 valor por defecto, se lo quite*/
    }
</style>

