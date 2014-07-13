<?php
/**
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * Create Bid 
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('create bid');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$newBid = [        
    "bid_usr_id" => 2,
    "bid_shp_id" => 1,
    "bid_amount" => 5000,
    "bid_description" => "mantap",
    "bid_starting" => 80,
    "bid_lowest" => 10
];
$I->sendPOST('bids', $newBid);
$I->seeResponseIsJson();
