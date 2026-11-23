<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Pembuat - Gusade</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f5f9;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 48px 16px;
        }

        .profile-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 720px;
            border-radius: 12px;
            padding: 40px 36px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
            border: 1px solid #e2e8f0;
            text-align: center;
        }

        .section-title {
            font-size: 22px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 12px;
        }

        .accent-line {
            width: 44px;
            height: 3px;
            background-color: #16a34a;
            border-radius: 2px;
            margin: 0 auto 24px auto;
        }

        .avatar {
            width: 112px;
            height: 112px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            margin: 0 auto 18px auto;
            border: 3px solid #f1f5f9;
        }

        .full-name {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            margin-bottom: 6px;
        }

        .role-subtitle {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 28px;
        }

        .info-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 18px 22px;
            text-align: left;
            font-size: 14px;
            color: #334155;
            line-height: 1.7;
        }

        .info-box p {
            margin-bottom: 6px;
        }

        .info-box p:last-child {
            margin-bottom: 0;
        }

        .info-box strong {
            color: #0f172a;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <h1 class="section-title">Tentang Pembuat</h1>
        <div class="accent-line"></div>

        <!-- Pastikan file foto sudah disimpan di public/images/gusade.jpg -->
        <img 
            src="{{ asset('images/gusade.jpg') }}" 
            alt="Foto Ida Bagus Ade Artha Yoga" 
            class="avatar"
            onerror="this.src='https://ui-avatars.com/api/?name=Ida+Bagus+Ade+Artha+Yoga&background=16a34a&color=fff&size=200'"
        >

        <h2 class="full-name">IDA BAGUS ADE ARTHA YOGA</h2>
        <p class="role-subtitle">Mahasiswa Pengembangan Web</p>

        <div class="info-box">
            <p><strong>NIM:</strong> 2413231022</p>
            <p><strong>Program Studi:</strong>INFORMATIKA</p>
            <!-- Tambahkan baris informasi lain di bawah ini jika diperlukan -->
        </div>
    </div>

</body>
</html>