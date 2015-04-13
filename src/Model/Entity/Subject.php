<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subject Entity.
 */
class Subject extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'teacher' => true,
        'coefficient' => true,
        'kilasy_id' => true,
        'kilasy' => true,
        'grades' => true,
    ];
}
