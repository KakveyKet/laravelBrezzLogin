<script setup>
import ForumLayout from "@/Layouts/ForumLayout.vue";
import { Head } from "@inertiajs/vue3";
import Select from "@/Components/Select.vue";
import InputLabel from "@/Components/InputLabel.vue";
import Disscussion from "./Disscussion.vue";

defineProps({
    discussions: Object,
});
</script>

<template>
    <Head title="Forum" />

    <ForumLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="space-y-3">
                    <div
                        class="bg-white overflow-hidden shadow-sm sm:rounded-lg"
                    >
                        <div class="p-6 text-gray-900">
                            <InputLabel for="topic" />

                            <Select id="topic">
                                <option value="">All Topics</option>
                                <option
                                    :value="topic.slug"
                                    v-for="topic in $page.props.topics"
                                    :key="topic.id"
                                >
                                    {{ topic.name }}
                                </option>
                            </Select>
                        </div>
                    </div>

                    <Disscussion
                        v-for="discussion in discussions.data"
                        :key="discussion.id"
                        :discussion="discussion"
                    />
                </div>
            </div>
        </div>
        <template #side>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">Side</div>
            </div>
        </template>
    </ForumLayout>
</template>
