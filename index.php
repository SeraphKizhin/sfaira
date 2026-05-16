<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFAIRA Wiki | Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="landing-body">
<canvas id="fvyina-rain-canvas"></canvas>

    <nav class="wiki-nav">
        <canvas id="nav-rim-canvas"></canvas>
        <div class="nav-left">
            <canvas id="sfaira-logo-canvas" style="display:block;cursor:default;" aria-label="SFAIRA"></canvas>
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
/* ── SFAIRA gold refractive prism logo ───────────────────────────────────── */
(function () {
    const cvs = document.getElementById('sfaira-logo-canvas');
    if (!cvs) return;
    const ctx = cvs.getContext('2d');

    const FONT_SIZE = 38;
    const FONT = `900 ${FONT_SIZE}px 'Segoe UI', Arial, sans-serif`;
    const TEXT = 'SFAIRA';

    ctx.font = FONT;
    const metrics = ctx.measureText(TEXT);
    const W = Math.ceil(metrics.width) + 20;
    const H = FONT_SIZE + 16;
    cvs.width  = W;
    cvs.height = H;
    cvs.style.width  = W + 'px';
    cvs.style.height = H + 'px';

    const GOLD_STOPS = [
        [0.00, '#4a2e00'],
        [0.08, '#c8860a'],
        [0.18, '#f5d060'],
        [0.28, '#ffe680'],
        [0.38, '#fff4b0'],
        [0.46, '#ffd700'],
        [0.54, '#ffec80'],
        [0.62, '#e8a800'],
        [0.72, '#b06800'],
        [0.82, '#f0c840'],
        [0.90, '#ffe070'],
        [1.00, '#7a4e00'],
    ];

    const SHAFTS = Array.from({length: 6}, (_, i) => ({
        x:      W * (0.08 + i * 0.17),
        width:  8 + Math.random() * 16,
        angle:  -0.25 + Math.random() * 0.5,
        speedA: 0.008 + Math.random() * 0.006,
        speedB: 0.005 + Math.random() * 0.004,
        phase:  Math.random() * Math.PI * 2,
        colorA: `hsla(${35 + Math.floor(Math.random()*25)}, 100%, 75%, 1)`,
        colorB: `hsla(${190 + Math.floor(Math.random()*50)}, 90%, 85%, 1)`,
    }));

    const GLINTS = Array.from({length: 12}, () => ({
        x:     8 + Math.random() * (W - 16),
        y:     2 + Math.random() * (H - 4),
        size:  2.5 + Math.random() * 7,
        rot:   Math.random() * Math.PI,
        speedR: 0.004 + Math.random() * 0.006,
        speedP: 0.018 + Math.random() * 0.022,
        phase: Math.random() * Math.PI * 2,
        hue:   38 + Math.random() * 22,
    }));

    function drawTriangle(x, y, size, rot, alpha, hue) {
        if (size < 0.5) return;
        ctx.save();
        ctx.translate(x, y);
        ctx.rotate(rot);
        ctx.globalAlpha = alpha;
        // soft halo
        const halo = ctx.createRadialGradient(0, 0, 0, 0, 0, size * 2.5);
        halo.addColorStop(0,   `hsla(${hue}, 100%, 95%, 0.7)`);
        halo.addColorStop(0.5, `hsla(${hue}, 100%, 75%, 0.2)`);
        halo.addColorStop(1,   `hsla(${hue}, 100%, 60%, 0)`);
        ctx.beginPath();
        ctx.arc(0, 0, size * 2.5, 0, Math.PI * 2);
        ctx.fillStyle = halo;
        ctx.fill();
        // triangle
        ctx.beginPath();
        ctx.moveTo(0, -size);
        ctx.lineTo( size * 0.866,  size * 0.5);
        ctx.lineTo(-size * 0.866,  size * 0.5);
        ctx.closePath();
        const tg = ctx.createLinearGradient(0, -size, 0, size);
        tg.addColorStop(0, `hsla(${hue+20}, 100%, 98%, 1)`);
        tg.addColorStop(1, `hsla(${hue-10}, 100%, 65%, 0.5)`);
        ctx.fillStyle = tg;
        ctx.fill();
        ctx.restore();
    }

    // Off-screen canvas for text-clipped effects
    const off = document.createElement('canvas');
    off.width  = W;
    off.height = H;
    const octx = off.getContext('2d');

    let t = 0;

    function frame() {
        t += 0.012;
        ctx.clearRect(0, 0, W, H);

        // --- 1. Gold base text ---
        const sweep = Math.sin(t * 0.35) * 0.5 + 0.5;
        const gx1 = W * (sweep - 0.4), gx2 = W * (sweep + 0.7);
        const baseGrad = ctx.createLinearGradient(gx1, 0, gx2, 0);
        GOLD_STOPS.forEach(([p, c]) => baseGrad.addColorStop(p, c));
        ctx.font = FONT;
        ctx.textBaseline = 'middle';
        ctx.fillStyle = baseGrad;
        ctx.fillText(TEXT, 10, H * 0.52);

        // --- 2. Inner effects on offscreen, then mask to text ---
        octx.clearRect(0, 0, W, H);

        // shimmer sweep
        const shimX = ((t * 0.15) % 1.8 - 0.4) * W;
        const shimGrad = octx.createLinearGradient(shimX - 70, 0, shimX + 70, 0);
        shimGrad.addColorStop(0,   'rgba(255,255,255,0)');
        shimGrad.addColorStop(0.35,'rgba(255,245,180,0.5)');
        shimGrad.addColorStop(0.5, 'rgba(255,255,255,0.85)');
        shimGrad.addColorStop(0.65,'rgba(255,245,180,0.5)');
        shimGrad.addColorStop(1,   'rgba(255,255,255,0)');
        octx.fillStyle = shimGrad;
        octx.fillRect(0, 0, W, H);

        // prism shafts
        SHAFTS.forEach(s => {
            const pulse = Math.sin(t * s.speedA * 60 + s.phase) * 0.5 + 0.5;
            const op = 0.10 + 0.30 * pulse;
            const cx = s.x + Math.sin(t * s.speedB * 60 + s.phase + 1) * 25;
            const hw = s.width * (0.7 + 0.3 * pulse);
            const sg = octx.createLinearGradient(cx - hw, 0, cx + hw, 0);
            sg.addColorStop(0,   'rgba(255,255,255,0)');
            sg.addColorStop(0.25, s.colorA.replace('1)', `${op * 0.8})`));
            sg.addColorStop(0.5,  `rgba(255,255,220,${op * 1.3})`);
            sg.addColorStop(0.75, s.colorB.replace('1)', `${op * 0.4})`));
            sg.addColorStop(1,   'rgba(255,255,255,0)');
            octx.save();
            octx.translate(cx, H / 2);
            octx.rotate(s.angle);
            octx.fillStyle = sg;
            octx.fillRect(-hw - 10, -H, hw * 2 + 20, H * 2);
            octx.restore();
        });

        // Blit offscreen onto main canvas masked to text shape
        ctx.save();
        ctx.font = FONT;
        ctx.textBaseline = 'middle';
        ctx.globalCompositeOperation = 'source-atop';
        ctx.drawImage(off, 0, 0);
        ctx.globalCompositeOperation = 'source-over';
        ctx.restore();

        // --- 3. Triangle glints (on top of everything) ---
        GLINTS.forEach(g => {
            const pulse = Math.sin(t * g.speedP + g.phase);
            const alpha = Math.max(0, pulse) * 0.9;
            if (alpha < 0.03) return;
            const sz = g.size * (0.5 + 0.5 * Math.max(0, pulse));
            drawTriangle(g.x, g.y, sz, g.rot + t * g.speedR, alpha, g.hue);
        });

        requestAnimationFrame(frame);
    }

    frame();
})();

