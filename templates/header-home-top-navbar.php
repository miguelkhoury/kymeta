<header class="banner navbar navbar-static-top" role="banner">
 

  <div class="navbar-inner">
  <div class="row-fluid">
 <div class="span12" >

  
    <div class="container">
       <a class="brand" href="http://www.kymetacorp.com">
        <img src="/wp-content/themes/kymeta/assets/img/logo.png"></a>

       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="menu-btn">Menu</span></a>  

           <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;        ?>  
          </nav>

 
           </div>    
 </div>
</div>
            </div>



</header>

