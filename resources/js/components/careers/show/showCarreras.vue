<template>
    <div id="carrera">
        <careers-header />
        <section>
            <article class="wrapper">
                <div class="principal">
                    <div class="content-header">
                        <h3 class="title text-white m-0">{{job.title}}</h3>
                        <span class="subtitulo text-white lead">{{job.location}}</span>
                    </div>
                    <div class="content-body">
                        <div class="description">
                            <h3>Descripción</h3>
                            <p v-html="job.description">
                            </p>
                        </div>
                        <div class="requirements">
                            <h3>Requerimientos</h3>
                            <ul class="nav flex-column">
                                <li v-for="(requirement, index) in job.requirements" :key="index">{{ requirement }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer">
                        <p class="lead font-weight-bold text-center text-primary">
                            Envía tu curriculum y portafolio al siguiente email
                        </p>
                        <div class="text-center">
                            <a href="mailto:work@jumperr.com" class="btn btn-primary">
                                work@jumperr.com
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="secundario">
                        <div class="content-header">
                            <h3 class="title text-white m-0">Resumen del empleo</h3>
                            <span class="subtitulo text-white lead">{{job.title}}</span>
                        </div>
                        <div class="content-body">
                            <div class="item">
                                <strong>Empresa</strong>
                                <p>{{job.company}}</p>
                            </div>

                            <div class="item">
                                <strong>Localización</strong>
                                <p>{{job.location}}</p>
                            </div>

                            <div class="item">
                                <strong>Jornada</strong>
                                <p>{{job.time}}</p>
                            </div>

                            <div class="item">
                                <strong>Salario</strong>
                                <p>{{job.salary}}</p>
                            </div>

                        </div>
                    </div>

                    <div class="secundario">
                        <div class="content-header">
                            <h3 class="title text-white m-0">Empleos relacionados</h3>
                        </div>
                        <div class="content-body">
                            <div class="mb-3" v-for="(job, index) in jobsRelated" :key="index">
                                <a class="job lead font-weight-bold text-dark d-block" :href="job.url">{{job.title}}</a>
                                <span>{{job.location}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
</template>
<script>
    import CareersHeader from '../CareersHeader';
    export default {
        components: { CareersHeader },
        data() {
            return {
                job: {
                    title: 'Diseñador Gráfico',
                    description: `
                Buscamos un experto/a en marketing online, con experiencia, buscamos relacióna largo plazo, podemos podemos pagar buen salario fijo.<br/>
                Envié su curriculum y lo valoraremos.<br/>
                Fecha de contratación: 31/10/2018<br/>
                Cantidad de vacantes: 1<br/>
                `,
                    requirements: [
                        'Educación mínima: Educación Técnico/Profesional',
                        'Años de experiencia: 1',
                        'Idiomas: Inglés, Español',
                        'Edad: Entre 20 y 35 años',
                        'Conocimientos: Adobe Photoshop',
                        'Disponibilidad de viajar: No',
                        'Disponibilidad de cambio de residencia: No'
                    ],
                    company: 'Jumperr Digital Company.',
                    location: 'Caracas, Venezuela',
                    time: 'Tiempo Completo',
                    modality: 'Presencial',
                    salary: 'Por definir',
                },
                jobsRelated: [
                    {
                        title: 'Diseñador Gráfico',
                        location: 'Caracas, Venezuela',
                        url: '#',

                    },
                    {
                        title: 'Diseñador Gráfico',
                        location: 'Caracas, Venezuela',
                        url: '#',
                    },
                    {
                        title: 'Diseñador Gráfico',
                        location: 'Caracas, Venezuela',
                        url: '#',
                    }
                ]
            }
        }
    }
</script>
<style scoped>
    h3 {
        font-size: 1.8rem;
        color: #000;
        margin: 1.6rem 0;
    }

    p, ul {
        font-size: 1.1rem;
        line-height: 2;
        font-weight: 500;
    }

    header {
        width: 100%;
        min-height: 300px;
        background-image: url('/images/carreras/banner-1.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        display: grid;
        align-items: center;
        position: relative;
    }

    .wrapper {
        width: 100%;
        max-width: 1140px;
        height: auto;
        margin: auto;
        padding-right: 15px;
        padding-left: 15px;
        display: grid;
        grid-template-columns: 60% 35%;
        grid-template-rows: auto auto;
        grid-gap: 5%;
    }

    section {
        padding-top: 50px;
        padding-bottom: 100px;
        background-color: #fff;
    }

    .principal {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175);
        overflow: hidden;
    }

    .secundario {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175);
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .content-header {
        background-color: #f26336;
        padding: 1.2rem 2.2rem;
    }

    .title {
        line-height: 1;
        font-size: 1.8rem;
    }

    .subtitulo {
        line-height: 1;
        font-weight: 500;
    }

    .content-body {
        padding: 1.2rem 2.2rem;
        margin-bottom: 2rem;
    }

    .footer {
        border-top: 1px solid #f26336;
        padding: 2.6rem 2.2rem;
    }

    .btn {
        font-size: 1.4rem;
        border-radius: 2.25rem;
        padding: 0.565rem 1.8rem;
    }
</style>
