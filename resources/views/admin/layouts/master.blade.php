@include('admin.layouts.header')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?= asset('/css/sidenav.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= asset('/css/style.css') ?>" media="screen">

	
<!-- Navbar navigation -->
    <nav class="top-navbar navbar navbar-default navbar-static-top" role="navigation" id="navbar">

        <!-- navbar header -->
        <div class="navbar-header">                       
<a href="javascript:;" class="toggle" id="sidenav-toggle">
    <i class="material-icons">menu</i>
  </a>
        </div>

        <!-- navbar right -->
        <div class="nav navbar-right hidden-xs">
            <div id="admin-info">
				<div class="admin-user pull-left">
					<a href="/"  target="_self">
						<i class="material-icons">home</i>
						Home
					</a>
				</div>
                <div class="admin-user pull-left">
                    <a ui-sref="profile" ng-class="{active: mainUrl == 'profile'}">
                        <i class="material-icons">account_box</i>
                        Me
                    </a>
                </div>
                <div class="logout pull-left">
                    <a href="/admin/logout" target="_self">
                        <i class="material-icons">exit_to_app</i>
                        Logout
                    </a>
                </div>
            </div>
        </div>

    </nav> <!-- / Navbar -->
<div id="wrapper">	
<nav class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle" id="snav">
			<div class="sidenav-brand" style="border:1px solid silver;">
			 <img src="/images/flickr-09.jpg">
			 </div>
			 <div class="sidenav-header">
			  <span>John Doe</span>
			  </div>
			  <div class="sidenav-header" style="background:#FF5722;color:#FFF;">
			  <small>secondary text</small>
			  </div>
			<div class="sidenav-header">
			  <table>
				  <tr>
					  <td class="lbox" ng-class="{active: mainUrl == 'dashboard'}">
					  <a ui-sref="dashboard">					  
					  <i class="material-icons md-68">home</i>					 
					  <span class="sidenav-link-title" style="padding:0px;">Dashbaord</span>
					  </a>
					  </td>
					  <td  class="lbox" ng-class="{active: mainUrl == 'profile'}">
					  <a ui-sref="profile">	
					  <i class="material-icons md-68">account_box</i>
					   <span class="sidenav-link-title" style="padding:0px;">Account</span>
					  </a>
					  </td>
				   </tr>
				   <tr>
					  <td class="lbox">
					  <a href="javascript:;">	
					  <i class="material-icons md-68">settings</i>
					  <span class="sidenav-link-title" style="padding:0px;">Settings</span>
					  </a>
					  </td>
					  <td  class="lbox">
					  <a href="javascript:;">	
					  <i class="material-icons md-68">power_settings_new</i>
					  <span class="sidenav-link-title" style="padding:0px;">Logout</span>
					  </a>
					  </td>
				  </tr>
			  </table>
			</div>

			<ul class="sidenav-menu">
			  <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">group</i>
				  </span>	
				  <span class="sidenav-link-title">All Advisors</span>
				</a>
			  </li>
			  <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">view_comfy</i>
				  </span>	
				  <span class="sidenav-link-title">Categories</span>
				</a>
			  </li>
			  <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">reorder</i>
				  </span>	
				  <span class="sidenav-link-title">My Orders</span>
				</a>
			  </li>
			   <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">credit_card</i>
				  </span>	
				  <span class="sidenav-link-title">Credit</span>
				</a>
			  </li>
			   <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">favorite</i>
				  </span>	
				  <span class="sidenav-link-title">Favorite</span>
				</a>
			  </li>
			   <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">face</i>
				  </span>	
				  <span class="sidenav-link-title">Invite Friend</span>
				</a>
			  </li>
			   <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">language</i>
				  </span>	
				  <span class="sidenav-link-title">Language</span>
				</a>
			  </li>
			   <li>
				<a href="javascript:;">
				  <span class="sidenav-link-icon">
					<i class="material-icons">arrow_forward</i>
				  </span>	
				  <span class="sidenav-link-title">Become Psychic</span>
				</a>
			  </li>
			</ul>			
  </nav>  
   <!-- page wrapper for angular views-->
    <div id="page-wrapper">

        <!-- Angular views -->
        <div ui-view id="ui-view"></div>        

    </div>
    
 </div>
 
 <script type="text/javascript" src="<?= asset('/js/sidenav.min.js') ?>"></script>
 <script>$('[data-sidenav]').sidenav();</script>
@include('admin.layouts.footer')