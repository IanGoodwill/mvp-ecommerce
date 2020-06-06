<template>
<div>

<form method="POST" @submit.prevent="addToCart" enctype="multipart/form-data">
    <slot></slot>
  <div class="form-group">
    <label for="sizing-form"><strong>Sizes:</strong></label>
        <select class="form-control" required>
            <option >Please choose a size...</option>
            <option name="small_units" :value="smallUnits">Small   {{ product.small_units }} units left available. </option>
            <option name="medium_units" :value="mediumUnits">Medium   {{ product.medium_units }} units left available. </option>
            <option name="large_units" :value="largeUnits">Large   {{ product.large_units }} units left available. </option>
        </select>
    <button type="submit" class="btn btn-success text-center mb-2 mt-2">Add to cart</button>
  </div>
</form>

</div>
</template>

<script>
    export default {
         name: "sizing-form",
         props: [
             "productId",
             "name",
               ],
         data() {
            return {
              smallUnits: '',
              mediumUnits: '',
              largeUnits: '',
              product: {}
            };
        },
        methods: {
            read() {
                axios.get('/mvp-ecommerce/public/api/products/' + this.productId).then(( response ) => {  
                    this.product = response.data.product;
                     
                })
                    .catch((err) => console.error(err));
            },

            addToCart($id)  { // Needs to create an instance of DB Orders & session cart
                
                let name = this.name
                let description = this.description
                let product_id = this.product.id
                let quantity = this.quantity
                let price = this.price
                let image = this.image

                axios.post('/mvp-ecommerce/public/addToCart', {"name":name, "description":description, "quantity":quantity, "product_id":product_id, "price":price, "image":image})  

                        console.log( this.product);
            }
        },
        mounted() {
            this.read();
        }
    }
</script>

<style scoped>

.favorite-link  {
    font-size: 2rem;
}

</style>
