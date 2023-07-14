<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
// import MailCard from '@/Components/MailCard.vue';

const form = useForm({
    subject: '',
    message: ''
})

const submit = () => {
    form.post('/admin/send-mail')

    form.subject = ''
    form.message = ''
}

const props = defineProps({
    message: Object
})

// console.log(props.message)
</script>

<template>
    <Head title="Admin" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Admin</h2>
        </template>

            <div v-if="props.message.info" class="py-5 text-center text-green-600 bg-green-100 rounded-lg">
                Information: {{ props.message.info }}
            </div>
            <div v-if="props.message.error" class="py-5 text-center text-red-600 bg-red-100 rounded-lg">
                Error: {{ props.message.error }}
            </div>

        <div class="py-12">
            <div class="flex items-center justify-center">
                <!-- <MailCard :subject="form.subject" :message="form.message"  /> -->
                <div class="w-1/4 p-4 bg-white rounded-lg shadow-sm">
                    <h1 class="mb-10 text-2xl text-center">Send a message to all clients</h1>
                    <form @submit.prevent="submit">
                        <div class="flex items-start mb-4 space-x-2">
                            <label for="subject">Subject&nbsp;&nbsp;</label>
                            <input v-model="form.subject" type="text" id="subject" class="w-full px-2 py-1 rounded-md">
                        </div>
                        <div class="flex items-start mb-4 space-x-2">
                            <label for="message">Message</label>
                            <textarea v-model="form.message" type="text" id="message" class="px-2 py-1 h-[120px] w-full rounded-md"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="text-white px-4 py-1.5 text-center rounded-md bg-blue-600">Send mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>