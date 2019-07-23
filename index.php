<?php
require './vendor/autoload.php';
use src\Track;
use src\Car;
use src\Bicycle;
use src\Motorcycle;
use src\Passenger;
use src\Driver;
use src\IMove;
use src\TransWithPass;

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*С помощью ООП опишите с помощью PHP следующие сущности: автомобиль, грузовик, мотоцикл, велосипед, человек. Вы
следует использовать интерфейсы, классы и наследование объектов. Все эти классы должны иметь методы
отвечает за движение вперед, назад, влево, вправо, добавление водителя в автомобиль, добавление
пассажира на транспортном средстве, увеличивая и уменьшая скорость.
2. Реализовать абстрактную Fabric на PHP, которая будет производить автомобили, велосипеды, мотоциклы и грузовики.
3. Напишите PHP-функцию, которая будет возвращать сумму всех элементов массива, массив может быть вложенным массивом.
(вложение может быть 2 или более), НЕ используйте стандартные функции PHP для работы с массивами.
4. Напишите функцию PHP, которая будет возвращать все пересекающиеся элементы двух массивов, НЕ используйте
стандартные функции PHP для работы с массивами.
5. Напишите функцию PHP, которая будет возвращать только «четные» элементы массива, НЕ используйте стандартный PHP
функции для работы с рабочими массивами.
dev-*/

$driver = new Driver();
$driver->setName('Jon');
$driver->setIDLicense(1234);

$driver1 = new Driver();
$driver1->setName('Petya');
$driver1->setIDLicense(6789);

$driver2 = new Driver();
$driver2->setName('Smit');
$driver2->setIDLicense(3456);

$passenger = new Passenger();
$passenger->setName('Ruis');
$passenger->setWeight(120);

$motorcycle = new Motorcycle();
$motorcycle->setDriver($driver);
$motorcycle->move_forward();
$motorcycle->speed_up();


$car = new Car();
$car->setDriver($driver1);
$car->setPassenger($passenger);

$bicycle = new Bicycle();
$bicycle->setDriver($driver2);
$bicycle->turn_right();

