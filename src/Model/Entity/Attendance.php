<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendance Entity
 *
 * @property int $attendance_id
 * @property \Cake\I18n\FrozenDate $work_date
 * @property int $employee_id
 * @property int $site_id
 * @property \Cake\I18n\FrozenTime|null $time_in
 * @property string $type
 *
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\Site $site
 */
class Attendance extends Entity
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
        'work_date' => true,
        'employee_id' => true,
        'site_id' => true,
        'time_in' => true,
        'type' => true,
        'employee' => true,
        'site' => true
    ];
}
