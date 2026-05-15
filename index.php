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
                <a href="#" class="char-card" data-color="#DE98FF" id="fvyina-card">
                    <div class="char-image-wrap">
                        <div class="char-image"><img src="images/fvyina.png" alt="Fvyina"></div>
                        <canvas class="spark-canvas" id="fvyina-sparks"></canvas>
                    </div>
                    <div class="char-label">Fvyina</div>
                </a>
                <a href="#" class="char-card" data-color="#FFDFAE" id="aurelius-card">
                    <div class="char-image-wrap">
                        <div class="char-image"><img src="images/aurelius.png" alt="Aurelius"></div>
                    </div>
                    <div class="char-label">Aurelius</div>
                </a>
                <a href="#" class="char-card" data-color="#A8A3CB">
                    <div class="char-image"><img src="images/mara.png" alt="Mara"></div>
                    <div class="char-label">Mara</div>
                </a>

                <a href="#" class="char-card" data-color="#BDD190">
                    <div class="char-image"><img src="images/agnis.png" alt="Agnis"></div>
                    <div class="char-label">Agnis</div>
                </a>
                <a href="#" class="char-card" data-color="#ffffff" id="verlierer-card">
                    <div class="char-image">
                        <img src="images/verlierer.png" alt="Verli">
                        <!-- RGB ghost layers for chromatic split on portrait -->
                        <img src="images/verlierer.png" alt="" class="verlierer-ghost ghost-red" id="v-ghost-red">
                        <img src="images/verlierer.png" alt="" class="verlierer-ghost ghost-cyan" id="v-ghost-cyan">
                        <!-- Screen tear bar -->
                        <div class="verlierer-tear" id="verlierer-tear"></div>
                    </div>
                    <div class="char-label">Verlierer</div>
                </a>
                <!-- SVG filters for ghost colour channels -->
                <svg width="0" height="0" style="position:absolute">
                    <defs>
                        <filter id="ghost-red" color-interpolation-filters="sRGB">
                            <feColorMatrix type="matrix" values="1 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 0"/>
                        </filter>
                        <filter id="ghost-cyan" color-interpolation-filters="sRGB">
                            <feColorMatrix type="matrix" values="0 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 1 0"/>
                        </filter>
                    </defs>
                </svg>
                <a href="seraph/seraph.php" class="char-card" data-color="#C19943">
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

        // Per-character hover colors
        document.querySelectorAll('.char-card[data-color]').forEach(card => {
            const color = card.dataset.color;
            const img = card.querySelector('.char-image');
            const label = card.querySelector('.char-label');
            const isVerlierer = card.id === 'verlierer-card';

            const r = parseInt(color.slice(1, 3), 16);
            const g = parseInt(color.slice(3, 5), 16);
            const b = parseInt(color.slice(5, 7), 16);

            card.addEventListener('mouseenter', () => {
                if (isVerlierer) {
                    // White border with RGB chromatic aberration split glow
                    img.style.borderColor = '#ffffff';
                    img.style.boxShadow = '0 0 18px rgba(255,255,255,0.55), -3px 0 8px rgba(255,0,0,0.7), 3px 0 8px rgba(0,255,255,0.7)';
                    // Label: white text with RGB split text-shadow
                    label.style.color = '#ffffff';
                    label.style.textShadow = '-2px 0 0 rgba(255,0,0,0.85), 2px 0 0 rgba(0,255,255,0.85)';
                } else {
                    img.style.boxShadow = `0 0 20px rgba(${r},${g},${b},0.5), 0 0 10px rgba(${r},${g},${b},0.3)`;
                    img.style.borderColor = color;
                    label.style.color = color;
                    label.style.textShadow = `0 0 8px rgba(${r},${g},${b},0.4)`;
                }
            });

            card.addEventListener('mouseleave', () => {
                img.style.boxShadow = '';
                img.style.borderColor = '';
                label.style.color = '';
                label.style.textShadow = '';
            });
        });

        // ── Verlierer binary overlay ──────────────────────────────────────
        const verliererCard = document.getElementById('verlierer-card');

        // Desaturate targets: nav + hero section + every char-card EXCEPT Verlierer.
        // We cannot filter a parent of Verlierer (e.g. hub-container) because CSS
        // filter on a parent always affects children — child filter:none can't escape it.
        function getDesaturateTargets() {
            const targets = [
                document.querySelector('.wiki-nav'),
                document.querySelector('.hero-section'),
            ];
            document.querySelectorAll('.char-card').forEach(card => {
                if (card.id !== 'verlierer-card') targets.push(card);
            });
            return targets;
        }

        const styleEl = document.createElement('style');
        styleEl.textContent = `
            .verlierer-desaturate {
                filter: grayscale(85%) brightness(0.75) !important;
                transition: filter 0.6s ease;
            }
            .verlierer-desaturate-off {
                filter: none !important;
                transition: filter 0.6s ease;
            }
        `;
        document.head.appendChild(styleEl);

        let binaryInterval = null;
        let activeDigits = [];

        function spawnDigit() {
            const el = document.createElement('span');
            el.className = 'binary-digit';
            el.textContent = Math.random() < 0.5 ? '1' : '0';

            // Pick a random edge: 0=top, 1=bottom, 2=left, 3=right
            const edge = Math.floor(Math.random() * 4);
            const vw = window.innerWidth;
            const vh = window.innerHeight;

            let startX, startY, endX, endY;

            if (edge === 0) {          // top → drift downward
                startX = Math.random() * vw;
                startY = -20;
                endX = startX + (Math.random() - 0.5) * 200;
                endY = vh * (0.3 + Math.random() * 0.5);
            } else if (edge === 1) {   // bottom → drift upward
                startX = Math.random() * vw;
                startY = vh + 20;
                endX = startX + (Math.random() - 0.5) * 200;
                endY = vh * (0.2 + Math.random() * 0.4);
            } else if (edge === 2) {   // left → drift rightward
                startX = -20;
                startY = Math.random() * vh;
                endX = vw * (0.2 + Math.random() * 0.4);
                endY = startY + (Math.random() - 0.5) * 200;
            } else {                   // right → drift leftward
                startX = vw + 20;
                startY = Math.random() * vh;
                endX = vw * (0.4 + Math.random() * 0.4);
                endY = startY + (Math.random() - 0.5) * 200;
            }

            el.style.left = startX + 'px';
            el.style.top  = startY + 'px';
            el.style.fontSize = (10 + Math.random() * 18) + 'px';
            el.style.opacity = 0.5 + Math.random() * 0.5;

            // RGB split: red copy offset left, cyan copy offset right
            const ox = 2 + Math.random() * 3;
            const oy = (Math.random() - 0.5) * 2;
            el.style.textShadow = `
                -${ox}px ${oy}px 0 rgba(255,0,0,0.85),
                 ${ox}px ${-oy}px 0 rgba(0,255,255,0.85)
            `;

            const duration = 1800 + Math.random() * 2200;
            el.style.transition = `transform ${duration}ms linear, opacity ${duration}ms ease`;

            document.body.appendChild(el);
            activeDigits.push(el);

            // Trigger animation after paint
            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    el.style.transform = `translate(${endX - startX}px, ${endY - startY}px)`;
                    el.style.opacity = '0';
                });
            });

            setTimeout(() => {
                el.remove();
                activeDigits = activeDigits.filter(d => d !== el);
            }, duration + 100);
        }

        // ── Glitch portrait extras ────────────────────────────────────────
        const ghostRed  = document.getElementById('v-ghost-red');
        const ghostCyan = document.getElementById('v-ghost-cyan');
        const tearBar   = document.getElementById('verlierer-tear');
        let tearRafId   = null;
        let ghostRafId  = null;

        function animateTear() {
            // Randomly flash a tear bar at a random Y position
            const delay = 300 + Math.random() * 1200;
            tearRafId = setTimeout(() => {
                const yPct = 5 + Math.random() * 85;
                tearBar.style.top    = yPct + '%';
                tearBar.style.opacity = '1';
                tearBar.style.height  = (2 + Math.random() * 8) + 'px';
                // Offset the bar horizontally for extra chaos
                tearBar.style.transform = `translateX(${(Math.random()-0.5)*20}px)`;
                setTimeout(() => {
                    tearBar.style.opacity = '0';
                    tearBar.style.transform = '';
                }, 60 + Math.random() * 80);
                animateTear(); // schedule next tear
            }, delay);
        }

        function animateGhosts() {
            function pulse() {
                const ox = 3 + Math.random() * 7;
                const oy = (Math.random() - 0.5) * 6;
                ghostRed.style.transform  = `translate(-${ox}px, ${oy}px)`;
                ghostCyan.style.transform = `translate(${ox}px, ${-oy}px)`;
                ghostRed.style.opacity    = 0.3 + Math.random() * 0.35;
                ghostCyan.style.opacity   = 0.3 + Math.random() * 0.35;
                ghostRafId = setTimeout(pulse, 80 + Math.random() * 120);
            }
            pulse();
        }

        function startVerlierer() {
            getDesaturateTargets().forEach(el => {
                if (el) {
                    el.classList.remove('verlierer-desaturate-off');
                    el.classList.add('verlierer-desaturate');
                }
            });
            verliererCard.classList.add('glitch-active');
            binaryInterval = setInterval(spawnDigit, 120);
            for (let i = 0; i < 12; i++) setTimeout(spawnDigit, i * 60);
            animateTear();
            animateGhosts();
        }

        function stopVerlierer() {
            getDesaturateTargets().forEach(el => {
                if (el) {
                    el.classList.remove('verlierer-desaturate');
                    el.classList.add('verlierer-desaturate-off');
                }
            });
            verliererCard.classList.remove('glitch-active');
            clearInterval(binaryInterval);
            binaryInterval = null;
            activeDigits.forEach(el => el.remove());
            activeDigits = [];
            // Reset glitch extras
            clearTimeout(tearRafId);
            clearTimeout(ghostRafId);
            tearBar.style.opacity = '0';
            ghostRed.style.opacity    = '0';
            ghostCyan.style.opacity   = '0';
            ghostRed.style.transform  = '';
            ghostCyan.style.transform = '';
        }

        verliererCard.addEventListener('mouseenter', startVerlierer);
        verliererCard.addEventListener('mouseleave', stopVerlierer);
    </script>


