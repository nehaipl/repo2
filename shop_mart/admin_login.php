<html>
<head>
<title>Admin Login</title>
<style>

.main{
	
	width:28%;
	border:2px solid black;
	/* margin-left:38%; */
	/* display: block; */
	margin: 0 auto 1em; 
	padding: 1em;
	background-color: #d5dee8;
	box-shadow: 5px 10px 10px #d9dadb;
	
}
.label{
	float:right;
	background-color: #e6ebf0;	

}
.msg{
	color:red;

}
body{
	background-color: #f7fafc;
}
</style>
</head>
<body>
<div class="main">

<h3>Admin Login Form </h3><br/>
<div id="form_input">
<?php $this->session->userdata('admin_ssn');?>


<?php
if (isset($error)){
            foreach ($error as $key) {
               
					 echo"<div class='msg'>".($key['msg'])."</div>";
					 echo"<br><br>";                 
						}
					}
?>
<?php

//open form
echo form_open('shop/dashboard');



//User Name Field
echo form_label('Admin Name:', 'admin_name');
$data= array('type' => 'text','name' => 'admin_name','id'=>'admin_name','class'=>'label');
echo form_input($data);
echo "<br/><br/>";

//password
echo form_label('Password:', 'password');
$data= array('type' => 'password','name' => 'password','id'=>'password','class'=>'label');
echo form_input($data);
?>
</div>

<!-- SUbmit Button -->
<div>	
<?php
$data = array('type' => 'submit','value'=> 'Login', 'name'=>'login');
echo form_submit($data);?>
</div>

<!-- FOrm Close--->
<?php echo form_close();?>


</div> 



 </body>
</html>
