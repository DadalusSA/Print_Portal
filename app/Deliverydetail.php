<?php

namespace Dadavel;

use Illuminate\Database\Eloquent\Model;

class Deliverydetail extends Model
{
    //
    protected $table = 'Project';

    protected $fillable = [
    	'clientname',
    	'jobdesc',
    	'epem_initial',
    	'engagement_code',
    	'engagement_name',
    	'delivery_date',
    	'user_id',
		];

		public function user()
    {
        return $this->belongsTo('Dadavel\User');
    }
}
