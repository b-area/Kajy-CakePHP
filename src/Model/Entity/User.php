<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'first_name' => true,
        'last_name' => true,
        'DOB' => true,
        'POB' => true,
        'gender' => true,
        'image_path' => true,
        'role' => true,
        'school_id' => true,
        'school' => true,
        'addresses' => true,
        'contacts' => true,
        'emergencies' => true,
        'students' => true,
    ];
}