/* ── Nav rim gold prism shine ────────────────────────────────────────────── */
(function () {
    const cvs = document.getElementById('nav-rim-canvas');
    if (!cvs) return;
    const ctx = cvs.getContext('2d');
    let W = 0;
    const H = 3;

    function resize() {
        W = cvs.width  = cvs.offsetWidth;
        cvs.height = H;
    }
    resize();
    window.addEventListener('resize', resize);

    // Same gold stops as the logo
    const GOLD_STOPS = [
        [0.00, '#4a2e00'],
        [0.08, '#c8860a'],
        [0.18, '#f5d060'],
        [0.28, '#ffe680'],
        [0.38, '#fff4b0'],
        [0.46, '#ffd700'],
        [0.54, '#ffec80'],
        [0.62, '#e8a800'],
        [0.72, '#b06800'],
        [0.82, '#f0c840'],
        [0.90, '#ffe070'],
        [1.00, '#7a4e00'],
    ];

    // Prism shafts along the rim
    const SHAFTS = Array.from({length: 10}, (_, i) => ({
        xFrac:  i / 9,
        width:  18 + Math.random() * 40,
        speedA: 0.006 + Math.random() * 0.005,
        speedB: 0.004 + Math.random() * 0.003,
        phase:  Math.random() * Math.PI * 2,
        colorA: `hsla(${35 + Math.floor(Math.random()*25)}, 100%, 80%, 1)`,
        colorB: `hsla(${195 + Math.floor(Math.random()*45)}, 90%, 85%, 1)`,
    }));

    // Tiny glint dots along the rim
    const GLINTS = Array.from({length: 18}, () => ({
        xFrac:  Math.random(),
        speedP: 0.02 + Math.random() * 0.025,
        phase:  Math.random() * Math.PI * 2,
        hue:    38 + Math.random() * 20,
    }));

    let t = 0;

    function frame() {
        t += 0.012;
        if (W === 0) { requestAnimationFrame(frame); return; }
        ctx.clearRect(0, 0, W, H);

        // --- Base gold gradient (slowly sweeping) ---
        const sweep = Math.sin(t * 0.35) * 0.5 + 0.5;
        const grad = ctx.createLinearGradient(W * (sweep - 0.4), 0, W * (sweep + 0.7), 0);
        GOLD_STOPS.forEach(([p, c]) => grad.addColorStop(p, c));
        ctx.fillStyle = grad;
        ctx.fillRect(0, 0, W, H);

        // --- Shimmer sweep ---
        const shimX = ((t * 0.13) % 1.9 - 0.4) * W;
        const shimGrad = ctx.createLinearGradient(shimX - 90, 0, shimX + 90, 0);
        shimGrad.addColorStop(0,    'rgba(255,255,255,0)');
        shimGrad.addColorStop(0.35, 'rgba(255,245,180,0.45)');
        shimGrad.addColorStop(0.5,  'rgba(255,255,255,0.9)');
        shimGrad.addColorStop(0.65, 'rgba(255,245,180,0.45)');
        shimGrad.addColorStop(1,    'rgba(255,255,255,0)');
        ctx.fillStyle = shimGrad;
        ctx.fillRect(0, 0, W, H);

        // --- Prism shafts ---
        SHAFTS.forEach(s => {
            const pulse = Math.sin(t * s.speedA * 60 + s.phase) * 0.5 + 0.5;
            const op = 0.08 + 0.28 * pulse;
            const cx = s.xFrac * W + Math.sin(t * s.speedB * 60 + s.phase + 1) * 40;
            const hw = s.width * (0.6 + 0.4 * pulse);
            const sg = ctx.createLinearGradient(cx - hw, 0, cx + hw, 0);
            sg.addColorStop(0,    'rgba(255,255,255,0)');
            sg.addColorStop(0.25, s.colorA.replace('1)', `${op})`));
            sg.addColorStop(0.5,  `rgba(255,255,220,${op * 1.4})`);
            sg.addColorStop(0.75, s.colorB.replace('1)', `${op * 0.35})`));
            sg.addColorStop(1,    'rgba(255,255,255,0)');
            ctx.fillStyle = sg;
            ctx.fillRect(Math.max(0, cx - hw - 10), 0, hw * 2 + 20, H);
        });

        // --- Glint dots ---
        GLINTS.forEach(g => {
            const pulse = Math.sin(t * g.speedP + g.phase);
            const a = Math.max(0, pulse) * 0.95;
            if (a < 0.05) return;
            const gx = g.xFrac * W + Math.sin(t * 0.4 + g.phase) * 15;
            const r = ctx.createRadialGradient(gx, H / 2, 0, gx, H / 2, 8);
            r.addColorStop(0,   `hsla(${g.hue}, 100%, 98%, ${a})`);
            r.addColorStop(0.4, `hsla(${g.hue}, 100%, 80%, ${a * 0.5})`);
            r.addColorStop(1,   `hsla(${g.hue}, 100%, 70%, 0)`);
            ctx.fillStyle = r;
            ctx.fillRect(Math.max(0, gx - 8), 0, 16, H);
        });

        requestAnimationFrame(frame);
    }

    frame();
})();

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

