<?php
/**
 * Description: 工厂方法模式
 *
 * 笔记:
 *  一个类无法预计它要创建的对象数目,对象的数目和类型是未知的,所以你不希望类与它要创建的对象的类紧密绑定.
 *
 *  步骤:
 *      1. 建立工厂: 接口,使用一个抽象类作或接口作为接口
 *
 *
 * @author      Eden
 * @datetime    16/8/31 23:54
 * @copyright   Beijing CmsTop Technology Co.,Ltd.
 */

interface Product
{
    public function getProperity();
}

class TextProduct implements Product
{
    private $text = '';

    public function getProperity ()
    {
        $this->text = 'This is text.';
        return $this->text;
    }
}

class GraphicProduct implements Product
{

    private $text;

    public function getProperity ()
    {
        $this->text = 'This is graphic';
        return $this->text;
    }

}

abstract class Creator
{

    protected abstract function factoryMethod ();

    protected function startFactory ()
    {
        // ...
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}


class TextFactory
{
    public function factoryMethod ()
    {
        // ...
        $product = new TextProduct();
        return $product->getProperity();
    }
}


class GraphicFactory
{
    public function factoryMethod ()
    {
        // ...
        $product = new GraphicProduct();
        return $product->getProperity();
    }
}

$text = new TextFactory();
echo $text->factoryMethod();

echo PHP_EOL;

$graphic = new GraphicFactory();
echo $graphic->factoryMethod();

echo PHP_EOL;









