@extends('frontend.layout')

@section('title')
<title>105 Advanced Jet Training Unit</title>
@endsection


@section('content')





<section id="events" class="section bg-color-grey border-0 py-0 m-0">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-12 p-5">

                <h2 class="font-weight-bold line-height-1 mb-4 text-center">Events</h2>

                <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-2-5 text-uppercase active" href="#">Show All</a></li>
                    <li class="nav-item" data-option-value=".event1"><a class="nav-link text-2-5 text-uppercase" href="#">Event 1</a></li>
                    <li class="nav-item" data-option-value=".event2"><a class="nav-link text-2-5 text-uppercase" href="#">Event 2</a></li>
                    <li class="nav-item" data-option-value=".Event3"><a class="nav-link text-2-5 text-uppercase" href="#">Event 3</a></li>
                    <li class="nav-item" data-option-value=".event4"><a class="nav-link text-2-5 text-uppercase" href="#">Event 4</a></li>
                </ul>

                <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2 px-xl-5">
                    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                        <div class="col-12 col-sm-6 col-lg-3 isotope-item event1">
                            <div class="portfolio-item">
                                <a href="portfolio-single-wide-slider.html" aria-label="">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{asset('assets/frontend/images/slides/5.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">105</span>
                                                <span class="thumb-info-type">img1</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item event4">
                            <div class="portfolio-item">
                                <a href="portfolio-single-wide-slider.html" aria-label="">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{asset('assets/frontend/images/slides/4.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">105</span>
                                                <span class="thumb-info-type">img2</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 isotope-item event2">
                            <div class="portfolio-item">
                                <a href="portfolio-single-wide-slider.html" aria-label="">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{asset('assets/frontend/images/slides/3.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">105</span>
                                                <span class="thumb-info-type">img3</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-12 col-sm-6 col-lg-3 isotope-item Event3">
                            <div class="portfolio-item">
                                <a href="portfolio-single-wide-slider.html" aria-label="">
                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                        <span class="thumb-info-wrapper border-radius-0">
                                            <img src="{{asset('assets/frontend/images/slides/2.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                            <span class="thumb-info-title">
                                                <span class="thumb-info-inner">105</span>
                                                <span class="thumb-info-type">img4</span>
                                            </span>
                                            <span class="thumb-info-action">
                                                <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        



    </div>
</section>



</br></br></br> 
<section id="contact" class="section bg-color-grey border-0 py-0 m-0">
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
</section>

@endsection

@section('scripts')

<!-- Circle Flip Slideshow Script -->
<!-- <script src="{{ asset('assets/frontend/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script> -->

<!-- Current Page Views -->
<script src="{{ asset('assets/frontend/js/views/view.home.js') }}"></script>

@endsection