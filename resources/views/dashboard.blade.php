@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12">

                    @if(session()->has('message'))
                        <div class="alert-success alert">
                            {{session('message')}}
                        </div>
                    @endif()

                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title">Utilisateurs</h4>
                            <p class="card-category font-weight-bold">Nouveau plainte</p>
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-black-50">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Numero téléphone</th>
                                <th>Localisation</th>
                                <th>Type de probléme</th>
                                <th>commantaire</th>
                                <th>action</th>
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
                                        <td>
                                            <span class="btn btn-success"
                                                  onclick="event.preventDefault(); document.getElementById('status-form').submit()">
                                                <i class="material-icons">done</i>
                                            </span>
                                            {{--                        <button onclick="event.preventDefault();document.getElementById('status-form').submit();">set vue</button>--}}
                                            <form id="status-form" action="{{route('signales.update' , $signal->id )}}"
                                                  method="post" style="display: none">
                                                @csrf
                                                @method('put')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="row justify-content-center d-print-none">
                                <div class="col">
                                    {{$signales->links()}}
                                </div>
                            </div>

                            <button onclick="window.print()" class="btn btn-success ml-auto mr-auto d-block">print
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        Echo.private(`orders`)
            .listen('OrderShipmentStatusUpdated', (e) => {
                console.log(e.order);
            });
    </script>
@endpush



