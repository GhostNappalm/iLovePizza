@extends('layouts.app')
@section('title', 'Crea Ricetta')

@section('content')
    <!--
    Autore: Musciacchio
    -->

<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Crea una nuova ricetta
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('storericetta')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" id="title" name="nome" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <label>Ingredienti</label>
                    <textarea name="ingredienti" class="form-control" required></textarea>
                </div>

                <br>
                <div class="form-group">
                    <label>Preparazione</label>
                    <textarea name="preparazione" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Tipologia</label>
                    <select  class="form-control" name="tipologia" required>
                        <option value="" selected disabled> Seleziona la tua tipologia </option>
                        @if ($associazione ['napoletana'] == 1)
                            <option value="napoletana"> Napoletana</option>
                        @endif

                            @if ($associazione ['romana'] == 1)
                                <option value="romana"> Romana</option>
                            @endif

                            @if ($associazione ['internazionale'] == 1)
                                <option value="internazionale"> Internazionale</option>
                            @endif

                            @if ($associazione ['resto'] == 1)
                                <option value="resto"> Resto d'Italia</option>
                            @endif

                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label>Cottura</label>
                    <select  class="form-control" name="cottura" required>
                        <option value="" selected disabled> Seleziona il tipo di cottura </option>
                            <option value="fornogas"> Forno a gas</option>
                            <option value="fornoalegna"> Forno a legna</option>
                            <option value="fornoelettrico"> Forno a elettrico</option>
                            <option value="padella"> Padella</option>
                    </select>
                </div>

                <br>
                <div class="form-group">
                    <label>Immagine</label>
                    <input type="file" accept="image/*" name="immagine" class="form-control" required>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Pubblica</button>
            </form>
        </div>
    </div>
</div>
</body>

@endsection
