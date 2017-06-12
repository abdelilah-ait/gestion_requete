@extends('layout')

@section('content')
<table>
	<tr>
		<td>
			<div class="select">
				<button style="border-radius: 135px;
				background-color: transparent;
				border: none;
				display: block;" onclick="show('ajout_requete')">
					<img src="{{asset('assets/img/ajout_requete.png')}}"/> 
				</button>

				<button style="border-radius: 135px;
				background-color: transparent;
				border: none;
			    display: block;" onclick="show('suivi_requete')">
			<img src="{{asset('assets/img/suivi_requete.png')}}"/> 
		</button>

		<button style="border-radius: 135px;
		background-color: transparent;
		border: none;
		display: block;" onclick="show('stat_requete')">
		<img src="{{asset('assets/img/stat_requete.png')}}"/> 
	</button>
</div>
</td>

<td>
	
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		<!--      Wizard container        -->
		<div class="wizard-container">
			<div class="card wizard-card" data-color="green" id="wizardProfile">

				<div class="content_changed">
						<div id="ajout_requete" class="cstr_fct">
							@include('../includes/include_cstr_form')
						</div>
						<div id="suivi_requete" class="cstr_fct" style="display: none;">
							{{-- @include('../includes/include_cstr_form') --}}
							<h1>suivie des requetes</h1>
						</div>
						<div id="stat_requete" class="cstr_fct" style="display: none;">
							{{-- @include('../includes/include_cstr_form') --}}
							<h1>statistiques</h1>
						</div>
				</div>
				
					

							<div id="divFrmpp" style="display: none;">
								<div class="tabhaut">
									<div class="lab">
										<label>Nom Complet : <small>*</small></label>
									</div>

									<div class="inpnc">
										<input name="nomcompletfr" type="text" class="form-control">
									</div>
								</div>

								<div class="tabhaut" style="
								margin-top: -2%;
								margin-bottom: 2%;
								margin-left: 0%;
								">
								<table>
									<tr>
										<td>
											<div class="inpncar">
												<input name="nomcompletar" type="text" class="form-control">
											</div>
											<div class="lab">
												<label><small>*</small> : الاسم الكامل</label>
											</div>
										</td>

										<td>
											<div class="lab">
												<label>CIN : <small>*</small></label>
											</div>	
											<div class="inpncar">
												<input name="cin" type="text" class="form-control">
											</div>
										</td>

									</tr>
								</table>
							</div>

							<div class="tabhaut">
								<div class="lab">
									<label class="">Sexe : <small>*</small></label>
								</div>

								<div class="inp">
									<span style="width: 24%">	<label >Homme  </label>
										<input type="radio" id="homme" name="Sexe"></span>

										<span style="width: 24%">	<label>Femme  </label>
											<input type="radio" id="femme" name="Sexe"></span>
										</div>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 1%">
													<div class="lab">
														<label>Téléphone : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="telephone" type="text" class="form-control">
													</div>
												</td>

												<td style="width: 2%">
													<div class="lab">
														<label>E-mail : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="e_mail" type="text" class="form-control">
													</div>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 150px">
													<label>Adresse : <small>*</small></label>
												</td>
												<td style="width: 300px">
													<textarea name="adresse" class="form-control"></textarea>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 1%">
													<div class="lab">
														<label>Type : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<select class="form-control" id="categorierequerant" name="categorierequerant" onchange="getnumser(this.value)">
															<option>Choisissez vous</option> 
															@foreach($categorierequerants as $categorierequerant)
															<option id="{{$categorierequerant->IDCategorieRequerant}}">{{$categorierequerant->LibCategorie}}</option> 
															@endforeach

														</select>
													</div>
												</td>

												<td style="width: 2%">
													<div class="lab">
														<label>Pays : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<select class="form-control" id="pays" name="pays" onchange="getnumser(this.value)">
															<option>Choisissez vous</option> 
														</select>
													</div>
												</td>

											</tr>
										</table>
									</div>

								</div>	

								<div id="divFrmmm" style="display: none" >
									<div class="tabhaut">
										<div class="lab">
											<label>Raison sociale : <small>*</small></label>
										</div>

										<div class="inpnc">
											<input name="raisonsociale" type="text" class="form-control">
										</div>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 1%">
													<div class="lab">
														<label>Téléphone : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="telephone" type="text" class="form-control">
													</div>
												</td>

												<td style="width: 2%">
													<div class="lab">
														<label>E-mail : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="e_mail" type="text" class="form-control">
													</div>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 150px">
													<label>Adresse : <small>*</small></label>
												</td>
												<td style="width: 300px">
													<textarea name="adresse" class="form-control"></textarea>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 2%">
													<div class="lab">
														<label>Fax : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="fax" type="text" class="form-control">
													</div>
												</td>
												<td style="width: 1%">
													<div class="lab" style="width: 125px;">
														<label>Secteur d'activité : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<select class="form-control" id="secteur_activite" name="secteur_activite" onchange="getnumser(this.value)">
															<option>Choisissez vous</option> 
														</select>
													</div>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 1%">
													<div class="lab">
														<label>Représentant : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="representant" type="text" class="form-control">
													</div>
												</td>

												<td style="width: 2%">
													<div class="lab" style="width: 135px;">
														<label>Télé Représentant : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<input name="tele_representant" type="text" class="form-control">
													</div>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 208px">
													<label>Adresse Représentant: <small>*</small></label>
												</td>
												<td style="width: 300px">
													<textarea name="adresse_representant" class="form-control"></textarea>
												</td>
											</tr>
										</table>
									</div>

									<div class="tabhaut">
										<table>
											<tr>
												<td style="width: 1%">
													<div class="lab">
														<label>Type : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<select class="form-control" id="categorierequerant" name="categorierequerant" onchange="getnumser(this.value)">
															<option>Choisissez vous</option> 
															@foreach($categorierequerants as $categorierequerant)
															<option id="{{$categorierequerant->IDCategorieRequerant}}">{{$categorierequerant->LibCategorie}}</option> 
															@endforeach

														</select>
													</div>
												</td>

												<td style="width: 2%">
													<div class="lab">
														<label>Pays : <small>*</small></label>
													</div>	
													<div class="inpncar">
														<select class="form-control" id="pays" name="pays" onchange="getnumser(this.value)">
															<option>Choisissez vous</option> 
														</select>
													</div>
												</td>

											</tr>
										</table>
									</div>

								</div>



							</div>
						</div> <!-- wizard container -->
					</div>
				</div><!-- end row -->
			</div> <!--  big container -->
		</div>
</td>
</tr>
</table>

	</div>

	<script type="text/javascript">

		function display(id){
			$(".div_changed").empty();
			$("#"+id).clone().appendTo(".div_changed").fadeIn();
		}

		function getsubcategory(value) {
			$.ajax({url: "/themes/"+value+"/soustheme", success: function(result){
	        console.log(result);
	    }});
		}

		function show(id){
			$(".cstr_fct").hide();
			$(".cstr_fct").hide();
			$("#"+id).fadeIn();
		}
	</script>

	@endsection