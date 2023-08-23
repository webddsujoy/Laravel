<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionsController extends BaseController
{
    public function getPermissions(Request $request)
    {
        try {
            $permissions = Permission::get();
            $data = [];
            foreach ($permissions as $key => $permission) {
                $data[$permission->permission_group][] = $permission;
            }
            return $this->sendResponse($data, 'Permission list');
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong!', $e);
        }
    }
}
