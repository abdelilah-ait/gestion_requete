@extends('../layout')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="col-sm-8 col-sm-offset-2">
			            <!--      Wizard container        -->
			            <div class="wizard-container">
			                <div class="card wizard-card" data-color="green" id="wizardProfile">
			                    <form action="" method="">
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
												</div>
			                                	</div>

			                                	{{-- <div class="col-sm-10 col-sm-offset-1">
													<div class="input-group">
														
														<div class="form-group label-floating">
				                                            <label class="control-label">Email <small>(required)</small></label>
				                                            <input name="email" type="email" class="form-control">
				                                        </div>
													</div>
			                                	</div> --}}
			                            	</div>
			                            </div>
			                            <div class="tab-pane" id="account">
			                               <div class="row">
			                                  <div class="col-sm-8 col-sm-offset-1">
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
													<select class="form-control" id="theme" name="theme" onchange="getnumser(this.value)">
    													<option>Choisissez vous</option> 
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
			                            <div class="tab-pane" id="address">
			                                <div class="row">
			                                    <div class="col-sm-8 col-sm-offset-1">
		                                        	<table class="tabhaut">

		                                        	 <tr>
														<td style="margin: 12px 12px 12px 12px}​">
			                                        		<label class="">A L'encontre de : <small>*</small></label>
	                                                    </td>
														<td style="margin: 12px 12px 12px 12px}​">
			                                    			<input name="contrequi" type="text" class="form-control">
														</td>
												     </tr>

		                                        	</table>
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
			                </div>
			            </div> <!-- wizard container -->
			        </div>
		        </div><!-- end row -->
		    </div> <!--  big container -->
		</div>
		
	</div>
</div>
@endsection