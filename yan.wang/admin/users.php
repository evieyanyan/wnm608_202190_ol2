<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");





function showUserPage($user) {


$classes = implode(", ", $user->classes);
    // print_p($user);
    // herrdoc

echo <<<HTML
<nav class="nav nav-crumbs">
    <ul>
        <li><a href="users.php">Back</a></li>
    </ul>
</nav>
<div>

    
    <form action="" method="post" name="userData">
    <h2>$user->name</h2>
        <div class="form-control">
            <label class="form-label">Type</label>
            <input type="text" required=ture value="$user->type" name="type" placeholder="Type" class="form-input">
        </div>

            <div class="form-control">
            <label class="form-label">Email</label>
            <input type="email" required=ture value="$user->email" name="email" placeholder="email"class="form-input">
        </div>
        <div class="form-control">
            <label class="form-label">Class</label>
            <input type="text" required=ture value="$classes" name="classes" placeholder="classes"class="form-input">
        </div>


        <div class="form-control">
            <input type="button" name="save" class="form-button" value="Save">
        </div>


        <div class="form-control">
            <input type="submit" name="delete" class="form-button" value="Delete">
        </div>
    </form>
</div>


HTML;
}


 ?>

<?php 
    

    if(isset($_POST['save'])){
        if($_POST['name']){

            $users[$_GET['id']]->name = $_POST['name'];
            $users[$_GET['id']]->type = $_POST['type'];
            $users[$_GET['id']]->email = $_POST['email'];
            $users[$_GET['id']]->classes = preg_split("/[\s,]+/",$_POST['classes']);
            
            file_put_json("../data/users.json", $users);
            $save = "sucessfully saved!";
            header("Refresh:1;");
        }

    };

    if(isset($_POST['delete'])){

        unset($users[$_GET['id']]);
        header("location: http://yanyanevie.com/yan.wang/admin/users.php");
        file_put_json("../data/users.json", array_values($users));

    };

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>User Admin Page</title>
    <link rel="stylesheet" href="../lib/css/styleguide.css">
    <link rel="stylesheet" href="../lib/css/gridsystem.css">
    <link rel="stylesheet" href="../css/storetheme.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

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
                  <li><a href="users.php">User List</a></li>
              </ul>
          </nav>
        
    </header>

 	<div class="container">
 		<div class="card soft">

            <?php
                if(isset($_GET['id'])) {
                    if($users[$_GET['id']]){
                        showUserPage($users[$_GET['id']]);
                    } else {
                        $new_user = (object)[
                            "name"=>"",
                            "type"=>"",
                            "email"=>"",
                            "classes"=>[]
                        ];
                        showUserPage($new_user);
                     
                    }
                    
                } else {

            ?>
 			<h2>User List</h2>


            <nav class="nav">
                <ul>
 			<?php 

            $count = count($users);
 			for($i=0;$i<$count;$i++){
 				echo "<li>
 				<a href='users.php?id=$i'>{$users[$i]->name}</a>				
 				</li>";
 			};
            
                echo "<div class='form-control'>
                <a href='users.php?id={$count}' class='form-button'>Add User</a>
                </div>";

 			?>
                </ul>
            </nav>



            <?php } ?>




 		</div>
 	</div>

 	
 </body>
 </html>