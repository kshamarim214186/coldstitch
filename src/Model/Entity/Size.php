<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Size Entity.
 */
class Size extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'status' => true,
        'created' => true,
    ];
}
