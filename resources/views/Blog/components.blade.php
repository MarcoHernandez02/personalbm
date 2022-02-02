@extends('Blog.template.layout')

@section('personal')

<div class="section-container">
  <!-- Add your site or app content here -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">

        <div class="template-example">
          <h2 class="template-title-example">F.C. UNIÓN 47</h2>
          <p> Si quieres ponerte en con los administradores del sitio o solicitar informes acerca de como formar parte de esta gran familia, envianos tus datos en el siguiente fomrulario
          </p>
        </div>

        <div class="template-example">
          <h2 class="template-title-example">TITULOS</h2>
          
          <table class="table table-bordered">
            <tr><td><h1>Sub-campeón Copa Telmex 2019</h1></td></tr>
            <tr><td><h2>Campeón Liga Diamante 2005</h2></td></tr>
            <tr><td><h3>Campeón Liga San Francisco 2013</h3></td></tr>
            <tr><td><h4>Campeón Liga Sierra Hermosa 2012-2017</h4></td></tr>
          </table>
        </div>

        <div class="template-example">
          <h2 class="template-title-example">Directivos del club</h2>
          <div class="row">
            <div class="col-md-6">
              <h3 class="template-title-example">Entrenadores</h3>
              <ul>
                <li>Rubén Dario Nava</li>
                <li>Armando Trejo Hernández</li>
                <li>Dario Cuahutemoc Nava Rayas</li>
               
              </ul>
            </div>
            <div class="col-md-6">
              <h3 class="template-title-example">Administradores</h3>
              <ul>
                <li>Lucia Sosa Mendoza</li>
                <li>Maria Candelaria Morales</li>
                <li>Victor Felix Arredondo</li>
               
              </ul>
            </div>
          </div>
        </div>

        
      </div>

      <div class="col-xs-12 col-md-6">
        <div class="template-example">
          <h2 class="template-title-example"></h2>
          
          <div class="row">
            <div class="col-md-6">
              <h3 class="template-title-example"></h2>
              <ul class="list-icons">
                
              </ul>
            </div>
            <div class="col-md-6">
               <h3 class="template-title-example"></h2>
                <ul class="list-icons">
                  
                </ul>
            </div>

          </div>


          


        </div>

        <div class="template-example">
          <h2 class="template-title-example">Categorias</h2>
          <div class="row">
            <div class="col-md-6">
              <h3 class="template-title-example">Infantil</h2>
              <div class="row">
                  <div class="col-md-6">
                  <p><a href="" class="btn btn-primary btn-lg">2007</a></p>
                  <p><a href="" class="btn btn-primary">2009 </a></p>
                  <p><a href="" class="btn btn-primary btn-sm">2011</a></p>
                </div>
              </div>

              <h3 class="template-title-example">Juvenil</h2>
              <div class="row">
                  <div class="col-md-6">
                  <p><a href="" class="btn btn-default btn-lg">2005</a></p>
                  <p><a href="" class="btn btn-default">2003 </a></p>
                  <p><a href="" class="btn btn-default btn-sm">2001</a></p>
                </div>
              </div>

            </div>

            <div class="col-md-6">
              <h3 class="template-title-example">Selectivo</h2>
              <div class="row">
                  <div class="col-md-6">
                  <p><a href="" class="btn btn-info btn-lg">Varonil</a></p>
                  <p><a href="" class="btn btn-info">Femenil </a></p>
                  <p><a href="" class="btn btn-info btn-sm">Mixto</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="template-example">
          <h2 class="template-title-example">Contácto</h2>

            <div class="form-group">
              <label for="exampleInputEmail1">Correo electronico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>

            <div class="form-group">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <div class="form-group">
              <label class="checkbox-inline">
                <input 
                type="checkbox" id="inlineCheckbox1" value="option1"> Enviarme una copia a Correo electronico
              </label>
              <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2"> Soy Humano
              </label>
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="3" placeholder="Escribe tu mensaje"></textarea>
            </div>
            
            <div class="alert alert-success" role="alert">Tu Mensaje fue enviado correctamente</div>
            <div class="alert alert-danger" role="alert">No se envío, intentalo más tarde</div>
        </div>




      </div>
    </div>
  </div>

</div>
@endsection