<?php
/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * List User API Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get all users');
$I->sendGET('users');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
