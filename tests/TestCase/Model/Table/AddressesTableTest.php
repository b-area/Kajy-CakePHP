<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddressesTable Test Case
 */
class AddressesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Regions' => 'app.regions',
        'Districts' => 'app.districts',
        'Communes' => 'app.communes',
        'Fokontanies' => 'app.fokontanies',
        'Users' => 'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Addresses') ? [] : ['className' => 'App\Model\Table\AddressesTable'];
        $this->Addresses = TableRegistry::get('Addresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Addresses);

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
