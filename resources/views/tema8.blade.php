@extends('plantilla')

@section('titulo')
Clasificar sistemas de información de acuerdo a su arquitectura 
@endsection

@section('tituloBase')
Clasificar sistemas de información de acuerdo a su arquitectura 
@endsection

@section('subtitulo')
Los puestos de trabajo son los ordenadores y demás dispositivos desde los que accedemos a nuestros datos y con los que añadimos nuevos documentos e información.
@endsection

@section('imagen')
images/tema18.jpg
@endsection

@section('fecha')
29-01-2022
@endsection

@section('autor')
autor
@endsection

@section('parrafo1')
La arquitectura elegida condicionará la forma de trabajar, por lo que es una decisión fundamental. Merece la pena, por tanto, conocer las opciones disponibles para saber cual es la más adecuada para «mi» situación. Con frecuencia los vendedores de software «olvidan» las que no corresponden a su oferta y dan por sentado que nos interesa la «suya», descartando otras posibilidades que pueden ser más adecuadas para nuestra empresa.
@endsection

@section('parrafo2')
1.- Monopuesto – Monousuario.<br>
Aunque es muy obvio, lo incluyo como primer tipo porque me preguntan con cierta frecuencia si instalar mi programa de gestión documental (ArchivaTech) para tener en casa, para un único ordenador. Mi respuesta es que no merece la pena para un solo usuario, por muchos archivos que tenga. En este caso, el servidor y el puesto de trabajo es el mismo ordenador y un simple explorador de Windows sirve perfectamente para gestionar los ficheros.
<br><br>2.- Cliente-Servidor.<br>
Este es el caso más corriente en PYMES. Hay un «ordenador central», un servidor, en el que se almacenan todos los documentos (archivos) y 5, 10…25 usuarios acceden desde sus ordenadores, conectados en red local, a consultar y añadir documentos a la base de datos común. En el servidor debe haber un gestor de base de datos, como Oracle, SQL Server, MySQL o algún otro. Este gestor aporta robustez al archivo, seguridad en el acceso y permite búsquedas rápidas por cualquier dato. En los puestos de trabajo hay instalado un programa de gestión documental, lo que se llama un «software cliente», que facilita el acceso a los datos y su gestión: búsquedas, clasificación, añadir datos complementarios…
<br><br>3.- Servidor-Clientes Web.<br>
Podemos considerar esta opción una evolución de la anterior que solo se distingue porque en los puestos de trabajo no hay que instarla un «software cliente» específico para acceder a los datos sino que se utiliza un simple navegador Web (Internet Explorer, FireFox, Chrome o Safari) que suele estar instalado en todos los ordenadores. Esto simplifica sensiblemente la instalación inicial del sistema aunque tiene una pega: suele ser menos cómodo y ágil que los programas específicos diseñados expresamente (es un tema que he tratado ampliamente en posts anteriores). Para docenas o cientos de usuarios suele ser la mejor opción.
<br><br>4.- Cliente-Servidor + Clientes Web.<br>
Una arquitectura mixta que suma lo mejor de las dos anteriores. Tenemos un servidor con los datos, algunos usuarios acceden con software específico y el resto con un navegador Web. Permite la instalación de un software específico, potente y ágil, para los usuarios que utilizan frecuentemente el software de gestión y proporciona acceso a docenas o cientos de usuarios esporádicos sin necesidad de instalar el programa en cada uno de esos cientos de ordenadores. Personalmente es la opción que más me gusta para empresas de cierto tamaño (por encima de 10-20 usuarios), sobre todo si hay numerosos usuarios que solamente van a consultar documentos, no a introducirlos.

@endsection

@section('categoria')
cliente servidor
@endsection