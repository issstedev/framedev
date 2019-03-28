<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        {{$establecimiento->nombre_completo()}}
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <div class="row">
                <div class="col-lg-6">
                    <div style="width: 350px; height: 300px; margin: 0 auto;">
                        {!! $establecimiento->pintaMapa() !!}
                    </div>
                </div>
                <div class="m-demo__preview col-lg-6">
                    <div class="m-list-search">
                        <div class="m-list-search__results">
                            <span class="m-list-search__result-category m-list-search__result-category--first">
                            Informacion General
                            </span>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-interface-3 m--font-warning"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>CLUES: </b>{{$establecimiento->clues}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>INSTITUCIÓN:</b>{{$establecimiento->nombre_de_la_institucion}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>TIPO:</b>{{$establecimiento->nombre_de_tipologia}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>INICIO:</b>{{$establecimiento->fecha_de_inicio_de_operacion}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>ENTIDAD:</b>{{$establecimiento->nombre_de_la_entidad}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>MUNICIPIO:</b>{{$establecimiento->nombre_del_municipio}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>JURISDICCIÓN:</b>{{$establecimiento->nombre_de_la_jurisdiccion}}
                            </span>
                            <br>
                            <span class="m-list-search__result-item-icon">
                            <i class="flaticon-share m--font-success"></i>
                            </span>
                            <span class="m-list-search__result-item-text">
                            <b>DIRECCIÓN:</b>{{$establecimiento->direccion()}}
                            </span>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class= "row">
                   @include('mapas._recursosContactos', ['establecimiento'=> $establecimiento] ) 
            </div>
        </div>
    </div>
</div>