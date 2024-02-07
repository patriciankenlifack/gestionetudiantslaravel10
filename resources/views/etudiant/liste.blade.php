<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="monapp.css">


  
    <title>GESTIONS D'ETUDIANTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">


                 <h1>GESTION D'ETUDIANTS</h1>
                 <hr><hr><hr>
                 <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
                 <hr>

               @if (session('status'))
                 <div class="alert alert-success">
                    {{ session('status') }}
                 </div>
               @endif
               <hr><hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Classe</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                         $ide =1; 
                      @endphp
                     @foreach($etudiants as $etudiant)
                        <tr>
                            <td>{{ $etudiant ->id }}</td>
                            <td>{{ $etudiant ->nom }}</td> 
                            <td>{{ $etudiant ->prenom }}</td>
                            <td>{{ $etudiant ->classe }}</td>
                            <td> 
                                <a href="/update-etudiant/{{ $etudiant->id}}" class="btn btn-info">update</a>
                                <a href="/delete-etudiant/{{ $etudiant->id}}"" class="btn btn-danger">Delete</a>
                             </td>
                        </tr>
                      
                     @endforeach
                    </tbody>
                 </table>
                 {{ $etudiants->links() }}
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-3" style="background-color:whitesmoke;">
               <b> Apropos de patricia nkenlifack</b><br>
               <a href="url">Qui sommes nous?</a> 
               <br> 
               <a href="url">conditions générales d'utilisation</a>
               <br>
               <a href="url">Politique de confidentialité</a>
      </div>         
      <div class="col-md-2" style="background-color:whitesmoke;">
              <b> Suivez Nous</b><br>
              <a href="url">youtube</a> <br> 
               <a href="url">instagram</a><br>
               <a href="url">facebook</a><br>
               <a href="url">twitter</a><br>
               <a href="url">linkedIn</a><br>
     </div>
                   <div class="col-md-3" style="background-color:whitesmoke;">
                      <b>Contactez nous</b><br>
                       <a href="url">email:patriciankenlif@gmail.com</a><br>
                       <a href="url">Hotline:+237620347312</a><br>
                   </div>
      <div class="col-md-4" style="background-color:whitesmoke;">
              <div class="container">
                  <b>Alertes</b></div>
              <div class="container">
                      <form>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">email</span>
                                </div>
                                <input type="text" class="form-control">
                              </div>
                            </form><br>
              </div>
              <div class="container">
                      <form>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">phone</span>
                                </div>
                                <input type="text" class="form-control">
                              </div>
                            </form>
              </div>
                
      </div>
      </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html >