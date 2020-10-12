<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <About />
    <EventAlert />
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import About from './components/About.vue'
import InterfaceManager from './InterfaceManager.vue'
import EventAlert from './components/EventAlert.vue'

export default {
  name: 'App',
  components: {
    HelloWorld,
    About,
    EventAlert
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
