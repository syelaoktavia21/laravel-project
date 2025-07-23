<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis AI untuk SD - Kaltim Cerdas Digital</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --success: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
            --warning: #f72585;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f0f7ff;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, #4361ee, #3a0ca3);
            color: white;
            padding: 20px 0;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 60px;
            margin-right: 15px;
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .logo-subtext {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .user-info {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 50px;
            display: flex;
            align-items: center;
        }
        
        .user-info i {
            margin-right: 8px;
            font-size: 1.2rem;
        }
        
        .main-content {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .quiz-section {
            flex: 3;
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }
        
        .section-title {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 3px solid #4361ee;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 12px;
        }
        
        .question-card {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        
        .question-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .question-number {
            background: var(--primary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-right: 15px;
        }
        
        .question-text {
            font-size: 1.3rem;
            font-weight: 500;
            color: var(--dark);
            flex: 1;
        }
        
        .options {
            display: grid;
            grid-template-columns: 1fr;
            gap: 12px;
        }
        
        .option {
            background: white;
            padding: 15px 20px;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid #e0e0e0;
            display: flex;
            align-items: center;
        }
        
        .option:hover {
            transform: translateY(-3px);
            border-color: var(--primary);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.1);
        }
        
        .option.selected {
            background: #e6eeff;
            border-color: var(--primary);
        }
        
        .option input {
            margin-right: 15px;
            width: 20px;
            height: 20px;
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .btn {
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn i {
            margin-right: 10px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(67, 97, 238, 0.4);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background: rgba(67, 97, 238, 0.1);
        }
        
        .sidebar {
            flex: 1;
        }
        
        .card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            padding: 25px;
            margin-bottom: 30px;
        }
        
        .card-title {
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .card-title i {
            margin-right: 10px;
        }
        
        .score-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        .form-group label {
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        .form-control {
            padding: 14px;
            border-radius: 12px;
            border: 2px solid #ddd;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .leaderboard-list {
            list-style: none;
        }
        
        .leaderboard-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 12px;
            background: #f8f9fa;
            transition: transform 0.3s ease;
        }
        
        .leaderboard-item:hover {
            transform: translateX(5px);
            background: #e9ecef;
        }
        
        .rank {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .rank-1 { background: #ffd700; }
        .rank-2 { background: #c0c0c0; }
        .rank-3 { background: #cd7f32; }
        
        .player-info {
            flex: 1;
        }
        
        .player-name {
            font-weight: 600;
            margin-bottom: 4px;
        }
        
        .player-score {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.2rem;
        }
        
        .progress-container {
            margin-top: 15px;
            background: #e9ecef;
            border-radius: 10px;
            height: 12px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--success));
            border-radius: 10px;
        }
        
        footer {
            background: linear-gradient(135deg, #3a0ca3, #4361ee);
            color: white;
            padding: 30px 0;
            border-radius: 20px 20px 0 0;
            margin-top: 40px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .copyright {
            font-size: 1rem;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }
        
        .result-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }
        
        .result-modal.active {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-content {
            background: white;
            width: 90%;
            max-width: 500px;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            position: relative;
            transform: translateY(50px);
            transition: transform 0.4s ease;
        }
        
        .result-modal.active .modal-content {
            transform: translateY(0);
        }
        
        .close-modal {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.5rem;
            cursor: pointer;
            color: #777;
        }
        
        .result-icon {
            font-size: 5rem;
            color: #4cc9f0;
            margin-bottom: 20px;
        }
        
        .result-title {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        .result-score {
            font-size: 3rem;
            font-weight: 800;
            color: var(--success);
            margin: 20px 0;
        }
        
        .result-message {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #555;
        }
        
        .quiz-info {
            display: flex;
            justify-content: space-around;
            margin: 25px 0;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 12px;
        }
        
        .info-item {
            text-align: center;
        }
        
        .info-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .info-label {
            color: #777;
        }
        
        @media (max-width: 992px) {
            .main-content {
                flex-direction: column;
            }
            
            .header-content {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .logo {
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .action-buttons {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
            }
            
            .quiz-info {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTAgMjUwIj48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMTI1IDMwTDE4Ny4xMjYgNjguNzVIMTYyLjV2OTMuNzVoLTc1VjY4Ljc1SDYyLjg3NEwxMjUgMzB6Ii8+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTEyNSAyMjBjLTI0Ljg1MiAwLTQ1LTIwLjE0OC00NS00NXMxOS45OTUtNDUgNDUtNDUgNDUgMjAuMTQ4IDQ1IDQ1LTIwLjE0OCA0NS00NSA0NXptMC04MGMtMTkuMjQ5IDAtMzUgMTUuNzUxLTM1IDM1czE1Ljc1MSAzNSAzNSAzNSAzNS0xNS43NTEgMzUtMzUtMTUuNzUxLTM1LTM1LTM1eiIvPjwvc3ZnPg==" alt="Logo">
                    <div>
                        <div class="logo-text">Kaltim Cerdas Digital</div>
                        <div class="logo-subtext">Belajar Kecerdasan Artifisial untuk SD</div>
                    </div>
                </div>
                <div class="user-info">
                    <i class="fas fa-user-graduate"></i>
                    <span>Selamat datang, <span id="student-name">Siswa</span></span>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="main-content">
            <section class="quiz-section">
                <h2 class="section-title">
                    <i class="fas fa-robot"></i> Kuis Kecerdasan Artifisial
                </h2>
                
                <div class="question-card">
                    <div class="question-header">
                        <div class="question-number">1</div>
                        <div class="question-text">Apa yang dimaksud dengan Kecerdasan Artifisial (AI)?</div>
                    </div>
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="q1" value="A">
                            Kecerdasan yang dimiliki oleh manusia
                        </label>
                        <label class="option">
                            <input type="radio" name="q1" value="B">
                            Kecerdasan yang dimiliki oleh robot dan komputer
                        </label>
                        <label class="option">
                            <input type="radio" name="q1" value="C">
                            Kecerdasan hewan dalam menyelesaikan masalah
                        </label>
                        <label class="option">
                            <input type="radio" name="q1" value="D">
                            Kecerdasan tumbuhan dalam bertahan hidup
                        </label>
                    </div>
                </div>
                
                <div class="question-card">
                    <div class="question-header">
                        <div class="question-number">2</div>
                        <div class="question-text">Contoh alat yang menggunakan kecerdasan artifisial adalah...</div>
                    </div>
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="q2" value="A">
                            Asisten virtual seperti Siri atau Google Assistant
                        </label>
                        <label class="option">
                            <input type="radio" name="q2" value="B">
                            Kalkulator biasa
                        </label>
                        <label class="option">
                            <input type="radio" name="q2" value="C">
                            Jam tangan analog
                        </label>
                        <label class="option">
                            <input type="radio" name="q2" value="D">
                            Bola lampu
                        </label>
                    </div>
                </div>
                
                <div class="question-card">
                    <div class="question-header">
                        <div class="question-number">3</div>
                        <div class="question-text">Apa manfaat kecerdasan artifisial dalam kehidupan sehari-hari?</div>
                    </div>
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="q3" value="A">
                            Membantu menyelesaikan pekerjaan lebih cepat
                        </label>
                        <label class="option">
                            <input type="radio" name="q3" value="B">
                            Membuat manusia menjadi malas
                        </label>
                        <label class="option">
                            <input type="radio" name="q3" value="C">
                            Menggantikan semua pekerjaan manusia
                        </label>
                        <label class="option">
                            <input type="radio" name="q3" value="D">
                            Membuat cuaca menjadi lebih dingin
                        </label>
                    </div>
                </div>
                
                <div class="question-card">
                    <div class="question-header">
                        <div class="question-number">4</div>
                        <div class="question-text">Robot yang bisa belajar dari pengalaman adalah contoh...</div>
                    </div>
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="q4" value="A">
                            Kecerdasan Artifisial
                        </label>
                        <label class="option">
                            <input type="radio" name="q4" value="B">
                            Kekuatan super
                        </label>
                        <label class="option">
                            <input type="radio" name="q4" value="C">
                            Keajaiban alam
                        </label>
                        <label class="option">
                            <input type="radio" name="q4" value="D">
                            Sihir
                        </label>
                    </div>
                </div>
                
                <div class="question-card">
                    <div class="question-header">
                        <div class="question-number">5</div>
                        <div class="question-text">Kecerdasan Artifisial bisa membantu di bidang berikut, kecuali...</div>
                    </div>
                    <div class="options">
                        <label class="option">
                            <input type="radio" name="q5" value="A">
                            Membuat manusia tidak perlu belajar lagi
                        </label>
                        <label class="option">
                            <input type="radio" name="q5" value="B">
                            Membantu dokter mendiagnosa penyakit
                        </label>
                        <label class="option">
                            <input type="radio" name="q5" value="C">
                            Membantu petani meningkatkan hasil panen
                        </label>
                        <label class="option">
                            <input type="radio" name="q5" value="D">
                            Membantu prediksi cuaca
                        </label>
                    </div>
                </div>
                
                <div class="action-buttons">
                    <button class="btn btn-outline">
                        <i class="fas fa-redo"></i> Reset Jawaban
                    </button>
                    <button class="btn btn-primary" id="submit-btn">
                        <i class="fas fa-paper-plane"></i> Kirim Jawaban
                    </button>
                </div>
            </section>
            
            <aside class="sidebar">
                <div class="card">
                    <h3 class="card-title">
                        <i class="fas fa-user-circle"></i> Informasi Siswa
                    </h3>
                    <div class="score-form">
                        <div class="form-group">
                            <label for="student-name-input">Nama Lengkap</label>
                            <input type="text" id="student-name-input" class="form-control" placeholder="Masukkan nama Anda">
                        </div>
                        <button class="btn btn-primary" id="save-name-btn">
                            <i class="fas fa-save"></i> Simpan Nama
                        </button>
                    </div>
                    
                    <div class="quiz-info">
                        <div class="info-item">
                            <div class="info-value">5</div>
                            <div class="info-label">Soal</div>
                        </div>
                        <div class="info-item">
                            <div class="info-value" id="score-display">0</div>
                            <div class="info-label">Skor</div>
                        </div>
                    </div>
                    
                    <div class="progress-container">
                        <div class="progress-bar" id="progress-bar" style="width: 0%"></div>
                    </div>
                </div>
                
                <div class="card">
                    <h3 class="card-title">
                        <i class="fas fa-trophy"></i> Papan Skor
                    </h3>
                    <ul class="leaderboard-list" id="leaderboard">
                        <li class="leaderboard-item">
                            <div class="rank rank-1">1</div>
                            <div class="player-info">
                                <div class="player-name">Budi Santoso</div>
                                <div class="player-score">100</div>
                            </div>
                        </li>
                        <li class="leaderboard-item">
                            <div class="rank rank-2">2</div>
                            <div class="player-info">
                                <div class="player-name">Ani Wijaya</div>
                                <div class="player-score">95</div>
                            </div>
                        </li>
                        <li class="leaderboard-item">
                            <div class="rank rank-3">3</div>
                            <div class="player-info">
                                <div class="player-name">Citra Permata</div>
                                <div class="player-score">90</div>
                            </div>
                        </li>
                        <li class="leaderboard-item">
                            <div class="rank">4</div>
                            <div class="player-info">
                                <div class="player-name">Dewi Anggraini</div>
                                <div class="player-score">85</div>
                            </div>
                        </li>
                        <li class="leaderboard-item">
                            <div class="rank">5</div>
                            <div class="player-info">
                                <div class="player-name">Eko Prasetyo</div>
                                <div class="player-score">80</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="copyright">
                    &copy; 2023 Kaltim Cerdas Digital. Semua hak dilindungi.
                </div>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fas fa-radio"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="result-modal" id="result-modal">
        <div class="modal-content">
            <div class="close-modal" id="close-modal">&times;</div>
            <div class="result-icon">
                <i class="fas fa-robot"></i>
            </div>
            <h2 class="result-title">Hasil Kuis AI</h2>
            <div class="result-score" id="final-score">0</div>
            <p class="result-message" id="result-message">Selamat! Kamu telah menyelesaikan kuis tentang Kecerdasan Artifisial.</p>
            
            <div class="quiz-info">
                <div class="info-item">
                    <div class="info-value" id="correct-answers">0</div>
                    <div class="info-label">Benar</div>
                </div>
                <div class="info-item">
                    <div class="info-value" id="wrong-answers">0</div>
                    <div class="info-label">Salah</div>
                </div>
            </div>
            
            <button class="btn btn-primary" id="close-result-btn">
                <i class="fas fa-check-circle"></i> Tutup
            </button>
        </div>
    </div>
    
    <script>
        // Simulasi koneksi ke PostgreSQL
        const scores = [
            { id: 1, name: "Budi Santoso", score: 100 },
            { id: 2, name: "Ani Wijaya", score: 95 },
            { id: 3, name: "Citra Permata", score: 90 },
            { id: 4, name: "Dewi Anggraini", score: 85 },
            { id: 5, name: "Eko Prasetyo", score: 80 }
        ];
        
        // Fungsi untuk menyimpan skor ke database
        function saveScoreToDB(name, score) {
            // Simulasi AJAX request ke backend
            console.log(`Menyimpan skor ke database: ${name} - ${score}`);
            
            // Tambahkan skor baru ke array
            const newId = scores.length > 0 ? Math.max(...scores.map(s => s.id)) + 1 : 1;
            scores.push({ id: newId, name, score });
            
            // Urutkan berdasarkan skor tertinggi
            scores.sort((a, b) => b.score - a.score);
            
            // Update leaderboard
            updateLeaderboard();
            
            // Update skor di UI
            document.getElementById('score-display').textContent = score;
            document.getElementById('progress-bar').style.width = `${score}%`;
        }
        
        // Fungsi untuk mengupdate leaderboard
        function updateLeaderboard() {
            const leaderboard = document.getElementById('leaderboard');
            leaderboard.innerHTML = '';
            
            scores.slice(0, 5).forEach((student, index) => {
                const rankClass = index === 0 ? 'rank-1' : 
                                index === 1 ? 'rank-2' : 
                                index === 2 ? 'rank-3' : '';
                
                const item = document.createElement('li');
                item.className = 'leaderboard-item';
                item.innerHTML = `
                    <div class="rank ${rankClass}">${index + 1}</div>
                    <div class="player-info">
                        <div class="player-name">${student.name}</div>
                        <div class="player-score">${student.score}</div>
                    </div>
                `;
                leaderboard.appendChild(item);
            });
        }
        
        // Simpan nama siswa
        document.getElementById('save-name-btn').addEventListener('click', function() {
            const nameInput = document.getElementById('student-name-input');
            const name = nameInput.value.trim();
            
            if (name) {
                document.getElementById('student-name').textContent = name;
                nameInput.value = '';
                alert(`Nama "${name}" berhasil disimpan!`);
            } else {
                alert('Silakan masukkan nama Anda terlebih dahulu.');
            }
        });
        
        // Submit jawaban
        document.getElementById('submit-btn').addEventListener('click', function() {
            // Hitung skor (dalam contoh ini skor tetap 85)
            const score = 85;
            const correctAnswers = 4;
            const wrongAnswers = 1;
            const studentName = document.getElementById('student-name').textContent;
            
            // Simpan skor ke database
            saveScoreToDB(studentName, score);
            
            // Tampilkan hasil
            document.getElementById('final-score').textContent = score;
            document.getElementById('correct-answers').textContent = correctAnswers;
            document.getElementById('wrong-answers').textContent = wrongAnswers;
            
            // Tampilkan pesan berdasarkan skor
            let message = '';
            if (score >= 90) {
                message = "Luar biasa! Kamu sangat mengerti tentang Kecerdasan Artifisial.";
            } else if (score >= 70) {
                message = "Bagus! Pengetahuanmu tentang AI sudah cukup baik.";
            } else {
                message = "Terus belajar ya! AI adalah teknologi masa depan yang penting.";
            }
            document.getElementById('result-message').textContent = message;
            
            // Tampilkan modal
            document.getElementById('result-modal').classList.add('active');
        });
        
        // Tutup modal
        document.getElementById('close-modal').addEventListener('click', function() {
            document.getElementById('result-modal').classList.remove('active');
        });
        
        document.getElementById('close-result-btn').addEventListener('click', function() {
            document.getElementById('result-modal').classList.remove('active');
        });
        
        // Inisialisasi leaderboard
        updateLeaderboard();
        
        // Animasi untuk pilihan
        const options = document.querySelectorAll('.option');
        options.forEach(option => {
            option.addEventListener('click', function() {
                options.forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                
                // Tandai radio button yang dipilih
                const radio = this.querySelector('input[type="radio"]');
                radio.checked = true;
            });
        });
    </script>
</body>
</html>