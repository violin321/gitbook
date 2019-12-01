<！DOCTYPE html> 
<html> 
<body> 
1.php教程
最基础的测试	
<？php 
echo  “ Hello World！” ; 
？> 
</ body> 
</ html>
	
2.php语法
	
基本的PHP语法	
<！DOCTYPE html> 
<html> 
<body> 
<h1>我的第一个PHP页面</h1> 
<？php 
echo  “ Hello World！” ; 
？> 
</ body> 
</ html>
	
PHP中的注释
<！DOCTYPE html> 
<html> 
<body> 
<？php 
//这是PHP单行注释
/ * 
这是
PHP多行
注释
* / 
？>
</ body> 
</ html>

3.php变量
<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>
	
创建（声明）PHP 变量
<?php
$txt="Hello world!";
$x=5;
$y=10.5;
?>

局部和全局作用域
<?php 
$x=5; // 全局变量 
function myTest() 
{ 
    $y=10; // 局部变量 
    echo "<p>测试函数内变量:<p>"; 
    echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  
myTest(); 
echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y"; 
?>	

PHP global 关键字
<?php 
/*            // (测试实例时请单独测试，并将这行删除@-@)  
$x=5;
$y=10;
 
function myTest()
{
    global $x,$y;
    $y=$x+$y;
}
 
myTest();
echo $y; // 输出 15
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

	
<?php 
/*           // (测试实例时请单独测试，并将这行删除@-@) 
$x=5;
$y=10;
 
function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
 
myTest();
echo $y;
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

Static 作用域
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
function myTest()
{
    static $x=0;
    echo $x;
    $x++;
    echo PHP_EOL;    // 换行符
}
 
myTest();
myTest();
myTest();
*/           // (测试实例时请单独测试，并将这行删除@-@)
?>

参数作用域
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
function myTest($x)
{
    echo $x;
}
myTest(5);
*/           // (测试实例时请单独测试，并将这行删除@-@)
?>

4.PHP 5 echo和print语句

PHP echo语句
显示字符串
<?php
echo "<h2>PHP 很有趣!</h2>";
echo "Hello world!<br>";
echo "我要学 PHP!<br>";
echo "这是一个", "字符串，", "使用了", "多个", "参数。";
?>
显示变量
<?php
$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");
 
echo $txt1;
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[0]}";
?>

PHP print 语句
显示字符串
<?php
print "<h2>PHP 很有趣!</h2>";
print "Hello world!<br>";
print "我要学习 PHP!";
?>
	
显示变量
<?php
$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");
 
print $txt1;
print "<br>";
print "在 $txt2 学习 PHP ";
print "<br>";
print "我车的品牌是 {$cars[0]}";
?>

5.PHP EOF(heredoc) 使用说明
<?php
echo <<<EOF
    <h1>我的第一个标题</h1>
    <p>我的第一个段落。</p>
EOF;
// 结束需要独立一行且前后不能空格
?>

<?php
$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>

6.PHP 5 数据类型
	
PHP 字符串
<?php 
$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;
?>

PHP 整型
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数 
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>

PHP 浮点型
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
?>

PHP 数组
<?php 
$cars=array("Volvo","BMW","Toyota");
var_dump($cars);
?>

PHP 对象
<?php
class Car
{
  var $color;
  function __construct($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}
?>

PHP NULL 值
<?php
$x="Hello world!";
$x=null;
var_dump($x);
?>

7.PHP 类型比较
<?php
if(42 == "42") {
    echo '1、值相等';
}
 
echo PHP_EOL; // 换行符
 
if(42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、不相等';
}
?>

PHP中 比较 0、false、null
<?php
echo '0 == false: ';
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false);
echo PHP_EOL;
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo PHP_EOL;
echo 'false == null: ';
var_dump(false == null);
echo 'false === null: ';
var_dump(false === null);
echo PHP_EOL;
echo '"0" == false: ';
var_dump("0" == false);
echo '"0" === false: ';
var_dump("0" === false);
echo PHP_EOL;
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo PHP_EOL;
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo PHP_EOL;
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);
?>	
	
8.PHP 常量
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@)
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
echo greeting;   // 输出 "greeting"
?>

<?php
// 不区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com", true);
echo greeting;  // 输出 "欢迎访问 Runoob.com"
?>
	
