<template>
	<nav>
		<ul class="flex space-x-5 justify-center items-center h-full">
			<li>
				<NavLink href="/" :active="$page.component == 'Home'">Home</NavLink>
			</li>
			<li>
				<NavLink href="/users" :active="$page.component == 'User'">User</NavLink>
			</li>
			<li>
				<NavLink href="/settings" :active="$page.component == 'Setting'">Setting</NavLink>
			</li>
		</ul>
	</nav>
</template>

<script>
import NavLink from "./NavLink.vue";

export default {
	components: { NavLink },
};
</script>
