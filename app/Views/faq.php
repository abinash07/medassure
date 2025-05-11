<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(); ?>frequently-asked-questions">Frequently Asked Questions</a></li> 
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<link rel="preload" href="<?= base_url(); ?>assets/img/faqs-banner-mob.webp" as="img">
<link rel="preload" as="image" href="<?= base_url(); ?>assets/img/faqs-banner-desk.webp">

<style>
    @font-face{
        font-family:'Pacifico';
        font-style:normal;
        font-weight:400;src:local('Pacifico Regular'),
        local(MyriadPro-Regular),
        url(assets/v2/static_page/fonts/MyriadPro-Regular.woff2) format("woff2");
        font-display:swap
    }
    @font-face{
        font-family:'Pacifico';
        font-style:normal;
        font-weight:600;src:local('Pacifico Regular'),local(MyriadPro-Semibold),url(assets/v2/static_page/fonts/MyriadPro-Semibold.woff2) format("woff2");font-display:swap}
        .bg-vh-2{background-color:rgb(243 243 254);}.bg-vh-3{background-color:rgb(255 255 255)}.bg-vh-4{background-color:rgb(225 244 254)}.nav-pills .nav-link, .nav-pills .show>.nav-link{background-color:unset;color:#444}.accordion-button{font-size:1.25rem !important}.accordion-button,.accordion-item {
        border-left: 0 !important;
        border-right: 0 !important;
        border-top: 0 !important;
        box-shadow: none !important;
        background-color: #fff !important;
    }
    @media screen and (min-width: 768px){.nav-pills .nav-link.active{clip-path: polygon(0% 10%, 70% 10%, 70% 0%, 80% 50%, 70% 100%, 70% 90%, 0% 90%)}}
    @media screen and (min-width: 768px){.hero-section{min-height:460px}}
    @media screen and (min-width: 521px){.hero-section{background:url(<?= base_url(); ?>assets/img/faqs-banner-desk.webp) no-repeat center center/cover}}
    @media screen and (max-width: 520px){.hero-section{background:url(assets/v2/static_page/images/f-page-1_520.webp) no-repeat center center/cover}.we-r-different .figure{max-width:47%;align-items:center}.we-r-different .figure figcaption{text-align:center}.hero-section{position:relative;z-index:1;background:#eae6e0}.hero-section:before{background:#fff;opacity:.45;width:100%;height:100%;position:absolute;left:0;top:0;content:'';z-index:-1}}
    .nav-pills .nav-link.active{background-color:#c1e4f9;color:#005897;padding:8px 15px}
    .we-r-different .figure{width:210px}.link-list{width:20%;height:auto;float:left;padding-right:15px}.link-list a{display:block;width:100%;color:#eee}.link-list h4{margin-top:15px}.footer-address .icon{width:80px;height:80px}.footer-address .address,.footer-address .email,.footer-address .phone{width:calc(100% - 96px)}.footer-social{display:flex;gap:15px;justify-content:flex-end}#btn-back-to-top{position:fixed;bottom:22px;right:20px;display:none}
    @media screen and (max-width: 1024px){.link-list{width:25%}}
    @media screen and (max-width: 768px){.link-list{width:33%}}
    @media screen and (max-width: 520px){.link-list{width:50%}.footer-social{justify-content:center}#btn-back-to-top{bottom:68px}}
    @media only screen and (max-width: 500px) {
        h1 { font-size: 1.9em!important;}
        .hero-section{
            background:url("<?= base_url(); ?>assets/img/faqs-banner-mob.webp") no-repeat center center/cover; 
            padding-bottom: 274px !important;
        }
    }
</style>

<section class="hero-section pt-5 pb-0 pb-md-5">
   <div class="container-fluid">
      <div class="container py-0 py-md-5">
         <div class="row py-0 my-md-5">
            <div class="col-lg-6 col-md-6 py-0 py-md-5">
               <h1 class="mb-3 mt-0 mt-md-3 fw-bolder">FAQs on Medical Tourism</h1>
               <div class="fs-2 lh-base fw-bolder">Get all the answers to your medical tourism questions!</div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="how-it-work bg-vh-2">
   <div class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-md-3 py-5">
               <ul class="list-group nav nav-pills fs-4 py-0 py-md-5" role="tablist">
                  <li class="nav-item" role="presentation">
                     <h2><a class="nav-link active" data-bs-toggle="pill" href="#patient" aria-selected="true" role="tab">Patients</a></h2>
                  </li>
                  <li class="nav-item" role="presentation">
                     <h2><a class="nav-link" data-bs-toggle="pill" href="#visa" aria-selected="false" tabindex="-1" role="tab">Medical Visa</a></h2>
                  </li>
                  <li class="nav-item" role="presentation">
                     <h2><a class="nav-link" data-bs-toggle="pill" href="#travelRelated" aria-selected="false" tabindex="-1" role="tab">Travel</a></h2>
                  </li>
                  <li class="nav-item" role="presentation">
                     <h2><a class="nav-link" data-bs-toggle="pill" href="#paymentRelated" aria-selected="false" tabindex="-1" role="tab">Payment</a></h2>
                  </li>
                  <li class="nav-item" role="presentation">
                     <h2><a class="nav-link" data-bs-toggle="pill" href="#foodRelated" aria-selected="false" tabindex="-1" role="tab">Hotel, Food, and Commute</a></h2>
                  </li>
               </ul>
            </div>
            <div class="col-md-9 bg-vh-3 py-5">
               <h2 class="pt-0 pt-md-5">Frequently Asked Questions</h2>
               <div class="tab-content py-0 py-md-5">
                  <div id="patient" class="container tab-pane active" role="tabpanel">
                     <div class="accordion border-0" id="faqPatients">
                        <?php foreach($faq as $k2 => $v2){ 
                            if($v2->category == 'patient'){
                        ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header fs-4" id="headingOne<?= $v2->id; ?>"> 
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqPatients<?= $v2->id; ?>" aria-expanded="true" aria-controls="faqPatients<?= $v2->id; ?>"> <?php echo $v2->title; ?> </button> 
                            </h3>
                            <div id="faqPatients<?= $v2->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?= $v2->id; ?>" data-bs-parent="#faqPatients">
                                <div class="accordion-body"> <?php echo $v2->content; ?> </div>
                            </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
                  <!-- visa start --> 
                  <div id="visa" class="container tab-pane fade" role="tabpanel">
                     <br> 
                     <div class="accordion" id="faqvisa">
                        <?php foreach($faq as $k2 => $v2){ 
                            if($v2->category == 'medicalvisa'){
                        ?>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingOne<?= $v2->id; ?>"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqvisa<?= $v2->id; ?>" aria-expanded="true" aria-controls="faqvisa<?= $v2->id; ?>"> <?php echo $v2->title; ?> </button> </h3>
                           <div id="faqvisa<?= $v2->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?= $v2->id; ?>" data-bs-parent="#faqvisa">
                              <div class="accordion-body"> <?php echo $v2->content; ?> </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
                  <!-- end visa --> <!-- travel start --> 
                  <div id="travelRelated" class="container tab-pane fade" role="tabpanel">
                     <br> 
                     <div class="accordion" id="faqtravelRelated">
                        <?php foreach($faq as $k2 => $v2){ 
                            if($v2->category == 'travel'){
                        ?>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingOne<?= $v2->id; ?>"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqtravelRelated<?= $v2->id; ?>" aria-expanded="true" aria-controls="faqtravelRelated<?= $v2->id; ?>"> <?php echo $v2->title; ?> </button> </h3>
                           <div id="faqtravelRelated<?= $v2->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?= $v2->id; ?>" data-bs-parent="#faqtravelRelated">
                              <div class="accordion-body"> <?php echo $v2->content; ?> </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
                  <!-- travel end --> <!-- payment start --> 
                  <div id="paymentRelated" class="container tab-pane fade" role="tabpanel">
                     <br> 
                     <div class="accordion" id="faqpaymentRelated">
                        <?php foreach($faq as $k2 => $v2){ 
                            if($v2->category == 'payment'){
                        ?>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingOne<?= $v2->id; ?>"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqpaymentRelated<?= $v2->id; ?>" aria-expanded="true" aria-controls="faqpaymentRelated<?= $v2->id; ?>"> <?php echo $v2->title; ?> </button> </h3>
                           <div id="faqpaymentRelated<?= $v2->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqpaymentRelated">
                              <div class="accordion-body"> <?php echo $v2->content; ?> </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
                  <!-- payment end --> <!-- foodrelated faq start  --> 
                  <div id="foodRelated" class="container tab-pane fade" role="tabpanel">
                     <br> 
                     <div class="accordion" id="faqfoodRelated">
                        <?php foreach($faq as $k2 => $v2){ 
                            if($v2->category == 'hotel'){
                        ?>
                        <div class="accordion-item">
                           <h3 class="accordion-header" id="headingOne<?= $v2->id; ?>"> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqfoodRelated<?= $v2->id; ?>" aria-expanded="true" aria-controls="faqfoodRelated<?= $v2->id; ?>"> <?php echo $v2->title; ?> </button> </h3>
                           <div id="faqfoodRelated<?= $v2->id; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?= $v2->id; ?>" data-bs-parent="#faqfoodRelated">
                              <div class="accordion-body"> <?php echo $v2->content; ?> </div>
                           </div>
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>