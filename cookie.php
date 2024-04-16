<!-- <?php
$cookie_name = "accept_cookies";
$cookie_value = ["Elvis" => "The King", "John" => "The Legend", "Tom" => "The Bomb"];
$cookie_value_string = json_encode($cookie_value);

if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value_string, time() + (86400 * 30), "/"); // 86400 = 1 day
}

$_COOKIE[$cookie_name] = $cookie_value_string;
$json_string = $_COOKIE[$cookie_name];
$decoded_array = json_decode(stripslashes($json_string), true);
// var_dumpj($decoded_array);
?> -->