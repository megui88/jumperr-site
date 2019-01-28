<template>
    <div>
        <contact-header />
        <contact-carreras />
        <contact-instagram />
        <home-contact />
    </div>
</template>
<script>
    import ContactHeader from './ContactHeader';
    import HomeContact from '../home/HomeContact';
    import ContactCarreras from './ContactCarreras';
    import ContactInstagram from './ContactInstagram';

    export default {
        name: 'contact',
        components: {
            ContactHeader,
            HomeContact,
            ContactCarreras,
            ContactInstagram,
        }
    }
</script>
