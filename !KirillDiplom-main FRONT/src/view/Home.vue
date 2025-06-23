<script setup>
import MainTop from '@/components/MainTop.vue'
import Slider from '@/components/Slider.vue'
import SliderTwo from '@/components/SliderTwo.vue'
import DashBoard from '@/components/DashBoard.vue'
import EnduroCard from '@/components/EnduroCard.vue'
import MotorcycleCard from '@/components/MotorcycleCard.vue'
import BlockMotorcycle from '@/components/BlockMotorcycle.vue'
</script>

<template>
  <div class="DashBoard">
    <DashBoard/>
  </div>
  <div class="home">
    <MainTop/>
    <Slider/>
    <BlockMotorcycle/>
    <MotorcycleCard/>
    <SliderTwo/>
    <EnduroCard/>
  </div>
</template>

<style scoped>
.home {
  padding-top: 25px;
  display: flex;
  flex-direction: column;
  gap: 55px;
  margin-left: 80px;
}
@media (max-width: 880px) {
  .home{
    margin-left: 20px;
  }
}
@media (max-width: 380px) {
  .home{
    margin-left: 20px;
  }
}
</style>