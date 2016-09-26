<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <?php if (has_nav_menu('navbar-left-side')):
        wp_nav_menu(['theme_location' => 'navbar-left-side', 'menu_class' => 'nav']);
      endif; ?>
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php if (has_nav_menu('navbar-right-side')):
      wp_nav_menu(['theme_location' => 'navbar-right-side', 'menu_class' => 'nav']);
      endif; ?>
    </nav>
  </div>
</header>
