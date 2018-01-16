$(document).ready(function(){

    //Gestion centros
    $("#cargarCentro").click(function(){
      
        $("#contenido").load("index.php/Centro");
        $( "#cabecera" ).html( "Gestion de Centros" );
    });
     $("#cargarCurso").click(function(){
        $("#contenido").load("index.php/Curso");
    });
    $("#cargarCiclo").click(function(){
        $("#contenido").load("index.php/Ciclo");
    });
    $("#cargarModulo").click(function(){
        $("#contenido").load("index.php/Modulo");
    });
    $("#cargarReto_modulo").click(function(){
        $("#contenido").load("index.php/Reto_Modulo");
    });
   
    //Gestion Usuarios
    $("#cargarUsuario").click(function(){
        $("#contenido").load("index.php/Usuario");
    });
    $("#cargarTUsuario").click(function(){
        $("#contenido").load("index.php/TUsuario");
    });
    $("#cargarEquipo").click(function(){
        $("#contenido").load("index.php/Equipo");
    });
    $("#cargarEquipo_usuario").click(function(){
        $("#contenido").load("index.php/Equipo_Usuario");
    });
     
    $("#cargarReto").click(function(){
        $("#contenido").load("index.php/Reto");
    });
     
     
    //Gestion Rubricas  
    $("#cargarNotas").click(function(){
        $("#contenido").load("index.php/Notas");
    });
    $("#cargarMedicion").click(function(){
        $("#contenido").load("index.php/Medicion");
    });
    $("#cargarCompetencia").click(function(){
        $("#contenido").load("index.php/Competencia");
    });
    $("#cargarGrupoCompetencia").click(function(){
        $("#contenido").load("index.php/GrupoCompetencia");
    });
    $("#cargarMGCC").click(function(){
        $("#contenido").load("index.php/Medicion_GrupoCompetencia_Competencia");
    });
    $("#cargarReto_Medicion").click(function(){
        $("#contenido").load("index.php/Reto_Medicion");
    });


     $("#cargarMatricularse").click(function(){
        $("#contenido").load("index.php/Matricularse");
    });


    $("#cargarLogin").click(function(){
        $("#contenido").load("index.php/Login");
    });
});
