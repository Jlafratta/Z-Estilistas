<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    public function __construct()
    {
        
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
    ];

    public static function getByDate($date)
    {
        return Appointment::orderBy('date', 'ASC')->where('date', 'LIKE', '%'.$date.'%')->get();
    }


    /**
    * Relationship methods
    */
    public function products()
    {
    	return $this->belongsToMany('App\Models\Product');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


    /**
     * Extras
     */

    public static function getAppointTimes($date)
    {
        $appointments = array();
        $actualTime = INIT_TIME;
        $dailyDates = Appointment::getByDate($date);    // Traigo las reservas ya hechas ese dia

        while($actualTime < FINISH_TIME){       // Cargo el array con los horarios totales
            array_push($appointments, array('time' => $actualTime));
            //$actualTime = $this->addTime($actualTime, APPOINT_INTERVAL);
            $actualTime = Appointment::addTime($actualTime, APPOINT_INTERVAL);
        }

        foreach($dailyDates as $date){
            $dateTime = explode(" ", $date->date);      // $dateTime[1] representa el horario de la reserva ya hecha
            $dateTime = explode(":", $dateTime[1]);
            $dateTime = $dateTime[0] . ':' . $dateTime[1];
            $products = $date->products()->get();                // Traigo los productos de la reserva
            $products = Appointment::getProductsArray($products);     // Transformo a array los obj para mergearlo al array de fechas
            //dd($date->user->name);
            for($i = 0; $i < count($appointments); $i++){
                if($dateTime == $appointments[$i]['time']){
                    $appointments[$i]['services'] = $products;
                    //$appointments[$i]['client'] = $date->user_name !=null ? $date->user_name : $date->user->name;
                    $appointments[$i]['client'] = $date->user_name !=null ? $date->user_name : $date->user->name;
                    $appointments[$i]['id'] = $date->id;
                    $appointments[$i]['active'] = $date->active;
                }
            }
        }

        //dd($appointments);

        return $appointments;
    }

    public static function getProductsArray($products){
        $productList = array();
        foreach($products as $product){
            array_push($productList, $product->name);
        }
        return $productList;
    }

    public static function addTime($time, $toAdd){
        $time = explode(':', $time);
        $mins = $time[1];
        $hours = $time[0];

        $toAdd = explode(':', $toAdd);
        $minsAdd = $toAdd[1];
        $hoursAdd = $toAdd[0];

        $mins += $minsAdd;
        if($mins >= 60){
            $hours++;
            $mins -= 60;
        }
        $hours += $hoursAdd;

        $mins = $mins < 10 ? '0'.$mins : $mins;

        $hours = $hours < 10 ? '0'.$hours : $hours;

        return $hours.':'.$mins;
    }

    public static function createAndSave($price, $date, $clientId, $clientName, $services){
        $appoint = new Appointment();
        $appoint->price = $price;
        $appoint->date = $date;
        $appoint->active = 1;
        
        if($clientId != null){
            $appoint->user_name = $clientName;
            $appoint->user()->associate($clientId);
            // $user = User::find($clientId);
            // $user->last_visit = $date;      // ESTO TIENE QUE SER AL FINALIZAR EL TURNO
            // $user->save();
        }else {
            $appoint->user_name = $clientName;
        }
        
        $appoint->save();
        $appoint->duration = '00:00:00';
        foreach($services as $service){
            
            $appoint->products()->attach($service);
            $appoint->duration = Appointment::addTime($appoint->duration, Product::find($service)->time);
        }
        $appoint->save();

        return $appoint;
    }

}
