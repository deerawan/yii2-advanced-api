<?php

namespace api\modules\v1\models;

use yii\db\ActiveRecord;

/**
 * User model Active Record
 * 
 * @author Budi Irawan <deerawan@gmail.com>
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc     
     */
    public static function tableName()
    {
        return 'tbl_user';
    }    
}
