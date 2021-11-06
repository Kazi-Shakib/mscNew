<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
 $(document).ready(function(){
  
  $('#app_form').on('checkbox', function(event){
   event.preventDefault();
   if($('#captcha_code').val() == '')
   {
    alert('Enter Captcha Code');
    $('#info_yes').attr('disabled', 'disabled');
    return false;
   }
   else
   {
    alert('Form has been validate with Captcha Code');
    $('#app_form')[0].reset();
    $('#captcha_image').attr('src', 'txtimg.php');
   }
  });

  $('#captcha_code').on('blur', function(){
   var code = $('#captcha_code').val();
   
   if(code == '')
   {
    alert('Enter Captcha Code');
    $('#info_yes').attr('disabled', 'disabled');
   }
   else
   {
    $.ajax({
     url:"check_code.php",
     method:"POST",
     data:{code:code},
     success:function(data)
     {
      if(data == 'success')
      {
       $('#info_yes').attr('disabled', 'disabled');
       alert('Success');
       
      }
      else
      {
       $('#info_yes').attr('disabled', 'disabled');
       alert('Invalid Code');
      }
     }
    });
   }
  });

 });
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body><center>
<h1> <img width='100' src='logo.png'>  CUET Msc/ PhD Online Admission Form </h1>
<h3> MS / PhD Admission</h3>

<br>
</center>
<div class="container">
<form action="upload1.php" method="post" onsubmit="return app_form_validator(this)" name="app_form" id="app_form">

    <label for="type_msc_phd"> Admission Program</label>
 <select id="type_msc_phd" name="type_msc_phd">
      <option value="Msc">MSc</option>
      <option value="MSc-eng">Msc (Eng)</option>
      <option value="PhD">PhD</option>
      
    </select>

    <label for="name">Student Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>

    <label for="fname">Father Name</label>
    <input type="text" id="fname" name="f_name" placeholder="Your Father's name.." required>

   <tr>
			  <td align="left" valign="middle" bgcolor="#FFFFFF" class="black12">Validation Code<span class="red12">*</span></td>
			  <td align="center" valign="middle" bgcolor="#FFFFFF" class="black12">:</td>
			  <td align="left" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tbody><tr>
				  <td width="43%" align="left" valign="middle">
                           <input type="text" name="captcha_code" id="captcha_code" class="form-control" />
                           <span class="input-group-addon" style="padding:0">
        <img src="txtimg.php?12325" alt="CAPTCHA" id="captcha_image">
		<a href="#" id="refresh-captcha" class="align-middle" title="refresh"><i class="material-icons align-middle">refresh</i></a>
         </span>
         </td>
				<td width="20%" align="left" valign="middle"><span class="black10">« Enter the Code</span></td>
				</tr>

   <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2" class="black11">
            <input type="checkbox" name="info_yes" id="info_yes" onclick="agreesubmit(this)" required>
            The above information is correct and I would like to go to the next step.</td>
        </tr>
<tr>
          <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="black12">
            <tbody><tr>
              <td width="22%" align="left" valign="middle">&nbsp;Upload Photo</td>
              <td width="7%" align="center" valign="middle">:</td>
              <td width="51%" align="left" valign="middle">
              <label>
                <input name="photo" type="file" id="photo"  required>
              
              </label>
              </td>
              </tr>
   <tr>
          <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
            <input type="submit" name="okk" id="okk" value="   Submit Application  " ></td>
        </tr>
  </form>
</div>

</body>
</html>