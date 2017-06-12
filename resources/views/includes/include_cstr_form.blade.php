<form action="{{route('AddRequete')}}" method="post">
	<!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

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
		<div class="tab-content">
			<div class="tab-pane" id="about">
				<div class="row">

					<div class="col-sm-8 col-sm-offset-1">
						<div class="bloc_content">
							<table class="col-sm-4">
								<tr>
									<td>
										<label class="">N° C.S.T.R: <small>*</small></label>
									</td>
									<td>
										<input name="numcstr" type="text" class="form-control">
									</td>
									<td >
										<select class="form-control" id="annee" name="annee" onchange="getnumser(this.value)">
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
										<label class="">N° d’ordre : <small>*</small></label>
									</td>
									<td>
										<input name="numordre" type="text" class="form-control">
									</td>
								</tr>

							</table>

							<table class="col-sm-4" id="tabgauche">
								<tr>
									<td>
										<label class="">Date d’arrivé au C.S.T.R : <small>*</small></label>
									</td>
									<td>
										<input name="datearcstr" type="text" class="form-control">
									</td>
								</tr>

								<tr>
									<td>
										<label class="">Date d’arrivé : <small>*</small></label>
									</td>
									<td>
										<input name="datear" type="text" class="form-control">
									</td>
								</tr>



							</table>

							<table class="col-sm-4">

								<tr>
									<td>
										<label class="">Objet : <small>*</small></label>
									</td>
									<td>
										<textarea name="objet" id="objet" class="form-control"></textarea>
									</td>
								</tr>

							</table>

							<table class="col-sm-4" id="tabgauche">

								<tr>
									<td>
										<label class="">Thème : <small>*</small></label>
									</td>
									<td>
										<select class="form-control" id="theme" name="theme" onchange="getsubcategory(this.value)">
											<option>Choisissez vous</option> 
											@foreach($themes as $theme)
											<option value="{{$theme->IDTheme}}">{{$theme->LibTheme}}</option> 
											@endforeach
										</select>
									</td>
								</tr>

								<tr>
									<td>
										<label class="">Sous thème : <small>*</small></label>
									</td>
									<td>
										<select class="form-control" id="soustheme" name="soustheme" onchange="getnumser(this.value)">
											<option>Choisissez vous</option> 
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

						<div class="tabhaut">
							<div class="lab">
								<label class="">A L'encontre de : <small>*</small></label>
							</div>

							<div class="inp">
								<input name="contrequi" type="text" class="form-control">
							</div>
						</div>
						<div class="tabcentre">
							<div class="lab1">
								<label class="">Resumé : <small>*</small></label>
							</div>

							<div class="inp1">
								<textarea name="resume" class="form-control"></textarea>
							</div>
						</div>

						<table class="col-sm-4">
							<tr>
								<td>
									<label class="">District/Cercle/Region : <small>*</small></label>
								</td>
								<td>
									<select class="form-control" id="DSR" name="DSR" onchange="getnumser(this.value)">
										<option>Choisissez vous</option> 
										@foreach($entites as $entite)
										<option id="{{$entite->IDEntite}}">{{$entite->LibEntite}}</option> 
										@endforeach 
									</select>
								</td>
							</tr>
						</table>

						<table class="col-sm-4">
							<tr>
								<td>
									<label class="">Annexe/Caïdat/Préfécture : <small>*</small></label>
								</td>
								<td>
									<select class="form-control" id="DSR" name="ACP" onchange="getnumser(this.value)">
										<option>Choisissez vous</option> 
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

					<div class="tabhaut">
						<div class="lab">
							<label class="">Expéditeur : <small>*</small></label>
						</div>

						<div class="inp">
							<span id="lp" style="width: 24%">	<label for="pp">Personne physique  </label>
								<input type="radio" onclick="display('divFrmpp')" name="Expediteur" id="pp" value="p" checked="checked"></span>

								<span id="lm" style="width: 24%">	<label for="mm">Personne morale  </label>
									<input type="radio" onclick="display('divFrmmm')" name="Expediteur" id="mm" value="m"></span>

									<span id="lc" style="width: 24%">	<label for="cc">Collectif  </label>
										<input type="radio" onclick="display('divFrmpp')" name="Expediteur" id="cc" value="c"></span>

									</div>
								</div>

								<div class="div_changed">

									<div id="divFrmpp">
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

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="wizard-footer">
					<div class="pull-right">
						<input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
						<input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
					</div>

					<div class="pull-left">
						<input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
					</div>
					<div class="clearfix"></div>
				</div>
			</form>