<script setup>

import { useWindowSize } from '@vueuse/core'
import { ref } from 'vue'

const { width } = useWindowSize()
const category = ref(false)
const dash =  ref(false)

function showCategory() {
    category.value = !category.value
}
function showDash() {
    dash.value = !dash.value
}
</script>
<template>
  <div :class="{'back-color': dash}">
  <nav class="sidebar" :class="{'sidebar-width': dash }">
    <header>
      <div class="image-text">
        <span class="image">
          <router-link to="/">
          <img src="../../image/montserratt.png" alt="/" />
          </router-link>
        </span>
          <div class="bth-nav-slider" :class="{'bth-nav-slider-return': dash}" @click="showDash">
            <img src="../../image/Nav-slider.png" alt=""/>
          </div>
    </div>
    </header>
    <div class="menu-bar">
      <div class="menu">
        <ul>
          <li class="nav-link">
            <a href="#">
              <router-link to="profile">
              <img src="../../image/profile-user.png" alt=""/>
                <span v-show="dash"  class="nav-text">Профиль</span>
                <span v-show="width > 880"  class="nav-text">Профиль</span>
              </router-link>
            </a>
          </li>
        </ul>
        <ul>
          <li class="nav-link">
            <router-link to="Catalog">
              <img src="../../image/menuicon.png" alt="" />
              <span v-show="dash" class="nav-text">Каталог</span>
              <span v-show="width > 880" class="nav-text">Каталог</span>
            </router-link>
          </li>
        </ul>
      </div>
      <div class="category-list">
        <span
          @click="showCategory()" class="menu-category">
            <img src="../../image/Arrow-down.png" alt="" />
            <span v-show="dash" class="category-size">Категории</span>
            <span v-show="width > 880" class="category-size">Категории</span>
        </span>
      </div>
      <transition name="fade">
        <div v-show="category"  class="menu-folder">
          <ul>
            <li class="nav-link">

                <img src="../../image/off-road.png" alt="" />
                <span v-show="dash"  class="nav-text">Эндуро</span>
                <span v-show="width > 880" class="nav-text">Эндуро</span>

            </li>
            <li class="nav-link">
              <router-link to="motodes">
                <img src="../../image/sportbike.png" alt="" />
                <span v-show="dash" class="nav-text">Спорт байк</span>
                <span v-show="width > 880" class="nav-text">Спорт байк</span>
              </router-link>
            </li>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/motorcycle.png" alt="" />
                <span v-show="dash" class="nav-text">Скутер</span>
                <span v-show="width > 880" class="nav-text">Скутер</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/motorbike.png" alt="" />
                <span v-show="dash" class="nav-text">Байк</span>
                <span v-show="width > 880" class="nav-text">Байк</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/motor.png" alt="" />
                <span v-show="dash" class="nav-text">Классический</span>
                <span v-show="width > 880" class="nav-text">Классический</span>
              </a>
            </li>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/quad.png" alt="" />
                <span v-show="dash" class="nav-text">Квадроцикл</span>
                <span v-show="width > 880" class="nav-text">Квадроцикл</span>
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
                <span v-show="dash" class="nav-text">Помощь</span>
                <span v-show="width > 880" class="nav-text">Помощь</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="nav-link">
              <a href="#">
                <img src="../../image/info.png" alt="" />
                <span v-show="dash" class="nav-text">Инфо</span>
                <span v-show="width > 880" class="nav-text">Инфо</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  </div>
</template>
<style scoped>

.sidebar {
  z-index: 10;
  border-radius: 0 0 25px 25px;
  position: sticky;
  top: 0;
  left: 0;
  height: 90vh;
  width: 250px;
  padding: 25px 10px;
  background-color: var(--Dash-Board);
}
.bth-nav-slider{
  display: none;
  top: 70px;
  left: 235px;
  position: absolute;
  transform: scale(-1, 1);
}
.sidebar .image-text img {
  height: auto;
  width: auto;
}
.sidebar .Best {
  padding-right: 80px;
  display: flex;
  height: auto;
  width: auto;
}
.image {
  padding-left: 10px;
  padding-right: 15px;
}

.menu-bar img {
  width: 28px;
  height: 28px;
}
.sidebar li a {
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar li {
  padding-top: 25px;
  list-style: none;
  display: flex;
  align-items: center;
}
.nav-text {
  padding-left: 40px;
  color: black;
  font-size: 16px;
}
.menu-bar {
  padding-top: 15px;
  padding-left: 20px;
}
.sidebar .category-list img {
  padding-top: 25px;
  height: auto;
}
.category-size {
  padding-top: 24px;
  font-size: 18px;
  padding-left: 40px;
  color: var(--Title-h1);
}
@media (max-width: 880px) {
    .bestmods{
      display: none;
    }
    .sidebar{
      width: 95px;
    }
  .bth-nav-slider{
    display: block;
    top: 75px;
    left: 75px;
    position: absolute;
    transform: scale(-1, 1);
  }
}
.sidebar-width{
  width: 250px;
  position: absolute;
  z-index: 30;
}
.bth-nav-slider-return{
  transform: scale(1, 1);
  padding-left: 160px;
}
.back-color{
  background-color: rgba(0, 0, 0, .8);
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  z-index: 52;
}
</style>