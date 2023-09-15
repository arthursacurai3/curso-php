<?php
  include_once("templates/header.php");
  if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
      if($post['id'] == $postId){
        $currentPost = $post;
      }
    }
  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentPost['title'];?></h1>
      <p id="post-description"><?= $currentPost['description'];?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL;?>/img/<?= $currentPost['img'];?>" alt="<?= $currentPost['title'];?>">
      </div>
      <p class="post-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quod quibusdam expedita aut perspiciatis natus repudiandae a officiis obcaecati facere, veniam corrupti eum quasi, sequi magnam at eius totam minus.
        Id dolorum minima eum eligendi, ratione aut iure minus repellendus blanditiis cumque, sint aspernatur recusandae saepe excepturi perspiciatis? Quis itaque ea suscipit aliquid voluptas ullam, laudantium quo? Magnam, quis ipsa.
        Eius, corporis debitis aspernatur laborum expedita quod consequatur! Adipisci nulla autem dignissimos inventore quod libero, consequatur quae! Inventore necessitatibus quis, quaerat vel iusto veritatis eaque numquam dolor! Distinctio, cum et?
        Ipsa possimus voluptates aliquam veritatis ex dolores dicta at mollitia ducimus eum accusamus autem incidunt culpa ab, praesentium voluptatum! Est commodi saepe iure ducimus molestias magnam et dolore iusto debitis?
        Aliquam quidem fuga facilis atque voluptatem sit maiores officia exercitationem tenetur hic? Voluptatibus iste odit voluptate maxime! A incidunt dolores, harum error, quo eaque obcaecati officia debitis amet distinctio inventore.
      </p>
      <p class="post-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quod quibusdam expedita aut perspiciatis natus repudiandae a officiis obcaecati facere, veniam corrupti eum quasi, sequi magnam at eius totam minus.
        Id dolorum minima eum eligendi, ratione aut iure minus repellendus blanditiis cumque, sint aspernatur recusandae saepe excepturi perspiciatis? Quis itaque ea suscipit aliquid voluptas ullam, laudantium quo? Magnam, quis ipsa.
        Eius, corporis debitis aspernatur laborum expedita quod consequatur! Adipisci nulla autem dignissimos inventore quod libero, consequatur quae! Inventore necessitatibus quis, quaerat vel iusto veritatis eaque numquam dolor! Distinctio, cum et?
        Ipsa possimus voluptates aliquam veritatis ex dolores dicta at mollitia ducimus eum accusamus autem incidunt culpa ab, praesentium voluptatum! Est commodi saepe iure ducimus molestias magnam et dolore iusto debitis?
        Aliquam quidem fuga facilis atque voluptatem sit maiores officia exercitationem tenetur hic? Voluptatibus iste odit voluptate maxime! A incidunt dolores, harum error, quo eaque obcaecati officia debitis amet distinctio inventore.
      </p>
    </div>
    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tags-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
          <li><a href="#"><?= $tag;?></a></li>
        <?php endforeach; ?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
      <?php foreach($categories as $category): ?>
          <li><a href="#"><?= $category;?></a></li>
        <?php endforeach; ?>
      </ul>
  </aside>
  </main>

<?php
  include_once("templates/footer.php")
?>