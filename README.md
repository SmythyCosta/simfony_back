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
