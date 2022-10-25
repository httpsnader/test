<template>
    <Head title="User" />

    <h1 class="text-5xl font-bold mb-10">User</h1>

    <div class="overflow-x-auto relative shadow-md rounded-lg mb-5">
        <table class="w-full text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-6">ID</th>
                    <th scope="col" class="p-6">Name</th>
                    <th scope="col" class="p-6">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td scope="row" class="p-6">{{ user.id }}</td>
                    <td scope="row" class="p-6">{{ user.name }}</td>
                    <td scope="row" class="p-6">
                        <Link :href="`/users/${user.id}/edit`" class="text-blue-500 hover:text-blue-900">Edit</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mb-20 flex justify-center">
        <Pagination :links="users.links" />
    </div>
</template>

<script setup>
import Pagination from "../Shared/Pagination.vue";

defineProps({
    users: { Object },
});
</script>
