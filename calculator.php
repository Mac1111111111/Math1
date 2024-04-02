<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">

    <title>Calculator</title>
</head>
<body>
    <header>
<div class="container">
        <img src="image/pexels-magda-ehlers-1329295.jpg" alt="Logo" class="logo">
         <ul>
         <p><a href="index.php">Home</a></p>
        <p><a href="calculator.php">Go to Calculator</a></p>
        <p><a href="contact.php">Contact Us</a></p>
        <p><a href="about.php">About Us</a></p>
    </ul>
    </div>
</header>
    <h1>Calculator</h1>

    <form action="calculator.php" method="post">
        <input type="text" name="num1" placeholder="Enter number 1"><br><br>
        <input type="text" name="num2" placeholder="Enter number 2"><br><br>
        <select name="operation">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select><br><br>
        <input type="submit" value="Calculate">
    </form>
    

    <?php
  
   
  $servername = "localhost";
  $username = "root"; // Replace with your MySQL username
  $password = " "; // Replace with your MySQL password
  $database = "Mathwebsite"; // Replace with your MySQL database name
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
   
    
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operation) {
                    case "add":
                        echo "Result: " . ($num1 + $num2);
                        break;
                    case "sub":
                        echo "Result: " . ($num1 - $num2);
                        break;
                    case "mul":
                        echo "Result: " . ($num1 * $num2);
                        break;
                    case "div":
                        if ($num2 != 0) {
                            echo "Result: " . ($num1 / $num2);
                        } else {
                            echo "Cannot divide by zero";
                        }
                        break;
                    default:
                        echo "Invalid operation";
                }
            } else {
                echo "Please enter valid numbers";
            }
        }
    ?>
    <footer>
      <div class="footer">
        <p>&copy; 2023 Math Website</p>
    </div>
</footer>

</body>
</html>
 
