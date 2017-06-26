<div id="divFrmmm" style="display: none" >
	<div class="tabhaut" style="margin-left: 49px;height: 92px;">
		<div class="lab">
			<label>Raison sociale : <small>*</small></label>
		</div>

		<div class="inpnc" style="margin-left: 29px;width: 494px;">
			<input name="raisonsociale" type="text" class="form-control">
		</div>
	</div>

	<div class="tabhaut" style="height: 75px;margin-left: 49px">
			<table>
				<tr>
					<td style="width: 324px;">
						<div class="lab">
							<label>Téléphone : <small>*</small></label>
						</div>	
						<div class="inpncar" style="margin-left: 11px;width: 146px;">
							<input name="telephone" type="text" class="form-control">
						</div>
					</td>

					<td style="width: 324px">
						<div class="lab" style="width: 60px;">
							<label>E-mail : <small>*</small></label>
						</div>	
						<div class="inpncar" style="width: 215px;">
							<input name="e_mail" type="text" class="form-control">
						</div>
					</td>

				</tr>
			</table>
		</div>

	<div class="tabhaut" style="margin-left: 49px;height: 104px;">
			<table style="width: 645px;">
				<tr>
					<td style="width: 132px;">
						<label>Adresse : <small>*</small></label>
					</td>
					<td style="">
						<textarea name="adresse" class="form-control" style="height: 66px;"></textarea>
					</td>
				</tr>
			</table>
		</div>

	<div class="tabhaut" style="margin-left: 49px;">
		<table>
			<tr>
				<td>
					<div class="lab" style="width: 85px;">
						<label>Fax : <small>*</small></label>
					</div>	
					<div class="inpncar" style="width: 166px;margin-right: 50px;">
						<input name="fax" type="text" class="form-control">
					</div>
				</td>
				<td>
					<div class="lab" style="width: 125px;">
						<label>Secteur d'activité : <small>*</small></label>
					</div>	
					<div class="inpncar" style="width: 124px;">
						<select class="form-control" id="secteur_activite" name="secteur_activite">
							<option>Choisissez vous</option> 
						</select>
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div class="tabhaut" style="margin-left: 49px;">
		<table>
			<tr>
				<td>
					<div class="lab" style="width: 114px;margin-right: -11px;">
						<label>Représentant : <small>*</small></label>
					</div>	
					<div class="inpncar" style="width: 137px;margin-right: 50px;">
						<input name="representant" type="text" class="form-control">
					</div>
				</td>

				<td>
					<div class="lab" style="width: 136px;">
						<label>Télé Représentant : <small>*</small></label>
					</div>	
					<div class="inpncar" style="width: 124px;">
						<input name="tele_representant" type="text" class="form-control">
					</div>
				</td>
			</tr>
		</table>
	</div>

	<div class="tabhaut" style="margin-left: 49px;height: 104px;">
		<table style="width: 645px;">
			<tr>
				<td style="width: 203px;">
					<label>Adresse Représentant: <small>*</small></label>
				</td>
				<td style="">
					<textarea name="adresse_representant" class="form-control" style="height: 66px;width: 468px;"></textarea>
				</td>
			</tr>
		</table>
	</div>

	<div class="tabhaut" style="margin-left: 49px;">
		<table>
			<tr>
				<td>
					<div class="lab" style="width: 85px;">
						<label>Type : <small>*</small></label>
					</div>	
					<div class="inpncar" style="width: 166px;margin-right: 50px;">
						<select class="form-control" id="categorierequerant" name="categorierequerant" onchange="getnumser(this.value)">
							<option>Choisissez vous</option> 
							@foreach($categorierequerants_mm as $categorierequerant_mm)
							<option id="{{$categorierequerant_mm->IDCategorieRequerant}}">{{$categorierequerant_mm->LibCategorie}}</option> 
							@endforeach

						</select>
					</div>
				</td>

				<td>
					<div class="lab" style="width: 85px;">
						<label>Pays : <small>*</small></label>
					</div>	
					<div class="inpncar" style="width: 166px;">
						<select class="form-control" id="country2" name="country2" onchange="">
							<option>Choisissez vous</option> 
						</select>
					</div>
				</td>

			</tr>
		</table>
	</div>

</div>
	