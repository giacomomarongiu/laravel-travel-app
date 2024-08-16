@extends('layouts.app')
@section('content')
    <div class="container p-sm-2">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="bg-dark">
                    <tr class="">
                        <th scope="col" class="bg-dark text-white py-3">Name</th>
                        <th scope="col" class="bg-dark text-white py-3">Description</th>
                        <th scope="col" class="bg-dark text-white py-3">Start Date</th>
                        <th scope="col" class="bg-dark text-white py-3 text-end">End Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($travels as $travel)
                        <tr>
                            <td scope ="row">
                                {{ $travel->name }}
                            </td>

                            <td scope ="row">
                                {{ $travel->description }}
                            </td>

                            <td scope ="row">
                                {{ $travel->start_date }}
                            </td>

                            <td scope ="row">
                                {{ $travel->end_date }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
