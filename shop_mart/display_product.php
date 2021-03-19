<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
		 <title>Update Product</title>
		 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		 <style>
            .main_container{
				margin:0;
				padding:0;
				text-align:center;
			 }
			 #side_bar 
			 {
				 float:left;
				 background-color:#f0e0df;
				 width:15%;
				 min-height:600px;
				 overflow:auto;
			 }
			 a{
				 text-decoration:none;
			 }
			 a{
				 text-decoration:none;
			 }
			 a:link {
               color: black;
             }
             
             /* visited link */
             a:visited {
               color:black;
             }
             
             /* mouse over link */
             a:hover {
               color: blue;
             }
             
             /* selected link */
             a:active {
               color: red;
             }

			 #display{
				background-color:#f7f9fc;
				min-height:600px;
				height:70%;
				font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                 width: 100%;
			 }
			 table,td,th{
				margin-left: auto; 
                margin-right: auto;
				border: 1px solid #b8b8b8;
                border-collapse: collapse;
				text-align: center;
			}
			th{
				background-color:#f0e0df; 
			}

			#display tr:nth-child(even){background-color: #f2f2f2;}

            #display tr:hover {background-color: #ddd;}
			h1,th{
				color:#4d4d4d;
			}
	     </style>   

   </head>
   
   <body>
	     <div class="main_container"> 
           <div id='side_bar'>
			   <?php $this->session->userdata('admin_ssn');?>
			  <h4><a href="<?php echo "dashboard" ?>">MENU</a></h4>
			     <table>
                     <tr><a href="<?php echo "shop_list" ?>">Shops</a></tr><br><br>
					 <tr><a href="<?php echo "category_list" ?>">Category</a></tr><br><br>
					 <tr><a href="<?php echo "product_list" ?>">Products</a></tr><br>
			     </table>	 
			</div>
			<div id="display">
			<h1>Available Products......</h1>
				<?php				
				   $i=1;
				   echo "<table border=3, cellpadding='10'>";
				   echo "<tr>";
				   echo "<th>Product_id</th>";
				   echo "<th>Product_Name</th>";
				   echo "<th>Shop_Id</th>";
				   echo "<th>Categoty_Id</th>";
				   echo "<th>Update_product</th>";
				   echo "</tr>";
                   foreach($data as $row)
                    {  
                          echo "<tr>";
						  echo "<td>".$row->product_id."</td>";
						  echo "<td>".$row->product_name."</td>";
						  echo "<td>".$row->shop_id."</td>";
						  echo "<td>".$row->cat_id."</td>";
						  echo "<td><a href='update_product'><input type='button' name='update' id='update' value='Update' </td>";
						  echo "</tr>";						 
      	                   $i++;	  
					  }  
					   echo"</table>";  
					   echo '<br><br>';  
					   echo "<td><a href='add_product'><input type='button' name='add' id='add' value='Add' </td>"; 	
            	?>
    	</table>   

			<div>
		</div>			
   </body>	   
   
</html>   
