          <div class="col s12 m6 l6">
              <table style="display:{{$display1}}" id="areas_table_1" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cantidad</th>
                      </tr>
                  </thead>

                  <tbody>
                  @foreach ($list_consultorios as $clave => $consultorio)
                      <tr>
                        <td>{{++$clave}}</td>
                        <td>{{strtoupper($consultorio->descripcion)}}</td>
                        <td>{{strtoupper($consultorio->cantidad)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
          </div>
      