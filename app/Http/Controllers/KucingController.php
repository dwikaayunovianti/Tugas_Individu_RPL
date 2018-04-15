<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKucingRequest;
use App\Http\Requests\UpdateKucingRequest;
use App\Repositories\KucingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class KucingController extends AppBaseController
{
    /** @var  KucingRepository */
    private $kucingRepository;

    public function __construct(KucingRepository $kucingRepo)
    {
        $this->kucingRepository = $kucingRepo;
    }

    /**
     * Display a listing of the Kucing.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->kucingRepository->pushCriteria(new RequestCriteria($request));
        $kucings = $this->kucingRepository->all();

        return view('kucings.index')
            ->with('kucings', $kucings);
    }

    /**
     * Show the form for creating a new Kucing.
     *
     * @return Response
     */
    public function create()
    {
        return view('kucings.create');
    }

    /**
     * Store a newly created Kucing in storage.
     *
     * @param CreateKucingRequest $request
     *
     * @return Response
     */
    public function store(CreateKucingRequest $request)
    {
        $input = $request->all();

        $kucing = $this->kucingRepository->create($input);

        Flash::success('Kucing saved successfully.');

        return redirect(route('kucings.index'));
    }

    /**
     * Display the specified Kucing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $kucing = $this->kucingRepository->findWithoutFail($id);

        if (empty($kucing)) {
            Flash::error('Kucing not found');

            return redirect(route('kucings.index'));
        }

        return view('kucings.show')->with('kucing', $kucing);
    }

    /**
     * Show the form for editing the specified Kucing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $kucing = $this->kucingRepository->findWithoutFail($id);

        if (empty($kucing)) {
            Flash::error('Kucing not found');

            return redirect(route('kucings.index'));
        }

        return view('kucings.edit')->with('kucing', $kucing);
    }

    /**
     * Update the specified Kucing in storage.
     *
     * @param  int              $id
     * @param UpdateKucingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKucingRequest $request)
    {
        $kucing = $this->kucingRepository->findWithoutFail($id);

        if (empty($kucing)) {
            Flash::error('Kucing not found');

            return redirect(route('kucings.index'));
        }

        $kucing = $this->kucingRepository->update($request->all(), $id);

        Flash::success('Kucing updated successfully.');

        return redirect(route('kucings.index'));
    }

    /**
     * Remove the specified Kucing from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $kucing = $this->kucingRepository->findWithoutFail($id);

        if (empty($kucing)) {
            Flash::error('Kucing not found');

            return redirect(route('kucings.index'));
        }

        $this->kucingRepository->delete($id);

        Flash::success('Kucing deleted successfully.');

        return redirect(route('kucings.index'));
    }
}
