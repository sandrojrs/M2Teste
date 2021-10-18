# Laravel 8.0

O objetivo deste repositório é mostrar boas práticas de desenvolvimento no [Laravel] (http://laravel.com/), bem como apresentar casos de uso de recursos do framework como:

- [Autenticação] (https://laravel.com/docs/8.x/authentication)
- API
  - Autenticação de token
  - [Recursos de API] (https://laravel.com/docs/8.x/eloquent-resources)
  - Controle de versão
- [Migrações] (https://laravel.com/docs/8.x/migrations)
- [Políticas] (https://laravel.com/docs/8.x/authorization)
- [Provedores] (https://laravel.com/docs/8.x/providers)
- [Solicitações] (https://laravel.com/docs/8.x/validation#form-request-validation)
- [Seeding & Factories] (https://laravel.com/docs/8.x/seeding)


## Instalação

Configurando seu ambiente de desenvolvimento em sua máquina local:
`` `bash
$ git clone https://github.com/sandrojrs/M2Teste
$ cd M2Teste
$ cp .env.example .env
$ composer install
$ artisan chave: gerar
$ php artisan jwt: secret
$ php artisan migrate --seed
`` `

Agora você pode acessar o aplicativo via [http://localhost:8000/api] (http://localhost:8000/api).

Isso criará um novo usuário que você pode usar para fazer login:
`` `yml
email: admin@admin.local
senha: 12345
`` `
## Acessando a API

Os clientes podem acessar a API REST. As solicitações de API requerem autenticação por meio de token. Você pode criar um novo token em seu perfil de usuário.

Em seguida, você pode usar esse token como parâmetro de url ou no cabeçalho de autorização:
