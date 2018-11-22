<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersSitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersSitesTable Test Case
 */
class UsersSitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersSitesTable
     */
    public $UsersSites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_sites',
        'app.users',
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
        $config = TableRegistry::getTableLocator()->exists('UsersSites') ? [] : ['className' => UsersSitesTable::class];
        $this->UsersSites = TableRegistry::getTableLocator()->get('UsersSites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersSites);

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
