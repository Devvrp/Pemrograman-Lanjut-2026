## 6.4. Latihan Rumah

Kembangkan salinan script `56.setter_getter_exercise.php` dan buat class `Mahasiswa` dengan ketentuan berikut:

1. Pertahankan property `private` dan getter `public` pada script `Perangkat`.
2. Pertahankan pengisian kode produk melalui constructor dan setter `private`.
3. Pastikan kode produk terdiri dari tepat **tiga huruf kapital dan tiga angka**, tanpa karakter tambahan.
4. Pertahankan aturan stok berupa **integer positif**.
5. Uji kode produk `ABC123`, `abc123`, `AB123`, dan `123ABC` secara terpisah.
6. Dengan kode produk valid, uji stok `1`, `0`, `-1`, `'5'`, dan `5.5` secara terpisah.
7. Catat hasil aktual serta alasan setiap input diterima atau ditolak.
8. Buat class `Mahasiswa` dengan property:

```php
private $nim;
private $nama;
private $ipk;
```

9. Semua property Mahasiswa harus bersifat private.
10. Constructor menerima NIM, nama, dan IPK awal, kemudian melakukan validasi melalui setter.
11. NIM berupa string tidak kosong, diisi melalui setter private, dan dapat dibaca melalui getter public.
12. Nama berupa string tidak kosong dan dapat diubah melalui setter public.
13. IPK bertipe integer atau float dalam rentang 0–4, termasuk kedua batasnya, dan dapat diubah melalui setter public.
14. Input nama atau IPK yang tidak valid setelah konstruksi harus ditolak tanpa mengubah nilai sebelumnya.
15. Tampilkan pesan kesalahan dan lanjutkan eksekusi ketika perubahan nama atau IPK ditolak.
16. Input constructor yang tidak valid menghentikan script dengan pesan kesalahan.
17. Uji IPK `0`, `3.75`, `4`, `-0.1`, `4.1`, dan `"tiga"`.
18. Tunjukkan bahwa nilai IPK sebelumnya tetap tersimpan setelah perubahan yang tidak valid ditolak.

---

Output Pengumpulan
- File PHP.
- Hasil pengujian berupa screenshot.
- Catatan alasan input diterima atau ditolak.
- Penjelasan singkat mengenai pemilihan access modifier.
- Dikumpulkan sesuai dengan format yang telah ditentukan