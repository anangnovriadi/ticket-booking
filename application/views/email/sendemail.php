<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Admin Reni Jaya Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <div>
        Lakukan Pembayaran sebesar <b>Rp.<?php echo $total_harga; ?></b> Ke No Rekening BCA : 3810155271(Atas Nama Reni Jaya Travel),
        <br />
        Konfirmasi Pembayaran dengan cara menunjukkan kode transaksi <b><?php echo $kode_transaksi; ?></b> dan mengirimkan bukti transfer via Whatsapp : 082 143463188
        <br /><br />
        <b>Jika pembayaran dilakukan kurang dari 1 x 24 jam maka transaksi akan dibatalkan</b>
        <br />
        <a>Klik <a href="<?php echo base_url('/pembatalan'); ?>"><b>disini</b></a> jika sudah melakukan pembayaran dan igin membatalkan!</a>
    </div>
</body>
</html>