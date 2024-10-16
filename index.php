<?php

$buku = [
    [
        'judul' => 'Belajar PHP',
        'penulis' => 'Livar',
        'tahun' => 2021
    ],
    [
        'judul' => 'Herman djumafo',
        'penulis' => 'Faisal',
        'tahun' => 2011
    ],
    [
        'judul' => 'Qonrow',
        'penulis' => 'Suep',
        'tahun' => 2014
    ]
];
?>

<html>
<head>
    <link rel ="stylesheet" href="style.css">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar buku </h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $Item): ?>
                <tr>
                <td><?php echo htmlspecialchars($Item['judul']); ?></td>
                 <td><?php echo htmlspecialchars($Item['penulis']); ?></td>
                 <td><?php echo htmlspecialchars($Item['tahun']); ?></td>
                </tr> 
            <?php endforeach; ?>         
            
        </tbody>
    </table>

</body>
</html>