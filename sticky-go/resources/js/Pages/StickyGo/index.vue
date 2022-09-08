<template>
    <Navigation>
        <div class=" w-full min-h-screen  bg-no-repeat bg-cover " style="background-image:url('/images/Bgm-Stickers.png')">
            <div class="h-fit py-96 w-full">
                <Link :href="route('shop')">
                    <div class="w-72 mx-auto text-center h-20  bg-[#fcd062] text-[#e93578] font-[600] rounded-lg p-6 text-2xl">
                        SHOP NOW
                    </div>
                </Link>
            </div>
        </div>
        <div class="min-h-fit w-full bg-white p-5">
            <div class="flex justify-between w-full mt-5 ">
                <div class="font-semibold text-2xl">Popular</div>
                <Link :href="route('shop')">
                    <div class="text-[#e93578] font-semibold">See more</div>
                </Link>
            </div>
            <div class="flex mt-5 gap-x-4" >
                <div class="" v-for="sticker in Stickers" v-bind:key="sticker.id">
                    <img class="mb-2 border-t-4 border-gray-200" :src="sticker.product_profile=null?'':sticker.product_profile">
                    <span class="font-semibold  text-lg pl-2">{{sticker.title}}</span>
                    <h5 class="text-blue-300 pl-2">₱ {{sticker.price.toLocaleString('en-US')}}</h5>
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
                    <img class="mb-2 border-t-4 border-gray-200" :src="sticker.product_profile=null?'':sticker.product_profile">
                    <span class="font-semibold  text-lg pl-2">{{sticker.title}}</span>
                    <h5 class="text-blue-300 pl-2">₱ {{sticker.price.toLocaleString('en-US')}}</h5>
                </div>
            </div>
        </div>
        
    </Navigation>
</template>
<script>
    import Navigation from '../StickyGo/Partials/Nav.vue'
    import {Link} from '@inertiajs/inertia-vue3';
export default {
    setup() {
        
    },
    props:{
        Stickers:Object,
    },
    components:{
        Navigation,
        Link,
    },
    data(){
        return{
            
        }
    }
    
}
</script>