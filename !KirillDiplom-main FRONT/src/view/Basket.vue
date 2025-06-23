<script setup>
import BlockBasket from '@/components/BlockBasket.vue'
import MainTop from '@/components/MainTop.vue'
import { ref } from 'vue'

const payment = ref(false)
function showPayment() {
  payment.value = !payment.value
}
</script>

<template>
  <div :class="{'back-color-payment': payment}">
  <div  class="home_basket" :class="{'home_basket-width-payment': payment }">
  <MainTop/>
    <div class="container-cart">
      <div class="bth-payment" :class="{'bth-payment-return': payment}" @click="showPayment">
      </div>
      <BlockBasket/>
      <div class="payment" :class="{'payment-return': payment}" >
        <div class="text-payment">
          <h2>Детали оплаты</h2>
          <p>Выбор платежной системы</p>
        </div>
        <div class="image-payment">
          <img src="../../image/googlepay.png" alt="#" width="100" height="100"/>
          <img src="../../image/sbpsvg.png" alt="#" width="120" height="60"/>
        </div>
        <div class="card-payment">
          <input class="input_payment-long" type="number" placeholder="номер карты" >
          <div class="line-payment">__________________________________________</div>
        </div>
        <div class="in-payment-container">
          <div  class="in-payment">
            <div class="row-line">
            <input class="input_payment" type="number" placeholder="мм">
            <div class="line-payment">______</div>
            </div>
            <div class="row-line">
            <input class="input_payment" type="number" placeholder="гг">
            <div class="line-payment">______</div>
            </div>
          </div>
          <div>
            <div class="row-line-cvv">
            <input class="input_payment"  type="number" placeholder="CVV">
              <div class="line-payment">______</div>
            </div>
          </div>
        </div>
        <div  class="button-payment">
        <button class="button-pay">Оплтатить</button>
        </div>
        <div class="folder-payment">
          <div class="text-payment-folder">
          <p>С нашей помощью вы сможете быстро достичь новых уровней и наслаждаться игрой без ограничений.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="button_back">
        <router-link to="back_main">
          <div class="back">
            <img src="../../image/Arrow-left.png" alt=""/>
            Вернуться на главную</div>
        </router-link>
        <router-link to="back_catalog">
          <div class="back">
            <img src="../../image/Arrow-left.png" alt=""/>
            Вернуться в каталог </div>
        </router-link>
          <div class="back">Всего:  2 268 000₽</div>
      </div>
  </div>
  </div>
</template>

<style scoped>
.text-payment-folder p{
  color: var(--Title-h1);
}
.text-payment-folder{
  text-align: center;
  max-width: 400px;
  padding-left: 90px;
  padding-top: 20px;
}
.folder-payment{
  border-radius:  0  0 15px 15px;
  background-color: #54d669;
  width: 500px;
  height: 100px;
}
.in-payment-container{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-top: 50px;
  padding-left: 70px;
  max-width: 430px;
}
.button-payment{
  padding-bottom: 60px;
  padding-top: 60px;
  padding-left: 90px;
}
.button-pay{
  display: flex;
  align-items: center;
  justify-content: center;
  width: 340px;
  border-radius: 15px;
  height: 40px;
  background-color:#54d669;
  color: var(--Title-h1);
  font-size: 18px;
}
.row-line{
  display: grid;
  align-items: center;
  justify-content: center;
}
.container-cart {
  display: flex;
}
.line-payment{
  color: var(--Title-h1);
}
.row-line-cvv{
  display: grid;
  align-items: center;
}
.card-payment input {
  padding-top: 40px;
  padding-left: 20px;
  color: var(--Title-h1);
}
.in-payment input{
  color: var(--Title-h1);
}
.input_payment{
  text-align: center;
  width: 50px;
  color: var(--Title-h1);
  background: none;
}
.input_payment-long{
  color: var(--Title-h1);
  background: none;
}
.card-payment{
  display: grid;
  align-items: center;
  justify-content: center;
}
.in-payment{
  display: flex;
  align-items: center;
  gap: 15px;
}
.payment{
  padding-top: 15px;
  width: 500px;
  height: 600px;
  background-color: var(--Dash-Board);
  border-radius: 20px;
}
.text-payment{
  display: grid;
  align-items: center;
  padding: 25px 0 0 65px;
}
.text-payment p{
  font-size: 24px;
  color: #54d669;
}
.text-payment h2{
  font-size: 30px;
  color: var(--Title-h1);
}
.image-payment{
  padding:25px 0 0 115px;
  display: flex;
  align-items: center;
  gap: 55px;
}
.back{
  display: flex;
  align-items: center;
  justify-content: center;
  width: 200px;
  height: 80px;
  border-radius: 12.5px;
  background-color: var(--Dash-Board);
  color: var(--Title-h1);
  font-size: 14px;
  gap: 10px;
}
.button_back{
  display: flex;
  gap: 20px;
}
.home_basket{
  padding-top: 25px;
  display: flex;
  flex-direction: column;
  gap: 55px;
}
@media (max-width: 880px) {
  .payment{
    position: absolute;
    overflow: hidden;
    margin-left: 300px;
  }
  .bth-payment{
    display: block;
    position: absolute;
    z-index: 11;
    padding-left: 735px;
    padding-top: 75px;
  }
  .bth-nav-slider img{
    width: 35px;
  }
  .bth-payment-return{
    transform: scale(-1, 1);
    padding-right: 300px;
  }
}

</style>