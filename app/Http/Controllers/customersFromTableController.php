<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecustomersfromTableRequest;
use App\Http\Requests\UpdatecustomersfromTableRequest;
use App\Repositories\customersfromTableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class customersFromTableController extends AppBaseController
{
    /** @var customersfromTableRepository $customersFromTableRepository*/
    private $customersFromTableRepository;

    public function __construct(customersfromTableRepository $customersFromTableRepo)
    {
        $this->customersFromTableRepository = $customersFromTableRepo;
    }

    /**
     * Display a listing of the customersfromTable.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $customersFromTables = $this->customersFromTableRepository->all();

        return view('customersfrom_tables.index')
            ->with('customersFromTables', $customersFromTables);
    }

    /**
     * Show the form for creating a new customersfromTable.
     *
     * @return Response
     */
    public function create()
    {
        return view('customersfrom_tables.create');
    }

    /**
     * Store a newly created customersfromTable in storage.
     *
     * @param CreatecustomersfromTableRequest $request
     *
     * @return Response
     */
    public function store(CreatecustomersfromTableRequest $request)
    {
        $input = $request->all();

        $customersFromTable = $this->customersFromTableRepository->create($input);

        Flash::success('CustomersFrom Table saved successfully.');

        return redirect(route('customersFromTables.index'));
    }

    /**
     * Display the specified customersfromTable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customersFromTable = $this->customersFromTableRepository->find($id);

        if (empty($customersFromTable)) {
            Flash::error('CustomersFrom Table not found');

            return redirect(route('customersFromTables.index'));
        }

        return view('customersfrom_tables.show')->with('customersFromTable', $customersFromTable);
    }

    /**
     * Show the form for editing the specified customersfromTable.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customersFromTable = $this->customersFromTableRepository->find($id);

        if (empty($customersFromTable)) {
            Flash::error('CustomersFrom Table not found');

            return redirect(route('customersFromTables.index'));
        }

        return view('customersfrom_tables.edit')->with('customersFromTable', $customersFromTable);
    }

    /**
     * Update the specified customersfromTable in storage.
     *
     * @param int $id
     * @param UpdatecustomersfromTableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecustomersfromTableRequest $request)
    {
        $customersFromTable = $this->customersFromTableRepository->find($id);

        if (empty($customersFromTable)) {
            Flash::error('CustomersFrom Table not found');

            return redirect(route('customersFromTables.index'));
        }

        $customersFromTable = $this->customersFromTableRepository->update($request->all(), $id);

        Flash::success('CustomersFrom Table updated successfully.');

        return redirect(route('customersFromTables.index'));
    }

    /**
     * Remove the specified customersfromTable from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customersFromTable = $this->customersFromTableRepository->find($id);

        if (empty($customersFromTable)) {
            Flash::error('CustomersFrom Table not found');

            return redirect(route('customersFromTables.index'));
        }

        $this->customersFromTableRepository->delete($id);

        Flash::success('CustomersFrom Table deleted successfully.');

        return redirect(route('customersFromTables.index'));
    }
}
