<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $employee_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $second_name
 * @property \Cake\I18n\FrozenDate|null $hire_date
 * @property bool|null $active
 * @property string|null $phone_number
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Site[] $sites
 */
class Employee extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'second_name' => true,
        'hire_date' => true,
        'active' => true,
        'phone_number' => true,
        'created' => true,
        'modified' => true,
        'sites' => true
    ];

    protected function _getFullName()
    {
        return $this->_properties['first_name'] . ' ' . $this->_properties['last_name'];
    }
}