<script>
/* ── Fvyina purple lightning sparks ──────────────────────────────────────── */
(function() {
    const card   = document.getElementById('fvyina-card');
    const canvas = document.getElementById('fvyina-sparks');
    if (!card || !canvas) return;

    const ctx = canvas.getContext('2d');
    const COLORS = ['#DE98FF','#C87FFF','#B060EE','#E8B8FF','#9945DD','#F0D0FF','#CC88FF','#AA55EE'];

    let sparks     = [];
    let rafId      = null;   /* MUST be declared or cancelAnimationFrame blows up */
    let spawning   = false;
    let lingering  = false;
    let spawnTimer = 0;
    let fadeAlpha  = 1;

    function resize() {
        canvas.width  = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }

    function makeSpark() {
        const w = canvas.width, h = canvas.height;
        const side = Math.floor(Math.random() * 4);
        let x, y;
        if      (side === 0) { x = Math.random() * w; y = Math.random() * 18; }
        else if (side === 1) { x = w - Math.random() * 18; y = Math.random() * h; }
        else if (side === 2) { x = Math.random() * w; y = h - Math.random() * 18; }
        else                 { x = Math.random() * 18; y = Math.random() * h; }
        return {
            x, y,
            color:   COLORS[Math.floor(Math.random() * COLORS.length)],
            life:    0,
            maxLife: 35 + Math.random() * 30,
            angle:   Math.random() * Math.PI * 2,
            len:     6 + Math.random() * 14,
            width:   0.8 + Math.random() * 1.2,
            fork:    Math.random() < 0.35 ? {
                angle: Math.random() * Math.PI * 2,
                len:   4 + Math.random() * 8
            } : null
        };
    }

    function drawSpark(s) {
        const t     = s.life / s.maxLife;
        const alpha = t < 0.3 ? t / 0.3 : 1 - (t - 0.3) / 0.7;
        const dx    = Math.cos(s.angle) * s.len;
        const dy    = Math.sin(s.angle) * s.len;
        const jag   = (Math.random() - 0.5) * 8;
        const mx    = s.x + dx * 0.5 + jag;
        const my    = s.y + dy * 0.5 + jag;

        ctx.save();
        ctx.globalAlpha = alpha * 0.95;
        ctx.strokeStyle = s.color;
        ctx.lineWidth   = s.width * (1 - t * 0.5);
        ctx.shadowColor = s.color;
        ctx.shadowBlur  = 6 + Math.random() * 4;
        ctx.lineCap     = 'round';
        ctx.beginPath();
        ctx.moveTo(s.x, s.y);
        ctx.lineTo(mx, my);
        ctx.lineTo(s.x + dx, s.y + dy);
        ctx.stroke();

        if (s.fork) {
            ctx.lineWidth = s.width * 0.4;
            ctx.beginPath();
            ctx.moveTo(mx, my);
            ctx.lineTo(mx + Math.cos(s.fork.angle) * s.fork.len,
                       my + Math.sin(s.fork.angle) * s.fork.len);
            ctx.stroke();
        }

        ctx.beginPath();
        ctx.arc(s.x, s.y, Math.max(0, 1.5 * (1 - t)), 0, Math.PI * 2);
        ctx.fillStyle = '#fff';
        ctx.globalAlpha = alpha * 0.7;
        ctx.fill();
        ctx.restore();
    }

    function loop() {
        resize();
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        if (spawning) {
            spawnTimer++;
            if (spawnTimer >= 2) { sparks.push(makeSpark()); spawnTimer = 0; }
            while (sparks.length < 8) sparks.push(makeSpark());
            fadeAlpha = 1;
            canvas.style.opacity = '1';
        }

        sparks = sparks.filter(s => s.life < s.maxLife);
        sparks.forEach(s => { s.life++; drawSpark(s); });

        if (lingering && sparks.length === 0) {
            fadeAlpha -= 0.05;
            canvas.style.opacity = Math.max(0, fadeAlpha);
            if (fadeAlpha <= 0) {
                lingering = false;
                rafId = null;
                return; /* stop — next mouseenter calls loop() fresh */
            }
        }

        rafId = requestAnimationFrame(loop);
    }

    card.addEventListener('mouseenter', () => {
        if (rafId !== null) cancelAnimationFrame(rafId);
        rafId      = null;
        spawning   = true;
        lingering  = false;
        spawnTimer = 0;
        fadeAlpha  = 1;
        canvas.style.opacity = '1';
        loop();
    });

    card.addEventListener('mouseleave', () => {
        spawning  = false;
        lingering = true;
    });

    window.addEventListener('resize', resize);
    resize();
})();
</script>
</body>
</html>