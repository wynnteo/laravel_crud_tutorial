@extends('layouts.master')

@section('title')
    PRODUCT | SGWEBFREELANCER
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Product</h4>
            </div>
            <div class="card-body">
                <div>
                    <table class="table" id="product_table">
                        <thead class=" text-primary">
                            <th>
                                Title
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Created At
                            </th>
                       
                            <th class="text-right">

                            </th>
                        </thead>
                        <tbody>
                            @foreach ($products as $row)
                                <tr>
                                    <td>
                                        {{ $row->title }}
                                    </td>
                                    <td>
                                        {{ $row->price }}
                                    </td>
                          
                                    <td>
                                        {{ $row->created_at }}
                                    </td>
                                    <td class="text-right action_buttons">
                                        <form id="delete_form" action="{{ route('product.destroy',$row->id) }}" method="POST">
                                            <a href="{{ route('product.create', $row->id) }}" title="Create Product">
                                                <i class="material-icons">preview</i>
                                            </a>

                                            <a href="{{ route('product.edit', $row->id) }}" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <a href="javascript:void(0);" onclick="document.getElementById('delete_form').submit();">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')

@endsection

        