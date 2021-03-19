<html>
<head>
<title>Add New category</title>
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

<h3>Add New category </h3><br/>
<div >
<?php $this->session->userdata('admin_ssn');?>
<?php

//open form
echo form_open('shop/add_category1');

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
$data = array('type' => 'submit','value'=> 'Add', 'name'=>'add');
echo form_submit($data);?>
</div>

<!-- FOrm Close--->
<?php echo form_close();?>


</div> 



 </body>
</html>
