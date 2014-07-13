<?php
/**
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

namespace api\tests\unit\modules\v1\repositories;

use api\tests\unit\DbTestCase;
use api\modules\v1\repositories\user\ArUserRepository;
use api\tests\fixtures\modules\v1\repositories\UserFixture;

/**
 * Active Record User Repository Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */
class ArUserRepositoryTest extends DbTestCase
{
    protected $userRepo;
    
    public function fixtures()
    {
        return [
            'users' => UserFixture::className()
        ];
    }
    
    protected function _before()
    {
        $this->userRepo = new ArUserRepository();
    }
    
    public function testFindByEmail()
    {
        // arrange
        $email = 'halimi@gmail.com';        
        
        // act
        $user = $this->userRepo->findByEmail($email);
        
        // assert
        $this->assertEquals($user->usr_email, 'halimi@gmail.com');
        $this->assertEquals($user->usr_username, 'halimi');
    }
}
