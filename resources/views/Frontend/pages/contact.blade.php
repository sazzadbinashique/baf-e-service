@extends('frontend.layout')

@section('title')
<title>105 Advanced Jet Training Unit</title>
@endsection


@section('content')


<section id="history" class="section bg-color-grey border-0 py-0 m-0">
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-12 pb-5 text-center">
                <!-- <div class="col-md-12 mx-md-auto">
                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                        105 Advanced Jet Training Unit
                    </h1>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                        105 AJTU BAF is the Advance Jet Training Unit for the young fighter pilots of BAF, which operates Russian-built 4+ generation Yak-130 aircraft. Officers posted for the Fighter stream undergo advanced jet training in this unit. After completing the Basic Jet and Fighter Conversion course, young pilots are posted for Advanced Jet Training and Ops Conversion Course in Yak-130 aircraft.
                    </p>
                </div> -->

                <div class="col-md-12 p-5">
                <div class="d-flex align-items-center" style="height: 100%;">
                    <div class="ps-xl-5" style="width:100%;">            
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">Contact Info</h2></div>
                    </div>

                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="text-align:justify;word-spacing: 2px;">
                    Commanding Officer      
                    <span style="margin-left:200px;">Group Captain A K M Nazmus Sadat, GUP, psc</span>
                    </br>Phone: 01769505110
                    </br>Email:  sadatbaf@gmail.com
                    </p>

                    </br>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="text-align:justify;word-spacing: 2px;">
                    Sqn Cdr Attk Trg            
                    <span style="margin-left:245px;">Wing Commander A S M Sharfuddin, psc</span>
                    </br>Phone: 01769505150
                    </br>Email: sayeed_sharfuddin@yahoo.com
                    </p>

                    </br>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="text-align:justify;word-spacing: 2px;">
                    Sqn Cdr AD Trg                
                    <span style="margin-left:255px;">Wing Commander Mohammad Arifur Rahman</span>
                    </br>Phone: 01769505160
                    </br>Email: arif9068@yahoo.com
                    </p>

                    </br>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="text-align:justify;word-spacing: 2px;">
                    Adjt                 
                    <span style="margin-left:355px;">Flight Lieutenant Md Mahfujur Rahman</span>
                    </br>Phone: 01769505112
                    </br>Email: mahfujur0112@gmail.com
                    </p>

                    </br>
                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="text-align:justify;word-spacing: 2px;">
                    JCOIC                  
                    <span style="margin-left:335px;">Senior Warrant Officer M Oli Ahad Bhuiyan</span>
                    </br>Phone: 01769505113
                    </br>Email: oliahad571@gmail.com
                    </p>

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>



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