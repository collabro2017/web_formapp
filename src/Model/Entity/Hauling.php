<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hauling Entity
 *
 * @property int $hauling_id
 * @property \Cake\I18n\FrozenDate $hauling_date
 * @property int|null $landscape_debris
 * @property int|null $residual_waste
 * @property int|null $tree_pruning_debris
 * @property int|null $hazardois_waste
 * @property int|null $site_id
 *
 * @property \App\Model\Entity\Site $site
 */
class Hauling extends Entity
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
        'hauling_date' => true,
        'landscape_debris' => true,
        'residual_waste' => true,
        'tree_pruning_debris' => true,
        'hazardois_waste' => true,
        'site_id' => true,
        'site' => true
    ];
}
