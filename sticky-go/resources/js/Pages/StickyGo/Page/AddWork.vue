<template>
    <Navigation>
        <div class="py-16 px-48">
            <div class="text-3xl my-5 font-medium">Add Work</div>
            <div class="flex gap-x-10 border-b-2 border-black pb-10">
                <div class="w-full">
                    <img src="../../../../../public/images/Sticker.png"/>
                    <!-- <input type="file" class="w-full rounded-lg mt-2" placeholder="Image" @change="onFileSelected"> -->
                </div>
                <div class="w-full ">
                    <form method="POST">
                       <div class="mb-2">
                            <p class="text-2xl">Title</p>
                            <input class="w-full rounded-md" type="text" v-model=" formSticker.title" />
                       </div>
                       <div class="mb-2">
                            <p class="text-2xl">Price</p>
                            <input class="w-full rounded-md" type="number" v-model="formSticker.price"/>
                       </div>
                       <div class="mb-2">
                            <p class="text-2xl">Tags</p>
                            <textarea class="w-full min-h-20 rounded-lg" placeholder="Tags seperate with comma"></textarea>
                       </div>
                       <div class="mb-2">
                            <p class="text-2xl">Description</p>
                            <textarea class="w-full h-36 rounded-lg" placeholder="0/150" v-model="formSticker.description"></textarea>
                       </div>
                    </form>
                </div>
            </div>
            <div class="mt-10">
                <div class="flex w-fit m-auto gap-x-2">
                    <input type="checkbox" class="w-5 h-5 checked:bg-gray-500"/>
                    <p>I have the rights to sell this artwork. Including my designs and any featured design that are created by someone else.</p>
                </div>
            </div>
            <div class="flex my-10 w-full justify-end" @click="submit">
                <p class="bg-blue-400 w-fit px-10 py-2 text-white rounded-xl">Add Work</p>
            </div>
        </div>
    </Navigation>
</template>
<script>
    import Navigation from "../Partials/Nav.vue";
export default {
    setup() {
        
    },
    components:{
        Navigation
    },
    props: {
    Search: Object,
    filters: Object,
  },
  data(){
    return{
        formSticker:this.$inertia.form({
            // product_profile:'',
            title:'',
            price:'',
            description:''
        }),
        
    }
  },
  methods:{
    // onFileSelected(file){
    //         this.formSticker.product_profile = file.target.files[0]
    //         console.log(file.target.files[0])
    //     },
    submit(){
        this.formSticker.post(route('addsticker'));
    }
  }

}
</script>