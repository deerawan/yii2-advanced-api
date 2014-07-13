<?php
/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * List Device API Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get all devices');
$I->sendGET('devices');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
