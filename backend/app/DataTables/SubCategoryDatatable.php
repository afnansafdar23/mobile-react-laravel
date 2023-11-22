<?php

namespace App\DataTables;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SubCategoryDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('child_category_id', function (SubCategory $subCategory) {
                return $subCategory->childCategory->name;
            })
            ->addColumn('image', function (SubCategory $subCategory) {
                return '<img src="' . asset($subCategory->getFirstMediaUrl('subCategory.image')) . '" class="image-input-wrapper rounded-circle w-50px h-50px" alt="alt text">';
            })
            ->addColumn('action', 'admin.sub-category.datatables_actions')
            ->rawColumns(['image', 'edit', 'delete', 'action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\User  $model
     */
    public function query(SubCategory $model): QueryBuilder
    {
        return $model->newQuery()->select('id', 'name', 'child_category_id');
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('sub-category-table')
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
            Column::make('id'),
            Column::make('image'),
            Column::make('name'),
            Column::make('child_category_id')->title('Child Category'),
        ];

        if (Auth::user()->can('sub.category.edit') || Auth::user()->can('sub.category.delete')) {
            $columns = array_merge($columns, [Column::make('action')]);
        }

        return $columns;
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'SubCategory_' . date('YmdHis');
    }
}
