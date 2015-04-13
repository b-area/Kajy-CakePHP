<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emergency Entity.
 */
class Emergency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'relationship' => true,
        'primary_phone' => true,
        'secondary_phone' => true,
        'full_address' => true,
        'user_id' => true,
        'user' => true,
    ];
}
