<template>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center items-center">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-8">
                <form @submit.prevent="form.post('/todos')" class="space-y-4">
                    <div class="flex flex-col">
                        <label for="title">Title:</label>
                        <input type="text" name="title" v-model="form.title" id="title" class="border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        <span v-if="form.errors.title">{{ form.errors.title }}</span>
                    </div>

                    <button class="bg-blue-400 p-2 rounded text-white hover:bg-blue-500" type="submit">
                        Add todos
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue';
import { useForm } from '@inertiajs/vue3';

const loadedTime = ref('')

const form = useForm({
    title: ''
});

onMounted(() => {
    loadedTime.value = new Date().toLocaleString()
})

</script>