<?php
// Form gönderilmiş mi kontrol et
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Formdan gelen verileri al
    $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    $visitor_email = filter_var($_POST['visitor_email'], FILTER_SANITIZE_EMAIL);
    $visitor_msg = filter_var($_POST['visitor_msg'], FILTER_SANITIZE_STRING);

    // E-posta doğrulaması
    if (filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        // Kime gönderilecek (info@endema.com.tr bu örnekte değiştirilebilir)
        $to = "info@endema.com.tr"; 
        $subject = "New Contact Form Message from " . $visitor_name;

        // E-posta içeriği
        $message = "Name: " . $visitor_name . "\n";
        $message .= "Email: " . $visitor_email . "\n\n";
        $message .= "Message:\n" . $visitor_msg;

        // Headers
        $headers = "From: " . $visitor_email . "\r\n";
        $headers .= "Reply-To: " . $visitor_email . "\r\n";

        // E-posta gönder
        if (mail($to, $subject, $message, $headers)) {
            // Başarılı mesajı
            echo json_encode(["status" => "success", "message" => "Thanks for your message! We will reply you as soon as possible."]);
        } else {
            // Hata mesajı
            echo json_encode(["status" => "error", "message" => "Something went wrong :( Please contact me directly at <a href='mailto:info@endema.com.tr'>info@endema.com.tr</a>."]);
        }
    } else {
        // Geçersiz e-posta hatası
        echo json_encode(["status" => "error", "message" => "Invalid email address."]);
    }
} else {
    // Form gönderilmemişse hata mesajı
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
}
?>
