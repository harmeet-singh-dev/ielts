<template>
    <header-component/>
    <nav-component/>
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        <sidebar/>

        <div class="dashboard-content-one">
            <flash-messages/>
            <slot/>
        </div>
    </div>
    <!-- Admit Form Area End Here -->
    <footer-component/>

</template>

<script>
import Footer from '@/Shared/Footer.vue'
import Header from '@/Shared/Header.vue'
import Nav from '@/Shared/Nav.vue'
import Sidebar from '@/Shared/Sidebar.vue'
import FlashMessages from '@/Shared/FlashMessages.vue'

export default {
    components: {
        HeaderComponent: Header,
        FooterComponent: Footer,
        NavComponent: Nav,
        Sidebar,
        FlashMessages,
    },
    props: {
        auth: Object,
    },
}
</script>
