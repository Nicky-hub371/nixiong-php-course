<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

session_start(); // 启动会话

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('db.php'); // 包含数据库连接代码

    // 进行输入数据验证
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    // 构建查询语句并执行查询
    $query = "SELECT * FROM register_form WHERE email='$email'";
    $result = $conn->query($query);

    // 检查是否找到了匹配的用户
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // 使用密码哈希验证密码
        if(password_verify($password, $row['password'])) {
            // 验证成功，设置用户ID并重定向到首页
            $_SESSION['user_id'] = $row['id'];
            header("Location: HomePage.php");
            exit();
        } else {
            // 密码错误，显示错误消息
            $error = "Error: Invalid email or password";
        }
    } else {
        // 未找到匹配的用户，显示错误消息
        $error = "Error: Invalid email or password";
    }

    // 关闭数据库连接
    $conn->close();
}
?>
