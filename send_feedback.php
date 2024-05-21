<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 收集表單資料
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $checkbox1 = isset($_POST['checkbox1']) ? '開心' : '';
    $checkbox2 = isset($_POST['checkbox2']) ? '好開心' : '';
    $checkbox3 = isset($_POST['checkbox3']) ? '超開心' : '';

    // 構建郵件內容
    $to = "yifangjian015@gmail.com";
    $subject = "新的回饋來自 " . $name;
    $body = "姓名/系級/學號: $name\n";
    $body .= "Email: $email\n";
    $body .= "留言內容: $message\n";
    $body .= "心情如何: $checkbox1 $checkbox2 $checkbox3\n";
    $headers = "From: $email";

    // 發送郵件
    if (mail($to, $subject, $body, $headers)) {
        echo "感謝您的回饋！";
    } else {
        echo "抱歉，回饋提交失敗。請稍後再試。";
    }
}
?>
