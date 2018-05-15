<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecommentarioRequest;
use App\Http\Requests\UpdatecommentarioRequest;
use App\Repositories\commentarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\hotel;
use App\User;
use Illuminate\Support\Facades\DB;

class hotelInfoController extends AppBaseController
{
    /** @var  commentarioRepository */
    private $commentarioRepository;

    public function __construct(commentarioRepository $commentarioRepo)
    {
        $this->commentarioRepository = $commentarioRepo;
    }

    /**
     * Display a listing of the commentario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->commentarioRepository->pushCriteria(new RequestCriteria($request));
        $commentarios = $this->commentarioRepository->all();

        return view('commentarios.index')
            ->with('commentarios', $commentarios);
    }

    /**
     * Store a newly created commentario in storage.
     *
     * @param CreatecommentarioRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mensaje' => 'required',
        ]);

        $estrellas = $request -> estrellas;
        $mensaje = $request -> mensaje;
        $idHotel = $request -> hotel_inv;
        $idUser = $request -> usr_inv;
        $hotel = hotel::find($idHotel);
        $calificacion = 0;
        if($estrellas === '1'){
            $calificacion = 1;
        }
        else if($estrellas === '2'){
            $calificacion = 2;
        }
        else if($estrellas === '3'){
            $calificacion = 3;
        }
        else if($estrellas === '4'){
            $calificacion = 4;
        }
        else{
            $calificacion = 5;
        }
        $numComentarios = DB::table('commentarios')->where('id_hotel', $idHotel)->count();
        if($numComentarios === 0){
            $estrellas = $hotel -> estrellas;
            $nuevasEstrellas = ($estrellas + $calificacion)/2;
            $hotel -> estrellas = $nuevasEstrellas;
            $hotel -> save();
        }else{
            $estrellas = $hotel -> estrellas;
            $nuevasEstrellas = ($estrellas + $calificacion)/2;
            $hotel -> estrellas = $nuevasEstrellas;
            $hotel -> save();
        }
        Comentario::create([
            'calificacion' => $calificacion,
            'mensaje' => $mensaje,
            'id_hotel' => $idHotel,
            'id_usuario' => $idUser,
        ]);

        $comentarios = DB::table('commentarios')->where('id_hotel', $idHotel)->orderBy('id', 'DESC')->paginate(5);
        foreach ($comentarios as $comentario){
            $comentario -> correo = User::find($comentario -> id_usuario) -> email;
        }
        return view('display.hotelInfo')->with('hotel', $hotel)->with('comentarios', $comentarios);
    }

    /**
     * Display the specified commentario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        $comentarios = DB::table('commentarios')->where('id_hotel', $id)->orderBy('id', 'DESC')->paginate(5);
        foreach ($comentarios as $comentario){
            $comentario -> email = User::find($comentario -> id_usuario) -> email;
        }
        return view('display.hotelInfo')->with('hotel', $hotel)->with('comentarios', $comentarios);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showComments($id)
    {
        $hotel = Hotel::find($id);
        $comentarios = DB::table('commentarios')->where('id_hotel', $id)->orderBy('id', 'DESC')->paginate(5);
        foreach ($comentarios as $comentario){
            $comentario -> email = User::find($comentario -> id_usuario) -> email;
        }
        return view('display.displayComments')->with('hotel', $hotel)->with('comentarios', $comentarios);
    }

}