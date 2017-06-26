<div class="panel-body">
	<button type="button" class="btn btn-primary" style="background-color: #004c11;
		    border-color: #004c11;
		    color: #fff;
		    font-weight: bold;" data-toggle="modal" data-target="#popupajtype" data-whatever="@fat">Nouveau type</button>
	<table id="tab5" class="table table-bordered table-striped table-active text-center" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">IDTypeRequerant</th>
				<th style="text-align: center;">LibType</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($typerequerants as $typerequerant)
				<tr>
					<td class = "active">{{$typerequerant->IDTypeRequerant}}</td>
					<td class = "active">{{$typerequerant->LibType}}</td>
					<td>
						<button style="display: inline-block;background-color: transparent;border: 0;" id="{{$typerequerant->LibType}}" onclick="chargetype(this.id)"><span class="fa fa-pencil" data-toggle="modal" data-target="#popupupdatetype" data-whatever="@fat"></span></button>
						<button style="display: inline-block;background-color: transparent;border: 0;"><span class="fa fa-trash" data-toggle="modal" data-target="#popupdeletetype" data-whatever="@fat"></span></button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal ajout -->
<div class="modal fade" id="popupajtype" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/ajout.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Ajouter un type</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="libtype" style="text-align: left;margin-bottom: 8px;">Type</label>
      			<div class="col-sm-10">
      				<input type="text" class="form-control" id="libtype" name="libtype" value=""/>
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
<div class="modal fade" id="popupupdatetype" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/modification.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Modifier un type</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="type" style="text-align: left;margin-bottom: 8px;">Type</label>
      			<div class="col-sm-10">
      				<input type="text" class="form-control" id="type" name="type" value=""/>
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
<div class="modal fade" id="popupdeletetype" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/suppression.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Supprimer un type</h4>
        </div>
      </div>
      <div class="modal-body">

      	<div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/avertissement.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 20px">
      		<h4>Voulez-vous vraiment supprimer ce type ?</h4>
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