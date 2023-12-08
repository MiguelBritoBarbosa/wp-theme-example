# wp-theme-example
Exemplo de tema wordpress com Bootstrap, Bootstrap Icons e TailwindCSS
## Instalação do PHP e Apache ->


instalar o xampp


## Instalação do WordPress -> 

`curl -O https://wordpress.org/latest.tar.gz`

`tar xvf latest.tar.gz`

documentação da criação de temas: https://developer.wordpress.org/themes/getting-started/



## adicionando TailwindCSS no tema ->
iniciar um package.json com `npm init -y`

`npm install -D tailwindcss` para instalar o tailwind
`npx tailwindcss init`
adicionar a configuração:
```
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./template-parts/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
  prefix: 'tw-',
    corePlugins: {
        preflight: false,
    },
}
```
criar na raiz do tema, uma pasta tailwind.css e escrever: 
```
@tailwind base;
@tailwind components;
@tailwind utilities;
```

adicionar no package.json o comando tailwindstart nos scripts

```
"scripts":{
  "test": "echo \"Error: no test specified\" && exit 1",
  "tailwindstart": "npx tailwindcss -i ./css/tailwind.css -o ./css/tailwind_output.css --watch"
}   
```

## adicionar o bootstrap e bootstrap-icons -> 
`npm i bootstrap bootstrap-icons`

adicionar todos pelo arquivo functions.php:

```
<?php
function load_styles_and_scripts()
{
	wp_enqueue_style('tailwind-styles', get_template_directory_uri() . '/css/tailwind_output.css', array(), null);
	wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '5.3.2');
	wp_enqueue_script('bootstrap-scripts', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), null);
	wp_enqueue_style('bootstrap-icons-styles', get_template_directory_uri() . '/node_modules/bootstrap-icons/font/bootstrap-icons.min.css', array(), '5.3.2');
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
```




## Versionamento ->

fazendo um fork no BitBucket: http://www.mauda.com.br/?p=1674

após ter feito a fork, clonar o repositório na minha máquina:

`git clone git@bitbucket.org.atlassian/LINK_DO_REPOSITÓRIO`

após as alterações terem sido feitas:

`git status` (para checar as alterações)

`git add .` (para adicionar todas as alterações)

`git commit` (Escrever a mensagem em Ingles baseado nos Conventional Commits) : https://www.conventionalcommits.org/pt-br/v1.0.0/

`git push origin master` (ou HEAD, que irá para a branch que estou trabalhando)

Fazer o Pull Request:

tutorial: https://bitbucket.org/product/br/guides/basics/four-starting-steps


