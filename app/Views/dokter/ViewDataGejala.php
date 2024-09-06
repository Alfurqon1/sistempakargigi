<?= $this->extend('templates/sidebar');?>
<?= $this->section('content'); ?>

    <div class="flex flex-row items-center justify-between py-5">
        <h1 class="font-semibold text-lg">Data Gejala</h1>
        <a href="<?= base_url('/dokter/tambahGejala') ?>" class="bg-primary hover:bg-primary_hover text-white text-lg rounded-full py-4 px-7">Tambah Gejala</a>
    </div>

<!-- alert -->
    <?php if (session()->getFlashdata('success')): ?>
        <div id="validation-alert" class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg  bg-green-200" >
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div>
                <?= session()->getFlashdata('success')?>
            </div>
        </div>
    <?php endif; ?>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-black">
        <thead class="text-xs text-white uppercase bg-primary">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Id Gejala
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Gejala
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($gejala as $gja)  : ?>

            <tr class="bg-white border-b">
                
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <?= $no++  ?>
                </th>

                <td class="px-6 py-4">
                    <?= $gja['id_gejala'] ?>
                </td>

                <td class="px-6 py-4">
                    <?= $gja['nama_gejala'] ?>
                </td>
                <td class="flex flex-row px-6 py-4 gap-x-4">
                    <form action="<?= base_url('/dokter/deleteGejala' . $gja['id_gejala'])?>" method="POST">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data gejala ?')"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#eb2e21" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1"/></svg> </button>
                    </form>
                   <a href="<?= base_url('/dokter/editGejala/' . $gja['id_gejala'])?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><path fill="currentColor" d="m402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0m162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2M384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5"/></svg></a>
                </td>
            </tr>

            <?php endforeach ?>

        </tbody>
    </table>
</div>

<script src="<?= base_url()?>js/alert.js"></script>

<?= $this->endSection(); ?>
