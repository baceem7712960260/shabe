<?php

//logout.php

include('config.php');

//Reset OAuth access token
//$google_client->revokeToken();

//Destroy entire session data.
session_destroy();


session_start();
session_unset();
session_destroy();

//redirect page to index.php
header('location:index.php');



?>