<?php
use Test\ObserverMode\Atest;
use Test\ObserverMode\BTest;
use Test\ObserverMode\CTest;
use Test\FactoryMode\Factory\Factory;
use Test\FactoryMode\Base\People;
use Test\StrategyMode\Op;
use Test\AdapterMode\BaseMessage\JiguangMessage;
use Test\AdapterMode\BaseMessage\BaiduYunMessage;
use Test\AdapterMode\BaseMessage\Message;
use Test\AdapterMode\Sdk\JiguangSDKAdapter;
use Test\AdapterMode\Sdk\BaiduYunSDKAdapter;
use Test\AgentMode\AgentObject\Printer;
use Test\AgentMode\Represented\TextShop;
use Test\AgentMode\Represented\PhotoShop;
use Test\BuilderMode\ProductBuilder\ProductBuilder;
use Test\CombinationMode\MakeClass\Arm;
use Test\DecoratorMode\DecoratorClass\AWorker;
use Test\DecoratorMode\Concrete\ShuiGuan;
use Test\SingletonMode\Base\Singleton;
use Test\RegistrationMode\Register\Register;
use Test\RegistrationMode\BaseClass\TestClass1;
use Test\RegistrationMode\BaseClass\TestClass2;
use Test\RegistrationMode\BaseClass\TestClass3;
use Test\CommandMode\Receiver\Receiver;
use Test\CommandMode\Concrete\ConcreteCommand;
use Test\CommandMode\Invoker\Invoker;
use Test\ResponsibilityChainMode\ConcreteClass\FilterStrict;
use Test\ResponsibilityChainMode\ConcreteClass\FilterWarning;
use Test\ResponsibilityChainMode\ConcreteClass\FilterMobile;
use Test\VisitorMode\OperationClass\HardDisk;
use Test\VisitorMode\OperationClass\Memory;
use Test\VisitorMode\OperationClass\OperatingSystem;
use Test\VisitorMode\Computer;
use Test\VisitorMode\VisitorConcrete\ExpertVisitor;
use Test\VisitorMode\VisitorConcrete\GreenHandVisitor;
use Test\StateMode\Context\Work;
use Test\MediatorMode\MediatorConcrete\ChatMediator;
use Test\MediatorMode\UserConcrete\ChatUser;
use Test\BridgeMode\ConcreteBridge\RefinedAbstraction;
use Test\BridgeMode\ConcreteBridged\ConcreteImplementorA;
use Test\BridgeMode\ConcreteBridged\ConcreteImplementorB;
use Test\CompositeMode\Concrete\Composite;
use Test\CompositeMode\Concrete\Leaf;

require 'vendor/autoload.php';

/******************* 1 、测试观察者模式（start） **********************/
// 实例化被观察者
$a = new ATest();

// 在被观察者中注册观察者
$a->addObserver(new BTest());
$a->addObserver(new CTest());

// 可以看到观察到的信息
$a->addListen('D4');

/******************* 1、测试观察者模式（end） **********************/


/******************* 2、测试工厂模式（start） **********************/
$p = People::createInstance('cook');
$p->work();
/******************* 2、测试工厂模式（end） **********************/


/******************* 3、测试策略模式（start） **********************/

$obj = new Op('div');
echo "<br>";
echo $obj->getResult(7,2);
/******************* 3、测试策略模式（end） **********************/


/******************* 4、测试适配器模式（start） **********************/
$jiguangMessage = new JiguangMessage();
$baiduYunMessage = new BaiduYunMessage();
$message = new Message();

// 原来老系统发送短信，使用阿里云
$message->send();
$message->push();

// 部分模块使用极光发
$jgAdapter = new JiguangSDKAdapter($jiguangMessage);
$jgAdapter->send();
$jgAdapter->push();

// 部分模块使用百度云发
$baiduAdapter = new BaiduYunSDKAdapter($baiduYunMessage);
$baiduAdapter->send();
$baiduAdapter->push();
/******************* 4、测试适配器模式（end） **********************/


/******************* 5、测试代理模式（start） **********************/
$printer = new Printer();
$textShop = new TextShop($printer);
$photoShop = new PhotoShop($printer);
$textShop->printSth();
$photoShop->printSth();
/******************* 5、测试代理模式（end） **********************/


/******************* 6、测试建造者模式（start） **********************/
$config = [
    'type' => '汽车',
    'price' => '2000000',
    'color' => '白色',
];
$objBuilder = new ProductBuilder($config);
$objBuilder->build();
$objProduct = $objBuilder->getProduct();
echo '<br/>';
var_dump($objProduct);
/******************* 6、测试建造者模式（end） **********************/