常量是全局的
<?php
define("GREETING", "欢迎访问 Runoob.com");
function myTest() {
    echo GREETING;
} 
myTest();    // 输出 "欢迎访问 Runoob.com"
*/           // (测试实例时请单独测试，并将这行删除@-@)
?>

9.PHP 字符串变量
	
PHP 中的字符串变量
<?php 
$txt="Hello world!"; 
echo $txt; 
?>

PHP 并置运算符
<?php 
$txt1="Hello world!"; 
$txt2="What a nice day!"; 
echo $txt1 . " " . $txt2; 
?>

PHP strlen() 函数
<?php 
echo strlen("Hello world!"); 
?>

PHP strpos() 函数
<?php 
echo strpos("Hello world!","world"); 
?>

10.PHP 运算符
<?php 
$x=10; 
$y=6;
echo ($x + $y); // 输出16
echo '<br>';  // 换行
 
echo ($x - $y); // 输出4
echo '<br>';  // 换行
 
echo ($x * $y); // 输出60
echo '<br>';  // 换行
 
echo ($x / $y); // 输出1.6666666666667
echo '<br>';  // 换行
 
echo ($x % $y); // 输出4
echo '<br>';  // 换行
 
echo -$x;
?>

<?php
var_dump(intdiv(10, 3));
?>

PHP 赋值运算符
<?php 
$x=10; 
echo $x; // 输出10
 
$y=20; 
$y += 100;
echo $y; // 输出120
 
$z=50;
$z -= 25;
echo $z; // 输出25
 
$i=5;
$i *= 6;
echo $i; // 输出30
 
$j=10;
$j /= 5;
echo $j; // 输出2
 
$k=15;
$k %= 4;
echo $k; // 输出3
?>

<?php
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world! 
 
$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world! 
?>

PHP 递增/递减运算符
<?php
$x=10; 
echo ++$x; // 输出11
 
$y=10; 
echo $y++; // 输出10
 
$z=5;
echo --$z; // 输出4
 
$i=5;
echo $i--; // 输出5
?>

PHP 比较运算符
<?php
$x=100; 
$y="100";
 
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";
 
$a=50;
$b=90;
 
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>

PHP 数组运算符
<?php
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?>

三元运算符
<?php
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, PHP_EOL;
 
// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, PHP_EOL;
?>

<?php
// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody';
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
?>

组合比较符(PHP7+)
<?php
// 整型
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1
 
// 浮点型
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1
 
// 字符串
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
?>

运算符优先级
<?php
// 优先级： &&  >  =  >  and
// 优先级： ||  >  =  >  or
 
$a = 3;
$b = false;
$c = $a or $b;
var_dump($c);          // 这里的 $c 为 int 值3，而不是 boolean 值 true
$d = $a || $b;
var_dump($d);          //这里的 $d 就是 boolean 值 true 
?>

括号的使用
<?php
// 括号优先运算
 
$a = 1;
$b = 2;
$c = 3;
$d = $a + $b * $c;
echo $d;
echo "\n";
$e = ($a + $b) * $c;  // 使用括号
echo $e;
echo "\n";
?>

11.PHP If...Else 语句
PHP - if 语句
<?php
$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
?>

PHP - if...else 语句
<?php
$t=date("H");
if ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>
	
PHP - if...elseif....else 语句
<?php
$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
?>
	
12.PHP Switch 语句
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
switch (n)
{
case label1:
    如果 n=label1，此处代码将执行;
    break;
case label2:
    如果 n=label2，此处代码将执行;
    break;
default:
    如果 n 既不等于 label1 也不等于 label2，此处代码将执行;
}
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>
<?php
$favcolor="red";
switch ($favcolor)
{
case "red":
    echo "你喜欢的颜色是红色!";
    break;
case "blue":
    echo "你喜欢的颜色是蓝色!";
    break;
case "green":
    echo "你喜欢的颜色是绿色!";
    break;
default:
    echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
}
?>
13.PHP 数组
<?php
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

获取数组的长度 - count() 函数
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>

遍历数值数组
<?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
 
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>

PHP 关联数组
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>

遍历关联数组
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
 
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
	
14.PHP 数组排序
sort() - 对数组进行升序排列
<?php
$cars=array("Volvo","BMW","Toyota");
sort($cars);
?>

<?php
$numbers=array(4,6,2,22,11);
sort($numbers);
?>

