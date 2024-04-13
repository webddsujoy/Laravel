<?php

namespace App\Http\Controllers\API;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CompanyController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $perPage = $request->has('per_page') ? $request->per_page : 25;
            $companies = Company::orderBy('id', 'desc');
            if (!empty($request->search)) {
                $companies->where('id', $request->search)
                    ->orWhere('name', 'LIKE', "$request->search%")
                    ->orWhere('email', 'LIKE', "$request->search%")
                    ->orWhere('phone', 'LIKE', "$request->search%")
                    ->orWhere('address', 'LIKE', "$request->search%")
                    ->orWhere('description', 'LIKE', "$request->search%");
            }
            $companies = $companies->paginate($perPage);
            return $this->sendResponse($companies, 'Company List.');
        } catch (\Exception $e) {
            Log::debug([
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'message' => $e->getMessage()
            ]);

            return $this->sendError('Something went wrong!', $e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:companies,name',
            'address' => 'required',
            'city_id' => 'nullable|exists:cities,id',
            'state_id' => 'nullable|exists:states,id',
            'country_id' => 'nullable|exists:countries,id',
            'post_code' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
            'logo' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), $validator->errors());
        }

        try {
            $company = new Company();
            $company->name = $request->name;
            $company->address = $request->address;
            $company->city_id = $request->city_id;
            $company->state_id = $request->state_id;
            $company->country_id = $request->country_id;
            $company->post_code = $request->post_code;
            $company->phone = $request->phone;
            $company->email = $request->email;
            $company->logo = $request->logo;
            $company->description = $request->description;
            $company->website = $request->website;

            if ($company->save())
                return $this->sendResponse([], 'Company created successfully!');

            return $this->sendError("Unable to create Company.");
        } catch (\Exception $e) {
            Log::debug([
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'message' => $e->getMessage()
            ]);

            return $this->sendError('Something went wrong!', $e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return $this->sendResponse($company, 'Company fetched successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:companies,name,' . $company->id,
            'address' => 'required',
            'city_id' => 'nullable|exists:cities,id',
            'state_id' => 'nullable|exists:states,id',
            'country_id' => 'nullable|exists:countries,id',
            'post_code' => 'nullable',
            'phone' => 'required',
            'email' => 'required|email',
            'logo' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors()->first(), $validator->errors());
        }

        try {
            $company->name = $request->name;
            $company->address = $request->address;
            $company->city_id = $request->city_id;
            $company->state_id = $request->state_id;
            $company->country_id = $request->country_id;
            $company->post_code = $request->post_code;
            $company->phone = $request->phone;
            $company->email = $request->email;
            $company->logo = $request->logo;
            $company->description = $request->description;
            $company->website = $request->website;

            if ($company->save())
                return $this->sendResponse([], 'Company updated successfully!');

            return $this->sendError("Unable to update Company.");
        } catch (\Exception $e) {
            Log::debug([
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'message' => $e->getMessage()
            ]);

            return $this->sendError('Something went wrong!', $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        if ($company->delete())
            return $this->sendResponse([], 'Company deleted successfully!');

        return $this->sendError("Unable to delete Company.");
    }
}
