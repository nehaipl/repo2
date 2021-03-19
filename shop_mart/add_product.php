<html>
<head>
<title>Add New Product</title>
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

<h3>Add New Product </h3><br/>
<div >
<?php $this->session->userdata('admin_ssn');?>
<?php

//open form
echo form_open('shop/add_product1');


//User Name Field
echo form_label('Product Name:', 'product_name');
$data= array('type' => 'text','name' => 'product_name','id'=>'product_name','class'=>'label');
echo form_input($data);
echo "<br/><br/>";

//shop id
echo form_label('Shop Id:', 'shop_id');
$data= array('type' => 'text','name' => 'shop_id','id'=>'shop_id','class'=>'label');
echo form_input($data);
echo "<br/><br/>";

//cat id
echo form_label('Cat Id:', 'cat_id');
$data= array('type' => 'text','name' => 'cat_id','id'=>'cat_id','class'=>'label');
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
