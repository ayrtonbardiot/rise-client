<template>
  <div id="app">
    <About />
    <HotelAlert />
    <EventAlert />
    <MiniProfile />
    <Ltd />
  </div>
</template>

<script>
import About from './components/About.vue'
import InterfaceManager from './InterfaceManager.vue'
import HotelAlert from './components/HotelAlert.vue'
import EventAlert from './components/EventAlert.vue'
import MiniProfile from './components/MiniProfile.vue'
import Ltd from './components/Ltd.vue'

export default {
  name: 'App',
  components: {
    About,
    HotelAlert,
    EventAlert,
    MiniProfile,
    Ltd
  },
  data() {
    return {
      debug: true
    }
  },
  getManager: function() {
    return InterfaceManager.props;
  },
  sendData: function(data) {
    document.querySelector('object, embed').openroom(data);
  }
}

/* eslint-disable */
window.FlashExternalInterface.openHabblet = function(a, b){
  console.log(a);
  var text = a.split('|');
  var header = text[0];
  switch(header){
    case "hotelabout":
      InterfaceManager.props.about.onlineusers = text[1];
      InterfaceManager.props.about.roomcount = text[2];
      InterfaceManager.props.about.onlinetime = text[3];
      InterfaceManager.props.about.registered = text[4];
      InterfaceManager.props.about.show = true;
      break;
    case "89":
      InterfaceManager.props.event.username = text[1];
      InterfaceManager.props.event.message = text[2];
      InterfaceManager.props.event.roomid = text[4];
      InterfaceManager.props.event.recomp = text[5];
      InterfaceManager.props.event.show = true;
  }
}
/* eslint-enable */
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
