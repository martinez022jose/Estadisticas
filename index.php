<!DOCTYPE html>
<html>
  <head>
    <title>Proyecto Estadistico</title>
    <script
      src="https://kit.fontawesome.com/59dceabbec.js"
      crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="asd.css">
  </head>
  <body>
      <section>
      <div class="principal"></div>
          <table id="tablaDeCovid">
            <thead>
              <tr>
                <th>Pais</th>
                <th>Confirmados</th>
                <th>Curados</th>
                <th>Fallecidos</th>
                <th>Poblacion</th>
              </tr>
            </thead>
            <tbody id="datosCovid">
            </tbody>

          </table>
        
        <div class="cajaFormulario">
          <h1>Ingreso de datos</h1>
          <form id="formPais" enctype="multipart/form-data">
            <div class="resFormPais"></div>
            
            <input type="text" name="nombrePais" id="nombrePais" placeholder="Ingrese Nombre Pais">
            <input type="text" name="nConfirmados" id="nConfirmados"  placeholder="Ingrese Confirmados">
            <input type="text" name="nCurados" id="nCurados" placeholder="Ingrese Curados">
            <input type="text" name="nFallecidos" id="nFallecidos"  placeholder="Ingrese Fallecidos">
            <input type="text" name="poblacion" id="poblacion" placeholder="Ingrese Poblacion">
             <input type="button" id="agregarRegistro" value="Agregar">
            
          </form>
        </div>
      </div>
          
      </section>


    <script type="text/javascript" src="funcionalidades.js"></script>
  
  </body>
</html>
