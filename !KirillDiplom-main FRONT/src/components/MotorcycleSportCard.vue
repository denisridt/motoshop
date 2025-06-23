<script>
export default {
  props: {
    price: Number,
    title: String,
    description: String,
    pink: Boolean,
  }
}
</script>

<template>
  <div class="motorcycle-card" :class="{pink}">
    <img class="motorcycle-card-images" src="../../image/SportBikeWeapon.png" alt=""/>
    <div class="motorcycle-card__content">
      <div class="Opis">
        <span :class="{'white':pink}">Начало у нас</span>
        <p class="motorcycle-price" :class="{'white':pink}">{{price}}₽</p>
        <h2 class="motorcycle-name" :class="{'white':pink}">{{title}}</h2>
        <p class="motorcycle-description" :class="{'white':pink}">{{description}}</p>
      </div>
      <div class="down-cart">
        <img v-if="!pink" src="../../image/Arrow-krug.png" alt=""/>
        <img v-else src="../../image/Button_White.png" alt=""/>
        <router-link to="Catalog">
          <button class="add-to-cart">Перейти к каталогу</button>
        </router-link>
      </div>
    </div>
  </div>
</template>

<style scoped>
.motorcycle-card {
  padding: 20px 45px;
  height: 275px;
  width: 475px;
  background-color: var(--Card);
  border-radius: 12px;
  position: relative;
  img {
    right: 0;
    position: absolute;
    top: -25px;
  }
}
.motorcycle-card-images {
  padding-top: 145px;
  width: 230px;
}
.pink {
  background-color: var(--Dash-Board);
}
.Opis {
  span {
    font-size: 14px;
    color: var(--Title-h2);
  }
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.motorcycle-card__content {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

.motorcycle-price {
  font-size: 20px;
  font-weight: bold;
  color: var(--Dash-Board);
}
.motorcycle-name {
  color: var(--Title-h1);
  font-weight: bold;
  font-size: 20px;
  margin: 10px 0;
}
.motorcycle-description {
  max-width: 250px;
  color: var(--Title-h2);
  font-size: 13px;
}
.add-to-cart {
  background-color: transparent;
  color: #ffffff;
  cursor: pointer;
}
.down-cart {
  display: flex;
  align-items: center;
  position: relative;
  gap: 10px;
  img {
    right: 0;
    top: 0;
    position: relative;
  }
}
.white {
  color: #ffffff !important;
}
@media (max-width: 880px) {
  .motorcycle-card {
    width: 365px;
    height: 235px;
    padding-left: 30px;
    img {
      right: 0;
      top: 0;
    }
  }
  .motorcycle-card-images {
    width: 190px;
  }
  .motorcycle-price {
    font-size: 16px;
  }
  .motorcycle-name {
    font-size: 16px;
  }
  .motorcycle-description {
    max-width: 180px;
    font-size: 12px;
    padding-bottom: 20px;
  }
  .down-cart img {
    width: 20px;
  }
  .add-to-cart {
    font-size: 12px;
  }
}
</style>