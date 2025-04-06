
<link href="https://d3lclm53tbcdw6.cloudfront.net/v2/knowledge-center/css/blog_index.css" rel="stylesheet">
<!-- <link href="<?= base_url(''); ?>assets/css/common-min.css" rel="stylesheet"> -->

<div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> <div class="modal-body" id="terms_of_use"> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div> </div> </div> </div>

<div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true"> <div class="modal-dialog modal-dialog-centered" role="document"> <div class="modal-content"> <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Privacy Policy</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div> <div class="modal-body" id="privacy_policy"> </div> <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div> </div> </div> </div>

<style type="text/css"> #formTerms,#formPrivacyPolicy{font-size:14px;color:#666;top:30px}
   #formTerms .modal-dialog,#formPrivacyPolicy .modal-dialog{margin: 0px auto;}
#formTerms .modal-title,#formPrivacyPolicy .modal-title{color:#666;font-size:16px;margin:10px}
.formtns-triger{opacity:.6;font-size:14px;cursor:pointer;}
#formTerms .modal-header,#formPrivacyPolicy .modal-header{background:unset;padding:0 5px;border:0}
#formTerms .close,#formPrivacyPolicy .close{font-size:30px;color:#e43939;position:absolute;opacity:1;top:1px;right:5px;z-index:999}
#formTerms .modal-body,#formPrivacyPolicy .modal-body{padding:5px 15px;max-height:420px;overflow:auto;border-top:1px solid #ddd;border-bottom:1px solid #ddd}
#formTerms .modal-footer,#formPrivacyPolicy .modal-footer{padding:5px;border-top:0}
#formTerms .modal-footer .btn,#formPrivacyPolicy .modal-footer .btn{background:#e43939;color:#fff;font-size:14px;line-height:1;border-radius:5px;padding:5px 8px}
.modal-open .modal{overflow-x:hidden;overflow-y:hidden;}
#formTerms h2,#formPrivacyPolicy h2{font-size:16px;color:#666}
#formTerms ul,#formPrivacyPolicy ul,#formTerms ol,#formPrivacyPolicy ol{padding-left:15px}
#formTerms .modal-content, #formPrivacyPolicy .modal-content{background: #ffffff}
.modal-backdrop.fade.in{opacity:0.5}
.modal-backdrop {
  --bs-backdrop-zindex: 0;  
}
@media    only screen and (max-width: 520px){
div#formPrivacyPolicy{top:36px}
#formTerms .modal-body, #formPrivacyPolicy .modal-body{max-height:480px}
}
.formtns-triger a {color: #164399;} </style>


<section class="breadcrumb-section py-3"> 
    <div class="container"> 
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb"> 
            <ol class="breadcrumb mt-2"> 
                <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li> 
                <li class="breadcrumb-item"><span>Patient Testimonials</span></li> 
            </ol> 
        </nav> 
    </div>
</section>


<main>
    <sction class="article-section">
        <div class="container-fluid border-bottom">
            <div class="row latest-multi">
                <div class="col-md-7 group-2">
                    <?php foreach($testimonials as $testimonial): ?>
                        <div class="group-2-artic">
                            <a href="<?= base_url(''); ?>patient-testimonials/<?= $testimonial->slug; ?>" title="<?= $testimonial->title; ?>"> <img class="article-image" alt="<?= $testimonial->title; ?>" title="<?= $testimonial->title; ?>" src="<?= base_url(''); ?><?= $testimonial->image; ?>"> </a> 
                            <div class="top-article-info-mob">
                            <h2 class="h4"><a href="<?= base_url(''); ?>patient-testimonials/<?= $testimonial->slug; ?>" title="<?= $testimonial->title; ?>"><?= $testimonial->title; ?></a></h2>
                            <p class="category"><strong>Category:</strong> <a href="<?= base_url(''); ?>patient-testimonials" title="Patient Testimonials">Patient Testimonials</a></p>
                            <!-- <p class="last-update"><strong>Last Updated Date:</strong> 24 Mar 2025</p> -->
                            <p class="last-update"><strong>Created Date:</strong> <?= date('d M, Y', $testimonial->created_on); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-5 group-3">
                    <?php foreach($testimonialsmore as $testimonial): ?>
                        <div class="group-3-artic">
                            <a href="<?= base_url(''); ?>patient-testimonials/<?= $testimonial->slug; ?>"> 
                                <img class="img-group3" alt="<?= $testimonial->title; ?>" title="<?= $testimonial->title; ?>" width="120" src="<?= base_url(''); ?><?= $testimonial->image; ?>"> 
                            </a> 
                            <div class="">
                                <h2 class=""><a href="<?= base_url(''); ?>patient-testimonials/<?= $testimonial->slug; ?>" title="<?= $testimonial->title; ?>"><?= $testimonial->title; ?></a></h2>
                                <p class="category"><a href="<?= base_url(''); ?>patient-testimonials" title="Patient Testimonials">Patient Testimonials</a></p>
                                <!-- <p class="last-update"><strong>Last Updated Date:</strong> 19 Feb 2025</p> -->
                                <p class="last-update"><strong>Created Date:</strong> <?= date('d M, Y', $testimonial->created_on); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </scetion>
</main>