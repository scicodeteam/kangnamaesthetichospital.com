<style>
.slider_1_0_1 {
    position: relative;
    z-index: 0;
}
.slider_1_0_1_item img{
    width:100%;
    height:auto;
    display:block;
}
.slider_1_0_1 .slider_scroll {
    display: flex;
    justify-content: center;
    margin: -80px auto 0;
    align-items: center;
    padding-bottom: 20px;
}

.slider_1_0_1 .slider_scroll p {
    padding-right: 10px;
    color: #ded8d8;
    margin: 0;
}

.slider_1_0_1 .scroll-indicator {
    width: 30px;
    height: 50px;
    border: 2px solid #fff;
    border-radius: 50px;
    position: relative;
    z-index: 1;
}

.slider_1_0_1 .scroll-indicator::before {
    content: "";
    position: absolute;
    z-index: 2;
    top: .5em;
    left: 50%;
    width: 10px;
    height: 10px;
    background-color: #fff;
    border-radius: 50%;
    transform: translate(-50%, 0);
    animation: scrollAnim 1.8s .5s infinite ease-in;
}

@keyframes scrollAnim {
    0% {
        transform: translate(-50%, 0) rotateX(0);
        opacity: 0;
    }

    5% {
        opacity: .5;
    }

    15% {
        opacity: 1;
    }

    90%,
    100% {
        opacity: 0;
    }

    100% {
        transform: translate(-50%, 30px) rotateX(30deg);
    }
}

.slider_1_0_1 img {
    display: block;
    width: 100%;
}

.slider_1_0_1 .tns-nav {
    position: absolute;
    bottom: 50px;
    left: 0;
    width: 100%;
    z-index: 1;
}

.slider_1_0_1 .tns-nav button {
    width: 12px;
    height: 12px;
    background: none;
    border: 1px solid #fff;
}

.slider_1_0_1 .tns-nav button.tns-nav-active {
    background: #fff;
}

.slider_1_0_1 .tns-controls {
    margin-bottom: 0;
}

.slider_1_0_1 .tns-controls button {
    background: none;
    color: #fff;
    font-size: 40px;
    height: auto;
}

.slider_1_0_1 .tns-controls button:nth-child(1) {
    position: absolute;
    top: 40%;
    left: 30px;
    z-index: 1;
}

.slider_1_0_1 .tns-controls button:nth-child(2) {
    position: absolute;
    top: 40%;
    right: 30px;
    z-index: 1;
}

.slider_1_0_1 button[data-action=stop] {
    display: none;
}

.slider_1_0_1 button[data-action=start] {
    display: none;
}

@media (max-width: 1440px) {
    .slider_1_0_1 .tns-controls {
        padding: 0 60px;
        top: 43%;
    }

    .slider_1_0_1 .tns-controls button {
        font-size: 30px;
    }
}

@media (max-width: 1024px) {
    .slider_1_0_1 {
        margin-top: 0;
    }
}

@media (max-width: 480px) {
    .slider_1_0_1 {
        height:500px;
    }
    .slider_1_0_1 .slider_scroll {
        display: none;
    }

    .slider_1_0_1 .tns-controls {
        padding: 0;
        top: 43%;
    }

    .slider_1_0_1 .tns-controls button {
        font-size: 25px;
    }

    .slider_1_0_1 .tns-nav {
        bottom: 10px;
        margin: 0;
    }

    .slider_1_0_1 .tns-nav button {
        width: 8px;
        height: 8px;
    }

    .slider_1_0_1 .tns-nav button:nth-child(1) {
        left: 0px;
    }

    .slider_1_0_1 .tns-nav button:nth-child(2) {
        right: 0px;
    }
}
@media (max-width:375px){
    .slider_1_0_1 {
        height:460px
    }
}
@media (max-width:360px){
    .slider_1_0_1 {
        height:440px
    }
}
@media (max-width:320px){
    .slider_1_0_1 {
        height:382px;
    }
}
</style>