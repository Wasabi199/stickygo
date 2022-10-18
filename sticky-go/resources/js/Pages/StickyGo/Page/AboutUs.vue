<template>
    <Navigation>
        <div class="flex h-fit w-full">
            <div class="w-1/2 p-10">
                <img class="m-auto w-10/12 h-72 " src="../../../../../public/images/generic-image-placeholder.png" alt=""></div>
            <div class="w-1/2 m-auto p-20 text-lg">
                <p>Here at StickyGo we offer fun and exciting stickers created by different artists from the Philippines. We offer high quality product that is fit designed for your artistic personality.<br><br><br>The company offers opportunity for local artists to be recognized nationwide. Your artworks represents your persona and character online.  You have the ability to be creative, you just have to let it shine. Whether you are an artist or just looking for a new hobby, you'll find that just a click away.</p>
            </div>
        </div>
        <div class="flex h-fit w-full px-10 text-center bg-gray-200">
            <div class="w-1/2 m-auto p-10 text-lg">
                <p class="font-semibold">Mission</p>
                <p>Offers good quality products and opportunity for filipino artist.</p>
            </div>
            <div class="w-1/2 m-auto p-10 text-lg">
                <p class="font-semibold">Vision</p>
                <p>A country that is full of creativity and connects us all with our passion.</p>
            </div>
        </div>
        <div class="h-fit w-full">
            <div class="w-full text-center font-bold text-3xl my-10">Meet our Team!</div>
            <div class="grid grid-cols-2 gap-y-10 gap-x-20 m-auto w-fit mb-10">
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/kyn.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Kyn Mendoza</div>
                        <div class="text-lg">Project Manager</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/lennie.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Lennie Saludes</div>
                        <div class="text-lg">Document Writer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/VILLANUEVA_RYAN_2x2.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Ryan Villanueva</div>
                        <div class="text-lg">Developer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/ched.jpg" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Chedric Paul Alfante</div>
                        <div class="text-lg">Document Writer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/bea.jpg" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Bea Vanessa Anguluan</div>
                        <div class="text-lg">Web Designer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/ked.jpg" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Roweign Kedriech Pablo</div>
                        <div class="text-lg">Tester</div>
                    </div>
                </div>
            </div>
        </div>
    </Navigation>
</template>
<script>
    import Navigation from '../Partials/Nav.vue'
export default {
    setup() {
        
    },
    components:{
        Navigation
    },
    props:{
        Search:Object,
        filters:Object,
},
}
</script>