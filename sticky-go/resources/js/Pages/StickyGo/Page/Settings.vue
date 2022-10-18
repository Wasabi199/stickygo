<template>
    <Navigation>
        <div class="flex px-32 py-10 bg-gray-100">
            <div class="w-1/4 p-10 ">
                <ul class="text-lg space-y-5">
                    <li @click="settings(1)" class="cursor-pointer" :class="navigation == 1?'font-bold':''">Edit Profile</li>
                    <li @click="settings(2)" class="cursor-pointer" :class="navigation == 2?'font-bold':''">Change Password</li>
                    <li @click="settings(3)" class="cursor-pointer" :class="navigation == 3?'font-bold':''">Payment Details</li>
                    <li @click="settings(4)" class="cursor-pointer" :class="navigation == 4?'font-bold':''">Sales & Payments</li>
                    <Link :href="route('help')"><li  class="cursor-pointer mt-5" >Help Center</li></Link>
                </ul>
            </div>
            <div v-if="navigation == 1" class="w-3/4 bg-white p-16 space-y-10">
                <div class="space-y-5">
                    <div class="flex w-fit space-x-2">
                        <div class="">
                            <img class="w-32" :src="info.profile_photo_path !=null?info.profile_photo_path:''"/>
                        </div>
                        <div class="h-fit m-auto text-lg font-semibold text-blue-400">Change Profile Photo</div>
                    </div>
                    <div class="flex w-fit space-x-2">
                        <div class="">
                            <img class=" w-96" :src="info.profile_banner_path !=null?info.profile_banner_path:''"/>
                        </div>
                        <div class="h-fit m-auto text-lg font-semibold text-blue-400">Change Profile Photo</div>
                    </div>
                </div>
                <div>
                    <form method="POST">
                        <div class=" space-y-2">
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Name</p>
                                <input class="w-9/12 rounded-lg" type="text" :placeholder="info.name"/>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Username</p>
                                <input class="w-9/12 rounded-lg" type="text" :placeholder="info.name"/>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-xl">About</p>
                                <textarea class="w-9/12 h-40 rounded-lg" type="text" :placeholder="info.personal.about"></textarea>
                            </div>
                        </div>
                        <div class="mt-20 space-y-2">
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Email</p>
                                <input class="w-9/12 rounded-lg" type="text" :placeholder="info.email"/>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Phone Number</p>
                                <input class="w-9/12 rounded-lg" type="number" :placeholder="info.personal.contact"/>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Gender</p>
                                <select class="w-9/12 rounded-lg" >
                                    <option disabled>Select Gender</option>
                                    <option v-for="gen in gender" v-bind:key="gen.id">{{gen}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-red-500 text-xl font-semibold px-44 mt-3">Delete my account</div>
                        <div class="flex justify-end">
                            <div class="bg-blue-400 px-10 py-2 rounded-lg text-white text-xl">Save</div>
                        </div>
                    </form>
                </div>
            </div>
            <div v-if="navigation == 2" class="w-3/4 min-h-screen bg-white p-16 space-y-10">
                <div>
                    <form method="POST">
                        <div class=" space-y-5">
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Old Password</p>
                                <input class="w-9/12 rounded-lg" type="text"/>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">New Password</p>
                                <input class="w-9/12 rounded-lg" type="text"/>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-xl h-fit my-auto">Confirm Password</p>
                                <input class="w-9/12 rounded-lg" type="text"/>
                            </div>
                            <div class="flex justify-end">
                                <div class="px-10 text-lg text-white w-fit py-2 rounded-lg bg-blue-400">Save</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div v-if="navigation == 3" class="w-3/4 min-h-screen  bg-white p-20 space-y-10">
              <form class="space-y-10" method="POST">
                <div class="space-y-4">
                <div class="font-bold text-2xl">Valid ID</div>
                <div class="flex justify-between">
                    <p class="h-fit my-auto text-lg">Valid ID</p>
                    <div class="flex w-9/12 rounded-lg">
                        <select class="w-1/2">
                            <option disabled>Select ID</option>
                            <option>SSS ID</option>
                            <option>Driving License</option>
                            <option>UMID ID</option>
                            
                        </select>
                        <div class="h-fit m-auto text-lg bg-gray-200 border-black border-2 py-1 px-10 ">Upload Image</div>
                    </div>
                    
                </div>
              </div>
              <div class="space-y-4">
                <div class="font-bold text-2xl">Address</div>
                <div class="space-y-3 text-lg">
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">Street</p>
                        <input class="w-9/12 rounded-lg" type="text" :placeholder="info.personal.house_number"/>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">City/Town</p>
                        <input class="w-9/12 rounded-lg" type="text" :placeholder="info.personal.city"/>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">Province</p>
                        <input class="w-9/12 rounded-lg" type="text" :placeholder="info.personal.province"/>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">ZIP Code</p>
                        <input class="w-9/12 rounded-lg" type="text" :placeholder="info.personal.zip"/>
                    </div>
                </div>
              </div>
              <div class="space-y-4">
                <div class="font-bold text-2xl">Credit Card</div>
                <div class="space-y-3 text-lg">
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">Card Number</p>
                        <input class="w-9/12 rounded-lg" type="text"/>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">Expiration Date</p>
                        <div class="flex w-9/12 space-x-2">
                            <input class="w-1/2 rounded-lg" type="text"/>
                            <input class="w-1/2 rounded-lg" type="text"/>
                        </div>
                        
                    </div>
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">CCV</p>
                        <input class="w-9/12 rounded-lg" type="text"/>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-xl h-fit my-auto">Name on Card</p>
                        <input class="w-9/12 rounded-lg" type="text"/>
                    </div>
                    <div class="flex justify-end">
                        <div class="mt-5 bg-blue-400 text-lg text-white py-2 px-10 rounded-lg">Save</div>
                    </div>
                </div>
              </div>
            </form>
            </div>
            <div v-if="navigation == 4" class="w-3/4 min-h-screen  bg-white p-20 space-y-10">
                <div class="space-y-5">
                    <div class="font-bold text-2xl">Sales History</div>
                    <table class="w-full table-fixed border border-black">
                        <thead class="">
                            <tr class="bg-yellow-400 py-10 text-center">
                                <td class="py-2">Date</td>
                                <td>Item</td>
                                <td>Order #</td>
                                <td>QTY</td>
                                <td>Total Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="py-2">09-21-22</td>
                                <td class="">Chibi Sticker</td>
                                <td class="">10000125</td>
                                <td class="">2</td>
                                <td class="">₱72.00</td>
                            </tr>
                            <tr class="text-center">
                                <td class="py-2">09-08-22</td>
                                <td class="">09-15-2022</td>
                                <td class="">10050178</td>
                                <td class="">5</td>
                                <td class="">₱125.00</td>
                            </tr>
                            <tr class="text-center">
                                <td class="py-2">09-21-22</td>
                                <td class="">Chibi Sticker</td>
                                <td class="">10000125</td>
                                <td class="">10</td>
                                <td class="">₱210.00</td>
                            </tr>
                            <tr class="text-center">
                                <td class="py-2">09-21-22</td>
                                <td class="">Fairy Sticker</td>
                                <td class="">10000125</td>
                                <td class="">8</td>
                                <td class="">₱172.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="space-y-5">
                    <div class="font-bold text-2xl">Payment History</div>
                    <table class="w-full table-fixed border border-black">
                        <thead class="">
                            <tr class="bg-yellow-400 py-10 text-center">
                                <td class="py-2">Date</td>
                                <td>Payment Method</td>
                                <td>Amount</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="py-2">09-21-22</td>
                                <td class="">Credit Card</td>
                                <td class="">₱71.00</td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
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
    info:Object
    },
    data(){
        return{
            navigation:1,

            gender:[
                'Male',
                'Female',
                'Other'
            ]
        }
    },
    methods:{
        settings(nav){
            this.navigation = nav
        }
    }
};
</script>