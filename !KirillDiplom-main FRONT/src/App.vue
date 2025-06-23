<script setup>
  import Footer from '@/components/Footer.vue'
</script>

<template>
  <div class="container">
    <router-view class="main" />
  </div>
  <Footer/>
</template>

<style scoped>
.container {
  display: flex;
  flex-direction: row;
  justify-content: center;
}

.main {
  margin-top: 25px;
}
</style>