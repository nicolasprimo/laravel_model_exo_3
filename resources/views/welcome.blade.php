<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Exo model 3</title>
</head>
<body>
    <div class="container mt-4">
     
        <section class="border border-muted p-4">
            <h2>Section : Il y a {{$datas->count()}} membres </h2>
            <div class="row">
                @foreach($datas as $data)                
                    <div class="col-2 {{ $data->genre == "Homme" ? 'text-primary' : 'text-danger' }}">{{$data->nom}}</div>
                    @if($loop->iteration % 6 == 0)
                        </div>
                        <div class="row">
                    @endif
                @endforeach
            </div>           
        </section>
        <section class="border border-muted p-4">
            <h2>Section : Il y a {{$hommes->count()}} hommes </h2>
            <div class="row">
                @foreach($hommes as $data)        
                <div class="col-2">{{$data->nom}}</div>
                @if($loop->iteration % 6 == 0)
                    </div>
                    <div class="row">
                @endif                                   
                @endforeach
            </div>           
        </section>
        <section class="border border-muted p-4">
            <h2>Section : Il y a {{$femmes->count()}} femmes </h2>
            <div class="row">
                @foreach($femmes as $data)        
                <div class="col-2">{{$data->nom}}</div>
                @if($loop->iteration % 6 == 0)
                    </div>
                    <div class="row">
                @endif                                   
                @endforeach
            </div>           
        </section>
        <section class="border border-muted p-4">
            <h2>Section : Il y a {{$hommes_conditions->count()}} hommes en conditions </h2>
            <div class="row">
                @foreach($hommes_conditions as $data)        
                <div class="col-2">{{$data->nom}}</div>
                @if($loop->iteration % 6 == 0)
                    </div>
                    <div class="row">
                @endif                                   
                @endforeach
            </div>           
        </section>
        <section class="border border-muted p-4">
            <h2>Section : Il y a {{$femmes_conditions->count()}} femmes en conditions</h2>
            <div class="row">
                @foreach($femmes_conditions as $data)        
                <div class="col-2">{{$data->nom}}</div>
                @if($loop->iteration % 6 == 0)
                    </div>
                    <div class="row">
                @endif                                   
                @endforeach
            </div>           
        </section>
        <section class="border border-muted p-4">
            <h2>Section : Il y a {{$hors_conditions->count()}} personnes hors conditions</h2>
            <div class="row">
                @foreach($hors_conditions as $data)        
                <div class="col-2">{{$data->nom}} </div>
                @if($loop->iteration % 6 == 0)
                    </div>
                    <div class="row">
                @endif                                   
                @endforeach
            </div>           
        </section>
    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>