<template>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div @click="cancel" class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-black opacity-50"></div>
            </div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
            <form @click.prevent="submit"
                  class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
                  role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div>
                    <label for="title" class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        Name of your habit
                    </label>
                    <Input id="title" v-model="form.title" type="text" class="mt-3 block w-full"/>
                </div>
                <div class="mt-4 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                    <button
                        type="submit"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:col-start-2 sm:text-sm">
                        Save
                    </button>
                    <button
                        type="button"
                        @click="cancel"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import Input from "./Breeze/Input.vue";

export default {
    name: "AddHabitModal",
    components: {Input},
    data() {
        return {
            form: this.$inertia.form({
                title: null,
            }),
        }
    },
    emits: ['cancel'],
    methods: {
        submit() {
            this.form.post('/habits')
        },
        cancel() {
            this.$emit('cancel')
        }
    }
}
</script>

<style scoped>

</style>
