# Usado para esse test
- Extensão php para utilizar mongo
- Php 8.1
- Laravel 9

# Configurações dentro do projeto
- Criar as database especificadas no env abaixo
- Env
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=root
```

- env.testing
    - Database somente para teste com propósito de não afetar app principal
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelmysql_test
DB_USERNAME=root
DB_PASSWORD=root
```

# comandos
```shell
php artisan migrate
```

# OBS
- Para rodar os teste via interface phpStorm, necessário configurar o template de teste no projeto
