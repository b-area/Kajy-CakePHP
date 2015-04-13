<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity.
 */
class Contact extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'primary_phone' => true,
        'secondary_phone' => true,
        'email_address' => true,
        'user_id' => true,
        'user' => true,
    ];
}
