<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCita_destalleRequest;
use App\Http\Requests\UpdateCita_destalleRequest;
use App\Repositories\Cita_destalleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Cita_destalleController extends AppBaseController
{
    /** @var  Cita_destalleRepository */
    private $citaDestalleRepository;

    public function __construct(Cita_destalleRepository $citaDestalleRepo)
    {
        $this->citaDestalleRepository = $citaDestalleRepo;
    }

    /**
     * Display a listing of the Cita_destalle.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $citaDestalles = $this->citaDestalleRepository->all();

        return view('cita_destalles.index')
            ->with('citaDestalles', $citaDestalles);
    }

    /**
     * Show the form for creating a new Cita_destalle.
     *
     * @return Response
     */
    public function create()
    {
        return view('cita_destalles.create');
    }

    /**
     * Store a newly created Cita_destalle in storage.
     *
     * @param CreateCita_destalleRequest $request
     *
     * @return Response
     */
    public function store(CreateCita_destalleRequest $request)
    {
        $input = $request->all();

        $citaDestalle = $this->citaDestalleRepository->create($input);

        Flash::success('Cita Destalle saved successfully.');

        return redirect(route('citaDestalles.index'));
    }

    /**
     * Display the specified Cita_destalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $citaDestalle = $this->citaDestalleRepository->find($id);

        if (empty($citaDestalle)) {
            Flash::error('Cita Destalle not found');

            return redirect(route('citaDestalles.index'));
        }

        return view('cita_destalles.show')->with('citaDestalle', $citaDestalle);
    }

    /**
     * Show the form for editing the specified Cita_destalle.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $citaDestalle = $this->citaDestalleRepository->find($id);

        if (empty($citaDestalle)) {
            Flash::error('Cita Destalle not found');

            return redirect(route('citaDestalles.index'));
        }

        return view('cita_destalles.edit')->with('citaDestalle', $citaDestalle);
    }

    /**
     * Update the specified Cita_destalle in storage.
     *
     * @param int $id
     * @param UpdateCita_destalleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCita_destalleRequest $request)
    {
        $citaDestalle = $this->citaDestalleRepository->find($id);

        if (empty($citaDestalle)) {
            Flash::error('Cita Destalle not found');

            return redirect(route('citaDestalles.index'));
        }

        $citaDestalle = $this->citaDestalleRepository->update($request->all(), $id);

        Flash::success('Cita Destalle updated successfully.');

        return redirect(route('citaDestalles.index'));
    }

    /**
     * Remove the specified Cita_destalle from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $citaDestalle = $this->citaDestalleRepository->find($id);

        if (empty($citaDestalle)) {
            Flash::error('Cita Destalle not found');

            return redirect(route('citaDestalles.index'));
        }

        $this->citaDestalleRepository->delete($id);

        Flash::success('Cita Destalle deleted successfully.');

        return redirect(route('citaDestalles.index'));
    }
}
