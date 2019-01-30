<script>
        //set date for count down
        var countDownDate = new Date("Jan 2, 2019 00:00:00").getTime();
        // update the counter down every 1 sec
        var countDownFunction = setInterval(function(){
        // get today date
        var now = new Date().getTime();
        // find distance btw now and countdown Date
        var distance = countDownDate - now ;
        // time calc for days, hours , minutes and seconds
        var days = Math.floor(distance /(1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60 )) / (1000 * 60 ));
        var seconds = Math.floor((distance % (1000 * 60)) / (1000 ));
        //output the result in element demo
        document.getElementById('demo').innerHTML = days + "D " + hours + "H " + minutes + "M " + seconds + "S ";
        //if the count down is over , write some text
        if(distance < 0) {
          clearInterval(countDownFunction);
          document.getElementById("demo").innerHTML = "Comming Soon";
        }

      }, 1000);

  </script>
