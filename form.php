<div class="feedback_form">
        <div class="successBox">
          <p class="cr">Thank you for the feedback!</p>
        </div>
        <form>
          <h1 class="cr">Your feedback matters</h1>
          <p class="pr"  id="rate">
            Rate your experience with us
          </p>
          <div class="radio_input d-flex">
            <div class="radio_option">
              <input type="radio" name="rate"  value="Excelent"/>
              <label for="">Excelent</label>
            </div>
            <div class="radio_option">
              <input type="radio" name="rate" id="" value="Good"/>
              <label for="">Good</label>
            </div>
            <div class="radio_option">
              <input type="radio" name="rate" id="" value="Average"/>
              <label for="">Average</label>
            </div>
            <div class="radio_option">
              <input type="radio" name="rate" id="" value="Bad"/>
              <label for="">Bad</label>
            </div>
            <div class="radio_option">
              <input type="radio" name="rate" id="" value="Worst"/>
              <label for="">Worst</label>
            </div>
          </div>
          <p class="pr" id="commentLabel">Have a suggestion or a comment? Share with us</p>
          <input type="text" name="" id="comment" placeholder="Text" />
          <p class="pr" id="emailLabel">Write your email address</p>
          <input type="email" name="" id="email" placeholder="Text" />
          <br />
          <button id="send" type="button">send</button>
        </form>
      </div>

      <script>
        $("#send").on("click", function(){
          var rate = $("input[name='rate']:checked").val();
          var comment = $("#comment").val().trim();
          var email = $("#email").val().trim();
          if(!rate)
              $("#rate").css("color","#db0404");
          if(!comment)
            $("#commentLabel").css("color","#db0404");
          if(!email)
            $("#emailLabel").css("color","#db0404");
          if(!rate || !comment || !email)
            return
          $.ajax({
            url: "<?php echo get_template_directory_uri(); ?>/ajax/mail.php",
            type: "POST",
            cache:false,
            data:{"rate":rate,"comment":comment,"email":email},
            dataType: "html",
            beforeSend: function(){
              $(".send").prop("disabled",true);
            },
            success: function(data){
              $("form").css("animation","hide 1s forwards")
              $(".successBox").css("animation","show 1s forwards");
              setTimeout(function () {
                $(".successBox").css("animation","hide 1s forwards");
                $("form").css("animation","show 1s forwards");
                },2000)
                $("#comment").val('');
                $("#email").val('');
                $("input[name='rate']").each(function () {
                  $(this).prop('checked', false);
                })
            }
          })
        })
        $("input[name='rate']").on("click",function(){
          $("#rate").css("color","#fff");
        })
        $("#comment").on("click",function(){
          $("#commentLabel").css("color","#fff");
        })
        $("#email").on("click",function(){
          $("#emailLabel").css("color","#fff")
        })
      </script>