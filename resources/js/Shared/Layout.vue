<template>
	<header class="flex w-full justify-between items-center shadow-lg bg-gray-200 text-gray-500 p-7">
		<h1 class="text-2xl font-bold">LOGO</h1>
		<h1 class="text-sm font-bold">Welcome Back , {{ username }}</h1>
		<Nav />
	</header>

	<main class="p-7">
        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/717288193&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/s-pan-hota" title="Pano" target="_blank" style="color: #cccccc; text-decoration: none;">Pano</a> · <a href="https://soundcloud.com/s-pan-hota/ganaelhawa" title="جانا الهوا - عبد الحليم حافظ" target="_blank" style="color: #cccccc; text-decoration: none;">جانا الهوا - عبد الحليم حافظ</a></div>
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
