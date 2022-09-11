<template>
 <header-component />
<nav-component />
 <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->

            <sidebar-component />

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Harmeet Dashboard</h3>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->

                <div class="content">
                    <div class="row gutters-20">
                        <div class="col-12 pt-5">
                            <h2><b>New Notices</b></h2>
                        </div>
                        <div
                            class="col-xl-3 col-sm-6 col-12"

                        >
                            <div class="dashboard-summery-one mg-b-20">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="title">
                                            <h3></h3>
                                        </div>
                                        <div class="description">
                                            <p></p>
                                        </div>
                                        <div class="text-right">
                                            <p><small><b>By: </b></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer-component />
            </div>

       </div>

</template>

<script>
    import Footer from '@/Shared/Footer.vue'
    import Header from '@/Shared/Header.vue'
    import Sidebar from '@/Shared/Sidebar.vue'
    export default {
        props:{

        },
        components: {
            'FooterComponent': Footer,
            'HeaderComponent': Header,
            'SidebarComponent': Sidebar
        },
    }
</script>

<style scoped>
.dashboard-page-one {
    min-height: 91vh;
}
.content {
    min-height: 62vh;
}
</style>
