<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // メール送信機能を追加（例: mail()関数）
    $to = "your-email@example.com";
    $subject = "新しいメッセージ";
    $body = "名前: $name\nメール: $email\nメッセージ: $message";
    
    if (mail($to, $subject, $body)) {
        echo "メッセージが送信されました。";
    } else {
        echo "メッセージの送信に失敗しました。";
    }
}
?>
