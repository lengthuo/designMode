<?php
/**
 * Date: 2018/1/12
 * User: lishuo
 */

namespace MyApp\Decorator;


class ReadJson extends Decorator
{
    /**
     * render data as JSON
     *
     * @return mixed|string
     */
    public function returnData ()
    {
        $output = $this->wrapped->returnData();
        return json_encode($output);
    }
}