<template>
  <Navigation>
    <div>
      <div
        class="w-full h-80 bg-no-repeat bg-cover"
        style="background-image:url('/images/AmeliaCover.png')"
      >
    </div>
    <div class="absolute z-20 top-80 w-full">
        <div class="flex px-48 w-fit gap-x-5">
            <img  class="w-56 " :src="Artist.profile_photo_path != null?Artist.profile_photo_path:''"/>
            <div class="h-fit ">
                <div class="flex gap-x-5 pt-24">
                    <div class="text-5xl font-medium">{{Artist.name}}</div>
                    <div class="border-2 border-black m-auto text-lg w-fit  text-center cursor-pointer px-10 py-1 bg-gray-200  rounded-md">Follow</div>
                </div>
                <div class="flex mt-2 gap-x-5">
                    <p class="text-xl font-medium text-gray-500">Followers (95)</p>
                    <p class="text-xl font-medium text-gray-500">Following (0)</p>
                </div>
            </div>
        </div>
    </div>
      <div class="h-56">
      </div>
      <div class="px-48">
        <div class="flex justify-between w-full">
            <div class="flex gap-x-5">
                <div class="text-2xl font-medium border-b-2 border-black">Best Selling</div>
                <div class="text-2xl font-medium pb-1">Best Selling</div>
            </div>
            <!-- <div>
                <Link :href="route('addWork')">
                    <div class=" bg-blue-400 px-10 py-1 rounded-lg text-white text-lg">Add Work</div>
                </Link>
            </div> -->
        </div>
        <div class="my-10">
            <div  class="grid grid-cols-4 grid-flow-auto gap-5 ">
                <div v-for="sticker in Stickers" v-bind:key="sticker.id" class="">
                    <Link :href="route('product',sticker.id)">
                        <img :src="sticker.product_profile != null?sticker.product_profile :''"/>
                        <p>{{sticker.title}}</p>
                        <p class="text-blue-400">{{sticker.price}}.00</p>
                      </Link>
                </div>
                
            </div>
           
        </div>
      
      </div>
      <div class="w-full bg-gray-100">
                <div class="px-48 py-10">
                    <div class="text-2xl font-medium py-5">About Me</div>
                    <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero reiciendis beatae voluptatum autem. Possimus, dolores dolore. Officia amet velit nisi deserunt, ea ducimus iusto! Adipisci aspernatur tempore quod quo voluptates. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque et asperiores eveniet voluptate? Voluptate, assumenda illum. Voluptas eius odio est eos quo, quos repellendus necessitatibus error soluta aut voluptates veritatis?</div>
                </div>
            </div>
    </div>
  </Navigation>
</template>
<script>
import Navigation from "../Partials/Nav.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  setup() {},
  components: {
    Navigation,
    Link
  },
  props: {
    Search: Object,
    filters: Object,
    Artist:Object,
    Stickers:Object
  },
};
</script>