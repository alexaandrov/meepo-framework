<?php
namespace mark\tests;

use mark\core\Db;

class DbTest extends \PHPUnit_Framework_TestCase
{
    public function testExecuteWithoutParams()
    {
        $db = new Db('localhost', 'mark', 'root', '');
        $sql = 'SELECT id FROM news;';
        $this->assertEquals(true, $db->execute($sql));
    }

    public function testExecuteWithParams()
    {
        $db = new Db('localhost', 'mark', 'root', '');
        $sql = 'SELECT id FROM news WHERE id = :id;';
        $params = [':id' => 1];
        $this->assertEquals(true, $db->execute($sql, $params));
    }

    public function testQueryWithoutParams()
    {
        $db = new Db('localhost', 'mark', 'root', '');
        $sql = 'SELECT id FROM news';
        $this->assertEquals(true, !empty($db->query($sql)));
    }
    
    public function testQueryWithParams()
    {
        $db = new Db('localhost', 'mark', 'root', '');
        $sql = 'SELECT id FROM news WHERE id = :id';
        $params = [':id' => 1];
        $this->assertEquals(true, !empty($db->query($sql, $params)));
    }
}