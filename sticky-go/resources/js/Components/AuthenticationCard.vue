<template>
    <Navigation>
        <div class="min-h-fit flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <!-- <div>
                <div class="text-4xl font-semibold">Welcome back!</div>
            </div> -->

            <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg">
                <slot />
            </div>
        </div>
    </Navigation>
</template>
<script>
    import Navigation from '../Pages/StickyGo/Partials/Nav.vue'
export default {
    setup() {
        
    },
components:{
    Navigation
}
}
</script>