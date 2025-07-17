<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <h1><?php bloginfo('name'); ?></h1>
    <p class="tagline"><?php bloginfo('description'); ?></p>

    <nav class="site-nav">
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </header>

  <main class="content">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="post-card">
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumb"><?php the_post_thumbnail('medium'); ?></div>
          <?php endif; ?>
          <h2><?php the_title(); ?></h2>
          <div class="post-content"><?php the_excerpt(); ?></div>
          <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <p>No posts found.</p>
    <?php endif; ?>
  </main>

  <section class="portfolio" id="portfolio">
    <h2>🧠 Projects I've Built</h2>
    <div class="portfolio-grid">
      <div class="portfolio-item">
        <h3>GitHub Finder App</h3>
        <p>React app using GitHub API to search users and view profiles.</p>
      </div>
      <div class="portfolio-item">
        <h3>Custom WordPress Theme</h3>
        <p>This very theme! Built from scratch to showcase my WP dev skills.</p>
      </div>
      <div class="portfolio-item">
        <h3>Portfolio Site</h3>
        <p>My personal website built with HTML, CSS, JS and deployed on Vercel.</p>
      </div>
    </div>
  </section>

  <footer class="site-footer">
    <p>🚀 Built with ❤️ by Asthan</p>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>