<?php
    // ป้องกัน SQL Injection โดยใช้ Prepared Statements หรือทำการ Escape อักขระพิเศษ
    $username = $_POST['username'];
    $password = $_POST['password'];

    // เช็คว่า username กับ password ถูกต้องไหม
    if ($username === 'admin' && $password === '123456') {
        echo "<h2>Login successful!</h2>";
    } else {
        echo "<h2>Invalid username or password.</h2>";
    }
?>