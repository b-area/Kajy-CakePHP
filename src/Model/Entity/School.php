<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity.
 */
class School extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'type' => true,
        'president' => true,
        'vice_president' => true,
        'full_address' => true,
        'primary_phone' => true,
        'secondary_phone' => true,
        'email' => true,
        'users' => true,
    ];
}
