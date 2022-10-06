<template>
    <Navigation>
        <div class="h-fit text-center py-52">
            <div class="text-6xl  m-auto">Thank You!</div>
            <div class="text-xl font-bold m-auto">Your Order was Placed Successfuly</div>
            <div class="text-lg text-gray-500 m-auto">Check Your Email for Email Details</div>
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