<template>
  <div id="app">
    <About />
    <HotelAlert />
    <EventAlert />
    <MiniProfile />
    <Ltd />
    <Mention />
  </div>
</template>

<script>
import About from "./components/About.vue";
import InterfaceManager from "./InterfaceManager.vue";
import HotelAlert from "./components/HotelAlert.vue";
import EventAlert from "./components/EventAlert.vue";
import MiniProfile from "./components/MiniProfile.vue";
import Ltd from "./components/Ltd.vue";
import Mention from "./components/Mention.vue";
import axios from "axios";

export default {
  name: "App",
  components: {
    About,
    HotelAlert,
    EventAlert,
    MiniProfile,
    Ltd,
    Mention,
  },
  data() {
    return {
      debug: true,
    };
  },
  getManager: function () {
    return InterfaceManager.props;
  },
  sendData: function (data) {
    document.querySelector("object, embed").openroom(data);
  },
};

/* eslint-disable */
window.FlashExternalInterface.openHabblet = function (a, b) {
  console.log(a);
  var text = a.split("|");
  var header = text[0];
  switch (header) {
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
      InterfaceManager.props.event.roomid = text[3];
      InterfaceManager.props.event.recomp = text[4];
      InterfaceManager.props.event.show = true;
      break;
    case "88":
      InterfaceManager.props.hotelalert.username = text[1];
      InterfaceManager.props.hotelalert.message = text[2];
      InterfaceManager.props.hotelalert.show = true;
      break;
    case "webprofile":
      axios
        .get(`http://127.0.0.1/rise/assets/ajax/profile.php?userid=` + text[1])
        .then((response) => {
          InterfaceManager.props.profile.info = response.data;
        })
        .catch((e) => {
          console.error(
            "Error on request miniprofile - Contact nttZx#0013. Stacktrace : " +
              e
          );
        });
      InterfaceManager.props.profile.show = true;
      break;
    case "mention":
      InterfaceManager.props.mentions.mentioncount++;
      InterfaceManager.props.mentions.show = true;
      break;
    case "ltd":
      axios
        .get(
          `http://127.0.0.1/rise/assets/ajax/ltd.php?itemid=` + text[1]
        )
        .then((response) => {
          InterfaceManager.props.ltd.info = response.data;
        })
        .catch((e) => {
          console.error(
            "Error on request LTD. - Contact nttZx#0013. Stacktrace : " + e
          );
        });
      InterfaceManager.props.ltd.show = true;
  }
};
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
