<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

class BookIteratorTest extends \PHPUnit\Framework\TestCase
{
    protected function setUp ()
    {
        require __DIR__ . '/../../vendor/autoload.php';
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    //了解
    public function test_demo ()
    {
        //1添加测试数据
        $bookList = new \MyApp\Iterator\BookList();
        $bookList->addBook(new \MyApp\Iterator\Book(0001, 'php'));
        $bookList->addBook(new \MyApp\Iterator\Book(0002, 'java'));
        $bookList->addBook(new \MyApp\Iterator\Book(0003, 'c'));
        $expected = ['php', 'java', 'c',];
        $iterator = new \MyApp\Iterator\BookListIterator($bookList);
        while ($iterator->valid()) {
            $expectedBook = array_shift($expected); //array_shift  array_pop
            $this->assertEquals($expectedBook, $iterator->current()->getTitle());
            $iterator->next();
        }
    }

    //进一步升华
    public function test_demo_iterator()
    {
        $bookList = new \MyApp\Iterator\BookList();
        $bookList->addBook(new \MyApp\Iterator\Book(0001, 'php'));
        $bookList->addBook(new \MyApp\Iterator\Book(0002, 'java'));
        $bookList->addBook(new \MyApp\Iterator\Book(0003, 'c'));
        $expected = ['php', 'java', 'c',];
//        $iterator = new \MyApp\Iterator\BookListIterator($bookList);
        $iterator = $bookList->iterator();//好处：遍历和实现分开，我不需要知道是如何实现的。后续可以随意改变具体的遍历方式
        while ($iterator->valid()) {
            $expectedBook = array_shift($expected); //array_shift  array_pop
            $this->assertEquals($expectedBook, $iterator->current()->getTitle());
            $iterator->next();
        }
    }
}