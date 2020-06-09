<template>
 <div>
   <td class="actions">
        <button class="btn btn-info btn-sm update-cart" v-on:click="updateCart"><i class="fa fa-refresh"></i></button> 
        <button class="btn btn-danger btn-sm remove-from-cart" v-on:click="remove"><i class="fa fa-trash-o"></i></button>
    </td>
 </div>
</template>

<script>
export default {
  name: "cart",
  props: [
      
  ],
  data() {
    return {
     quantity: "",
     product_id: ""
    };
  },
  mounted() {
    
  },
  computed: {
    
    
  },
  methods: {
    getCookie() {
      this.$cookies.get( 'mvp_ecommerce_session' )
      return "cookie found";
        
    },
    updateCart() {
      axios.post("/mvp-ecommerce/public/updateCart",{ "product_id":product_id, "quantity":quantity } ) // update and remove were initially passing product
        
    },
    remove() {
       let ele = $(this);

      axios.post("/mvp-ecommerce/public/remove", { "product_id":product_id } )
        
    },
  }
};
</script>

<style scoped>

</style>
