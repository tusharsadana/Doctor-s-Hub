$(document).ready(function(){

  $("#submit").click(function(){

  
    var time = $("#apptime").val();
    var date = $("#appdate").val();
    

    if((time == "") || (date == "") ) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please enter the details.</div>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "login/submit.php",
        data: "apptime="+time+"appdate="+date,
        success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == "true"){

			$("#message").html(html);

					$('#submit').hide();
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>")
        }
      });
    }
    return false;
  });
});
