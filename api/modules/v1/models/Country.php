<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Country extends ActiveRecord 
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    public static function primaryKey()
    {
        return ['code'];
    }
    
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required']
        ];
    }   
}
