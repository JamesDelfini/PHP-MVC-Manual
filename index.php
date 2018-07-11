<?php
require 'app/core/ComponentProvider.php';

$router = new Router;

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
// echo $uri;
// phpinfo();
require $router->direct($uri);

// $query = "SELECT * FROM users";
// $result = mysqli_query($conn, $query);

// if(mysqli_num_rows($result)){
//     while($row = mysqli_fetch_assoc($result)){
//         $response[] = $row;
//     }
// }else{
//     echo 'Connection Fail';
// }

// dd (json_encode($response));