<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuelConsumption Entity
 *
 * @property int $consumption_id
 * @property \Cake\I18n\FrozenDate $consumption_date
 * @property int $quantity
 * @property int|null $equipment_id
 *
 * @property \App\Model\Entity\Equipment $equipment
 */
class FuelConsumption extends Entity
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
        'consumption_date' => true,
        'quantity' => true,
        'equipment_id' => true,
        'equipment' => true
    ];
}
