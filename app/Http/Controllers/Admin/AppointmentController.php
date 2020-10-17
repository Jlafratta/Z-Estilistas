<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Psy\CodeCleaner\ReturnTypePass;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $appointments = Appointment::with(['products', 'user'])->orderBy('date', 'DESC')->get();
        //dd($dailyDates);
        return view('admin.appointment.list')
            ->with(['title' => APPOINTMENT_TITLE,
            'appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($errorMsg = null)
    {
        $clients = Role::find(1)->users()->orderBy('name', 'ASC')->get();
        $services = Product::orderBy('type_id', 'ASC')->where('type_id', '=', 1)->orWhere('type_id', '=', 2)->get();
        return view('admin.appointment.create')
            ->with(['title' => NEW_APPOINTMENT_TITLE,
            'services' => $services,
            'clients' => $clients,
            'errorMsg' => $errorMsg]);
    }

    /**
     * Show the form for creating a new Appointment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chooseTime(Request $request)
    {
        if($request->services != null){

            $client = User::find($request->client);
            $date = date("d-m-Y", strtotime($request->date));
            $date = str_replace('-', '/', $date);
            $total = 0;
            $totalTime = '00:00:00';
            $services = array();

            foreach($request->services as $service){
                $prod = Product::find($service);
                array_push($services, $prod);
                $total += $prod->price;
                // $totalTime = $this->addTime($totalTime, $prod->time);
                $totalTime = Appointment::addTime($totalTime, $prod->time);
            }

            // $dailyDates = $this->getAppointTimes($request->date);
            $dailyDates = Appointment::getAppointTimes($request->date);

            return view('admin.appointment.chooseTime')
            ->with(['title' => NEW_APPOINTMENT_TITLE,
                    'client' => $client,
                    'date' => $date,
                    'services' => $services,
                    'total' => $total,
                    'totalTime' => $totalTime,
                    'dailyDates' => $dailyDates]);

        }else {
            session()->flash('errorMsg', 'Debe seleccionar al menos un servicio');
            return redirect()->back();
        }
    }

        /**
     * Show the form for creating a new Appointment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function chooseTimeTransit(Request $request)
    {
        if($request->services != null){

            $client = new User();
            $client->name = $request->client;
            $client->id = null;

            $date = date("d-m-Y", strtotime($request->date));
            $date = str_replace('-', '/', $date);
            $total = 0;
            $totalTime = '00:00:00';
            $services = array();

            foreach($request->services as $service){
                $prod = Product::find($service);
                array_push($services, $prod);
                $total += $prod->price;
                // $totalTime = $this->addTime($totalTime, $prod->time);
                $totalTime = Appointment::addTime($totalTime, $prod->time);
            }

            // $dailyDates = $this->getAppointTimes($request->date);
            $dailyDates = Appointment::getAppointTimes($request->date);

            return view('admin.appointment.chooseTime')
            ->with(['title' => NEW_APPOINTMENT_TITLE,
                    'client' => $client,
                    'date' => $date,
                    'services' => $services,
                    'total' => $total,
                    'totalTime' => $totalTime,
                    'dailyDates' => $dailyDates]);

        }else {
            session()->flash('errorMsg', 'Debe seleccionar al menos un servicio');
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientId = $request->clientId;
        $clientName = $request->clientName;
        $price = $request->totalPrice;
        $services = $request->services;
        $date = $this->explodeDate($request->date, $request->time);
        
        $appoint = Appointment::createAndSave($price, $date, $clientId, $clientName, $services);
        
        // FALTA RETURN
        return $this->show($appoint);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $appointment->date = date('d/m/Y - h:i', strtotime($appointment->date));
        return view('admin.appointment.show')
        ->with(['title' => 'Turno creado | Z',
                'appointment' => $appointment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $appointment = Appointment::where('id', $id)->first();
        return view('admin.appointment.edit')->with(['title' => 'Turno creado | Z','appointment' => $appointment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        return "asdasd";
    }

    public function finish($id)
    {
        $appoint = Appointment::where('id', $id)->first();
        $appoint->active = 0;
        $appoint->update();
        User::updateLastVisit($appoint->user->id, $appoint->date);
        
        return redirect('dashboard/turnos/'.$appoint->id.'/edit')
                ->with(['title' => 'Turno creado | Z',
                        'appointment' => $appoint]);
    }

    public function daily()
    {
        $date = explode(" ", Carbon::now());
        $dailyDates = Appointment::getAppointTimes($date[0]);

        return view('admin.appointment.daily')
            ->with(['title' => DAILY_APPOINTMENT_TITLE,
            'dailyDates' => $dailyDates,
            'actualDate' => $date[0]]);
    }

    /**
     * Extras
     */

    public function explodeDate($date, $time){
        $date = explode("/", $date);
        $date = $date[2] . '-' . $date[1] . '-' . $date[0];
        $date = Carbon::createFromTimeString($date. ' '. $time);
        return $date;
    }
}
