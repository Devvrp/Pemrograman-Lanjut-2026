## 6.4. Latihan Rumah: Perangkat

Kembangkan salinan script `56.setter_getter_exercise.php` dengan ketentuan berikut:

1. Pertahankan property `private` dan getter `public`.
2. Pertahankan pengisian kode produk melalui constructor dan setter `private`.
3. Pastikan kode produk tepat **tiga huruf kapital dan tiga angka**, tanpa karakter tambahan.
4. Pertahankan aturan stok **integer positif**.
5. Uji kode produk berikut secara terpisah:
   - `ABC123`
   - `abc123`
   - `AB123`
   - `123ABC`
6. Dengan kode produk valid, uji stok berikut secara terpisah:
   - `1`
   - `0`
   - `-1`
   - `'5'`
   - `5.5`
7. Catat hasil aktual dan alasan setiap input **diterima atau ditolak**.

### Output

- File PHP hasil pengembangan.
- Catatan hasil pengujian.
- Alasan penerimaan atau penolakan setiap input.

---

## 6.5. Latihan Rumah: Class Mahasiswa

Buat class `Mahasiswa` dengan property:

```php
private $nim;
private $nama;
private $ipk;