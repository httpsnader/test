<template>
    <Component :is="link.url ? 'Link' : 'span'" v-for="link in links" :key="link.url" :href="link.url" v-html="link.label" class="p-3 mx-2 rounded shadow" :class="link.url ? 'bg-gray-100' : 'bg-white'" />
</template>

<script setup>
defineProps({
    links: Array,
});
</script>
