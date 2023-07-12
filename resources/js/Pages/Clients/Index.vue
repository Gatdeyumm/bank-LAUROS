<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import ClientCard from '@/Components/ClientCard.vue';

const props = defineProps({
    clients: Array
})
</script>

<template>
    <Head title="Clients" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Clients</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap">
                <ClientCard v-for="client in props.clients" :client="client" :key="client.id" />
            </div>
        </div>
    </AuthenticatedLayout>
</template>
