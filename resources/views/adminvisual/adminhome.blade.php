@extends('adminlayout')

@section('content')

{{-- <meta name="csrf-token" content="{!! csrf_token() !!}" /> --}}
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="logo" style="margin-top: 20px;"></div>
    <div class="title"></div>
    {{-- <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form> --}}
    <ul class="nav menu">
        <li class="active"><a href="#" onclick="show('tableau_bord')">Tableau de bord</a></li>
        <li><a href="#" onclick="show('statistique')">Statistiques</a></li>
        <li><a href="#" onclick="show('tables')">Tables</a></li>
        <li><a href="{{route('logout')}}">Login Page</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
    {{-- <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row--> --}}

    <div class="changed_div">
        <div id="tableau_bord" class="admin_fct">
            @include('../admin_includes/tableau_bord')
        </div>
        <div id="statistique" class="admin_fct" style="display: none;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Statistiques</h1>
                </div>
            </div><!--/.row-->
            
        </div>
        <div id="tables" class="admin_fct" style="display: none;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
            </div><!--/.row-->
            
            <div class="panel-body">
                <!--Start Button choose -->
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn" style="background-color: #eb8b8b;font-weight: bold;color: #8e0707;" onclick="disp('themes')">Thèmes</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn" style="background-color: #eb8b8b;font-weight: bold;color: #8e0707;" onclick="disp('ssthemes')">Sous Thèmes</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn" style="background-color: #eb8b8b;font-weight: bold;color: #8e0707;" onclick="disp('entites')">Entités</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn" style="background-color: #eb8b8b;font-weight: bold;color: #8e0707;" onclick="disp('ssentites')">Sous Entités</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn" style="background-color: #eb8b8b;font-weight: bold;color: #8e0707;" onclick="disp('typerequerants')">Type du Requérant</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn" style="background-color: #eb8b8b;font-weight: bold;color: #8e0707;" onclick="disp('categorierequerants')">Catégorie du Requérant</button>
                    </div>
                </div>
                <!--End Button Choose -->
            </div>

            <div class="changed_div">
                <div id="themes" class="tables" style="display: none;">
                    @include('../admin_includes/database_tables/themes')
                </div>
                <div id="ssthemes" class="tables" style="display: none;">
                    @include('../admin_includes/database_tables/ssthemes')
                </div>
                <div id="entites" class="tables" style="display: none;">
                    @include('../admin_includes/database_tables/entites')
                </div>
                <div id="ssentites" class="tables" style="display: none;">
                    @include('../admin_includes/database_tables/ssentites')
                </div>
                <div id="typerequerants" class="tables" style="display: none;">
                    @include('../admin_includes/database_tables/typerequerants')
                </div>
                <div id="categorierequerants" class="tables" style="display: none;">
                    @include('../admin_includes/database_tables/categorierequerants')
                </div>
            </div>


        </div>
    </div>

</div>  <!--/.main-->
<script type="text/javascript">
        function chargetheme(theme){
            var $modal = $('#popupupdatetheme'),
                $theme = $modal.find('#libtheme');
            $theme.val(theme);
        }

        function chargesstheme(sstheme){
            var $modal = $('#popupupdatesstheme'),
                $sstheme = $modal.find('#libsstheme');
            $sstheme.val(sstheme);
        }

        function chargesstheme(sstheme){
            var $modal = $('#popupupdatesstheme'),
                $ssthemename = $modal.find('#libsstheme');
            $ssthemename.val(sstheme);
        }

        function chargeentite(entite){
            var $modal = $('#popupupdateentite'),
                $entite = $modal.find('#libentite');
            $entite.val(entite);
        }
        function chargessentite(ssentite){
            var $modal = $('#popupupdatessentite'),
                $ssentitename = $modal.find('#libssentite');
            $ssentitename.val(ssentite);
        }

        function chargetype(type){
            var $modal = $('#popupupdatetype'),
                $type = $modal.find('#type');
            $type.val(type);
        }

        function chargecategorie(categorie){
            var $modal = $('#popupupdatecategorie'),
                $categorie = $modal.find('#categorie');
            $categorie.val(categorie);
        }

        $.ajaxSetup({
            
        });
        function recuperer(){
            $.ajax({
                url: '/admin/create_theme',
                type: "POST",
                data: {'libtheme' : $('[name="libtheme"]').val()},
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (result) {
                    console.log(result);
                    // $('#table_id tbody').append("<tr><td>" + data.column1 + "</td><td>" + data.column2 + "</td><td>" + data.column3 + "</td></tr>");
                 }
            });
                
            // $.ajax({
            //   type: "POST",
            //   url: '/admin/create_theme',
            //   headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     },
            //   data: {'libtheme': $('[name="libtheme"]').val()},
            //   success: function (result) {
            //      console.log(result);
            //      // $('#table_id tbody').append("<tr><td>" + data.column1 + "</td><td>" + data.column2 + "</td><td>" + data.column3 + "</td></tr>");
            //   }
              
            // });
        }


        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus();
        });

        function show(id){
            $(".admin_fct").hide();
            $("#"+id).fadeIn();
        }

        function disp(id){
            $(".tables").hide();
            $("#"+id).fadeIn();
        }

</script>
@endsection