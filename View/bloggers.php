{%extends 'plantillas/baseBlog.php'%}
{%block title%} Bloggs {% endblock%}
{%block css%}
<link rel="stylesheet" media="all" href="/assets/CSS/css/publicaciones.css">
{%endblock%}

{%block contenido%}
<!--all contenido-->
<div class="container-fluid">
    <div class="row">
            <div class="col-lg-9">
                <!--Image Card-->
                    <div class="card-image">
                        <div class="view overlay hm-blue-slight z-depth-1 hoverable">
                            <img src="/assets/images/blog/portadas/p1.jpg" class="img-responsive" alt="">
                            <a href="#">
                                <div class="mask waves-effect"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card-panel view overlay hm-blue-slight text-center z-depth-1 hoverable">
                       <div id="menu-portada">
                            <h3>Titulo del Post</h3>
                            <h5>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </h5>
                            <hr>
                            <div hidden="hidden">
                              <div class="hidden-xs">
                                  <a  class="btn-sm-full btn-home  waves-effect waves-light">
                                     <i class="fa fa-home "></i>
                                     <span>Inicio</span>
                                  </a>
                                  <a class="btn-sm-full btn-change-image waves-effect waves-light">
                                      <i class="fa fa-refresh"></i>
                                      <span>imagen</span>
                                  </a>
                                  <a class="btn-sm-full btn-comment waves-effect waves-light">
                                      <i class="fa fa-refresh"></i>
                                      <span>Modificar</span>
                                  </a>
                               </div>
                            </div>
                            <div class="visible-xs">
                                <span class="counter-wraper">
                                    <a class="btn-sm btn-home-min waves-effect waves-light">
                                        <i class="fa fa-home"> </i>
                                    </a>
                                </span>
                                <span class="counter-wraper">
                                    <a class="btn-sm btn-change-image-min waves-effect waves-light">
                                        <i class="fa fa-refresh"> </i>
                                    </a>
                                </span>
                                <span class="counter-wraper">
                                    <a class="btn-sm btn-comment-min waves-effect waves-light">
                                        <i class="fa fa-comment"> </i>
                                    </a>
                                </span>
                            </div>
                            <hr>
                           <div class="options visible-xs">
                              <div class="option1">
                                   <a  class="btn btn-sm waves-effect like waves-light"> <i class="fa fa-thumbs-o-up fa-2x" ></i></a>
                               </div>
                               <div class="option2">
                                  <a id="" class="btn btn-sm waves-effect comentar waves-light"><i class="fa fa-commenting fa-2x"></i></a>
                               </div>
                            </div>
                            <div class="options hidden-xs">
                                  <div class="option1">
                                       <a  class="btn like btn-sm-full waves-effect waves-light"> <i class="fa fa-thumbs-o-up fa-2x" ></i> Me gusta <span class="badge green">9</span></a>
                                   </div>
                                   <div class="option2">
                                      <a class="btn btn-sm-full comentar waves-effect waves-light"><i class="fa fa-commenting fa-2x"></i> Comentar</a>
                                   </div>
                            </div>
                            <div class="comentario">
                               <hr>
                               <div class="input-field col-xs-10">
                                  <textarea id="comentario" class="materialize-textarea floating-label"></textarea>
                                  <label for="comentario"><i class="fa fa-comments"></i> Comentar</label>
                                </div>
                                <div class="visible-xs">
                                      <a id="comentar" class="btn btn-success btn-sm waves-effect waves-light"><i class="fa fa-commenting fa-2x"></i></a>
                                 </div>
                                 <div class="hidden-xs">
                                      <a id="comentar" class="btn btn-success btn-sm waves-effect waves-light"><i class="fa fa-commenting fa-2x"></i></a>
                                 </div>
                            </div>
                        </div>
                        <div id="menu-modificar">
                            <form method="post" action="" id="frm-comment" class="form-horizontal">
                                <div class="input-field col-xs-10">
                                   <input id="titulo" type="text" class="validate floating-label">
                                   <label for="titulo"><i class="fa fa-text-width"></i> Titulo</label>
                                </div>
                                <div class="input-field col-xs-10">
                                  <textarea id="comentario" class="materialize-textarea floating-label"></textarea>
                                  <label for="comentario"><i class="fa fa-comments"></i> Asunto</label>
                                </div>
                            </form>
                            <hr>
                            <div class="hidden-xs">
                                <a  class="btn-sm-full btn-cancelar  waves-effect waves-light">
                                   <i class="fa fa-reply-all"></i>
                                   <span>Cancelar</span>
                                </a>
                                <a class="btn-sm-full btn-publicar waves-effect waves-light">
                                    <i class="fa fa-refresh"></i>
                                    <span>Modificar</span>
                                </a>
                             </div>
                             <div class="visible-xs">
                                <span class="counter-wraper">
                                    <a class="btn-sm btn-cancelar-min waves-effect waves-light">
                                        <i class="fa fa-reply-all"> </i>
                                    </a>
                                </span>
                                <span class="counter-wraper">
                                    <a class="btn-sm btn-publicar-min waves-effect waves-light">
                                        <i class="fa fa-comments"> </i>
                                    </a>
                                </span>
                            </div>
                        </div>
                </div>
                <!-- publicaciones -->
                <div class="card-panel row publicaciones view overlay hm-blue-slight  z-depth-1 hoverable">
                     <hr>
                      <h5>Comentarios <span class="badge">2</span></h5>
                      <div class="comments row">
                      <hr class="col-md-12">
                       <div class="col-sm-2">
                            <img src="/assets/images/blog/portadas/avatar-2.jpg" class="img-responsive z-depth-1"/>

                       </div>
                        <div class="col-md-9">
                          <h5>Nombre Apellido</h5>
                           <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quod quos, similique quae, saepe eius. Numquam ducimus ipsa ad beatae minima eligendi iste nisi consequuntur, expedita et natus, quidem nam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quod quos, similique quae, saepe eius. Numquam ducimus ipsa ad beatae minima eligendi iste nisi consequuntur, expedita et natus, quidem nam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quod quos, similique quae, saepe eius.

    Numquam ducimus ipsa ad beatae minima eligendi iste nisi consequuntur, expedita et natus, quidem nam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quod quos, similique quae, saepe eius. </p>
                            <span class="text-right"><i class="fa fa-calendar"> 27/02/2016</i>&nbsp;&nbsp; <i class="fa fa-clock-o"> 9:00pm</i></span>
                         </div>
                     </div>
                     <div class="comments row">
                      <hr class="col-md-12">
                       <div class="col-sm-2">
                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>

                       </div>
                        <div class="col-md-9">
                          <h5>Nombre Apellido</h5>
                           <p class="text-justify"> Numquam ducimus ipsa ad beatae minima eligendi iste nisi consequuntur, expedita et natus, quidem nam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae quod quos, similique quae, saepe eius. </p>
                            <span class="text-right"><i class="fa fa-calendar"> 27/02/2016</i>&nbsp;&nbsp; <i class="fa fa-clock-o"> 9:00pm</i></span>
                         </div>
                     </div>
                </div><!-- fin publicaciones-->
            </div><!--fin col-lg-8-->
            <div class="col-lg-3 visible-lg">
                <div class="widget">
                    <ul class="nav nav-tabs tabs-3">
                        <li class="active">
                            <a href="#popular" data-toggle="tab" arial-expanded="false">Populares</a>
                        </li>
                        <li class="">
                            <a href="#reciente" data-toggle="tab" arial-expanded="false">Recientes</a>
                        </li>
                        <li class="">
                            <a href="#aleatorios" data-toggle="tab" arial-expanded="false">Aleatorios</a>
                        </li>
                    </ul>
                    <div class="tab-content card-panel">
                       <!--primera pestaña-->
                        <div id="popular" class="tab-pane fade active in">
                            <div class="horizontal-listing aside-postMenu">
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-sm-8">
                                            <h5 class="title">Title of event</h5>
                                            <ul class="list-inline iteitem-details">
                                                <li>
                                                    <i class="fa fa-clock-o"> 28/02/2016 | 5:00pm</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-2.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="title">Party of Gerson</h5>
                                            <ul class="list-inline item-details">
                                                <li>
                                                    <i class="fa fa-clock-o"> 22/02/2016 | 6:00pm</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <a>
                                <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-3.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="title">Where is gerson?</h5>
                                            <ul class="list-inline item-details">
                                                <li>
                                                    <i class="fa fa-clock-o"> 22/02/2016 | 6:00pm</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!--fin primera pestaña-->
                         <div id="reciente" class="tab-pane fade">
                            <div class="horizontal-listing aside-postMenu">
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-sm-8">
                                            <h5 class="title">Title of event</h5>
                                            <ul class="list-inline iteitem-details">
                                                <li>
                                                    <i class="fa fa-clock-o"> 28/02/2016 | 5:00pm</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="title">Party of Gerson</h5>
                                            <ul class="list-inline item-details">
                                                <li>
                                                    <i class="fa fa-clock-o"> 22/02/2016 | 6:00pm</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <a>
                                <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="title">Where is gerson?</h5>
                                            <ul class="list-inline item-details">
                                                <li>
                                                    <i class="fa fa-clock-o"> 22/02/2016 | 6:00pm</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!--fin segunda pestaña-->
                         <div id="aleatorios" class="tab-pane fade">
                            <div class="horizontal-listing aside-postMenu">
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                          <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-sm-8">
                                            <h5 class="title">Title of event</h5>
                                            <ul class="list-inline iteitem-details">
                                                <li>
