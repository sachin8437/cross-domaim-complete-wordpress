<?php 

	include("header.php"); 
?>	

			<?php
				$site = "";
				if(!empty($_GET['site'])){
					$site = $_GET['site'];
				}
				
			?>
			<div class='container-full' >
				<ul class="nav nav-tabs">
				  <li><a href="index.php" >Visualize</a></li>
				  <li><a href="browse-leads.php" >Browse</a></li>
				  <li><a href="export-leads.php" >Export</a></li>
				  <li><a href="addlead-leads.php" >Add Lead</a></li>
			      <li class='active'><a href="show-lead.php" >Show Lead</a></li>
				</ul>
	
				<div style='height:30px;' ></div>
			</div>

<?php


 	$dbhost="localhost";
	$dbuser="quotesqm_admin";
	$password="R^88GmsJ4sYBCx";
	$dbname="quotesqm_leads";
	$conn = new mysqli($dbhost, $dbuser, $password, $dbname);
        
        
    $sql = "SELECT * FROM leads";
    $result = mysqli_query($conn, $sql);



 
     ?>
<style>
	
	.table-scroll {overflow: auto; width: 100%; display: inline-block;  border: 1px solid #ddd;}
	
	table {width: 100%; border-collapse: collapse; font-family: Arial;}
	
	table th, table td {padding: 8px 12px; text-align: center; font-size: 14px;}
	
	.table-scroll table tr:nth-child(2n) td, .table-scroll table thead tr th {color: #fff;}
	
	.show-lead .container-fluid {padding: 0 20px;}
	
	.table-scroll table tr:nth-child(2n), .table-scroll table thead tr {background: #428bca;}
	
	.table-scroll table thead tr th {padding: 12px;}
 }
	
</style>
<div class="show-lead">
    <div class="container-fluid">
        <div class="table-scroll">
        	<table>
        		<thead>
        			<tr>
        			    <th>Sr. No</th>
        				<th>Full Name</th>
        				<th>Email</th>
        				<th>Phone Number</th>
        				<th>Type</th>
        				<th>Your Area</th>
        				<th>Budget</th>
        				<th>Referral</th>
        				<th>Description</th>
        			
        			</tr>
        		</thead>
        		<tbody> 
				
        <?php 
               if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {  ?>
                      
                 <tr>

              
        			<td><?php echo $row['id']; ?></td>
        			<td><?php echo $row['full_name']; ?></td>
        			<td><?php echo $row['email']; ?></td>
        			<td><?php echo $row['phone']; ?></td>
        			<td><?php echo $row['type']; ?></td>
        			<td><?php echo $row['your_area']; ?></td>
        			<td><?php echo $row['budget']; ?></td>
        			<td><?php echo $row['referral']; ?></td> 
        			<td><?php echo $row['description']; ?></td>
        		</tr>
          <?php  } 
                }  ?>
        		
			</tbody>
        	</table>
        </div>
  </div>
</div>   
     
 


<?php  footer: include("footer.php"); ?>