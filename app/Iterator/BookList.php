<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Iterator;


//容器:存储书
class BookList
{
    protected $books = [];

    public function getBook ($id)
    {
        if (isset($this->books[$id])) return $this->books[$id];
        return null;
    }

    public function addBook (Book $book)
    {
        $this->books[] = $book;
    }

    public function remove ($id)
    {
        foreach ($this->books as $key => $book) {
            if ($id == $key) unset($this->books[$key]);
        }
    }

    public function count ()
    {
        return count($this->books);
    }

    public function iterator ()
    {
        return new  BookListIterator($this);
    }
}