

@extends('layouts.app')


@section('content')
 



<div class="container ">
       <div class="row">
           <div class="col-lg-12">
                

            <div class="page-header">
                <div class="alert alert-dismissible alert-info">
             <button type="button" class="btn" data-bs-dismiss="alert"></button>
             <h4 class="alert-heading"> </h4>
             </div>
                </div>
               

                <div class="row">
                @foreach($professeurs as $professeur)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                        <img src="/storage/{{$professeur->image}}" width="150" height="150" class="img-thumbnail" >
                        <div class="caption">
                            <h2 text-primary>Professeur :</h2>

                            <h5>{{$professeur->nom}}</h5>
                            <h5>{{$professeur->prenom}}</h5>
                            <h5>{{$professeur->specialite}}</h5>

                            <p><form action="" method="post"><a href="{{route('professeurs.show',$professeur->id)}}" class="btn btn-dark">Consulter profile</a></form></p>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="page-header">
                    <div class="alert alert-dismissible alert-info">
                 <button type="button" class="btn" data-bs-dismiss="alert"></button>
                 <h4 class="alert-heading"> Dossiers</h4>
                 </div>
                    </div>
           
           <table class="table table-info">
                <thead>
                    <tr>
                    <th scope="col">Prenom</th>
                    <th scope="col">Dossier scientifique</th>
                    <th scope="col">Etat  Dossier_S</th>
                    <th scope="col">Dossier Pedagogique</th>
                    <th scope="col">Etat  Dossier_P</th>
                    <th scope="col">Dossier administratif</th>
                    <th scope="col">Etat  Dossier_A</th>
                    
                    <th scope="col">Modifier</th>
                    <!--
                    <th scope="col">Delete</th>
                    -->

                    </tr>
                </thead>
                <tbody>
                    @foreach($professeurs as $professeur)
                    <tr>
                    <td>{{$professeur->prenom}}<br/></td>
                    <td><a href="/storage/{{$professeur->Dossier_scientifique}}" class="text-warning"  download>telecharger Dossier scientifique</a></td>
                    <td><b class="text-info">{{$professeur->etat_ds}}</b></a></td>
                    
                    <td><a href="/storage/{{$professeur->Dossier_Pedagogique}}" class="text-warning" download>telecharger Dossier Pedagogique</a></td>
                    <td><b class="text-info">{{$professeur->etat_dp}}</b></a></td>
                    
                    
                    <td><a href="/storage/{{$professeur->Dossier_administratif}}" class="text-warning" download>telecharger Dossier administratif</a></td>
                    <td><b class="text-info">{{$professeur->etat_da}}</b></a></td>
                    
                    <td><form action="" method="post"><a href="{{route('professeurs.edit',$professeur->id)}}" class="btn btn-warning">Modifier</a></form></td>
                    
                    <!--
                    <td><form action="{{route('professeurs.destroy',$professeur->id)}}" method="post">{{csrf_field()}}{{method_field('DELETE')}}<button type="submit" class="btn btn-danger">Delete</button></form></td>
                    -->
                    </tr>
                    
                    
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
</div>



@endsection