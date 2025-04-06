<link href="<?= base_url(''); ?>assets/css/video-list.css" rel="stylesheet">
<style> .click-to-play-video, .video-description {
    max-width: 360px;
}
.img-responsive {
    max-width: 100%;
}
.vdetails small {
    font-size: 1em;
}
.video-treatment-block {
    font-weight: 400;
    font-size: 1.125em;
} 
</style>


<div class="container"> 
    <ul class="breadcrumb"> 
        <li class="breadcrumb-item"><a href="<?= base_url(''); ?>" title="Home">Home</a></li>
        <li class="breadcrumb-item"><span>Video Gallery</span></li>
    </ul> 
</div>

<section class="container-fluid"> <h1 class="text-center mt-0">Medassure Videos</h1> </section>


<section class="section-padding"> 
    <div class="container" id="one"> 
        <div class="row"> 
            <div class="col-lg-12"> 
                <ul class="by-location-filter"> 
                    <li><strong>Videos Related To:</strong></li>
                    <?php foreach($category as $category): ?>
                        <li id="<?= $category->name; ?>"><a title="<?= $category->name; ?>" href="<?= base_url('videos/'.$category->slug); ?>"><?= $category->name; ?> </a></li>
                    <?php endforeach; ?>
                    
                </ul> 
            </div> 
        </div> 
        <strong><small class="all-records">Total 1488 videos found.</small></strong> 
        <div class="row"> 
            <?php 
                foreach($video as $k => $v){
                $parsed_url = parse_url($v->url);
                $video_id = ltrim($parsed_url['path'], '/');
                $thumbnail_url = "https://img.youtube.com/vi/" . $video_id . "/mqdefault.jpg";
                $date = date('d M, Y', $v->created_on)
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 sing-vd-block" style="display: block;"> 
                <div class="video-block-height click-to-play-video" id="player-<?= $video_id; ?>"> 
                    <img class="img-responsive video-icon-block-cost lazy_img" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/video-icon.png" alt="Video" title="<?= $v->title; ?>" style=""> 
                    <img class="img-responsive video-image lazy_img" id="<?= $video_id; ?>" src="<?= $thumbnail_url; ?>" alt="Video" title="<?= $v->title; ?>" style=""> 
                </div> 
                <div class="video-description"> 
                    <span class="vdetails"> <small class="pub-date"><?= $date; ?></small> </span> 
                    <h5 class="video-treatment-block"><a title="<?= $v->title; ?>" target="_blank" href="<?= $v->url; ?>"><?= $v->title; ?> <i class="fa fa-external-link "></i></a></h5> 
                </div> 
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="text-center" id="load"> <b> Load More </b></div>
</section>

<script src="https://www.youtube.com/player_api" type="text/javascript"></script>