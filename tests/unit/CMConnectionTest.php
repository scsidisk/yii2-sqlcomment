<?php
namespace scsidisk\tests\unit\yii2\sqlcomment;

use scsidisk\yii2\sqlcomment\CMConnection;
// use scsidisk\tests\unit\yii2\sqlcomment\_data\Item;

class CMConnectionTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testConnection()
    {
        $conn   = new CMConnection();
        $sql    = 'show table;';
        $params = [];
        $newSQL = $conn->createCommand($sql, $params);
        $path   = dirname(dirname(__Dir__)) . '/CMConnection.php:54';

        $this->assertEquals($sql . '/*test:' . $path . '*/', $newSQL->getSql());
    }
}
