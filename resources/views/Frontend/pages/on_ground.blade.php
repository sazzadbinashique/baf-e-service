@extends('frontend.layout')

@section('title')
<title>105 Advanced Jet Training Unit</title>
@endsection



@section('content')

<section id="history" class="section bg-color-grey border-0 py-0 m-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="d-flex align-items-center" style="height: 100%;">
                    <div class="ps-xl-5">
                        <h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">Organogram</h2>
                        <iframe src="{{asset('assets/frontend/upload_doc/org/org_chrt.pdf')}}" width="1170" height="800">
                            This browser does not support PDFs. Please download the PDF to view it: <a href="path_to_your_pdf_file.pdf">Download PDF</a>.
                        </iframe>
                        <!-- <img src="{{asset('assets/frontend/images/manual_img/ogg_n.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 500px; width:1170px;"> -->
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