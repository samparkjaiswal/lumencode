

<?php

interface iv1
{
    public function a();
    public function c();

}

interface iv2 extends iv1
{
    function b();
}

interface iv3 extends iv2
{

}

class v1 implements iv1
{
    public function a()
    {
        echo "call v1";

        $this->c();
    }

    public function c()
    {
        echo "call c v1";
    }
}

class v2 extends v1 implements iv2
{

    public function b()
    {
        echo "call b v2";
    }
}

class v3 extends v2 implements iv3
{

    public function b()
    {

    }

    public function c()
    {
        parent::c();
        echo "call c v3";
    }
}

try {
    $v1 = new v3;
    $v1->a();
} catch (\Throwable $th) {
    echo $th;
}

?>

