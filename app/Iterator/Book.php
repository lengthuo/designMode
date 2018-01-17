<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Iterator;


class Book
{
    protected $id;

    protected $title;

    public function __construct ($id, $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getId ()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId ($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle ()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle ($title)
    {
        $this->title = $title;
    }
}