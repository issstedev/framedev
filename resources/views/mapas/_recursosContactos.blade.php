          @if($establecimiento->contactos()->count()> 0)
             
          <div class="m-list-search">
                        <div class="m-list-search__results">
                            <span class="m-list-search__result-category m-list-search__result-category--first">
             <span class="m-list-search__result-category m-list-search__result-category--first">
                            Contacto
                            </span>
              </div>
              </div>              
              <table  id="contact_table_3" class="table m-table m-table--head-separator-danger" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Cargo</th>
                          <th>Correo</th>
                      </tr>
                  </thead>

                  <tbody>
                    <?php $clave= 0;?>
                      @foreach ($establecimiento->contactos as $contact)
                      <tr>
                        <td>{{$clave++}}</td>
                        <td>{{strtoupper($contact->nombre)}}</td>
                        <td>{{strtoupper($contact->cargo)}}</td>
                        <td>{{strtoupper($contact->correo)}}</td>
                      </tr>
                  @endforeach
                  </tbody>
              </table>
            @else
              No Hay Contactos Registrados
            @endif  