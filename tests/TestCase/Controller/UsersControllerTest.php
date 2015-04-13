<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Users' => 'app.users',
        'Schools' => 'app.schools',
        'Addresses' => 'app.addresses',
        'Provinces' => 'app.provinces',
        'Regions' => 'app.regions',
        'Districts' => 'app.districts',
        'Communes' => 'app.communes',
        'Fokontanies' => 'app.fokontanies',
        'Contacts' => 'app.contacts',
        'Emergencies' => 'app.emergencies',
        'Students' => 'app.students',
        'Kilasies' => 'app.kilasies',
        'Subjects' => 'app.subjects',
        'Grades' => 'app.grades',
        'Sessions' => 'app.sessions'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
