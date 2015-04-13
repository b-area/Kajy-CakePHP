<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grade Entity.
 */
class Grade extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'grade' => true,
        'subject_id' => true,
        'student' => true,
        'session_id' => true,
        'subject' => true,
        'session' => true,
    ];
}
