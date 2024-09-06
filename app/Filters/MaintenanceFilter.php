<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MaintenanceFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Cek apakah mode maintenance aktif dari konfigurasi environment
        $isMaintenance = env('maintenance_mode', false);

        if (!$isMaintenance) {
            // Jika tidak dalam mode maintenance, lanjutkan eksekusi
            return;
        }

        // Cek apakah URI termasuk yang dikecualikan (misalnya, admin)
        // $uri = $request->uri->getPath();

        // $excludedUris = [
        //     'admin/*',   // Semua rute di bawah 'admin'
        //     'login',     // Rute login
        //     'api/*'      // Rute API, jika diperlukan
        // ];

        // foreach ($excludedUris as $pattern) {
        //     if (fnmatch($pattern, $uri)) {
        //         // Jika URI termasuk yang dikecualikan, izinkan akses
        //         return;
        //     }
        // }

        // // Cek apakah alamat IP termasuk yang diizinkan (misalnya, localhost)
        // $allowedIps = [
        //     '127.0.0.1',
        //     '::1', // IPv6 localhost
        //     // Tambahkan IP lain jika diperlukan
        // ];

        // $clientIp = $request->getIPAddress();

        // if (in_array($clientIp, $allowedIps)) {
        //     // Jika IP diizinkan, izinkan akses
        //     return;
        // }

        // // Opsional: Cek apakah admin sudah login
        // $session = session();
        // if ($session->has('isLoggedInAdmin') && $session->get('isLoggedInAdmin') === true) {
        //     // Jika admin sudah login, izinkan akses
        //     return;
        // }

        // // Jika dalam mode maintenance dan tidak ada pengecualian, tampilkan halaman maintenance
        // $response = service('response');
        // $response->setStatusCode(503); // Status code 503 Service Unavailable
        // $response->setHeader('Retry-After', '3600'); // (Opsional) Memberikan waktu retry dalam detik

        echo view('ViewMaintenance');
        // Hentikan eksekusi lebih lanjut
        exit;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu melakukan apa-apa setelah eksekusi
    }
}
