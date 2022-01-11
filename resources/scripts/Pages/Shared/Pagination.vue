<template>
    <div>

           <Component

                :is="link.url ? 'Link': 'span'"
                v-for="link in links"
                :key="link.label"
                :href="link.url"
                v-html="link.label"
                preserve-scroll="true"
                class="px-1"
                :class="link.url ? '': 'text-blue-500'"

            />

    </div>
</template>

<script>

import { Link } from "@inertiajs/inertia-vue3";

export default{

    props: {
        links: Array,
    },

    components: {
        Link
    }


};


</script>
