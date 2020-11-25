# PHP拓展实现字符串操作

# Install

```shell script
$ cd $DIR/ext
$ phpize
$ ./configure
$ make && make install
```

# Usage

```php
Str\Camel::convert("snake_name","_"); // 字符串转驼峰
Str\Camel::convert("snake-name","-"); // 字符串转驼峰
```
