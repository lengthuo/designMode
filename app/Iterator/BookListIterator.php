<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Iterator;

//spl 标准类库 Iterator 自带5个方法
//当然如果对于简单的数据结构比如数组，我们宁愿使用for也不会使用迭代器的
class BookListIterator implements \Iterator
{
    protected $books;
    protected $currentBook = 0;

    public function __construct (BookList $bookList)
    {
        $this->books = $bookList;
    }

    //Return the current element 返回当前元素
    public function current ()
    {
        return $this->books->getBook($this->currentBook);
    }

    //Move forward to next element 移动下标到下一个元素
    public function next ()
    {
        $this->currentBook++;
    }

    //Return the key of the current element 返回当前元素的key
    public function key ()
    {
        return $this->currentBook;
    }

    //Checks if current position is valid 检查当前元素是否有效
    public function valid ()
    {
        return null !== $this->books->getBook($this->currentBook);
    }

    // Rewind the Iterator to the first element 回到第一个元素
    public function rewind ()
    {
        $this->currentBook = 0;
    }
}