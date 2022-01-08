<template>


        <h5 class="text-3xl">Home,Hello guys, Welcome !!!</h5>


</template>

<script>

import Layout from "./Shared/Layout.vue";
export default {


    layout: Layout,
    props: {

        name: {
            type: String
        },

        frameworks: {
            type: Array
        },


    },



}
</script>
