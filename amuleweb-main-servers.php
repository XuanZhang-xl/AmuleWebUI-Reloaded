<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>aMule Control Panel - Server List</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Inclusion of bootstrap css -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha384-/Gm+ur33q/W+9ANGYwB2Q4V0ZWApToOzRuA8md/1p9xMMxpqnlguMvk8QuEFWA1B" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" integrity="sha384-7tY7Dc2Q8WQTKGz2Fa0vC4dWQo07N4mJjKvHfIGnxuC4vPqFGFQppd9b3NWpf18/" crossorigin="anonymous">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" integrity="sha384-BD3p+z3TqIhBK2OaMBRzK4Nz02t4OQcwrEkJxy3PAqU2Rwm1giS6RCgvBDk6+iPH" crossorigin="anonymous">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" integrity="sha384-oFMgcGzKX7GaHtF4hx14KbxdsGjyfHK6m1comHjI1FH6g4m6qYre+4cnZbwaYbHD" crossorigin="anonymous"></script>

	<script type="text/Javascript">
		$(function () { $("[data-toggle='tooltip']").tooltip(); });
		$(function () { $("[data-toggle='popover']").popover(); });
	</script>

	<!-- Style for navigation bar -->
	<style type="text/css">
		body {
			padding-top: 60px;
			background-color: #eee;
		}
		.logo-nav {
			height: 40px;
			width: 40px;
		}
		.navbar-brand {
			padding-top: 5px;
		}
		.btn-dark {
			background-color: hsl(0, 0%, 16%) !important;
			background-repeat: repeat-x;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#5b5b5b", endColorstr="#282828");
			background-image: -khtml-gradient(linear, left top, left bottom, from(#5b5b5b), to(#282828));
			background-image: -moz-linear-gradient(top, #5b5b5b, #282828);
			background-image: -ms-linear-gradient(top, #5b5b5b, #282828);
			background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5b5b5b), color-stop(100%, #282828));
			background-image: -webkit-linear-gradient(top, #5b5b5b, #282828);
			background-image: -o-linear-gradient(top, #5b5b5b, #282828);
			background-image: linear-gradient(#5b5b5b, #282828);
			border-color: #282828 #282828 hsl(0, 0%, 11%);
			color: #fff !important;
			text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
			-webkit-font-smoothing: antialiased;
		}
	</style>

	<!-- Tables -->
	<style type="css/text">
		.panel-tr {		
			width: 95%;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;
		}
		.panel-center {
			text-align: center;
			margin: auto;
		}
		.glyphicon-green {
			color: #00CC33;
		}
		.glyphicon-red {
			color: #B00000;
		}

	</style>

	<!-- Styling for footer -->
	<style text="css/text">
		#footer {
			position: fixed;
			bottom: 0;
			width: 100%;
			/* Set the fixed height of the footer here */
			height: 45px;
			background-color: #f5f5f5;
		}
		#ed2link {
			margin-right: 5px;
			width: 120px;
		}
		#selectcat {
			border-radius: 0px;
			width: 100px;
		}
		#formed2link {
			margin: 5px;
		}
	</style>

</head>
<body>
	<!-- Navigation bar :: This part will be common in all the scripts -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="logo-nav.png" class="logo-nav"> aMule WebUI</a>
	    	<form class="navbar-form navbar-right" role="form" name="login">
				<div class="collapse navbar-collapse">
					<div class="btn-group">
						<!-- Downloads -->
						<a class="btn btn-dark navbar-link" title="Downloads and Uploads" href="amuleweb-main-dload.php">
				   			<span class="glyphicon glyphicon-transfer"></span>
				   		</a>
				   		<!-- Shared -->
				   		<a class="btn btn-dark navbar-link" title="Sharing" href="amuleweb-main-shared.php">
					   			<span class="glyphicon glyphicon-share"></span>
				   		</a>
				   		<!-- Search -->
				   		<a class="btn btn-dark navbar-link" title="Search" href="amuleweb-main-search.php">
					   		<span class="glyphicon glyphicon-search"></span>
					   	</a>
				   		<!-- Servers -->
				   		<a class="btn btn-dark navbar-link" title="Servers" href="amuleweb-main-servers.php">
					   		<span class="glyphicon glyphicon-tasks"></span>
					   	</a>
				   		<!-- Kad -->
				   		<a class="btn btn-dark navbar-link" title="Kademlia" href="amuleweb-main-kad.php">
					   		<span class="glyphicon glyphicon-asterisk"></span>
					   	</a>
				   		<!-- Stats -->
				   		<a class="btn btn-dark navbar-link" title="Statistics" href="amuleweb-main-stats.php">
					   		<span class="glyphicon glyphicon-stats"></span>
					   	</a>
				   	</div>
				   	<div class="btn-group">
						<!-- Configuration -->
						<a class="btn btn-dark navbar-link" title="Configurations" href="amuleweb-main-prefs.php">
					   		<span class="glyphicon glyphicon-cog"></span>
					   	</a>
				   		<!-- Log -->
				   		<a class="btn btn-dark navbar-link" title="Log" href="amuleweb-main-log.php">
					   		<span class="glyphicon glyphicon-flag"></span>
					   	</a>
				   		<!-- Exit -->
				   		<a class="btn btn-danger navbar-link" title="Exit" href="login.php">
				   			<span class="glyphicon glyphicon-off"></span>
				   		</a>
				   	</div>
		    	</div>
    		</form>
    		</div><!--/.navbar-collapse -->
    	</div>
    </nav>

    	<!-- Center table -->
	<div class="container-fluid panel-tr">
		
		<!-- Table Download -->
		<div class="panel panel-default" style="margin-bottom: 60px;">
		<div class="panel-heading panel-center" style="text-align:center;"><h4>SERVERS</h4></div>
			<table class="table">
				<thead>
					<tr>
						<th style="width:55px;"></th>
						<th><a href="amuleweb-main-servers.php?sort=name">Server name</a></th>
						<th><a href="amuleweb-main-servers.php?sort=desc">Description</a></th>
						<th>Address</th>
						<th><a href="amuleweb-main-servers.php?sort=users">Users</a></th>						
						<th><a href="amuleweb-main-servers.php?sort=files">Files</a></th>						
					</tr>
				</thead>
				<tbody>

					<?php

						$sort_order;$sort_reverse;

						function my_cmp($a, $b) {
							global $sort_order, $sort_reverse;
							switch ( $sort_order) {
								case "name": $result = $a->name > $b->name; break;
								case "desc": $result = $a->desc > $b->desc; break;
								case "users": $result = $a->users > $b->users; break;
								case "files":$result = $a->files > $b->files; break;
							}

							if ( $sort_reverse ) {
								$result = !$result;
							}
							return $result;
						}

						$servers = amule_load_vars("servers");

						$sort_order = $HTTP_GET_VARS["sort"];

						if ( ($HTTP_GET_VARS["cmd"] != "") and ($HTTP_GET_VARS["ip"] != "") and ($HTTP_GET_VARS["port"] != "")) {
							if ($_SESSION["guest_login"] == 0) {
								amule_do_server_cmd($HTTP_GET_VARS["ip"], $HTTP_GET_VARS["port"], $HTTP_GET_VARS["cmd"]);
							}
						}

						if ( $sort_order == "" ) {
							$sort_order = $_SESSION["servers_sort"];
						} else {
							if ( $_SESSION["sort_reverse"] == "" ) {
								$_SESSION["sort_reverse"] = 0;
							} else {
								$_SESSION["sort_reverse"] = !$_SESSION["sort_reverse"];
							}
						}

						$sort_reverse = $_SESSION["sort_reverse"];
						if ( $sort_order != "" ) {
							$_SESSION["servers_sort"] = $sort_order;
							usort(&$servers, "my_cmp");
						}
						foreach ($servers as $srv) {
							echo "<tr>";
							
							if ($_SESSION["guest_login"] != 0) {
								echo "<td class='texte' align='center'></td>";
							} else {
								echo 	'<td  style="width:55px;">',
											'<a href="amuleweb-main-servers.php?cmd=connect&ip=', $srv->ip, '&port=', $srv->port, '">
												<span class="glyphicon glyphicon-plus-sign glyphicon-green" style="color: #00B000;"></span>
											</a>',
											'<a href="amuleweb-main-servers.php?cmd=remove&ip=', $srv->ip, '&port=', $srv->port, '">
												<span class="glyphicon glyphicon-minus-sign glyphicon-green" style="color: #B00000;"></span>
											</a>',
									'</td>';
							}

							echo '<td style="font-size:12px;"><b>', $srv->name, '</b></td>';
							echo '<td  style="font-size:12px;">', $srv->desc, '</td>';
							echo '<td  style="font-size:12px;">', $srv->addr, '</td>';
							echo '<td  style="font-size:12px;">', $srv->users, '</td>';
							echo '<td  style="font-size:12px;">', $srv->files, '</td> ';
						}
					?>

				</tbody>
			</table>
		</div>
		</div>

		<!-- Footer -->
			<div id="footer">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<form name="formlink" method="post" class="form-inline" action="amuleweb-main-server.php" role="form" id="formed2link">
    			<div class="btn-group">
        			<input class="form-control btn-group" name="ed2klink" type="text" id="ed2klink" placeholder="ed2k:// - Insert link" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px; height: 30px;" size="25">
        			<select class="form-control btn-group" name="selectcat" id="selectcat" style="height: 30px;">
        
			        <?php
						$cats = amule_get_categories();
						
						if ( $HTTP_GET_VARS["Submit"] != "" ) {
							$link = $HTTP_GET_VARS["ed2klink"];
							$target_cat = $HTTP_GET_VARS["selectcat"];
							$target_cat_idx = 0;

							foreach($cats as $i => $c) {
								if ( $target_cat == $c) $target_cat_idx = $i;
							}

							if ( strlen($link) > 0 ) {
								$links = split("ed2k://", $link);
								foreach($links as $linkn) {
								    amule_do_ed2k_download_cmd("ed2k://" . $linkn, $target_cat_idx);
								}
							}
						}

						foreach($cats as $c) {
							echo  '<option>', $c, '</option>';
						}
					?>
			        
        		</select>
        		<input class="btn btn-default btn-group" type="submit" name="Submit" value="Download link" onClick="amuleweb-main-dload.php" style="height: 30px;">
    		</div>
    </form>
		</div>
		<div class="col-md-5">
			<div class="form-inline" style="margin-top:10px;">
				<?php
			      	$stats = amule_get_stats();
			    	if ( $stats["id"] == 0 ) {
			    		$ed2k = "Not connected";
			    		$ed2k_status = "danger";
			    	} elseif ( $stats["id"] == 0xffffffff ) {
			    		$ed2k = "Connecting ...";
			    		$ed2k_status = "info";
			    	} else {
			    		$ed2k = "Connected " . (($stats["id"] < 16777216) ? "(low)" : "(high)") . " " . $stats["serv_name"] . " " . $stats["serv_addr"];
			    		$ed2k_status = (($stats["id"] < 16777216) ? "warning" : "success");
			    	}
			    	if ( $stats["kad_connected"] == 1 ) {
			    		$kad1 = "Connected";
						if ( $stats["kad_firewalled"] == 1 ) {
							$kad2 = "(FW)";
							$kad_status = "warning";
						} else {
							$kad2 = "(OK)";
							$kad_status = "success";
						}
			    	} else {
			    		$kad1 = "Disconnected";
			    		$kad2 = "";
			    		$kad_status = "danger";
			    	}

			    	echo '<span class="label label-default">ED2k:</span> ';
			    	echo '<span class="label label-', $ed2k_status, '">', $ed2k, '</span> ';
			    	echo '<span class="label label-default">KAD:</span> ';
			    	echo '<span class="label label-', $kad_status, '">', $kad1, ' ', $kad2, '</span>';
			    ?>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>

</body>
</html>
