<?php
/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * Get a user by ID API Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get user by id');
$I->sendGET('users/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
