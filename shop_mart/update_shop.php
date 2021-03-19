<html>
<head>
<title>Update Shops Detail</title>
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

<h3>Update Shop Details</h3><br/>
<div id="form_input">
<?php $shop_data_ssn= $this->session->userdata('shop_data');
//   foreach($shop_data_ssn as $row)
//   {
// 	  echo $row;
// 	  echo"<br>";
//   }


?>
<?php

//open form
echo form_open_multipart('shop/upload');
//echo $this->session->userdata('shop_data');
//shop id
echo form_label('Shop Id:', 'shop_id');
$data= array('type' => 'text','name' => 'shop_id','id'=>'shop_id','value'=>'','class'=>'label');
echo form_input($data);
 

echo "<br/><br/>";

//User Name Field
echo form_label('Shop Name:', 'shop_name');
$data= array('type' => 'text','name' => 'shop_name','id'=>'shop_name','value'=>'','class'=>'label');
echo form_input($data);
echo "<br/><br/>";

//password
echo form_label('Shop Address:', 'address');
$data= array('type' => 'text','name' => 'shop_address','id'=>'shop_address','value'=>'','class'=>'label');
echo form_input($data);
echo'<br><br>';

//Image
//echo form_label('Shop Logo:', 'shop_logo');
$data= array('type' => 'file','name' => 'shop_logo','id'=>'shop_logo');
echo form_input($data);

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
