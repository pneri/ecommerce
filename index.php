<<<<<<< HEAD
<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$sql = new Hcode\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_users");

	echo json_encode($results);

});

$app->run();

=======
<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	echo "OK";

});

$app->run();

>>>>>>> ae5d4dd2265af32dab0e9bf51e4c49144cc1224a
?>