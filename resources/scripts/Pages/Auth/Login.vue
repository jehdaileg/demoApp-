<template>
    <div>

        <div class="flex justify-center mt-3 mx-auto">

            <div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Login</h1>
                    <form @submit.prevent="loginUser">

                    <input
                        v-model="form.email"
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email" />

                         <div v-if="errors.email" v-text="errors.email" class="text-sm mt-0 mb-2 text-red-500"></div>

                    <input
                        v-model="form.password"
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />

                    <button
                    :disabled = "processing"
                    :class="{'bg-black' : processing}"
                        type="submit"
                        class="w-full text-center py-3 rounded bg-blue-500 text-white hover:bg-green-dark focus:outline-none my-1"
                    >Login</button>
                    </form>


                </div>

            </div>
        </div>

        </div>

    </div>
</template>

<script setup>

import { reactive, ref } from 'vue';

import { Inertia } from "@inertiajs/inertia";

let form = reactive({

    email: '',
    password: '',

});

let processing = ref(false)

let loginUser = () => {

    Inertia.post('/login', form, {

        onStart: () => { processing.value  = true },

        onFinish: () => { processing.value = false }
    })

};

defineProps({

    errors: Object,

});


</script>
