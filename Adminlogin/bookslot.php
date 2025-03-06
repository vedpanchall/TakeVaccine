<!DOCTYPE html>
<?php
include ("connect.php");
$query = "SELECT * FROM `slot_booked`";
  $res= $con->query($query);
?>

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Booked Slots</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="TakeVaccine/assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
        min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
		padding-bottom: 15px;
		background: #299be4;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn {
		color: #566787;
		float: right;
		font-size: 13px;
		background: #fff;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn:hover, .table-title .btn:focus {
        color: #566787;
		background: #f2f2f2;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.settings {
        color: #2196F3;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
    .text-success {
        color: #10c469;
    }
    .text-info {
        color: #62c9e8;
    }
    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2> <b>Booked Slots</b></h2>
						</div>
						<div>
						 
						 
						
   
		 </div>
                    </div>
                    
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>						
                        <th>Sub_User Name</th>
                        <th>State Name</th>
						<th>City Name</th>
						<th>Area Name</th>
						<th>Center Name</th>
						<th>Dose</th>
                       
                       
                    </tr>
                </thead>
                <body>
                <?php
 $i = 1;
           while ($row=$res->fetch_object())
			   
  {

	  
	    $user0 = "select * from sub_user where `SubUser_ID` = $row->SubUser_ID";
	    $res0= $con->query($user0);
		$row0=$res0->fetch_object();
		
	   $user1 = "select * from user where `id` = $row->User_ID";
	    $res1= $con->query($user1);
		$row1=$res1->fetch_object();
		
		$user2 = "select * from state where `State_ID` = $row->State_ID";
	    $res2= $con->query($user2);
		$row2=$res2->fetch_object();
		
		 $user3 = "select * from city where `City_ID`= $row->City_ID";
	    $res3= $con->query($user3);
		$row3=$res3->fetch_object();
		
		$user4 = "select * from vaccination_centre where `Area_ID` = $row->Area_ID";
	    $res4= $con->query($user4);
		$row4=$res4->fetch_object();
		
		$user5 = "select * from vaccination_centre where `Area_ID` = $row->Area_ID";
	    $res5= $con->query($user5);
		$row5=$res5->fetch_object();
    ?>
  
                
                   
                    <tr>
                        <td><?php echo $i++ ?></td>
                       
                       			
                        <td><?php echo $row1->name;?></td>
						 <td><?php echo $row0->Name;?></td>		
						 <td><?php echo $row2->State_Name;?></td>
						  <td><?php echo $row3->City_Name;?></td>
						   <td><?php echo $row4->Centre_Name;?></td>
						    <td><?php echo $row5->Centre_Name;?></td>
							 <td><?php echo $row->Dose;?></td>
 
                
                   </tr>
                <?php } ?> 
                   
                </tbody>
            </table>
          
        </div>
    </div>        
</div>     
</body>
</html>