<<<<<<< HEAD
                                                    <i class="fa fa-clock-o"> 28/02/2016 | 5:00pm</i>
=======
                                                    <i class="fa fa-clock-o" id="pruebas2"> </i>
>>>>>>> master
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="title">Party of Gerson</h5>
                                            <ul class="list-inline item-details">
                                                <li>
<<<<<<< HEAD
                                                    <i class="fa fa-clock-o"> 22/02/2016 | 6:00pm</i>
=======
                                                    <i class="fa fa-clock-o" id="pruebas1"> 22/02/2016 &nbsp;6:00pm</i>
>>>>>>> master
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                                <a>
                                    <div class="row hoverable">
                                        <div class="col-sm-4">
                                            <img src="/assets/images/blog/portadas/avatar-1.jpg" class="img-responsive z-depth-1"/>
                                        </div>
                                        <div class="col-md-8">
                                            <h5 class="title">Where is gerson?</h5>
                                            <ul class="list-inline item-details">
                                                <li>
<<<<<<< HEAD
                                                    <i class="fa fa-clock-o"> 22/02/2016 | 6:00pm</i>
=======
                                                    <i class="fa fa-clock-o" id="pruebas"> </i>
>>>>>>> master
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!--fin tercera pestaña-->
                    </div>
                </div>
            </div>
    </div>
</div>
<!--fin contenido-->
{%endblock%}

{%block js%}
<script type="text/javascript" >

    moment().calendar('es', {
        sameDay: '[Hoy]',
        nextDay: '[Mañana]',
        nextWeek: 'dddd',
        lastDay: '[Ayer]',
        lastWeek: '[Last] dddd',
        sameElse: 'DD/MM/YYYY'
    });
    document.getElementById("pruebas").innerHTML = " "+moment("07-03-2016 18:00:01","DDMMYYYY , h:mm:ss a").fromNow();
    document.getElementById("pruebas1").innerHTML = " "+moment("15-02-2016 18:00:01","DDMMYYYY , h:mm:ss a").fromNow();
    document.getElementById("pruebas2").innerHTML = " "+moment("08-03-2016 00:14:10","DDMMYYYY , h:mm:ss a").fromNow();
</script>
{%endblock%}
