<?php $loginRoleId = session()->get('role'); ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="#" id="indexPage">
				<a href="<?= base_url('admin'); ?>"><i class="fa fa-home" aria-hidden="true"></i> <span>Home</span></a>
			</li>

            <!-- <?php if($loginRoleId == 1){ ?>
            <li class="" id="indentsPage">
                <a href="<?= base_url('admin/client'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Client</span></a>
            </li>
            <?php } ?>

            <?php if($loginRoleId == 1 || $loginRoleId == 2){ ?>
            <li class="" id="boardMemberPage">
                <a href="<?php echo base_url('admin/examinee'); ?>"><i class="fa fa-user" aria-hidden="true"></i> <span>Board Members</span></a>
            </li>
            <?php } ?> -->

            <!-- <?php if($loginRoleId == 1){ ?>
            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/question'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Questions</span></a>
            </li>
            <?php } ?> -->




            <?php if($loginRoleId == 1){ ?>

            <li class="" id="indentsPage">
                <a href="<?= base_url('admin/hospital'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Hospital</span></a>
            </li>

            <li class="" id="indentsPage">
                <a href="<?= base_url('admin/doctor'); ?>"><i class="fa fa-user-md" aria-hidden="true"></i> <span>Doctor</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/faq'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>FAQ</span></a>
            </li>

            <!-- <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/news'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>News</span></a>
            </li> -->

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/author'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Authors</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/googlerating'); ?>"><i class="fa fa-star" aria-hidden="true"></i> <span>Google Rating</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/category'); ?>"><i class="fa fa-briefcase" aria-hidden="true"></i> <span>Category Master</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/video'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i> <span>Video</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/patienttestimonial'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Patient Testimonial</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/lowestquote'); ?>"><i class="fa fa-file" aria-hidden="true"></i> <span>Lowest Quote</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/multispecialty'); ?>"><i class="fa fa-file" aria-hidden="true"></i> <span>Multi Specialty</span></a>
            </li>

            <!-- <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/travelvisa'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Travel Visa</span></a>
            </li> -->

            <!-- <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/blog'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Blog</span></a>
            </li> -->

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/department'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Department</span></a>
            </li>

            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/treatment'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Treatment</span></a>
            </li>
            
            <li class="" id="indentsPage">
                <a href="<?= base_url('admin/adminuser'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Admin Users</span></a>
            </li>

            
            <?php } ?>

            <li class="logout-btn"><a href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> <span> Sign out</span></a></li>
        </ul>
    </section>
</aside>