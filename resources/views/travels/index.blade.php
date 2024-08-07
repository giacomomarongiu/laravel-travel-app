@extends('layouts.app')
@section('content')
  <div class="container p-sm-2">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-dark">
                    <tr class="">
                        <th scope="col" class="bg-dark text-white py-3">Cliente</th>
                        <th scope="col" class="bg-dark text-white py-3">Data</th>
                        <th scope="col" class="bg-dark text-white py-3">Ora</th>
                        <th scope="col" class="bg-dark text-white py-3 text-end">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($travels as $travel )
                        
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection