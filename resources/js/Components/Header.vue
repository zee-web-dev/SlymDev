<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <header class="mx-5 hidden lg:flex">
        <div class="grow flex items-center py-5">
            <Link href="/" class="p-3 rounded-xl bg-button">
                <svg
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M10.183 2.1308C10.6354 2.5828 10.6357 3.3159 10.1837 3.7683L5.9964 7.95897L10.183 12.1422C10.6354 12.5943 10.6357 13.3274 10.1837 13.7798C9.73164 14.2321 8.99851 14.2324 8.54614 13.7804L4.2978 9.5355C3.4271 8.66553 3.4266 7.25447 4.2965 6.38381L8.54548 2.1315C8.99749 1.6791 9.73063 1.6788 10.183 2.1308Z"
                        fill="#25213E"
                    />
                </svg>
            </Link>
            <p class="m-0 pl-3 font-semibold text-button">Messages</p>
        </div>
        <div class="my-auto">
            <img
                src="assets/images/user.jpeg"
                class="h-10 w-10 rounded-full"
                alt=""
            />
        </div>
    </header>
</template>
