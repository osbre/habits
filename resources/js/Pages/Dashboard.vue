<script setup lang="ts">
import Layout from '@/Layouts/Authenticated.vue'
import {Head} from '@inertiajs/inertia-vue3'
import WeeklyOverview from "@/Components/WeeklyOverview.vue";
import Button from "@/Components/Breeze/Button.vue";
import {ref} from "@vue/reactivity";
import AddHabitModal from "@/Components/AddHabitModal.vue";

const modalOpen = ref(false)
</script>

<template>
    <Head title="Habits overview"/>

    <Layout>
        <!--        <template #header>-->
        <!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Habits overview</h2>-->
        <!--        </template>-->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <WeeklyOverview :habits="[
                    {title: 'Practice Tailwind CSS'}
                ]"/>

                <Button @click="modalOpen = true" class="mt-3">Add new habit</Button>

                <AddHabitModal v-show="modalOpen" @cancel="modalOpen = false" />
            </div>

        </div>
    </Layout>
</template>
