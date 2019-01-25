<template>
    <div>
        <header>
            <img src="/images/contacto/banner_contacto-min.jpg" alt="banner jumperr">
        </header>
        

            
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active"  id="v-pills-home-tab"       data-toggle="pill"  href="#v-pills-home"        role="tab"      aria-controls="v-pills-home"        aria-selected="true">
                            {{ $store.getters.getTags({ tag: 'page_cookies_title' }) }}       
                        </a>
                        <a class="nav-link"         id="v-pills-profile-tab"    data-toggle="pill"  href="#v-pills-profile"     role="tab"      aria-controls="v-pills-profile"     aria-selected="false">
                            {{ $store.getters.getTags({ tag: 'page_terms_title' }) }}  
                        </a>
                        <a class="nav-link"         id="v-pills-messages-tab"   data-toggle="pill"  href="#v-pills-messages"    role="tab"      aria-controls="v-pills-messages"    aria-selected="false">
                            {{ $store.getters.getTags({ tag: 'page_polity_title' }) }}
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-8 py-4">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h3 class="title-border-bottom">
                                {{ $store.getters.getTags({ tag: 'page_cookies_title' }) }}       
                            </h3>
                            {{ $store.getters.getTags({ tag: 'page_cookies_body' }) }}
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h3 class="title-border-bottom">
                                {{ $store.getters.getTags({ tag: 'page_terms_title' }) }}  
                            </h3>
                            {{ $store.getters.getTags({ tag: 'page_terms_body' }) }}
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <h3 class="title-border-bottom">
                                {{ $store.getters.getTags({ tag: 'page_polity_title' }) }}
                            </h3>
                            {{ $store.getters.getTags({ tag: 'page_polity_body' }) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>
<script>
    export default {
        name: 'termini',
    }
</script>
<style scoped>
header img{
    width: 100%;
    height: 375px;
    object-fit: cover;
}
.nav-pills .nav-link {
    border-radius: 0rem;
}
.title-border-bottom:after {
    content: ' ';
    border-bottom: 1px solid #f26336;
    display: block;
    width: 160px;
    margin: 1rem 0rem 1.1rem;
}
</style>

