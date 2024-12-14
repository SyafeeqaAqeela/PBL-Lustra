<?php 
if (isset($_POST['username']) && isset($_POST['password'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    
    if ($username === "SyafeeqaAqeela" && $password === "1234") { 
        echo "Login successful!"; 
        header("Location: index.html");
    } else { 
        echo "Invalid username or password."; 
    } 
} else { 
    header("Location: index.html"); 
    exit(); 
} 
?>
