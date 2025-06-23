<script setup>
</script>
<template>
<div class="footer">
  <div class="footer-container container">
    <div class="footer_content">
    <img src="../../image/montserratt.png" alt=""/>
    <span>2025 © Moto Shop  All right reserved</span>
    <img src="../../image/supporticon.png" width="50" height="50"/>
    </div>
  </div>
</div>
</template>

<style scoped>
.footer{
  display: flex;
  align-items: center;
  justify-content: center;
  height: 160px;
  background: var(--Dash-Board);
  margin-top: 110px;
}
.footer-container {
  width: 100%;
}
.footer_content{
  margin-inline: auto;
  width: 100%;
  max-width: 755px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

span{
  color: white;
}
</style>


