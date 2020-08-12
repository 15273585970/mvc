<?php
  use  NoahBuscher\Macaw\Macaw;

//   Macaw::get('/', function() {
//     echo 'Im a GET request!';
//   });

  Macaw::get('/test', function() {
    echo 'Im a test request!';
  });

   Macaw::get('', 'HomeController@home');
  
  
//   Macaw::any('/', function() {
//     echo 'I can be both a GET and a POST request!';
//   });

  Macaw::error(function() {
    echo '404 :: Not Found';
  });


  Macaw::dispatch();
?>