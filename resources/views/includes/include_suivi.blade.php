<form action="" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="wizard-header">
		<h3 class="wizard-title">
			Suivi et Gestion
		</h3>
	</div>

	<div class="row">

		<div class="col-sm-8 col-sm-offset-1">

			<fieldset style="width: 80%;margin: auto;border: 1px solid rgb(177, 175, 175);padding-bottom: 10px;margin-top: 7px;"><legend style="margin-bottom: 0px;font-size: 20px;color: #757474">Rechercher par : </legend>
				<table id="recherche" class="col-sm-6" style="width: 90%;margin-left: 50px;">

					<tbody>
						<tr>
							<td style="width: 245px;"> 	
								<select class="form-control" name="critere" id="critere" style="width: 150px;">
									<option value="nsr">N° C.S.T.R</option>
									<option value="no">N° order</option>
									<option value="cin">CIN</option>
									<option value="cb">Code-barres</option>
									<option value="ex">Expiditeur</option>
									<option value="ob">Objet</option>
								</select>
							</td>
							<td style="width: 255px;">
								<input type="text" class="form-control" id="val" name="val" style="width: 245px;">
							</td>
							<td>
								<input type="button" class="btn btn-next btn-fill btn-success btn-wd" name="Recherche" value="Recherche" style="height: 38px;">
							</td>
						</tr>
					</tbody>

				</table>
			</fieldset>
</div>
<div class="col-sm-8 col-sm-offset-1" style=" margin-top: 10px;">
			<fieldset style="width: 80%;margin: auto;border: 1px solid rgb(177, 175, 175);padding-bottom: 10px;margin-top: 7px;"><legend style="margin-bottom: 0px;font-size: 20px;color: #757474">Filtrer par : </legend>
				<table id="filtrage" class="col-sm-6" style="width: 90%;margin-left: 50px;">

					<tbody>
						<tr>
							<td style="width: 100px;">
								<label class="">Thème : </label>
							</td>	
							<td style="width: 250px;"> 	
								<select class="form-control" name="theme" id="theme" style="width: 240px;">
								 <option></option> 
									@foreach($themes as $theme)
										<option value="{{$theme->IDTheme}}">{{$theme->LibTheme}}</option>
									@endforeach
								</select>
							</td>
							<td style="width: 100px;">
								<label class="">Etat : </label>
							</td>
							<td style="width: 250px;">
								<select class="form-control" name="statut" id="statut" style="width: 240px;">
									<option></option> 
									@foreach($statuts as $statut)
										<option value="{{$statut->IDStatut}}">{{$statut->Etat}}</option> 
									@endforeach
								</select>
							</td>
						</tr>
					</tbody>

				</table>
			</fieldset>

		</div>
	</div>
