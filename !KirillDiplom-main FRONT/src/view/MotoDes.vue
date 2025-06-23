<script setup>

import SliderMotorcycle from '@/components/SliderMotorcycle.vue'
import MainTopMotorcycle from '@/components/MainTopMotorcycle.vue'
</script>

<template>
  <div class="home_gun">
<MainTopMotorcycle/>
<div class="mem">
    <div class="name_gun">
      <div class="name_text">
        Спорт Байк
      </div>
      <div class="name_text_bottom">
        Yamaha32
      </div>
        <div class="grey_line">__________________</div>
      <div class="category_bottom">
        <div class="price_gun">
          <p class="price_sum">359 000</p>
          <p class="price_val">₽</p>
        </div>
      </div>
      <div class="button_buy">
        <button class="btn_gun">Купить сейчас
        </button>
      </div>
      <div class="desc">
        <p>С нашей помощью вы сможете быстро купить мотоцикл и наслаждаться ездой без ограничений.</p>
      </div>
    </div>
  <SliderMotorcycle/>
    </div>
  </div>
</template>

<style scoped>
.mem{
display: flex;
  align-items: center;
  justify-content: space-between;
}
.desc{
  padding-top: 100px;
  max-width: 300px;
}
.desc p{
  font-size: 12px;
  color: #737A85;
}
.button_buy{
  padding-top: 25px;
}
.btn_gun {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: transparent;
  font-size: 18px;
  color: #fff;
  width: 200px;
  height: 45px;
  border: solid 3px #5C656C;
  border-radius: 25px;
  cursor: pointer;
  gap: 10px;
}
.btn_gun:hover {
  background-color: var(--Dash-Board);
  color: white;
  border: solid 3px var(--Dash-Board);
}
.price_val{
  color: var(--Dash-Board);
  font-size: 45px;
  font-weight: bold;
}
.price_sum{
  padding-right: 5px;
  font-size: 45px;
  font-weight: bold;
  color: white;
}
.price_gun{
  display: flex;
}
.home_gun {
  display: flex;
  flex-direction: column;
  gap: 55px;
}
.name_text{
  font-size: 40px;
  font-weight: bold;
  color: white;
}
.name_text_bottom{
  color: var(--Dash-Board);
  font-size: 40px;
  font-weight: bold;
}
.grey_line{
  color: #737A85;
  font-weight: bold;
}
.category_bottom{
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 280px;
  padding-top: 40px;
}

@media (max-width: 880px) {

  .name_text{
    font-size: 36px;
  }
  .name_text_bottom{
    font-size: 36px;
  }
  .grey_line{
    font-size: 15px;
  }
  .category_bottom_text{
    font-size: 14px;
  }
  .price_sum{
    font-size: 40px;
  }
  .price_val{
    font-size: 40px;
  }
  .category_bottom{
    width: 260px;
  }
  .btn_gun{
    font-size: 16px;
  }
  .button_buy img{
    width: 25px;
  }
  .desc{
    padding-top: 85px;
  }
}
</style>