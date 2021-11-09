@extends('layouts.app')

                       
@section('content')
<div class="container">        
        <div class="row justify-content-center">    
                        <h1>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h1>
                        <br><br>
                        <br><br>
                        <h1  centered>KARTU HASIL STUDI (KHS)</h2>
                       
            <div class="col-md-8">
            <div>
                <br><br>
            </div>                       
                <div class="card">                    
                    <div class="card-header">{{ __('STUDENT DATA') }}</div>                    
                    <div class="card-body">

                        <b>Nama:</b> {{ $student->name }} <br>
                        <b>NIM: </b> {{ $student->nim }} <br>
                        <b>Kelas: </b>  {{ $student->kelas->class_name }}  <br>    

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <!-- <p>Cari Data Student :</p>
                        <form action="/students/search" method="GET">
                            <input type="text" name="search" placeholder="Search Student .." value="{{ request('search') }}">
                            <input type="submit" value="Search">
                        </form> -->
                       

                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Mata Kuliah</th>
                                    <th>SKS</th>
                                    <th>Semester</th>
                                    <th>Nilai</th>                                                                        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student->courses as $sc)
                                <tr>
                                    <td>{{ $sc->course_name }}</td>
                                    <td>{{ $sc->semester }}</td>
                                    <td>{{ $sc->sks }}</td>
                                    <td>{{ $sc->pivot->nilai }}</td>                                
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
                        <a href="/students" class="btn btn-primary">Back</a>
                        <br><br>
                    </div>                    
                </div>               
            </div>            
        </div>       
    </div>

@endsection