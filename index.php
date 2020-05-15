<?php
  $host = 'localhost';
  $user = 'root';
  $password = 'root';
  $dbname = 'pdoposts';

  // Set DSN
  $dsn = 'mysql:host='. $host .';dbname='. $dbname;

  // Create a PDO instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
  

  # PDO QUERY

  // $stmt = $pdo->query('select * from post');

  // while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //   echo $row['title'] . '<br>';
  // }
  

  // while($row = $stmt->fetch()) {
  //   echo $row->title . '<br>';
  // } 

  # PREPARED STATEMENTS (prepare & execute)
  // separates the instruction from the actual data

  // UNSAFE

  //$sql = "select * from post where author = '$author'";

  // FETCH MULTIPLE POSTS 

  // User Input
  $author = 'john';
  $is_published = true;
  $id = 1;
  
  // Positional Params
  // $sql = 'select * from post where author = ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$author]);
  // $posts = $stmt->fetchAll();

  // Named Params
  // $sql = 'select * from post where author = :author && is_published = :is_published';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['author' => $author, 'is_published' => $is_published]);
  // $posts = $stmt->fetchAll();

  // foreach($posts as $post) {
  //   echo $post->title;
  // }

  // FETCH Single Post
  // $sql = 'select * from post where id = :id ';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // $post = $stmt->fetch();

  // echo $post->body;

  // GET ROW COUNT
  // $stmt = $pdo->prepare('select * from post where author = ?');
  // $stmt->execute([$author]);
  // $postCount = $stmt->rowCount();

  // echo $postCount;

  // INSERT DATA
  // $title = 'post five';
  // $body = 'this is post five';
  // $author = 'abd';

  // $sql = 'insert into post(title,body,author) values(:title, :body, :author)';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
  // echo 'Post Added';

  // UPDATE DATA
  // $id = 1;
  // $body = 'this is an updated post';

  // $sql = 'update post set body = :body where id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['body' => $body, 'id' => $id]);
  // echo 'Post Updated';

  // DELETE DATA
  // $id = 3;

  // $sql = 'delete from post where id = :id';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute(['id' => $id]);
  // echo 'Post Deleted';

  // SEARCH DATA
  // $search = "%f%";
  // $sql = 'select * from post where title like ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$search]);
  // $posts = $stmt->fetchAll();

  // foreach($posts as $post) {
  //   echo $post->title . '<br>';
  // }


  // LIMIT DATA
  // $limit = 1;
  // $sql = 'select * from post where author = ? && is_published = ? LIMIT ?';
  // $stmt = $pdo->prepare($sql);
  // $stmt->execute([$author, $is_published, $limit]);
  // $posts = $stmt->fetchAll();

  // foreach($posts as $post) {
  //   echo $post->title . '<br>';
  // }