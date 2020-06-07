<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total= 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total, 0, ',','.');
                
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url() ?>dashboard/proses_pesanan" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">

                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">

                <label>No. Telepon</label>
                <input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control">

                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>Tiki</option>
                        <option>Post Indonesia</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BCA -   xxxxx</option>
                        <option>BNI -   xxxxx</option>
                        <option>MANDIRI -   xxxxx</option>
                   </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
                
            </div>
            </form>

            <?php
                }else {
                    echo '<h4>Keranjang Belanja Anda Masih Kososng';
                }
            ?>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>