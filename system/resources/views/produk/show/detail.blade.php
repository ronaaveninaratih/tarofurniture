<p>
    {{$produk->harga}} |
    Stok : {{$produk->stok}} | 
    Berat : {{$produk->berat}} kg |
    Seller : {{$produk->seller->user_name}} |
    Tanggal Produksi : {{$produk->created_at->format("d M Y")}}
</p>