<?php
/**
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 * 
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('login as user');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('users/login', ['email' => 'halimi@gmail.com', 'password' => 'halimi']);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();

$I->amGoingTo('login using wrong username or password');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('users/login', ['email' => 'fake@gmail.com', 'password' => 'halimi']);
$I->seeResponseIsJson();
$I->seeResponseContains('404');
