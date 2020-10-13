<template>
  <transition name="fade">
<div id="about" v-if="data.about.show" class="mxcon" v-drag>
<div class="mxcon-title">Plus Emulator <div id="newcloser" v-on:click="data.about.show = !data.about.show"></div></div>
<div id="aboutimg"></div>
<div id="aboutinfos">
<b>Plus Emulator :: Rise</b>
<span>Credits to: <span class="a-right">Sledmore, Devbest Community</span></span>
<span>Special Thanks to: <span class="a-right">Explorz - nttZx - Ted</span></span>
<span>Versiyon: <span class="a-right">1.1.0</span></span>
<b>Current run time information</b>
<span>Online Users: <span class="a-right">89</span></span>
<span>Rooms Loaded: <span class="a-right">150000</span></span>
<span>Registered Users: <span class="a-right">1337</span></span>
<span>Uptime: <span class="a-right">13:37:37</span></span>
<b>Other informations</b>
<span>Lisans: <span class="a-right">Rise (151.80.195.50)</span></span>
<span>Last Update: <span class="a-right">17/08/2020, C# 7.0</span></span>
<span>Chanelogs: <span class="a-right">A, B, C, D, E, F, G</span></span>
</div>
</div>
  </transition>
</template>

<script>
import drag from '@branu-jp/v-drag'
import App from '../App.vue'
    export default {
        name: 'About',
        directives: {
            drag
        },
        data() {
            return {
                data: App.getManager()
            }
        },
    }
</script>

<style scoped>
div#newcloser {
    float: right;
    background: url(https://cdn.discordapp.com/attachments/744969960035582013/744977729795129466/kapat.png);
    height: 18px;
    width: 18px;
    font-size: 12px;
    line-height: 16px;
    text-align: center;
    position: absolute;
    right: 10px;
    top: 8px;
    cursor: pointer;
    border-radius: 2px;
}
div#newcloser:hover {
	opacity: .5;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}
div.mxcon {
	width: 550px;
	background: #f0f0f0;
	position: fixed;
	left: 35%;
	top: 25%;
	border: 1px solid #000;
	box-shadow: 0 1px 0 black, 0 0 10px rgba(0, 0, 0, 0.52);
	z-index: 2;
	border-radius: 5px;
}
.mxcon-title {
	text-align: center;
	padding: 10px;
	border-bottom: 1px solid #0000005e;
	box-shadow: inset 0 -14px 0 rgba(0, 0, 0, 0.09);
	font-weight: 700;
	background: #222;
	color: #fff;
}
div#aboutimg {
	height: 210px;
	width: 250px;
	background: url(https://cdn.discordapp.com/attachments/741589240793792554/744900841680404480/emufoto.png);
	margin: 10px;
	float: left;
	cursor: pointer;
	transition: 200ms;
}
div#aboutinfos {
	float: left;
	color: #2d2d2d;
	width: 250px;
	margin-top: 10px;
}
div#aboutinfos b {
	display: block;
	margin-bottom: 3px;
	margin-top: 15px;
}
div#aboutinfos span {
	font-size: 12px;
	display: block;
	margin-top: 0px;
}
div#aboutinfos span span {
	float: right;
}
div#aboutinfos b:first-child {
	margin-top: 4px;
}
</style>