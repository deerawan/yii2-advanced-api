<?php
/**
 * Copyright (c) 2014 Ebizu Sdn. Bhd.
 */

namespace api\tests\unit\modules\v1\repositories;

use api\tests\unit\DbTestCase;
use api\modules\v1\repositories\category\ArCategoryRepository;


/**
 * Active Record Category Repository Test
 *
 * @author Budi Irawan <budi@ebizu.com>
 */
class ArCategoryRepositoryTest extends DbTestCase
{
    protected $categoryRepo;
    
    public function fixtures()
    {
        return [
            //'users' => UserFixture::className()
        ];
    }
    
    protected function _before()
    {
        $this->categoryRepo = new ArCategoryRepository();
    }
}
