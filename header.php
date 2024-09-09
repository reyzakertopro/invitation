<style>
  .head{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 100vh;
    width: 100%;
    background: linear-gradient(180deg, rgba(1, 1, 3, .55) 30%, rgba(255, 255, 255, 0) 90%), url("images/IMG_2843.JPG");
    background-size: cover;
    background-position: center;
    padding-top: 6em;
    background-repeat: no-repeat;
  }

  .head .wrapper{
    width: fit-content;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: 'Kaushan Script', cursive;
    color: #fff;
    gap: .5em;
    padding: .5em;
    position: relative;
  }

  .head .wrapper p:nth-child(1){
    font-size: 400%;
    line-height: 1em;
    text-align: center;
    padding-bottom: .25em;
  }

  .head .wrapper p:nth-child(1)::after{
    background-color: #fff;
    content: "";
    width: 90%;
    height: 1px;
    position: absolute;
    top: 1.35em;
    left: 5%;
  }

  .head .wrapper p:nth-child(1)::before{
    background-color: #fff;
    content: "";
    width: 90%;
    height: 1px;
    position: absolute;
    top: 0;
    left: 5%;
  }

  .head .wrapper p:nth-child(2){font-size: 105%;}

  .head .wrapper .alamat{
    text-align: center;
    font-family: 'Bad Script', cursive;
    font-size: 125%;
    line-height: 1.5em;
  }

  .scroll{
    color: #fff;
    text-align: center;
    font-weight: 100;
    font-size: 90%;
    padding-bottom: .75em;
    display: flex;
    flex-direction: column;
    gap: .15em;
  }

  .date{
    font-family: 'Barlow', sans-serif;
    font-size: 140%;
    font-weight: 600;
    display: flex;
    gap: .5em;
    justify-content: center;
    align-items: center;
  }

  .date div{
    display: flex;
    flex-direction: column;
    text-align: center;
    line-height: 1.15em;
  }

  .date div span:nth-child(1){
    font-size: 150%;
    font-weight: 600;
  }

  .date div span:nth-child(2){
    font-size: 80%;
    font-weight: 100;
  }

  .date span{font-weight: 500;}

</style>

<div class="head">
  <div class="wrapper">
    <p>Adam & Hawa</p>
    <p>Akan menikah</p>
    <div class="date">
      <span>Senin</span>
      <span>|</span>
      <div>
        <span>01</span>
        <span>2024</span>

      </div>
      <span>|</span>
      <span>Januari</span>

    </div>
    <div class="alamat">
      <span>Perumahan Binong Permai, Kec. Curug</span>
      <br>
      <span>Tangerang - Banten</span>

    </div>

  </div>

  <div class="scroll">
    <span><i class="fa-solid fa-sort-up"></i></span>
    <span>Geser Keatas</span>

  </div>

</div>

<script>
    window.addEventListener('scroll', function(){
      if(scrollY> 0){
        document.querySelector("audio").play();

      }

    });

  </script>
