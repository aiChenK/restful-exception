# RestfulException

常用异常类

## 运行环境

- PHP 7.2+

## 安装方法

        composer require aichenk/restful-exception

## 使用

```php
throw new \RestfulException\NotLoginException('用户未登录');
throw new \RestfulException\InvalidArgumentException('id不正确');
```

## 异常说明

![2022/03/20220308235259](https://gitee.com/aiChenK/img/raw/master/2022/03/20220308235259.png)

## 更新日志

2022-03-08 - 1.1.0
- 补充多种异常类，补充继承关系（如上图）
