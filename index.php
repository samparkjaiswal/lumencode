<?php

class v1 implements iv1
{
    public function a()
    {
        echo "call v1";
    }

    public function b()
    {
        echo "call b v1";
    }
}

class v2 extends v1 implements iv2
{
    public function a()
    {
        echo "call v2";
    }

    public function b()
    {
        echo "call b v2";
    }
}

class v3 extends v2 implements iv3
{
    public function a1()
    {
        echo "call v3";
    }

    public function b()
    {
        echo "call b v3";
    }
}

interface iv1
{
    public function a();
}

interface iv2 extends iv1
{
    function b();
}

interface iv3 extends iv2
{
   
}

$obj1 = new v3;
$obj1->a();

try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}
