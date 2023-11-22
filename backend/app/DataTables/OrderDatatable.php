<?php

namespace App\DataTables;

use App\Models\Order;
use App\Models\ParentCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class OrderDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'admin.order.datatables_actions')
            ->rawColumns(['edit', 'delete', 'action'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\User  $model
     */
    public function query(Order $model): QueryBuilder
    {
        return $model->newQuery()->select('id', 'name', 'order_number', 'user_id', 'phone', 'address', 'country', 'city', 'postal_code');
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('order-table')
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
            Column::make('order_number')->title('Order Number'),
            Column::make('name')->title('Customer Name'),
            Column::make('phone'),
            Column::make('address'),
            Column::make('postal_code')->title('Postal Code'),
        ];

        if (Auth::user()->can('parent.category.edit') || Auth::user()->can('parent.category.delete')) {
            $columns = array_merge($columns, [Column::make('action')]);
        }

        return $columns;
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'order_' . date('YmdHis');
    }
}
