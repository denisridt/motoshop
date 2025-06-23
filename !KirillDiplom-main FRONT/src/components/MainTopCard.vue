<script>
import { ref } from 'vue';
// import { useScrollLock } from '@vueuse/core';

export default {
  setup() {
    const modal = ref(false);
    const isLocked = ref(false);

    const registration = ref(false)

    const showModal = () => {
      modal.value = !modal.value;
      isLocked.value = !isLocked.value;

      // Обновляем состояние блокировки скролла
      // useScrollLock(document.body, isLocked.value);
    };

    const switchReg = () => {
      registration.value = true
    }

    const switchLog = () => {
      registration.value = false
    }

    return {
      modal,
      registration,
      switchLog,
      showModal,
      switchReg,
    };
  },
};
</script>

<template>
  <nav class="menu-top">
    <header>
      <div class="search_main">
            <img src="../../image/Search.png" alt="#" />
            <input class="text_search" type="search"  placeholder="Найти...">
      </div>
      <div class="menu-icons">
        <span @click="showModal" class="text_nickname" >Авторизация</span>
        <router-link to="profile">
          <a><img src="../../image/Avatar.png" alt="profile" /></a>
        </router-link>
        <img src="../../image/Cart.png" alt="#" />
      </div>
    </header>
  </nav>
  <Transition name="fade">
    <div  v-show="modal" class="modal">
      <div class="modal-content">
        <div class="modal-main">
          <span @click="showModal">ЗАКРЫТЬ</span>
          <div class="login-box">
            <div class="text-log_container">
              <div class="text-log" :class="{'white' : !registration}" @click="switchLog">Вход</div>
              <div class="white">/</div>
              <div class="text-log" :class="{'white' : registration}" @click="switchReg">Регистрация</div>
            </div>
            <div class="text-write_container" v-show="!registration">
              <div class="text-write">
                <input class="text_search_log" type="search"  placeholder="Логин">
              </div>
              <div class="text-write_2">
                <input class="text_search_log" type="search"  placeholder="Пароль">
              </div>
            </div>
            <div class="text-write_container" v-show="registration">
              <div class="text-write">
                <input class="text_search_log" type="search"  placeholder="Ник">
              </div>
              <div class="text-write_2">
                <input class="text_search_log" type="search"  placeholder="Почта">
              </div>
              <div class="text-write">
                <input class="text_search_log" type="search"  placeholder="Логин">
              </div>
              <div class="text-write_2">
                <input class="text_search_log" type="search"  placeholder="Пароль">
              </div>
            </div>
            <div class="button-log">
              <button class="button">Войти</button>
              <button class="button">Регистрация</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Transition>

</template>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
.white {
  color: white;
}
.button-log{
  display: flex;
  width: 345px;
  gap: 5px;
}
.text-write_container{
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 10px;
}
.text_search_log{
  border: solid 3px #A6A6A6;
  border-radius: 25px;
  background: transparent;
  padding-left: 10px;
  font-size: 14px;
  width: 255px;
  height: 35px;
  }
.login-box{
  display: flex;
  flex-direction: column;
  gap: 30px;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
}
.text-log_container{
  display: flex;
  gap: 10px;
}
.text-log{
  font-size: 14px;
}
.modal {
  z-index: 20;
  position: absolute;
  background-color: rgba(0, 0, 0, .8);
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
}

.modal-main {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  height: 100%;
  justify-content: space-between;
}
.modal-content {
  z-index: 2;
  background-color: var(--Main-Background);
  width: 715px;
  height: 465px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.button {
  background-color: transparent;
  font-size: 16px;
  color: #fff;
  width: 170px;
  height: 40px;
  border: solid 3px #5C656C;
  border-radius: 25px;
  cursor: pointer;
}
.button:hover {
  background-color: var(--Dash-Board);
  color: white;
  border: solid 3px var(--Dash-Board);
}
header {
  display: flex;
  justify-content: space-between;
}
.search_main {
  padding: 8px 10px 8px 10px;
  width: 370px;
  height: 40px;
  display: flex;
  align-items: center;
  border-radius: 12.5px;
  background: var(--Rectangle7);
}
.search_main input{
  background: none;
  color: var(--Title-h1);
}
.search_main img {
  width: auto;
  height: auto;
  padding-right: 10px;
}
.menu-icons{
  display: flex;
  align-items: center;
  gap: 10px;
}
.text_nickname{
  font-size: 12px;
  color: white;
}
.menu-icons img{
  width: auto;
  height: auto;
}

</style>