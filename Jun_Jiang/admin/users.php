<?php 

include"../lib/php/functions.php";

// $filename ="notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);

// $filename ="notes.json";
// $file = file_get_contents($filename);
// $notes_object = json_decode($file);


$users = file_get_json ("../data/users.json");


//file_put_contents json_encode explode $_POST
//CRUD, Create Read Update Delete






function showUserPage($user){
	
$classes = implode(",", $user->classes);


	//heredoc
	echo <<<HTML
	<nav class = "nav nav-crumbs">
		<ul>
			<li><a href="admin/users.php">Back</a></li>
		</ul>
	</nav>
	
	<div>
		<h2>$user->name</h2>
	<form>
		<label for = "type">Type:</label><br>
		<input type="text" id="type" name="type"><br>
		<label for = "email">Email:</label><br>
		<input type="text" id="email" name="email"><br><br>
		<label for = "class">Class:</label><br>
		<input type="text" id="class" name="class"><br><br>
		<input type = "submit">
	<form>
	</div>	
	HTML;
	}




// <div>
// 		<strong>Type</strong>
// 		<span>$user->type</span>
// 	</div>
// 	<div>
// 		<strong>Email</strong>
// 		<span>$user->email</span>
// 	</div>
// 	<div>
// 		<strong>Classes</strong>
// 		<span>$classes</span>
// </div>


// print_p($notes_object);

?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>

	 <base href="http://www.junjiangdesign.com/aau/wnm608/Jun_Jiang/">
	 <link rel="stylesheet" href="lib/css/styleguide.css">
    <link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">

		<div class="card soft">


			<?php 

			if(isset($_GET['id'])) {
				showUserPage($users[$_GET['id']]);
			} else {

			
			?>
	
		<h2>Users List</h2>


		<nav class="nav">
			<ul>
	 	<?php 

	 	for($i=0;$i<count($users);$i++){
	 		echo "<li>
	 			<a href='admin/users.php?id=$i'>{$users[$i]->name}</a>	
	 		</li>";
	 	}

	 	 ?>

			</ul>
		</nav>

	<?php } ?>
	</div>
	</div>

</body>
</html>