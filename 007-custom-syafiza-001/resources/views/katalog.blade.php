{{-- <div class="item">
    <h1>{{ $barang->name }}</h1>
    <button onclick="compareItem($barang->id)">Compare</button>
</div> --}}

<div class="item">
    <h1>1</h1>
    <button onclick="compareItem(1)">Compare</button>
</div>

<div class="item">
    <h1>2</h1>
    <button onclick="compareItem(2)">Compare</button>
</div>

<div class="item">
    <h1>3</h1>
    <button onclick="compareItem(3)">Compare</button>
</div>

<button onclick="makeComparison()">Make Comparison</button>

<script>

    let comparison = []

    function compareItem(id) {
        this.comparison.append(id)
    }

    function makeComparison() {
        window.location.href = 'https://url.com/comparison/' + comparison[0] + '/' + comparison[1] + '/' comparison[2];
    }
</script>