rsort() - 对数组进行降序排列
<?php
$cars=array("Volvo","BMW","Toyota");
rsort($cars);
?>
	
<?php
$numbers=array(4,6,2,22,11);
rsort($numbers);
?>

asort() - 根据数组的值，对数组进行升序排列
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
?>

ksort() - 根据数组的键，对数组进行升序排列
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);
?>

arsort() - 根据数组的值，对数组进行降序排列
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
arsort($age);
?>

krsort() - 根据数组的键，对数组进行降序排列
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
?>
	
15.PHP 超级全局变量
PHP $GLOBALS
<?php 
$x = 75; 
$y = 25;
 
function addition() 
{ 
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
addition(); 
echo $z; 
?>

PHP $_SERVER
<?php 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

PHP $_REQUEST
<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
 
<?php 
$name = $_REQUEST['fname']; 
echo $name; 
?>
 
</body>
</html>
	
PHP $_POST
<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
 
<?php 
$name = $_POST['fname']; 
echo $name; 
?>
 
</body>
</html>

PHP $_GET
<html>
<body>
 
<?php 
echo "Study " . $_GET['subject'] . " @ " . $_GET['web'];
?>
 
</body>
</html>

16.PHP 循环 - While 循环
while 循环
<html>
<body>

<?php
$i=1;
while($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}
?>

</body>
</html>

do...while 语句
<html>
<body>

<?php
$i=1;
do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i<=5);
?>

</body>
</html>

17.PHP 循环 - For 循环
for 循环
<?php
for ($i=1; $i<=5; $i++)
{
    echo "The number is " . $i . "<br>";
}
?>

foreach 循环
<?php
$x=array("one","two","three");
foreach ($x as $value)
{
    echo $value . "<br>";
}
?>
	
18.PHP 函数
创建 PHP 函数
<?php
function functionName()
{
    // 要执行的代码
}
?>

<?php
function writeName()
{
    echo "Kai Jim Refsnes";
}
 
echo "My name is ";
writeName();
?>

PHP 函数 - 添加参数
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
function writeName($fname)
{
    echo $fname . " Refsnes.<br>";
}
 
echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
function writeName($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
 
echo "My name is ";
writeName("Kai Jim",".");
echo "My sister's name is ";
writeName("Hege","!");
echo "My brother's name is ";
writeName("Ståle","?");
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

PHP 函数 - 返回值
<?php
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
 
echo "1 + 16 = " . add(1,16);
?>

19.PHP 魔术常量
__LINE__
<?php
echo '这是第 " '  . __LINE__ . ' " 行';
?>

__FILE__
<?php
echo '该文件位于 " '  . __FILE__ . ' " ';
?>

__DIR__
<?php
echo '该文件位于 " '  . __DIR__ . ' " ';
?>

__FUNCTION__
<?php
function test() {
    echo  '函数名为：' . __FUNCTION__ ;
}
test();
?>

__CLASS__
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
class test {
    function _print() {
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

__TRAIT__
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
 
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}
 
class MyHelloWorld extends Base {
    use SayWorld;
}
 
$o = new MyHelloWorld();
$o->sayHello();
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

__METHOD__
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
function test() {
    echo  '函数名为：' . __METHOD__ ;
}
test();
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

__NAMESPACE__
<?php
/*           // (测试实例时请单独测试，并将这行删除@-@) 
namespace MyProject;
 
echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
*/           // (测试实例时请单独测试，并将这行删除@-@) 
?>

20.PHP 面向对象
PHP 类定义
<?php
class Site {
 
  var $url;//成员变量
  var $title;
  
  
  function setUrl($par){//成员函数
     $this->url = $par;
  }
  
  function getUrl(){
     echo $this->url . PHP_EOL;
  }
  
  function setTitle($par){
     $this->title = $par;
  }
  
  function getTitle(){
     echo $this->title . PHP_EOL;
  }
}
?>

PHP 构造函数
$runoob = new Site('www.runoob.com', '菜鸟教程'); 
$taobao = new Site('www.taobao.com', '淘宝'); 
$google = new Site('www.google.com', 'Google 搜索'); 

// 调用成员函数，获取标题和URL 
$runoob->getTitle(); 
$taobao->getTitle(); 
$google->getTitle(); 

$runoob->getUrl(); 
$taobao->getUrl(); 
$google->getUrl();


