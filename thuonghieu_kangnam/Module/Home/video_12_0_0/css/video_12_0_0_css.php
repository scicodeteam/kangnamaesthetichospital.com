<style>
  .video_12_0_0 {
    padding: 30px 0;
  }

  .modal-clip {
    cursor: pointer;
  }

  .video_12_0_0__title {
    color: #0b365b;
    font-size: 32px;
    font-weight: 600;
    text-align: center;
  }

  .video_12_0_0__box {
    margin: 30px auto 0;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .video_12_0_0__video1 {
    width: 58%;
  }

  .video_12_0_0__video2 {
    width: 40%;
  }

  .video_12_0_0 .item1 {
    position: relative;
  }

  .video_12_0_0 .pic {
    border-radius: 0 0 15px 15px;
  }

  .video_12_0_0 .pic img {
    width: 100%;
    display: block;
  }

  .video_12_0_0 .pic::after {
    content: '';
    display: block;
    position: absolute;
    z-index: 1;
    background: url(<?php echo $path ?>/images/play.png) center no-repeat;
    transition: 0.3s ease-out;
    background-size: 100%;
    width: 60px;
    height: 60px;
    left: calc(50% - 23px);
    top: calc(50% - 55px);
    transition: 0.3s;
  }

  .video_12_0_0 .pic2 {
    width: 45%;
    position: relative;
  }

  .video_12_0_0 .pic2::after {
    width: 30px;
    height: 30px;
    left: calc(50% - 5px);
    top: calc(50% - 30px);
  }

  .video_12_0_0 .desc {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: rgba(25, 79, 136, 0.9);
    color: #fff;
    font-size: 18px;
    text-align: center;
    padding: 15px 5px;
    border-radius: 0 0 15px 15px;
  }

  .video_12_0_0 .item2 {
    display: flex;
    margin-bottom: 12px;
    position: relative;
  }

  .video_12_0_0 .item2 .desc {
    font-size: 13px;
    padding: 8px 5px;
  }

  .video_12_0_0 .desc2 {
    width: 55%;
    padding-left: 10px;
    color: #636363;
  }
  @media (max-width:768px){
    .video_12_0_0__video1{
        margin-bottom: 15px;
        width: 100%;
    }
    .video_12_0_0__video2{
        width: 100%;
    }
    .video_12_0_0__box{
      flex-direction: column;
    }
    .video_12_0_0 .pic img{
      height:auto;
    }
  }
  @media (max-width:480px){
    .video_12_0_0{
      padding:20px 0;
    }
    .video_12_0_0__box{
      flex-direction: column;;
    }
    .video_12_0_0__video1,.video_12_0_0__video2{
      width:100%
    }
    .video_12_0_0__title{
      font-size:21px;
    }
   
    .video_12_0_0__box{
      margin-top:10px;
    }
    .video_12_0_0 .desc{
      border-radius: 0;
    }
  }
</style>