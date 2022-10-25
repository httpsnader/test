<template>
    <Component :is="link.url ? 'Link' : 'span'" v-for="(link, index) in links" :key="index" :href="link.url" v-html="link.label" class="p-3 mx-2 rounded shadow bg-gray-200 font-bold hover:bg-gray-300 transition ease-in-out duration-500" :class="{'!bg-gray-50': !link.url, '!bg-blue-900 text-white': link.active}" preserve-scroll />
</template>

<script setup>
defineProps({
    links: Array,
});
</script>
