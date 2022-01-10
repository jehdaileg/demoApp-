<template>

    <Head>
        <title>DemoApp- Users</title>
    </Head>


        <div class="mt-2">
                    <div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
    <div>
      <h2 class="text-2xl font-semibold leading-tight">Users Section</h2>
    </div>
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
      <div
        class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
      >
        <table class="min-w-full leading-normal">
          <thead>
            <tr>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Client / Invoice
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Amount
              </th>
              <th
                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
              >
                Issued / Due
              </th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <div class="flex">
                  <div class="flex-shrink-0 w-10 h-10">
                    <img
                      class="w-full h-full rounded-full"
                      src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                      alt=""
                    />
                  </div>
                  <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">
                      Molly Sanders
                    </p>
                    <p class="text-gray-600 whitespace-no-wrap">000004</p>
                  </div>
                </div>
              </td>


            </tr>
            <tr>


            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div></div>


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

        users: {
            type: Array
        },


    },

}

</script>
