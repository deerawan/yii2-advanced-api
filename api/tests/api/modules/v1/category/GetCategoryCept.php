<?php
/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * Get a category by ID API Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get category by id');
$I->sendGET('categories/495');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
