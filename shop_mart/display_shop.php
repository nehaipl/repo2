<?php
     defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
   <head>
		 <title>Display Board</title>
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
				 height:100%;
				 min-height:600px;
				 overflow:auto;
				
			 }
			 a{
				 text-decoration:none;
			 }
			 a:link {
               color: black;
             }
             
             /* visited link */
             a:visited {
               color:blueviolet;
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
				height:100%;
				overflow:auto;
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


			.logout1{
		 background-color: #ffffff; /* Green */
         border: 0 solid grey;
         color: black;
         /* padding: 15px 32px; */
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 15px;
         margin: 4px 2px;
         cursor: pointer;
         -webkit-transition-duration: 0.4s; /* Safari */
         transition-duration: 0.4s;
        }
		.logout1:hover{
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			/* background-color: #0da3d1; */
			background-color: black;
			color:white;
			font-size: 18px;

		}
		
	     </style>   

   </head>
   
   <body>
	     <div class="main_container"> 
           <div id='side_bar'>
			  <h4>MENU</h4>
			     <table>
                     <tr><a href="<?php echo "shop_list" ?>">Shops</a></tr><br><br>
					 <tr><a href="<?php echo "category_list" ?>">Category</a></tr><br><br>
					 <tr><a href="<?php echo "product_list" ?>">Products</a></tr><br>
			     </table>	 
			</div>
			<div id="display">
			<h1>SHOPS......</h1>

			<?php
				$this->session->userdata('admin_ssn');
				   $i=1;
				         echo "<table border=5, cellpadding='10'>";
				         echo "<tr>";
						  echo "<th>Shop_id</th>";
						  echo "<th>Shop_Name</th>";
						  echo "<th>Shop_Address</th>";
						  echo "<th>Shop_Logo</th>";
						  echo "<th>Shop_Update</th>";
						  echo "</tr>";
                   foreach($data as $row)
                    {  
						  echo "<tr>";
						  echo "<td>".$row->shop_id."</td>";
						  echo "<td>".$row->shop_name."</td>";
						  echo "<td>".$row->shop_address."</td>";
						  echo "<td><img src='http://localhost/projects/ci_start/image/$row->shop_logo' alt='image' name='shop_logo' width=60 height=60 /></td>";  
						  echo "<td><a href='update_shop1/$row->shop_id'><input type='button' class='logout1' name='update' id='update' value='Update'</a> </td>";
						  echo "</tr>";
						$i++;	  
					   } 
						 echo"</table>"; 
						 echo"<br><br>";
						 echo "<a href='add_shop'><input type='button' name='add' id='add' class='logout1' value='Add'</a>";  
						 echo "<a href='logout'><input type='button' name='logout' id='logout' class='logout1' value='Logout'</a>";  	
            	?>
        	</table>   

			<div>
		</div>			
   </body>	   
   
</html>   
