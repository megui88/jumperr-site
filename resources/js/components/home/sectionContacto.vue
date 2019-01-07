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
#section_contacto{
    -webkit-clip-path: polygon(0 12%, 100% 0, 100% 100%, 0% 100%);
    clip-path: polygon(0 12%, 100% 0, 100% 100%, 0% 100%);
    padding: 140px 0px 60px;
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
