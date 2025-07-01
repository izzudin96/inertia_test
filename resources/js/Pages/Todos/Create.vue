<template>
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl mb-4">
            Create new Todo
        </h1>

        <form @submit.prevent="createTodo">
            <div class="flex flex-col mb-4">
                <label for="title">Title</label>
                <input type="text" name="title" v-model="form.title" class="bg-blue-100 rounded-md p-3 border-1 border-gray-50" autofocus>
                <span v-if="$attrs.errors.title" class="text-red-500">{{ $attrs.errors.title }}</span>
            </div>

            <button type="submit" class="bg-orange-300 p-3 rounded-xl">
                Add todo
            </button>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
});

const createTodo = () => {
    form.post('/todos', {
        onSuccess: () => {
            alert('success')
        },
        onError: () => {
            alert('failed');
        }
    })
}

</script>