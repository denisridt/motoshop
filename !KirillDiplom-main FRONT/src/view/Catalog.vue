<script setup>
import MainTop from '@/components/MainTop.vue'
import BlockCatalog from '@/components/BlockCatalog.vue'
import DashBoardIcons from '@/components/DashBoardIcons.vue'
</script>

<template>
  <div class="DashBoard">
    <DashBoardIcons/>
  </div>
  <div class="home">
    <MainTop/>
    <BlockCatalog/>
  </div>
</template>

<style scoped>
.home {
  padding-top: 25px;
  display: flex;
  flex-direction: column;
  gap: 55px;
  margin-left: 20px;
}


</style>