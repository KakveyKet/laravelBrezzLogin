<template>
    <AuthenticationLayout>
        <div
            class="max-w-7xl py-12 mx-auto space-y-6 md:space-y-0 md:grid grid-cols-7 gap-6 sm:px-6 lg:px-8 items-center"
        >
            <div class="col-span-2">
                <slot name="side" />
            </div>
            <div class="col-span-5">
                <slot />
            </div>
        </div>
    </AuthenticationLayout>
</template>

<script setup>
import AuthenticationLayout from "../Layouts/AuthenticatedLayout.vue";
</script>

<style></style>
