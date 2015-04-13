<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Session Entity.
 */
class Session extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'start_date' => true,
        'end_date' => true,
        'school_year' => true,
        'grades' => true,
    ];
}
