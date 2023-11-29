<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $users = User::all();
        // $roles = Role::with('users');
        return view('admin.users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::all();

        return view('admin.users.create')
            ->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        // $imageName = time() . '.' . $request->avatar->extension();

        try {
            // $avatar = 'images/user_images/' . $imageName;
            $user = User::create($request->validated());

            foreach ($request->input('image') as $uploadedFile) {
                $user->addMedia(storage_path('tmp/uploads/' . $uploadedFile))->toMediaCollection('user.image');
            }
            if ($request->has('roles')) {
                $roles = Role::whereIn('id', $request->roles)->get();
                foreach ($roles as $role) {
                    $user->assignRole($role);
                }
            }
            if ($user->save()) {
                return redirect()->route('user.index');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        $roles = Role::all();

        return view('admin.users.edit')
            ->with(
                ['user' => $user, 'roles' => $roles]
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $validatedUser = $request->validated();

        try {
            $user->update([
                'name' => $validatedUser['name'],
                'mobile_number' => $validatedUser['mobile_number'],
            ]);
            // Fetch the existing media collection
            $mediaCollection = $user->getMedia('user.image');

            // Handle media uploads
            foreach ($request->input('image') as $uploadedFile) {
                $user->addMedia(storage_path('tmp/uploads/' . $uploadedFile))->toMediaCollection('user.image');
            }

            // Remove old media if needed (optional)
            $mediaCollection->each(function ($media) use ($request) {
                if (!in_array($media->file_name, $request->input('image'), true)) {
                    $media->delete();
                }
            });

            if ($request->has('roles')) {
                $roles = Role::whereIn('id', $request->roles)->get();
                $user->syncRoles($roles);
            } else {
                $user->syncRoles();
            }

            if ($user->save()) {
                return redirect()->route('user.index');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        try {
            $user->syncRoles();
            $user->delete();

            return redirect()->back()->withSuccess('User successfully deleted');
        } catch (Exception $ex) {
            return back()->withError('User not deleted');
        }
    }
}
