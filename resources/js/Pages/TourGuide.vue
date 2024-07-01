<script setup>
import { ref } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import CongratulationsModal from "@/Components/CongratulationsModal.vue";

const showModal = ref(false);
</script>

<template>
    <AppLayout>
        <div class="sm:max-w-[530px] w-full mx-auto flex flex-col gap-6 px-6">
            <!-- Earcned Section -->
            <div class="flex flex-col gap-y-4">
                <div class="flex justify-between">
                    <div class="flex gap-[6px] items-center">
                        <img
                            src="../../../public/assets/icons/getStartedIcon.png"
                            height="20px"
                            class="h-5"
                            alt=""
                        />
                        <span class="text-gradient text-2xl text-bold"
                            >Get Started</span
                        >
                    </div>
                    <div class="flex earning relative">
                        <div>
                            <img
                                src="../../../public/assets/icons/diamonds.png"
                                height="40px"
                                class="h-10"
                                alt=""
                            />
                        </div>

                        <div class="">
                            <h2 class="text-gradient text-sm text-bold text">
                                You earned 20 500
                            </h2>
                            <p class="text-[10px] text-[#514F5F]">
                                Total XP to earn : 12 000
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white h-[15px] rounded-full shadow-sm w-full p-1"
                >
                    <div class="h-[7px] bg-blue-500 rounded-full w-2/5"></div>
                </div>
            </div>
            <!-- Earned Section End -->

            <!-- Banner -->

            <div
                class="w-full bg-white rounded-[21px] p-6 flex flex-col gap-y-6 custom-shadow"
            >
                <img
                    src="../../../public/assets/images/banner_1.png"
                    alt=""
                    class="h-[204px] mx-auto"
                    srcset=""
                />

                <div class="flex w-full items-start gap-[6px]">
                    <div class="p-[6px]">
                        <!-- <img
                            src="../../../public/assets/icons/tickIcon.svg"
                            class="h-[18px]"
                            alt="icon"
                        /> -->
                        <label>
                            <input
                                type="checkbox"
                                class="gradient-checkbox"
                                @click="showModal"
                            />
                        </label>
                    </div>
                    <div class="w-full">
                        <div class="flex w-full justify-between items-center">
                            <p class="font-bold text-[#514F5F] text-base">
                                Create more inbox
                            </p>

                            <p
                                class="text-gradient text-base flex items-center gap-x-2"
                            >
                                <span>
                                    <img
                                        src="../../../public/assets/icons/tickIcon_2.svg"
                                        alt="icon"
                                        srcset=""
                                    />
                                </span>
                                <span>
                                    500
                                    <span class="text-[11px]"> XP </span>
                                </span>
                            </p>
                        </div>
                        <p class="text-xs text-[#8C8D90] font-bold leading-6">
                            Create more inbox, welcome your new contact by a
                            message
                        </p>
                    </div>
                </div>
            </div>

            <!-- Banner End -->

            <!-- Video Section -->
            <div
                class="w-full bg-white rounded-[21px] p-6 flex flex-col gap-y-6 custom-shadow"
            >
                <div class="relative h-[214px] sm:min-w-[433px] w-full">
                    <video
                        id="video"
                        loop
                        class="rounded-2xl w-full h-full"
                        poster="../../../public/assets/images/video-thumbnail.png"
                    >
                        <source
                            src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4"
                            type="video/mp4"
                        />
                    </video>
                    <button id="play-button">
                        <div
                            class="play-button flex items-center justify-center absolute !top-1/2 !left-1/2 -translate-x-1/2 -translate-y-1/2"
                        >
                            <img
                                src="../../../public/assets/icons/PlayIcon.svg"
                                class="h-[30px] w-[30px]"
                            />
                        </div>
                    </button>
                </div>

                <div class="flex w-full items-start gap-[6px]">
                    <div class="w-full">
                        <div class="flex w-full justify-between items-center">
                            <div class="flex items-center">
                                <div class="p-[6px]">
                                    <img
                                        src="../../../public/assets/icons/circleIcon.svg"
                                        class="h-[18px]"
                                        alt="icon"
                                    />
                                </div>
                                <p
                                    class="font-bold text-[#514F5F] text-base flex items-center gap-2"
                                >
                                    Manage your messaging rules
                                    <span>
                                        <img
                                            src="../../../public/assets/icons/external-link.svg"
                                            alt=""
                                            srcset=""
                                            class="h-3 w-3"
                                        />
                                    </span>
                                </p>
                            </div>
                            <p
                                class="text-gradient text-base flex items-baseline gap-x-2"
                            >
                                <span class="font-bold"> +</span>
                                <span>
                                    100
                                    <span class="text-[11px]"> XP </span>
                                </span>
                            </p>
                        </div>
                        <p class="text-xs text-[#8C8D90] font-bold leading-6">
                            Create more inbox, welcome your new contact by a
                            message
                        </p>
                    </div>
                </div>
            </div>

            <!-- Video Section End -->
        </div>
    </AppLayout>

    <CongratulationsModal :show="showModal" />
</template>
