# API KODE POS INDONESIA
API dibuat dengan [https://strapi.com/](Strapi), dan data diperoleh dari [`https://github.com/ArrayAccess/Indonesia-Postal-And-Area`]() dan di parsing ulang dengan PHP.

## List Provinsi
Endpoint : [`https://api-kodepos.rendrian.dev/api/provinces`]()

#### Response
```json
{
  "data": [
    {
      "id": 11,
      "attributes": {
        "name": "ACEH",
        "slug": "aceh",
        "lat": 4.0405070151375,
        "long": 96.649002928244,
        "createdAt": "2022-08-17T17:35:07.898Z",
        "updatedAt": "2022-08-17T17:35:07.898Z",
        "postal": [
          "20000",
          "23000",
          "24000"
        ]
      }
    }
  ],
  "meta": {
    "pagination": {
      "page": 1,
      "pageSize": 1,
      "pageCount": 34,
      "total": 34
    }
  }
}
```

## List Kota
Endpoint : [`https://api-kodepos.rendrian.dev/api/cities`]()


#### Response
```
```

## List Kabupaten
Endpoint : [`https://api-kodepos.rendrian.dev/api/districts`]()

## List Kecamatan
Endpoint : [`https://api-kodepos.rendrian.dev/api/villages`]()

