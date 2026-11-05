<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>SimpleTask - Yeni Görev Ekle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Yeni Görev Ekle</h1>
        <form action="#" method="post">
            <label for="title">Görev Başlığı:</label><br>
            <input type="text" id="title" name="title" placeholder="Örn: Veritabanı tasarımı yap"><br><br>
            
            <label for="desc">Detaylar:</label><br>
            <textarea id="desc" name="desc" placeholder="Görev detayları..."></textarea><br><br>
            
            <button type="submit" style="background:#007bff; color:#fff; padding:8px 15px; border:none; border-radius:4px; cursor:pointer;">Kaydet</button>
            <a href="index.php" style="margin-left: 10px;">İptal</a>
        </form>
    </div>
</body>
</html>