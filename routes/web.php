<?php

Route::get('/', function () {
	return response('Hello World!', 200);
    return response('Page Not Found', 404);
});
