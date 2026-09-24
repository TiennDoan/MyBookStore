<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link rel="stylesheet"
          href="css/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</head>
<body>
    <?php require_once __DIR__ . '/data/books.php'?>
    <?php require_once __DIR__ . '/../components/header.php';
    ?>
    <section class="py-5 bg-light hero-section">
        <div class="container text-center">
            <h1>Welcome to My Website</h1>
            <p class="lead">
                Discover my collection of products and services.
            </p>
            <a href="#" class="btn btn-primary">
                Explore Books
            </a>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">
                Featured Books
            </h2>
            <div class="row g-4">
                
                <?php foreach ($books as $index => $book): ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card h-100">
                            <img 
                                src="<?php echo $book['image']; ?>" 
                                class="card-img-top" 
                                alt="Item <?php echo $index + 1; ?>">
                            <div class="card-body">
                                <h5 class="card-title fw-bolder">
                                    <?php echo htmlspecialchars($book['title']); ?>
                                </h5>
                                <p class="card-text small fst-italic">
                                    <?php echo htmlspecialchars($book['description']); ?>
                                </p>
                                <p class="fw-semibold">
                                    <span class="fw-bold">Author:</span> <?php echo htmlspecialchars($book['author']); ?>
                                </p>
                                <p>
                                    <span class="fw-bold">Price: $<?php echo number_format((float)$book['price'], 2); ?></span>
                                </p>
                                <a href="../pages/item_details.php?id=<?= $book['id'] ?>" class="btn btn-primary">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <?php require_once __DIR__ .'/../components/footer.php' ;?>


    <script src="js/script.js"></script> 
</body>
</html>

