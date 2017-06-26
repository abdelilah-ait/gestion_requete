@extends('layout')

@section('content')
{{-- <table>
	<tr>
		<td> --}}
<div class="select" style="width: 90%;margin: auto;">
				{{-- <button style="border-radius: 135px;
				background-color: transparent;
				border: none;
				display: inline-block;" onclick="show('ajout_requete')">
					<img src="{{asset('assets/img/ajout_requete.png')}}"/> 
				</button> --}}

		<button style="background-color: #fff;
				border: none;
			    display: inline-block;
			    height: 86px;
			    width: 279px;
			    border-radius: 0 30px 30px 0;
			    padding: 0;margin-left: 40px;" onclick="show('ajout_requete')">
			<img src="{{asset('assets/img/ajout_requete.png')}}" style="margin-left: -61px;" /> 
					<h4 style="display: inline-block;color: #5f6468;font-size: 25px;vertical-align: middle;margin-left: 7px;">Nouvelle requête</h4>
		</button>
		<button style="background-color: #fff;
				border: none;
			    display: inline-block;
			    margin-left: 57px;
			    height: 86px;
			    width: 279px;
			    border-radius: 0 30px 30px 0;
			    padding: 0;" onclick="show('suivi_requete')">
			<img src="{{asset('assets/img/suivi_requete.png')}}" style="margin-left: -61px;" /> 
					<h4 style="display: inline-block;color: #5f6468;font-size: 25px;vertical-align: middle;margin-left: 7px;">Suivi et Gestion</h4>
		</button>
		<button style="background-color: #fff;
				border: none;
			    display: inline-block;
			    margin-left: 70px;
			    height: 86px;
			    width: 279px;
			    border-radius: 0 30px 30px 0;
			    padding: 0;" onclick="show('stat_requete')">
			<img src="{{asset('assets/img/stat_requete.png')}}" style="margin-left: -61px;" /> 
					<h4 style="display: inline-block;color: #5f6468;font-size: 25px;vertical-align: middle;margin-left: 7px;">Etats et Statistiques</h4>
		</button>

		{{-- <button style="border-radius: 135px;
		background-color: transparent;
		border: none;
		display: inline-block;" onclick="show('stat_requete')">
		<img src="{{asset('assets/img/stat_requete.png')}}"/> 
	</button> --}}
</div>
{{-- </td>

<td> --}}
	
<div class="row" style=" margin-left: 32px;">
	<div class="col-sm-8 col-sm-offset-2">
		<!--      Wizard container        -->
		<div class="wizard-container">
			<div class="card wizard-card" data-color="green" id="wizardProfile" style="max-height: 591px;">

				<div class="content_changed">
						<div id="ajout_requete" class="cstr_fct">
							@include('../includes/include_cstr_form')
						</div>
						<div id="suivi_requete" class="cstr_fct" style="display: none;">
							@include('../includes/include_suivi')
						</div>
						<div id="stat_requete" class="cstr_fct" style="display: none;">
							{{-- @include('../includes/include_cstr_form') --}}
							<h1>statistiques</h1>
						</div>
				</div>
				
					
							<div style="display: none;">
								@include('../includes/form_part/personne_physique')
								@include('../includes/form_part/personne_morale')
								@include('../includes/form_part/collectif')
							</div>
								

							</div>
						</div> <!-- wizard container -->
					</div>
				</div><!-- end row -->
			</div> <!--  big container -->
		</div>
{{-- </td>
</tr>
</table> --}}

	</div>
	<script type= "text/javascript" src = "../assets/js/countries.js"></script>
	<script language="javascript">
		populateCountries("country1");
		populateCountries("country2");
		populateCountries("country3");
	</script>

	<script type="text/javascript">

		function display(id){
			$(".div_changed").empty();
			$("#"+id).clone().appendTo(".div_changed").fadeIn();
		}

		function getsubssentite(value) {
			$.ajax({url: "/entites/"+value+"/sousentites", type: "GET",success: function(result){
	        console.log(result["sousentites"]);
	        var sousentites = result["sousentites"];

	        var $sousentitesSelect = $("#DSR_ACP");
			$sousentitesSelect.empty(); // remove old options
			$.each(sousentites, function(key, sousentite) {
			  $sousentitesSelect.append($("<option></option>")
			     .attr("value", sousentite.IDSousEntite).text(sousentite.LibSousEntite));
			});
	    }});
		}

		function getsubsstheme(value) {
			$.ajax({url: "/themes/"+value+"/sousthemes", type: "GET",success: function(result){
	        console.log(result["sousthemes"]);
	        var sousthemes = result["sousthemes"];

	        var $sousthemesSelect = $("#soustheme");
			$sousthemesSelect.empty(); // remove old options
			$.each(sousthemes, function(key, soustheme) {
			  $sousthemesSelect.append($("<option></option>")
			     .attr("value", soustheme.IDSousTheme).text(soustheme.LibSousTheme));
			});
	    }});
		}

		function show(id){
			$(".cstr_fct").hide();
			$(".cstr_fct").hide();
			$("#"+id).fadeIn();
		}
	</script>

	@endsection