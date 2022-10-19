<template>
    <div class="p-20">
        <h1 class="text-9xl mb-20">Home</h1>

        <Nav />

        <div class="text-2xl" style="margin-top: 500px">
            The Current Time Is {{ time }} <br />
            <Link href="/" class="text-blue-600" preserve-scroll>Refresh</Link>
        </div>
    </div>
</template>

<script>
import Nav from '../Shared/Nav.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { Nav, Link },
    props: {
        time: String
    }
};
</script>
