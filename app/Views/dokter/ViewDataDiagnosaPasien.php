<?= $this->extend('templates/sidebar');?>

<?= $this->section('content'); ?>
<section class="min-h-screen">
    <div class="flex flex-row items-center justify-between py-5">
        <h1 class="font-semibold text-lg">Data Diagnosa Pasien</h1>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-black">
            <thead class="text-xs text-white uppercase bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                       Nama Pasien
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Diagnosa Penyakit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Diagnosa
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($dataPasien as $dtp): ?>
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <?= $no++  ?>
                        </th>
                        <td class="px-6 py-4">
						    <!--Digunakan untuk menampilkan nilai dari kunci username dari variable array $dtp-->
                            <?= $dtp['username'] ?>
                        </td>
                        <td class="px-6 py-4">
						    <!--Digunakan untuk menampilkan nilai dari kunci id_penyakit dari variable array $dtp-->
                            <?= $dtp['nama_penyakit'] ?>
                        </td>
                        <td class="px-6 py-4">
						    <!--Digunakan untuk menampilkan nilai dari kunci waktu_penyakit dari variable array $dtp-->
                            <?= date('d F Y', strtotime($dtp['waktu_diagnosa'])) ?>

                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>

<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection(); ?>
