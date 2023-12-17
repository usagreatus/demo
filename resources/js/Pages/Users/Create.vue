<template>
    <Head>
        <title>Create User</title>
    </Head>

    <h1 class="3xl">Create New User</h1>

    <form @submit.prevent="submit" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                v-model="form.name"
                class="border border-gray-400 p-2 w-full"
                required
            >
            <div v-if="form.errors.name" class="text-red-500 text-xs mt-1">{{ form.errors.name }}</div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="name"
                v-model="form.email"
                class="border border-gray-400 p-2 w-full"
                required
            >
            <div v-if="form.errors.email" class="text-red-500 text-xs mt-1">{{ form.errors.email }}</div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                v-model="form.password"
                class="border border-gray-400 p-2 w-full"
                required
            >
            <div v-if="form.errors.password" class="text-red-500 text-xs mt-1">{{ form.errors.password }}</div>
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                :disabled="form.processing"
            >
                Submit
            </button>
        </div>
    </form>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";

let form = useForm({
    name: '',
    email: '',
    password: ''
});

let submit = () => {
    form.post('/users');
};
</script>
