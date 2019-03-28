             
          
      @if($establecimiento->estadisticas()->count() > 1 )

          @if($establecimiento->estadisticas()->first()->get_estadisticas_computo($idCatalogo, $establecimiento->id)->count() >= 1)       
              <table  id="{{$idTabla}}" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Marca</th>
                          <th>Servicetag</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($establecimiento->estadisticas()->first()->get_estadisticas_computo($idCatalogo, $establecimiento->id)  as $clave => $valor)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($valor->descripcion)}}</td>
                        <td>{{strtoupper($valor->marca)}}</td>
                        <td>{{strtoupper($valor->servicetag)}}</td>
                        <td>{{strtoupper($valor->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
            @else
              No hay Datos Capturados

            @endif 


       @endif       
