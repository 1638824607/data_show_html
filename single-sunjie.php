<?php

/*

Template Name: sunjie

*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>张平凡带你看抢人大战</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/4.2.6/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/animate.css/3.5.2/animate.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://www.shenblog.cn/wp-content/uploads/sunjie/typed.js"></script>
    <script src="http://www.shenblog.cn/wp-content/uploads/sunjie/swiper.animate1.0.3.min.js"></script>
    <script type="text/javascript" src="http://www.shenblog.cn/wp-content/uploads/sunjie/swiper.min.js"></script>

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide1 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg1.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide2 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg2.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide4 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg4.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide5 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg5.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide6 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg6.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide7 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg7.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide13 {
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/bg13.jpg) no-repeat;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide3 {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .swiper-slide8 {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            margin-top: 250px
        }

        .swiper-slide9 {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            margin-top: 250px
        }

        .swiper-slide10 {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            margin-top: 250px
        }

        .swiper-slide11 {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            margin-top: 250px
        }

        .swiper-slide12 {
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
        }

        .slide1-text1 {
            color: white;
            font-weight: bold;
            font-size: 68px;
            /*border: solid red 1px;*/
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
            text-shadow: black 0.05em 0.05em 0.1em;
        }

        .slide13-text {
            color: white;
            text-shadow: black 0.05em 0.05em 0.1em;
            font-weight: bolder;
            /*border: 1px solid red;*/
            font-size: 24px;
            text-align: left;
            margin: 0 auto;
            line-height: 40px;
            white-space: nowrap;
        }

        .slide2-text {
            font-weight: bolder;
            text-align: left;
            font-size: 1.2em;
        }

        .slide-text-position {
            width: 1200px;
            height: 799px;
            position: relative;
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/page2_say.png) no-repeat;
            background-size: 100%;
        }

        .slide4-text-position {
            width: 1200px;
            height: 799px;
            position: relative;
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/page4_say.png) no-repeat;
            background-size: 100%;
        }
        .slide4-text{
            width: 400px;
            position: absolute;
            left: 170px;
            top:170px;
            line-height: 32px;
            transform: rotate(-14deg);
        }

        .slide5-text-position {
            width: 1200px;
            height: 799px;
            position: relative;
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/page5_say.png) no-repeat;
            background-size: 100%;
        }
        .slide5-text{
            width: 350px;
            position: absolute;
            left: 150px;
            top:160px;
            line-height: 32px;
            transform: rotate(-14deg);
        }

        .slide6-text-position {
            width: 1200px;
            height: 799px;
            position: relative;
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/page6_say.png) no-repeat;
            background-size: 100%;
        }
        .slide6-text{
            width: 350px;
            position: absolute;
            left: 150px;
            top:160px;
            line-height: 32px;
            transform: rotate(-14deg);
        }

        .slide7-text-position {
            width: 1200px;
            height: 799px;
            position: relative;
            background: url(http://www.shenblog.cn/wp-content/uploads/sunjie/page7_say.png) no-repeat;
            background-size: 100%;
            left: 0px;
            top:0px;
        }
        .slide7-text{
            width: 350px;
            position: absolute;
            left: 570px;
            top:95px;
            line-height: 32px;
        }

        .swiper-slide8 .content {
            width: 800px;
            padding-top: 235px;
        }
        .swiper-slide8 .slide8-text {
            color: white;
            text-shadow: black 0.05em 0.05em 0.1em;
            font-weight: bold;
            font-size: 30px;
            line-height: 40px;
            text-align: left;
            margin: 0 auto;
            line-height: 45px;
        }

        .iframe-text-position{
            position: absolute;
            top: 0px;
            left: 550px;
            width: 720px;
            height: 136px
        }

        .slide4-text{
            width: 400px;
            position: absolute;
            left: 130px;
            top:170px;
            line-height: 32px;
            transform: rotate(-14deg);
        }


        .content {
            width: 1200px;
            height: 100%;
            margin: 0 auto;
            text-align: left;
            overflow: hidden;
        }

        .typed-cursor{
            display: none;
        }

        .swiper_btn{
            width: 100px;
            height: 100px;
            background-size: contain;
        }
        .swiper-button-next{
            background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23758395'%2F%3E%3C%2Fsvg%3E") !important;
        }

        .swiper-button-prev{
            background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23758395'%2F%3E%3C%2Fsvg%3E") !important;
        }
    </style>
</head>

<body>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide1">
            <div class="width:750px;height:800px">
                <div class="slide1-text1">
                    张平凡带你看抢人大战<br />背后的那些<span style="font-size: 88px;">"坑"</span>
                </div>
                <div class="slide13-text" style="margin-top: 100px;width: 820px;">
                    <p>愈演愈烈的人才争夺战或致各大城市呈现两种走势：
                        <br /> 一方面是具备人才吸引能力的城市，有望借助大量的人才落户增强经济实力；
                        <br /> 另一方面，一些欠发达区域，其人才招聘难度进一步增加，人才流失现象愈发严重。
                        <br /> 已经出台人才新政的城市，到底是为了吸引人才还是吸引购房？
                        <br /> 而面临人才空心化的中西部欠发达地区，如何才能扭转这一现状？
                        <br /> 来听听张平凡同学怎么说吧~
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-slide swiper-slide2">
            <div style="width: 1200px;height: 800px;position: relative;">
                <div class="slide2-text slide-text-position ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s">
                    <div  style="width: 580px;position: absolute;left: 345px;top:145px;line-height: 32px;" id="typed2">
                        "大家好，我叫张平凡，来自宁夏，即将从村里的一所某某某大学毕业， 这个学校歌舞升平，美女如云，呃……跑偏了。万万没想到今年又是一届传说中传说中的史上最难毕业季，究竟是留在北京实现梦想，还是投入新一线城市的怀抱，还是回家建设家乡，这……是一个值得深思的问题~”
                    </div>
                </div>
                <img class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s" style="width: 360px;margin:0 0 0 0;position: absolute;top: 400px;left: 0px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page2_people.png" alt="">
            </div>
        </div>
        <div class="swiper-slide">
            <iframe class="swiper-slide3" src="http://www.shenblog.cn/wp-content/uploads/sunjie/three_data.html" frameborder="0"></iframe>
        </div>
        <div class="swiper-slide swiper-slide4">
            <div style="width: 1200px;height: 800px;position: relative;">
                <div class="slide4-text-position ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s">
                    <div class="slide4-text" id="typed4">
                        <span class="slide2-text">"如果我选择留在北京，没有户口，<br />月薪5千，租房2千，生活费2千，<br />我连房奴都不配当啊，人生真是艰<br />难啊/(ToT)/~~~"</span>
                    </div>
                </div>

                <img class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 360px;margin:0 0 0 0;position: absolute;top: 400px;left:400px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page4_dec2.png" alt="">
                <img class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 1200px;margin:0 0 0 0;position: absolute;left: 0;top: 0;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page4_dec1.png" alt="">
            </div>
        </div>
        <div class="swiper-slide swiper-slide5" style="font-size: 16px">
            <div style="width: 1200px;height: 800px;position: relative;">
                <div class="slide5-text-position ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s">
                    <div class="slide5-text" id="typed5">
                        <span class="slide2-text">“考虑到离我家较近的新一线城市是西安，所以查阅了西安的人才政策，发现我拿着毕业证和身份证就可以在线落户，每个月还有1200元的生活补贴，听起来也是挺不错的。”</span>
                    </div>
                </div>
                <img class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 360px;margin:0 0 0 0;position: absolute;top: 400px;left: 460px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page5_dec2.png" alt="">
                <img class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 1200px;margin:0 0 0 0;position: absolute;top: 0px;left: 0px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page5_dec1.png" alt="">
            </div>
        </div>
        <div class="swiper-slide swiper-slide6">
            <div style="width: 1200px;height: 800px;position: relative;">
                <div class="slide6-text-position ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s">
                    <div class="slide6-text" id="typed6">
                        <span class="slide2-text">“如果我回到宁夏，生活成本低，压力小，还可以照顾父母，但是回家乡却找不到令我满意的工作，那我四年学到的知识又有什么用处呢？”</span>
                        <!--<span class="slide2-text">“如果我回到宁夏，生活成本低，压力小，还可以照顾父母，但是回到家乡找不到令我满意的工作，那我四年学到的知识又有什么用呢？”</span>-->
                    </div>
                </div>

                <img class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 360px;margin:0 0 0 0;position: absolute;top: 400px;left: 460px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page6_dec2.png" alt="">
                <img class="ani" swiper-animate-effect="bounceInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 1200px;margin:0 0 0 0;position: absolute;top: 0px;left: 0px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page6_dec1.png" alt="">
            </div>
        </div>
        <div class="swiper-slide swiper-slide7">
            <div style="width: 1200px;height: 800px;position: relative;overflow: initial">
                <div class="slide7-text-position ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s">
                    <div class="slide7-text" id="typed7">
                        <span class="slide2-text">“总的来说，西安虽然比不上北京的繁华，但是离家近，还可以学有所用，有望成为新时代的有为青年。如此看来，像西安这样的新一线城市对人才还是有一定吸引力的，落户数的上升也在意料之中。”</span>
                    </div>
                </div>
                <img class="ani" swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.5s" style="width: 360px;margin:0 0 0 0;position: absolute;top: 400px;left: 300px;" src="http://www.shenblog.cn/wp-content/uploads/sunjie/page7_dec1.png" alt="">
            </div>
        </div>
        <div class="swiper-slide">
            <div style="width: 750px;height: 800px;position: absolute;left: 50%;margin: -325px 0 0 -400px;top: 50%;">
                <div id="typed8" style="color: #758395;height: 100px;">
                    <p style="text-align: left;">成都，西安，杭州是新一线城市中新增落户数的前三名。依据新一线城市划分五大指标看，<br />成都在城市人活跃度，生活方式多样性以及未来可塑性三方面表现突出；西安作为中部区域<br />中心城市，城市枢纽性强；杭州位于东部的经济发达区，商业资源集聚度优势明显。但是新<br />一线城市通过各种糖衣炮弹诱惑了如此多的人才落户，难道真的这么好吗？</p>
                </div>
                <div style="width: 100%;height: 470px">
                    <iframe class="swiper-slide8" src="http://www.shenblog.cn/wp-content/uploads/sunjie/eight_data.html" frameborder="0" style="width: 750px;height: 470px;margin: 0px auto;"></iframe>
                </div>
                <span class="right-txt" style="display: block;margin: 0 auto;text-align: right;width: 750px;color: #758395">数据来源：各市统计局官网</span>
            </div>
        </div>
        <div class="swiper-slide">
            <div style="width: 750px;height: 800px;position: absolute;left: 50%;margin: -325px 0 0 -400px;top: 50%;">
                <div id="typed9" style="color: #758395;height: 100px;">
                    <p style="text-align: left;width: 674px;margin: 10px auto;">首先高昂的房价让我有些望而却步，根据相关数据显示，杭州、南京等城市的平均 <br />房价甚至超过当地平均薪资的3倍之多，在这样的情况下，即使不吃不喝在杭州买上 <br />一套房也得花上上百年的时间，虽然有各种优惠政策，但是压力同样不小啊。</p>
                </div>
                <div style="width: 100%;height: 470px">
                    <iframe class="swiper-slide9" src="http://www.shenblog.cn/wp-content/uploads/sunjie/nine_data.html" frameborder="0" style="width: 750px;height: 470px;margin: 0px auto;"></iframe>
                </div>
                <span class="right-txt" style="display: block;margin: 0 auto;text-align: right;width: 750px;color: #758395">数据来源：智联招聘《2018年春季中国雇主需求与白领人才供给报告》<br>住房大数据联合实验室、中国社科院财经战略研究院住房大数据项目组</span>
            </div>
        </div>
        <div class="swiper-slide">
            <div style="width: 750px;height: 800px;position: absolute;left: 50%;margin: -325px 0 0 -400px;top: 50%;">
                <div id="typed10" style="color: #758395;height: 100px;">
                    <p style="text-align: left;width: 631px;margin: 10px auto;">其次，不低的物价也令我压力倍增。对于选择西安，武汉和长沙的毕业生来讲，<br />3000出头的工资恐怕会入不敷出。但是，其他新一线城市的应届毕业生薪资也<br />只够维持基本的生活。</p>
                </div>
                <div style="width: 100%;height: 470px">
                    <iframe class="swiper-slide10" src="http://www.shenblog.cn/wp-content/uploads/sunjie/ten_data.html" frameborder="0" style="width: 750px;height: 470px;margin: 0px auto;"></iframe>
                </div>
                <span class="right-txt" style="display: block;margin: 0 auto;text-align: right;width: 750px;color: #758395">数据来源：各市统计局经济与社会统计公报</span>
            </div>
        </div>
        <div class="swiper-slide">
            <div style="width: 750px;height: 800px;position: absolute;left: 50%;margin: -325px 0 0 -400px;top: 50%;">
                <div id="typed11" style="color: #758395;height: 100px;">
                    <p style="text-align: left;">“我们发改委主任在两会上提到西部的人才现状是“大学生跑出去一火车，回来一卡车”，当<br />下如火如荼的抢人大战使得人才空心化问题更加的凸显。从贵州、宁夏、陕西等地区的人<br />才流失数据可以看出这些问题，尤其是陕西省，三年间一直处于流失大于留住的状态。</p>
                </div>
                <div style="width: 100%;height: 470px">
                    <iframe class="swiper-slide11" src="http://www.shenblog.cn/wp-content/uploads/sunjie/eleven_data.html" frameborder="0" style="width: 750px;height: 470px;margin: 0px auto;"></iframe>
                </div>
                <span class="right-txt" style="display: block;margin: 0 auto;text-align: right;width: 750px;color: #758395">数据来源：各省、各地区每年毕业生就业质量报告</span>
            </div>
        </div>
        <div class="swiper-slide">
            <iframe class="swiper-slide12" src="http://www.shenblog.cn/wp-content/uploads/sunjie/twelve_data.html" frameborder="0"></iframe>
        </div>
        <div class="swiper-slide swiper-slide13">
            <div class="slide13-text" id="typed13">
                <p>各地“华丽”的人才政策难免让毕业生们眼花缭乱，无从选择，低门槛的落户条件固然令人欣慰，
                    <br />但是，租住房补贴的背后依然需要承担较大的房贷压力，张平凡的焦虑也提醒毕业生们谨慎规划
                    <br />，理性选择，莫在“糖衣炮弹”面前立刻“缴械投降”。中西部地区的人才空心化问题在近几年的抢
                    <br />人大战中愈发突显，尽管中西部地区相对较低的生活成本对年轻人来说具有一定吸引力，但这种
                    <br />优势也日渐被便利的交通方式和优化的产业形态所抵消。
                    <br />为了各地区的协同发展，不仅需要国家对中西部地区给予一定政策倾斜，还需要中西部城市进一
                    <br />步激发民营经济活力，推动产业升级。新一线城市也应以理性姿态吸纳人才，做好城市规划，真
                    <br />正将人才资源转化为城市经济发展新动力。</p>
            </div>
        </div>
    </div>

    <div class="swiper-button-prev swiper-button-white swiper_btn"></div>
    <div class="swiper-button-next swiper-button-white swiper_btn"></div>
    <audio id="bgMusic" autoplay>
        <source src="" type="audio/mp3" >
    </audio>
</div>
<script>
    var typed_flag = {
        2 : false,
        3 : false,
        4 : false,
        5 : false,
        6 : false,
        7 : false,
        8 : false,
        9 : false,
        10 : false,
        11 : false,
        12 : false,
        13 : false
    };

    var music_obj = document.getElementById('bgMusic');

    Swiper.prototype.plugins.debugger = function(swiper, params) {
        if(!params) return;
        return {
            onClick: function(swiper, e) {
                var swiper_index = swiper.activeIndex+1;
                if(typed_flag[swiper_index] !== undefined && typed_flag[swiper_index] === false){
                    eval("typed"+swiper_index)();
                    typed_flag[swiper_index] = true;
                }
            }
        };
    };
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
//        mousewheelControl: true,
        debugger: true,
        onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
            swiperAnimateCache(swiper); //隐藏动画元素
            swiperAnimate(swiper); //初始化完成开始动画
        },
        onSlideChangeEnd: function(swiper){
            swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
        }
    });


    window.onload = function(){
        typed1();
    };
    function typed1(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page1.mp3';
        music_obj.play();
    }

    function typed2(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page2.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed2").typed({
//                strings: ['"大家好，我叫张平凡，来自宁夏，即将从村里的一所某某某大学毕业， 这个学校歌舞升平，美女如云，呃……跑偏了。万万没想到今年又是一届传说中传说中的史上最难毕业季，究竟是留在北京实现梦想，还是投入新一线城市的怀抱，还是回家建设家乡，这……是一个值得深思的问题~”'],
//                typeSpeed: 60,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed3(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page3.mp3';
        music_obj.play();
    }

    function typed4(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page4.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed4").typed({
//                strings: ['<span class="slide2-text">"如果我选择留在北京，没有户口，<br />月薪5千，租房2千，生活费2千，<br />我连房奴都不配当啊，人生真是艰<br />难啊/(ToT)/~~~"</span>'],
//                typeSpeed: 60,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed5(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page5.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed5").typed({
////                strings: ['<span class="slide2-text">“因为我是宁夏人，离我最近的新一线城市就是西安，今年西安的人才政策真的是毫无底线，拿着毕业证和身份证就可以在线落户，每月还有1200元的生活补贴，听起来也是棒棒哒。”</span>'],
//                strings: ['<span class="slide2-text">“考虑到离我家较近的新一线城市是西安，所以查阅了西安的人才政策，发现我拿着毕业证和身份证就可以在线落户，每个月还有1200元的生活补贴，听起来也是挺不错的。”</span>'],
//                typeSpeed: 60,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed6(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page6.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed6").typed({
//                strings: ['<span class="slide2-text">“如果我回到宁夏，生活成本低，压力小，还可以照顾父母，但是回家乡却找不到令我满意的工作，那我四年学到的知识又有什么用处呢？”</span>'],
//                typeSpeed: 60,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed7(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page7.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed7").typed({
//                strings: ['<span class="slide2-text">“总的来说，西安虽然比不上北京的繁华，但是离家近，还可以学有所用，有望成为新时代的有为青年。如此看来，像西安这样的新一线城市对人才还是有一定吸引力的，落户数的上升也在意料之中。”</span>'],
//                typeSpeed: 60,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed8(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page8.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed8").typed({
//                strings: ['<p>成都，西安，杭州是新一线城市中新增落户数的前三名。依据新一线城市划分五大指标看，<br />成都在城市人活跃度，生活方式多样性以及未来可塑性三方面表现突出；西安作为中部区域<br />中心城市，城市枢纽性强；杭州位于东部的经济发达区，商业资源集聚度优势明显。但是新<br />一线城市通过各种糖衣炮弹诱惑了如此多的人才落户，难道真的这么好吗？</p>'],
//                typeSpeed: 70,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed9(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page9.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed9").typed({
//                strings: ['<p>首先高昂的房价让我有些望而却步，根据相关数据显示，杭州、南京等城市的平均 <br />房价甚至超过当地平均薪资的3倍之多，在这样的情况下，即使不吃不喝在杭州买上 <br />一套房也得花上上百年的时间，虽然有各种优惠政策，但是压力同样不小啊。</p>'],
//                typeSpeed: 70,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed10(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page10.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed10").typed({
//                strings: ['<p>其次，不低的物价也令我压力倍增。对于选择西安，武汉和长沙的毕业生来讲，<br />3000出头的工资恐怕会入不敷出。但是，其他新一线城市的应届毕业生薪资也<br />只够维持基本的生活。</p>'],
//                typeSpeed: 70,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }

    function typed11(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page11.mp3';
        music_obj.play();
//        music_obj.addEventListener("canplaythrough", function() {
//            $("#typed11").typed({
//                strings: ['<p>“我们发改委主任在两会上提到西部的人才现状是“大学生跑出去一火车，回来一卡车”，当<br />下如火如荼的抢人大战使得人才空心化问题更加的凸显。从贵州、宁夏、陕西等地区的人<br />才流失数据可以看出这些问题，尤其是陕西省，三年间一直处于流失大于留住的状态。</p>'],
//                typeSpeed: 70,
//                loop: false,
//                contentType: 'html',
//                startDelay: 500,
//                loopCount: false
//            });
//            music_obj.play();
//        }, false);
    }
    function typed12(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page12.mp3';
        music_obj.play();
    }
    function typed13(){
        music_obj.src = 'http://www.shenblog.cn/wp-content/uploads/sunjie/page13.mp3';
        music_obj.play();
    }
</script>
</body>

</html>