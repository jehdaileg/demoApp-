<template>

    <Head>
        <title>DemoApp- Users</title>
    </Head>


        <div class="flex justify-between mb-6">
            <h5>Users section </h5>

            <input type="text" v-model="search" placeholder="Search ..." class="border-blue-300 px-2 rounded-lg" />

        </div>

        <div class="mt-2">
            <table class="table-bordered table-cell">
                <thead>
                    <tr>
                        <th>Users Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="user in users.data" :key="user.id">
                        <td>{{ user.name }}</td>
                        <td><Link class="text-blue-300" :href="'/users/' +user.id+ '/edit'">Edit</Link></td>
                    </tr>
                </tbody>
            </table>
        </div>


            <Pagination :links="users.links" class="mt-6" />


        <div style="margin-top: 800px;">
            <p>The current time is {{ time }}</p>

            <Link href="/users" class="text-blue-500" preserve-scroll="true">Refresh</Link>

        </div>


</template>

<script>

import Layout from "./Shared/Layout.vue";

import Pagination from "./Shared/Pagination.vue";

import { Link } from "@inertiajs/inertia-vue3";

import { Head } from "@inertiajs/inertia-vue3";

import Inertia from "@inertiajs/inertia";
export default {

    layout: Layout,

    components: {
         Link, Head, Pagination
    },

    props: {

        time: {
            type: String
        },

        users: {
            type: Object
        },

        filters: {
            type: Object
        },

    },

    data() {
        return {
            search: this.$page.props.filters.search,

        }
    },

    methods: {

    },

    watch: {
        search(value)
        {
          this.$inertia.get('/users', {search: value}, {

              preserveState: true,

              replace: true,

          })
        }
    }

}

</script>
