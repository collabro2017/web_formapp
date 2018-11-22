<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ppe Entity
 *
 * @property \Cake\I18n\FrozenDate $ppes_date
 * @property int $site_id
 * @property int $employee_id
 * @property string|null $face_mask
 * @property string|null $rain_boots
 * @property string|null $safety_shoes
 *
 * @property \App\Model\Entity\Site $site
 * @property \App\Model\Entity\Employee $employee
 */
class Ppe extends Entity
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
        'face_mask' => true,
        'rain_boots' => true,
        'safety_shoes' => true,
        'site' => true,
        'employee' => true
    ];
}
