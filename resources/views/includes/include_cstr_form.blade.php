<form action="{{route('createrequete')}}" method="post">
	<!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<div class="wizard-header">
		<h3 class="wizard-title">
			Nouvelle requête
		</h3>
	</div>
	<div class="wizard-navigation">
		<ul>
			<li><a href="#about" data-toggle="tab">Etape 1</a></li>
			<li><a href="#account" data-toggle="tab">Etape 2</a></li>
			<li><a href="#address" data-toggle="tab">Etape 3</a></li>
		</ul>
	</div>

	<div style="margin-top: 10px;margin-bottom: 10px">
		<div class="tab-content" style="max-height: 358px;">
			<div class="tab-pane" id="about">
				<div class="row">

					<div class="col-sm-8 col-sm-offset-1">
						<div class="bloc_content">
							<table class="col-sm-4" style="margin-left: 113px;">
								<tr>
									<td>
										<label class="" style="margin-top: 13px;">N° C.S.T.R: <small>*</small></label>
									</td>
									<td>
										<input name="numcstr" type="text" class="form-control">
									</td>
									<td >
										<select class="form-control" id="annee" name="annee" onchange="">
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option> 
										</select>
									</td>
								</tr>

								<tr>
									<td>
										<label class="" style="margin-top: 13px;">N° d’ordre : <small>*</small></label>
									</td>
									<td>
										<input name="numordre" type="text" class="form-control">
									</td>
								</tr>

							</table>

							<table class="col-sm-4" id="tabgauche">
								<tr>
									<td style="width: 191px;">
										<label class="" style="margin-top: 13px;">Date d’arrivé au C.S.T.R : <small>*</small></label>
									</td>
									<td style="float: inherit;width: 149px;margin: auto;">
										<input name="datearcstr" type="date" class="form-control" style="margin-left: 17px;width: 149px;">
									</td>
								</tr>

								<tr>
									<td style="width: 191px;">
										<label class="" style="margin-top: 13px;">Date d’arrivé au BO : <small>*</small></label>
									</td>
									<td style="float: inherit;width: 149px;margin: auto;">
										<input name="datearbo" type="date" class="form-control" style="margin-left: 17px;width: 149px;">
									</td>
								</tr>



							</table>

							<table class="col-sm-4" style="margin-left: 113px;">

								<tr>
									<td style="width: 106px;">
										<label class="" style="margin-top: 13px;">Objet : <small>*</small></label>
									</td>
									<td style="width: 244px">
										<textarea name="objet" id="objet" class="form-control" style="width: 260px;height: 82px;"></textarea>
									</td>
								</tr>

							</table>

							<table class="col-sm-4" id="tabgauche" style="">

								<tr>
									<td>
										<label class="" style="margin-top: 13px;">Thème : <small>*</small></label>
									</td>
									<td>
										<select class="form-control" id="theme" name="theme" onchange="getsubsstheme(this.value)">
											<option></option> 
											@foreach($themes as $theme)
											<option value="{{$theme->IDTheme}}">{{$theme->LibTheme}}</option> 
											@endforeach
										</select>
									</td>
								</tr>

								<tr>
									<td>
										<label class="" style="margin-top: 13px;">Sous thème : <small>*</small></label>
									</td>
									<td>
										<select class="form-control" id="soustheme" name="soustheme" onchange="">
											<option></option> 
										</select>
									</td>
								</tr>

							</table>

						</div>
					</div>

				</div>
			</div>

			<div class="tab-pane" id="account">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-1">

						<div class="tabhaut" style="margin-left: 67px;">
							<div class="lab">
								<label class="">A L'encontre de : <small>*</small></label>
							</div>

							<div class="inp">
								<input name="contrequi" type="text" class="form-control">
							</div>
						</div>
						<div class="tabcentre" style="margin-left: 67px;">
							<div class="lab1">
								<label class="">Resumé : <small>*</small></label>
							</div>

							<div class="inp1">
								<textarea name="resume" class="form-control" style="height: 80px;"></textarea>
							</div>
						</div>

						<table class="col-sm-4" style="width: 38%;margin-left: 67px;">
							<tr>
								<td>
									<label class="">District/Cercle/Region : <small>*</small></label>
								</td>
								<td>
									<select class="form-control" id="DSR" name="DSR" onchange="getsubssentite(this.value)" style="margin-bottom: 6px;width: 192px;">
										<option></option> 
										@foreach($entites as $entite)
										<option value="{{$entite->IDEntite}}">{{$entite->LibEntite}}</option> 
										@endforeach 
									</select>
								</td>
							</tr>
						</table>

						<table class="col-sm-4" style="width: 36%;">
							<tr>
								<td>
									<label class="">Annexe/Caïdat/Préfécture : <small>*</small></label>
								</td>
								<td style="width: 110px;">
									<select class="form-control" id="DSR_ACP" name="ACP" onchange="" style="margin-bottom: 10px;">
										<option></option> 
									</select>
								</td>
							</tr>
						</table>

					</div>
				</div>
			</div>

			<div class="tab-pane" id="address" style="
			margin-left: 10%"{{--  style="overflow:auto;" --}}>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1">

					<div class="tabhaut" style="margin-left: 110px;margin-top: 20px;">
						<div class="lab">
							<label class="">Expéditeur : <small>*</small></label>
						</div>

						<div class="inp" style="margin: auto;">
							<?php $tab = ['divFrmpp','divFrmmm','divFrmcc'] ?>
							@foreach($typerequerants as $index => $typerequerant)
								<span id="lp" style="width: 24%"><label for="pp">{{$typerequerant->LibType}}  </label>
									<input type="radio" onclick="display('{{$tab[$index]}}')" name="Expediteur" id="pp" value="p" {{($index==0)? "checked":""}}>
								</span>
							@endforeach
						</div>
								</div>

									<div class="div_changed">
	
										@include('../includes/form_part/personne_physique')						
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wizard-footer">
					<div class="pull-right">
						<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='Suivant' value='Suivant' />
						<input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='enrgister' value='ENREGISTRER' />
					</div>

					<div class="pull-left">
						<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='precedent' value='PRECEDENT' />
					</div>
					<div class="clearfix"></div>
				</div>
			</form>