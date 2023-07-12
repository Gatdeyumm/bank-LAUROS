<template>
    <div class="min-w-[350px] mb-4 mx-2 p-4 bg-white rounded shadow border flex-1 cursor-pointer" @click="open(client)">
        <div class="flex justify-between">
            <h3 class="text-xl">{{ client.last_name }}, {{ client.first_name }}</h3>
            <h4 class="text-lg text-green-800">{{ client.balance }}</h4>
        </div>
        <div class="text-gray-500 italic">{{ client.address }}</div>
    </div>
</template>

<script setup>
import { router } from '@inertiajs/vue3';


const props = defineProps({
    client: Object
})

function open(client) {
    router.visit('/clients/' + client.id)
}

</script>