/******************* 7、测试组合模式（start） **********************/
$arm = new Arm();
$arm->add('Bubing');
$arm->add('Paobing');
$arm->add('TeZhongbing');
$arm->show();
$arm->delete('TeZhongbing');
$arm->show();
/******************* 7、测试组合模式（end） **********************/


/******************* 8、测试装饰器模式（start） **********************/

$worker = new AWorker(new ShuiGuan());
$worker->doSomeWork();
/******************* 8、测试装饰器模式（end） **********************/


/******************* 9、测试单例模式（start） **********************/
$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();
$instance3 = Singleton::getInstance();
var_dump($instance1, $instance2, $instance3);
/******************* 9、测试单例模式（end） **********************/


/******************* 10、测试注册模式（start） **********************/
$register = new Register();
$testClass1 = new TestClass1('x1');
$testClass2 = new TestClass2('x2');
$testClass3 = new TestClass3('x3');
$register->set('TestClass1', $testClass1);
$register->set('TestClass2', $testClass2);
$register->set('TestClass3', $testClass3);
var_dump($register->get());
var_dump($register->get('TestClass2'));

$register->__unset('TestClass3');
var_dump($register->get());
/******************* 10、测试注册模式（end） **********************/


/******************* 11、测试命令模式（start） **********************/
$receiver = new Receiver('hello word');
$command = new ConcreteCommand($receiver);
$invoker = new Invoker($command);
$invoker->action();
/******************* 11、测试命令模式（end） **********************/


/******************* 12、测试责任链模式（start） **********************/
$f1 = new FilterStrict();
$f2 = new FilterWarning();
$f3 = new FilterMobile();
$f1->setNext($f2);
$f2->setNext($f3);
$m1 = "现在开始测试链条1：语句中不包含敏感词，需要替换掉打架这种词，然后给手机号加上星：13333333333，这样的数据才可以对外展示哦";
echo $f1->filter($m1);
echo PHP_EOL;
$m2 = "现在开始测试链条2：这条语句走不到后面，因为包含了毒X，直接就报错了！！！语句中不包含敏感词，需要替换掉打架这种词，然后给手机号加上星：13333333333，这样的数据才可以对外展示哦";
echo $f1->filter($m2);
echo PHP_EOL;
/******************* 12、测试责任链模式（end） **********************/


/******************* 13、测试访问者模式（start） **********************/
echo '<br>';
$hardDisk = new HardDisk();
$memory = new Memory();
$operatingSystem = new OperatingSystem();

$computerExpert = new Computer();
$computerExpert->attach($memory);
$computerExpert->attach($operatingSystem);
$computerExpert->accept(new ExpertVisitor());

echo '--------------------------------',PHP_EOL;

$computerGreen = new Computer();
$computerGreen->attach($hardDisk);
$computerGreen->attach($memory);
$computerGreen->attach($operatingSystem);
$computerGreen->accept(new GreenHandVisitor());
/******************* 13、测试访问者模式（end） **********************/


/******************* 14、测试状态模式（start） **********************/
$work = new Work();
$work->hour = date('H');
echo '<br>';
$call = $work->writeCode();
/******************* 14、测试状态模式（end） **********************/


/******************* 15、测试中介者模式（start） **********************/
echo '<br>';
$m = new ChatMediator();

$u1 = new ChatUser($m, '用户1');
$u2 = new ChatUser($m, '用户2');
$u3 = new ChatUser($m, '用户3');

$m->attach($u1);
$m->attach($u2);
$m->attach($u3);

$u1->send('大家好啊');
echo '<br>';
$u2->send('你好呀');
echo '<br>';
$m->detach($u2);
echo '<br>';
$u3->send('欢迎！');
echo '<br>';
/******************* 15、测试中介者模式（end） **********************/


/******************* 16、测试桥接模式（start） **********************/
echo '<br>';
$abstraction = new RefinedAbstraction(new ConcreteImplementorA());
$abstraction->operation();
echo '<br>';
$abstraction = new RefinedAbstraction(new ConcreteImplementorB());
$abstraction->operation();
/******************* 16、测试桥接模式（end） **********************/


/******************* 17、测试合成模式（start） **********************/
echo '<br>';
$leaf1 = new Leaf('第一个叶子');
$leaf2 = new Leaf('第二个叶子');

$composite = new Composite();
$composite->add($leaf1);
$composite->add($leaf2);
$composite->operation();
echo '<br>';

$composite->remove($leaf2);
$composite->operation();
echo '<br>';
/******************* 17、测试合成模式（end） **********************/