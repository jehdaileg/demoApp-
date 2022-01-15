<template>
    <div>

        <div class="flex justify-center mt-3 mx-auto">

            <div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                    <form @submit.prevent="submitUser">
                    <input

                        v-model="form.name"
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="name"
                        placeholder="Full Name" />

                    <div v-if="errors.name" v-text="errors.name" class="text-sm mt-0 mb-2 text-red-500"></div>

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

                         <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-sm mt-0 mb-2 text-red-500"></div>
                    <input
                    v-model="form.password_confirmation"
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password_confirmation"
                        placeholder="Confirm Password" />

                     <div v-if="$page.props.errors.password_confirmation" v-text="$page.props.errors.password_confirmation" class="text-sm mt-0 mb-2 text-red-500"></div>

                    <button
                       :disabled = "processing"
                       :class="{'bg-black' : processing}"
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1"
                    >Create Account</button>
                    </form>


                </div>

            </div>
        </div>

        </div>

    </div>
</template>

<script setup>

import { reactive, ref} from 'vue';

import { Inertia } from "@inertiajs/inertia";


let form = reactive({

    name: '',
    email: '',
    password: '',
    password_confirmation: ''

});

let processing = ref(false)

let submitUser = () => {

    Inertia.post('/users', form, {

        onStart: () => { processing.value = true },

        onFinish: () => { processing.value = false }

    })

};

defineProps({

    errors: Object,


});





</script>
