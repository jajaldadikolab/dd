<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Produk Menu</h2>
    </div>
    <div class="card-body">
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ url('admin/products/'. $productID .'/edit') }}">Produk Detail</a>
            <a class="nav-link" href="{{ url('admin/products/'. $productID .'/images') }}">Produk Images</a>
        </nav>
    </div>
</div>