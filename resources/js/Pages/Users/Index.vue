<template>
    <Head title="User" />

    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">User</h1>
        <div class="flex justify-between items-center">
            <input v-model="search" type="search" placeholder="Search ..." class="border px-5 py-3 rounded-lg outline-0 mr-5" />
            <Link :href="`/users/create`" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-3 inline-flex items-center mr-2"> Create </Link>
        </div>
    </div>

    <div v-if="$page.props.flash.message" class="text-green-700 bg-green-100 p-4 mb-4 text-center text-xs font-bold rounded-lg" role="alert">
        {{ $page.props.flash.message }}
    </div>

    <div class="overflow-x-auto relative shadow-md rounded-lg mb-5">
        <table class="w-full text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-6" width="25%">ID</th>
                    <th scope="col" class="p-6" width="25%">Name</th>
                    <th scope="col" class="p-6" width="25%">Email</th>
                    <th scope="col" class="p-6" width="25%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="p-6">{{ user.id }}</td>
                    <td scope="row" class="p-6">{{ user.name }}</td>
                    <td scope="row" class="p-6">{{ user.email }}</td>
                    <td scope="row" class="p-6">
                        <Link :href="`/users/${user.id}`" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-lg text-sm px-5 py-3 inline-flex items-center mr-2"> Show </Link>
                        <Link :href="`/users/${user.id}/edit`" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 rounded-lg text-sm px-5 py-3 inline-flex items-center mr-2"> Edit </Link>
                        <button type="button" @click="Destroy(user.id)" :disabled="form.processing" class="destroyBtn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-sm px-5 py-3 inline-flex items-center mr-2">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mb-20 flex justify-center">
        <Pagination :links="users.meta.links" />
    </div>
</template>

<script setup>
import { ref, watch } from "vue";
import Pagination from "../../Shared/Pagination.vue";
import { Inertia } from "@inertiajs/inertia";
import debounce from "lodash/debounce";
import { useForm } from "@inertiajs/inertia-vue3";

let props = defineProps({
    users: Object,
    filters: Object,
});

let search = ref(props.filters.search);

watch(
    search,
    debounce(function (value) {
        Inertia.get(
            "/users",
            {
                search: value,
            },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 300)
);

const form = useForm();

function Destroy(id) {
    form.delete(`/users/${id}`);
}
</script>
