#Robots Fabric тестовое задание

Есть завод который создает роботов, каждый тип роботов имеет вес, скорость, высоту. Несколько роботов могут объединяться в один робот. Результирующая скорость работа будет равняться минимальной из всех объединенных роботов, вес и высота будут равны сумме всех весов и высот каждого из роботов соответственно.

Нужно спроектировать классы так, чтобы можно было просто добавлять к заводу другой тип роботов и создавать любое количество этих роботов.

Пример использования:

```php
$factory = new FactoryRobot();

/Добавления типов Robot1, Robot2 роботов которые создает фабрика

$factory->addType(new Robot1());

$factory->addType(new Robot2());
```

• Результатом работы метода createRobot1 будет массив из 5 объектов класса Robot1

• Результатом работы метода createRobot2 будет массив из 2 объектов класса Robot2

```php 
var_dump($factory->createRobot1(5));
```

```php 
var_dump($factory->createRobot2(2));
```

Объединение роботов в один
===========================

```php
$mergeRobot = new MergeRobot();

$mergeRobot ->addRobot(new Robot2());

$mergeRobot ->addRobot($factory->createRobot2(2));

$factory->addType($mergeRobot );

$res = reset($factory->createMergeRobot(1));

// Результатом работы метода будет минимальная скорость из всех объединенных роботов

echo $res->getSpeed();

// Результатом работы метода будет сумма всех весов объединенных роботов

$res->getWeight()
```
