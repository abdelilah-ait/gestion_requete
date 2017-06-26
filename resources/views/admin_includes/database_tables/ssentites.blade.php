<div class="panel-body">
	<button type="button" class="btn btn-primary" style="background-color: #004c11;
		    border-color: #004c11;
		    color: #fff;
		    font-weight: bold;" data-toggle="modal" data-target="#popupajssentite" data-whatever="@fat">Nouvelle sous entité</button>
	<table id="tab4" class="table table-bordered table-striped table-active text-center" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">IDSousEntite</th>
				<th style="text-align: center;">IDEntite</th>
				<th style="text-align: center;">LibSousEntite</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sousentites as $sousentite)
				<tr>
					<td class = "active">{{$sousentite->IDoSousEntite}}</td>
					<td class = "active">{{$sousentite->IDEntite}}</td>
					<td class = "active">{{$sousentite->LibSousEntite}}</td>
					<td>
						<button style="display: inline-block;background-color: transparent;border: 0;" id="{{$sousentite->LibSousEntite}}" onclick="chargessentite(this.id)"><span class="fa fa-pencil" data-toggle="modal" data-target="#popupupdatessentite" data-whatever="@fat"></span></button>
						<button style="display: inline-block;background-color: transparent;border: 0;"><span class="fa fa-trash" data-toggle="modal" data-target="#popupdeletessentite" data-whatever="@fat"></span></button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal ajout -->
<div class="modal fade" id="popupajssentite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/ajout.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Ajouter une sous entité</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="libssentite" style="text-align: left;margin-bottom: 8px;">Nom du sous entité</label>
      			<div class="col-sm-10" style="margin-bottom: 15px;">
      				<input type="text" class="form-control" id="libssentite" name="libssentite" value=""/>
      			</div>
      			<label  class="col-sm-4 control-label"
      			for="libentite" style="text-align: left;margin-bottom: 8px;">Selectionnez l'entité</label>
      			<div class="col-sm-10">
      				<select class="form-control" id="libentite" name="libentite" onchange="getsubcategory(this.value)">
      					<option>Choisissez vous</option> 
      					@foreach($entites as $entite)
      					<option value="{{$entite->IDEntite}}">{{$entite->LibEntite}}</option> 
      					@endforeach
      				</select>
      			</div>
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-weight: bold;">Annuler</button>
        <button type="button" class="btn btn-primary" style="background-color: #e87777;
		    border-color: #e87777;
		    color: #6f0303;
		    font-weight: bold;">Ajouter</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal update -->
<div class="modal fade" id="popupupdatessentite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/modification.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Modifier une sous entité</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="libssentite" style="text-align: left;margin-bottom: 8px;">Nom du sous entité</label>
      			<div class="col-sm-10" style="margin-bottom: 15px;">
      				<input type="text" class="form-control" id="libssentite" name="libssentite" value=""/>
      			</div>
      			<label  class="col-sm-4 control-label"
      			for="libsstheme" style="text-align: left;margin-bottom: 8px;">Nom du entité</label>
      			<div class="col-sm-10">
      				{{-- <input type="text" class="form-control" id="libsstheme" value=""/> --}}
      				<select class="form-control" id="entite" name="entite" onchange="getsubcategory(this.value)">
      					<option>Choisissez vous</option> 
      					@foreach($entites as $entite)
      					<option value="{{$entite->IDEntite}}">{{$entite->LibEntite}}</option> 
      					@endforeach
      				</select>
      			</div>
      		</div>
      	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-weight: bold;">Annuler</button>
        <button type="button" class="btn btn-primary" style="background-color: #e87777;
		    border-color: #e87777;
		    color: #6f0303;
		    font-weight: bold;">Modifier</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal delete -->
<div class="modal fade" id="popupdeletessentite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/suppression.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Supprimer une sous entité</h4>
        </div>
      </div>
      <div class="modal-body">

      	<div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/avertissement.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 20px">
      		<h4>Voulez-vous vraiment supprimer cette sous entité ?</h4>
      	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-weight: bold;">Non</button>
        <button type="button" class="btn btn-primary" style="background-color: #e87777;
		    border-color: #e87777;
		    color: #6f0303;
		    font-weight: bold;">Oui</button>
      </div>
    </div>
  </div>
</div>