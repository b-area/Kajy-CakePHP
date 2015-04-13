<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kilasy Entity.
 */
class Kilasy extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'section' => true,
        'level' => true,
        'teacher_responsible' => true,
        'students' => true,
        'subjects' => true,
    ];
}
