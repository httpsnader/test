<template>
    <Head title="Create User" />

    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">Create User</h1>
        <Link :href="`/users`" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Users </Link>
    </div>

    <form @submit.prevent="submit" class="max-w-md mx-auto">
        <div class="block mb-10">
            <label for="name" class="text-sm w-full block">Name</label>
            <input v-model="form.name" id="name" name="name" type="text" placeholder="Name" class="w-full border mt-3 px-5 py-3 rounded-lg outline-0" />
            <span v-if="errors.name" v-text="errors.name" class="text-red-500 mt-3 block capitalize text-xs"></span>
        </div>
        <div class="block mb-10">
            <label for="email" class="text-sm w-full block">Email</label>
            <input v-model="form.email" id="text" name="email" type="email" placeholder="Email" class="w-full border mt-3 px-5 py-3 rounded-lg outline-0" />
            <span v-if="errors.email" v-text="errors.email" class="text-red-500 mt-3 block capitalize text-xs"></span>
        </div>
        <div class="block mb-10">
            <label for="password" class="text-sm w-full block">Password</label>
            <input v-model="form.password" id="password" name="password" type="password" placeholder="Password" class="w-full border mt-3 px-5 py-3 rounded-lg outline-0" />
            <span v-if="errors.password" v-text="errors.password" class="text-red-500 mt-3 block capitalize text-xs"></span>
        </div>
        <div class="block">
            <button type="submit" :disabled="processing" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center inline-flex justify-center items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
        </div>
    </form>
</template>

<script setup>
import { reactive, ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

defineProps({
    errors: Object,
});

let form = reactive({
    name: "",
    email: "",
    password: "",
});

let processing = ref(false);

let submit = () => {
    Inertia.post("/users/store", form, {
        onStart: () => {
            processing.value = true;
        },
        onFinish: () => {
            processing.value = false;
        },
    });
};
</script>
