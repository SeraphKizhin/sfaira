<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFAIRA Wiki | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="landing-body">

    <nav class="wiki-nav">
        <div class="nav-left">
            <h1 class="logo">SFAIRA</h1>
        </div>
        
        <div class="nav-center">
            <div class="nav-title">SFAIRA WIKI</div>
            <ul class="nav-links">
                <li><a href="#">EXPLORE</a></li>
                <li><a href="batch_555_a.php">CHARACTERS</a></li>
                <li><a href="#">WORLD</a></li>
                <li><a href="#">MECHANICS</a></li>
            </ul>
        </div>

        <div class="nav-right">
            <div class="search-container">
                <input type="text" placeholder="Search..." aria-label="Search">
                <button type="submit">🔍</button>
                <button id="theme-toggle" class="theme-toggle" title="Toggle Light/Dark Mode">☀️</button>
            </div>
        </div>
    </nav>

    <main class="hub-container">
        
        <section class="glass-panel hero-section">
            <p class="panel-subtitle">HOME</p>
            <h2 class="hero-title">SFAIRA</h2>
            <p class="hero-welcome">Welcome to the Sfaira Wiki!</p>
            <div class="glass-divider"></div>
            <p class="hero-lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Explore the depths of the Sfairan universe, uncover the truths of the paths, and document the anomalies that exist within the system.</p>
        </section>

        <section class="glass-panel batch-section">
            <h3 class="panel-title">BATCH 555-A</h3>
            
            <div class="character-grid">
                <a href="#" class="char-card">
                    <div class="char-image"><img src="images/seth.png" alt="Seth"></div>
                    <div class="char-label">Seth</div>
                </a>
                <a href="#" class="char-card">
                    <div class="char-image"><img src="images/fvyina.png" alt="Fvyina"></div>
                    <div class="char-label">Fvyina</div>
                </a>
                <a href="#" class="char-card">
                    <div class="char-image"><img src="images/aurelius.png" alt="Aurelius"></div>
                    <div class="char-label">Aurelius</div>
                </a>
                <a href="#" class="char-card">
                    <div class="char-image"><img src="images/mara.png" alt="Mara"></div>
                    <div class="char-label">Mara</div>
                </a>

                <a href="#" class="char-card">
                    <div class="char-image"><img src="images/agnis.png" alt="Agnis"></div>
                    <div class="char-label">Agnis</div>
                </a>
                <a href="#" class="char-card">
                    <div class="char-image"><img src="images/verlierer.png" alt="Verli"></div>
                    <div class="char-label">Verlierer</div>
                </a>
                <a href="seraph/seraph.php" class="char-card">
                    <div class="char-image"><img src="images/Seraph.png" alt="Seraph"></div>
                    <div class="char-label">Seraph</div>
                </a>
            </div>
        </section>

    </main>

    <script>
        const themeToggle = document.getElementById('theme-toggle');
        const body = document.body;

        if (localStorage.getItem('theme') === 'light') {
            body.classList.add('light-mode');
            themeToggle.innerText = '🌙';
        }

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('light-mode');
            
            if (body.classList.contains('light-mode')) {
                themeToggle.innerText = '🌙';
                localStorage.setItem('theme', 'light');
            } else {
                themeToggle.innerText = '☀️';
                localStorage.setItem('theme', 'dark');
            }
        });
    </script>

</body>
</html>