<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peraturan & Dokumen - Dana Pensiun Bank Riau Kepri</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            color: #333;
            line-height: 1.6;
        }

        .page-header {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(22, 163, 74, 0.3);
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(251, 191, 36, 0.2) 0%, transparent 70%);
            border-radius: 50%;
        }

        .page-header h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            position: relative;
            z-index: 1;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        /* Tabs Navigation */
        .tabs-navigation {
            display: flex;
            gap: 1rem;
            margin-bottom: 3rem;
            border-bottom: 3px solid #e5e7eb;
            flex-wrap: wrap;
            background: white;
            padding: 1rem;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .tab-btn {
            padding: 1rem 2rem;
            background: none;
            border: none;
            color: #666;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            position: relative;
            transition: all 0.3s;
            border-radius: 8px;
        }

        .tab-btn:hover {
            color: #16a34a;
            background: #f0fdf4;
        }

        .tab-btn.active {
            color: #16a34a;
            background: #f0fdf4;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1rem;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #16a34a 0%, #fbbf24 100%);
            border-radius: 3px 3px 0 0;
        }

        /* Tab Content */
        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease-in;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Document Section */
        .document-section {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #16a34a;
        }

        .section-title {
            font-size: 1.8rem;
            color: #1a1a1a;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-title i {
            color: #16a34a;
            font-size: 1.5rem;
        }

        .document-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .document-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 1.5rem;
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .document-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #16a34a 0%, #fbbf24 100%);
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .document-card:hover::before {
            transform: scaleX(1);
        }

        .document-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(22, 163, 74, 0.2);
            border-color: #16a34a;
        }

        .document-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(22, 163, 74, 0.3);
        }

        .document-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 0.5rem;
        }

        .document-year {
            display: inline-block;
            background: #fbbf24;
            color: #7c2d12;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .download-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #16a34a;
            font-weight: 600;
            text-decoration: none;
            margin-top: 0.5rem;
            transition: all 0.3s;
        }

        .download-link:hover {
            gap: 0.8rem;
            color: #15803d;
        }

        /* Table for Pensioners */
        .pensioners-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .search-box {
            padding: 1.5rem;
            background: #f8f9fa;
            border-bottom: 2px solid #e5e7eb;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1rem 1rem 3rem;
            border: 2px solid #e5e7eb;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: #16a34a;
            box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 2.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 1.2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: white;
        }

        th {
            padding: 1.2rem;
            text-align: left;
            font-weight: 700;
            font-size: 0.95rem;
        }

        td {
            padding: 1rem 1.2rem;
            border-bottom: 1px solid #f0f0f0;
        }

        tbody tr {
            transition: all 0.3s;
        }

        tbody tr:hover {
            background: #f0fdf4;
        }

        .row-number {
            font-weight: 700;
            color: #16a34a;
        }

        /* Pedoman Grid */
        .pedoman-grid {
            display: grid;
            gap: 1rem;
        }

        .pedoman-item {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.2rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: all 0.3s;
            cursor: pointer;
        }

        .pedoman-item:hover {
            border-color: #16a34a;
            background: #f0fdf4;
            transform: translateX(5px);
        }

        .pedoman-code {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-weight: 700;
            font-size: 0.85rem;
            white-space: nowrap;
        }

        .pedoman-title {
            flex-grow: 1;
            font-weight: 600;
            color: #333;
        }

        .pedoman-icon {
            color: #16a34a;
            font-size: 1.3rem;
        }

        /* Stats Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #16a34a;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(22, 163, 74, 0.2);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #16a34a;
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 800;
            color: #16a34a;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 0.95rem;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }

            .tabs-navigation {
                flex-direction: column;
            }

            .document-grid {
                grid-template-columns: 1fr;
            }

            .search-icon {
                left: 1.5rem;
            }

            table {
                font-size: 0.9rem;
            }

            th,
            td {
                padding: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="page-header">
        <h1><i class="fas fa-gavel"></i> Peraturan & Dokumen</h1>
        <p>Dana Pensiun Bank Riau Kepri</p>
    </div>

    <div class="container">
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="stat-value">28</div>
                <div class="stat-label">Total Dokumen</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-value">138</div>
                <div class="stat-label">Penerima Pensiun</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-value">20</div>
                <div class="stat-label">Pedoman</div>
            </div>
        </div>

        <!-- Tabs Navigation -->
        <div class="tabs-navigation">
            <button class="tab-btn active" onclick="showTab('pdp')">
                <i class="fas fa-gavel"></i> Peraturan Dana Pensiun
            </button>
            <button class="tab-btn" onclick="showTab('pensioners')">
                <i class="fas fa-users"></i> Penerima Pensiun
            </button>
            <button class="tab-btn" onclick="showTab('warta')">
                <i class="fas fa-newspaper"></i> Warta Dapen
            </button>
            <button class="tab-btn" onclick="showTab('pedoman')">
                <i class="fas fa-book"></i> Pedoman
            </button>
        </div>

        <!-- Tab Content: PDP -->
        <div id="pdp" class="tab-content active">
            <div class="document-section">
                <h2 class="section-title">
                    <i class="fas fa-file-contract"></i>
                    Peraturan Dana Pensiun (PDP)
                </h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    Dokumen peraturan resmi Dana Pensiun Bank Riau Kepri yang telah disahkan dan disetujui oleh Otoritas
                    Jasa Keuangan.
                </p>
                <div class="document-grid">
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <span class="document-year">2024</span>
                        <h3 class="document-title">Peraturan Dana Pensiun Bank Riau Kepri 2024</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <span class="document-year">2023</span>
                        <h3 class="document-title">Peraturan Dana Pensiun Bank Riau Kepri 2023</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <span class="document-year">2021</span>
                        <h3 class="document-title">Peraturan Dana Pensiun Bank Riau Kepri 2021</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <span class="document-year">2019</span>
                        <h3 class="document-title">Peraturan Dana Pensiun Bank Riau Kepri 2019</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content: Pensioners -->
        <div id="pensioners" class="tab-content">
            <div class="document-section">
                <h2 class="section-title">
                    <i class="fas fa-users"></i>
                    Daftar Penerima Manfaat Pensiun Normal
                </h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    Daftar lengkap peserta yang telah menerima manfaat pensiun normal dari Dana Pensiun Bank Riau Kepri.
                </p>

                <div class="pensioners-table">
                    <div class="search-box" style="position: relative;">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" id="searchInput"
                            placeholder="Cari nama penerima pensiun..." onkeyup="filterTable()">
                    </div>
                    <table id="pensionersTable">
                        <thead>
                            <tr>
                                <th width="80">No</th>
                                <th>Nama Penerima MP – Pensiun Normal</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <!-- Data will be generated by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tab Content: Warta -->
        <div id="warta" class="tab-content">
            <div class="document-section">
                <h2 class="section-title">
                    <i class="fas fa-newspaper"></i>
                    Warta Dana Pensiun
                </h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    Publikasi berkala yang berisi informasi penting seputar Dana Pensiun Bank Riau Kepri.
                </p>
                <div class="document-grid">
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="document-year">2024</span>
                        <h3 class="document-title">Warta Dana Pensiun Bank Riau Kepri 2024</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="document-year">2023</span>
                        <h3 class="document-title">Warta Dana Pensiun Bank Riau Kepri 2023</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="document-year">2022</span>
                        <h3 class="document-title">Warta Dana Pensiun Bank Riau Kepri 2022</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="document-year">2021</span>
                        <h3 class="document-title">Warta Dana Pensiun Bank Riau Kepri 2021</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="document-year">2020</span>
                        <h3 class="document-title">Warta Dana Pensiun Bank Riau Kepri 2020</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                    <div class="document-card">
                        <div class="document-icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <span class="document-year">2019</span>
                        <h3 class="document-title">Warta Dana Pensiun Bank Riau Kepri 2019</h3>
                        <a href="#" class="download-link">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Content: Pedoman -->
        <div id="pedoman" class="tab-content">
            <div class="document-section">
                <h2 class="section-title">
                    <i class="fas fa-book"></i>
                    Pedoman & Prosedur
                </h2>
                <p style="color: #666; margin-bottom: 2rem;">
                    Kumpulan pedoman dan prosedur operasional standar Dana Pensiun Bank Riau Kepri.
                </p>
                <div class="pedoman-grid" id="pedomanList">
                    <!-- Data will be generated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Pensioners data
        const pensioners = [
            "Supangat", "Warsono", "Asni", "Hartini Koesen", "Erry Wahyuni Nr", "Uniwarti", "T. Idariah",
            "Arifin Nurdin", "Ratna Linggawati", "Frans Zahrul Dinel", "Sri Yuniarti", "Husaini Djamhuri",
            "Faisal Rivaie", "Junaidi Jadri", "Sriyanti Auzar", "Mohd Zailani", "Kaharudin Menteng",
            "Arpan Hais", "Yoke Yulianto", "T. Hamami", "Komaruddin SS", "Harbaity", "Sugeng US",
            "Ahmad Yusuf", "Khairuddin Abu Bakar", "Syahruddin Thoha", "Iswirman", "Nazaruddin",
            "Ferry Nasution", "Muhammad Jamil", "R Zubir Salehan", "Riadul Jannah", "Bambang Harijanto",
            "Awalluddin", "Bachtiar", "Subowo", "Nila Fauziah", "Yetti", "Rafifah", "Syahbirin",
            "Said Effendi", "T.Ilvan Hashmy", "Zainal Rahman", "Jasman", "Syofyan", "Zairin",
            "Syahruddin Thabrie", "Agusalim", "Amir Husin", "R. Nuraini Yusuf", "Zuhri Arsyad",
            "Ilyas Karim", "Sumitri Bibra", "Amirudin", "Said Azmel", "Ratnawati", "Yusafrizal",
            "Miswanto", "Hanafie", "Endah Rosdiarti", "Hedrafni Mustafa", "Khairuddin", "Tumijo",
            "Erly", "Khairul Dahlun", "T. Toyeb", "Roselawati", "Mayroslina", "R. Martinus",
            "Zulisman", "Abu Bakar", "Zammeibar Kahar", "Arsis", "Azwan", "Siswadi", "Irianto",
            "Sudi Sutrisno", "Mujahidin", "Syamsir", "Edy Riduan", "Abdul Wahid", "Muslim",
            "Yenimar", "Zulfiar Azial", "Kamariah", "Ichwan Lubis", "Syafruddin Lasika",
            "Kornelius Maramis", "Mujahidin Jamal", "Joni Ardi", "Edward Fachmi", "Syafrizal",
            "Syamsuddin Hasab", "Marwan Saleh", "Umar Jami", "Khairul Ammar", "Zulkifli",
            "Nur Kadarsih Abadi", "R. Yunan Agustian", "Hasnur Berlian", "Heppy Wardono",
            "M. Yusuf", "Suardi", "Sugiarto", "Afrizal", "Yuzefo", "Oni Suhardi", "Heru Prasetyo",
            "Mukhlis M. Syukur", "Amril Daud", "Ruslan Abdul Gani", "Saepullah", "Nursyamsu",
            "Djafar", "Rafwan", "Nailan Matin", "Suradi", "Sutanto Ongso", "Edi Muhni",
            "Wahyu Hidayat", "Yulia Roza", "Sudarmo", "Syaiful Anwar", "Junaidi M. Zen",
            "Syamsullizar", "Fachruroddin", "Usman Bamas", "Wan Ishak", "Suhaimi Thaib",
            "Zulkifli M. Zen", "Syahrul", "Zaini Ahmad", "Nursal", "Syarkawi Burhan",
            "M. Syukur", "Sayuti Rahman", "Erwin Nasution", "Chairisman Rasahan"
        ];

        // Pedoman data
        const pedoman = [{
                code: "DPBRK-PDM-00-00-02",
                title: "Tata Kelola"
            },
            {
                code: "DPBRK-PDM-01-00-01",
                title: "SPI"
            },
            {
                code: "DPBRK-PDM-02-00-00",
                title: "Perilaku dan Kode Etik"
            },
            {
                code: "DPBRK-PDM-03-00-00",
                title: "Pengelolaan Risiko"
            },
            {
                code: "DPBRK-PDM-04-00-00",
                title: "Pendanan dan Aktuaria"
            },
            {
                code: "DPBRK-PDM-05-00-02",
                title: "Investasi"
            },
            {
                code: "DPBRK-PDM-06-00-01",
                title: "Organisasi dan Tata Kerja"
            },
            {
                code: "DPBRK-PDM-07-00-01",
                title: "Penyusunan Anggaran dan Rencana Bisnis"
            },
            {
                code: "DPBRK-PDM-08-00-01",
                title: "Akuntansi"
            },
            {
                code: "DPBRK-PDM-09-00-00",
                title: "Pelayanan Kepesertaan"
            },
            {
                code: "DPBRK-PDM-10-00-00",
                title: "Sistem Informasi"
            },
            {
                code: "DPBRK-PDM-11-00-00",
                title: "Penjualan-Pelepasan & Penghapusan Aset Inv Bermasalah & Aset Ops"
            },
            {
                code: "DPBRK-PDM-12-00-00",
                title: "Perpajakan"
            },
            {
                code: "DPBRK-PDM-13-00-00",
                title: "Pengadaan Barang dan atau Jasa"
            },
            {
                code: "DPBRK-PDM-14-00-00",
                title: "Pengambilan Keputusan"
            },
            {
                code: "DPBRK-PDM-15-00-00",
                title: "Kearsipan"
            },
            {
                code: "DPBRK-PDM-16-00-01",
                title: "Surat Menyurat"
            },
            {
                code: "DPBRK-PDM-17-00-00",
                title: "Penerapan Manajemen Risiko"
            },
            {
                DPBRK - PDM - 18 - 00 - 00 ", title: "
                Kebijakan Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme "}, {
                code: "DPBRK-PDM-19-00-00",
                title: "Pengelolaan Sumber Daya Manusia"
            }
        ];

        // Generate pensioners table
        function generateTable() {
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';
            pensioners.forEach((name, index) => {
                const row = `
                    <tr>
                        <td class="row-number">${index + 1}</td>
                        <td>${name}</td>
                    </tr>
                `;
                tbody.innerHTML += row;
            });
        }

        // Filter table function
        function filterTable() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toUpperCase();
            const table = document.getElementById('pensionersTable');
            const tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                const td = tr[i].getElementsByTagName('td')[1];
                if (td) {
                    const txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        }

        // Generate pedoman list
        function generatePedoman() {
            const list = document.getElementById('pedomanList');
            list.innerHTML = '';
            pedoman.forEach(item => {
                const pedomanItem = `
                    <div class="pedoman-item">
                        <div class="pedoman-code">${item.code}</div>
                        <div class="pedoman-title">${item.title}</div>
                        <i class="fas fa-download pedoman-icon"></i>
                    </div>
                `;
                list.innerHTML += pedomanItem;
            });
        }

        // Tab switching function
        function showTab(tabName) {
            // Hide all tab contents
            const tabContents = document.getElementsByClassName('tab-content');
            for (let i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove('active');
            }

            // Remove active class from all buttons
            const tabButtons = document.getElementsByClassName('tab-btn');
            for (let i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('active');
            }

            // Show selected tab
            document.getElementById(tabName).classList.add('active');
            event.target.classList.add('active');
        }

        // Initialize on page load
        window.onload = function() {
            generateTable();
            generatePedoman();
        };
    </script>

</body>

</html>
