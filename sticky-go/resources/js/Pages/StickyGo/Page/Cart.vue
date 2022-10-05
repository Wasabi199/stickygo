<template>
    <Navigation>
        <div class=" h-fit m-auto w-5/12 mb-10">
            <div class="w-full text-center py-20 text-4xl font-semibold">Your Shopping Cart</div>
            <div class="flex w-full justify-between border-b-2 border-gray-300 px-2">
                <div class="text-2xl font-bold">Order</div>
                <div @click="this.editMode =! this.editMode" class="text-end pt-2 text-blue-500 cursor-pointer" >Edit</div>
            </div>
            <div class="" v-for="cart in Cart" v-bind:key="cart.id">
                <div class="flex mt-5  justify-between border-b-2 border-gray-300">
                    <div class="flex">
                        <img class="w-36 mb-4" :src="cart.product_profile ==null?'':cart.product_profile">
                        <p class="m-auto pl-2 text-lg font-semibold">{{cart.title}}</p>
                    </div>
                    <div class="flex m-auto space-x-3">
                        <button @click="btnSub(cart)" :disabled="cart.quantity <= 1 " class="border-2 h-10 w-10">-</button>
                        <input type="text" :value="cart.quantity"  class="w-16 h-10 text-center"/>
                        <button @click="btnAdd(cart)" class="border-2 h-10 w-10">+</button>
                    </div>
                    <div v-if="this.editMode == false" class="m-auto text-lg font-bold">₱{{(cart.price * cart.quantity).toLocaleString('en-US')}}.00</div>
                    <div v-else @click="btnDelete(cart)" class="m-auto text-lg font-bold text-rose-500 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="mt-4 space-y-5">
                <div class=" flex justify-between">
                    <div class="text-lg font-semibold">Subtotal</div>
                    <div class="text-lg font-bold">₱{{this.$props.Subtotal.toLocaleString('en-US')}}.00</div>
                </div>
                <div class=" flex justify-between">
                    <div class="text-lg font-semibold">Shipping</div>
                    <div class="text-lg font-bold">Price</div>
                </div>
                <div class=" flex justify-between">
                    <div class="text-lg font-semibold">Total</div>
                    <div class="text-lg font-bold">Price</div>
                </div>
            </div>
            
            <div @click="checkout()" class=" cursor-pointer mt-10 text-center bg-blue-400 text-lg text-white py-5">PROCEED TO CHECKOUT</div>
        </div>
    </Navigation>
</template>
<script>
    import Navigation from "../Partials/Nav.vue";
    import { Link } from "@inertiajs/inertia-vue3";
import route from '../../../../../vendor/tightenco/ziggy/src/js';
export default {
    setup() {
        
    },
    props:{
        Cart:Object,
        Subtotal:Number,
        Search:Object,
        filters:Object,
    },
    components:{
        Navigation,
        Link

    },
    data(){
        return{
            editMode:false,
            form:this.$inertia.form({

            }),
            cartToUpdate:this.$inertia.form({
                id:Number,
                quantity:Number,
            }),
            itemToDelete:this.$inertia.form({
                id:Number
            })
        }
    },
    methods:{
        checkout(){
            // console.log('checkout')
            // this.$inertia.get(route('checkout'));
            this.$inertia.get(route('checkOut'));
        },
        btnAdd(cart){
            this.cartToUpdate.id = cart.id
            this.cartToUpdate.quantity = cart.quantity + 1

            this.cartToUpdate.post(route('btnUpdateQuantity'),{
                onSuccess:() =>{
                    console.log('submitted')
                }
            })
            // console.log(this.cartToUpdate)
        },
        btnSub(cart){
            this.cartToUpdate.id = cart.id
            this.cartToUpdate.quantity = cart.quantity - 1

            this.cartToUpdate.post(route('btnUpdateQuantity'),{
                onSuccess:() =>{
                    console.log('submitted')
                }
            })
        },
        btnDelete(cart){
            this.itemToDelete.id = cart.id
            this.itemToDelete.delete(route('cartItemDelete'),{
                onSuccess:() =>{
                    console.log('deleted')
                }
            })
        }
        
    }
}
</script>