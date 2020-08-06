<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class Package extends Model
{

    protected $primaryKey = "transaction_id";

    protected $fillable = [
        'transaction_id',
        'customer_name',
        'customer_code',
        'transaction_amount',
        'transaction_discount',
        'transaction_additional_field',
        'transaction_payment_type',
        'transaction_state',
        'transaction_code',
        'transaction_order',
        'location_id',
        'transaction_payment_type_name',
        'transaction_cash_amount',
        'transaction_cash_change',
        'connote_id',
        'custom_field',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->transaction_id = Uuid::uuid4()->toString();
            } catch (UnsatisfiedDependencyException $e) {
                abort(500, $e->getMessage());
            }
        });
    }

    public static $attr = [
        'customer_name',
        'customer_code',
        'transaction_amount',
        'transaction_discount',
        'transaction_additional_field',
        'transaction_payment_type',
        'transaction_state',
        'transaction_code',
        'transaction_order',
        'location_id',
        'transaction_payment_type_name',
        'transaction_cash_amount',
        'transaction_cash_change',
        'connote_id',
        'custom_field',
    ];

}
