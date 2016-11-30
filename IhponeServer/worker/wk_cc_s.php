<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/18
 * Time: 17:14
 */
class wk_cc_s extends worker{
    private  $ccget;
    function GET_FUN()
    {

        $this->ccget=$this->get;
        $this->response->end("asdfasdfback");


    }
    function POST_FUN(){
        var_dump($this->request);
        var_dump($this->ccget,$this->post,$this->get);

        $this->response->end("this post back string");
    }
}

?>