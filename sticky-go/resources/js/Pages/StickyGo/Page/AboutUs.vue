<template>
    <Navigation>
        <div class="flex h-fit w-full">
            <div class="w-1/2 p-10">
                <img class="m-auto w-10/12 h-72 " src="../../../../../public/images/generic-image-placeholder.png" alt=""></div>
            <div class="w-1/2 m-auto p-10 text-lg">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consectetur blanditiis vero, fugiat quae illo ea cum iure voluptates natus, architecto magni nostrum veritatis commodi necessitatibus quisquam cupiditate, eos aliquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus dolor hic nulla suscipit repellendus voluptatibus eum, ad, architecto tempora debitis ea voluptatum accusamus quos alias voluptas aliquid repellat numquam.s</p>
            </div>
        </div>
        <div class="flex h-fit w-full text-center bg-gray-200">
            <div class="w-1/2 m-auto p-10 text-lg">
                <p class="font-semibold">Mission</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consectetur blanditiis vero, fugiat quae illo ea cum iure voluptates natus, architecto magni nostrum veritatis commodi necessitatibus quisquam cupiditate, eos aliquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus dolor hic nulla suscipit repellendus voluptatibus eum, ad, architecto tempora debitis ea voluptatum accusamus quos alias voluptas aliquid repellat numquam.s</p>
            </div>
            <div class="w-1/2 m-auto p-10 text-lg">
                <p class="font-semibold">Vission</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus consectetur blanditiis vero, fugiat quae illo ea cum iure voluptates natus, architecto magni nostrum veritatis commodi necessitatibus quisquam cupiditate, eos aliquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus dolor hic nulla suscipit repellendus voluptatibus eum, ad, architecto tempora debitis ea voluptatum accusamus quos alias voluptas aliquid repellat numquam.s</p>
            </div>
        </div>
        <div class="h-fit w-full">
            <div class="w-full text-center font-bold text-3xl my-10">Meet our Team!</div>
            <div class="grid grid-cols-2 gap-y-10 gap-x-20 m-auto w-fit mb-10">
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/generic-image-placeholder.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Kyn Mendoza</div>
                        <div class="text-lg">Project Manager</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/generic-image-placeholder.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Lennie Saludes</div>
                        <div class="text-lg">Document Writer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/generic-image-placeholder.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Ryan Villanueva</div>
                        <div class="text-lg">Developer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/generic-image-placeholder.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Chedric Paul Alfante</div>
                        <div class="text-lg">Document Writer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/generic-image-placeholder.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Bea Vanessa Anguluan</div>
                        <div class="text-lg">Web Designer</div>
                    </div>
                </div>
                <div class="flex">
                    <img class="rounded-full w-48" src="../../../../../public/images/generic-image-placeholder.png" alt="">
                    <div class="my-auto pl-6">
                        <div class="font-semibold text-2xl">Roweign Kedriech Pablo</div>
                        <div class="text-lg">Document Writer</div>
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