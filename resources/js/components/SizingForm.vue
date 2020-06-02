<template>
<div>

<form method="POST">
    <slot></slot>
  <div class="form-group">
    <label for="sizing-form"><strong>Sizes:</strong></label>
        <select class="form-control">
            <option >Please choose a size...</option>
            <option name="small_units" :value="smallUnits">Small   {{ product.small_units }} units left available. </option>
            <option name="medium_units" :value="mediumUnits">Medium   {{ product.medium_units }} units left available. </option>
            <option name="large_units" :value="largeUnits">Large   {{ product.large_units }} units left available. </option>
        </select>
  </div>
</form>

<button type="button" class="btn btn-success text-center mb-2">Add to cart</button>

<a class="nav-link text-dark float-right favorite-link" href="#">
    <i class="fas fa-gift"></i>
</a>

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