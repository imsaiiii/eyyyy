<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Document</title>
</head>
<body>
  
            <?php include('user_sidebar.php')?>

        
            <div id="dashboardMainContainer">
            <div class="dashboard_content">
				<div class="dashboard_content_main">
                    <div id="userAddFormContainer">
                    <form action="" class="appForm">
                        <div class="appFormInputContainer">
                            <label for="first_name">First Name</label>
                            <input type="text" class="appFormInput"id="first_name" name="first_name" />
                        </div>
                        <div class="appFormInputContainer">
                            <label for="last_name">Last Name</label>
                            <input type="text"class="appFormInput" id="last_name" name="last_name" />
                        </div>
                        <div class="appFormInputContainer">
                            <label for="email">Email</label>
                            <input type="text" class="appFormInput"id="email" name="email" />
                        </div>
                        <div class="appFormInputContainer">
                            <label for="password">Password</label>
                            <input type="text"class="appFormInput" id="password" name="password" />
                        </div>
                        <button type="submit" class="appBtn"><i class='bx bxs-user-plus icon'></i></i>Add User</button>
                        
                    </form>
					

                    </div>
                    
				</div>
				
			
    <script src="dashboard.js"></script>
</body>
</html>