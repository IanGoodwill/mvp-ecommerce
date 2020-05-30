<template>
<div>

<form method="POST">
    <slot></slot>
  <div class="form-group">
    <label for="sizing-form"><strong>Sizes:</strong></label>
        <select class="form-control">
            <option name="small_units" :value="smallUnits">Small {{ product.small_units }}</option> <!-- needs equivellent of {{ $product->small_units }} -->
            <option name="medium_units" :value="mediumUnits">Medium</option>
            <option name="large_units" :value="largeUnits">Large</option>
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
               ],
         data() {
            return {
              smallUnits: '',
              mediumUnits: '',
              largeUnits: '',
            };
        },
        methods: {
            read() {
                axios.get('/api/products').then(({ data }) => {
                    //console.log(data)
                    this.product = data;

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