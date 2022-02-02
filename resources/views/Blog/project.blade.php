@extends('Blog.template.layout')

@section('project')
  
<div class="hero-full-container background-image-container white-text-container" style="background-image:url('./images/img-08.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="hero-full-wrapper">
          <div class="text-content  text-center">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="text-center section-container-spacer">
          <h2 class="with-project-number"><span class="project-number">01</span>TORNEOS ACTUALES</h2>
        </div>
        <div class="row section-container-spacer">
          <div class="col-md-4">
              <div class="section-container-spacer">
                <h3>Torneo Copa Telmex</h3>
                <p>Cuautitlán, Diciembre, 2021</p>
              </div>

              <h4>Directivos del club</h4>
              
              <ul class="list-unstyled">
                <li>Rubén Dario / Entrenador </li> 
                <li></li>
                <li></li>
              </ul>
              

              <p>Tecámac</p>
              <p>Sierra Hermosa</p>
          </div>
          <div class="col-md-8">
            <h3>Unión representa a Tecámac en Copa Telmex 2021</h3>
            <p>Como orgullo, puedo decir que de las mayores experiencias en la vida que he tenido, fue participar en el torneo amateur más 
              grande del mundo, llegar a ser subcampeón estatal es algo que no cualquier equipo ha logrado, siempre me sentiré 
              orgulloso de representar a Unión 47.
            </p>
            Apesar de las adversidades económicas, se lorgró clasificar a la fase estatal, disputar un lugar en la final ante municipios con un 
            gran nivel futbolistico tales como tepozotlán, zumpango, Nicolas romero, Texcoco, Toluca, entre otros más. 
              <p> 
            </p>
          </div>
        </div>


        <img src="./images/img-03.jpg" alt="" class="img-responsive">
        <p>Cuautitlán, Estado de México, 2022</p>

        <blockquote class="text-center large-spacing">
            <p>"Para nosotros no hay mayor pasión que representar a nuestra familia Unión 47"</p>
            <small class="pull-right">Rubén Dario - Entrenador del equipo</small>
        </blockquote>
        
        <div class="row">
            <div class="col-md-6">
            <img src="./images/img-02.jpg" class="img-responsive" alt="">
            <p>Sub - campeón Copa Telmex 2019</p>
            </div>
            <div class="col-md-6">
            <img src="./images/img-01.jpg" class="img-responsive" alt="">
            <p>Campeón Liga Sierra Hermosa 2018</p>
            </div>
        </div>

        <img src="./images/img-04.jpg" class="img-responsive" alt="">
        <p>Trofeos de la temporada 2013-2014</p>

      </div>
    </div>
  </div>
</div>

<div class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <ul class="navbar-nav nav">
          <li>
            <a href="" title="" class="project-nav left"><span class="project-number">01</span>Previous</a>
          </li>
        </ul>
        <p class="h5 navbar-text">Nuestras recientes participaciones <i class="fa fa-chevron-down arrow-down" aria-hidden="true"></i></p>

        <ul class="navbar-nav nav navbar-right">
          <li>
            <a href="" title="" class="project-nav right"><span class="project-number">03</span>Next </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection