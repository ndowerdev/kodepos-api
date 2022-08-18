# API KODE POS INDONESIA
API dibuat dengan [https://strapi.com/](Strapi), dan data diperoleh dari [`https://github.com/ArrayAccess/Indonesia-Postal-And-Area`]() dan di parsing ulang dengan PHP.

## Daftar Endpoint
| Endpoint                                       | Deskripsi                      | Method |
| ---------------------------------------------- | -------------------------------  | ------ |
| [`/provinces`](https://api-kodepos.rendrian.dev/api/provinces) | Ambil semua data Provinsi | `GET`  |
| [`/provinces/{id}`](https://api-kodepos.rendrian.dev/api/provinces/{id}) | Ambil data Provinsi berdasarkan ID | `GET`  |
| [`/cities`](https://api-kodepos.rendrian.dev/api/cities) | Ambil semua data Kota | `GET`  |
| [`/cities/{id}`](https://api-kodepos.rendrian.dev/api/cities/{id}) | Ambil data kota bersadarkan ID | `GET`  |
| [`/districts`](https://api-kodepos.rendrian.dev/api/districts) | Ambil semua data Kabupaten | `GET`  |
| [`/districts/{id}`](https://api-kodepos.rendrian.dev/api/districts/{id}) | Ambil data kabupaten berdasarkan ID | `GET`  |
| [`/villages`](https://api-kodepos.rendrian.dev/api/villages) | Ambil semua data kecamatan | `GET`  |
| [`/villages/{od}`](https://api-kodepos.rendrian.dev/api/villages/{id}) | Ambil data Kecamatan berdasarkan ID | `GET`  |


## API Paramenters

Untuk parameter API yang bisa digunakan silahkan merujuk pada [Strapi API Paramenters](https://docs.strapi.io/developer-docs/latest/developer-resources/database-apis-reference/rest/api-parameters.html)



