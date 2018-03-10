@extends('master')


@section('contenido')
                  <h2>Mostrando Resultados</h2>  

                    <?php foreach ($personas as $persona): ?>
                        <?php foreach ($persona as $indice => $valor): ?>
                                {{$indice}} - {{$valor}}    
                        <?php endforeach ?>
                        <
                        <br><br>
                    <?php endforeach ?>
         

@stop