Criaçao  de um api para Produtos


Rotas
```
+--------+-----------+----------------------------+-----------------+------------------------------------------------+------------+
| Domain | Method    | URI                        | Name            | Action                                         | Middleware |
+--------+-----------+----------------------------+-----------------+------------------------------------------------+------------+
|        | GET|HEAD  | /                          |                 | Closure                                        | web        |
|        | GET|HEAD  | api/product                | product.index   | App\Http\Controllers\ProductController@index   | api        |
|        | POST      | api/product                | product.store   | App\Http\Controllers\ProductController@store   | api        |
|        | GET|HEAD  | api/product/create         | product.create  | App\Http\Controllers\ProductController@create  | api        |
|        | GET|HEAD  | api/product/{product}      | product.show    | App\Http\Controllers\ProductController@show    | api        |
|        | PUT|PATCH | api/product/{product}      | product.update  | App\Http\Controllers\ProductController@update  | api        |
|        | DELETE    | api/product/{product}      | product.destroy | App\Http\Controllers\ProductController@destroy | api        |
|        | GET|HEAD  | api/product/{product}/edit | product.edit    | App\Http\Controllers\ProductController@edit    | api        |
+--------+-----------+----------------------------+-----------------+------------------------------------------------+------------+
```

Ao clonar o projeto siga os seguintes passos
- Composer install
- Crie o arquivo .env
- Gerar a chave da aplicaçao: `php artisan key:generate`
