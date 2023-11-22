<?php

namespace App\DataTables;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ProductDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('sub_category_id', function (Product $product) {
                return $product->subCategory->name;
            })
            ->addColumn('availability', function (Product $product) {
                if ($product->availability == 'on') {
                    return 'Yes';
                } else {
                    return 'No';
                }
            })
            ->addColumn('image', function (Product $product) {
                return '<img src="' . asset($product->getFirstMediaUrl('product.image')) . '" class="image-input-wrapper rounded-circle w-50px h-50px" alt="alt text">';
            })
            ->addColumn('action', 'admin.product.datatables_actions')
            ->rawColumns(['image', 'edit', 'delete', 'action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Product $model): queryBuilder
    {
        return $model->with('subCategory')->newQuery()->select('id', 'part_number', 'name', 'sub_category_id', 'availability', 'color', 'manufacturer');
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('product-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->parameters(
                config('datatables-buttons.parameters')
            );
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        $columns = [
            Column::make('part_number'),
            Column::make('image'),
            Column::make('name'),
            Column::make('availability'),
            Column::make('color'),
            Column::make('manufacturer'),
            Column::make('sub_category_id')->title('Category'),
        ];

        if (Auth::user()->can('product.edit') || Auth::user()->can('product.delete')) {
            $columns = array_merge($columns, [Column::make('action')]);
        }

        return $columns;
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'product_' . date('YmdHis');
    }
}
