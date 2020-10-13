<template>
<transition name="slide-fade">
<div class="s63--miniprofile" v-if="data.profile.show">
        <div class="miniprofile_head">
            <div class="head_icon"></div>
            <div class="head_username">s63</div>
            <div class="head_close" v-on:click="data.profile.show = !data.profile.show"></div>
        </div>
        <div class="miniprofile_left">
            <div class="miniprofile_userbg">
                <div class="avatar"></div>
            </div>
            <hr>
            <div class="miniprofile_ships">
                <div class="icon heart"></div>
                <a href="#"><span>Explorz</span></a>
            </div>
            <div class="miniprofile_ships">
                <div class="icon smiley"></div>
                <a href="#"><span>Mersus</span></a>
            </div>
            <div class="miniprofile_ships">
                <div class="icon skull"></div>
                <a href="#"><span>J.C.Field</span></a>
            </div>
            <hr>
            <div class="miniprofile_mottoap">
                <div class="icon motto"></div>
                <textarea type="text" id="mottoyaz" maxlength="25" rows="2" cols="2" placeholder="Mottonu güncelle.."></textarea>
            </div>
            <div class="miniprofile_mottoap">
                <div class="icon activity"></div>
                <b style="color: #fff;">Başarı Puanı:</b>
                <span style="color: #fff;"> 1560</span>
            </div>
            <hr>
            <div class="s63--socialmedia">
                <a href="#" data-tooltip="s63#9999">
                    <div class="socialmedias"><i class="fab fa-discord discord"></i></div>
                </a>
                <a href="#">
                    <div class="socialmedias"><i class="fab fa-instagram instagram"></i></div>
                </a>
                <a href="#">
                    <div class="socialmedias"><i class="fab fa-facebook facebook"></i></div>
                </a>
            </div>
        </div>
        <div class="miniprofile_right">
            <div class="badgecase">
                <div class="badge"></div>
            </div>
            <div class="badgecase">
                <div class="badge2"></div>
            </div>
            <div class="badgecase">
                <div class="badge3"></div>
            </div>
            <div class="badgecase">
                <div class="badge4"></div>
            </div>
            <div class="badgecase">
                <div class="badge5"></div>
            </div>
            <div class="badgecase">
                <div class="badge6"></div>
            </div>
        </div>
        <hr>
        <div class="wsfooter">
            <p>&copy; RiseME 2020</p>
            <p>Thanks to s63, Explorz, nttZx, Ted & Mersus</p>
        </div>
    </div>
</transition>
</template>

<script>
import App from '../App.vue'
    export default {
        name: 'MiniProfile',
        data() {
            return {
                data: App.getManager()
            }
        },
    }
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

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

.s63--miniprofile {
    width: auto;
    height: auto;
    background: #1d1d1d;
    border-radius: 5px;
    position: absolute;
    right: 10px;
    bottom: 10px;
    padding: 5px;
}

.s63--miniprofile .miniprofile_head {
    width: 100%;
    padding: 5px;
    background: rgb(0 0 0 / 0.25);
    border-radius: 5px;
    display: flex;
    margin-bottom: 5px;
}

.s63--miniprofile .miniprofile_head .head_icon {
    width: 22px;
    height: 22px;
    background-image: url("~@/assets/img/home.png");
    background-repeat: no-repeat;
    background-position: center;
    float: left;
}

.s63--miniprofile .miniprofile_head .head_username {
    height: 22px;
    margin: 0 auto;
    float: left;
    color: #fff;
    font-size: 12px;
    font-weight: 500;
    line-height: 20px;
}

.s63--miniprofile .miniprofile_head .head_close {
    width: 22px;
    height: 22px;
    background-image: url("~@/assets/img/closebutton.png");
    background-repeat: no-repeat;
    background-position: center;
    float: left;
    cursor: pointer;
}

.s63--miniprofile .miniprofile_head .head_close:active {
    opacity: 0.7;
    transform: translateY(1px);
}

.s63--miniprofile .miniprofile_left {
    width: 200px;
    float: left;
}

.s63--miniprofile .miniprofile_right {
    width: 55px;
    float: right;
    flex-flow: wrap;
    display: flex;
}

.s63--miniprofile .miniprofile_right .badgecase {
    width: 50px;
    height: 50px;
    background-color: rgb(0 0 0 / 0.25);
    border-radius: 5px;
    padding: 5px;
    margin: 0px 0px 16.5px 5px;
}

.s63--miniprofile .miniprofile_right .badgecase:last-child {
    margin: 0px 0px 5px 5px;
}

.s63--miniprofile .miniprofile_right .badgecase .badge {
    width: 40px;
    height: 40px;
    background-image: url("~@/assets/img/ADMRISE.png");
    background-repeat: no-repeat;
    background-position: center;
}

.s63--miniprofile .miniprofile_right .badgecase .badge2 {
    width: 40px;
    height: 40px;
    background-image: url("~@/assets/img/Badge.gif");
    background-repeat: no-repeat;
    background-position: center;
}

.s63--miniprofile .miniprofile_right .badgecase .badge3 {
    width: 40px;
    height: 40px;
    background-image: url("~@/assets/img/Badge2.gif");
    background-repeat: no-repeat;
    background-position: center;
}

.s63--miniprofile .miniprofile_right .badgecase .badge4 {
    width: 40px;
    height: 40px;
    background-image: url("~@/assets/img/Badge3.gif");
    background-repeat: no-repeat;
    background-position: center;
}

.s63--miniprofile .miniprofile_right .badgecase .badge5 {
    width: 40px;
    height: 40px;
    background-image: url("~@/assets/img/Badge4.gif");
    background-repeat: no-repeat;
    background-position: center;
}

