<template>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div
            class="p-6 text-gray-900 flex items-center justify-center space-x-4"
        >
            <div class="flex-grow">
                <div class="flex items-center space-x-3">
                    <span
                        class="text-lg text-gray-900 inline-flex items-center bg-gray-100 px-3 py-0.5 rounded-lg"
                        >{{ discussion.topic.name }}</span
                    >
                    <h1 class="text-lg font-medium">
                        {{ discussion.title }}
                    </h1>
                </div>
            </div>
            <div>avartars</div>
        </div>
    </div>
</template>
<script setup>
defineProps({ discussion: Object });
</script>
