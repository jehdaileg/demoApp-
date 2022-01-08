<template>

    <Head>
        <title>DemoApp- Users</title>
    </Head>


        <h5>Users section </h5>

        <div style="margin-top: 800px;">
            <p>The current time is {{ time }}</p>

            <Link href="/users" class="text-blue-500" preserve-scroll="true">Refresh</Link>

        </div>


</template>

<script>

import Layout from "./Shared/Layout.vue";

import { Link } from "@inertiajs/inertia-vue3";

import { Head } from "@inertiajs/inertia-vue3";
export default {

    layout: Layout,

    components: {
         Link, Head
    },

    props: {

        time: {
            type: String
        },

    },

}

</script>
