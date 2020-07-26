<!--footer-->
    <footer>
      <div class="wrapper">
        <!--logo-->
        <div id="logofooter"><img src="images/logob.svg" alt="logo" width="155" height="41" /></div>
        <!--columns with links-->
        <ul class="footerlinks temporary">
          <li class="mainlinks"><a href="#">Auto</a></li>
          <li><a href="#" title="Winnipeg Luxury Cars Services">Services</a></li>
          <li><a href="#" title="Winnipeg Luxury Cars Autoclub">Autoclub</a></li>
          <li><a href="#" title="Winnipeg Luxury Cars Accessories">Accessories</a></li>
        </ul>
        <ul class="footerlinks">
          <li class="mainlinks"><a href="#">Universe</a></li>
          <li><a href="#">History</a></li>
          <li><a href="#">Magazine</a></li>
          <li><a href="#">News</a></li>
        </ul>
        <ul class="footerlinks temporary">
          <li class="mainlinks"><a href="#">Brand</a></li>
          <li><a href="#">Mercedes-Benz</a></li>
          <li><a href="#">Lamborghini</a></li>
          <li><a href="#">Rolls-Royce</a></li>
          <li><a href="#">Ferrari</a></li>
          <li><a href="#">Lexus</a></li>
        </ul>
        <ul class="footerlinks">
          <li class="mainlinks"><a href="#">About</a></li>
          <li><a href="#">Mission</a></li>
          <li><a href="#">Awards</a></li>
          <li><a href="#">Team</a></li>
        </ul>
        <ul class="footerlinks">
          <li class="mainlinks"><a href="#">Contact</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Youtube</a></li>
          <li><a href="#">Twitter</a></li>
        </ul>
        <p class="clear"></p>
        <!--line-->
        <div class="line"></div>
        <!--bottom links-->
        <p class="bottomlinks">
            <a class="footer_link" href="#">Terms and Conditions</a> &#124;
            <a class="footer_link" href="#">Policy</a> &#124;
            <a class="footer_link" href="#">Legal</a> &#124;
            <a class="footer_link" href="#">Sitemap</a>
        </p>
        <!--copyright-->
        <p class="copyright">&copy; Alexandr Pasko, Web Development, 2019</p>
      </div>
    </footer>

    <script>
      /*humburger menu toggle class*/
      $(document).ready(function(){

        // variables for toggle links inner html
        var profile_reviews = true;
        
        $('#navcontainer').click(function(){
          $('#navcontainer').toggleClass('active')
        });

        $('div.search_div').click(function(){
          $('form.search_form').toggleClass('visible')
        });

        $('span.filter').click(function(){
          $('div.hidden_form').toggleClass('visible')
        });

        $('a#link_leave_review').click(function(){
          $('div.leave_review_hidden').toggleClass('visible');
          if(leave_review === true){
            $('a#link_leave_review').html("cancel review");
            leave_review = false;
          }else{
            $('a#link_leave_review').html("leave review");
            leave_review = true;
          }
        });

        $('a#link_see_reviews').click(function(){
          $('div.read_reviews_hidden').toggleClass('visible');
          if(see_reviews === true){
            $('a#link_see_reviews').html("hide reviews");
            see_reviews = false;
          }else{
            $('a#link_see_reviews').html("see reviews");
            see_reviews = true;
          }
        });

        $('a#reviews').click(function(){
          $('div.my_reviews').toggleClass('visible');
          if(profile_reviews === true){
            $('a#reviews').html("hide reviews");
            profile_reviews = false;
          }else{
            $('a#reviews').html("my reviews");
            profile_reviews = true;
          }
        });

      });
    </script>

  </body>
</html>