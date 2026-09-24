<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book details | MyBookStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php 
    require_once __DIR__ . '/../public/data/books.php';

    $id = $_GET['id'] ?? null;
    $book = null;

    // Kiểm tra và lấy sách theo index (id - 1)
    if ($id && isset($books[$id - 1])) {
        $book = $books[$id - 1];
    } else {
        die("Book not found!");
    }
    ?>
    <?php require_once __DIR__ . '/../components/header.php';
    ?>
    <main class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="../public/<?= $book['image'] ?>" class="img-fluid" alt="<?= $book['title'] ?>">
            </div>
            <div class="col-md-6">
                <h1><?= htmlspecialchars($book['title']) ?></h1>
                <p class="text-muted">Category: <?= $book['category']?></p>
                <h3><span class="fw-bold">Price: $<?php echo number_format((float)$book['price'], 2); ?></span></h3>
                <p><?= htmlspecialchars($book['detail']) ?></p>
                <button class="btn btn-primary" type="button" onclick="showMessage()">
                    Add to Cart
                </button>
            </div>
        </div>
    </main>
    <?php require_once __DIR__ . '/../components/footer.php';
    ?>

    <script src="../public/js/script.js"></script>
</body>
</html>