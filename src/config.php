<?php

$con = mysqli_connect(
                      "aa1jp4wsh8skxvw.csl5a9cjrheo.us-west-1.rds.amazonaws.com",
                      "stroom",
                      "Stroomrds",
                      "stroom_website"
                    );


// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
else{
 //  echo "Db Connected ";
}


?>
