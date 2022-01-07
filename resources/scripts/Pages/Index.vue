<template>
    <Layout>

        <h5 class="text-3xl">Home,Hello guys, installation done {{name}} and</h5>


    </Layout>
</template>

<script>

import Layout from "./Shared/Layout.vue";
export default {

    props: {

        name: {
            type: String
        },

        frameworks: {
            type: Array
        },


    },

    components: {
        Layout
    },


}
</script>
