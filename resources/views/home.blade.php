@extends('layouts.home')


@push('styles')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
    .swiper-button-prev, .swiper-button-next {
    color: black; /* Change as needed */
    background: rgba(255, 255, 255, 0.5); /* Optional: Adds background */
    border-radius: 50%; /* Optional: Rounds the buttons */
}

</style>
@endpush


@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
      direction: 'horizontal',
      loop: true,
  
      // Autoplay configuration
      autoplay: {
        delay: 2500, // Time between slide changes in milliseconds
        disableOnInteraction: false, // Continue autoplay after the user interacts with the slider
      },
  
      // Enable pagination with progress bar
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
  
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  

@endpush

@section('title', 'Architects Engineers India | Consultants | architect engineer in india')

@section('content')
    <div class="page-content-wrap">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="images/b01-1.webp" alt="Slide 1" style="width:100%;">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="images/b02-1.webp" alt="Slide 2" style="width:100%;">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img src="images/b03-1.webp" alt="Slide 3" style="width:100%;">
                    </div>
                    <!-- Add more slides as needed -->
                    <!-- Slide 4 -->
                    <div class="swiper-slide">
                        <img src="images/b04-1.webp" alt="Slide 4" style="width:100%;">
                    </div>
                    <!-- Repeat for other images -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </div>
    <!-- content start -->
    <div id="nz-content" class='content nz-clearfix padding-false'>
        <div class='container page-full-width'>
            <!-- post start -->
            <div id="post-6962" class="post-6962 page type-page status-publish hentry">
                <section class="page-content nz-clearfix">
                    <div id="nz-gallery" class="nz-section horizontal autoheight-false animate-false full-width-false "
                        data-img-width="1800" data-img-height="120" data-animation-speed="35000" data-parallax="false"
                        style="background-color:#465360;background-image:url(wp-content/uploads/2018/07/slider-bg1-2.png);background-repeat:repeat-x;background-position:left top;background-attachment:scroll;padding-top:60px;">
                        <div class="container">
                            <div class="nz-row">
                                <div class="col vc_col-sm-3 col3  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="center" data-margin="false">
                                    <div class="col-inner" style="">
                                        <div style="color:#dd7d33;padding-top:30px;"
                                            class="nz-column-text nz-clearfix  element-animate-false" data-effect="none"
                                            data-effect-speed="50">
                                            </p>
                                            <h3 class="nz-title" style="text-align: center;"><span
                                                    style="color: #ff9900; font-size: 52px; font-weight: 100;">SECTORS</span>
                                            </h3>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col vc_col-sm-9 col9  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="left">
                                    <div class="col-inner" style="">
                                        <div style="" class="nz-column-text nz-clearfix  element-animate-false"
                                            data-effect="none" data-effect-speed="50">
                                            </p>
                                            <p style="text-align: justify;"><span style="color: #ffffff;">Mukesh &amp;
                                                    Associates offers multi-sectoral consultancy services across the country
                                                    in planning, architecture, civil, roads &amp; bridges, urban transport,
                                                    urban / municipal engineering, water supply, sewerage, sanitation,
                                                    wastewater, solid waste management, environmental / social engineering,
                                                    irrigation &amp; water resources, coastal engineering, climate
                                                    adaptation, urban governance, municipal finance, capacity building,
                                                    education, skills development, Geographical Information System (GIS)
                                                    &amp; Remote Sensing, etc</span></p>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nz-section horizontal autoheight-false animate-false full-width-true "
                        data-animation-speed="35000" data-parallax="false" style="padding-top:50px;">
                        <div class="nz-row">
                            <div class="col vc_col-sm-12 col12  element-animate-false valign-top" style=""
                                data-effect="none" data-align="left" data-margin="false">
                                <div class="col-inner" style="">
                                    <div id="nz-recent-projects-1"
                                        class="element-animate small-image nz-clearfix nz-recent-projects">
                                        <div class="recent-projects-wrap nz-clearfix">
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s01-1.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s01-1.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s01-1-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/institutional/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Institutional
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s02-1.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s02-1.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s02-1-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/industrial/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Industrial
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s03-1.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s03-1.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s03-1-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/commercial/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Commercial
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s04-1.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s04-1.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s04-1-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/healthcare/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Healthcare
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/Residential.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/Residential.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/Residential-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/residential/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Residential
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s06.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s06.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s06-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/petroleum/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Petroleum</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s07.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s07.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s07-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/tourism_-heritage-conservation/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Tourism
                                                                    Infrastructure</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s08.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s08.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s08-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/roads-brdges/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Roads &#038;
                                                                    Bridges</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s09.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s09.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s09-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/urban-transport/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Urban
                                                                    Transport</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s10.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s10.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s10-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/urban-infrastructure/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Urban
                                                                    Infrastructure</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s11.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s11.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s11-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/water-supply-sewerage/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Water Supply
                                                                    &#038; Sewerage</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s12.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s12.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s12-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/environmental-engineering/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Environmental
                                                                    Engineering</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s13.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s13.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s13-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/irrigation-water-resources/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Irrigation
                                                                    &#038; Water Resources</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s14.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s14.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s14-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/coastal-engineering/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Coastal
                                                                    Engineering</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s15.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s15.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s15-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/skills-development/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">Skill
                                                                    Development</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="projects mix nz-clearfix" data-groups='["all", "sectors"]'
                                                data-grid="ninzio_01">
                                                <div class="nz-thumbnail"><img width="450" height="244"
                                                        src="wp-content/uploads/2018/07/s16.jpg"
                                                        class="attachment-Lifefitness-Ninzio-Half size-Lifefitness-Ninzio-Half wp-post-image"
                                                        alt=""
                                                        srcset="http://mukeshassociates.com/wp-content/uploads/2018/07/s16.jpg 450w, http://mukeshassociates.com/wp-content/uploads/2018/07/s16-300x163.jpg 300w"
                                                        sizes="(max-width: 450px) 100vw, 450px" /><a
                                                        href="projects/mis_gis-remote-sensing/index.html">
                                                        <div class="ninzio-overlay">
                                                            <div class="ninzio-overlay-content">
                                                                <h2 class="project-title"
                                                                    style="padding-top:100px; font-size:0px">MIS/GIS &#038;
                                                                    Remote Sensing</h2>
                                                            </div>
                                                        </div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="nz-about-fitness"
                        class="nz-section horizontal autoheight-false animate-false full-width-false "
                        data-animation-speed="35000" data-parallax="false"
                        style="background-color:#ffffff;padding-top:10px;">
                        <div class="container">
                            <div class="nz-row">
                                <div class="col vc_col-sm-3 col3  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="left">
                                    <div class="col-inner" style=""></div>
                                </div>
                                <div class="col vc_col-sm-6 col6  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="left">
                                    <div class="col-inner" style="">
                                        <div style="color:#dd7d33;padding-top:10px;"
                                            class="nz-column-text nz-clearfix  element-animate-false" data-effect="none"
                                            data-effect-speed="50">
                                            </p>
                                            <h3 class="nz-title" style="text-align: center;"><span
                                                    style="color: #ff9900; font-size: 52px; font-weight: 100;">OVERVIEW</span>
                                            </h3>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col vc_col-sm-3 col3  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="left">
                                    <div class="col-inner" style=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nz-section horizontal autoheight-true animate-false full-width-false "
                        data-img-width="900" data-img-height="100" data-animation-speed="35000" data-parallax="false"
                        style="-webkit-background-size: cover; -moz-background-size: cover; background-size: cover;background-image:url(wp-content/uploads/2018/07/logo-footer-2.png);background-repeat:no-repeat;background-position:right bottom;background-attachment:scroll;padding-bottom:5px;">
                        <div class="container">
                            <div class="nz-row">
                                <div class="col vc_col-sm-12 col12  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="left">
                                    <div class="col-inner" style="">
                                        <div style="" class="nz-column-text nz-clearfix  element-animate-false"
                                            data-effect="none" data-effect-speed="50">
                                            </p>
                                            <p style="text-align: justify;">Mukesh &amp; Associates, an <a
                                                    href="iso-9001-2008-certified-company.html"><strong>ISO
                                                        9001:2015</strong></a> and <strong><a
                                                        href="iso-140012015-certified.html">ISO 14001:2015 </a></strong>
                                                certified multidisciplinary consultancy firm is based in Salem (Tamil Nadu),
                                                India with a spread of project / branch offices at Bangalore, Chennai,
                                                Chaibasa, Coimbatore, Cochin, Delhi / NCR, Guwahati, Imphal, Jamshedpur,
                                                Lucknow, Madurai, Ranchi &amp; Vijayawada.  The firm offers
                                                multidisciplinary consultancy services for multi-sectoral projects in a
                                                large scale across <strong>India, Kenya, Nepal and Malaysia</strong>.</p>
                                            <p style="text-align: justify;"><strong>Established in 1986</strong>, the firm
                                                has a talent base of more than 300 including trainees comprising architects,
                                                engineers and other experienced professionals specialized in various fields.
                                                The firm’s clients include <strong>Central &amp; State Governments in
                                                    India</strong>, Indian corporate sector, fortune five hundred companies
                                                and multilateral agencies <strong>(ADB, WB, JICA, KfW, AfDB, UNDP, DFID,
                                                    UNOPS, UNICEF etc.).</strong> The firm has tie-up with leading
                                                consultancy firms in USA, UK, Malaysia, Singapore, Japan and Saudi Arabia
                                                for highly specialized disciplines.</p>
                                            <p style="text-align: justify;"><span class="st"><span
                                                        style="color: #ffffff;"><br />
                                                    </span> </span></p>
                                            <div class="dc" style="position: absolute; left: -9999px;">It is also
                                                important that you only use money that you do not need for your daily life.
                                                This also allows you to play without any pressure and subsequently much
                                                better. If you are smart, you will train before the Real Money Play at the
                                                free play tables, which are available in almost every Online Casino. There
                                                you can not only learn and internalize the rules, but also gain experience
                                                playing and try out certain Roulette strategies. Find out on the Internet
                                                about useful tips and Tricks about <a
                                                    href="https://roulettebull.com/">roulette wheel online</a> game and
                                                find like-minded people to exchange experiences, for example in gambling
                                                forums. In this way you progress and continuously improve your game.</div>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nz-section horizontal autoheight-true animate-false full-width-true "
                        data-animation-speed="35000" data-parallax="false"
                        style="background-color:#465360;padding-top:5px;">
                        <div class="nz-row">
                            <div class="col vc_col-sm-12 col12  element-animate-false valign-top" style=""
                                data-effect="none" data-align="left">
                                <div class="col-inner" style="">
                                    <div style="padding-top:10px;"
                                        class="nz-column-text nz-clearfix  element-animate-false" data-effect="none"
                                        data-effect-speed="50">
                                        </p>
                                        <p style="text-align: center;"><span style="color: #ffffff;"><a
                                                    style="color: #ffffff;" href="aboutus.html">ABOUT US</a> | <a
                                                    style="color: #ffffff;" href="aboutus.html"> PARTNERS </a> | <a
                                                    style="color: #ffffff;" href="aboutus.html"> VISION STATEMENT </a>| <a
                                                    style="color: #ffffff;" href="aboutus.html"> QUALITY POLICY </a> | <a
                                                    style="color: #ffffff;" href="accreditation-membership.html">
                                                    ACCREDITATION &amp; MEMBERSHIP</a></span></p>
                                        <p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nz-section horizontal autoheight-false animate-false full-width-false "
                        data-animation-speed="35000" data-parallax="false" style="padding-top:5px;padding-bottom:5px;">
                        <div class="container">
                            <div class="nz-row">
                                <div class="col vc_col-sm-12 col12  element-animate-false valign-top" style=""
                                    data-effect="none" data-align="left">
                                    <div class="col-inner" style=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- post end -->
        </div>
    </div>
    <!-- content end -->
@endsection