<script>
/* ── Fvyina: rolling rainclouds + soft rain ──────────────────────────────── */
(function () {
    const fvyinaCard = document.getElementById('fvyina-card');
    const rc = document.getElementById('fvyina-rain-canvas');
    if (!fvyinaCard || !rc) return;

    const ctx = rc.getContext('2d');
    let W = 0, H = 0;
    let rafId    = null;
    let fadeDir  = 0;      // +1 = fading in, -1 = fading out, 0 = idle
    let alpha    = 0;      // master opacity 0..1

    /* ── Rain drops ── */
    const DROPS = [];
    const DROP_COUNT = 160;

    function makeDrop() {
        return {
            x:     Math.random() * W,
            y:     Math.random() * H,
            len:   8  + Math.random() * 10,
            speed: 5  + Math.random() * 5,
            op:    0.07 + Math.random() * 0.15,
            w:     0.5 + Math.random() * 0.6,
        };
    }

    function initDrops() {
        DROPS.length = 0;
        for (let i = 0; i < DROP_COUNT; i++) DROPS.push(makeDrop());
    }

    /* ── Clouds ── */
    const LAYERS = [
        { speed: 0.18, yFrac: 0.01, scale: 1.3, op: 0.55, clouds: [] },
        { speed: 0.30, yFrac: 0.07, scale: 1.0, op: 0.45, clouds: [] },
        { speed: 0.45, yFrac: 0.13, scale: 0.7, op: 0.35, clouds: [] },
    ];

    function buildCloud(layer) {
        const n = 5 + Math.floor(Math.random() * 5);
        const puffs = [];
        let cx = 0;
        for (let i = 0; i < n; i++) {
            const r = (28 + Math.random() * 36) * layer.scale;
            puffs.push({ ox: cx, oy: (Math.random() - 0.55) * r * 0.5, r });
            cx += r * (0.85 + Math.random() * 0.3);
        }
        return { x: -cx - 20, y: 0, puffs, totalW: cx };
    }

    function initClouds() {
        LAYERS.forEach(layer => {
            layer.clouds = [];
            for (let i = 0; i < 4; i++) {
                const c = buildCloud(layer);
                c.x = Math.random() * W;           // seed across screen
                c.y = layer.yFrac * H + Math.random() * 80 * layer.scale;
                layer.clouds.push(c);
            }
        });
    }

    function drawCloud(c, layer) {
        ctx.save();
        ctx.globalAlpha = layer.op * alpha;
        c.puffs.forEach(p => {
            const gx = c.x + p.ox, gy = c.y + p.oy;
            const g = ctx.createRadialGradient(gx, gy - p.r * 0.2, p.r * 0.1, gx, gy, p.r);
            g.addColorStop(0,   'rgba(72, 72, 78, 1)');
            g.addColorStop(0.5, 'rgba(50, 50, 56, 0.9)');
            g.addColorStop(1,   'rgba(28, 28, 34, 0)');
            ctx.beginPath();
            ctx.arc(gx, gy, p.r, 0, Math.PI * 2);
            ctx.fillStyle = g;
            ctx.fill();
        });
        ctx.restore();
    }

    /* Per-layer spawn timers so new clouds steadily enter from left */
    const SPAWN_INTERVAL = [420, 280, 190];

    /* ── Core loop ── */
    let frameCount = 0;
    function loop() {
        frameCount++;

        // Advance fade
        if (fadeDir === 1)  alpha = Math.min(1, alpha + 0.012);
        if (fadeDir === -1) alpha = Math.max(0, alpha - 0.008);

        ctx.clearRect(0, 0, W, H);

        // Move + draw clouds; spawn new ones from the left on interval
        LAYERS.forEach((layer, li) => {
            if (frameCount % SPAWN_INTERVAL[li] === 0) {
                const c = buildCloud(layer);
                c.x = -c.totalW - 10;
                c.y = layer.yFrac * H + Math.random() * 80 * layer.scale;
                layer.clouds.push(c);
            }

            layer.clouds = layer.clouds.filter(c => c.x < W + c.totalW + 40);

            layer.clouds.forEach(c => {
                c.x += layer.speed;
                drawCloud(c, layer);
            });
        });

        // Draw rain
        DROPS.forEach(d => {
            d.y += d.speed;
            d.x += d.speed * 0.1;
            if (d.y - d.len > H || d.x > W) { d.x = Math.random() * W; d.y = -d.len; }
            ctx.beginPath();
            ctx.moveTo(d.x, d.y);
            ctx.lineTo(d.x + d.len * 0.1, d.y + d.len);
            ctx.strokeStyle = `rgba(185, 155, 225, ${d.op * alpha})`;
            ctx.lineWidth   = d.w;
            ctx.stroke();
        });

        // Keep running while visible or fading
        if (alpha > 0 || fadeDir === 1) {
            rafId = requestAnimationFrame(loop);
        } else {
            rafId = null;
        }
    }

    function ensureLoop() {
        if (!rafId) rafId = requestAnimationFrame(loop);
    }

    function resize() {
        W = rc.width  = window.innerWidth;
        H = rc.height = window.innerHeight;
    }

    fvyinaCard.addEventListener('mouseenter', () => {
        if (alpha === 0) { initDrops(); initClouds(); } // fresh init only when fully off
        fadeDir = 1;
        ensureLoop();
    });

    fvyinaCard.addEventListener('mouseleave', () => {
        fadeDir = -1;
        ensureLoop();
    });

    window.addEventListener('resize', resize);
    resize();
})();
</script>
</body>
</html>