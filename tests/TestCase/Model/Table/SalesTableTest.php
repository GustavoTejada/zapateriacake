<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalesTable Test Case
 */
class SalesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalesTable
     */
    public $Sales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sales',
        'app.shoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Sales') ? [] : ['className' => SalesTable::class];
        $this->Sales = TableRegistry::getTableLocator()->get('Sales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sales);

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
