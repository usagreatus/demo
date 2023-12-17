<template>
    <Head>
        <title>Login</title>
    </Head>

    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-2xl mx-auto border">
            <h1 class="3xl mb-6">Login</h1>
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="name"
                        v-model="form.email"
                        class="border rounded p-2 w-full"
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
                        class="border rounded p-2 w-full"
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
                        Log In
                    </button>
                </div>
            </form>
        </section>
    </main>
</template>

<script setup>
    import {useForm} from "@inertiajs/vue3";

    defineOptions({
        layout: null
    });

    let form = useForm({
        email: '',
        password: ''
    });

    const submit = () => {
        form.post('/login');
    };
</script>
