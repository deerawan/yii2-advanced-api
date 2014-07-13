<?php
/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * List Category API Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get all categories');
$I->sendGET('categories');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
