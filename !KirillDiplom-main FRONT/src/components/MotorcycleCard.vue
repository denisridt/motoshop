
<template>
  <div class="overview">
    <h2>Наши Спорт Байки</h2>
    <span class="cat">Каталог</span>
  </div>
  <div class="carts">
    <WeaponCard title="SportBike Yamaha32" price="359.000" description="С нашей помощью вы сможете быстро купить мотоцикл и наслаждаться ездой без ограничений."/>
    <WeaponCard title="SportBike Yamaha32" price="359.000" description="С нашей помощью вы сможете быстро купить мотоцикл и наслаждаться ездой без ограничений."
    :pink="true"/>
  </div>

</template>

<script>

import { defineComponent } from 'vue'
import WeaponCard from '@/components/MotorcycleSportCard.vue'

export default defineComponent({
  components: { WeaponCard }
})
</script>


<style scoped>
.overview {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.cat{
  color: var(--Title-h2);
}
.overview h2 {
  font-size: 24px;
  color: #fff;
}
.carts{
  display: flex;
  justify-content: space-between;

}
@media (max-width: 880px) {
  .overview{
    width: 740px;
  }
  .carts{
    width: 740px;
    display: flex;
    justify-content: center;
    gap: 20px;
  }
}

</style>