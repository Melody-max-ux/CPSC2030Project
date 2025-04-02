<?php
// Output posts to HTML
function the_posts() {
  global $posts;

  // TODO
  echo '<div class="posts"><h2>POSTS</h2>';
  foreach ($posts as $post){
    echo '<div class="post">';
    echo '<div class="ID">Post ID: ' . $post['id'] . '</div>';
    echo '<div class="date">Posted on:' .  $post['date'] . ' </div>';
    echo '<h3>New comment by: ' . $post['email'] . '</h3>';
    echo '<div class="address">Address:' . $post['address'] . '</div>';
    echo '<div class="area"><p>Area:' .$post['area'] . '</p></div></div>';
  }
  echo '</div>';
}

