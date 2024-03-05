@extends('frontend.layout')

@section('title')
    <title>105 Advanced Jet Training Unit</title>
@endsection

@section('content')
    <nav id="main-nav" class="navbar navbar-expand-lg bg-black" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
        <div class="container-fluid">
            <button class="navbar-toggler bg-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav {{--me-auto mb-2 mb-md-0--}}">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Application Soft</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Air HQ Info Panel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Guest Pass</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Organization</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">BAF Arenas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Recruitment</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Training</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Flight Safety</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Miscellaneous</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Download</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Webmail</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="history" class="section bg-color-grey border-0 py-0 m-0" >
        <div class="container-fluid">
            <div class="row" style="padding-top:20px;">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="common-menu">
                        <div class="sub-menu-title">
                            <h2>Latest News</h2>
                        </div>
                        <marquee width="100%" direction="left" class="justify-center">
                            <p class="running-text">
                                <a href="" class="running-text">
                                    The origin of Bangladesh Air Force (BAF) dates back to 1920 in British India when the Indian politicians demanded for inclusion of local people in the Royal Air Force because some members of Indian Royal Flying Core had earned name and fame in the 1st World War.&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </p>
                        </marquee>
                    </div>
                </div>
            </div>


            {{--<div class="row"  style="margin-top:10px;">
                <div class="col-sm-9 col-md-9 col-xs-9" style="margin-top:8px;">
                    <section>
                        <div class="row single-row-event">
                            <div class="col-sm-6 col-md-6 col-xs-6">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:25px; width:25px; margin-top:-10px;">
                                    Personnel Management Information System(PMIS)
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-6">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:25px; width:25px; margin-top:-10px;">
                                    Airmen’s Personnel Management Information System(APMIS)
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:25px; width:25px; margin-top:-10px;">
                                    Civilians’ Personnel Management Info Sys(CPMIS)
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:25px; width:25px; margin-top:-10px;">
                                    BAF Shaheen School & College Data Entry(BSSCDE)
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:25px; width:25px; margin-top:-10px;">
                                    Officers’ Personnel Management Information System(OPMIS)
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:25px; width:25px; margin-top:-10px;">
                                    Aircraft Maintenance Information System(AMIS)
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    FAIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    CIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    LMIS
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    MAIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    AFI ARCHIVE
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    PDO ARCHIVE
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    SIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    CIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    SSIIS
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    IIMS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    AIMS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    DAI BRIEFING
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    ARF
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    MWIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    205 MU
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    AOIA
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    FIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    ATMS
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    VRF
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    GSTEIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    PDS
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    ARWIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    LIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    ITEIS
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    PAMIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    WTAS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    ENMS
                                </div>
                            </div>
                        </div>
                        <div class="row single-row-event">
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    PMIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    PMIS
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-xs-4">
                                <div class="">
                                    <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="" style="height:30px; width:30px; margin-top:-10px;">
                                    </br>
                                    PMIS
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3">

                    <section id="notice" class="my-2">
                        <div class="card">
                            <div class="p-2 text-center" style="background: #007c7c;">
                                <h2 style="color: white;
                                        font-family: 'Open Sans', sans-serif;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        margin: 0px;
                                        padding: 5px;
                                        font-size: 16px;
                                        font-weight: 600;">
                                    NOTICE
                                </h2>
                            </div>
                            <marquee direction="up" scrollamount="5" height="240px" class="move" onmouseover=this.stop(); onmouseout=this.start(); style="marquee.move:hover {cursor: pointer;}">
                                <div class="card-body p-4" style="gap: 20px;
                                    display: flex;
                                    flex-direction: column;">
                                    <div class="p-4" style="background: ghostwhite;
                                        border: 1px dashed lightgray;
                                        display: flex;
                                        flex-direction: column;
                                        gap: 15px;">
                                        <p style="font-size: 16px !important; font-family: 'Open Sans' , sans-serif !important; color:black;">
                                            Test Notice
                                        </p>
                                        <a href="" class="btn btn-ny-bg" style="border-radius: 0px; background: #007c7c; font-size: 14px !important; font-family: 'Open Sans' , sans-serif !important;">Read more</a>
                                    </div>
                                </div>
                            </marquee>
                        </div>
                    </section>

                    <section id="chairman_message" class="my-2">
                        <div class="card">
                            <div class="p-2 text-center" style="background: #007c7c;">
                                <h2 style="color: white;
                                        font-family: 'Open Sans', sans-serif;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        margin: 0px;
                                        padding: 5px;
                                        font-size: 16px;
                                        height:40px;
                                        font-weight: 600;">
                                    BAF PUBLICATIONS
                                </h2>
                            </div>
                            <div class="card-body p-4">
                                <div style="font-family: 'Open Sans', sans-serif;
                                    display: flex;
                                    flex-direction: column;
                                    padding: 0px; text-align:center; font-weight:bold;">
                                    <p>Eagle</p>
                                    <p>Bimansena</p>
                                    <p>Blue Angel</p>
                                    <p>Congo Chronicles</p>
                                    <p>CSTI e-Journal 2019</p>
                                </div>
                            </div>
                        </div>
                    </section>


                </div>

            </div>--}}
            <div class="row">
                <div class="col-sm-9 col-md-9 col-xs-9" style="margin-top:8px;">
                    <section>
                        <div class="row mb-2">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Airmen’s Personnel Management Information System(APMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>BAF Shaheen School & College Data Entry(BSSCDE)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Officers’ Personnel Management Information System(OPMIS). Management Information System(OPMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Aircraft Maintenance Information System(AMIS) Management Information System(OPMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Management Information System(OPMIS) Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Management Information System(OPMIS) Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-6 col-xs-12 mb-2">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="single-row-event">
                                    <div class="system-info">
                                        <img src="{{asset('/assets/frontend/images/manual_img/flag.png')}}" alt="">
                                        <span>Personnel Management Information System (PMIS)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3">

                    <section id="notice" class="my-2">
                        <div class="card">
                            <div class="p-2 text-center" style="background: #007c7c;">
                                <h2 style="color: white;
                                        font-family: 'Open Sans', sans-serif;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        margin: 0px;
                                        padding: 5px;
                                        font-size: 16px;
                                        font-weight: 600;">
                                    NOTICE
                                </h2>
                            </div>
                            <marquee direction="up" scrollamount="5" height="240px" class="move" onmouseover=this.stop(); onmouseout=this.start(); style="marquee.move:hover {cursor: pointer;}">
                                <div class="card-body p-4" style="gap: 20px;
                                    display: flex;
                                    flex-direction: column;">
                                    <div class="p-4" style="background: ghostwhite;
                                        border: 1px dashed lightgray;
                                        display: flex;
                                        flex-direction: column;
                                        gap: 15px;">
                                        <p style="font-size: 16px !important; font-family: 'Open Sans' , sans-serif !important; color:black;">
                                            Test Notice This is a test notice
                                        </p>
                                        <a href="" class="btn btn-ny-bg" style="border-radius: 0px; background: #007c7c; font-size: 14px !important; font-family: 'Open Sans' , sans-serif !important;">Read more</a>
                                    </div>
                                </div>
                                <div class="card-body p-4" style="gap: 20px;
                                    display: flex;
                                    flex-direction: column;">
                                    <div class="p-4" style="background: ghostwhite;
                                        border: 1px dashed lightgray;
                                        display: flex;
                                        flex-direction: column;
                                        gap: 15px;">
                                        <p style="font-size: 16px !important; font-family: 'Open Sans' , sans-serif !important; color:black;">
                                            Test Notice
                                        </p>
                                        <a href="" class="btn btn-ny-bg" style="border-radius: 0px; background: #007c7c; font-size: 14px !important; font-family: 'Open Sans' , sans-serif !important;">Read more</a>
                                    </div>
                                </div>
                            </marquee>

                        </div>
                    </section>

                    <section id="chairman_message" class="my-2">
                        <div class="card">
                            <div class="p-2 text-center" style="background: #007c7c;">
                                <h2 style="color: white;
                                        font-family: 'Open Sans', sans-serif;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        margin: 0px;
                                        padding: 5px;
                                        font-size: 16px;
                                        height:40px;
                                        font-weight: 600;">
                                    BAF PUBLICATIONS
                                </h2>
                            </div>
                            <div class="card-body p-2">
                                <div style="font-family: 'Open Sans', sans-serif;
                                    display: flex;
                                   font-weight:bold;">
                                    <ul class="list-unstyled">
                                        <li>Eagle</li>
                                        <li>Bimansena</li>
                                        <li>Blue Angel</li>
                                        <li>Congo Chronicles</li>
                                        <li>CSTI e-Journal 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </section>



    {{--<section id="contact" class="section bg-color-grey border-0 py-0 m-0">
        <div class="container-fluid" style="background-color:#F1F3F4;">
            <div class="row pb-5">
                <div class="col-md-3 p-5">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="ps-xl-5">
                        <p><b>ABOUT BAF</b></p>
                        <p>History</p>
                        <p>BAF Recruitment Portal</p>
                        <p>Contact No: BAF Med Offrs</p>
                        <p>BAF Freedom Fighters</p>
                        <p>Contact Us</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 p-5 d-flex align-items-center">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="ps-xl-5">
                        <p><b>IMPORTANT LINKS</b></p>
                        <p>E-Tender</p>
                        <p>BSMRAAU</p>
                        <p>FSI Portal</p>
                        <p>ATI Portal</p>
                        <p>Officers Payslip</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-5 d-flex align-items-center">
                    <div class="d-flex align-items-center" style="height: 100%;">
                        <div class="ps-xl-5">
                        <p><b>BAF PUBLICATIONS</b></p>
                        <p>Eagle</p>
                        <p>Bimansena</p>
                        <p>Blue Angel</p>
                        <p>Congo Chronicles</p>
                        <p>CSTI e-Journal 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-5 d-flex align-items-center">
                    <div class="d-flex align-items-center" style="height: 100%; ">
                        <div class="ps-xl-5">
                        <p style="margin-top:-140px;"><b>FOLLOW BAF</b></p>
                        <p>links</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    {{--<section id="contact" class="section bg-color-grey border-0 py-0 m-0">
        <div class="container-fluid" style="background-color:#dfeaef;">
            <div class="row py-5">
                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0 d-flex justify-content-center">
                    <div class="p-4">
                        <div class="ps-lg-4 text-start">
                            <p><b>ABOUT BAF</b></p>
                            <ul class="list-unstyled">
                                <li>History</li>
                                <li>BAF Recruitment Portal</li>
                                <li>Contact No: BAF Med Offrs</li>
                                <li>BAF Freedom Fighters</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0 d-flex justify-content-center">
                    <div class="p-4">
                        <div class="ps-lg-4 text-start">
                            <p><b>IMPORTANT LINKS</b></p>
                            <ul class="list-unstyled">
                                <li>E-Tender</li>
                                <li>BSMRAAU</li>
                                <li>FSI Portal</li>
                                <li>ATI Portal</li>
                                <li>Officers Payslip</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0 d-flex justify-content-center">
                    <div class="p-4">
                        <div class="ps-lg-4 text-start">
                            <p><b>BAF PUBLICATIONS</b></p>
                            <ul class="list-unstyled">
                                <li>Eagle</li>
                                <li>Bimansena</li>
                                <li>Blue Angel</li>
                                <li>Congo Chronicles</li>
                                <li>CSTI e-Journal 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0 d-flex justify-content-center">
                    <div class="p-4">
                        <div class="ps-lg-4 text-start">
                            <p><b>FOLLOW BAF</b></p>
                            <ul class="list-unstyled">
                                <li>Links</li>
                                <li>Links Two</li>
                                <li>Links Three</li>
                                <li>Links Four</li>
                                <li>Links Five</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section id="contact" class="section bg-color-grey bg-3d border-0 py-0 m-0" style="background-color:#dfeaef;">
        <div class="container-fluid" style="background-color:#dfeaef;">
            <div class="row py-5">
                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                    <div class="p-5 card">
                        <div class="ps-lg-4 text-start">
                            <p><b>ABOUT BAF</b></p>
                            <ul class="list-unstyled">
                                <li>History</li>
                                <li>BAF Recruitment Portal</li>
                                <li>Contact No: BAF Med Offrs</li>
                                <li>BAF Freedom Fighters</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                    <div class="p-5 card">
                        <div class="ps-lg-4 text-start">
                            <p><b>IMPORTANT LINKS</b></p>
                            <ul class="list-unstyled">
                                <li>E-Tender</li>
                                <li>BSMRAAU</li>
                                <li>FSI Portal</li>
                                <li>ATI Portal</li>
                                <li>Officers Payslip</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                    <div class="p-5 card">
                        <div class="ps-lg-4 text-start">
                            <p><b>BAF PUBLICATIONS</b></p>
                            <ul class="list-unstyled">
                                <li>Eagle</li>
                                <li>Bimansena</li>
                                <li>Blue Angel</li>
                                <li>Congo Chronicles</li>
                                <li>CSTI e-Journal 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                    <div class="p-5 card">
                        <div class="ps-lg-4 text-start">
                            <p><b>FOLLOW BAF</b></p>
                            <ul class="list-unstyled">
                                <li>Links</li>
                                <li>Links Two</li>
                                <li>Links Three</li>
                                <li>Links Four</li>
                                <li>Links Five</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar structure for other columns -->
            </div>
        </div>
    </section>


@endsection

@section('scripts')

    <!-- Circle Flip Slideshow Script -->
    <script src="{{ asset('assets/frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>

    <!-- Current Page Views -->
    <script src="{{ asset('assets/frontend/js/views/view.home.js') }}"></script>

@endsection
