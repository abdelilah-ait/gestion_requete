<div class="panel-body">
	<button type="button" class="btn btn-primary" style="background-color: #004c11;
		    border-color: #004c11;
		    color: #fff;
		    font-weight: bold;" data-toggle="modal" data-target="#popupajcategorie" data-whatever="@fat">Nouvelle catégorie</button>
	<table id="tab5" class="table table-bordered table-striped table-active text-center" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
        <th style="text-align: center;">IDCategorieRequerant</th>
				<th style="text-align: center;">IDTypeRequerant</th>
				<th style="text-align: center;">LibCategorie</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categorierequerants as $categorierequerant)
				<tr>
          <td class = "active">{{$categorierequerant->IDCategorieRequerant}}</td>
					<td class = "active">{{$categorierequerant->IDTypeRequerant}}</td>
					<td class = "active">{{$categorierequerant->LibCategorie}}</td>
					<td>
						<button style="display: inline-block;background-color: transparent;border: 0;" id="{{$categorierequerant->LibCategorie}}" onclick="chargecategorie(this.id)"><span class="fa fa-pencil" data-toggle="modal" data-target="#popupupdatecategorie" data-whatever="@fat"></span></button>
						<button style="display: inline-block;background-color: transparent;border: 0;"><span class="fa fa-trash" data-toggle="modal" data-target="#popupdeletecategorie" data-whatever="@fat"></span></button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal ajout -->
<div class="modal fade" id="popupajcategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/ajout.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Ajouter une catégorie</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="categorierequerant" style="text-align: left;margin-bottom: 8px;">Categorie</label>
      			<div class="col-sm-10" style="margin-bottom: 15px;">
      				<input type="text" class="form-control" id="categorierequerant" name="categorierequerant" value=""/>
      			</div>
            <label  class="col-sm-4 control-label"
            for="typerequerant" style="text-align: left;margin-bottom: 8px;width: 262px;">Selectionnez le type du requérant</label>
            <div class="col-sm-10">
              <select class="form-control" id="typerequerant" name="typerequerant" onchange="getsubcategory(this.value)">
                <option>Choisissez vous</option> 
                @foreach($typerequerants as $typerequerant)
                <option value="{{$typerequerant->IDType}}">{{$typerequerant->LibType}}</option> 
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
<div class="modal fade" id="popupupdatecategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/modification.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Modifier une catégorie</h4>
        </div>
      </div>
      <div class="modal-body">

      	<form class="form-horizontal" role="form">
      		<div class="form-group">
      			<label  class="col-sm-4 control-label"
      			for="categorie" style="text-align: left;margin-bottom: 8px;">Catégorie</label>
      			<div class="col-sm-10" style="margin-bottom: 15px;">
      				<input type="text" class="form-control" id="categorie" name="categorie" value=""/>
      			</div>
            <label  class="col-sm-4 control-label"
            for="typerequerant" style="text-align: left;margin-bottom: 8px;width: 262px;">Selectionnez le type du requérant</label>
            <div class="col-sm-10">
              <select class="form-control" id="typerequerant" name="typerequerant" onchange="getsubcategory(this.value)">
                <option>Choisissez vous</option> 
                @foreach($typerequerants as $typerequerant)
                <option value="{{$typerequerant->IDType}}">{{$typerequerant->LibType}}</option> 
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
<div class="modal fade" id="popupdeletecategorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="margin-top: 203px;">
      <div class="modal-header" style="background-color: #004c11;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
        <div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/suppression.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 10px">
        	<h4 class="modal-title" id="myModalLabel" style="color: #fff;">Supprimer une catégorie</h4>
        </div>
      </div>
      <div class="modal-body">

      	<div style="display: inline-block;margin-left: 10px">
      		<img src="{{asset('assets/img/avertissement.png')}}"/> 
      	</div>
      	<div style="display: inline-block; margin-left: 20px">
      		<h4>Voulez-vous vraiment supprimer cette catégorie ?</h4>
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