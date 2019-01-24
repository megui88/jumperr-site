<template>
    <div>
        <div class="newsletter">
            <div class="container">
                <template v-if="loading">
                    <div class="container d-flex justify-content-center">
                        <clip-loader :loading="loading" color="#292052" size="60px"/>
                    </div>
                </template>

                <template v-else>
                    <div class="row">
                        <div class="col-12 col-lg-9 mx-auto">
                            <h3 class="text-white text-center">{{ $store.getters.getTags({ tag: 'specialties_text63' }) }}</h3>
                            <p class="text-white text-center">{{ $store.getters.getTags({ tag: 'specialties_text12' }) }}</p>
                        </div>
                        <div class="col-12 col-lg-5 mx-auto">
                            <div class="input-group mb-3">
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    v-model="email"
                                    :maxlength="50"
                                    v-validate="'required|email|min:9|max:50'"
                                    :data-vv-as="$store.getters.getTags({ tag:'conctac_text6' })"
                                    data-vv-delay="600"
                                    :class="{ 'text-danger': errors.has('email') }"
                                    class="form-control"
                                >

                                <div class="input-group-append">
                                    <button :disabled="errors.any() || isDisabled || loading" @click.prevent="sendMail()" type="button" class="btn btn-primary" id="button-addon2">
                                        {{ $store.getters.getTags({ tag:'general_btn_send' }) }}
                                    </button>
                                </div>
                            </div>

                            <label for="terms" class="d-block text-center text-white mb-0">
                                <span v-show="errors.has('terms')" class="text-danger">*</span>
                                <input
                                    type="checkbox"
                                    id="terms"
                                    name="terms"
                                    v-model="terms"
                                    v-validate="'required'"
                                >
                                <span :class="{ 'text-danger': errors.has('terms') }">{{ $store.getters.getTags({ tag: 'specialties_text15' }) }}</span>
                            </label>
                        </div>
                        <small v-show="errors.has('email')" class="text-center text-danger">{{ errors.first('email') }}</small>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>
<script>
    import { ClipLoader } from 'vue-spinner/dist/vue-spinner.min';

    export default {
        name: 'specialties-newsletter',
        components: { ClipLoader },
        data() {
            return {
                email: null,
                terms: false,
                loading: false
            }
        },
        computed: {
            isDisabled() {
                return !this.email || !this.terms
            }
        },
        methods: {
            sendMail() {
                this.loading = true;

                this.$validator.validateAll().then(result => {
                    if (result) {
                        axios.post('/api/newsletter', this.email).then(responseApi => {
                            if (responseApi.status === 200) {
                                this.loading = false;
                                this.showAlert('success', 'Ok');
                            }
                        }).catch(error => {
                            console.log('axios error: ' + error);
                            this.loading = false;
                            this.showAlert('error', 'Error');
                        })

                    } else {
                        this.showAlert('error');
                        this.loading = false;
                    }

                }).catch(error => console.log('vee-validate error: ' + error));
            },
            showAlert(type, title) {
                this.$swal({
                    position: 'center',
                    type: type,
                    title: title,
                    showConfirmButton: false,
                    showCloseButton: true,
                })
            },
        }
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

