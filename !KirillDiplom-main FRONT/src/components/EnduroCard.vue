<script setup>

</script>

<template>
  <div class="overview">
    <div class="nav-tish">
      <h2>Наши эндуро</h2>
    </div>
    <span class="cat">Каталог</span>
  </div>
  <div class="carts">
    <div class="carts__content">
      <div class="motorcycle-card">
        <img src="../../image/Enduro.png" alt="" />
      </div>
      <div class="description">
        <div class="text__content">
          <h2>BagWood</h2>
          <p>Эндуро №1</p>
        </div>
        <div class="img__content">
          <img src="../../image/Add.png" alt="" />
        </div>
      </div>
    </div>
    <div class="carts__content">
      <div class="motorcycle-card2">
        <img src="../../image/Enduro.png" alt="" />
      </div>
      <div class="description">
        <div class="text__content">
          <h2>BagWood</h2>
          <p>Эндуро №1</p>
        </div>
        <div class="img__content">
          <img src="../../image/Add.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.nav-tish{
  display: flex;
  align-items: center;
  gap: 20px;
}
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
.btn {
  background-color: transparent;
  font-size: 16px;
  color: #fff;
  width: 200px;
  height: 45px;
  border: solid 3px #5C656C;
  border-radius: 25px;
  cursor: pointer;
}
.btn:hover {
  background-color: var(--Dash-Board);
  color: white;
  border: solid 3px var(--Dash-Board);
}

.carts{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.motorcycle-card {
  display: flex;
  justify-content: center;
  height: 275px;
  width: 475px;
  background-color: var(--Card);
  border-radius: 12px;
  padding: 20px 30px;
  text-align: center;
}
.motorcycle-card2{
  display: flex;
  justify-content: center;
  height: 275px;
  width: 475px;
  background-color: var(--Card);
  border-radius: 12px;
  padding: 20px 30px;
  text-align: center;
}
.button-group {
  display: flex;
  gap: 20px
}
.description{
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-inline: 30px;
}
.img__content{
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
.img__content img {
  width: 35px;
}
.text__content{
  padding-top: 15px;
}
.text__content p{
  font-size: 14px;
  color: var(--Title-h2);
}
.text__content h2{
  font-size: 20px;
  color: #fff;
}
@media (max-width: 880px) {
  .overview{
    width: 740px;
  }
  .nav-tish{
    display: grid;
  }
  .cat{
    padding-top: 50px;
  }
  .motorcycle-card{
    width: 365px;
    height: 225px;
  }
  .motorcycle-card2{
    width: 365px;
    height: 225px;
  }
  .img__content img{
    width: 30px;
  }
  .text__content h2{
    font-size: 18px;
  }
  .text__content p{
    font-size: 14px;
  }
  .carts{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
  }
}
</style>
