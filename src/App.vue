<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <About />
    <HotelAlert />
    <EventAlert />
    <MiniProfile />
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import About from './components/About.vue'
import InterfaceManager from './InterfaceManager.vue'
import HotelAlert from './components/HotelAlert.vue'
import EventAlert from './components/EventAlert.vue'
import MiniProfile from './components/MiniProfile.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
    About,
    HotelAlert,
    EventAlert,
    MiniProfile
  },
  getManager: function() {
    return InterfaceManager.props;
  },
}
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
