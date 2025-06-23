<template>
  <div class="overview">
    <div class="icon_menu">
      <span class="cat">Главная</span>
      <div class="white">/</div>
      <span class="white">Каталог</span>
    </div>
    <h2>Наши Байки</h2>
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
  </div>
</template>

<template>
  <div class="overview">
    <div class="icon_menu">
      <span class="cat">Главная</span>
      <div class="white">/</div>
      <span class="cat">Каталог</span>
      <div class="white">/</div>
      <span class="white">Мотоциклы</span>
    </div>
    <h2>Наши Байки</h2>
    <div class="weapon-grid">
      <div v-for="motorcycle in data" :key="motorcycle.id" class="weapon-card">
        <img :src="motorcycle.image" alt="" class="weapon-image">
        <h2 class="weapon-name">{{ motorcycle.title }}</h2>
        <p class="weapon-description">{{ motorcycle.comment }}</p>
        <p class="weapon-price">{{ motorcycle.price }}</p>
        <div class="down-cart">
          <img src="../../image/Add.png" alt="" />
          <button class="add-to-cart" @click="addToCart(motorcycle)">
            Добавить в корзину
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'

const data = ref([]) // Пустой массив (данные будут загружаться с API)

async function fetchMotorcycles() {
  try {
    const res = await fetch(import.meta.env.VITE_API_URL + "/api-motoshop.ru", {
      method: "GET",
      headers: {
        "ngrok-skip-browser-warning": "69420",
      }
    })
    const response = await res.json()
    data.value = response.data.slice(0, 8) // Ограничиваем 8 элементами
  } catch (err) {
    console.error("Ошибка загрузки данных:", err)
  }
}

function addToCart(motorcycle) {
  console.log("Добавлено в корзину:", motorcycle)
}

// Загружаем данные при монтировании компонента
fetchMotorcycles()
</script>

<style scoped>
h2 {
  color: white;
}

.overview {}

.cat {
  color: var(--Title-h2);
}

.icon_menu {
  display: flex;
  align-items: center;
  gap: 15px;
  padding-bottom: 35px;
}

.weapon-grid {
  display: grid;
  grid-template-columns: repeat(4, 225px);
  gap: 25px;
  padding-top: 40px;
}

.weapon-card {
  height: 270px;
  width: 230px;
  background-color: var(--Card);
  border-radius: 12px;
  padding: 10px;
  text-align: center;
}

.weapon-image {
  object-fit: cover;
  max-height: 95px;
  width: 165px;
  border-radius: 15px;
}

.weapon-name {
  color: var(--Title-h1);
  font-size: 1.2em;
  margin: 10px 0;
}

.weapon-description {
  color: var(--Title-h2);
  font-size: 0.9em;
  margin-bottom: 10px;
}

.weapon-price {
  font-size: 1.1em;
  margin-bottom: 10px;
  color: var(--Button);
}

.add-to-cart {
  background-color: transparent;
  color: #ffffff;
  cursor: pointer;
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

@media (max-width: 880px) {
  .overview {
    width: 740px;
  }

  .weapon-grid {
    width: 735px;
    grid-template-columns: repeat(3, 230px);
  }
}
</style>


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
h2 {
  color: white;
}

.overview {}

.cat {
  color: var(--Title-h2);
}

.icon_menu {
  display: flex;
  align-items: center;
  gap: 15px;
  padding-bottom: 35px;
}

.motorcycle-grid {
  display: grid;
  grid-template-columns: repeat(4, 225px);
  gap: 25px;
  padding-top: 40px;
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

.motorcycle-image {
  object-fit: cover;
  max-height: 95px;
  width: 220px;
  border-radius: 15px;
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

.down-cart {
  width: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
.down-cart img{
  width: 30px;
}

@media (max-width: 880px) {
  .overview {
    width: 740px;
  }

  .motorcycle-grid {
    width: 735px;
    grid-template-columns: repeat(3, 230px);
  }
}
</style>

<!--
<template>
  <div class="overview">
    <div class="icon_menu">
      <span class="cat">Главная</span>
      <div class="white">/</div>
      <span class="white">Каталог</span>

    </div>
    <h2>Наши Байки</h2>
    <div class="weapon-grid">
      <div v-for="weapon in data" :key="weapon.id" class="weapon-card">
        <img :src="weapon.image" alt="" class="weapon-image">
        <h2 class="weapon-name">{{ weapon.title }}</h2>
        <p class="weapon-description">{{ weapon.comment }}</p>
        <p class="weapon-price">{{ weapon.price }}</p>
        <div class="down-cart">
          <img src="../../image/Add.png" alt="" />
          <button class="add-to-cart"  @click="addToCart(weapon)" >
            Добавить в корзину
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { ref } from 'vue'
const data = ref()
async function fetchProduct(){
  try {
    const res =  await fetch(import.meta.env.VITE_API_URL + "/api-mods/product", {
      method: "GET",
      headers: {
        "ngrok-skip-browser-warning": "69420",
      }
    })
    const response = await res.json()

    data.value = response.data.slice(0, 8)
  }
  catch (err){
    data.value = err
  }
}
function addToCart(weapon){
  console.log(weapon)
}
fetchProduct()
</script>
<style scoped>
h2{
  color: white;
}
.overview {

}
.cat{
  color: var(--Title-h2);
}
.icon_menu{
  display: flex;
  align-items: center;
  gap: 15px;
  padding-bottom: 35px;
}
.weapon-grid {
  display: grid;
  grid-template-columns: repeat(4, 225px);
  gap: 25px;
  padding-top: 40px;
}
.weapon-card {
  height: 270px;
  width: 230px;
  background-color: var(--Card);
  border-radius: 12px;
  padding: 10px;
  text-align: center;
}
.weapon-image {
  object-fit: cover;
  max-height: 95px;
  width: 165px;
  border-radius: 15px;
}
.weapon-name {
  color: var(--Title-h1);
  font-size: 1.2em;
  margin: 10px 0;
}
.weapon-description {
  color: var(--Title-h2);
  font-size: 0.9em;
  margin-bottom: 10px;
}
.weapon-price {
  font-size: 1.1em;
  margin-bottom: 10px;
  color: var(--Dash-Board);
}
.add-to-cart {
  background-color: transparent;
  color: #ffffff;
  cursor: pointer;
}
.down-cart{
  width: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
@media (max-width: 880px) {
  .overview{
    width: 740px;
  }
  .weapon-grid{
    width: 735px;
    grid-template-columns: repeat(3, 230px);
  }
}
</style>

-->
