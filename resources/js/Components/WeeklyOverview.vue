<template>
    <table class="table-fixed w-full bg-white overflow-hidden shadow-sm sm:rounded-lg font-mono">
        <thead>
        <tr>
            <th rowspan="2"
                class="text-center align-middle">
                Habits
            </th>
            <th v-for="day in weekDays"
                class="border text-gray-300 font-light py-1.5">
                {{ day }}
            </th>
        </tr>
        <tr>
            <th v-for="day in [11,12,13,14,15,16,17]" class="border py-3">
                {{ day }}
            </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="habit in habits">
            <td class="border border-light-blue-500 px-4 py-2 text-light-blue-600">
                {{ habit.title }}
            </td>
            <td v-for="day in weekDays"
                :class="{ 'bg-yellow-100': false,
                          'border text-center py-10 text-4xl py-2 hover:bg-blue-100 cursor-pointer': true
                                }"
                v-text="!false ? '' : '✅'"
            ></td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "WeeklyOverview",
    props: {
        title: String,
        habits: Array,
        weekDays: {
            type: Array,
            default: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
        },
        accomplishments: Array,
    },
    methods: {
        logExecution(habit_id, day) {

        }
    }
}
</script>

<style scoped>

</style>
