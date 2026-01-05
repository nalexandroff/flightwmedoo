<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Моето приложение'; ?></title>
    <link href="/assets/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Хедър -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Flight PHP + Medoo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Потребители</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admins">Администратори</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Основно съдържание -->
    <main class="container mt-4">
        <?php echo $content; // Тук се вмъква съдържанието на страницата ?>
    </main>

    <!-- Футър -->
    <footer class="bg-light text-center py-3 mt-5">
        <div class="container">
            <p>&copy; 2025 Моето приложение с Flight PHP и Medoo. Всички права запазени.</p>
        </div>
    </footer>

    <script src="/assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="/assets/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/functions.js"></script>
</body>
</html>