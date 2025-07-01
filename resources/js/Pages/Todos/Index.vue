<template>
    <div class="max-w-2xl mx-auto flex flex-col">
        <h1 class="text-2xl font-bold mb-4">
            Todos
        </h1>

        <div class="mb-10">
            <Link href="/todos/create" class="p-3 bg-amber-500 text-white rounded-2xl">
                <strong>Create Todo</strong>
            </Link>
        </div>

        <ul class="list-disc">
            <li v-for="todo in todos" :key="todo.id">{{ todo.title }} | <button @click="deleteTodo(todo.id)">Delete</button></li>
        </ul>
    </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3';

const form = useForm();

defineProps({
    todos: {
        type: Array,
    }
});

const deleteTodo = (id) => {
    form.delete(`/todos/${id}`, {
        onSuccess: () => alert('delete success'),
        onError: () => alert('delete failed'),
    });
}

</script>