<?php

require_once "../src/response.php";
require_once "../src/requests.php";

requestGETStrict(function () {
       try {
              response200();
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
