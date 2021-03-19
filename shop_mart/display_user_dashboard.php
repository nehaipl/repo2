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
				 /* height:100%; */
				 min-height:600px;
				 overflow:auto;
			 }

			 a{
				 text-decoration:none;
			 }
			 
			 #display{
				background-color:#d4d2d2;
				min-height:600px;
				height:70%;
			 }
			
			table,td{
				margin-left: auto; 
                margin-right: auto;
				border: 1px solid black;
                border-collapse: collapse;
			}
	     </style>   

   </head>
   
   <body>
	     <div class="main_container"> 
           <div id='side_bar'>
			  <h4>MENU</h4>
			     <table>
                     <tr><a href="<?php echo "shop_list1" ?>">Shops</a></tr><br><br>
					 
			     </table>	 
			</div>
			<div id="display">
				<h1>Welcome......IN....
					 <?php 
					 $ssn=$this->session->userdata('user_city');
					echo $ssn; 
					?> 
				</h1>

			<div>
		</div>			
   </body>	   
   
</html>   
