<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Site Entity
 *
 * @property int $site_id
 * @property string $site_name
 * @property string|null $address
 * @property string|null $city
 *
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\Equipment[] $equipments
 * @property \App\Model\Entity\User[] $users
 */
class Site extends Entity
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
        'site_name' => true,
        'address' => true,
        'city' => true,
        'employees' => true,
        'equipments' => true,
        'users' => true
    ];
}
