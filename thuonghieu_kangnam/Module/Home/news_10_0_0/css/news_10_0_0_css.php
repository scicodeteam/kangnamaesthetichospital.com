<style>
  .news_10_0_0 {
    padding: 30px 0;
  }

  .news_10_0_0__box {
    display: flex;
    justify-content: space-between;
    margin: 5px auto 0;
  }

  .news_10_0_0__title {
    text-align: center;
    color: #0b365b;
    font-size: 32px;
    padding-bottom: 10px;
    font-weight: 600;
  }

  .news_10_0_0__item {
    width: 31.5%;
    border: 2px solid #efefef;
    border-radius: 0 0 20px 20px;
    box-shadow: rgba(247, 247, 247, 0.95) 0px 2px 8px;
  }

  .news_10_0_0__item img {
    width: 100%;
    display: block;
  }

  .news_10_0_0__intro {
    font-weight: 600;
    color: #0b365b;
    font-size: 20px;
    text-align: center;
    margin:0 0 10px;
  }

  .news_10_0_0__intro a {
    color: #0b365b;
  }

  .news_10_0_0__ct {
    padding: 20px;
  }
  @media (max-width:1024px){
    .news_10_0_0__item img{
      height:auto;
    }
  }
  @media (max-width:480px){
    .news_10_0_0{
      padding:20px 0;
    } 
    .news_10_0_0__box{
      flex-direction: column;
    }
    .news_10_0_0__item{
      width:100%;
      display: flex;
      box-shadow: none;
      border: none;
      border-radius: 0;
      margin-bottom: 10px;
    }
    .news_10_0_0__ct {
        padding: 10px 15px;
    }
    .news_10_0_0__des{
      display: none;
    }
    .news_10_0_0__title{
      font-size:21px;
    }
    .news_10_0_0__intro{
      font-size:15px;
      text-align: left;
    }
    .news_10_0_0__item img{
      width: 100px;
    }
    
  }
</style>