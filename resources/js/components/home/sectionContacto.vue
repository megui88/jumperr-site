<template>
    <section id="section_contacto" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto mb-4">
                    <article class="text-center">
                        <h3 class="title-border-bottom">¿Como te podemos ayudar?</h3>
                        <h4>Queremos conocer qué necesidades tienes para asesorarte de manera integral en la proyección de tu marca</h4>
                    </article>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
                    <div class="form-group">
                        <label for="">Nombre*</label>
                        <input class="form-control" type="text" v-model="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email*</label>
                        <input class="form-control" type="text" v-model="email">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono*</label>
                        <input class="form-control" type="text" v-model="telefono">
                    </div>
                    <div class="form-group">
                        <label for="">Comentario*</label>
                        <input class="form-control" type="text" v-model="comentario">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary text-uppercase">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-1 d-none d-lg-inline-block" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
        <img class="img-2 d-none d-lg-inline-block" src="/images/iconos/circulogrueso.svg" alt="elemento jumperr">
        <img class="img-3 d-none d-lg-inline-block" src="/images/iconos/signodemas.svg" alt="elemento jumperr">
    </section>
</template>
<script>
export default {
    data(){
        return {
            name: null,
            email: null,
            telefono: null,
            comentario: null
        }
    },
    mounted(){
        this.formMaterial();
    }, 
    methods: {
        formMaterial(){
             
        }
    }
}
</script>

<style scoped>
.img-1{
    position: absolute;
    top: 150px;
    left: -30px;
    display: inline-block;
    width: 120px;
    height: 120px;
    animation: float 8s linear infinite;
}
.img-2{
    position: absolute;
    bottom: 180px;
    right: -30px;
    display: inline-block;
    width: 120px;
    height: 120px;
    animation: float 5s linear infinite;
}
.img-3{
    position: absolute;
    bottom: 350px;
    right: 80px;
    display: inline-block;
    width: 20px;
    height: 20px;
    animation: float 2s linear infinite;
}


@keyframes float {
	0% {
        transform: translatey(0px) rotate(0deg);
	}
	50% {
        transform: translatey(-20px) rotate(180deg);
	}
	100% {
        transform: translatey(0px) rotate(360deg);
	}
}

#section_contacto{
    -webkit-clip-path: polygon(0 12%, 100% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 12%, 100% 0, 100% 100%, 0% 100%);
    padding: 140px 0px 60px;
    position: relative;
}
h4 {
    font-size: 1.6rem;
    line-height: 1.4;
    font-weight: 300;
}
.form-group{
    position: relative;
}
.form-control {
    display: block;
    width: 100%;
    height: calc(2.35rem + 2px);
    padding: 0rem 0rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.6;
    color: #495057;
    background-color: transparent;
    background-clip: padding-box;
    border: 0px solid #ced4da;
    border-bottom: 1px solid #ced4da;
    border-radius: 0rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-control:focus {
    color: #495057;
    background-color: transparent;
    border-color: #f26336;
    outline: 0;
    box-shadow: 0 0 0 0rem transparent;
}
label {
    display: inline-block;
    margin-bottom: 0rem;
    top: 0;
    left: 0;
}
</style>
