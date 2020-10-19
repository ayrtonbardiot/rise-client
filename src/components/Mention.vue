<template>
<div id="notifcontainer" style="display: inline;" v-if="data.mentions.show">
            <div id="notify-0" class="notifelement" style="left: 20px;animation: fadeInLeft 1s;">
                <div id="ntf1">
                    <div id="ntf2"></div>
                    <div id="ntf3" style="color: black;font-size: 18px;"><u>NAME</u></div>
                </div>
                <div id="ntf4">
                    MESSAGE MENTION
                </div>
                <div onclick='$("#notifcontainer").fadeOut();' style="height: 30px;width: 5px;" id="ntf5">
                    <div id="ntf7"></div>
                </div>
                <div style="right: 49px;width: 3px;height: 30px;" onclick="ws.send('6|<?php echo $roomId1; ?>');$('#notify-0').fadeOut();" id="ntf5">
                    <div id="ntf8"></div>
                </div>
            </div>
</div>
</template>

<script>
import App from '../App.vue'
    export default {
        name: 'Mention',
        data() {
            return {
                data: App.getManager()
            }
        },
    }
</script>

<style scoped>
#notifcontainer {
	position: fixed;
	width: 350px;
	top: 20px;
	max-height: calc(100% - 20px);
	left: 0;
	z-index: 9999999999
}

.notifelement {
	position: absolute;
	width: 300px;
	left: -500px;
	margin-bottom: 20px;
	padding-bottom: 70px;
	background: #fff;
	-webkit-box-shadow: 0 0 57px 0 rgba(0, 0, 0, .39);
	-moz-box-shadow: 0 0 57px 0 rgba(0, 0, 0, .39);
	box-shadow: 0 0 57px 0 rgba(0, 0, 0, .39)
}

#ntf1 {
	position: relative;
	left: 15px;
	border-bottom: 2px solid #ebebeb;
	width: calc(100% - 30px);
	height: 56px
}

#ntf2 {
	position: absolute;
	width: 28px;
	top: 15px;
	height: 28px;
	background: url(~@/assets/img/pagetemplate.png) -162px -222px
}

#ntf3 {
	position: absolute;
	font-size: 140%;
	left: 35px;
	top: 16px
}

#ntf4 {
	position: relative;
	word-wrap: break-word;
	font-size: 120%;
	color: #a0a0a0;
	width: calc(100% - 30px);
	left: 15px;
	margin-top: 10px
}

#ntf5 {
	position: absolute;
	cursor: pointer;
	padding: 7px 15px;
	font-size: 120%;
	color: #fff;
	background: #5ea6ee;
	bottom: 15px;
	right: 15px
}

#ntf5:hover {
	opacity: .7
}
</style>