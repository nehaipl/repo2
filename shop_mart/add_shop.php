<html>
<head>
<title>Add New Shop</title>
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
</style>
</head>
<body>
<div class="main">
      
<h3>Add New shops </h3><br/>
<div>
<?php $this->session->userdata('admin_ssn');?>
<?php

//open form
echo form_open_multipart('shop/add_shop1');


//User Name Field
echo form_label('Shop Name:', 'shop_name');
$data= array('type' => 'text','name' => 'shop_name','id'=>'shop_name','class'=>'label');
echo form_input($data);
echo "<br/><br/>";

//password
echo form_label('Shop Address:', 'shop_add');
$data= array('type' => 'text','name' => 'shop_address','id'=>'shop_address','class'=>'label');
echo form_input($data);
echo "<br/><br/>";

//Image
//echo form_label('Shop Logo:', 'shop_logo');
$data= array('type' => 'file','name' => 'shop_logo','id'=>'shop_logo');
echo form_input($data);
?>
</div>

<!-- SUbmit Button -->
<div>	
<?php
$data = array('type' => 'submit','value'=> 'Add', 'name'=>'add');
echo form_submit($data);?>
</div>

<!-- Form Close--->
<?php echo form_close();?>


</div> 



 </body>
</html>
