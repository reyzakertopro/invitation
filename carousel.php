    <style>
      .carousel{position: relative;}

      .carousel::before{
        position: absolute;
        content: "";
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        background: url("ilus/beige-pattern_1017-6203.png");
        background-size: cover;
        background-position: center;
        z-index: -1;
      }

      .slides{
        display: flex;
        position: relative;
        height: 100vh;
        max-width: 100vw;
        overflow: hidden;
      }

      .slides img{
        object-fit: cover;
        object-position: center bottom;
        position: absolute;
        height: 100%;
        width: 100%;
        transition: .75s;
        z-index: 0;
        left: 100%;
      }

      .slides::after{
        content: "";
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg, rgba(1, 1, 3, .25) 55%, rgba(255, 255, 255, 0) 80%);
        z-index: 2;
        position: absolute;
        top: 0;
        left: 0;
      }

      .slides .active{
        z-index: 1;
        left: 0;
      }

      .carousel .buttons{
        position: absolute;
        top: 50%;
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0 .5em;
        z-index: 3;
      }

      .buttons button{
        padding: 1em .65em;
        border-radius: .25em;
        background-color: rgba(1, 1, 3, .15);
        transition: .15s;
        color: rgba(255, 255, 255, .75);
        font-size: 110%;
        font-weight: 700;
      }

      .buttons button:hover{
        background-color: rgba(255, 255, 255, .25);
        color: rgba(1, 1, 3, .75);
      }

    </style>

      <div class="carousel">
        <div class="slides">
          <?php
          for($i= 0; $i< sizeof(scandir('./images')); $i++){
            if (!is_dir(scandir('./images')[$i])){
              echo '<img src="images/'. scandir('./images')[$i] .'" alt="gambar'. $i-1 .'">';

            }

          }

          ?>

        </div>
        <div class="buttons">
          <button type="button" name="prev"><i class="fa-solid fa-chevron-left"></i></button>
          <button type="button" name="next"><i class="fa-solid fa-chevron-right"></i></button>

        </div>

      </div>

    <script>
      const duration= 10* 60* 1000;
      const interval= 5* 1000;
      let remainingTime= duration;
      document.querySelector(".slides img:nth-child(1)").classList.add("active");

      // Function geser gambar selanjutnya
      function nextSlide(){
        for(let i= 0; i< document.querySelectorAll(".slides img").length; i++){
          if(document.querySelectorAll(".slides img")[i].classList.contains("active")){
            if(!document.querySelectorAll(".slides img")[i+1]){
              document.querySelectorAll(".slides img")[i].classList.remove("active");
              document.querySelectorAll(".slides img")[0].classList.add("active");
              break;

            } else{
              document.querySelectorAll(".slides img")[i].classList.remove("active");
              document.querySelectorAll(".slides img")[i+1].classList.add("active");
              break;

            }

          }

        }

      }

      // Function geser gambar sebelumnya
      function prevSlide(){
        for(let i= document.querySelectorAll(".slides img").length; i>= 0; i--){
          if(document.querySelectorAll(".slides img")[i]== document.querySelectorAll(".slides img.active")[0]){
            if(document.querySelectorAll(".slides img")[i-1]!= null){
              document.querySelectorAll(".slides img.active")[0].classList.remove("active");
              document.querySelectorAll(".slides img")[i-1].classList.add("active");
              break;

            } else{
              document.querySelectorAll(".slides img")[(document.querySelectorAll(".slides img").length)- 1].classList.add("active");
              document.querySelectorAll(".slides img.active")[0].classList.remove("active");
              break;

            }

          }

        }

      }

      // Function geser gambar otomatis
      function autoSlide(){
        nextSlide();
        remainingTime-= interval;
        if(remainingTime> 0){
          setTimeout(autoSlide, interval);

        }

      }

      autoSlide();
      document.querySelector(".buttons button:nth-child(2)").addEventListener('click', nextSlide);
      document.querySelector(".buttons button:nth-child(1)").addEventListener('click', prevSlide);

      // Function tanda panah
      function test(e){
        e= e|| window.event;
        if(e.key== "ArrowRight"){
          nextSlide();

        }
        else if(e.key== "ArrowLeft"){
          prevSlide();

        }

      }

      document.onkeydown= test;

    </script>
