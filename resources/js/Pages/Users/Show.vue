<template>
    <Head title="Create User" />

    <div class="flex justify-between mb-10">
        <h1 class="text-5xl font-bold">Show User</h1>
        <Link :href="`/users`" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Users </Link>
    </div>

    <div class="overflow-x-auto relative shadow-md rounded-lg mb-5">
        <table class="w-full text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700">
                <tr>
                    <th scope="col" width="30%" class="uppercase bg-gray-200 p-6 border-2 border-b-white">ID</th>
                    <td scope="row" width="70%" class="p-6 bg-white border-2 rounded-lg">{{ user.id }}</td>
                </tr>
                <tr>
                    <th scope="col" width="30%" class="uppercase bg-gray-200 p-6 border-2 border-b-white">Name</th>
                    <td scope="row" width="70%" class="p-6 bg-white border-2 rounded-lg">{{ user.name }}</td>
                </tr>
                <tr>
                    <th scope="col" width="30%" class="uppercase bg-gray-200 p-6 border-2 border-b-white">Email</th>
                    <td scope="row" width="70%" class="p-6 bg-white border-2 rounded-lg">{{ user.email }}</td>
                </tr>
                <tr>
                    <th scope="col" width="30%" class="uppercase bg-gray-200 p-6 border-2 border-b-white">Created At</th>
                    <td scope="row" width="70%" class="p-6 bg-white border-2 rounded-lg">{{ moment(user.created_at).format('LLLL') }}</td>
                </tr>
                <tr>
                    <th scope="col" width="30%" class="uppercase bg-gray-200 p-6 border-2">Updated At</th>
                    <td scope="row" width="70%" class="p-6 bg-white border-2 rounded-lg">{{ moment(user.updated_at).format('LLLL') }}</td>
                </tr>
            </thead>
        </table>
    </div>
</template>

<script setup>
import moment from "moment";

defineProps({
    user: Object,
});
</script>
