<?php
    
    // tangkap request class_fruit
    require_once 'class_nilai.php';
    
    $ns1 = new NilaiSantri('Fulan',70);
    $ns2 = new NilaiSantri('Badu',69);
    $ns3 = new NilaiSantri('Usro',85);
    $ns4 = new NilaiSantri('Jarwo',40);
    $ar_santri = [$ns1, $ns2, $ns3, $ns4];   
?>

<table style="border-collapse: collapse; width: 100%; border: 1px solid #000;">
    <thead>
        <tr>
            <th style="border: 1px solid #000;">No</th>
            <th style="border: 1px solid #000;">Nama</th>
            <th style="border: 1px solid #000;">Nilai</th>
            <th style="border: 1px solid #000;">Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($ar_santri as $san) {
            echo '<tr>';
            echo '<td style="border: 1px solid #000;">' . $nomor . '</td>';
            echo '<td style="border: 1px solid #000;">' . $san->nama . '</td>';
            echo '<td style="border: 1px solid #000;">' . $san->nilai . '</td>';
            echo '<td style="border: 1px solid #000;">' . $san->gethasil() . '</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>
