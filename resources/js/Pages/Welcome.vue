<template>
    <div class="min-h-screen bg-gray-100 flex flex-col justify-center items-center">
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">
                    Laravel + Inertia.js + Vue 3
                </div>
                <h1 class="block mt-1 text-lg leading-tight font-medium text-black">
                    Testing
                </h1>
                <p class="mt-2 text-gray-500">
                    Hello World
                </p>
                <div class="mt-4">
                    <p class="text-sm text-gray-600">
                        Loaded at: {{ loadedTime }}
                    </p>
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'

const loadedTime = ref('')

onMounted(() => {
    loadedTime.value = new Date().toLocaleString()
})

</script>