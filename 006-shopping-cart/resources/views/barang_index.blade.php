senarai barang....

@foreach ($barangs as $barang)
<ul>
    <li>Name: {{$barang->name}}</li>
    <li>Harga: {{$barang->harga}}</li>
    <li><a href="/barangs/beli/{{$barang->id}}">Add to cart?</a></li>
</ul>
@endforeach

<br/>

<form action="/barangs" method="POST">
    @csrf
    <input type="text" name="name">
    <input type="number" name="harga">
    <button type="submit">Submit</button>
</form>


<h1>Shopping Cart</h1>

@if ($pembelian_barangs)
    @foreach ($pembelian_barangs as $pembelian_barang)
    {{$pembelian_barang}}
    @endforeach
@endif
