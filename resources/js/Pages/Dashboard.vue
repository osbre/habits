<script setup lang="ts">
import Layout from '@/Layouts/Authenticated.vue'
import {Head} from '@inertiajs/inertia-vue3'
import WeeklyOverview from "@/Components/WeeklyOverview.vue";
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
                <!--                <section class="mt-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">-->
                <!--                    <div class="p-6 bg-white border-b border-gray-200">"You're logged in!"</div>-->
                <!--                </section>-->
            </div>

        </div>
    </Layout>
</template>
