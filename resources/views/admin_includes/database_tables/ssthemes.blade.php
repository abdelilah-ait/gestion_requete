<div class="panel-body">
	<button type="button" class="btn btn-primary" style="background-color: #004c11;
		    border-color: #004c11;
		    color: #fff;
		    font-weight: bold;" data-toggle="modal" data-target="#popupajsstheme" data-whatever="@fat">Nouveau sous thème</button>
	<table id="tab2" class="table table-bordered table-striped table-active text-center" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">IDSousTheme</th>
				<th style="text-align: center;">IDTheme</th>
				<th style="text-align: center;">LibSousTheme</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($sousthemes as $soustheme)
				<tr>
					<td class = "active">{{$soustheme->IDSousTheme}}</td>
					<td class = "active">{{$soustheme->IDTheme}}</td>
					<td class = "active">{{$soustheme->LibSousTheme}}</td>
					<td>
						<button style="display: inline-block;background-color: transparent;border: 0;" id="{{$soustheme->LibSousTheme}}" onclick="chargesstheme(this.id)"><span class="fa fa-pencil" data-toggle="modal" data-target="#popupupdatesstheme" data-whatever="@fat"></span></button>
						<button style="display: inline-block;background-color: transparent;border: 0;"><span class="fa fa-trash" data-toggle="modal" data-target="#popupdeletesstheme" data-whatever="@fat"></span></button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal ajout -->
<div class="modal fade" id="popupajsstheme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/ajout.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Ajouter un sous thème</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="libsstheme" style="text-align: left;margin-bottom: 8px;">Nom du sous thème</label>
      			<div class="col-sm-10" style="margin-bottom: 15px;">
      				<input type="text" class="form-control" id="libsstheme" name="libsstheme" value=""/>
      			</div>
      			<label  class="col-sm-4 control-label"
      			for="libtheme" style="text-align: left;margin-bottom: 8px;">Selectionnez le thème</label>
      			<div class="col-sm-10">
      				<select class="form-control" id="theme" name="theme" onchange="getsubcategory(this.value)">
      					<option>Choisissez vous</option> 
      					@foreach($themes as $theme)
      					<option value="{{$theme->IDTheme}}">{{$theme->LibTheme}}</option> 
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
<div class="modal fade" id="popupupdatesstheme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/modification.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Modifier un sous thème</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="libsstheme" style="text-align: left;margin-bottom: 8px;">Nom du sous thème</label>
      			<div class="col-sm-10" style="margin-bottom: 15px;">
      				<input type="text" class="form-control" id="libsstheme" name="libsstheme" value=""/>
      			</div>
      			<label  class="col-sm-4 control-label"
      			for="libsstheme" style="text-align: left;margin-bottom: 8px;">Nom du thème</label>
      			<div class="col-sm-10">
      				<select class="form-control" id="theme" name="theme" onchange="getsubcategory(this.value)">
      					<option>Choisissez vous</option> 
      					@foreach($themes as $theme)
      					<option value="{{$theme->IDTheme}}">{{$theme->LibTheme}}</option> 
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
<div class="modal fade" id="popupdeletesstheme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/suppression.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Supprimer un sous thème</h4>
        </div>
      </div>
      <div class="modal-body">

      	<div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/avertissement.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 20px">
      		<h4>Voulez-vous vraiment supprimer ce sous thème ?</h4>
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