# WEB6 PHP Singleton Trait

Implementation of singleton design pattern in PHP5.4+ using a trait.

## Install

Install via Composer

```bash
$ composer require web6/singleton
```

## Usage

### Configure autoload

Configure autoloading by including Composer's generated file :

```php
include_once('vendor/autoload.php');
```

### Create a singleton class

To create a singleton class simply use the `W6\Sinfleton\SingletonTrait` and move the `__construct()` logic to the `init()` method.

```php
class App {

    use \W6\Singleton\SingletonTrait;

    public $message = 'Not inited';

    protected function init() {
        $this->message = 'Inited';
    }
}
```

### Use your class

Anywhere in your application you can request the same instance of the class.

```php
$app = App::instance();
echo $app->message;
```