.s63--miniprofile .miniprofile_right .badgecase .badge6 {
    width: 40px;
    height: 40px;
    background-image: url("~@/assets/img/Badge5.gif");
    background-repeat: no-repeat;
    background-position: center;
}

.s63--miniprofile .miniprofile_userbg {
    width: 200px;
    height: 105px;
    background-image: url("~@/assets/img/background.png");
    background-size: cover;
    background-position: center;
    border-radius: 5px;
}

.s63--miniprofile .miniprofile_userbg .avatar {
    width: 200px;
    height: 105px;
    background-image: url("https://www.habbo.de/habbo-imaging/avatarimage?figure=ca-6141523-62.sh-905-110.lg-280-100.hr-828-1138.ea-1404-110.ch-210-110.fa-3276-73.hd-190-4&direction=2&head_direction=3&gesture=sml&size=l&action=wav&headonly=0");
    background-position: center -40px;
    background-repeat: no-repeat;
    border-radius: 5px;
}

.s63--miniprofile .miniprofile_ships {
    width: 200px;
    padding: 5px;
    background: rgb(0 0 0 / 0.25);
    margin-top: 5px;
    border-radius: 5px;
    display: flex;
}

.s63--miniprofile .miniprofile_ships .icon {
    width: 20px;
    height: 20px;
    background-position: center;
    background-repeat: no-repeat;
    float: left;
}

.s63--miniprofile .miniprofile_ships span {
    float: left;
    color: #fff;
    font-size: 12px;
    padding-left: 5px;
}

.s63--miniprofile .miniprofile_ships span:hover {
    text-decoration: underline;
}

.s63--miniprofile .miniprofile_mottoap {
    width: 200px;
    height: auto;
    padding: 5px;
    background: rgb(0 0 0 / 0.25);
    margin-top: 5px;
    border-radius: 5px;
    display: flex;
}

.s63--miniprofile .miniprofile_mottoap .icon {
    width: 20px;
    height: 20px;
    background-position: center;
    background-repeat: no-repeat;
    float: left;
    margin: auto 0;
}

textarea {
    background: #1d1d1d;
    outline: 0;
    border: 0;
    border-radius: 5px;
    width: 165px;
    float: right;
    margin-left: 5px;
    padding: 2px 5px;
    color: #fff;
    resize: none;
}

.s63--miniprofile .miniprofile_mottoap b {
    font-size: 12px;
    font-weight: 400;
    margin-left: 5px;
    float: left;
    margin: 0 auto 0 5px;
}

.s63--miniprofile .miniprofile_mottoap span {
    font-size: 12px;
    font-weight: 400;
    float: right;
}

.s63--socialmedia {
    width: 100%;
    display: flex;
    justify-content: space-between;
    flex-flow: wrap;
    margin-bottom: 5px;
}

.s63--socialmedia .socialmedias {
    width: 60px;
    height: 27px;
    background: rgb(0 0 0 / 0.25);
    border-radius: 5px;
    display: flex;
    box-shadow: inset 0 0 0 2px #272727;
}

.s63--socialmedia .socialmedias i {
    margin: 5px auto;
    color: #989898;
    transition: .2s;
}

.discord:hover {
    color: #7289da!important;
}

.instagram:hover {
    color: #c32aa3!important;
}

.facebook:hover {
    color: #0078ff!important;
}

.heart {
    width: 20px;
    height: 20px;
    background-image: url("~@/assets/img/heart.gif");
    background-position: center;
    background-repeat: no-repeat;
}

.smiley {
    width: 20px;
    height: 20px;
    background-image: url("~@/assets/img/smiley.png");
    background-position: center;
    background-repeat: no-repeat;
}

.skull {
    width: 20px;
    height: 20px;
    background-image: url("~@/assets/img/skull.png");
    background-position: center;
    background-repeat: no-repeat;
}

.motto {
    width: 20px;
    height: 20px;
    background-image: url("~@/assets/img/mottoicon.png");
    background-position: center;
    background-repeat: no-repeat;
}

.activity {
    width: 20px;
    height: 20px;
    background-image: url("~@/assets/img/motto.png");
    background-position: center;
    background-repeat: no-repeat;
}

hr {
    margin: 10px 0;
    height: 1px;
    border: none;
    background: #252525;
}

::-webkit-scrollbar {
    width: 0px;
}

 ::-webkit-scrollbar-track {
    background: none;
}

 ::-webkit-scrollbar-thumb {
    background: none;
}

 ::-webkit-scrollbar-thumb:hover {
    background: none;
}

[data-tooltip] {
    position: relative;
    z-index: 2;
    cursor: pointer;
}

[data-tooltip]:before,
[data-tooltip]:after {
    visibility: hidden;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    pointer-events: none;
}

[data-tooltip]:before {
    position: absolute;
    bottom: 105%;
    left: 50%;
    margin-bottom: 5px;
    margin-left: -80px;
    padding: 7px;
    width: 150px;
    border-radius: 5px;
    background-color: rgb(0 0 0 / 0.75);
    color: #FFFFFF;
    content: attr(data-tooltip);
    text-align: center;
    font-size: 12px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    line-height: 1.2;
}

[data-tooltip]:after {
    position: absolute;
    bottom: 105%;
    left: 50%;
    margin-left: -5px;
    width: 0;
    border-top: 5px solid rgb(0 0 0 / 0.75);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    content: " ";
    font-size: 0;
    line-height: 0;
}

[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
    visibility: visible;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
}

.wsfooter {
    width: 100%;
    display: inline-block;
}

.wsfooter p {
    width: 100%;
    font-size: 12px;
    color: #989898;
    text-align: center;
}

.wsfooter p:last-child {
    font-size: 11px;
}


</style>