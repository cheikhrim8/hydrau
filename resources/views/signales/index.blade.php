@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                <tr>
                    <th width="5%">No</th>
                    <th>mat</th>
                    <th>fonc</th>
                    <th width="20%">date Fonction</th>

                    <th width="20%">Action</th>
                </tr>

            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
