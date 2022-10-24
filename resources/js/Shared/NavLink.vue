<template>
    <Link
        class="text-black font-bold hover:underline"
        :class="{ ' !text-blue-500 underline': active }"
    >
        <slot />
    </Link>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
	components: { Link },
    props: {
        active: Boolean,
    }
};
</script>
