<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity.
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'size_id' => true,
        'name' => true,
        'thumb_image' => true,
        'specification' => true,
        'product_details' => true,
        'status' => true,
        'created' => true,
    ];
}
