<template>
  <Navigation>
    <div class="py-20 px-32">
      <form method="POST">
        <div class="flex w-full">
          <div class="w-1/2 px-10">
            <div class="">
              <div class="text-3xl mb-5 font-semibold">Billing Details</div>
              <div class="grid gap-y-2">
                <input
                  type="text"
                  class="w-full rounded-lg"
                  :value="Info.name +' '+Info.lastname"
                />
                <input
                  type="text"
                  class="w-full rounded-lg"
                  placeholder="Contact No."
                  :value="Info.contact"
                />
                <input
                  type="text"
                  class="w-full rounded-lg"
                  :value="Info.house_number"
                />
                <input
                  type="text"
                  class="w-full rounded-lg"
                  :value="Info.barangay"
                />
                <input
                  type="text"
                  class="w-full rounded-lg"
                  :value="Info.city"
                />
                <input
                  type="text"
                  class="w-full rounded-lg"
                  :value="Info.province"
                />
              </div>
            </div>
            <div class="py-5">
              <div class="text-3xl mb-5 font-semibold">Payment</div>
              <div class="flex gap-x-2">
                <div
                  class="
                    p-14
                    w-1/2
                    bg-gray-100
                    border border-gray-400
                    rounded-lg
                    cursor-pointer
                  "
                  :class="
                    formCheckout.card == 'GCash' ? 'border-blue-300' : null
                  "
                  @click="selected('GCash')"
                >
                  <img
                    class=""
                    src="../../../../../public/images/GCash_Logo_text.png"
                  />
                </div>
                <div
                  class="
                    p-14
                    w-1/2
                    bg-gray-100
                    border border-gray-400
                    rounded-lg
                    cursor-pointer
                  "
                  :class="
                    formCheckout.card == 'CCard' ? 'border-blue-300' : null
                  "
                  @click="selected('CCard')"
                >
                  <img
                    class=""
                    src="../../../../../public/images/visa-and-mastercard-logos-logo-visa-png-logo-visa-mastercard-png-visa-logo-white-png-awesome-logos.png"
                  />
                </div>
              </div>
              <div class="py-5">
                <div
                  v-if="this.formCheckout.card == 'GCash'"
                  class="grid gap-y-2 grid-cols-2"
                >
                  <input
                    type="text"
                    class="col-span-2 w-full rounded-lg"
                    placeholder="GCash Name"
                  />
                  <input
                    type="text"
                    class="col-span-2 w-full rounded-lg"
                    placeholder="GCash Number"
                  />
                </div>
                <div
                  v-if="this.formCheckout.card == 'CCard'"
                  class="grid gap-2 grid-cols-2"
                >
                  <input
                    type="text"
                    class="col-span-2 w-full rounded-lg"
                    placeholder="CardHolder Name"
                  />
                  <input
                    type="text"
                    class="col-span-2 w-full rounded-lg"
                    placeholder="Card Number"
                  />
                  <input
                    type="text"
                    class="w-full rounded-lg"
                    placeholder="Exp Month"
                  />
                  <input
                    type="text"
                    class="w-full rounded-lg"
                    placeholder="Exp Year"
                  />
                  <input
                    type="text"
                    class="col-span-2 w-full rounded-lg"
                    placeholder="CVC"
                  />
                </div>
              </div>
            </div>
          </div>
          <div class="w-1/2 px-10 ">
            <div class="text-3xl mb-5 font-semibold">Your Order</div>
            <table class="w-full border border-black ">
              <thead>
                <tr >
                  <th class="border-black border py-2">Product</th>
                  <th class="border-black border py-2">Subtotal</th>
                </tr>
              </thead>
              <tbody v-for="cart in Cart" v-bind:key="cart.id">
                <tr >
                  <td class="border-black border p-5">{{cart.title}}</td>
                  <td class="border-black border p-5">{{cart.price * cart.quantity}}</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="border-black border p-5">SubTotal</td>
                  <td class="border-black border p-5">Price</td>
                </tr>
                <tr>
                  <td class="border-black border p-5">Shipping</td>
                  <td class="border-black border p-5">Price</td>
                </tr>
                <tr>
                  <td class="border-black border p-5">Total</td>
                  <td class="border-black border p-5">Price</td>
                </tr>
              </tbody>
            </table>
            <div class="cursor-pointer w-full my-5 py-5 border-2 border-black text-xl text-center">Back To Cart</div>
            <div @click="checkout()" class="cursor-pointer w-full my-5 py-5 bg-blue-500 text-xl text-white text-center">Place Order</div>
          </div>
        </div>
      </form>
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
  props: {
    Search: Object,
    filters: Object,
    Cart:Object,
    Info:Object
  },

  data() {
    return {
      formCheckout: this.$inertia.form({
        card: "",
      }),
    };
  },
  methods: {
    selected(picked) {
      console.log(picked);
      this.formCheckout.card = picked;
    },
    checkout(){
    console.log('thankyou')
    this.$inertia.get(route('checkout'));
  }
  },
 
};
</script>