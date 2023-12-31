<?php
    $path = get_template_directory_uri();
    $path = $path.'/Module/Popup/messenger_1_0_0/';
?>

<style>

        .messenger_1_0_0 {
            position: fixed;
            bottom: 40px;
            left: 0px;
            z-index: 3;
            width:20px;
        }
        .messenger_1_0_0-phone {
            background-color: transparent;
            width: 100px;
            height: 100px;
            cursor: pointer;
            z-index: 200000 !important;
            -webkit-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            -webkit-transition: visibility .5s;
            -moz-transition: visibility .5s;
            -o-transition: visibility .5s;
            transition: visibility .5s;
            right: 150px;
            top: 30px;
        }
        .messenger_1_0_0__circle {
            width: 130px;
            height: 130px;
            top: -40px;
            left: 0px;
            position: absolute;
            background-color: transparent;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid rgba(30, 30, 30, 0.4);
            opacity: 1;
            -webkit-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }
        .messenger_1_0_0__circle-fill {
            width: 80px;
            height: 80px;
            top: -15px;
            left: 23px;
            position: absolute;
            background-color: #000;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }
        .messenger_1_0_0__img-circle {
            width: 50px;
            height: 50px;
            top: 0;
            left: 40px;
            position: absolute;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            border: 2px solid transparent;
            opacity: 1;
            background: url(<?php echo $path ?>/images/messenger.png) no-repeat center center;
            -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin: 50% 50%;
            -moz-transform-origin: 50% 50%;
            -ms-transform-origin: 50% 50%;
            -o-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }
        .messenger_1_0_0-green .messenger_1_0_0__circle-fill {
            background-color: rgba(0, 175, 242, 0.5);
            opacity: 1 !important;
        }
        .messenger_1_0_0-green .messenger_1_0_0__circle {
            border-color: #00aff2;
            opacity: .5;
        }
        .messenger_1_0_0-green .messenger_1_0_0__img-circle {
            background-color: #fff;
        }
        .messenger_1_0_0 .mb {
            display: block;
        }

        @media (max-width: 1440px) {
            .messenger_1_0_0 {
                bottom: 30px;
                right: -20px;
            }
        }
        @media (max-width: 414px) {
            .messenger_1_0_0 {
                bottom: auto;
                top:57%;
                left:-25px;
                display:none;
            }
            .messenger_1_0_0 .mb {
                display: block;
            }
            .messenger_1_0_0-phone {
                width: 90px;
                height: 90px;
            }
        }
        @-moz-keyframes coccoc-alo-circle-anim {
            0% {
                transform: rotate(0) scale(0.5) skew(1deg);
                opacity: 0.1;
            }
            30% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.5;
            }
            100% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.1;
            }
        }
        @-webkit-keyframes coccoc-alo-circle-anim {
            0% {
                transform: rotate(0) scale(0.5) skew(1deg);
                opacity: 0.1;
            }
            30% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.5;
            }
            100% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.1;
            }
            }
        @keyframes coccoc-alo-circle-anim {
            0% {
                transform: rotate(0) scale(0.5) skew(1deg);
                opacity: 0.1;
            }
            30% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.5;
            }
            100% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.1;
            }
        }
        @-moz-keyframes coccoc-alo-circle-fill-anim {
            0% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.2;
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.2;
            }
            100% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.2;
            }
        }
        @-webkit-keyframes coccoc-alo-circle-fill-anim {
            0% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.2;
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.2;
            }
            100% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.2;
            }
        }
        @keyframes coccoc-alo-circle-fill-anim {
            0% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.2;
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
                opacity: 0.2;
            }
            100% {
                transform: rotate(0) scale(0.7) skew(1deg);
                opacity: 0.2;
            }
        }
        @-moz-keyframes coccoc-alo-circle-img-anim {
            0% {
                transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
                transform: rotate(0) scale(1) skew(1deg);
            }
        }
        @-webkit-keyframes coccoc-alo-circle-img-anim {
            0% {
                transform: rotate(0) scale(1) skew(1deg);
            }
            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
                transform: rotate(0) scale(1) skew(1deg);
            }
            100% {
                transform: rotate(0) scale(1) skew(1deg);
            }
        }
        @keyframes coccoc-alo-circle-img-anim {
        0% {
            transform: rotate(0) scale(1) skew(1deg);
        }
        10% {
            transform: rotate(-25deg) scale(1) skew(1deg);
        }
        20% {
            transform: rotate(25deg) scale(1) skew(1deg);
        }
        30% {
            transform: rotate(-25deg) scale(1) skew(1deg);
        }
        40% {
            transform: rotate(25deg) scale(1) skew(1deg);
        }
        50% {
            transform: rotate(0) scale(1) skew(1deg);
        }
        100% {
            transform: rotate(0) scale(1) skew(1deg);
        }
    }


</style>

    
<div class="messenger_1_0_0">
    <a href="https://www.messenger.com/t/Thammykangnam" class="container" target="_blank" rel="nofollow">
        <div class="messenger_1_0_0-phone messenger_1_0_0-green messenger_1_0_0-show">
            <div class="messenger_1_0_0__circle"></div>
            <div class="messenger_1_0_0__circle-fill"></div>
            <div class="messenger_1_0_0__img-circle"></div>
        </div>
    </a>
</div>
