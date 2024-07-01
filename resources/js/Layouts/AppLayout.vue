<script setup>
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";

</script>

<template>
    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex flex-col h-screen bg-gradient manrope">
        <!-- ===== Header Start ===== -->
        <Header />
        <!-- ===== Header End ===== -->

        <!-- ===== Content Area Start ===== -->
        <div class="h-full mb-5 mx-2.5 relative flex">
            <!-- ===== Sidebar Start ===== -->
            <Sidebar />
            <!-- ===== Sidebar End ===== -->

            <!-- ===== Main Content Start ===== -->
            <main
                class="ml-2 bg-white bg-opacity-50 rounded-xl w-full me-5 min-h-[calc(100vh-100px)] max-h-[calc(100vh-100px)] py-[50px] overflow-y-auto"
            >
                <slot />
            </main>
            <!-- ===== Main Content End ===== -->
        </div>
    </div>
    <!-- ===== Page Wrapper End ===== -->
</template>
