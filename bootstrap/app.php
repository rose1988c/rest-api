<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Rest application instance
| which serves as the "glue" for all the components of the Application,
| and is the IoC container for the system binding all of the various parts.
|
*/

$app = new OpenDRadio\Rest\Application(
	realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
