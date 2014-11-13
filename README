===========
Laravel package 4 RC4 encrypt function


===========
Install

1. composer.json  

1.1 "require" section 
```php
"nifus/php-rc4": "dev-master"
```

1.2 "repositories" section 
```php
"repositories": [
   {
      "type": "vcs",
      "url": "https://github.com/nifus/php-rc4.git"
   }
]
```

2. Run "composer update"


3. /app/config/app.php
```php
'providers' => array(
...
'Nifus\PhpRc4\PhpRc4ServiceProvider',
...

```

===========
Execute
```php
 $r = new RC4();
 $encrypt = $r->rc4('KEY','TEXT');
 $decrypt = $r->rc4('KEY',$encrypt);
```


   