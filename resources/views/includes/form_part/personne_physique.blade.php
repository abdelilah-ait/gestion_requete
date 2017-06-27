<div id="divFrmpp">
	<div class="tabhaut" style="margin-left: 49px;height: 92px;">
		<div class="lab">
			<label>Nom Complet : <small>*</small></label>
		</div>

		<div class="inpnc" style="margin-left: 29px;width: 494px;">
			<input name="requerant[NomCompletFR]" type="text" class="form-control">
		</div>
	</div>

	<div class="tabhaut" style="
	margin-top: -2%;
	margin-left: 49px;
	height: 90px;
	">
	<table>
		<tr>
			<td>
				<div class="inpncar" style="width: 230px;;margin-right: 13px;">
					<input name="requerant[NomCompletAR]" type="text" class="form-control" style="margin-left: -18px;width: 273px;">
				</div>
				<div class="lab">
					<label><small>*</small> : الاسم الكامل</label>
				</div>
			</td>

			<td>
				<div class="lab" style="width: 49px;">
					<label>CIN : <small>*</small></label>
				</div>	
				<div class="inpncar" style="width: 150px;margin-left: 34px;">
					<input name="requerant[CIN]" type="text" class="form-control">
				</div>
			</td>

		</tr>
	</table>
</div>

<div class="tabhaut" style="margin-left: 49px">
	<div class="lab">
		<label class="">Sexe : <small>*</small></label>
	</div>

	<div class="inp" style="margin-left: 6px;">
		<span style="width: 24%;margin-right: 15px;">	<label >Homme  </label>
			<input type="radio" id="homme" name="requerant[Sexe]" value="Homme"></span>

			<span style="width: 24%">	<label>Femme  </label>
				<input type="radio" id="femme" name="requerant[Sexe]" value="Femme"></span>
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
							<input name="requerant[Tel]" type="text" class="form-control">
						</div>
					</td>

					<td style="width: 324px">
						<div class="lab" style="width: 60px;">
							<label>E-mail : <small>*</small></label>
						</div>	
						<div class="inpncar" style="width: 215px;">
							<input name="requerant[Email]" type="text" class="form-control">
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
						<textarea name="requerant[Adresse]" class="form-control" style="height: 66px;"></textarea>
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
							<select class="form-control" id="categorierequerant" name="requerant[IDCategorieRequerant]" onchange="">
								<option>Choisissez vous</option> 
								@foreach($categorierequerants_pp as $categorierequerant_pp)
								<option value="{{$categorierequerant_pp->IDCategorieRequerant}}">{{$categorierequerant_pp->LibCategorie}}</option> 
								@endforeach

							</select>
						</div>
					</td>

					<td>
						<div class="lab" style="width: 85px;">
							<label>Pays : <small>*</small></label>
						</div>	
						<div class="inpncar" style="width: 166px;">
							<select class="form-control" id="country1" name="requerant[Nationalite]" onchange="">
								<option>Choisissez vous</option> 
							</select>
						</div>
					</td>

				</tr>
			</table>
		</div>

	</div>
