<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EquipmentsSitesFixture
 *
 */
class EquipmentsSitesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'site_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'equipment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK1_sites_equipments' => ['type' => 'index', 'columns' => ['equipment_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['site_id', 'equipment_id'], 'length' => []],
            'FK1_sites_equipments' => ['type' => 'foreign', 'columns' => ['equipment_id'], 'references' => ['equipments', 'equipment_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK2_sites_equipments' => ['type' => 'foreign', 'columns' => ['site_id'], 'references' => ['sites', 'site_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'site_id' => 1,
                'equipment_id' => 1
            ],
        ];
        parent::init();
    }
}
