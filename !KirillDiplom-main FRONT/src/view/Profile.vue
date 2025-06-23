<script setup>
import MainTop from '@/components/MainTop.vue'
import DashBoard from '@/components/DashBoard.vue'
import { ref } from 'vue'
import { api } from '@/services/api/index.js'

const { profile: profileRequest } = api.auth
let profile = ref({})
profileRequest().then(data => profile.value = data)
</script>

<template>
<DashBoard/>
  <div  class="home">
<MainTop/>
    <h2>Профиль</h2>
    <div  class="img_ava_container">
      <div class="profile">
        <div class="log-ava">
            <div class="text-write_container_profile">
              <div class="text-write">
                <input class="text_search_log_ava" type="search" v-model="profile.name" placeholder="Ник">
              </div>
              <div class="text-write_2">
                <input class="text_search_log_ava" type="search" v-model="profile.email" placeholder="Почта">
              </div>
              <div class="text-write">
                <input class="text_search_log_ava" type="search" v-model="profile.login" placeholder="Логин">
              </div>
            </div>
            <div class="avatar">
              <img src="../../image/Ava.png" height="222" width="222" />
            </div>
          </div>
          <div class="line-white">_________________________________________</div>
          <div class="button-log-profile">
            <button class="button_ava">Выйти из профиля</button>
            <router-link to="back_catalog">
            <button class="button_ava">Перейти в каталог</button>
            </router-link>
          </div>
        </div>
      <div class="img_ava">
        <img src="../../image/pngwing.com.png" alt="#" />
      </div>
      </div>
  </div>
</template>
<style scoped>
.text_search_log_ava{
  color: white;
  border: solid 3px #A6A6A6;
  border-radius: 25px;
  background: transparent;
  padding-left: 10px;
  font-size: 14px;
  width: 255px;
  height: 35px;
}
h2{
 color: white;
  font-size: 24px;
}
.img_ava{
  padding-top: 200px;
  width: 500px;
  padding-left: 100px;
}
.img_ava img{
  width: 500px;
}
.img_ava_container{
  display: flex;
  justify-content: space-between;
}
.log-ava{
  padding-top: 180px;
 display: flex;
  align-items: center;
  justify-content: space-between;
}
.line-white{
  padding-bottom: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}
.text-write_container_profile{
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 10px;
}
.button-log-profile{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 530px;
  gap: 20px;
}
.home {
  padding-top: 25px;
  display: flex;
  flex-direction: column;
  gap: 25px;
  margin-left: 80px;
}
.button_ava {
  background-color: transparent;
  font-size: 16px;
  color: #fff;
  width: 170px;
  height: 40px;
  border: solid 3px #5C656C;
  border-radius: 25px;
  cursor: pointer;
}
.button_ava:hover {
  background-color: var(--Button);
  color: white;
  border: solid 3px var(--Button);
}
@media (max-width: 880px) {
  .img_ava{
    display: none;
  }
  .home{
    margin-left: 20px;
    width: 880px;
  }
  .log-ava{
    width: 700px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 80px;
    padding-top: 100px;
  }
  .button-log-profile{
    padding-left: 150px;
  }
}
</style>