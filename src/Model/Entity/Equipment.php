<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipment Entity
 *
 * @property int $equipment_id
 * @property string $serial_plate_number
 * @property string|null $fuel_type
 * @property string $category
 * @property string $status
 *
 * @property \App\Model\Entity\Site[] $sites
 */
class Equipment extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'serial_plate_number' => true,
        'fuel_type' => true,
        'category' => true,
        'status' => true,
        'sites' => true
    ];
}
