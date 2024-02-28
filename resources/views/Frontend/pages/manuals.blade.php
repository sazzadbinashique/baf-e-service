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
                    <div class="ps-xl-5" style="width:100%;">
                            
                
                            @if($param == 'manuals')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">Manuals</h2></div>
                            </div>

                             <div class="row">
                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="{{ url('/manuals_child') }}/yak_130" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/1.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">All Manual Yak-130 ac</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="{{ url('/manuals_child') }}/flg_personnel" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/2.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">Flg Personnel</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="{{ url('/manuals_child') }}/maint_personnel" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/3.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">Maint Personnel</span>
                                                            <span class="thumb-info-type">img</span>
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
                            @endif


                            @if($param == 'yak_130')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">All Manual Yak-130 ac</h2></div>
                            </div>

                            <div class="row">
                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="{{ url('/manuals_child') }}/air_crew" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/1.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">Air Crew Related</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/2.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">All Manual</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/3.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">All Manual of Yak -130 ac</span>
                                                            <span class="thumb-info-type">img</span>
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
                            @endif


                            @if($param == 'flg_personnel')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">Flg Personnel</h2></div>
                            </div>

                            <div class="row">
                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/1.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">Ck list</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3 text-center">
                                                    <a href="{{url('assets/frontend/upload_doc/manuals/flg_personnel/ck_list/1.Emergency-YAK-130-04-Apr-21.docx')}}"  target="_blank"><u><span style="color:green; margin-left:40px;">>Doc1</span></u></a>
                                                    <a href="{{url('assets/frontend/upload_doc/manuals/flg_personnel/ck_list/2.Normal-Yak-130 -11-Apr-21.docx')}}"  target="_blank"><u><span style="color:green; margin-left:40px;">>Doc2</span></u></a>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/2.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">Manual yak</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/3.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">SOP Yak</span>
                                                            <span class="thumb-info-type">img</span>
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
                            @endif


                            @if($param == 'maint_personnel')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">Maint Personnel</h2></div>
                            </div>

                            <div class="row">
                                    <div class="col-4 col-sm-4 col-lg-4 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/1.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner"> 1_58_AMM</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="row">
                                                <div class="col-xs-3 col-sm-3 col-md-3 text-center">
                                                    <a href="{{url('assets/frontend/upload_doc/manuals/maint_personnel/1_58_amm/YAK130-IRKUT-AMM07-00.pdf')}}"  target="_blank"><u><span style="color:orange; margin-left:50px;">>Pdf1</span></u></a>
                                                    <a href="{{url('assets/frontend/upload_doc/manuals/maint_personnel/1_58_amm/YAK130-IRKUT-AMM06-00.pdf')}}"  target="_blank"><u><span style="color:orange; margin-left:50px;">>Pdf2</span></u></a>
                                                </div>
                                        </div> 


                                    </div> 
                                                     
                            </div>
                            @endif



                            @if($param == 'air_crew')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">Air Crew Related</h2></div>
                            </div>

                             <div class="row">
                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="{{ url('/manuals_child') }}/afm_amd_00" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/1.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">AFM amd  00</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>                  
              
                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/2.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">AFM amd  01</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>                  
                           
                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/3.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">AFM amd  03</span>
                                                            <span class="thumb-info-type">img</span>
                                                        </span>
                                                        <span class="thumb-info-action">
                                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-eye"></i></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>                  
   
                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/4.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                        <span class="thumb-info-title">
                                                            <span class="thumb-info-inner">AFM amd  04</span>
                                                            <span class="thumb-info-type">img</span>
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
                            @endif


                            @if($param == 'afm_amd_00')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12"><h2 class="font-weight-bold line-height-1 mb-4" style="text-align:center;">AFM amd 00</h2></div>
                            </div>

                            </br>
                            <span>Image : </span>
                            <div class="row">
                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/1.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>  

                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/2.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div> 

                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/3.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div> 

                                    <div class="col-3 col-sm-3 col-lg-3 isotope-item event1">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html" aria-label="">
                                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                                    <span class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{asset('assets/frontend/images/slides/4.jpg')}}" class="img-fluid border-radius-0" alt="" style="height: 286px;">
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div> 
                                                                                                                                                                                                                         
                            </div>

                            </br></br>
                            <span>Video : </span>
                            <div class="row">
                                   <div class="col-lg-4">
                                        <video width="330px" height="250px" controls="controls">
                                            <source src="/assets/frontend/upload_doc/video/v2.mp4" type="video/mp4">
                                        </video>
                                    </div>  

                                    <div class="col-lg-4">
                                        <video width="330px" height="250px" controls="controls">
                                            <source src="/assets/frontend/upload_doc/video/air_to_air _firing.mp4" type="video/mp4">
                                        </video>
                                    </div> 

                                    <div class="col-lg-4">
                                        <video width="330px" height="250px" controls="controls">
                                            <source src="/assets/frontend/upload_doc/video/v2.mp4" type="video/mp4">
                                        </video>
                                    </div> 
                                                                                                                                                                                                                         
                            </div>

                            </br></br>
                            <span>Documents : </span>
                            <div class="row">
                                    <div class="col-md-3">
                                       <div class="single-event">
                                            Doc1                                                                                         
                                            <div class="button">
                                                <a href="{{url('assets/frontend/upload_doc/manuals/all_manual_yak_130ac/air_crew_related_bulletin/afm/YAK130-IRKUT-AFM15-01.pdf')}}" class="btn btn-default btn-sm" target="_blank">Download</a>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3">
                                       <div class="single-event"> 
                                            Doc2                                                                                      
                                            <div class="button">
                                                <a href="{{url('assets/frontend/upload_doc/manuals/all_manual_yak_130ac/air_crew_related_bulletin/afm/YAK130-IRKUT-AFM15-01.pdf')}}" class="btn btn-default btn-sm" target="_blank">Download</a>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-3">
                                       <div class="single-event"> 
                                            Doc3                                                                                  
                                            <div class="button">
                                                <a href="{{url('assets/frontend/upload_doc/manuals/all_manual_yak_130ac/air_crew_related_bulletin/afm/YAK130-IRKUT-AFM15-01.pdf')}}" class="btn btn-default btn-sm" target="_blank">Download</a>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="col-md-3">
                                       <div class="single-event">    
                                            Doc4                                                                               
                                            <div class="button">
                                                <a href="{{url('assets/frontend/upload_doc/manuals/all_manual_yak_130ac/air_crew_related_bulletin/afm/YAK130-IRKUT-AFM15-01.pdf')}}" class="btn btn-default btn-sm" target="_blank">Download</a>
                                            </div>
                                        </div>
                                    </div> 
                                                                                                                 
                            </div>
                            @endif
                            
                    
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

