<?php
/**
 * Date: 2018/1/16
 * User: lishuo
 */

namespace MyApp\ChainOfResponsibilities;


abstract class Handler
{
    private $successor = null;//下一个继承者

    /**
     * 追加处理类到责任链
     * 通过这个方法可以追加多个处理类到责任链
     */
    final public function append (Handler $handler)
    {
        if (is_null($this->successor)) {
            $this->successor = $handler;
        } else {
            $this->successor->append($handler); //依次追加,切记不是容器，容器是存储的，这个是顺序指定的
        }
    }

    /**
     * 这里我们使用模板方法模式以确保每个子类都不会忘记调用successor。
     * 此外，返回的布尔值表明请求是否被处理
     */
    final public function handle (RequestImpl $req)
    {
        $processed = $this->processing($req);
        if (!$processed) { //如果没有处理完（返回true）依次执行下一个
            if (!is_null($this->successor)) {
                $processed = $this->successor->handle($req);
            }
        }
        return $processed;
    }

    /**
     * 每个处理器具体实现类都要实现这个方法对请求进行处理
     */
    abstract protected function processing (RequestImpl $req);

}