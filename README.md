# AdminLTE dashboard for CakePHP

## Instalação

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
