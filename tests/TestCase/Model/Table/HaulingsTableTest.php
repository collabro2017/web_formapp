<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HaulingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HaulingsTable Test Case
 */
class HaulingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HaulingsTable
     */
    public $Haulings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.haulings',
        'app.sites'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Haulings') ? [] : ['className' => HaulingsTable::class];
        $this->Haulings = TableRegistry::getTableLocator()->get('Haulings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Haulings);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
