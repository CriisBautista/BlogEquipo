@extends('plantilla')

@section('titulo')
Proceso  de  diagramación  de componentes 
@endsection

@section('tituloBase')
Proceso  de  diagramación  de componentes
@endsection

@section('subtitulo')
Los servidores pueden ser apátridas o stateful.
@endsection

@section('imagen')
images/tema19.png
@endsection

@section('fecha')
30-01-2022
@endsection

@section('autor')
Yair
@endsection

@section('parrafo1')
Los servidores pueden ser apátridas o stateful. Un servidor apátrida no guarda ninguna información entre las peticiones. Un servidor stateful puede recordar la información entre las peticiones. El alcance de esta información puede ser global o sesión-específico. Un servidor de HTTP para las páginas estáticas HTML es un ejemplo de un servidor apátrida, mientras que Apache Tomcat es un ejemplo de servidor stateful.
La interacción entre el cliente y el servidor se describe a menudo usando diagramas de secuencia. Los diagramas de secuencia se estandarizan en el UML. Es importante que los clientes no interactúen entre sí ni que lo hagan clientes de capas bajas hacia otros de capas más altas, por eso todo tiene que pasar por el servidor.
@endsection

@section('parrafo2')
Otro tipo de arquitectura de red se conoce como arquitectura de par-a-par porque cada nodo o caso del programa es un “cliente” y un “servidor” y cada uno tiene responsabilidades equivalentes. Ambas arquitecturas están en uso amplio.
En conjunto, las arquitecturas de tres niveles son modelos de programación que permiten la distribución de la funcionalidad de la aplicación en tres sistemas independientes, normalmente:<br>
Componentes de cliente que se ejecutan en estaciones de trabajo locales (nivel uno)<br>
Procesos que se ejecutan en servidores remotos (nivel dos)<br>
Una colección discreta de bases de datos, gestores de recursos y aplicaciones de sistema principal (nivel tres)<br>
El diagrama siguiente describe los niveles de tres niveles. Los niveles son lógicos. Es posible que se estén ejecutando o no en el mismo servidor físico.<br>
Arquitectura de tres niveles
@endsection

@section('categoria')
cliente servidor
@endsection