<template>
    <Head title="Signup" />

    <div class="text-3xl font-bold uppercase text-gray-800">Signup</div>
    <form @submit.prevent="submit" class="w-full my-10">
        <div class="block mb-10">
            <label for="name" class="text-sm w-full block">Name</label>
            <input v-model="form.name" id="name" name="name" type="text" placeholder="Name" class="w-full border mt-3 px-5 py-3 rounded-lg outline-0" />
            <span v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 mt-3 block capitalize text-xs"></span>
        </div>
        <div class="block mb-10">
            <label for="email" class="text-sm w-full block">Email</label>
            <input v-model="form.email" id="email" name="email" type="text" placeholder="Email" class="w-full border mt-3 px-5 py-3 rounded-lg outline-0" />
            <span v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 mt-3 block capitalize text-xs"></span>
        </div>
        <div class="block mb-10">
            <label for="password" class="text-sm w-full block">Password</label>
            <input v-model="form.password" id="password" name="password" type="password" placeholder="Password" class="w-full border mt-3 px-5 py-3 rounded-lg outline-0" autocomplete="off" />
            <span v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 mt-3 block capitalize text-xs"></span>
        </div>
        <div class="block">
            <button type="submit" :disabled="form.processing" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center inline-flex justify-center items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Signup</button>
        </div>
    </form>
    <Link :href="`/login`" class="font-bold transition duration-500 ease-in-out text-xs text-blue-400 hover:text-blue-900"> Already Have Account ? , Login Now </Link>
</template>

<script>
import Layout from "../../Shared/AuthLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

defineProps({
    errors: Object,
});

let form = useForm({
    name: "",
    email: "",
    password: "",
});

let submit = () => {
    form.post("/signup");
};
</script>

