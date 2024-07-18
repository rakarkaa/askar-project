<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url('Home/visitor') ?>" method="post">
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Nama">
        </div>
        <div>
            <label for="">Instagram</label>
            <input type="text" name="instagram" placeholder="Instagram">
        </div>
        <div>
            <label for="">Pilih Paket</label>
            <select name="paket" id="paket">
                <option value="Wedding">Wedding</option>
                <option value="Akad Only">Akad Only</option>
                <option value="Engagement">Engagement</option>
                <option value="Postwedding">Postwedding</option>
                <option value="Bundling 1 (Engagement & Wedding)">Bundling 1 (Engagement & Wedding)</option>
                <option value="Bundling 2 (Siraman, Engagement & Wedding)">Bundling 2 (Siraman, Engagement & Wedding)</option>
            </select>
        </div>
        <div>
            <label for="">Estimasi Lokasi</label>
            <input type="text" name="estimasi" placeholder="Estimasi Venue Anda">
        </div>
        <div>
            <label for="">Kisaran Budget</label>
            <select name="budget" id="budget">
                <option value="< 5 Juta">5 Juta</option>
                <option value="5 - 10 Juta">5 - 10 Juta</option>
                <option value="10 - 15 Juta">10 - 15 Juta</option>
                <option value="> 20 Juta">> 20 Juta</option>
            </select>
        </div>
        <div>
            <label for="">Darimana Anda Mengetahui Askar Photography ?</label>
            <select name="q1" id="q1">
                <option value="Instagram">Instagram</option>
                <option value="Facebook">Facebook</option>
                <option value="Google">Google</option>
                <option value="Tiktok">Tiktok</option>
                <option value="Teman / Keluarga / Saudara">Teman / Keluarga / Saudara</option>
                <option value="Pameran">Pameran</option>
                <option value="Wedding Vendor">Wedding Vendor</option>
            </select>
        </div>
        <div>
            <label for="">Mengapa Anda Memilih Askar Photography ?</label>
            <input type="text" name="q2" placeholder="Tulis Disini">
        </div>
        <button type="submit">Dapatkan Pricelist</button>
    </form>
</body>

</html>