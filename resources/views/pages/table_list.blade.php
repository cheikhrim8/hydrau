@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Liste</h4>
            <p class="card-category"> Tous les broblémes Sont Archivé ici</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-success">
                  <th>
                    ID
                  </th>
                  <th>
                    Nom Complet
                  </th>
                  <th>
                    Numéro Télephone
                  </th>
                  <th>
                    Localisation
                  </th>
                  <th>
                      Probléme
                  </th>
                  <th>
                      commentaire
                  </th>
                </thead>
                <tbody>
                @foreach($signales as $signal)
                    <tr>
                        <td>{{$signal->id}}</td>
                        <td>{{$signal->nom}}</td>
                        <td>{{$signal->tel}}</td>
                        <td>{{$signal->local}}</td>
                        <td>{{$signal->problem}}</td>
                        <td class="" style="word-wrap:break-word; width: 120px">{{$signal->coment}}</td>
                        @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
