<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-3">About Me</h1>
        <img src="<?= BASEURL; ?>/img/profile.jpeg" alt="Ahmad Taufik Rahman" width="200" clas s="mb-3 rounded-circle shadow">
        <p>Halo nama saya <?= $data['nama']; ?>, dan pekerjaan saya adalah <?= $data['pekerjaan']; ?>.</p>
    </div>
</body>

</html>