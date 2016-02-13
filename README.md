# AdminLTE
Plugin do tema [AdminLTE](https://almsaeedstudio.com/preview) para CakePHP 3x

#Install
1 - De um git clone no rep dentro da sua parta plugin no raiz do seu projeto;
2 - Add ao seu bootstrap.php a linhas Plugin::load("AdminLTE");
3 - Add ao seu AppController -> beforeRender() a seguinte linha: $this->viewBuilder()->layout('AdminLTE');
4 - Copie o AdminLTE dentro da pasta Template do plugin para a do seu projeto;
5 - Copie a pasta AdminLTE do webroot do plugin para o do seu projeto;
6 - Rode um bake da seguinte forma, php cake.php bake all alguma_coisa --theme AdminLTE
