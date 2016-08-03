<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maindomaindata".
 *
 * @property integer $md_id
 * @property string $domain_name
 * @property string $create_date
 * @property string $expiry_date
 * @property string $domain_registrar_name
 * @property string $registrant_name
 * @property string $registrant_company
 * @property string $registrant_address
 * @property string $registrant_city
 * @property string $registrant_state
 * @property string $registrant_zip
 * @property string $registrant_country
 * @property string $registrant_email
 * @property string $registrant_phone
 * @property string $registrant_fax
 * @property string $file_name
 * @property string $date
 * @property string $status
 */
class Maindomaindata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maindomaindata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['domain_name', 'create_date', 'expiry_date', 'domain_registrar_name', 'registrant_name', 'registrant_company', 'registrant_address', 'registrant_city', 'registrant_state', 'registrant_zip', 'registrant_country', 'registrant_email', 'registrant_phone', 'registrant_fax', 'file_name', 'date', 'status'], 'required'],
            [['registrant_address', 'status'], 'string'],
            [['registrant_phone', 'registrant_fax'], 'integer'],
            [['date'], 'safe'],
            [['domain_name', 'create_date', 'expiry_date', 'domain_registrar_name', 'registrant_name', 'registrant_company', 'registrant_city', 'registrant_state', 'registrant_zip', 'registrant_country', 'registrant_email', 'file_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'md_id' => 'Md ID',
            'domain_name' => 'Domain Name',
            'create_date' => 'Create Date',
            'expiry_date' => 'Expiry Date',
            'domain_registrar_name' => 'Domain Registrar Name',
            'registrant_name' => 'Registrant Name',
            'registrant_company' => 'Registrant Company',
            'registrant_address' => 'Registrant Address',
            'registrant_city' => 'Registrant City',
            'registrant_state' => 'Registrant State',
            'registrant_zip' => 'Registrant Zip',
            'registrant_country' => 'Registrant Country',
            'registrant_email' => 'Registrant Email',
            'registrant_phone' => 'Registrant Phone',
            'registrant_fax' => 'Registrant Fax',
            'file_name' => 'File Name',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
