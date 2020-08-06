<?php

namespace App\Http\Controllers;

use App\Http\Requests\RemovePackageDelete;
use App\Http\Requests\StorePackagePost;
use App\Http\Requests\UpdatePackagePatch;
use App\Http\Requests\UpdatePackagePut;
use App\Package;
use function _\difference;
use Illuminate\Http\Request;

class PackageController extends Controller
{

 
    public function index(Request $request)
    {
        $packages = Package::all();
        return [
            "success" => true,
            "data" => $packages,
        ];
    }

    public function get(RemovePackageDelete $request, $id)
    {
        $package = Package::find($id);
        return [
            "success" => true,
            "data" => $package,
        ];
    }


    public function store(StorePackagePost $request)
    {
        $data = $request->all();
        Package::create($data);
        return [
            "success" => true,
            "message" => "Success create",
        ];
    }

    public function update(UpdatePackagePut $request, $id)
    {

        $data = $request->only(Package::$attr);

        $requestAttr = array_keys($data);
        $unsetKey = difference(Package::$attr, $requestAttr);

        if (count($unsetKey) > 0) {
            Package::find($id)->unset($unsetKey);
        }

        Package::where("transaction_id", $id)->update($data, ['upsert' => false]);

        return [
            "success" => true,
            "message" => "Success update",
        ];

    }

    public function remove(RemovePackageDelete $request, $id)
    {
        Package::destroy($id);
        return [
            "success" => true,
            "message" => "Success delete",
        ];
    }

    public function updatePatch(UpdatePackagePatch $request, $id)
    {
        $data = $request->only(Package::$attr);
        Package::where("transaction_id", $id)->update($data, ['upsert' => false]);
        return [
            "success" => true,
            "message" => "Success patch",
        ];
    }
}
