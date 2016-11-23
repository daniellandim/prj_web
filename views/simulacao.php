<form action="" class="calculator-form form-horizontal"  id="form0" method="post">

<fieldset>
                
                <div class="form-group"><legend> Dados da Simulação </legend></div>

            <div class="form-group">
                <label class="col-sm-4 control-label" for="Entrada_Valor">Valor</label>
                <div class="input-group col-sm-4"><div class="input-group-addon ">R$</div><input class="money form-control text-right" d id="Entrada_Valor" maxlength="14" name="valor" type="text" value="" /></div>

            </div>
            
            
            
            <div class="form-group">
                <label class="col-sm-4 control-label" for="Entrada_ValorEntrada">Entrada</label>
                <div class="input-group col-sm-4"><div class="input-group-addon ">R$</div><input class="money form-control text-right"  id="Entrada" maxlength="14" name="entrada" type="text" value="" /></div>

            </div>
           
           
           
            <div class="form-group">
                <label class="col-sm-4 control-label" for="Entrada_NumeroPrestacoes">N&#250;mero de presta&#231;&#245;es</label>
                <div class="input-group col-sm-4"><div class="input-group-addon addon-invisible">Nº</div><input class="int form-control text-right" id="nPrestacoes" maxlength="14" name="nPrestacoes" type="text" value="" /></div>

            </div>
            
            
            
            <div class="form-group"><div class="col-sm-offset-4 col-sm-8">
             
            <input class="btn btn-success" type="submit" value="Calcular" data-toggle="modal" data-target="#myModalSimulacao">
            
            <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#myModalSimulacao">Calcular</button>
             

        </div>    </div>
</fieldset>

</form>