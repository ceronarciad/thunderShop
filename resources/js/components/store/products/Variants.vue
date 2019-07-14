<template>

                                <div class="row">   
                                        
                                        <div class="col-8 text-left">
                                            <h6 class="heading-small text-muted mb-4">Características</h6>
                                        </div>

                                        <div class="col">
                                                <form role="form">
                                                        <table  id="tableDetails" class="table table-striped table-bordered table-hover" width="100%">
                                                            <thead>
                                                                <tr class="primary">
                                                                    <th  class="th-center" width="5%"> <label> # </label></th>
                                                                    <th  class="th-center" width="20%"><label> SKU </label></th>
                                                                    <th  class="th-center" width="30%"><label> Size </label></th>
                                                                    <th  class="th-center" width="30%"><label> Color </label></th>
                                                                    <th  class="th-center" width="30%"><label> Acción </label></th>                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr> 
                                                                    <!-- /////////////////////// > Indice -->
                                                                    <td class="primary-dark-color">
                                                                        <p>1</p>
                                                                    </td>
                                                                    <td class="primary-dark-color">
                                                                            <input type="text"  name="sku-car" id="input-sku-car" class="form-control form-control-alternative" placeholder="SKU"  required>
                                                                    </td>    
                                                                    <td class="primary-dark-color">
                                                                            <input type="text"  name="size" id="input-size" class="form-control form-control-alternative" placeholder="Tamaño"  required>
                                                                    </td>                                                                    
                                                                    <td class="primary-dark-color">
                                                                            <input type="text"  name="color" id="input-color" class="form-control form-control-alternative" placeholder="Color"  required>
                                                                    </td>
                                                                    <!-- /////////////////////// > Boton Borrar -->    
                                                                    <td>
                                                                            <button class="btn btn-icon btn-2 btn-danger" type="button">
                                                                                    <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>                                                                                
                                                                            </button>
                                                                    </td>                                                                
                                                                </tr>   
                                                            </tbody>       
                                                            <tfoot>
                                                                    <tr>
                                                                      <td>
                                                                            <button class="btn btn-icon btn-2 btn-success" type="button">
                                                                                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>                                                                                
                                                                            </button>     
                                                                       </td>                                                                                             
                                                                    </tr>
                                                                  </tfoot>
                                                        </table>
                                                </form>
                                        </div>
                                </div>   

</template>

<script>
    export default {
        mounted() {
            $(document).ready(function() {
               //alert("hola caro");
            });
        }
    }
</script>
