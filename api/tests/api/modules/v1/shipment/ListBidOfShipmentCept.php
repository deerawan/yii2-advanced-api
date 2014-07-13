<?php
/*
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * Get bids of a shipment
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('get all bids of a shipment');
$I->sendGET('shipments/1/bids');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
