<?php require "loginheader.php"; 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cancel Appointment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div >
        <a href="logout.php" style="float:right;">Logout</a>
      </div>
      <div><h4 class="form-signup-heading text-center">Cancel Your Appointment</h4>
      <form class=" form-signin" method="post" action="delete.php">
            <p>Name of the Doctor</P>  
          <select name="names" class="form-control" required>
										<option  value="Dr. Ajay Gupta">Dr. Ajay Gupta</option>
										<option value="Dr. Naveen Chhatwal">Dr. Naveen Chhatwal</option>
										<option value="Dr. Awantika Jain">Dr. Awantika Jain</option>	
										<option value="Dr. Shubham Mishra">Dr. Shubham Mishra</option>	
										<option value="Dr. Gagandeep Singh">Dr. Gagandeep Singh</option>	
										<option value="Dr. Sreshtha Verma">Dr. Sreshtha Verma</option>
									</select>
                  <br>
                  <p>Select Date and Time </p>
                  <input type="date" name="appdate" id="appdate" class="form-control">
                  <select name="apptime" id="apptime" class="form-control">

 
<option value="9:00 AM">9:00 AM</option>
<option value="9:15 AM">9:15 AM</option>
<option value="9:30 AM">9:30 AM</option>
<option value="9:45 AM">9:45 AM</option>
 
<option value="10:00 AM">10:00 AM</option>
<option value="10:15 AM">10:15 AM</option>
<option value="10:30 AM">10:30 AM</option>
<option value="10:45 AM">10:45 AM</option>
 
<option value="11:00 AM">11:00 AM</option>
<option value="11:15 AM">11:15 AM</option>
<option value="11:30 AM">11:30 AM</option>
<option value="11:45 AM">11:45 AM</option>
 
<option value="12:00 PM">12:00 PM</option>
<option value="12:15 PM">12:15 PM</option>
<option value="12:30 PM">12:30 PM</option>
<option value="12:45 PM">12:45 PM</option>
 
<option value="1:00 PM">1:00 PM</option>
<option value="1:15 PM">1:15 PM</option>
<option value="1:30 PM">1:30 PM</option>
<option value="1:45 PM">1:45 PM</option>
 
<option value="2:00 PM">2:00 PM</option>
<option value="2:15 PM">2:15 PM</option>
<option value="2:30 PM">2:30 PM</option>
<option value="2:45 PM">2:45 PM</option>
 
<option value="3:00 PM">3:00 PM</option>
<option value="3:15 PM">3:15 PM</option>
<option value="3:30 PM">3:30 PM</option>
<option value="3:45 PM">3:45 PM</option>
 
<option value="4:00 PM">4:00 PM</option>
<option value="4:15 PM">4:15 PM</option>
<option value="4:30 PM">4:30 PM</option>
<option value="4:45 PM">4:45 PM</option>
 
<option value="5:00 PM">5:00 PM</option>
<option value="5:15 PM">5:15 PM</option>
<option value="5:30 PM">5:30 PM</option>
<option value="5:45 PM">5:45 PM</option>
 
<option value="6:00 PM">6:00 PM</option>
<option value="6:15 PM">6:15 PM</option>
<option value="6:30 PM">6:30 PM</option>
<option value="6:45 PM">6:45 PM</option>
 
<option value="7:00 PM">7:00 PM</option>
<option value="7:15 PM">7:15 PM</option>
<option value="7:30 PM">7:30 PM</option>
<option value="7:45 PM">7:45 PM</option>
 
<option value="8:00 PM">8:00 PM</option>
<option value="8:15 PM">8:15 PM</option>
<option value="8:30 PM">8:30 PM</option>
<option value="8:45 PM">8:45 PM</option>
 
<option value="9:00 PM">9:00 PM</option>

</select>
<br>
                  <button name="submitit"  class="btn btn-lg btn-primary btn-block" type="submit">Cancel</button>

                
      </form>
      <a href="../index.php" style="float:right;">Book Appointment?</a>

      </div>
    </div>
     <!-- /container -->
     <style>
     
     </script>
  </body>
</html>
