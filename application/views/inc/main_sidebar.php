<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="<?=base_url()?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>
				<?php
					$active_user = $this->session->userdata("active_user");
					echo $active_user->fst_fullname;
				?>
			</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
		<?= $this->menus->build_menu(); ?>

		<li class="treeview menu-open">
			<a href="http://localhost/democi/forms.htrml">
				<i class="fa fa-edit"></i><span>Manual Sampel</span>
				<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
			<ul class="treeview-menu" style="display: block;">
				<li class="treeview">
					<a href="#">
						<i class="fa fa-circle-o"></i><span>Select 2</span>
						<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
					</a>
					<ul class="treeview-menu" style="display: block;">
						<li class="">
							<a href="<?= base_url()?>sample/select2/customOption">
								<i class="fa fa-circle-o"></i><span>Custom Option</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="  ">
					<a href="http://localhost/democi/welcome/advanced_element"><i class="fa fa-circle-o"></i><span>Advanced Elements</span></a>
				</li>
				<li class="  ">
					<a href="http://localhost/democi/welcome/editor"><i class="fa fa-circle-o"></i><span>Editors</span></a>
				</li>
			</ul>
		</li>
	</ul>
</section>
<!-- /.sidebar -->		  