<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up</title>
	<style>
	 * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
}

body {
	height: 100vh;
	width: 100vw;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	gap: 30px;
	background-color: rgb(231, 231, 231);
}

header {
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 8px;
}

.heading {
	color: green;
}

.title {
	font-weight: 400;
	letter-spacing: 1.5px;
}

.container {
	height: 600px;
	width: 500px;
	background-color: white;
	box-shadow: 8px 8px 20px rgb(128, 128, 128);
	position: relative;
	overflow: hidden;
}

.btn {
	height: 60px;
	width: 300px;
	margin: 20px auto;
	box-shadow: 10px 10px 30px rgb(254, 215, 188);
	border-radius: 50px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}

.login,
.signup {
	font-size: 22px;
	border: none;
	outline: none;
	background-color: transparent;
	position: relative;
	cursor: pointer;
}

.slider {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	background-image: linear-gradient(to right,
			rgb(255, 195, 110),
			rgb(255, 146, 91));
	position: absolute;
	top: 20px;
	left: 100px;
	transition: all 0.5s ease-in-out;
}

.moveslider {
	left: 250px;
}

.form-section {
	height: 500px;
	width: 1000px;
	padding: 20px 0;
	display: flex;
	position: relative;
	transition: all 0.5s ease-in-out;
	left: 0px;
}

.form-section-move {
	left: -500px;
}

.login-box,
.signup-box {
	height: 100%;
	width: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	padding: 0px 40px;
}

.login-box {
	gap: 50px;
}

.signup-box {
	gap: 30px;
}

.ele {
	height: 60px;
	width: 400px;
	outline: none;
	border: none;
	color: rgb(77, 77, 77);
	background-color: rgb(240, 240, 240);
	border-radius: 50px;
	padding-left: 30px;
	font-size: 18px;
}

.clkbtn {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	background-image: linear-gradient(to right,
			rgb(255, 195, 110),
			rgb(255, 146, 91));
	font-size: 22px;
	border: none;
	cursor: pointer;
}



@media screen and (max-width: 650px) {
	.container {
		height: 600px;
		width: 300px;
	}

	.title {
		font-size: 15px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 50px;
	}

	.moveslider {
		left: 150px;
	}

	.form-section {
		height: 500px;
		width: 600px;
	}

	.form-section-move {
		left: -300px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 300px;
	}

	.ele {
		height: 50px;
		width: 250px;
		font-size: 15px;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}

@media screen and (max-width: 320px) {
	.container {
		height: 600px;
		width: 250px;
	}

	.heading {
		font-size: 30px;
	}

	.title {
		font-size: 10px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 27px;
	}

	.moveslider {
		left: 127px;
	}

	.form-section {
		height: 500px;
		width: 500px;
	}

	.form-section-move {
		left: -250px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 250px;
	}

	.ele {
		height: 50px;
		width: 220px;
		font-size: 15px;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}
</style>
</head>
<body>
<?php
session_start(); // Start a new session or resume an existing session
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $User_Name = $_POST['User_Name'];
        $Password = $_POST['Password'];

        // Handle login logic here
        $sql = "SELECT * FROM user WHERE User_Name='$User_Name' AND Password='$Password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login successful, set session variables
            $_SESSION['User_Name'] = $User_Name;
            $_SESSION['logged_in'] = true;
            header("Location: index.php"); // Redirect to a new page
        } else {
            echo "Invalid username or password";
        }
    } elseif (isset($_POST['signup'])) {
        $User_Name = $_POST['User_Name'];
        $U_Address = $_POST['U_Address'];
        $Password = $_POST['Password'];
        $U_Description = $_POST['U_Description'];
        $U_Number = $_POST['U_Number'];
        $confirm_Password = $_POST['confirm_Password'];

        // Handle signup logic here
        if ($Password == $confirm_Password) {
            $sql = "INSERT INTO user (User_Name, U_Address, Password, U_Description, U_Number) 
                    VALUES ('$User_Name', '$U_Address', '$Password', '$U_Description', '$U_Number')";
            if ($conn->query($sql) === TRUE) {
                echo "Signup successful";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Passwords do not match";
        }
    }
}

$conn->close();
?>

	<header>
		<h1 class="heading"></h1>
	</header>

	<div class="container">
		<div class="slider"></div>
		<div class="btn">
			<button class="login">Login</button>
			<button class="signup">Signup</button>
		</div>

		<div class="form-section">
			<div class="login-box">
				<form method="POST" action="">
					<input type="text" name="User_Name" class="ele" placeholder="User Name" required>
					<input type="password" name="Password" class="ele" placeholder="Password" required>
					<button type="submit" name="login" class="clkbtn">Login</button>
				</form>
			</div>

			<div class="signup-box">
				<form method="POST" action="login.php">
					<input type="text" name="User_Name" class="ele" placeholder="Enter your name" required>
					<input type="text" name="U_Address" class="ele" placeholder="Address" required>
					<input type="password" name="Password" class="ele" placeholder="Password" required>
					<input type="password" name="confirm_Password" class="ele" placeholder="Confirm Password" required>
					<input type="text" name="U_Description" class="ele" placeholder="Description" required>
					<input type="text" name="U_Number" class="ele" placeholder="User Number" required>
					<button type="submit" name="signup" class="clkbtn">Signup</button>
				</form>
			</div>
		</div>
	</div>

	<script>
		let signup = document.querySelector(".signup");
		let login = document.querySelector(".login");
		let slider = document.querySelector(".slider");
		let formSection = document.querySelector(".form-section");
		
		signup.addEventListener("click", () => {
			slider.classList.add("moveslider");
			formSection.classList.add("form-section-move");
		});
		
		login.addEventListener("click", () => {
			slider.classList.remove("moveslider");
			formSection.classList.remove("form-section-move");
		});
	</script>
</body>
</html>