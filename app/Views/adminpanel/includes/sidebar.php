<?php $loginRoleId = session()->get('role'); ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="#" id="indexPage">
				<a href="<?= base_url('admin'); ?>"><i class="fa fa-home" aria-hidden="true"></i> <span>Home</span></a>
			</li>

            <?php if($loginRoleId == 1){ ?>
            <li class="" id="indentsPage">
                <a href="<?= base_url('admin/client'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Client</span></a>
            </li>
            <?php } ?>

            <?php if($loginRoleId == 1 || $loginRoleId == 2){ ?>
            <li class="" id="boardMemberPage">
                <a href="<?php echo base_url('admin/examinee'); ?>"><i class="fa fa-user" aria-hidden="true"></i> <span>Board Members</span></a>
            </li>
            <?php } ?>


            <?php if($loginRoleId == 1){ ?>
            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/category'); ?>"><i class="fa fa-file" aria-hidden="true"></i> <span>Category</span></a>
            </li>
            <?php } ?>


            <?php if($loginRoleId == 1){ ?>
            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/question'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>Questions</span></a>
            </li>
            <?php } ?>

            <?php if($loginRoleId == 1){ ?>
            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/faq'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>FAQ</span></a>
            </li>
            <?php } ?>

            <?php if($loginRoleId == 1){ ?>
            <li class="" id="candidatesPage">
                <a href="<?php echo base_url('admin/news'); ?>"><i class="fa fa-question" aria-hidden="true"></i> <span>News</span></a>
            </li>
            <?php } ?>


            <?php if($loginRoleId == 1){ ?>
            <li class="" id="indentsPage">
                <a href="<?= base_url('admin/adminuser'); ?>"><i class="fa fa-users" aria-hidden="true"></i> <span>Admin Users</span></a>
            </li>
            <?php } ?>

            <li class="logout-btn"><a href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> <span> Sign out</span></a></li>
        </ul>
    </section>
</aside>