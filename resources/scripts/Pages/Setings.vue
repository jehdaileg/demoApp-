<template>
    <Layout :name="name">


    <Head>
        <title>DemoApp- Settings</title>
    </Head>


        <h5>Settings Section</h5>


    </Layout>
</template>

<script>



import Layout from "./Shared/Layout.vue";

import { Head } from "@inertiajs/inertia-vue3";

export default {

    components: {
        Layout, Head
    }
    ,
    computed: {

        name(){
            return this.$page.props.auth.user.username
        }
    }

}

</script>
