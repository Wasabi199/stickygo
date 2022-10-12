<template>
    <Navigation>
        <div class=" w-full h-96  bg-no-repeat bg-cover " style="background-image:url('/images/Bgm-Stickers.png')">
            <div class="h-fit py-40 w-full">
                <Link :href="route('shop')">
                    <div class="w-60 mx-auto text-center  bg-[#fcd062] text-[#e93578] font-[600] rounded-lg p-4 text-2xl">
                        SHOP NOW
                    </div>
                </Link>
            </div>
        </div>
        <div class="min-h-fit w-full bg-white px-32 py-10">
            <div class="flex justify-between w-full mt-5 ">
                <div class="font-semibold text-2xl">Popular</div>
                <Link :href="route('shop')">
                    <div class="text-[#e93578] font-semibold">See more</div>
                </Link>
            </div>
            <div class="flex mt-5 gap-x-4" >
                <div class="" v-for="sticker in Stickers" v-bind:key="sticker.id">
                    <img class="mb-2" :src="sticker.product_profile=null?'':sticker.product_profile">
                    <span class="font-semibold  text-lg pl-2">{{sticker.title}}</span>
                    <h5 class="text-blue-300 pl-2">₱ {{sticker.price.toLocaleString('en-US')}}.00</h5>
                </div>
            </div>
            <div class="flex justify-between w-full mt-20 ">
                <div class="font-semibold text-2xl">Stickers you might like</div>
                <Link :href="route('shop')">
                    <div class="text-[#e93578] font-semibold">See more</div>
                </Link>
            </div>
            <div class="flex mt-5 gap-x-4" >
                <div class="" v-for="sticker in Stickers" v-bind:key="sticker.id">
                    <img class="mb-2 " :src="sticker.product_profile=null?'':sticker.product_profile">
                    <span class="font-semibold  text-lg pl-2">{{sticker.title}}</span>
                    <h5 class="text-blue-300 pl-2">₱ {{sticker.price.toLocaleString('en-US')}}.00</h5>
                </div>
            </div>
            <div class="flex justify-between w-full mt-20 ">
                <div class="font-semibold text-2xl">Feature Artist</div>
            </div>
            <div class="flex mt-5 gap-x-4" >
                <div class="text-center m-auto" v-for="artist in Artist" v-bind:key="artist.id">
                    <img class="w-52 mb-6   rounded-full " :src="artist.profile_photo_path=null?'':artist.profile_photo_path">
                    <span class="font-semibold text-lg ">{{artist.name}}</span>
                    <Link :href="route('artistProfile',artist.id)">
                        <div class="border-2 border-black m-auto mt-3 cursor-pointer py-1 bg-gray-200 w-1/2 rounded-xl">Follow</div>
                    </Link>
                </div>
            </div>
        </div>
        
    </Navigation>
</template>
<script>
    import Navigation from '../StickyGo/Partials/Nav.vue'
    import {Link} from '@inertiajs/inertia-vue3';
    import {pickBy, throttle} from 'lodash';

export default {
    setup() {
        
    },
    props:{
        Stickers:Object,
        Artist:Object,
        Search:Object,
        filters:Object,
        // filterFromSearch:String
    },
    components:{
        Navigation,
        Link,
    },
    data(){
        return{
        
        }
    },
  
    
}
</script>