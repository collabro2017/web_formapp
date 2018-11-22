<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeesSitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeesSitesTable Test Case
 */
class EmployeesSitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeesSitesTable
     */
    public $EmployeesSites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employees_sites',
        'app.employees',
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
        $config = TableRegistry::getTableLocator()->exists('EmployeesSites') ? [] : ['className' => EmployeesSitesTable::class];
        $this->EmployeesSites = TableRegistry::getTableLocator()->get('EmployeesSites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeesSites);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
