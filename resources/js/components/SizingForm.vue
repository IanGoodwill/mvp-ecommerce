<template>
<div>

<form method="POST" @submit="addToCart" enctype="multipart/form-data">
    <slot></slot>
  <div class="form-group">
    <label for="sizing-form"><strong>Sizes:</strong></label>
        <select class="form-control">
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
             "productId"
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
                     console.log( this.product);
                })
                    .catch((err) => console.error(err));
            },

            addToCart()  {
                 e.preventDefault()

                let address = this.address
                let product_id = this.product.id
                let quantity = this.quantity

                axios.post('api/orders/', {address, quantity, product_id})
                     .then(response => this.$router.push('/cart'))
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