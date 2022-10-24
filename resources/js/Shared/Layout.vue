<template>
	<header class="flex w-full justify-between items-center shadow-lg bg-gray-200 text-gray-500 p-7">
		<h1 class="text-2xl font-bold">LOGO</h1>
		<h1 class="text-sm font-bold">Welcome Back , {{ username }}</h1>
		<Nav />
	</header>

	<main class="p-7">
		<slot />
	</main>
</template>

<script>
import Nav from "./Nav.vue";

export default {
	components: { Nav },
    computed: {
        username() {
            return this.$page.props.username
        }
    }
};
</script>
