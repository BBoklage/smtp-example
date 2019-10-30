<?php
return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "d5fa2af4934186",
  "password" => "f6a6ed2b8b9a0e",
  "sendmail" => "/usr/sbin/sendmail -bs"
];