<template>
    <nav>
        <ul>
            <li>
                <Link href="/" class="text-blue-500 hover:underline" :class="{'font-bold underline': true}">Home</Link>
            </li>
            <li>
                <Link href="/users" class="text-blue-500 hover:underline" :class="{'font-bold underline': true}">Users</Link>
            </li>
            <li>
                <Link href="/settings" class="text-blue-500 hover:underline" :class="{'font-bold underline': true}">Settings</Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { Link },
};
</script>
