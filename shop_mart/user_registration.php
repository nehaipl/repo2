<html>
<head>
<title>User Registration form</title>

</head>
<body>
<div class="main">

<h3>user Registration Form </h3><br/>
<div id="form_input">
<?php $this->session->userdata('admin_ssn');?>
<?php

//open form
echo form_open('shop/user_dashboard');

//User Name Field
echo form_label('User Name:', 'user_name');
$data= array('type' => 'text','name' => 'user_name','id'=>'user_name');
echo form_input($data);
echo "<br/><br/>";

//password
echo form_label('Password:', 'user_password');
$data= array('type' => 'password','name' => 'user_password','id'=>'user_password');
echo form_input($data);
echo "<br/><br/>";


//city
echo form_label('City:', 'user_city');
$data= array('type' => 'password','name' => 'user_city','id'=>'user_city');
echo form_input($data);
?>
</div>

<!-- SUbmit Button -->
<div>	
<?php
$data = array('type' => 'submit','value'=> 'Register', 'name'=>'register');
echo form_submit($data);?>
</div>

<!-- FOrm Close--->
<?php echo form_close();?>


</div> 



 </body>
</html>
