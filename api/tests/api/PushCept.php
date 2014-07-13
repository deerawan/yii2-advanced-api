<?php

/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * List Bid API Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get all bids');
$I->sendGET('pushes/android');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
