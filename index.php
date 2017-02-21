<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Indie+Flower|Lato|Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="admission.css">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
        rel="Stylesheet" type="text/css" />

    <script type="text/javascript">

        $(function () {
            $('#textinput-20').datepicker({
                dateFormat: "dd/MM/yy",
                changeMonth: true,
                changeYear: true,
    //             minDate: '-30Y',
    // maxDate: '-3Y',
            yearRange: "1990:2020"

            });
            
        });
    </script>

<title>Admission form</title>
</head>
<body>
<div class="top_menu"><h1>MySchool Public School</h1></div>
<div class="top_line"></div>

<div class="top_gap"></div>
<form class="form-horizontal" action="next.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Admission Form</legend>
<div class="block1">
<!-- Text input-->
<span class="control-group">
  <span class="controls">
    <input id="textinput-0" name="first_name" type="text" placeholder="First Name" class="input-large" required="">
  <label class="control-label" for="textinput-0">*</label>
    
  </span>
</span>

<!-- Text input-->
<span class="control-group">
  <label class="control-label" for="textinput-2"></label>
  <span class="controls">
    <input id="textinput-2" name="middle_name" type="text" placeholder="Middle Name" class="input-large" required="">
    
  </span>
</span>

<!-- Text input-->
<span class="control-group">
  <span class="controls">
    <input id="textinput-1" name="last_name" type="text" placeholder="Last Name" class="input-large" required="">
  <label class="control-label" for="textinput-1">*</label>
    
  </span>
</span>

<!-- Text input-->
<div class="control-group">
  <div class="controls">
    <input id="textinput-20" name="date_of_birth" type="text" placeholder="Date of Birth" class="input-large" required="">
  <label class="control-label" for="textinput-20">*</label>
    
  </div>
</div>



<!-- Multiple Radios (inline) -->
<!-- <div class="control-group">
  <label class="control-label" for="">Gender</label>
  <div class="controls">
    <label class="radio inline" for="multipleradiosinline-0-0">
      <input type="radio" name="gender" id="gender0" value="Male" checked="checked" required="required">
      Male
    </label>
    <label class="radio inline" for="multipleradiosinline-0-1">
      <input type="radio" name="gender" id="gender1" value="Female" required="required">
      Female
    </label>
    <label class="radio inline" for="multipleradiosinline-0-2">
      <input type="radio" name="gender" id="gender2" value="Other" required="required">
      Other
    </label>
  </div>
</div> -->

<!-- Text input-->
<div class="control-group">
  <div class="controls">
    <input id="textinput-28" name="gender" type="text" placeholder="Gender" class="input-large" required="">
  <label class="control-label" for="textinput-28">*</label>
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-27"></label>
  <div class="controls">
    <input id="textinput-27" name="category" type="text" placeholder="Category" class="input-large" required>
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-8"></label>
  <div class="controls">
    <input id="textinput-8" name="email" type="text" placeholder="E-mail" class="input-large" required>
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-10"></label>
  <div class="controls">
    <input id="textinput-10" name="contact1" type="text" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Mobile" class="input-large" required=""  >
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-9"></label>
  <div class="controls">
    <input id="textinput-9" name="contact2" type="text" maxlength="11" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Telephone" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-26"></label>
  <div class="controls">
    <input id="textinput-26" name="aadhar_number" type="text" maxlength="12" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Aadhar no." class="input-large" required="" >
    
  </div>
</div>
<div class="break"></div>
</div>
<!-- block1 closed here -->
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-18"></label>
  <div class="controls">
    <input id="textinput-18" name="street_number" type="text" placeholder="Street no." class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-4"></label>
  <div class="controls">
    <input id="textinput-4" name="city" type="text" placeholder="City" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-5"></label>
  <div class="controls">
    <input id="textinput-5" name="state" type="text" placeholder="State" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-3"></label>
  <div class="controls">
    <input id="textinput-3" name="country" type="text" placeholder="Country" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-6"></label>
  <div class="controls">
    <input id="textinput-6" name="pin_code" type="text" maxlength="6" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="PIN Code" class="input-large" required="" >
    
  </div>
</div>
<div class="break"></div>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-24"></label>
  <div class="controls">
    <input id="textinput-24" name="grade" type="text" placeholder="Grade" class="input-large" required="">
    
  </div>
</div>
<div class="break"></div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-17"></label>
  <div class="controls">
    <input id="textinput-17" name="mother_name" type="text" placeholder="Mother's Name" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-21"></label>
  <div class="controls">
    <input id="textinput-21" name="mother_contact" type="text" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Mother's Mobile no." class="input-large" required=""  >
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-16"></label>
  <div class="controls">
    <input id="textinput-16" name="mother_aadhar_number" type="text" maxlength="12" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Mother's Aadhar no." class="input-large" required="" >
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-11"></label>
  <div class="controls">
    <input id="textinput-11" name="mother_email" type="text" placeholder="Mother's E-mail" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-12"></label>
  <div class="controls">
    <input id="textinput-12" name="mother_occupation" type="text" placeholder="Mother's occupation" class="input-large" required="">
    
  </div>
</div>
<div class="break"></div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-7"></label>
  <div class="controls">
    <input id="textinput-7" name="father_name" type="text" placeholder="Father's Name" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-22"></label>
  <div class="controls">
    <input id="textinput-22" name="father_contact" type="text" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Father's Mobile no." class="input-large" required="" >
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-15"></label>
  <div class="controls">
    <input id="textinput-15" name="father_aadhar_number" type="text" maxlength="12" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Father's Aadhar no." class="input-large" required="" >
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-13"></label>
  <div class="controls">
    <input id="textinput-13" name="father_email" type="text" placeholder="Father's E-mail" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-14"></label>
  <div class="controls">
    <input id="textinput-14" name="father_occupation" type="text" placeholder="Father's occupation" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput-23"></label>
  <div class="controls">
    <input id="textinput-23" name="family_income" type="text" maxlength="15" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Family Income" class="input-large" required="" >
    
  </div>
</div>
<input class="submit" type="submit" name="submit" value="SUBMIT">
</fieldset>
</form>


</body>
</html>