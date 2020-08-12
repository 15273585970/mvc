<?php
// require('../vendor/autoload.php');
  use  NoahBuscher\Macaw\Macaw;

//   Macaw::get('/', function() {
//     echo 'Im a GET request!';
//   });

    Macaw::get('/index.php/test', function() {
      echo 'Im a test request!';
    });

    Macaw::get('', 'HomeController@home');
    
    Macaw::get("first/test","HomeController@test");

    Macaw::get('(:all)', function($fu) {
      echo '未匹配到路由<br>'.$fu;
    });


  // Macaw::any('/', function() {
  //   echo 'I can be both a GET and a POST request!';
  // });

  Macaw::error(function() {
    echo '404 :: Not Found';
  });


  Macaw::dispatch();
?> 