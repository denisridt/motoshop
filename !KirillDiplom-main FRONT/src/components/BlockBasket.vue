<template>
  <div class="motorcycle-grid">
    <div class="overview">
      <h2>Товары</h2>
    </div>
    <div v-for="(motorcycle, index) in motorcycles" :key="index" class="motorcycle-card-product">
      <div class="card_bas">
        <img :src="motorcycle.image" alt="" class="motorcycle-image">
        <div class="text_bas">
          <h2 class="motorcycle-name">{{ motorcycle.name }}</h2>
          <p class="motorcycle-description">{{ motorcycle.description }}</p>
        </div>
        <p class="motorcycle-price">{{ motorcycle.price }}</p>
      </div>
      <div class="delete">
        <img src="../../image/Cross.png" alt="" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      motorcycles: [
        {
          image: 'image/cards.png',
          name: 'Triumph',
          description: 'Байк',
          price: 'Цена : 567.000₽'
        },
        {
          image: 'image/cards.png',
          name: 'Triumph',
          description: 'Байк',
          price: 'Цена : 567.000₽'
        },
        {
          image: 'image/cards.png',
          name: 'Triumph',
          description: 'Байк',
          price: 'Цена : 567.000₽'
        },
        {
          image: 'image/cards.png',
          name: 'Triumph',
          description: 'Байк',
          price: 'Цена : 567.000₽'
        },
      ]
    }
  },
  methods: {
    addToCart(motorcycle) {
      // Здесь должен быть код для добавления мотоцикла в корзину
      console.log('Добавлено в корзину:', motorcycle.name);
    }
  }
}
</script>

<style scoped>
.delete {
  padding-left: 20px;
}
.card_bas {
  display: flex;
  align-items: center;
  border-radius: 12px;
  background-color: var(--Card);
  padding: 10px;
  width: 640px;
}
.motorcycle-card-product {
  display: flex;
  align-items: center;
  height: 85px;
  width: 740px;
  text-align: center;
}
.text_bas {
  margin-left: 15px;
}
.overview {

}
.overview h2 {
  font-size: 24px;
  color: #fff;
}
.overview p {
  font-size: 16px;
  color: #fff;
}
.motorcycle-grid {
  display: grid;
  gap: 1px;
}
.motorcycle-image {
  width: 150px;
  height: auto;
}
.motorcycle-name {
  color: var(--Title-h1);
  font-size: 1.2em;
  margin: 10px 0;
}
.motorcycle-description {
  color: var(--Title-h2);
  font-size: 0.9em;
  margin-bottom: 10px;
}
.motorcycle-price {
  margin-left: 225px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.1em;
  color: var(--Dash-Board);
}
@media (max-width: 880px) {
  .motorcycle-card-product {
    padding-top: 20px;
  }

  .motorcycle-card-product {
    height: 120px;
  }
}
</style>