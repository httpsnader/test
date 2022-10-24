<template>
	<Head title="User" />

	<h1 class="text-5xl font-bold">User</h1>

	<ul>
		<li v-for="user in users" :key="user.id" v-text="user.name"></li>
	</ul>
</template>

<script setup>
defineProps({
	users: Array,
});
</script>
