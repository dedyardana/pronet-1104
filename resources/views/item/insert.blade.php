@extends('layouts.app')

@section('title','Item')

@section('page-title','Item')

@section('dashboard-content')
    <h1>Add Item</h1>
        <form action="{{route('item.store')}}" method="Post">
            @CSRF
              <div class="form-group">
                <label for="NamaItem">Nama Item</label>
                <input type="text" class="form-control" id="NamaItem" name="name">
              </div>

              <div class="form-group">
                <label for="Harga">Harga</label>
                <input type="number" class="form-control" id="Harga" name="price">
              </div>

              <div class="form-group">
                <label for="Stock">Stock</label>
                <input type="number" class="form-control" id="Stock" name="stock">
              </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
@endsection
