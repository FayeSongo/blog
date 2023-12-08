<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste Formations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container text-center">

        <div class="row">
          <div class="col s12">
            <h1>Liste Formations</h1>
            <a href="/ajouter-formation" class="btn btn-primary">Ajouter une formation</a>
        
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom de la Formation</th>
                        <th>Description</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Informatique</td>
                        <td>Description de la Formation Informatique</td>
                        <td>
                            <a href="#" class="btn btn-info">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Gestion et Comptable</td>
                        <td>Description de la Formation  Gestion et Comptable</td>
                        <td>
                            <a href="#" class="btn btn-info">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Developpeur Laravel</td>
                        <td>Description de la Formation Developpeur Laravel</td>
                        <td>
                            <a href="#" class="btn btn-info">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
                
                    @foreach ($formations as $formation)
                    <tr>
                        <td>{{ $formation->id }}</td>
                        <td>{{ $formation->nom }}</td>
                        <td>{{ $formation->description }}</td>
                        <td>
                            <a href="/update-formation/{{ $formation->id }}" class="btn btn-info">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
