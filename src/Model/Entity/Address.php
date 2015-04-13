<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity.
 */
class Address extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'address_line1' => true,
        'address_line2' => true,
        'zip_code' => true,
        'province_id' => true,
        'region_id' => true,
        'district_id' => true,
        'commune_id' => true,
        'fokontany_id' => true,
        'user_id' => true,
        'province' => true,
        'region' => true,
        'district' => true,
        'commune' => true,
        'fokontany' => true,
        'user' => true,
    ];
}
