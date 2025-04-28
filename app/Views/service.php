<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-12"> 
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb"> 
                    <ol class="breadcrumb mt-3"> 
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(''); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(''); ?>service/<?= $slug; ?>">Service</a></li> 
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?= base_url(''); ?>service/<?= $slug; ?>"><?= $service[0]['title']; ?></a></li> 
                    </ol> 
                </nav> 
            </div> 
        </div> 
    </div>
</section>

<section class="py-5 bg-light"> 
    <div class="container-fluid"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-12">
                    <h3 class="mb-3"><?= $service[0]['title']; ?></h3>
                    <h5 class="mb-4"><?= $service[0]['description']; ?></h5>
                    <?= $service[0]['content']; ?>
                </div> 
            </div>
        </div>
    </div>
</section>