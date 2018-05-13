<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehotelRequest;
use App\Http\Requests\UpdatehotelRequest;
use App\Repositories\hotelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class hotelController extends AppBaseController
{
    /** @var  hotelRepository */
    private $hotelRepository;

    public function __construct(hotelRepository $hotelRepo)
    {
        $this->hotelRepository = $hotelRepo;
    }

    /**
     * Display a listing of the hotel.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->hotelRepository->pushCriteria(new RequestCriteria($request));
        $hotels = $this->hotelRepository->all();

        return view('hotels.index')
            ->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new hotel.
     *
     * @return Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created hotel in storage.
     *
     * @param CreatehotelRequest $request
     *
     * @return Response
     */
    public function store(CreatehotelRequest $request)
    {
        $input = $request->all();

        $hotel = $this->hotelRepository->create($input);

        Flash::success('Hotel saved successfully.');

        return redirect(route('hotels.index'));
    }

    /**
     * Display the specified hotel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotel = $this->hotelRepository->findWithoutFail($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        return view('hotels.show')->with('hotel', $hotel);
    }

    /**
     * Show the form for editing the specified hotel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hotel = $this->hotelRepository->findWithoutFail($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        return view('hotels.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified hotel in storage.
     *
     * @param  int              $id
     * @param UpdatehotelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehotelRequest $request)
    {
        $hotel = $this->hotelRepository->findWithoutFail($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        $hotel = $this->hotelRepository->update($request->all(), $id);

        Flash::success('Hotel updated successfully.');

        return redirect(route('hotels.index'));
    }

    /**
     * Remove the specified hotel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hotel = $this->hotelRepository->findWithoutFail($id);

        if (empty($hotel)) {
            Flash::error('Hotel not found');

            return redirect(route('hotels.index'));
        }

        $this->hotelRepository->delete($id);

        Flash::success('Hotel deleted successfully.');

        return redirect(route('hotels.index'));
    }
}
