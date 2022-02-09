<?php
    require_once('read.php');

    $note = [ 'id' => '', 'title' => '', 'content' => '' ];

    if(isset($_GET['id'])) {
        require_once('populate.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="wrapper">
        <form class="new-note" method="POST" action="<?php if(empty($_GET['id'])) { ?>
                                                        create.php
                                                     <?php } else { ?>
                                                        update.php
                                                     <?php } ?>">
            <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="Note Title" autocomplete="off" id="title" value="<?php echo $note['title'] ?>">
            <label for="content">Content</label>
            <textarea name="content" cols="30" rows="8" placeholder="Note Content" id="content"><?php echo $note['content'] ?></textarea>
            <input type="submit" value="<?php if($note['id']) { ?>
                                                Update
                                        <?php } else { ?>
                                                New
                                        <?php } ?>"></input>
        </form>
        <div class="notes">
            <?php foreach($notes as $note) { ?>
                <div class="note">
                    <div class="title">
                        <a href="?id=<?php echo $note['id'] ?>"><?php echo $note['title'] ?></a>
                    </div>
                    <div class="content">
                        <?php echo $note['content'] ?>
                    </div>
                    <small><?php echo $note['created'] ?></small>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
                        <button type="submit" class="delete">X</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>