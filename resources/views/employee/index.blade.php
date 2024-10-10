@extends('layouts.employee')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mt-6">

        <div class="container ">
            <div class="row mt-3">
                <div class="col-md">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="small-box bg-gradient-danger">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Panne (s) signalé (s)</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Signaler une panne <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <div class="small-box bg-gradient-warning">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Panne (s) en cours de resolution</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Consulter les panne en cours de resolution <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="small-box bg-gradient-green">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Panne (s) resolue (s)</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Consulter la liste des pannes <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
