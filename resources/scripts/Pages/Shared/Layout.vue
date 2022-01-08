<template>

        <Head>
            <title>DemoApp</title>
            <meta type="description" content="Info about my Demo Application" head-key="decription">
        </Head>

    <div>

        <section class="p-6 bg-gray-200">
            <header class="flex justify-between">

                <div class="flex items-center">
                     <h1 class="text-black font-semibold">DemoApp</h1>

                     <p class="text-sm ml-4">Hey {{ name }}</p>

                </div>

                <Nav />


            </header>
        </section>

        <section class="p-6">

            <div class="mx-auto max-w-3xl">

                <iframe class="mb-6" height="200px" width="100%" frameborder="no" scrolling="no" seamless src="https://player.simplecast.com/fd0bd2ba-c553-466c-a060-b144797ce369?dark=false"></iframe>
                 <slot></slot>

            </div>

        </section>

    </div>
</template>

<script>

import Nav from "./Nav.vue";

import { Head } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Nav, Head
    },
    props: {

       name: {
           type: String
       },
    }

}
</script>
