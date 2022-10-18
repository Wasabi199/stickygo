<template>
    <Navigation>
        <div class="py-10 px-32">
            <div class="font-bold text-3xl">Order History</div>
            <div class=" my-5 w-full border-b-2 border-gray-400">
                <div  class="flex w-full text-xl font-bold py-2">
                    <div class="w-1/6">FILTER</div>
                    <div class="w-1/6">ALL</div>
                    <div class="w-1/6">PENDING</div>
                    <div class="w-1/6">COMPLETED</div>
                    <div class="w-1/6">CANCELLED</div>
                    <div class="w-1/6">RETURN/REFUND</div>
                </div>
            </div>
            <table class="w-full table-fixed">
                <thead class="text-lg font-bold">
                    <tr>
                        <th>ITEM</th>
                        <th>STATUS</th>
                        <th>PRICE</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr  v-for="item in History.history" v-bind:key="item.id">
                        <td>
                            <div class="flex justify-center gap-x-5">
                                <img class="w-44" :src="item.product_profile !=null ? item.product_profile:''"/>
                                <div class="my-auto">
                                    <p class="text-2xl ">{{item.title}}</p>
                                    <p class="text-lg ">Qty: {{item.quantity}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-lg">
                          {{item.status}}
                        </td>
                        <td class="text-lg">
                            ₱{{item.price.toLocaleString('en-US')}}
                        </td>
                        <td class="text-lg">
                            ₱{{item.total.toLocaleString('en-US')}}
                        </td>
                        <td class="text-lg font-bold text-blue-300">
                            Details
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Navigation>
</template>
<script>
    import Navigation from "../Partials/Nav.vue";
export default {
    setup() {
        
    },
    components:{
        Navigation,
    },
    props:{
        History:Object
    }
}
</script>