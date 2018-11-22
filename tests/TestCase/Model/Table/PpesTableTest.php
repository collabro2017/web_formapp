<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PpesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PpesTable Test Case
 */
class PpesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PpesTable
     */
    public $Ppes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ppes',
        'app.sites',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ppes') ? [] : ['className' => PpesTable::class];
        $this->Ppes = TableRegistry::getTableLocator()->get('Ppes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ppes);

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
