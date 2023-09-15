<?php
  
  $url = "https://www.udemy.com/course/php-do-zero-a-maestria-com-projetos-incriveis/learn/lecture/23220964#overview";
  print_r(parse_url($url));
  echo '<br>';
  
  $url = "https://www.mariafilo.com.br/?gclid=CjwKCAjwjOunBhB4EiwA94JWsNY1Mdmutx7pmAAR1dxbFTQRozMF7IXB5mGLfbwMB4Bkigh0Tx7X6hoCCcMQAvD_BwE";
  $parsed = parse_url($url);
  echo "Host: ". $parsed["host"];
  
?>