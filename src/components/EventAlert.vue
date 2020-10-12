<template>
<div class="event-alert-bg" v-if="data.event.show" id="hotel-alert">
  <div class="event-alert" style="animation: fadeInLeft 1s;">
    <div class="event-alert__top">
      <div class="event-alert__logo"><img src="/public2/img/newclientloaderlogo.png" /></div>
      <div class="event-alert__title">..otel yönetimin'den bir mesaj!</div>
    </div>
    <div class="event-alert__bottom">
      <div class="event-alert__close" v-on:click="data.event.show = !data.event.show"></div>
      <div class="event-alert__headline">Otel yönetimin'den bir mesaj</div>
              <div class="event-alert__text">Message here</div>
        <div class="event-alert__text">- notaryz</div>
  </div>
  </div>
  </div>  
</template>

<script>
import App from '../App.vue'
    export default {
        name: 'EventAlert',
        data() {
            return {
                data: App.getManager()
            }
        }
    }
</script>

<style scoped>
.event-alert-bg {
  background: rgba(0, 0, 0, 0.8);
  position: fixed;
  z-index: 999999;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}
div.event-alert {
  position: absolute;
  display: flex;
  flex-flow: column;
  font-family: Roboto;
  max-width: 700px;
  width: 100%;
}
.event-alert__top {
  position: relative;
  display: flex;
  flex-flow: row;
  align-items: flex-end;
  padding: 0px 20px;
}

.event-alert__bottom {
  position: relative;
  background: white;
  border-radius: 5px;
  padding: 20px;
  color: black;
  padding-top: 40px;
}
.event-alert__bottom::before {
  content: "";
  position:absolute;
  right: 0;
  bottom:0;
  background: url('/public2/img/eventalert.png');
  height: 200px;
  width: 193px;
}
.event-alert__headline {
  font-weight: bold;
  font-size: 24px;
}

.event-alert__title {
  font-size: 36px;
  font-weight: bold;
  margin-left: 20px;
  margin-bottom: 20px;
  color: #fff;
}

.event-alert__text {
  font-size: 18px;
  font-weight: 300;
  margin-top: 25px;
  max-width: 480px;
  line-height: 1.5;
}

.event-alert__button {
  font-size: 18px;
  font-weight: 300;
  padding: 7px 10px;
  border: 1px solid #e4e4e4;
  display: inline-block;
  border-radius: 5px;
  margin-top: 25px;
  background: linear-gradient(0deg, #2ed471 50%, #3adc7b 0%);
  cursor: pointer;
  color: white;
}
.event-alert__logo {
  margin-bottom: -30px;
  z-index: 1;
}
.event-alert__close {
  position: absolute;
  right: 12px;
  top: -10px;
  font-weight: 200;
  color: #272626;
  cursor: pointer;
  font-size: 45px;
}
.event-alert__close:hover {
  font-weight: 300;
  top: -7px;
}
.event-alert__close::after {
  content: "\00d7";
}

.event-alert__button:hover {
  font-weight: 400;
  border-color: #a5a5a5;
}
</style>