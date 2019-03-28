    <div class="row">
     	    <div class="col-lg-6">
     	
     	    

     		 <div class="m-portlet m-portlet--mobile">

              
                             <div class="m-portlet__head">
                                 <div class="m-portlet__head-caption">
                                     <div class="m-portlet__head-title">
                                         <h3 class="m-portlet__head-text">
                                           	Areas
                                         </h3>
                                     </div>
                                 </div>

                             </div>

                        <div class="m-portlet__body">

                           @include('mapas._recursosAreas', ['establecimiento'=> $establecimiento] ) 
                       </div>		
                </div>        	

     	    </div>
     	    
     	    <div class="col-lg-6">
     		    		 <div class="m-portlet m-portlet--mobile">
                         @include('mapas._recursosHumanos', ['establecimiento'=> $establecimiento] )   

     	          </div>
     	    	

     </div>
 </div>

     <div class="row">
     	    <div class="col-lg-6">
     	    		 <div class="m-portlet m-portlet--mobile">
                      @include('mapas._recursosComputo', ['establecimiento'=> $establecimiento] )   
     	    </div>
         </div>
     	    
     	    <div class="col-lg-6">
     		    <div class="m-portlet m-portlet--mobile">
            @include('mapas._recursosEquipoMedico', ['establecimiento'=> $establecimiento] )     
            </div>
     	    	

     </div>	

         </div>  
     