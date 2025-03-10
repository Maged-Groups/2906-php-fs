<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    width: 40%;
    margin: 20px;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
  }

  .container {
    padding: 2px 16px;
  }

</style>

<div class="card">
  <div class="container">
    <h4><?= $post['id']; ?> - <b><?= $post['title']; ?></b></h4>
    <p><?= $post['body']; ?></p>
  </div>
</div>
