<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RoleDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $roles = Role::all();
        return view('admin.roles.index')->with(['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // $this->authorize('create role');
        $permissions = Permission::all();

        return view('admin.roles.create')
            ->with('permissions', $permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function store(StoreRoleRequest $request)
    {
        try {
            $role = Role::create($request->safe()->only(['name', 'guard_name']));

            if ($request->has('permission_checkbox')) {
                $permissions = Permission::whereIn('id', $request->get('permission_checkbox'))->get();
                foreach ($permissions as $permission) {
                    $role->givePermissionTo($permission);
                }
            }

            if ($role) {
                return redirect()->route('role.index')->withSuccess('Role successfully created');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View
    {
        $role_permissions = $role->permissions;
        $permissions = Permission::all();

        return view('admin.roles.edit')->with(
            [
                'role' => $role,
                'role_permissions' => $role_permissions,
                'permissions' => $permissions,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @return RedirectResponse
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        try {
            $role->update($request->safe()->only(['name', 'guard_name']));

            if ($request->has('permission_checkbox')) {
                $permissions = Permission::whereIn('id', $request->get('permission_checkbox'))->get();
                $role->syncPermissions($permissions);
            } else {
                $role->syncPermissions();
            }

            if ($role) {
                return redirect()->route('role.index')->withSuccess('Role successfully updated');
            } else {
                return back()->withError('Something went wrong!');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): RedirectResponse
    {
        try {
            $role->syncPermissions();
            $role->delete();

            return redirect()->route('role.index')->withSuccess('Role successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('Something went wrong!');
        }
    }
}
