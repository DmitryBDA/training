<?php

namespace App\Http\Controllers;

use App\Patterns\AbstractFactory\SwitchFactory;
use App\Patterns\Adapter\Interfaces\iNotification;
use App\Patterns\Composite\Classes\Box;
use App\Patterns\Composite\Classes\Product;
use App\Patterns\ContainerProperty\Classes\BlogPost;
use App\Patterns\Delegation\Messenger;
use App\Patterns\EventChannel\Classes\EventChannel;
use App\Patterns\EventChannel\Classes\Publisher;
use App\Patterns\EventChannel\Classes\Subscriber;
use App\Patterns\Facade\MarketPlace;
use App\Patterns\FactoryMethod\RoadLogistic;
use App\Patterns\FactoryMethod\SeaLogistic;
use App\Patterns\Multiton\Multiton;
use App\Patterns\SimpleFactory\SimpleFactory;
use App\Patterns\Singleton\Singleton;
use App\Patterns\StaticFactory\StaticFactory;

class PatternsController extends Controller
{
    public function containerProperty(): string
    {
        $blogPost = new BlogPost('title', 'desc');
        $blogPost->addProperty('new_property', 'value new property');
        \Debugbar::info($blogPost);
        \Debugbar::info($blogPost->getProperty('new_property'));

        return 'pattern containerProperty';
    }

    public function delegation(): string
    {
        $messenger = new Messenger();

        $messenger
            ->setSender('sender@mail.ru')
            ->setRecipient('recipient@mail.ru')
            ->setMessage('message by email')
            ->send();

        \Debugbar::info($messenger);

        $messenger->toSms()
            ->setSender('+79149098288')
            ->setRecipient('+79836514258')
            ->setMessage('message by sms')
            ->send();

        \Debugbar::info($messenger);

        return 'pattern delegation';
    }

    public function eventChannel(): string
    {
        $eventChannel = new EventChannel();

        $bananaNews = new Publisher('banana', $eventChannel);
        $tomatoNews = new Publisher('tomato', $eventChannel);

        $sansa = new Subscriber('Sansa Stark');
        $snow = new Subscriber('Jon Snow');

        $eventChannel->subscribe('banana', $sansa);
        $eventChannel->subscribe('tomato', $snow);

        /**
         * Поставщики публикуют данные, и происходит уведомление всех кто подписан на данные темы
         */
        $bananaNews->publish('Пришли 30 коробок бананов');
        $tomatoNews->publish('Свежие помидоры');


        return 'pattern eventChannel';
    }

    /**
     * @throws \Exception
     */
    public function abstractFactory(): string
    {

        //$furnitureFactory = (new SwitchFactory())->getFactory('modern');
        $furnitureFactory = (new SwitchFactory())->getFactory('victorian');

        $chair = $furnitureFactory->createChair();
        $sofa = $furnitureFactory->createSofa();

        $chair->getDescription();
        $sofa->getDescription();

        return 'pattern abstractFactory';
    }

    public function factoryMethod(): string
    {
        $logistic = new SeaLogistic();
        //$logistic = new RoadLogistic();

        $logistic->planDelivery();

        return 'pattern factoryMethod';
    }

    public function staticFactory(): string
    {
        $messenger = StaticFactory::build('email');
        //$messenger = StaticFactory::build('sms');

        \Debugbar::info($messenger);
        return 'pattern staticFactory';
    }

    public function simpleFactory(): string
    {
        $factory = new SimpleFactory();
        //$messenger = $factory->build('email');
        $messenger = $factory->build('sms');

        \Debugbar::info($messenger);
        return 'pattern simpleFactory';
    }

    public function singleton(): string
    {
        $arr = [];
        $singleton =  Singleton::getInstance();
        $arr[] = $singleton;
        $singleton2 =  Singleton::getInstance();
        $singleton2->a = 45;
        $arr[] = $singleton;
        \Debugbar::info($arr);

        return 'pattern singleton';
    }

    public function multiton(): string
    {
        $arr = [];

        $arr[] = Multiton::getInstance('mysql');
        $arr[] = Multiton::getInstance('postgres');
        $arr[] = Multiton::getInstance('mysql');
        $arr[] = Multiton::getInstance('postgres');
        $arr[] = Multiton::getInstance('postgres');

        \Debugbar::info($arr);

        return 'pattern multiton';
    }

    public function adapter(): string
    {
        $emailNotification = app(iNotification::class);

        $emailNotification->send('Привет');

        return 'pattern adapter';
    }

    public function facade(): string
    {
        $marketPlace = new MarketPlace();

        $marketPlace->productReceipt();
        \Debugbar::info('------------------------');
        $marketPlace->productRelease();
        return 'pattern facade';
    }

    public function composite(): string
    {
        $boxMain = new Box();

        $product1 = new Product(50);
        $product2 = new Product(60);

        $boxMain->addProduct($product1);
        $boxMain->addProduct($product2);

        $product3 = new Product(10);
        $product4 = new Product(20);
        $box1 = new Box();
        $box1->addProduct($product3);
        $box1->addProduct($product4);

        $product5 = new Product(2);
        $product6 = new Product(6);
        $box2 = new Box();
        $box2->addProduct($product5);
        $box2->addProduct($product6);

        $box1->addProduct($box2);

        $boxMain->addProduct($box1);

        \Debugbar::info($boxMain->calcPrice());
        return 'pattern composite';
    }
}
