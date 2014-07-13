<?php
/**
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

/**
 * Create Device 
 *
 * @author Budi Irawan <budi@ebizu.com>
 */

$I = new ApiGuy($scenario);
$I->wantTo('create device');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$newDevice = [        
    'dev_usr_id' => 2,
    'dev_registered_id' => 'APA91bE-1aOvzMedvESEdtJvzTErOTZXXdRcfLHth8h4-D7jVxX4VAdy5ZrViBcDeoMGT2GnjmmLlrOqMcWitbYYOOSIofoAN8R7',
    'dev_timestamp' => 1232425
];
$I->sendPOST('devices', $newDevice);
$I->seeResponseIsJson();
