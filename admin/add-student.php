<?php 
session_start(); 
require_once "auth.php"; 
require_once "../config/database.php"; 
$message = ""; 
$error = ""; 
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
$name = trim($_POST["name"] ?? ""); 
$email = trim($_POST["email"] ?? ""); 
$phone = trim($_POST["phone"] ?? ""); 
$course = trim($_POST["course"] ?? ""); 
$address = trim($_POST["address"] ?? ""); 
if ($name === "" || $email === "" || $course === "") { 
 
 
        $error = "Name, Email and Course are required."; 
 
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
 
        $error = "Please enter a valid email address."; 
 
    } else { 
 
        $stmt = $conn->prepare( 
            "INSERT INTO students (name, email, phone, course, address) 
             VALUES (?, ?, ?, ?, ?)" 
        ); 
 
        $stmt->bind_param( 
            "sssss", 
            $name, 
            $email, 
            $phone, 
            $course, 
            $address 
        ); 
 
        if ($stmt->execute()) { 
 
            $message = "Student added successfully!"; 
 
        } else { 
 
            $error = "Something went wrong. Please try again."; 
 
        } 
 
        $stmt->close(); 
    } 
} 
 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 
    <meta charset="UTF-8"> 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <title>Add Student</title> 
 
    <link rel="stylesheet" href="../assets/css/style.css"> 
 
</head> 
 
<body> 
 
    <div class="admin-page"> 
 
 
 
        <div class="admin-container"> 
 
            <div class="page-header"> 
 
                <div> 
                    <h1>Add Student</h1> 
                    <p>Add a new student to the database.</p> 
                </div> 
 
                <a href="students.php" class="secondary-btn"> 
                    Back 
                </a> 
 
            </div> 
 
 
            <?php if ($message): ?> 
 
                <div class="success-message"> 
                    <?php echo htmlspecialchars($message); ?> 
                </div> 
 
            <?php endif; ?> 
 
 
            <?php if ($error): ?> 
 
                <div class="error-message"> 
                    <?php echo htmlspecialchars($error); ?> 
                </div> 
 
            <?php endif; ?> 
 
 
            <div class="form-card"> 
 
                <form method="POST"> 
 
                    <div class="form-group"> 
 
                        <label for="name"> 
                            Student Name * 
                        </label> 
 
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            placeholder="Enter student name" 
                            required 
                        > 
 
                    </div> 
 
 
                    <div class="form-group"> 
 
 
 
                        <label for="email"> 
                            Email * 
                        </label> 
 
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="student@example.com" 
                            required 
                        > 
 
                    </div> 
 
 
                    <div class="form-group"> 
 
                        <label for="phone"> 
                            Phone 
                        </label> 
 
                        <input 
                            type="text" 
                            id="phone" 
                            name="phone" 
                            placeholder="0771234567" 
                        > 
 
                    </div> 
 
 
                    <div class="form-group"> 
 
                        <label for="course"> 
                            Course * 
                        </label> 
 
                        <input 
                            type="text" 
                            id="course" 
                            name="course" 
                            placeholder="ICT" 
                            required 
                        > 
 
                    </div> 
 
 
                    <div class="form-group"> 
 
                        <label for="address"> 
                            Address 
                        </label> 
 
                        <textarea 
                            id="address" 
                            name="address" 
 
 
                            rows="4" 
                            placeholder="Enter address" 
                        ></textarea> 
 
                    </div> 
 
 
                    <button type="submit" class="primary-btn"> 
                        Add Student 
                    </button> 
 
                </form> 
 
            </div> 
 
        </div> 
 
    </div> 
 
</body> 
 
</html>