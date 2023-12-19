<style>
    .sidebar_1_1_0 {
        height: 100%;
    }
    .sidebar_1_1_0 .sidefix{
        position: fixed;
        top: 50px;
        width: 15%;
    }
    .sidebar_1_1_0 .sidefix.sidefixx{
        bottom: 0;
        top: auto;
        height: 1060px;
    }
    .sidebar_1_1_0 #stick{
        position: sticky;
        top: 90px;
    }
    .sidebar_1_1_0 #stick .sidebar_1_1_0__title{
        display: none;
    }
    .sidebar_1_1_0 .sidefix .sidebar_1_1_0__title{
        display: block !important;
    }
    .sidebar_1_1_0 {
        margin-left: -10px;
    }
    .sidebar_1_1_0 figure {
        margin: 20px 0;
    }
    .sidebar_1_1_0__title2 {
        text-align: center;
        background: #266fa8;
        color: #fff;
        padding: 10px;
        font-size: 18px;
        border-radius: 20px 20px 0 0;
    }
    .sidebar_1_1_0__title {
        text-transform: uppercase;
        padding: 5px 0;
        font-size: 18px;
        border-bottom: 1px solid #005699;
        position: relative;
        font-weight: 600;
        display: table;
        color: #005699;
    }
    .sidebar_1_1_0__list {
        background: #eee;
        padding: 10px 40px;
        margin-bottom: 20px;
        border-radius: 0 0 20px 20px;
    }
    .sidebar_1_1_0__list ul {
        list-style: none;
        margin:0;
        padding-left: 0;
    }
    .sidebar_1_1_0__list li {
        padding: 8px 16px 8px 0;
        border-bottom: 1px solid #d1d1d1;
    }
    .sidebar_1_1_0__list li a{
        color:#005699;
        font-size:16px;
    }
    .sidebar_1_1_0__list li:last-child {
        border: none;
    }
    .sidebar_1_1_0__list li a:hover{
        color: #f3664a;
        transition: all 0.4s;
    }
    .sidebar_1_1_0__banner img {
        max-width: 100%;
        display: block;
    }
    .sidebar_1_1_0__newsOther {
        margin-top: 20px;
    }
    .sidefix .sidebar_1_1_0__newsOther{
        height:240px;
        overflow: hidden;

    }
    .sidebar_1_1_0__newsOther ul {
        padding-left: 0;
        list-style: none;
    }
    .sidebar_1_1_0__newsOther li {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
        overflow: hidden;
        height:66px;
    }
    .sidebar_1_1_0__newsOther__pic {
        width: 25%;
        margin-right: 10px;
    }
    .sidebar_1_1_0__newsOther__pic img {
        width: 100%;
        border-radius: 4px;
    }
    .sidebar_1_1_0__newsOther__des {
        width: 70%;
        display: flex;
        align-items: center;
    }
    .sidebar_1_1_0__newsOther__title {
        font-size: 14px;
    }
    .sidebar_1_1_0__newsOther__title a{
        color:#000;
    }
    .sidebar_1_1_0__clip .modal-clip {
        display: block;
        max-width: 550px;
        position: relative;
        cursor: pointer;
        background: #000;
    }
    .sidebar_1_1_0__clip .modal-clip::before {
        content: "";
        display: block;
        position: absolute;
        z-index: 1;
        background: url(<?php echo $path ?>/images/clip-icon.png) center no-repeat;
        transition: .3s ease-out;
        background-size: 100%;
        width: 50px;
        height: 50px;
        left: calc(50% - 23px);
        top: calc(50% - 23px);
        transition: .3s;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        opacity: 1;
    }
    .sidebar_1_1_0__clip .modal-clip img {
        position: relative;
        opacity: .9;
        display: block;
        width: 100%;
        height: auto;
    }
    .sidebar_1_1_0__slide .tns-outer {
        position: relative;
    }
    .sidebar_1_1_0__slide .tns-outer img {
        width: 100%;
        display: block;
    }
    .sidebar_1_1_0__slide .tns-controls button:nth-child(1) {
        position: absolute;
        left: 0;
        top: 50%;
        padding: 0;
        width: 25px;
        height: 25px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
    }
    .sidebar_1_1_0__slide .tns-controls button:nth-child(2) {
        position: absolute;
        right: 0;
        top: 50%;
        padding: 0;
        width: 25px;
        height: 25px;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
    }
    .sidebar_1_1_0__slide .tns-nav {
        display: none;
    }
    
    @media (max-width: 1440px) {
        .sidebar_1_1_0 .sidefix{
            width: 18%;
        }
        .sidebar_1_1_0 .sidefix.sidefixx{
            height: 1000px;
        }
    }
    @media (max-width: 1366px) {
        .sidebar_1_1_0 .sidefix{
            width: 21%;
        }
        .sidebar_1_1_0 .sidefix.sidefixx{
            height: 1060px;
        }
    }
    @media (max-width: 1280px) {
        .sidebar_1_1_0 .sidefix{
            width: 20%;
        }
        .sidebar_1_1_0 .sidefix.sidefixx{
            height: 990px;
        }
    }
    @media (max-width: 1024px) {
        .sidebar_1_1_0 img {
        width: 100%;
        }
        .sidebar_1_1_0 .sidefix{
            width: 22%;
        }
        .sidebar_1_1_0__title {
            font-size:16px;
        }
    }
    @media (max-width: 812px) {
        .sidebar_1_1_0 {
        display: none;
        }
    }
</style>