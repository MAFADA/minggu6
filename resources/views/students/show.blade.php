@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $student->nim }}</div>
                    <div class="card-body">
                        <img width="150px" src="{{ asset('storage/'.$student->photo) }}" ><br>
                        Name : {{ $student->name }} <br>
                        Class : {{ $student->kelas->class_name }} <br>
                        Department : {{ $student->department }} <br>
                        Phone Number : {{ $student->phone_number }} <br>
                        Created at : {{ $student->created_at }} <br>
                        Updated at : {{ $student->updated_at }} <br>
                    </div>                                      
                </div>               
            </div>            
        </div>       
    </div>
@endsection