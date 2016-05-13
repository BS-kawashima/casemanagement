<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnginnersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnginnersTable Test Case
 */
class EnginnersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnginnersTable
     */
    public $Enginners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.enginners',
        'app.projects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Enginners') ? [] : ['className' => 'App\Model\Table\EnginnersTable'];
        $this->Enginners = TableRegistry::get('Enginners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Enginners);

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
