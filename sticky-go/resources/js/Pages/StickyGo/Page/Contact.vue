<template>
  <Navigation>
    <div
      class="w-full h-96 bg-no-repeat bg-cover"
      style="background-image: url('/images/contactBanner.png')"
    >
      <div class="h-full w-full bg-gray-500 opacity-40">
        <div
          class="
            w-fit
            h-fit
            py-44
            m-auto
            font-bold
            text-white
            opacity-90
            text-5xl
          "
        >
          Contact Us
        </div>
      </div>
    </div>
    <div class="flex h-fit w-full p-10">
        <div class="w-1/2">
            <div class="w-fit m-auto">
                <div class="font-bold text-3xl my-8">Get in touch with us!</div>
                <p>Our team is always happy to offer assistance</p>
                <p>whether it be by email, phone or live chat.</p>
                <div class="flex mt-10">
                    <div class="pr-6"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-telephone-fill text-[#e93578]" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                <div>+63 900 000 0000</div>
                </div>
                <div class="flex mt-3">
                    <div class="pr-6"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-telephone-fill text-[#e93578]" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                </div>
                <div>(075) 000 0000</div>
                </div>
                <div class="flex mt-3">
                    <div class="pr-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-envelope-fill text-[#e93578]" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                </div>
                <div>stickygoph@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="w-1/2 pr-40">
            <div class="w-full pt-5">
                <input type="text" placeholder="Name" class="w-full py-3">
            </div>
            <div class="w-full pt-5">
                <input type="text" placeholder="Email" class="w-full py-3">
            </div>
            <div class="w-full pt-5">
                <textarea type="text" placeholder="Message" class="w-full py-3 h-72"></textarea>
            </div>
        </div>
    </div>
    <div class="w-full py-5 bg-gray-100">
        <div class="m-auto w-fit text-3xl font-bold my-4">Visit us!</div>
        <div class="flex w-fit m-auto gap-x-3">
            <img class="w-64" src="../../../../../public/images/1.png" alt="">
            <img class="w-64" src="../../../../../public/images/2.png" alt="">
            <img class="w-64" src="../../../../../public/images/3.png" alt="">
        </div>
        <div class="flex w-fit m-auto my-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill  text-[#e93578]" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
            <p class="text-lg">123 anywhere, Philippines</p>
        </div>
    </div>
  </Navigation>
</template>
<script>
import Navigation from "../Partials/Nav.vue";
export default {
  setup() {},
  components: {
    Navigation,
  },
  props:{
    Search:Object,
    filters:Object,
  }
};
</script>