# AdminLTE dashboard for CakePHP 3

## Instalação

Execute: 
```
compose require murilolopes/adminlte
```

Insira a seguinte linha no composer.json do seu projeto:

```
"muriloangelo/adminlte": "dev-master"
```

Atualize com o comando: 

```
composer update
```

## Carregando o plugin

Em config/bootstrap.php adicione a seguinte linha:

```
Plugin::load('AdminLTE', ['bootstrap' => true]);
```

Em src/Controller/AppController.php adicione ao método beforeRender():

```
$this->viewBuilder()->layout('AdminLTE.AdminLTE');
```

## Usando o plugin

Para gerar as views utilizando o plugin basta usar o comando:

```
cake bake all algumacoisa --theme AdminLTE
```

