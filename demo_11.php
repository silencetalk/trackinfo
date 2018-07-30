<?php
// 对象
// 1. 可见性

/* class Character
{
    protected $name = 'NoNAME';
    protected $hp = 100;
    protected $mp = 100;
    private $version = 0.1;

    public function talk()
    {
        echo " I am $this->name ";
    }
}
$😄 = new Character();
echo "~~".$😄 ->name;
echo "--".$😄 ->version;
echo "~~".$😄 ->talk(); 
*/

// 2.抽象类

abstract class Character
{
    protected $name = 'NoNAME';
    protected $hp = 100;
    protected $mp = 100;
    private $version = 0.1;

    public function talk()
    {
        echo " I am $this->name ";
    }
}
//$😄 = new Character();

class NPC extends Character
{

}

$👻 = new NPC();
$👻 ->talk();

// 3.静态方法和属性
//静态属性和方法，是指多个对象公用一份的属性和方法。
// 4.作用域操作符 self
class MagicList
{
    protected static $mlist = [];
    protected static $version = 1.0;

    //静态方法中，没有$this，该用self，只能操作静态属性
    public static function addMagic($name,$mp,$hp)
    {
        self::$mlist[] = [ "name"=>$name, "mp"=>$mp, "hp"=>$hp];
    }
    public static function showMagic()
    {
        return self::$mlist;

    }

    //后期绑定演示用
    public static function getVersion()
    {
        return self::$version;
    }
}
MagicList::addMagic('回复（小）',-10,10);
MagicList::addMagic('回复（大）',-15,30);
my_echo(MagicList::showMagic());
// my_dump(MagicList);

// 4.final

/*
final class NekoCharacter extends NPC
{

}


class NekoLitterGirl extends NekoCharacter
{
    // 
}
*/

// ⑤ 作用域操作符 parent ==========
class NekoGirl extends NPC
{
    public function talk()
    {
        parent::talk() ;
        echo "喵\r\n";
    }
}

$🐱 = new NekoGirl();
$🐱 ->talk();



// ⑧ 魔术方法 __construct & __destruct ==========
class NekoGirlV2 extends NekoGirl
{
    function __construct()
    {
        $this->name = '猫娘A';
    }

}

$🐱 = new NekoGirlV2();
$🐱 ->talk();

// ①① 魔术方法 __call & __callStatic ==========

class NekoGirlV3 extends NekoGirlV2
{
    function __call( $func_name , $args )
    {
        if( $func_name === 'eat' ) echo "🐱 爱吃".join( "" , $args )."\r\n";
        else echo "要干什么喵！\r\n";
    }
}

$🐱 = new NekoGirlV3();
$🐱 ->eat("🍩");
$🐱 ->push();

// ⑨ 魔术方法 __set & __get ==========

class NekoGirlV4 extends NekoGirlV3
{
    function __set( $key , $value )
    {
        $this->$key = $value;
    }

    function __get( $key )
    {
        if( $this->$key ) return  $this->$key;
    }
    
    function __unset( $key )
    {
        $this->cloth = 'DELETED';
    }
}

$🐱 = new NekoGirlV4();
$🐱 ->cloth = "👗";
my_echo( $🐱 ->cloth );

unset( $🐱 ->allCloth );
my_echo( $🐱 ->cloth );