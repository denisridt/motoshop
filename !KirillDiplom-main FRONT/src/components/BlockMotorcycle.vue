<template>
  <div class="overview">
    <div class="nav-motorcycle">
      <h2>Наши дорожные мотоциклы</h2>
    </div>
    <span class="cat">Каталог</span>
  </div>
  <div class="motorcycle-grid">
    <div v-for="motorcycle in localMotorcycles" :key="motorcycle.id" class="motorcycle-card">
      <img :src="motorcycle.image" alt="" class="motorcycle-image">
      <h2 class="motorcycle-name">{{ motorcycle.title }}</h2>
      <p class="motorcycle-description">{{ motorcycle.comment }}</p>
      <p class="motorcycle-price">{{ motorcycle.price }}</p>
      <div class="down-cart">
        <img src="../../image/Add.png" alt="" />
        <button class="add-to-cart" @click="addToCart(motorcycle)">
          Добавить в корзину
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const localMotorcycles = ref([
  {
    id: 1,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 2,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 3,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 4,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 5,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 6,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 7,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  },
  {
    id: 8,
    title: "Duke 600",
    comment: "Дорожный",
    price: "499 999 ₽",
    image: "image/cards.png"
  }
])

function addToCart(motorcycle) {
  console.log(motorcycle)
}
</script>

<style scoped>
.overview {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.cat {
  color: var(--Title-h2);
}

.motorcycle-grid {
  display: grid;
  grid-template-columns: repeat(4, 225px);
  gap: 25px;
}

.motorcycle-image {
  object-fit: cover;
  max-height: 95px;
  width: 220px;
  border-radius: 15px;
}

.down-cart {
  width: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.down-cart img {
  width: 30px;
}

.overview h2 {
  font-size: 24px;
  color: #fff;
}

.overview p {
  font-size: 16px;
  color: #fff;
}

.nav-motorcycle {
  display: flex;
  align-items: center;
  gap: 20px;
}

.motorcycle-grid {
  display: grid;
  grid-template-columns: repeat(4, 225px);
  gap: 25px;
}

.motorcycle-card {
  height: 270px;
  width: 230px;
  background-color: var(--Card);
  border-radius: 12px;
  padding-top: 30px;
  padding-left: 10px;
  text-align: center;
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
  font-size: 1.1em;
  margin-bottom: 10px;
  color: var(--Dash-Board);
}

.add-to-cart {
  background-color: transparent;
  color: #ffffff;
  cursor: pointer;
}

@media (max-width: 880px) {
  .overview {
    width: 740px;
  }

  .nav-motorcycle {
    display: grid;
  }

  .cat {
    padding-top: 50px;
  }

  .motorcycle-grid {
    width: 735px;
    grid-template-columns: repeat(3, 230px);
  }
}
</style>