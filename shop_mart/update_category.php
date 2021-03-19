<html>
<head>
	<title>Update Category</title>
	
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

<h3>Update Category </h3><br/>
<div id="form_input">
<?php $this->session->userdata('admin_ssn');?>
<?php

//open form
echo form_open('shop/update_action_category');


//User id Field
echo form_label('Category ID:', 'cat_id');
$data= array('type' => 'text','name' => 'cat_id','id'=>'cat_id','class'=>'label');
echo form_input($data);
echo "<br/><br/>";


//User Name Field
echo form_label('Category Name:', 'category_name');
$data= array('type' => 'text','name' => 'category_name','id'=>'category_name','class'=>'label');
echo form_input($data);
echo "<br/><br/>";


?>
</div>

<!-- SUbmit Button -->
<div>	
<?php
$data = array('type' => 'submit','value'=> 'Update', 'name'=>'update');
echo form_input($data);?>
</div>

<!-- FOrm Close--->
<?php echo form_close();?>


</div> 



 </body>
</html>
