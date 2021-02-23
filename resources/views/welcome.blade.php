@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'welcome', 'title' => __('Material Dashboard')])

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-7 col-md-8">

                @if(session()->has('message'))
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>{{ session()->get('message') }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="card p-5" style="background: #132236; opacity: 0.9">
                    <div class="card-header">
                        <h4 class="card-title text-white"><strong>Bienvenue</strong></h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('signales.store') }}" method="POST">
                            @csrf

                            <div class="form-group">

                                <input type="text"
                                       class="form-control text-white @error('nom') is-invalid @enderror" id="inputAddress" name="nom"
                                       placeholder="Nom et Prenom">
                                @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>signa
                            <div class="form-group">

                                <input type="number" class="form-control text-white @error('tel') is-invalid @enderror" id="inputAddress2" name="tel"
                                       placeholder="Numero de Télephone">
                                @error('tel')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control text-white @error('local') is-invalid @enderror" name="local" id="inputAddress"
                                       placeholder="Localisation">
                                @error('local')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="problem" id="" class=" custom-select "  required  >
                                    <option value="Coupures d'eau">Coupures d'eau</option>
                                    <option value="Dysfonctionnement du réseau">Dysfonctionnement du réseau</option>
                                    <option value="plainte">plainte</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control text-white @error('coment')  is-invalid @enderror " placeholder="Ecrire votre commantaire" name="coment"></textarea>

                                @error('coment')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-white">Envoyer</button>
{{--                            <button type="submit" class="btn-outline-light btn">Envoyer</button>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
