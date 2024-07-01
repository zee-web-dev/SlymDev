<script setup>
const props = defineProps({
    show: {
        default: false,
        type: Boolean,
    },
});
</script>

<template>
    <div
        v-if="show"
        class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
    >
        <div class="bg-gray-100 rounded-lg p-6 w-96">
            <div class="flex justify-center mb-4">
                <div
                    class="bg-gradient-to-r from-blue-300 to-blue-600 p-4 rounded-full shadow-lg"
                >
                    <img
                        src="../../../public/assets/images/congratulations-icon-1.png"
                        alt="Congratulations Icon"
                        class="w-16 h-16"
                    />
                </div>
            </div>
            <h2 class="text-center text-xl font-semibold mb-2">
                Congratulations You’ve Earned
            </h2>
            <p class="text-center text-3xl font-bold text-blue-600 mb-6">
                500 XP
            </p>
            <div class="flex justify-center">
                <button
                    class="bg-gradient-to-r from-teal-400 to-blue-500 text-white py-2 px-4 rounded-full shadow-md focus:outline-none"
                >
                    Yeahhhhhhhhhhhh !
                </button>
            </div>
        </div>
    </div>
</template>
