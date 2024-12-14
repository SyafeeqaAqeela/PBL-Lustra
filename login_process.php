<?php 
if (isset($_POST['username']) && isset($_POST['password'])) { 
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    if ($username === "SyafeeqaAqeela" && $password === "1234") { 
        // Redirect to index.html on successful login
        header("Location: brand.html"); 
        exit(); 
    } else { 
       
        echo "Invalid username or password."; 
    } 
} else { 
    header("Location: index.html"); 
    exit(); 
} 
?>
