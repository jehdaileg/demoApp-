<template>
    <div>
        <section class="p-6 bg-gray-200">
            <header class="flex justify-between">

                <h1 class="text-black font-semibold">DemoApp</h1>

                <Nav />


            </header>
        </section>

        <section class="p-6">

            <div class="mx-auto max-w-3xl">
                 <slot></slot>

            </div>

        </section>

    </div>
</template>

<script>

import Nav from "./Nav.vue"
export default {
    components: {
        Nav
    }

}
</script>
