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
				 min-height:600px;
				 overflow:auto;
			 }
			 a{
				 text-decoration:none;
			 }
			 #display{
				background-color:#f7f9fc;
				min-height:600px;
				height:70%;
				background-image: url('http://localhost/projects/ci_start/backgroun3.jpg');
				background-repeat: no-repeat;
                background-attachment: fixed;
				background-size: cover;
                /* background-position: center;  */
				/* background-image: url('logo1.jpg'); */
			 }
			 table,td,th{
				margin-left: auto; 
                margin-right: auto;
				border: 3px solid #4d4d4d;
                border-collapse: collapse;
			}
			h1,th{
				color:#4d4d4d;
			}
			

			
		#logout {
		 background-color: #21421a; /* Green */
         border: 2px solid white;
         color: white;
         padding: 15px 32px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 20px;
         margin: 4px 2px;
         cursor: pointer;
         -webkit-transition-duration: 0.4s; /* Safari */
         transition-duration: 0.4s;
        }
		.logout1:hover{
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
			
	     </style>   

   </head>
   
   <body>
	     <div class="main_container"> 
           <!-- <div id='side_bar'>
			  <h4>MENU</h4>
			     <table>
                     <tr><a href="<?php echo "shop_list" ?>">Shops</a></tr><br><br>
					 <tr><a href="<?php echo "category_list" ?>">Category</a></tr><br><br>
					 <tr><a href="<?php echo "product_list" ?>">Products</a></tr><br>
			     </table>	 
			</div> -->
			<div id="display">
			<h1>SHOPS......IN....
					 <?php 
					  $ssn=$this->session->userdata('user_city');
					  echo $ssn; 
					?> 
		    </h1>

			<!-- <?php foreach ($shop_logo as $item => $value):?>
           <li><?php echo $item;?>: <?php echo $value;?></li>
           <?php endforeach; ?>  -->
				<?php
				 $this->session->userdata('user_city');
				   $i=1;
				          echo "<table border=3, cellpadding='10'>";
				          echo "<tr>";
						  echo "<th>Product_id</th>";
						  echo "<th>Product_Name</th>";
						  echo "<th>Shop_name</th>";
						  echo "<th>Shop_Address</th>";
						  echo "</tr>";

                   foreach($data as $row)
                    {  						
                           echo "<tr>";
						   echo "<td>".$row->product_id."</td>";
						   echo "<td>".$row->product_name."</td>";
						   echo "<td>".$row->shop_name."</td>";
						   echo "<td>".$row->shop_address."</td>";
						   echo "</tr>";
						$i++;	  
					   } 
						 echo"</table>"; 
						 echo"<br><br>";
						 
						 echo "<a href='logout_user'><input type='button' class='logout1' name='logout' id='logout' value='Logout'</a>";  	
            	?>
    	</table>   

			<div>
		</div>			
   </body>	   
   
</html>   
