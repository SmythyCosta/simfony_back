CRUD API
========================


End Points Movies:

    * GET http://127.0.0.1:8000/movies

    * GET http://127.0.0.1:8000/movies/4

    * POST http://127.0.0.1:8000/movies
        {
            "title": "Filme bla blabla",
            "description": "blabla description"
        }

    * PUT http://127.0.0.1:8000/movies
        {
            "id": 10,
            "title": "Filme bla blabla",
            "description": "description update"
        }

    * DELETE http://127.0.0.1:8000/movies/4



## Bizzu para Sobrevivencia


### Create Project
	composer create-project symfony/framework-standart-edition movies "3.3.*"


### Instalando as migracoes do doctrine
	composer require doctrine/doctrine-migrations-bundle "^1.3"
		- add in Kernel app/AppKernel.php


### Instalando a lib para os Seeds
	composer require --dev doctrine/doctrine-fixtures-bundle


### Instalando a lib para os SymfonyRestBundle e Serializer
	composer require friendsofsymfony/rest-bundle
	composer require jms/serializer-bundle


### Console
    php bin/console server:start


### Doctrine comands
    php bin/console doctrine:generate:entity 			# generate entity
        AppBundle:Movie
    php bin/console doctrine:migrations:diff 			# diff
    php bin/console doctrine:migrations:migrate 		# migrate
    php bin/console doctrine:fixtures:load              # seeds


### Check Routers
    php bin/console debug:router