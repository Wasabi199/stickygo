<template>
    <Navigation>
        <div class="h-screen text-center p-96">
            <div class="text-8xl text-gray-500 m-auto">Thank You!</div>
            <div class="text-3xl font-bold m-auto">Your Order was Placed Successfuly</div>
            <div class="text-2xl m-auto">Check Your Email for Email Details</div>
        </div>
    </Navigation>
</template>
<script>
    import Navigation from "../Partials/Nav.vue";
export default {

    setup() {
        
    },
    props: {
    Search: Object,
    filters: Object,
  },
  components:{
    Navigation
  }
}
</script>