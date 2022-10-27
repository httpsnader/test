<template>
    <div class="bg-gray-900 min-h-screen flex items-center justify-center relative">
        <div class="absolute h-screen w-screen bg-gray-900 bg-[url('/public/assets/authbg.webp')] opacity-20 blur-sm bg-cover bg-no-repeat bg-center"></div>
        <div class="relative flex flex-col items-center bg-white shadow-2xl p-10 rounded-2xl w-full max-w-md">
            <slot />
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>
