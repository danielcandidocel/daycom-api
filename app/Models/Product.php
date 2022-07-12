<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id',
        'simcard1_operator_id',
        'simcard1_num',
        'simcard1_ICCID',
        'simcard2_operator_id',
        'simcard2_num',
        'simcard2_ICCID',
        'dealer_id',
        'cod',
        'descricao',
        'name_id',
        'type_id',
        'rf_status_id',
        'acelerometro_status_id',
        'standby_tempo',
        'gps_tempo',
        'batery_limit_id',
        'firmware_num',
        'status_id',
        'instel_marker_id',
        'config_cod',
        'config_cod_dt',
        'gps_id',
        'latitude',
        'longitude',
        'tipoPacote',
        'velocidade',
        'logradouro_google',
        'get_address',
        'bateria',
        'charging',
        'bateria_range',
        'sinal_range',
        'cerca_id',
        'gps_status_id',
        'dtServer',
        'ICCID',
        'IMEI',
        'send_ok',
        'rf_cod',
        'batPorcent',
        'placa_veiculo',
        'status'
    ];
}
