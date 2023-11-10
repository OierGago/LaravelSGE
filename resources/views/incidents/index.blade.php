@extends('layouts.app')
@section('content')
    <br>
    <div class="container contenido">
        <div class="col-md-12 col-xs-12">
            <div class="space-10"></div>
            <form id="bug_action" method="post" action="bug_actiongroup_page.php">
                <div class="widget-box widget-color-blue2">
                    <div class="widget-header widget-header-small">
                        <h4 class="widget-title lighter">Visualizando incidencias</h4>
                    </div>
                    <div class="widget-main no-padding">
                        <div class="table-responsive checkbox-range-selection">
                            @include('incidents.plantilla')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
