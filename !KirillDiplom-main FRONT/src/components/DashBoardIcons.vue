<script setup>
import { ref } from 'vue'
import { useWindowSize } from '@vueuse/core'
//import { useWindowSize } from '@vueuse/core'

const { width } = useWindowSize()
//const { width } = useWindowSize()

const category = ref(false)
const catalog =  ref(false)


function showCategory() {
  category.value = !category.value
}
function showCatalog() {
  catalog.value = !catalog.value
}
</script>
<template>
  <div :class="{'back-color-catalog': catalog}">
  <div class="sidebar_icons_menu_container">
    <div class="sidebar_icons_menu">
    <nav class="sidebar_icons">
      <div class="header">
        <div class="image-text">
          <span class="image">
            <router-link to="/">
          <img src="../../image/montserratt.png" alt="/"/>
          </router-link>
          </span>
          <div class="bth-nav-slider-catalog" :class="{'bth-nav-slider-return-catalog': catalog}" @click="showCatalog">
            <img src="../../image/Nav-slider.png" alt=""/>
          </div>
        </div>
      </div>
      <div class="menu-bar">
        <div class="menu">
          <ul>
          <li class="nav-link">
            <a href="#">
              <router-link to="profile">
            <img src="../../image/profile-user.png" alt="" />
              </router-link>
            </a>
          </li>
          </ul>
          <ul>
          <li class="nav-link">
            <router-link to="Catalog">
              <img src="../../image/menuicon.png" alt="" />
            </router-link>
          </li>
          </ul>
        </div>
        <div class="category-list" >
          <span
               @click="showCategory()" class="menu-category">
              <img src="../../image/Arrow-down.png" alt=""/>

          </span>
        </div>
        <transition name="fade">
            <div v-show="category" class="menu-folder">
              <ul>
                <li class="nav-link">
                  <a href="#">
                    <img src="../../image/off-road.png" alt=""/>
                  </a>

                </li>
                <li class="nav-link">
                    <router-link to="motodes">
                    <img src="../../image/sportbike.png" alt=""/>
                    </router-link>
                </li>
                <li class="nav-link">
                  <a href="#">
                    <img src="../../image/motorcycle.png"  alt=""/>
                  </a>
                </li>
                <li class="nav-link">
                  <a href="#">
                    <img src="../../image/motorbike.png" alt="" />
                  </a>
                </li>
                <li class="nav-link">
                  <a href="#">
                    <img src="../../image/motor.png" alt=""/>
                  </a>
                </li>
                <li class="nav-link">
                  <a href="#">
                    <img src="../../image/quad.png" alt=""/>
                  </a>
                </li>
              </ul>
            </div>
        </transition>
         <div class="menu-folder-now">
          <div class="menu-folder">
            <ul>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/supporticon.png" alt="" />
              </a>
            </li>
            </ul>
            <ul>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/info.png" alt=""/>
              </a>
            </li>
            </ul>
          </div>
         </div>
        </div>
      </nav>
    </div>
      <div class="menu_icons">
        <div class="menu_price">
          <div class="price">Цена</div>
          <div class="price_range">
            <div class="price_number">
              <div class="start_price">10₽</div>
              <div class="start_price">9999₽</div>
            </div>
            <div class="range">
              <input type="range" min="0" max="9999" step="10" value="50">
            </div>
            <div class="button_price_search">
            <button class="button">Найти</button>
            </div>
            <div class="line_cat">____________________</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.button_price_search{
  padding-top: 20px;
  padding-left: 40px;
}
.price_number{
  padding-top: 35px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 45px;

}
.bth-nav-slider-catalog{
  display: none;
  top: 70px;
  left: 235px;
  position: absolute;
  transform: scale(-1, 1);
}
.start_price{
  font-size: 14px;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  width: 60px;
  height: 20px;
  background-color: var(--Main-Background);
}
.range{
  padding-top: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 20px;
}
.line_cat{
  padding-top: 20px;
  display: flex;
  justify-content: center;
  color: var(--Dash-Board);
  padding-bottom: 50px;
}
.sidebar_icons_menu_container {
  display: flex;
}
.menu_price{
  padding-top: 20px;
}
.menu_icons{
  display: block;
  width: 250px;
  height: 90vh;
  background-color: var(--Card);
  border-radius: 0 0 25px 25px;
}
.price{
  font-weight: bold;
  font-size: 14px;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 140px;
  height: 40px;
  background-color: var(--Dash-Board);
  border-radius: 0 25px 25px 0  ;
}
.sidebar_icons_menu{
  z-index: 10;
  border-radius: 0 0 25px 25px;
  position: sticky;
  top: 0;
  left: 0;
  height: 90vh;
  width: 100px;
  padding: 25px 10px;
  background: var(--Dash-Board);
}
.sidebar_icons .image-text img{
  padding: 0;
  height: auto;
  width: auto;
}
.sidebar_icons .Best {
  padding-right: 80px;
  display: flex;
  height: auto;
  width: auto;
}
.image{
  padding-left: 10px;
  padding-right: 15px;
}
.menu-bar  img{
  width: 28px;
  height: 28px;
}
.sidebar_icons li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}

.sidebar_icons li{
  padding-top: 25px;
  list-style: none;
  display: flex;
  align-items: center;
}
.menu-bar{
  padding-top: 25px;
  padding-left: 20px;
}
.sidebar_icons .category-list img{
  padding-top: 25px;
  height: auto;
}
@media (max-width: 880px) {
  .bth-nav-slider-catalog{
    display: block;
    top: 75px;
    left: 75px;
    position: absolute;
    transform: scale(-1, 1);
  }
}
.bth-nav-slider-return-catalog{
  transform: scale(1, 1);
  padding-left: 260px;
}
.back-color-catalog{
  background-color: rgba(0, 0, 0, .8);
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  z-index: 52;
}
</style>


