<template>
<transition name="slide-fade">
<div class="s63--ltd" v-if="data.ltd.show">
    <div class="ltd_head">
        <div class="head_icon"></div>
        <div class="head_furniname">Rare-Name</div>
        <div class="head_close" v-on:click="data.ltd.show = !data.ltd.show"></div>
    </div>
    <div class="ltd_bg">
        <div class="furni" style="background-image:('');"></div>
    </div>
    <hr>
    <h1>LTD Infos</h1>
    <hr>
    <div class="info">
        <div class="icon price"></div>
        <b>Price:</b>
        <span>300 Duckets</span>
    </div>
    <div class="info">
        <div class="icon circulation"></div>
        <b>Circulation:</b>
        <span>16</span>
    </div>
    <div class="info">
        <div class="icon sells"></div>
        <b>No of Sales:</b>
        <span>20</span>
    </div>
    <div class="info">
        <div class="icon no"></div>
        <b>LTD No:</b>
        <span>20</span>
    </div>
    <hr>
    <button>MAĞAZAYA GİT</button>
    <hr>
    <div class="ltdfooter">
        &copy; RiseME 2020
        <br> Thanks to s63, Explorz, nttZx, Ted & Mersus
    </div>
</div>
</transition>
</template>

<script>
import App from '../App.vue'
    export default {
        name: 'Ltd',
        data() {
            return {
                data: App.getManager()
            }
        },
    }
</script>

<style scoped>
.slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
{
  transform: translateX(10px);
  opacity: 0;
}

* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    color: #fff;
    
}

*,


 ::after,
 ::before {
    box-sizing: border-box;
}

hr {
    margin: 10px 0;
    height: 1px;
    border: none;
    background: #252525;
}

.s63--ltd {
    width: 265px;
    height: auto;
    background: #1d1d1d;
    border-radius: 5px;
    position: absolute;
    right: 10px;
    bottom: 10px;
    padding: 5px;
}

.s63--ltd .ltd_bg {
    width: 190px;
    height: 189px;
    background-image: url("~@/assets/img/ltd-bg.png");
    background-position: center;
    background-repeat: no-repeat;
    margin: 10px auto;
}

.s63--ltd .ltd_bg .furni {
    width: 100%;
    height: 100%;
    background-image: url("~@/assets/img/morice.png");
    background-position: center;
    background-repeat: no-repeat;
}

.s63--ltd .ltd_head {
    width: 100%;
    padding: 5px;
    background: rgb(0 0 0 / 0.25);
    border-radius: 5px;
    display: flex;
    margin-bottom: 5px;
}

.s63--ltd .ltd_head .head_icon {
    width: 27px;
    height: 27px;
    background-image: url("~@/assets/img/ltd.png");
    background-repeat: no-repeat;
    background-position: center;
    float: left;
}

.s63--ltd .ltd_head .head_furniname {
    height: 22px;
    margin: 0 auto;
    float: left;
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    line-height: 27px;
}

.s63--ltd .ltd_head .head_close {
    width: 27px;
    height: 27px;
    background-image: url("~@/assets/img/closebutton.png");
    background-repeat: no-repeat;
    background-position: center;
    float: left;
    cursor: pointer;
}

.s63--ltd h1 {
    width: 100%;
    color: #fff;
    margin: 5px 0;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
}

.s63--ltd .info {
    width: 100%;
    background: rgb(0 0 0 / 0.25);
    padding: 5px;
    margin-bottom: 5px;
    border-radius: 5px;
    display: flex;
    line-height: 27px;
}

.s63--ltd .info .icon {
    width: 27px;
    height: 27px;
    background-repeat: no-repeat;
    background-position: center;
}

.s63--ltd .info b {
    font-size: 12px;
    font-weight: 400;
    margin-left: 5px;
    float: left;
    margin: 0 auto 0 5px;
}

.s63--ltd .info span {
    font-size: 12px;
    font-weight: 500;
    float: right;
}

.s63--ltd button {
    width: 100%;
    height: auto;
    padding: 6px;
    color: #fff;
    font-weight: 400;
    background-color: #00813e;
    border-color: #8eda55;
    border-radius: 5px;
    border-width: 2px;
    border-style: solid;
    text-transform: uppercase;
    box-shadow: 0 3px 0 1px rgba(0, 0, 0, .3);
}

.s63--ltd button:active {
    background-color: #006743;
    border-color: #5abb37;
    box-shadow: 0 1px 0 1px rgba(0, 0, 0, .3);
    transform: translate(0, 2px);
    outline: 0;
}

.s63--ltd button:focus {
    outline: 0;
}

.s63--ltd .ltdfooter {
    width: 100%;
    font-size: 12px;
    color: #989898;
    text-align: center;
    margin-bottom: 5px;
}

.price {
    width: 27px;
    height: 27px;
    background-image: url("~@/assets/img/price.png");
    background-position: center;
    background-repeat: no-repeat;
}

.circulation {
    width: 27px;
    height: 27px;
    background-image: url("~@/assets/img/circulation.png");
    background-position: center;
    background-repeat: no-repeat;
}

.sells {
    width: 27px;
    height: 27px;
    background-image: url("~@/assets/img/sells.png");
    background-position: center;
    background-repeat: no-repeat;
}

.no {
    width: 27px;
    height: 27px;
    background-image: url("~@/assets/img/ltdno.png");
    background-position: center;
    background-repeat: no-repeat;
}


</style>