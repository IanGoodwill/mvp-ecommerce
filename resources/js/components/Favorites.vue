<template>
  <div>
    <a href="#" v-if="isFavorited" @click.prevent="unFavorite(product)">
      <i class="fas fa-gift d-inline float-right isFav" aria-hidden="true"></i>
      </a>
    <a href="#" v-else @click.prevent="favorite(product)">
      <i class="fas fa-gift d-inline float-right notFav" aria-hidden="false"></i>
    </a>
  </div>
</template>

<script>
export default {
  name: "favorites",
  props: ["product", "favorited"],
  data() {
    return {
      isFavorited: ""
    };
  },
  mounted() {
    this.isFavorited = this.isFavorited ? true : false;
  },
  computed: {
    isFavorite() {
      return this.favorited;
    }
  },
  methods: {
    favorite(product) {
      axios
        .post("/mvp-ecommerce/public/favorite" + product)
        .then(response => (this.isFavorited = true))
    },
    unFavorite(product) {
      axios
        .post("/mvp-ecommerce/public/unFavorite" + product)
        .then(response => (this.isFavorited = false))
    }
  }
};
</script>

<style scoped>
.isFav {
    color: blue;
    font-size: 1.5rem;
}
.notFav  {
    color: black;
    font-size: 1.5rem;
}
</style>

