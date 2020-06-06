<template>
  <!-- Needs a for each session loop -->
<div>
<table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:40%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">Size</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

       <div v-for="cart in carts" :key="product.id">

        <tr>
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="#" width="100" height="100" class="img-responsive"/></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">product name </h4>
                        <p> product description </p>
                    </div>
                </div>
            </td>
            <td data-th="Price">$ product price </td>
            <td data-th="Size">
                <input type="string" class="form-control text-center" value="Size">
            </td>
            <td data-th="Quantity">
                <input type="number" class="form-control text-center" value=" product image ">
            </td>
            <td data-th="Subtotal" class="text-center">$total</td> 
            <td class="actions" data-th="">
                <button class="btn btn-info btn-sm update-cart" ><i class="fa fa-refresh"></i></button>
                <button class="btn btn-danger btn-sm remove-from-cart" ><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>

        </div>

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total </strong></td>
        </tr>
        <tr>
            <td><a href="products" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total</strong></td>
            <td><a href="checkout" class="btn btn-success float-right"><i class="fa fa-angle-right"></i> Continue to Checkout</a></td>
        </tr>
        </tfoot>
    </table>
</div>

</template>

<script>
export default {
  name: "cart",
  props: [],
  data() {
    return {
     
    };
  },
  mounted() {
    
  },
  computed: {
    
    
  },
  methods: {
    
  }
};
</script>

<style scoped>

</style>
