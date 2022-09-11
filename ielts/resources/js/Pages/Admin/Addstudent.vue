<template>
<header-component />
         <div class="dashboard-page-one">
<sidebar-component />
        <div class="dashboard-content-one">

    <div class="breadcrumbs-area">

        <ul>
            <li>
                <a href="/dashboard">Dashboard</a>
            </li>
            <li>Add Student</li>
        </ul>

    </div>

       <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add Student</h3>
                </div>
                  </div>


            <form @submit.prevent="submit">
                <div class="row">

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Name of Student *</label>
                        <input class="form-control" type="text" v-model="form.name">
                    </div>

                     <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Email *</label>
                        <input class="form-control" type="text" v-model="form.email">
                    </div>

                     <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Father Name *</label>
                        <input class="form-control" type="text" v-model="form.father_name">
                    </div>

                     <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Ielts type *</label>
                         <select class="form-control" v-model="form.ielts_type">
                            <option value="">Select Ielts Type</option>
                            <option value="academic">Academic</option>
                            <option value="gt">General Training</option>
                        </select>
                    </div>

                     <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Father Name *</label>
                        <input type="text" name="father_name" v-model="father_name">
                    </div>


                    <div class="col-12 form-group mg-t-8">

                        <button :type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            <slot>Click Here</slot>
                        </button>
                    </div>
                </div>
            </form>

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
    props: {
        errors: Object,
    },
    components: {
        'FooterComponent': Footer,
        'HeaderComponent': Header,
        'SidebarComponent': Sidebar
    },


    data() {
        return {

            form: {
                name: '',
                //   place:''
            },
            errors: {},
            //  success:false,

        }
    },
    methods: {



    }
}

</script>

<style>
.row {
    background: white;
    border-radius: 1px;
    box-shadow: none;
}
</style>
